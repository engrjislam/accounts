<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('encrypt_decrypt_model');
        $this->load->library('session');
    }

    public function login()
    {
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');
        $data = array(
            'user_name' => $user_name,
            'password' => $this->encrypt_decrypt_model->encrypt($password)
        );
        $query = $this->db->where($data)->get('user');
        if ($query) {
            $res_num = $query->num_rows();
            if ($res_num > 0) {
                $msg = "Login Successful.";
                /// User Found
                $res_array = $query->row();
                $newdata = array(
                    'uid' => $res_array->id,
                    'username' => $res_array->user_name,
                    'email' => $res_array->email,
                    'fullname' => $res_array->full_name,
                    'is_admin' => $res_array->super_admin,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

                // insert login info to database
                $this->insert_login_history($newdata['uid'], $user_name, 'Y');

                redirect(base_url('index.php/dashboard'));
                exit();
            } else {
                $msg = "Login Failed.";

                // insert login info to database
                $this->insert_login_history(0, $user_name, 'N');
            }
        } else {
            $msg = "Facing Some Problem.Try Later.";

            // insert login info to database
            $this->insert_login_history(0, $user_name, 'N');
        }
        return $msg;
    }

    public function insert_login_history($user_id, $user_name, $login_status) {
        $login_data = array(
            'user_id' => $user_id,
            'user_name' => $user_name,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'login_date' => date('Y-m-d H:i:s'),
            'login_status' => $login_status
        );

        $this->db->insert('login_history', $login_data);
    }
}

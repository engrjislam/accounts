<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->_CI = &get_instance();
        $this->load->database();
        $this->load->model('users_model');
        $this->load->library('session');
        $this->load->model('encrypt_decrypt_model');
    }

    public function index()
    {
        $this->users();
    }

    public function users()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        $users = $this->session->all_userdata();
        if ($is_logged_in && $users['username'] == "superadmin") {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();
            $user_list_tmp = $this->users_model->user_list();
            $user_list = $user_list_tmp;
            foreach ($user_list_tmp as $key => $user) {
                $user_list[$key]['password'] = $this->encrypt_decrypt_model->decrypt($user['password']);
            }
            $data['user_list'] = $user_list;
            $this->load->view('users', $data);
        } else {
            redirect(base_url('index.php'));
            exit();
        }

    }

    public function add_user()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        $users = $this->session->all_userdata();
        if ($is_logged_in && $users['username'] == "superadmin") {
            if ($this->input->post('user')) {
                // add new user submit
                $data = $this->input->post('user');
                $data['password'] = $this->encrypt_decrypt_model->encrypt($data['password']);
                $this->db->insert('user', $data);
                redirect(base_url('index.php/users'));
                exit();
            } else {
                // add new user form
                $data['user_info'] = $this->session->all_userdata();
                $data['web_info'] = $this->web_setting_model->web_info();
                $this->load->view('add_user', $data);
            }
        } else {
            redirect(base_url('index.php'));
            exit();
        }
    }

    public function edit_user($id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        $users = $this->session->all_userdata();
        if ($is_logged_in && $users['username'] == "superadmin") {
            if ($this->input->post('user')) {
                // add new user submit
                $data = $this->input->post('user');
                $data['password'] = $this->encrypt_decrypt_model->encrypt($data['password']);
                $this->db->where('id', $id)->update('user', $data);
                redirect(base_url('index.php/users'));
                exit();
            } else {
                // add new user form
                $data['user_info'] = $this->session->all_userdata();
                $data['web_info'] = $this->web_setting_model->web_info();
                $user_list_tmp = $this->users_model->user_list($id);
                $user_list = $user_list_tmp;
                foreach ($user_list_tmp as $key => $user) {
                    $user_list[$key]['password'] = $this->encrypt_decrypt_model->decrypt($user['password']);
                }
                $data['user_list'] = $user_list;
                $this->load->view('add_user', $data);
            }
        } else {
            redirect(base_url('index.php'));
            exit();
        }
    }

    public function delete_user($id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        $users = $this->session->all_userdata();
        if ($is_logged_in && $users['username'] == "superadmin") {
            $this->db->where('id', $id)->delete('user');
            redirect(base_url('index.php/users'));
            exit();
        } else {
            redirect(base_url('index.php'));
            exit();
        }
    }

}

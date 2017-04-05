<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->_CI = &get_instance();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            redirect(base_url('index.php/dashboard'));
            exit();
        } else {
            if (isset($_POST['user_name'])) {
                $data['info'] = $this->login_model->login();
                $data['web_info'] = $this->web_setting_model->web_info();
                $this->load->view('login', $data);
            } else {
                $data['web_info'] = $this->web_setting_model->web_info();
                $this->load->view('login', $data);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
        exit();
    }
}
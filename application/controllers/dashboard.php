<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->_CI = &get_instance();
        $this->load->model('dashboard_model');
        $this->load->library('session');
        //$this->load->config('config');
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['web_info'] = $this->web_setting_model->web_info();
            $data['user_info'] = $this->session->all_userdata();
            $data['pass'] = $this->config->item('encryption_key');
            $this->load->view('dashboard', $data);
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }
}

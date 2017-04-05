<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->_CI = &get_instance();
        $this->load->model('customers_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->customers();
    }

    public function customers()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();
            $data['customers_list'] = $this->customers_model->customers_list();
            $this->load->view('customers', $data);
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function add_customer()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();
            $data['countries'] = $this->customers_model->country_info();
            $this->load->view('add_customer', $data);
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function add_customer_data()
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();

            $is_inserted = $this->customers_model->insert_customer();
            if ($is_inserted) {
                redirect(base_url('index.php/customers'));
                exit();
            } else {
                redirect(base_url('index.php/customers/add_income'));
                exit();
            }
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function edit_customer($customer_id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();
            $data['countries'] = $this->customers_model->country_info();
            $data['customer_info'] = $this->customers_model->customer_info($customer_id);
            $data['id'] = $customer_id;
            $this->load->view('add_customer', $data);
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function delete_customer($customer_id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();

            $is_deleted = $this->customers_model->delete_customer($customer_id);
            if ($is_deleted) {
                redirect(base_url('index.php/customers'));
                exit();
            } else {
                redirect(base_url('index.php/customers'));
                exit();
            }
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function update_customer($customer_id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();

            $is_updated = $this->customers_model->update_customer($customer_id);
            if ($is_updated) {
                redirect(base_url('index.php/customers'));
                exit();
            } else {
                redirect(base_url('index.php/customers'));
                exit();
            }
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

    public function detail_customer($customer_id)
    {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $data['user_info'] = $this->session->all_userdata();
            $data['web_info'] = $this->web_setting_model->web_info();
            $data['countries'] = $this->customers_model->country_info();
            $data['customer_info'] = $this->customers_model->customer_info($customer_id);
            $this->load->view('customer_detail', $data);
        } else {
            redirect(base_url('index.php/login'));
            exit();
        }
    }

}

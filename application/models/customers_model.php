<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customers_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
    }

    public function customers_list()
    {
        // user
        $user = $this->session->all_userdata();
        $data['added_by'] = $user['uid'];
        $data['status'] = 'Y';
        if ($user['username'] == "superadmin") {
            // select all
            return $this->db->get('customers')->result_array();
        } else {
            // select all
            return $this->db->where($data)->get('customers')->result_array();
        }
    }

    public function insert_customer()
    {

        // user
        $user = $this->session->all_userdata();

        // get posted data
        $data = $this->input->post('customer');
        $data['added_date'] = date('Y-m-d H:i:s');
        $data['added_by'] = $user['uid'];

        // insert into customers
        $this->db->insert('customers', $data);

        //
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function customer_info($customer_id)
    {
        // get transaction info for a customer id
        return $this->db->where('customer_id', $customer_id)->get('customers')->result_array();
    }

    public function delete_customer($customer_id)
    {

        // user
        $user = $this->session->all_userdata();

        // get posted data
        $data = $this->input->post('customer');
        $data['modified_by'] = $user['uid'];
        $data['modified_date'] = date('Y-m-d H:i:s');
        $data['status'] = 'N';

        $this->db->where('customer_id', $customer_id);
        $this->db->update('customers', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function update_customer($customer_id)
    {
        // user
        $user = $this->session->all_userdata();

        // get posted data
        $data = $this->input->post('customer');
        $data['modified_by'] = $user['uid'];
        $data['modified_date'] = date('Y-m-d H:i:s');

        $this->db->where('customer_id', $customer_id);
        $this->db->update('customers', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function country_info()
    {
        return $this->db->get('countries')->result_array();
    }

}
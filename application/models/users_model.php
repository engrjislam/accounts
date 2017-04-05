<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
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

    public function user_list($id = "")
    {
        if ($id == "") {
            return $this->db->get('user')->result_array();
        } else {
            return $this->db->where('id', $id)->get('user')->result_array();
        }
    }
}
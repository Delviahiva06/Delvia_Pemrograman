<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Huruf extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['huruf'] = $this->db->get('huruf_hijaiyah')->result();
        $this->load->view('huruf_dashboard', $data);
    }
} 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login_form');
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->db->get_where('pengguna', array('nama' => $username, 'password' => $password));
        if ($query->num_rows() == 1) {
            $user = $query->row();
            $this->session->set_userdata('user_id', $user->p_id);
            $this->session->set_userdata('username', $user->nama);
            redirect('huruf');
        } else {
            $data['error'] = 'Username atau password salah!';
            $this->load->view('login_form', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
} 
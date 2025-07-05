<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('signup_form');
    }

    public function register()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // Cek apakah username sudah ada
        $query = $this->db->get_where('pengguna', array('nama' => $username));
        if ($query->num_rows() > 0) {
            $data['error'] = 'Username sudah terdaftar!';
            $this->load->view('signup_form', $data);
            return;
        }
        // Simpan user baru
        $this->db->insert('pengguna', array('nama' => $username, 'password' => $password));
        $this->session->set_flashdata('success', 'Akun berhasil dibuat, silakan login!');
        redirect('login');
    }
} 
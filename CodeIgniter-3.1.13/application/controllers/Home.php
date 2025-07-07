<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['total_pengguna'] = $this->db->count_all('pengguna');
        $data['total_fathah'] = $this->db->where('h_cbg', 'fathah')->count_all_results('huruf_hijaiyah');
        $data['total_kasrah'] = $this->db->where('h_cbg', 'kasrah')->count_all_results('huruf_hijaiyah');
        $data['total_dhommah'] = $this->db->where('h_cbg', 'dhommah')->count_all_results('huruf_hijaiyah');
        $data['total_tfathah'] = $this->db->where('h_cbg', 'tfathah')->count_all_results('huruf_hijaiyah');
        $data['total_tkasrah'] = $this->db->where('h_cbg', 'tkasrah')->count_all_results('huruf_hijaiyah');
        $data['total_tdhommah'] = $this->db->where('h_cbg', 'tdhommah')->count_all_results('huruf_hijaiyah');
        $data['total_tajwid'] = $this->db->where('h_cbg', 'tajwid')->count_all_results('huruf_hijaiyah');
        $this->load->view('home_dashboard', $data);
    }
} 
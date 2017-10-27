<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {




 function __construct()
 {
   parent::__construct();
   $this->load->model('users_model');
 }

 function index()
 {
    $this->load->helper(array('form'));
    $data['session_data'] = $this->session->userdata('logged_in');
    $data['name'] = $this->input->post('search_input');
    $session_data = $this->session->userdata('logged_in');
	$data['user_total'] = $this->db->count_all("students");
    $data['username'] = $session_data['username'];

    $data['currentPage'] = 'login';
    $data['title'] = "Login ";

    $this->load->view('template/header.php',$data);
    $this->load->view('login');
    $this->load->view('template/footer.php',$data);

 }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	#$this->load->helper('url');
	$this->load->model('users_model');
	}

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
	    $data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['currentPage'] = 'admin';
		$data['title'] = "Admin - DashBoard";
		$data['total_rows'] = $this->users_model->record_count();
		$data['name'] = $this->input->post('search_input');
		$data["page"] = 5;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["user_list"] = $this->users_model->get_all_users($data["page"], $page);

		$this->load->view('template/header.php',$data);
		$this->load->view('admin/dash', $data);
		$this->load->view('template/footer.php',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('', 'refresh');
 }
}

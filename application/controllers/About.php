<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
    $data['session_data'] = $this->session->userdata('logged_in');
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];

    $data['name'] = $this->input->post('search_input');
    
		$data['currentPage'] = 'about';
		$data['title'] = "About";
		$this->load->view('template/header.php',$data);
		$this->load->view('about');
		$this->load->view('template/footer.php',$data);
	}
}

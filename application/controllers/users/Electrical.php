<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Electrical extends CI_Controller {

function __construct()

{

parent::__construct();

#$this->load->helper('url');
 // $this->load->database();
$this->load->model('users_model');

}

public function index(){

if($this->session->userdata('logged_in'))
{
    $data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
	$data['title'] ="Students List of Electrical";
	$data['currentPage'] = 'users';
	$data['electrical_list'] = $this->users_model->get_students_of_dept('electrical');
	$this->load->view('template/header.php',$data);
	$this->load->view('admin/electrical', $data);
	$this->load->view('template/footer.php',$data);
}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}

public function semester($s){


if($this->session->userdata('logged_in'))
{
    $data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
	$data['title'] ="Students of Electrical - ".$s;
	$data['currentPage'] = 'users';
	$data['back'] = 'electrical';
	$data['sem_list'] = $this->users_model->get_students_of_dept_sem('electrical',$s);
	$this->load->view('template/header.php',$data);
	$this->load->view('admin/semester', $data);
	$this->load->view('template/footer.php',$data);
}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}



}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()

{

parent::__construct();
$this->load->model('users_model');

}

	public function byname()

{

	if($this->session->userdata('logged_in'))
	{
	$data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];

    $id = $this->uri->segment(3);
	$data['name'] = $this->input->post('search_input');

	$data['search_result'] = $this->users_model->search($data['name']);
if ($data['search_result']==true) {

		$data['currentPage'] = 'search';
		$data['title'] = "Search result of - ".$data['name'];
		$this->load->view('template/header.php',$data);
		$this->load->view('admin/search');
		$this->load->view('template/footer.php',$data);
		}else{
	    $data['title'] = '404 - not found';
        $this->output->set_status_header('404');
		$this->session->set_flashdata('msg', 'Have no data with this name !!');
        $data['content'] = 'error_404'; // View name 
        $this->load->view('404',$data);//loading in my template
}
		}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}




public function byroll(){

	if($this->session->userdata('logged_in'))
	{
	$data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
		$data['roll'] = $this->input->post('search_roll');
		
$data['title'] = 'View Details';
$id = $this->uri->segment(3);
$data['items'] = $this->users_model->data_roll($data['roll']);

if($data['items']==true){
$data['currentPage'] = 'view';
$this->load->view('template/header.php',$data);
$this->load->view('admin/user_details', $data);
$this->load->view('template/footer.php',$data);
}else{
	    $data['title'] = '404 - not found';
        $this->output->set_status_header('404');
		$this->session->set_flashdata('msg', 'Have no data with this roll !!');

        $data['content'] = 'error_404'; // View name 
        $this->load->view('404',$data);//loading in my template
}
}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}




public function public_search(){

	$data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];

	$data['name'] = $this->input->post('search_input');

	$data['search_result'] = $this->users_model->search($data['name']);

		$data['currentPage'] = 'search';
		$data['title'] = "Search result of - ".$data['name'];
		$this->load->view('template/header.php',$data);
		$this->load->view('admin/search');
		$this->load->view('template/footer.php',$data);
}

}
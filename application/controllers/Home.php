<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


function __construct()
 {
   parent::__construct();
   $this->load->model('users_model');
 }

 function index()
 {

    $data['session_data'] = $this->session->userdata('logged_in');
    $session_data = $this->session->userdata('logged_in');
	$data['user_total'] = $this->db->count_all("students");
    $data['username'] = $session_data['username'];
    $data['currentPage'] = 'dashboard';
    $data['title'] = "Homepage";
    $data['name'] = $this->input->post('search_input');
	
$data["total_rows"] = $this->users_model->record_count();

$data['full_tag_open'] = "<ul class='pagination'>";
$data['full_tag_close'] ="</ul>";
$data['num_tag_open'] = '<li>';
$data['num_tag_close'] = '</li>';
$data['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
$data['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
$data['next_tag_open'] = "<li>";
$data['next_tagl_close'] = "</li>";
$data['prev_tag_open'] = "<li>";
$data['prev_tagl_close'] = "</li>";
$data['first_tag_open'] = "<li>";
$data['first_tagl_close'] = "</li>";
$data['last_tag_open'] = "<li>";
$data['last_tagl_close'] = "</li>";


$data["base_url"] = base_url();
		$data["page"] = 5;
		$data["uri_segment"] = 3;
		$data['num_links'] = 2;
$this->pagination->initialize($data);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["user_list"] = $this->users_model->get_all_users($data["page"], $page);
$data["links"] = $this->pagination->create_links();

	
	
	
    $this->load->view('template/header.php',$data);
    $this->load->view('home', $data);
    $this->load->view('template/footer.php',$data);
 }


}

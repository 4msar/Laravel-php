<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()

{

parent::__construct();
$this->load->model('users_model');

}

public function index($offset = 0){

if($this->session->userdata('logged_in'))
    {
 	    $data['session_data'] = $this->session->userdata('logged_in');
 		$session_data = $this->session->userdata('logged_in');
 		$data['username'] = $session_data['username'];
		
		$data["total_rows"] = $this->users_model->record_count();


		$data['title'] ="User List";
		$data['currentPage'] = 'users';
		

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
	$config['first_link'] = 'First';
	$config['last_link'] = 'Last';
	$config['prev_link'] = 'Prev';
	$config['next_link'] = 'Next';


		$config['total_rows'] =  $this->users_model->record_count();

		$this->pagination->initialize($config);

		$config["base_url"] = site_url('admin/users'); //base_url() . "admin/users";
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
// 		$config['use_page_numbers'] = TRUE;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["user_list"] = $this->users_model->get_all_users($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
$data['roll'] = $this->input->post('search_roll');
$data['name'] = $this->input->post('search_input');

		$this->load->view('template/header.php',$data);
		$this->load->view('admin/users', $data);
		$this->load->view('template/footer.php',$data);
	}
	else
	{
	  //If no session, redirect to login page
	  redirect('login', 'refresh');
	}
}






public function add_user()

{

		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
		
		$data['title'] ="Add user";
		$data['currentPage'] = 'add_user';
		$this->load->view('template/header.php',$data);
		$this->load->view('admin/insert');
		$this->load->view('template/footer.php',$data);

}


public function insert_new_user()

{
	   $this->load->library('form_validation');

   $this->form_validation->set_rules('roll', 'Roll', 'trim|required|is_unique[students.roll]',array(
                'is_unique'     => 'This %s already exists.'
        ));
      $this->form_validation->set_rules('reg', 'Reg', 'trim|required|is_unique[students.reg]',array(
                'is_unique'     => 'This %s already exists.'
        ));

   if($this->form_validation->run() == FALSE)
   {            
		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
		$data['title'] ="Add user";
		$data['currentPage'] = 'add_user';
		$this->load->view('template/header.php',$data);
		$this->load->view('admin/insert');
		$this->load->view('template/footer.php',$data);
   }else{

	$udata['name'] = $this->input->post('name');
	$udata['roll'] = $this->input->post('roll');
	$udata['reg'] = $this->input->post('reg');
	$udata['email'] = $this->input->post('email');
	$udata['mobile'] = $this->input->post('mobile');
	$udata['sessions'] = $this->input->post('sessions');
	$udata['religion'] = $this->input->post('religion');
	$udata['blood'] = $this->input->post('blood');
	$udata['birthdate'] = $this->input->post('birthdate');
	$udata['gender'] = $this->input->post('gender');
	$udata['dept'] = $this->input->post('dept');
	$udata['sem'] = $this->input->post('sem');
	$udata['address'] = $this->input->post('address');
	
	// $url = base_url().'images/'.$udata['roll'];


		$url = $this->img_upload();


	$res = $this->users_model->insert_users_to_db($udata, $url);
		if($res){
		header('location:'.base_url()."admin/users/add_user");//.$this->index());
		}
		$this->session->set_flashdata('msg', 'Data added, Add New !!');
	}



}

	private function img_upload()
	{	

		$config['max_size']     = '500';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
		$title = $_POST["roll"];
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "images/".$title.'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
	}




public function edit($idd){

	if($this->session->userdata('logged_in'))
	{
		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
		$data['title'] = 'Edit ';
		$id = $this->uri->segment(3);
		$data['items'] = $this->users_model->data_id($idd);
		$data['currentPage'] = 'edit';
		$this->load->view('template/header.php',$data);
		$this->load->view('admin/edit', $data);
		$this->load->view('template/footer.php',$data);
}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}


public function view($idd){

	if($this->session->userdata('logged_in'))
	{
	$data['session_data'] = $this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		$data['name'] = $this->input->post('search_input');
$data['title'] = 'View Details';
$id = $this->uri->segment(3);
$data['items'] = $this->users_model->data_id($idd);
$data['currentPage'] = 'view';
$this->load->view('template/header.php',$data);
$this->load->view('admin/user_details', $data);
$this->load->view('template/footer.php',$data);
}
else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}





public function update()

{
	if($this->session->userdata('logged_in'))
	{
		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

		$mdata['name'] = $this->input->post('name');
		$mdata['roll'] = $this->input->post('roll');
		$mdata['reg'] = $this->input->post('reg');
		$mdata['email'] = $this->input->post('email');
		$mdata['mobile'] = $this->input->post('mobile');
		$mdata['sessions'] = $this->input->post('sessions');
		$mdata['religion'] = $this->input->post('religion');
		$mdata['blood'] = $this->input->post('blood');
		$mdata['birthdate'] = $this->input->post('birthdate');
		$mdata['gender'] = $this->input->post('gender');
		$mdata['dept'] = $this->input->post('dept');
		$mdata['sem'] = $this->input->post('sem');
		$mdata['address'] = $this->input->post('address');

		$mdata['img'] = $this->do_update_img();
		$url = $this->do_update_img();

		$res=$this->users_model->update_info($mdata, $_POST['id']);
		if($res){
			header('location:'.base_url()."admin/users/".$this->index());
		}
		
	}else
		{
		//If no session, redirect to login page
		redirect('login', 'refresh');
		}
}



	public function do_update_img()
	{	
	
	$config['max_size'] = 500;
	$config['overwrite'] = true;

	$this->load->library('upload', $config);
	
		$title = $_POST["roll"];
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "images/".$title.'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";  
	}





public function delete($id)

{
	if($this->session->userdata('logged_in'))
	{
		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

	$this->users_model->delete_a_user($id);
	$this->index();

}

else
{
//If no session, redirect to login page
redirect('login', 'refresh');
}
}
}

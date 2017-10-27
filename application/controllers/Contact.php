<?php
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $data['name'] = $this->input->post('search_input');
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

		$data['session_data'] = $this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['title'] ="Contact us";
		$data['currentPage'] = 'contact';
                $data['name'] = $this->input->post('search_input');
                
        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            
        $this->load->view('template/header.php',$data);
		$this->load->view('contact');
		$this->load->view('template/footer.php',$data);
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'msar.akash@gmail.com';

			$config = array();
			$config['useragent']	= "CodeIgniter";
			$config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
			$config['protocol']		= "smtp";
			$config['smtp_host']	= "localhost";
			$config['smtp_port']	= "25";
			$config['mailtype']		= 'html';
			$config['charset']		= 'utf-8';
			$config['newline']		= "\r\n";
			$config['wordwrap']		= TRUE;
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contact');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contact');
            }
        }
    }

}
?>
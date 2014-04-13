<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('takecat');
    
 }

 public function index()
 {	
  
   $this->load->helper(array('form', 'url'));
   
 
   $this->load->view('homepageView');
   $this->load->view('footer');
  
 }
 

 public function demo()
 {
 	$this->load->view('test/demo');
 
 
 }
 
 

 public function forgot_password()
 {
 	$this->load->view('forgot_password');
 	$this->load->view('footer');
 
 }
 
 public function generatePassword($length = 8) {
 	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
 	$count = mb_strlen($chars);
 
 	for ($i = 0, $result = ''; $i < $length; $i++) {
 		$index = rand(0, $count - 1);
 		$result .= mb_substr($chars, $index, 1);
 	}
 
 	return $result;
 }
 
 
 
 public function sendemail() {
 
 
 	$email= $this->input->post('email');
 	$username= $this->input->post('username');
// 	$ran=$this->generatePassword();
 //	$sec_ran=md5('$ran');
  $new_pass=	$this->takecat->get_password($email,$username);
  
  $password = $new_pass[0]['password'];
	print_r($new_pass);
 	$config = Array(
 			'protocol' => 'smtp',
 			'smtp_host' => 'ssl://smtp.googlemail.com',
 			'smtp_port' => 465,
 			'smtp_user' => 'takecatgrp18@gmail.com',
 			'smtp_pass' => 'sen_takecat_grp18',
 			'mailtype'  => 'html',
 			'charset'   => 'iso-8859-1'
 	);
 	$this->load->library('email', $config);
 	$this->email->set_newline("\r\n");
 
 	$this->email->initialize($config);
 
 	$this->email->from('takecatgrp18@gmail.com', 'myname');
 	$this->email->to($email);
 
 	$this->email->subject('Reset password from takecat');
 	$message ="Your takecat password is '$password'";
 	$this->email->message($message);
 
 	$this->email->send();
 
 
 
 	//$this->load->view('email_view');
 
 	$result = $this->email->send();
 	if($result=true)
 	{
 		$this->index();
 	}
 	else 
 	{
 		$this->forgot_password();
 			
 		
 	}
 
 }
 
 
 
 
 
 public function signup()
 {
 	$this->load->model('takecat');
 	if ( ($this->takecat->check_email()==TRUE) && ($this->takecat->check_user()==TRUE) && ($this->input->post('password') ==  $this->input->post('re_password')))
 	
 	{
 	  
   
 	  if ($this->takecat->insert_user()==TRUE)
 	  { 
 	  	echo "success, login to continue"; 
 	  	$this->load->helper(array('form', 'url'));
 	  	 
 	  	
 	  	$this->load->view('homepageView');
 	  	
 	  } 
 	
 	  else
 	   {
 	  	echo "try again, communication error";
 	  	$this->load->helper(array('form', 'url'));
 	  	 
 	  	
 	  	$this->load->view('homepageView');
 	  	
 	  
 	  }
 	  		
 	  
 	}
 	
 	else {
 	 	echo "username already exists re-enter details and try again";
 	 	$this->load->helper(array('form', 'url'));
 	 	 
 	 	
 	 	$this->load->view('homepageView');
 	 	
 	 } 
 	 
 	
 }

 
 


 public function aboutus()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('aboutusView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 public function contactus()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('contactusView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 public function fstudent()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('fstudentView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 public function fprof()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('fprofView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 public function fcollege()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('fcollegeView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 
 public function faq()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('faq', $data);
 	$this->load->view('footer');
 		
 
 
 }
 public function fhelp()
 {
 
 	$session_data = $this->session->userdata('logged_in');
 	$data['userid']= $session_data['userid'];
 	$data['username']=$session_data['username'];
 	$data['type'] = $session_data['usertype'];
 
 	// data for each users
 
 	$this->load->view('basic', $data);
 	$this->load->view('helpView', $data);
 	$this->load->view('footer');
 		
 
 
 }
 
 

}

?>
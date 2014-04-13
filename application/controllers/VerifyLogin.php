<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->model('takecat');
  
   
   
   
  }

  function index()
 {
 	
 	
 	
			   //This method will have the credentials validation
			   $this->load->library('form_validation');
			
			   $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
			   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
			
			   if($this->form_validation->run() == FALSE)
			   {
			     //Field validation failed.&nbsp; User redirected to login page
			       
			   	$this->load->helper(array('form', 'url'));
			   	$this->load->view('homepageView');
			   	$this->load->view('footer');
			   	 
			    
			   }
			   else
			   {
			   	
			   	if($this->session->userdata('logged_in'))
			   	{
			   		print_r($this->session->userdata('logged_in'));
			   		$this->homepage();
			   		
			   	}
			   	else
			   	{
			   		//If no session, redirect to login page
			   		redirect('login', 'refresh');
			   		 
			   	}
			   		     
			   }
 }
   

 
 function passkey()
 {
 	$this->load->library('form_validation');
 		
 	$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
 	$this->form_validation->set_rules('passkey', 'passkey', 'trim|required|xss_clean|callback_check_database_passkey');
 		
 	if($this->form_validation->run() == FALSE)
 	{
 		//Field validation failed.&nbsp; User redirected to login page
 	
 		$this->load->helper(array('form', 'url'));
 		$this->load->view('homepageView');
 		$this->load->view('footer');
 			
 		 
 	}
 	else
 	{
 		 
 		if($this->session->userdata('logged_in'))
 		{
 			print_r($this->session->userdata('logged_in'));
 			$this->homepage();
 	
 		}
 		else
 		{
 			//If no session, redirect to login page
 			redirect('login', 'refresh');
 			 
 		}
 			
 	}
 	
 	
 	
 }
 
 
   
 public  function homepage()
 {	
 	if($this->session->userdata('logged_in'))
 	{
 		$session_data = $this->session->userdata('logged_in');
 		$data['username'] = $session_data['username'];
 		$data['userid']= $session_data['userid'];
 		$data['type'] = $session_data['usertype'];
 		 
 	}
 	else
 	{
 		//If no session, redirect to login page
 		redirect('accoutant', 'refresh');
 	
 	}
	 	
	 		
	 		
	 	$data['user'] = $this->takecat->get_userinfo($session_data['userid']);
	 	
	 	if ($session_data['usertype']=="examinee")
	 		
	 	{
	 		
	 		$this->load->view('profileview', $data);
	 		
	 		$this->load->view('examineehomepageView');
	 		$this->load->view('footer');
	 		
	 		
	 	}
	 	
	 	elseif ($session_data['usertype']=="admin")
	 	{	
	 		
	 		$this->load->view('profileview', $data);
	 		
	 		$this->load->view('adminhomepageView');
	 		$this->load->view('footer');
	 		
	 	}
	 	
	 	elseif ($session_data['usertype']=="student")
	 	{
	 		
	 		$this->load->view('profileview', $data);
	 		
	 		$this->load->view('studenthomepageView');
	 		$this->load->view('footer');
	 		
	 	}
	 	
	 	else
	 	{
	 		
	 		$this->load->view('profileview', $data);
	 		
	 		$this->load->view('profhomepageView');
	 		$this->load->view('footer');
	 		
	 	}
 	
 }
 
 

 
 
 function check_database($password)
 {
		   //Field validation succeeded.&nbsp; Validate against database
		   $username = $this->input->post('username');
		
		   //query the database
		   $result = $this->user->login($username, $password);
		
		   if($result)
		   {
		     $sess_array = array();
		     foreach($result as $row)
		     {
		       $sess_array = array(
		         'userid' => $row->userid,
		         'username' => $row->userName,
		         'usertype'=> $row->Type,
		       	'useremailid'=> $row->email	
		       );
		       $this->session->set_userdata('logged_in', $sess_array);
		     }
		     return TRUE;
		   }
		   else
		   {
		     $this->form_validation->set_message('check_database', 'Invalid username or password');
		     return false;
		   }
		 }
		 





function check_database_passkey($passkey)
{
	//Field validation succeeded.&nbsp; Validate against database
	$email = $this->input->post('email');

	//query the database
	$result = $this->user->entry($email, $passkey);

	if($result)
	{
		$sess_array = array();
		foreach($result as $row)
		{
			$sess_array = array(
					'userid' => $row->userid,
					'username' => $row->userName,
					'usertype'=> $row->Type,
					'useremailid'=> $row->email
			);
			$this->session->set_userdata('logged_in', $sess_array);
		}
		return TRUE;
	}
	else
	{
		$this->form_validation->set_message('check_database_passkey', 'Invalid email or passkey');
		return false;
	}
}
	



}


?>
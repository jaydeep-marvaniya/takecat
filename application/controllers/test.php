<?php
session_start();
class test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('test_model');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['userid']= $session_data['userid'];
		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
		
		
		
	}

		

		public function index($test_subject= FALSE)
		{	
			$session_data = $this->session->userdata('logged_in');
			$data['userid']= $session_data['userid'];
			
			
			
			$data['test'] = $this->test_model->get_test($session_data['userid'],$session_data['usertype']);
			
			$data['results'] = $this->test_model->get_results($session_data['userid']);
			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'ALL TESTS';
		
			
			$this->load->view('test/index', $data);
			
		}
		
	
	
		
	
		
		public function myaccount()
		{	
			$session_data = $this->session->userdata('logged_in');
			$data['userid']= $session_data['userid'];
			
			
			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT ';
		
			
			$this->load->view('test/myaccount', $data);
			
		}
	
	
			
		
		public function edit_myaccount()
		{	
			$session_data = $this->session->userdata('logged_in');
			$data['userid']= $session_data['userid'];
			
			
			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT ';
		
			$this->load->view('templates/header', $data);
			$this->load->view('test/edit_myaccount', $data);
			
		}
		
		
		
		
		
		public function change_password()
		{	
					$session_data = $this->session->userdata('logged_in');

					$data['user'] = $this->test_model->get_user($session_data['userid']);

			$data['title'] = 'CHANGE PASSWORD';
		
			$this->load->view('templates/header', $data);
			$this->load->view('test/edit_password');
		
		}
		
		public function save_details()
		{ 	
			$session_data = $this->session->userdata('logged_in');
			if($this->test_model->update_user()=== TRUE){
			echo "sucess";

			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT';
		
			$this->load->view('templates/header', $data);
			$this->load->view('test/myaccount', $data);
			}
		
			
			
			else{
			echo "try again";
			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT ';
		
			$this->load->view('templates/header', $data);
			$this->load->view('test/edit_myaccount', $data);
			}
		
	
	}	
	
	
		public function save_password()
		{ 	
			$session_data = $this->session->userdata('logged_in');
			if($this->test_model->update_password()=== TRUE){

			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
				
						echo "sucess";
		
						$this->index();
						

			
			}
		
			
			
			else{
			$data['user'] = $this->test_model->get_user($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT ';
		
			$this->load->view('templates/header', $data);
			
						echo "try again";

			$this->load->view('test/edit_myaccount', $data);
			}
		
	
	}
			
		
		
		
			public function view_result($userid,$testid)
		{
			$data['news_item'] = $this->news_model->get_news($id);
		
			if (empty($data['news_item']))
			{
				show_404();
			}
		
			$data['title'] = $data['news_item']['title'];
		
			$this->load->view('templates/header', $data);
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer');
		}
		
		
		public function take_test_confirm($testid)
		
		{
			$data['test'] = $this->test_model->get_test_info($testid);
			
			$this->load->view('test/confirm',$data);
		
		
		}
		
		
		
		public function take_test($testid)
		{
		
							$session_data = $this->session->userdata('logged_in');

			$data['test'] = $this->test_model->get_test_info($testid);
			$data['question'] = $this->test_model->get_question($testid);
						$data['user'] = $this->test_model->get_user($session_data['userid']);

		
			if (empty($data['question']))
			{
				show_404();
				
			}
			$session_data = $this->session->userdata('logged_in');
			$data['userid']= $session_data['userid'];
			$data['testid'] = $testid;
		
			$data['title'] = "QUESTIONS IN THIS TEST";
		
			
			$this->load->view('test/newfile2', $data);
	
		}
		
		

		public function get_result($testid,$userid)
		
		
		{
		
							$session_data = $this->session->userdata('logged_in');

			$data['result_item'] = $this->test_model->get_result($testid,$userid);
			$data['solution']= $this->test_model->get_solution($testid,$userid);
						$data['user'] = $this->test_model->get_user($session_data['userid']);

		
			
		
		
			
			$this->load->view('test/view_result', $data);
			$this->load->view('templates/footer');
		}
		
		
		
		public function take_test2($testid)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
		
			$data['title'] = 'BEST OF LUCK';
		
		
			if ($this->test_model->set_result()=== FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('test/success');
				$this->load->view('templates/footer');
		
			}
			else
			{
				$this->load->view('templates/header', $data);
				$this->load->view('test/');
				$this->load->view('templates/footer');
				
				
				
			}
		}
		
		
	public function set_result($testid,$userid)
		{
			$data['question'] = $this->test_model->get_question($testid);
			 foreach ($data['question'] as $question_item){
			 	$jay = array(
			 			'user_ans' => $this->input->post($question_item['qid']),
			 			'qid' => $question_item['qid'],
			 			'testid'=>$testid,
			 			'userid'=>$userid,
			 			'priority'=>$question_item['priority']
			 	);
			 	
			 
			 	if ($this->test_model->set_result($jay)=== FALSE)
			 	{
			 		echo "not success";
			 	
			 	}			 	
			 }
			 
			$this->load->view('test/success',$jay);	
		}
		
		
		
		public function  edit_test() {
			  $data['question']= $this->test_model->get_questionbank();
			  
			  $this->load->view('test/edit', $data);
			
			
			
		}
		

		function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('login', 'refresh');
		}
		
		
}?>
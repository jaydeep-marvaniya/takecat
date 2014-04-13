<?php
class CRUD extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		session_start();
		
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
	}
	
	
	
	public function edit_client(){
		
		
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->set_subject('EDIT CLIENT');
		$this->grocery_crud->set_table('client');
		$this->grocery_crud->set_field_upload('clientlogourl','assets/clientfiles/LOGO');
		
		
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
			
	}
	
	public function edit_test(){
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->set_subject('EDIT TESTS');
		$this->grocery_crud->set_table('test');
		
		//1-n relation
		$this->grocery_crud->set_relation('topicname','topic','topicname');
		
		//n-n relation
	
		$this->grocery_crud->set_relation_n_n('Questions', 'question_test', 'question', 'testid', 'qid', '{subject} {topicname} {question} ','priority');

		$this->grocery_crud->fields('testname','testcode','test_max_time_min','testdate','topicname','subject','Questions');
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
			
	}
	
	public function edit_question(){
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->set_subject('EDIT QUESTION');
		$this->grocery_crud->set_table('question');
			
		$this->grocery_crud->set_relation('topicname','topic','topicname');
		
		
		
			
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
			
	}
	public function edit_topic(){
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->set_subject('EDIT TOPIC');
		$this->grocery_crud->set_table('topic');
			
	
			
			
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
			
	}
	
	public function edit_users(){
		
		
		
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->set_subject('EDIT USERS');
		$this->grocery_crud->set_table('users');
			
	
			
			
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
			
	}
	
	
	public  function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}
	
		
		
		
	
}
?>
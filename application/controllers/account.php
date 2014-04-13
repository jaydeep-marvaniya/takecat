<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class account extends CI_Controller {
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('takecat');
		$this->load->helper(array('form', 'url'));
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
	
//examinee

	public function index()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['userid']= $session_data['userid'];
		$data['type'] = $session_data['usertype'];
		
		// data for each users
		

		$this->load->view('examineehomepageView',$data);
		
	}
	
	
	public function edit_myprofile()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['userid']= $session_data['userid'];
		$data['username']=$session_data['username'];
		$data['type'] = $session_data['usertype'];
		///////////////////		
			
		$data['user'] = $this->takecat->get_userinfo($session_data['userid']);
	
		$data['title'] = 'MY ACCOUNT ';
	
		///////////////////////////
		$this->load->view('basic', $data);
		$this->load->view('sidebarView', $data);
		
		$this->load->view('editprofileView', $data);
		$this->load->view('footer');
			
	}
	
	public function save_details()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['userid']= $session_data['userid'];
		$data['username']=$session_data['username'];
		$data['type'] = $session_data['usertype'];
		
		if($this->takecat->update_user()=== TRUE){
			echo "sucess";
	
			$data['user'] = $this->takecat->get_userinfo($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT';
	
			$this->load->view('basic', $data);
			$this->load->view('sidebarView', $data);
				
			$this->load->view('editprofileView', $data);
			$this->load->view('footer');
				
		}
	
			
			
		else{
			echo "try again";
			$data['user'] = $this->takecat->get_userinfo($session_data['userid']);
				
			$data['title'] = 'MY ACCOUNT ';
	
			$this->load->view('basic', $data);
			$this->load->view('editprofileView', $data);
			$this->load->view('footer');
				
		}
	
	
	}
	
	public function deleteprofile()
	{
		
		$session_data = $this->session->userdata('logged_in');
		if($this->takecat->deleteprofile($session_data['userid']))
		{ 
			
			
			echo "sucessfully deleted profile";
			//$this->load->view('deleteprofileView');
			
		 }
		 else 
		 {
		 	
		 	$this->load->view('basic', $data);
		 	echo "Go BACK AND TRY AGAIN";
		 	//$this->load->view('deleteprofileView');
		 	$this->load->view('footer');
		 	
		 }
		
	}
	
	
	
	public function taketest()
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['userid']= $session_data['userid'];
			$data['username']=$session_data['username'];
			$data['type'] = $session_data['usertype'];
			$data['test']= $this->takecat->get_test($session_data['userid']);
		
			if($data['type']=='student')
			{
				$data['public_test'] = $this->takecat->get_public_test();
				
			}	
	
			
			$this->load->view('basic', $data);
			$this->load->view('sidebarView', $data);
			
			$this->load->view('taketestlistView',$data);
			
			if($data['type']=='student')
			{
				$this->load->view('test_public',$data);
				
			}
			
			$this->load->view('footer');
	}
	
	
	function extract_numbers($string)
	{
		preg_match_all('/([\d]+)/', $string, $match);
	
		return $match[0];
	}
	
	function extract_float($string)
	{
		preg_match_all('/(\d+(\.\d+)?)/', $string, $match);
		
		return $match[0];
	}
	
	
	function get_uid($qbid,$next)
	{
		$base =($qbid)*10000000;
		$uid= $base + $next;
		return  $uid;
		
	}
	
	public function taketestfinal($testid)
	{	
		
		$test= $this->takecat->get_test_info($testid);
		$data['test'] = $test;
		
		$startTheta = $test[0]['startTheta'];
		$endTheta=	$test[0]['endTheta'] ;
		$stoppingCriteria=	$test[0]['stoppingCriteria'] ;
		$qbid= $test[0]['questionBankid'];
		
	//	echo $startTheta;
	//	echo "</br>";
	//	echo $endTheta;
	//	echo "</br>";
	//	echo $stoppingCriteria;
	//	echo "</br>";
	//	echo $qbid;
		
		// "C:/Program Files/R/bin/x64/Rscript.exe";
		 // "C:/wamp/www/r/Int.R";

		//prepare and load questionbank
 		 $result = exec('"C:/Program Files/R/bin/x64/Rscript.exe"  "C:/wamp/www/r/Int.R" 500 1PL -4 4');
 		// echo $result;
 		 $num = $this->extract_numbers($result);
 		
 		 $next= $num[1];
 		 
		//exec(" Rscript scriptpath " );
		
		
		//get first question
		
	
		$uid= $this->get_uid($qbid, $next); 
	
 		$data['counter'] = 0;
		$data['testid'] = $testid;
		$data['question']= $this->takecat->next_question($qbid,$uid);
		
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		
		$this->load->view('basic', $session_data);
		$this->load->view('sidebarView', $data);
		
		$this->load->view('taketestfinalViewfirst',$data);
		$this->load->view('footer');
	//	print_r($data['question']);
		
		
	}
	
	
	/* public function thetaesti($status)
	{
	
		$theta_pass = " \"C:/Program Files/R/bin/x64/Rscript.exe\"  \"C:/wamp/www/r/thetaesti.R\" $status ";
		$theta_call = exec($theta_pass);
	//	echo $theta_call;
		$print_theta = $this->extract_numbers($theta_call);
		return $print_theta;
	
	
	}
	*/
	
	public function nextpass()
	{
	
		$next_pass = " \"C:/Program Files/R/bin/x64/Rscript.exe\"  \"C:/wamp/www/r/nextitem.R\" ";
	
		$result = exec($next_pass);
	
		$num = $this->extract_numbers($result);
	
		$next= $num[1];
		return $next;
	
	}
	
	
	public function next_question($testid,$last_questionid,$counter)
	{	
		$session_data = $this->session->userdata('logged_in');
		
		$test= $this->takecat->get_test_info($testid);
		$data['test']= $test;	
		
		$startTheta = $test[0]['startTheta'];
		$endTheta=	$test[0]['endTheta'] ;
		$stoppingCriteria=	$test[0]['stoppingCriteria'] ;
		$qbid= $test[0]['questionBankid'];
		
		
		$counter = $counter + 1;
	//	echo $counter;
		$data['stoppingcriteria'] = $stoppingCriteria;
		$data['counter'] = $counter;
		$ans = $this->takecat->check_ans($last_questionid);
	 
	 	if ($ans[0]['answer'] == $this->input->post('options'))
		{	
			$status= 1;
			
		}
		
		else 
		{
			$status=0;
			
		}
		//pass thetaesti.R 
	
		$theta_pass = " \"C:/Program Files/R/bin/x64/Rscript.exe\"  \"C:/wamp/www/r/thetaesti.R\" $status ";
		//echo $theta_pass;
		//		$theta_call = exec('"C:/Program Files/R/bin/x64/Rscript.exe"  "C:/wamp/www/r/thetaesti.R"  1');
		$theta_call = exec($theta_pass);
		//echo $theta_call;
		$data['theta'] = $theta_call;
		//echo "<br>";
		//echo $status;
		//echo "<br>";
	 
	$userid = $session_data['userid'];
		$plot_pass = " \"C:/Program Files/R/bin/x64/Rscript.exe\"  \"C:/wamp/www/r/plotgraph.R\"  ";
	//	echo $plot_pass;
		$plot_call = exec($plot_pass);
		$plot_name = "my_plot.jpeg";
		
	//	echo $plot_name;
		if ($counter< $stoppingCriteria)
		{
			$next = $this->nextpass();
			
			$uid=$this->get_uid($qbid, $next);
			$data['plotname'] =$plot_name;
			
			$data['testid'] = $testid;
			$data['question']= $this->takecat->next_question($qbid,$uid);
				
			$session_data = $this->session->userdata('logged_in');
			$data['type'] = $session_data['usertype'];
				
			$this->load->view('basic', $session_data);
			$this->load->view('sidebarView', $data);
				
			$this->load->view('taketestfinalView',$data);
			$this->load->view('footer');
			
		}
		
		else 
		{

			$data['plotname'] =$plot_name;
				
			$data['testid'] = $testid;
			
			$session_data = $this->session->userdata('logged_in');
			$data['type'] = $session_data['usertype'];
			
			$this->load->view('basic', $session_data);
			$this->load->view('sidebarView', $data);
			if($this->takecat->save_score($userid,$testid,$theta_call))
			$this->load->view('resultpage',$data);
			$this->load->view('footer');
			
			
		}
		
		//	print_r($data['question']);
			

	
	}
	
	

	public function pasttest()
	{
	
		$session_data = $this->session->userdata('logged_in');
		$data['userid']= $session_data['userid'];
		$data['username']= $session_data['username'];
		$data['type'] = $session_data['usertype'];
		
		
		$data['test_lists']= $this->takecat->get_pastresults($data['userid']);
		$this->load->view('basic', $data);
		$this->load->view('sidebarView', $data);
		
		$this->load->view('pasttestView',$data);
		$this->load->view('footer');
	}
	
	
	public function pastresult()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		

		$data['test_result']= $this->takecat->get_test_result($data['userid']);
		$this->load->view('basic', $session_data);
		
		$this->load->view('pastresultView',$data);
		$this->load->view('sidebarView', $data);
		$this->load->view('footer');

		
	}
	
	public function questionbank()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		
		$data['questionbanks']= $this->takecat->get_questionbank();
		$this->load->view('basic', $session_data);
		$this->load->view('sidebarView', $data);
		
		$this->load->view('questionbankView',$data);
		$this->load->view('footer');
		
		
	}

	
	public function allresult()
	{	
		
		$session_data = $this->session->userdata('logged_in');
		$data['userid']= $session_data['userid'];
		$data['username']= $session_data['username'];
		$data['type'] = $session_data['usertype'];
		
		
		
		$data['tests']= $this->takecat->get_allresult($session_data['userid']);
		
		$this->load->view('basic', $data);
		$this->load->view('examinersidebar', $data);
		
		$this->load->view('alltestView',$data);
		$this->load->view('footer');
		
		
	}

	
	
	
	
	
//prof	
	
	public function addtest()
	{
		
		$this->load->library('grocery_crud');
		$this->load->database();
		
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		
		
		$this->grocery_crud->where('userid',$session_data['userid']);
		$this->grocery_crud->set_subject('EDIT TESTS');
		$this->grocery_crud->set_table('test_adpt');
		//1-n relation
		$this->grocery_crud->set_relation('questionBankid','questionbank','qbName');
		$this->grocery_crud->set_relation('testCategoryid','conceptmap','conceptname');
		
		
		//n-n relation
		
		
		$this->grocery_crud->set_relation_n_n('examinee', 'testaccess', 'user', 'testid', 'userid', '{userName} {email} {first_name} {last_name} ');
		
		
		
		$this->grocery_crud->fields(
				'startTheta',
				'endTheta',
				'maxScore',
				'questionBankid',
				'accessLevel',
				'stoppingCriteria',
				'passKey',
				'timeLimit'	,
				'cumuPerformance',
				'testname',
				'testCategoryid',
				'userid',
				'examinee');
		$this->grocery_crud->required_fields('startTheta',
				'endTheta',
				'maxScore',
				'questionBankid',
				'accessLevel',
				'stoppingCriteria',
				'passKey',
				'timeLimit'	,
				'cumuPerformance',
				'testname',
				'testCategoryid',
				'userid',
				'examinee');
		
		$this->grocery_crud->field_type('userid', 'hidden',$session_data['userid']);
		$this->grocery_crud->display_as('startTheta','Start Theta');
		$this->grocery_crud->display_as('endTheta','End Theta');
		$this->grocery_crud->display_as('maxScore','Max Score');
		$this->grocery_crud->display_as('questionBankid','Question Bank');
		$this->grocery_crud->display_as('accessLevel','Access Level');
		$this->grocery_crud->display_as('stoppingCriteria','Stopping Criteria');
		$this->grocery_crud->display_as('passKey','Pass Key');
		$this->grocery_crud->display_as('timeLimit','Time Limit');
		$this->grocery_crud->display_as('cumuPerformance','Cummulative Performance');
		$this->grocery_crud->display_as('testCategoryid','Test Category');
		
		$output = $this->grocery_crud->render();
		
		
		$this->load->view('basic', $session_data);
		$this->load->view('examinersidebar', $data);
		
		$this->_example_output($output);
		$this->load->view('footer');
		
		
	}
	
	
	
	public function addquestionbank()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		
		$this->load->library('grocery_crud');
		$this->load->database();
		
		$this->grocery_crud->where('autherid',$session_data['userid']);
		$this->grocery_crud->set_theme('datatables');
		
		$this->grocery_crud->set_subject('Question banks');
		$this->grocery_crud->set_table('questionbank');		//1-n relation
		$this->grocery_crud->add_action('EDIT Questions', '', 'account/addquestion','ui-icon-plus');
		
		
	//	$this->grocery_crud->set_relation('questionBankid','questionbank','qbName');
		//$this->grocery_crud->set_relation('testCategoryid','testcategory','categoryname');
		
		
		//n-n relation
		
		//$this->grocery_crud->set_relation_n_n('Questions', 'question_test', 'question', 'testid', 'qid', '{subject} {topicname} {question} ','priority');
		
		$this->grocery_crud->fields(
				'qbName',	
				'qbSubject',
				'exportPermission',				
				'autherid');
		
		$this->grocery_crud->field_type('autherid', 'hidden',$session_data['userid']);
		$this->grocery_crud->display_as('qbName','Name of Question Bank');
		$this->grocery_crud->display_as('qbSubject','Subject of Question Bank');
		$this->grocery_crud->display_as('exportPermission','Export permission');
		
		$output = $this->grocery_crud->render();
		
		
		$this->load->view('basic', $session_data);
		$this->load->view('examinersidebar', $data);
		
		$this->_example_output($output);
		$this->load->view('footer');
		
		
	}

	public function addquestion($qbid)
	{
	
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		
		$this->load->library('grocery_crud');
		$this->load->database();
		
		$this->grocery_crud->where('questionBankid',$qbid);
		$this->grocery_crud->unset_add();
		$this->grocery_crud->set_subject('Questions');
		$this->grocery_crud->set_table('questions');		//1-n relation
		$this->grocery_crud->set_relation('questionBankid','questionbank','qbName');
		
		
		//n-n relation
		
		//$this->grocery_crud->set_relation_n_n('Questions', 'question_test', 'question', 'testid', 'qid', '{subject} {topicname} {question} ','priority');
		

//		$this->grocery_crud->field_type('userid', 'hidden',$session_data['userid']);
		$this->grocery_crud->display_as('questionBankid','Question Bank');
		$this->grocery_crud->display_as('questionText','Question Text');
		$this->grocery_crud->display_as('parameterA','Parameter A');
		$this->grocery_crud->display_as('parameterB','Parameter B');
		$this->grocery_crud->display_as('parameterC','Parameter B');
		$this->grocery_crud->display_as('parameterD','Parameter D');
		
	//	$this->grocery_crud->required_fields('questionBankid', 'questionText', 'parameterA', 'parameterB', 'parameterC', 'parameterD');
		
		$output = $this->grocery_crud->render();
		$this->_example_output($output);
		
		
		$this->load->view('basic', $session_data);
		$this->load->view('examinersidebar', $data);
		

		
		$this->load->view('footer');

	}

	
	
	
	
	
	public function addquestionbycsv()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		$data['qbid'] = $this->takecat->get_qbid($session_data['userid']);
		$this->load->view('basic', $session_data);
		$this->load->view('examinersidebar', $data);
		$this->load->view('uploadview', array('error' => ' ' ));
		$this->load->view('footer');
		
	
	}
	
/*	public function csv_read()
	{
		$this->load->view('csv_upload', array('error' => ''));
	}
	*/
	public function do_upload_qb()
	{
			$session_data = $this->session->userdata('logged_in');
			$data['type'] = $session_data['usertype'];
			$qbid = $this->input->post('qbid');
			
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'txt|gif|jpg|png';
			$config['max_size']	= '10000';
		
			$qbid= $this->input->post('qbid');
			$this->load->library('upload', $config);
		
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
		
				$this->load->view('basic', $session_data);
				$this->load->view('examinersidebar', $data);
				$this->load->view('uploadview', array('error' => ' ' ));
				
				$this->load->view('footer');
			}
			else
			{
				//$data['upload'] = array('upload_data' => $this->upload->data());
					 //rint_r($data);
				$upload_data = $this->upload->data();
				
				$file_path = $upload_data['full_path'];
				echo $file_path;
				

				
				$fieldseparator = ",";
				$lineseparator = "\n";
				$csvfile = $file_path;
				
				$addauto = 1;
				
	
				/********************************/
				
				
				if(!file_exists($csvfile)) {
					echo "File not found. Make sure you specified the correct path.\n";
					exit;
				}
				
				$file = fopen($csvfile,"r");
				
				if(!$file) {
					echo "Error opening data file.\n";
					exit;
				}
				
				$size = filesize($csvfile);
				
				if(!$size) {
					echo "File is empty.\n";
					exit;
				}
				
				$csvcontent = fread($file,$size);
				
				fclose($file);
				
				
				$lines = 0;
				$queries = "";
				$linearray = array();
				
				foreach(split($lineseparator,$csvcontent) as $line) {
				
					$lines++;
				
					$line = trim($line," \t");
				
					$line = str_replace("\r","",$line);
				
				
					$linearray = explode($fieldseparator,$line);
				
					$linemysql = implode(",",$linearray);
				
					if($addauto)
					{
						echo "</br>";
				 	
					echo $linemysql; 
				 	$this->takecat->insert_question($linemysql,$session_data['userid'],$qbid);
					
					}	//	$query = "insert into $databasetable values('','$linemysql');";
					
						//$query = "insert into $databasetable values('$linemysql');";
				
				//	$queries .= $query . "\n";
				
					//@mysql_query($query);
				}
				
				//@mysql_close($con);
		
				
				echo "Found a total of $lines records in this csv file.\n";
				
				
					 $this->load->view('basic', $session_data);
					 $this->load->view('examinersidebar', $data);
					 $this->load->view('upload_success', $data);
					
					 $this->load->view('footer');
			}
		
		
	}
	

	public function adduserbycsv()
	{
	
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
		$this->load->view('basic', $session_data);
		$this->load->view('examinersidebar', $data);
		$this->load->view('useruploadview', array('error' => ' ' ));
		$this->users_curd();
	
	
	}
	
	
	
	public function do_upload_user()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['type'] = $session_data['usertype'];
	
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'txt|gif|jpg|png';
		$config['max_size']	= '10000';
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
	
			$this->load->view('basic', $session_data);
			$this->load->view('examinersidebar', $data);
			$this->load->view('useruploadview', array('error' => ' ' ));
			$this->users_curd();
		}
		else
		{
			//$data['upload'] = array('upload_data' => $this->upload->data());
			//rint_r($data);
			$upload_data = $this->upload->data();
	
			$file_path = $upload_data['full_path'];
			echo $file_path;
	
	
	
			$fieldseparator = ",";
			$lineseparator = "\n";
			$csvfile = $file_path;
	
			$addauto = 1;
	
	
			/********************************/
	
	
			if(!file_exists($csvfile)) {
				echo "File not found. Make sure you specified the correct path.\n";
				exit;
			}
	
			$file = fopen($csvfile,"r");
	
			if(!$file) {
				echo "Error opening data file.\n";
				exit;
			}
	
			$size = filesize($csvfile);
	
			if(!$size) {
				echo "File is empty.\n";
				exit;
			}
	
			$csvcontent = fread($file,$size);
	
			fclose($file);
	
	
			$lines = 0;
			$queries = "";
			$linearray = array();
	
			foreach(split($lineseparator,$csvcontent) as $line) {
	
				$lines++;
	
				$line = trim($line," \t");
	
				$line = str_replace("\r","",$line);
	
	
				$linearray = explode($fieldseparator,$line);
	
				$linemysql = implode(",",$linearray);
	
				if($addauto)
				{
							
					$this->takecat->insert_userbycsv($linemysql, $session_data['userid']);
						
				}	//	$query = "insert into $databasetable values('','$linemysql');";
					
				//$query = "insert into $databasetable values('$linemysql');";
	
				//	$queries .= $query . "\n";
	
				//@mysql_query($query);
			}
	
			//@mysql_close($con);
	
	
			$data['lines'] = $lines;
	
	
			$this->load->view('basic', $session_data);
			$this->load->view('examinersidebar', $data);
			$this->load->view('userupload_success', $data);
			$this->users_curd();
		}
	
	
	}
	
	public function users_curd()
	
	{
		
		$session_data = $this->session->userdata('logged_in');
		$this->load->library('grocery_crud');
		$this->load->database();
		$this->grocery_crud->where('clientid',$session_data['userid']);
		$this->grocery_crud->set_subject('EDIT USERS');
		$this->grocery_crud->set_table('user');

		$this->grocery_crud->fields( 'clientid','userName', 'phoneNo', 'password', 'passkey', 'email', 'first_name', 'last_name');
		
		$this->grocery_crud->field_type('clientid', 'hidden',$session_data['userid']);
		$this->grocery_crud->field_type('phoneNo','integer');
		$this->grocery_crud->field_type('passkey','integer');
		
		
		$this->grocery_crud->required_fields('userName', 'phoneNo', 'password', 'passkey', 'email', 'first_name', 'last_name');
		
		
		$output = $this->grocery_crud->render();
		
		$this->load->view('basic', $session_data);
		$this->_example_output($output);
		$this->load->view('footer');
		
		
	}
	
	
	public  function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}
	
	

	public function sendhallticket($email,$testid) {
	
		$test = $this->takecat->get_test_info($testid);
	
		if($this->takecat->grant_access($testid,$email))
		{
	
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
	
		$this->email->subject('Hall ticket from takecat ');
		$message="You are invited to take" . $test[0]['testname'] . " test from takecat. Your passkey is".$test[0]['passKey']."Please enter your email with the passkey";
		$this->email->message($message);
	
		$this->email->send();
	
		echo $this->email->print_debugger();
	
		$this->load->view('email_view');
	
		$result = $this->email->send();
		}
	
	}
	

	
	public function newpass()
	{	
		$this->load->view('newpass');
		
	}
	

	
	public function help()
	{
		
		$data['userid']= $session_data['userid'];
		$data['username']= $session_data['username'];
		$data['type'] = $session_data['usertype'];
		
		
		$this->load->view('basic', $session_data);
		
		$this->load->view('helpview.php');
		$this->load->view('footer');
		
	}
	
	public function logout()
	{		
		session_destroy();
		
		$this->session->unset_userdata('logged_in');
		$this->load->helper(array('form', 'url'));
		$this->load->view('homepageView');
		$this->load->view('footer');
	}
	
	
	
}


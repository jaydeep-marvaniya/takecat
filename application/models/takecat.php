<?php
	class takecat extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	
	public	function check_user()
	{
		$username = $this->input->post('username');
	
		$this -> db -> select('username');
		$this -> db -> from('user');
		$this -> db -> where('username = ' . "'" . $username . "'");
	
	
		$this -> db -> limit(1);
		$query = $this -> db -> get();
	
		if($query -> num_rows() == 1)
		{
			RETURN	FALSE;
		}
		else
		{
			return true;
		}
	
	}
	
	public	function check_email()
	{
		$email = $this->input->post('email');
	
		$this -> db -> select('username');
		$this -> db -> from('user');
		$this -> db -> where('email = ' . "'" . $email . "'");
	
	
		$this -> db -> limit(1);
		$query = $this -> db -> get();
	
		if($query -> num_rows() == 1)
		{
			RETURN	FALSE;
		}
		else
		{
			return true;
		}
	
	}
	
	function login($username, $password)
	{
		$this -> db -> select('userid, username, password,usertype');
		$this -> db -> from('users');
		$this -> db -> where('username = ' . "'" . $username . "'");
		$this -> db -> where('password = ' . "'" . $password . "'");
		$this -> db -> limit(1);
	
		$query = $this -> db -> get();
	
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	
	public function get_userinfo($userid)
	{
		$query = $this->db->query(" SELECT * FROM `user` WHERE `userid`= '$userid'");
		return $query->result_array();
	
	}
	

	public function get_test($userid)
	{	
		$query = $this->db->query(" SELECT * FROM `test_adpt` join `testaccess` on `test_adpt`.`testid`=`testaccess`.`testid`  where `testaccess`.`userid`=$userid");
		return $query->result_array();
		
	}
	
	public function get_public_test()
	{
		$query = $this->db->query(" SELECT * FROM `test_adpt` where `test_adpt`.`accessLevel` = 'public'");
		return $query->result_array();
		
		
	}
	
	public function get_test_info($testid)
	{
	
		$query = $this->db->query(" SELECT * FROM `test_adpt` WHERE `test_adpt`.`testid`='$testid'");
		return $query->result_array();
	
	}
	
	
	public function next_question($qbid, $qid )
	{
		$query = $this->db->query("SELECT * FROM  `questions` WHERE (questionBankid='$qbid' && uid='$qid')");
		return $query->result_array();
	
		
	}
	
	public function check_ans($uid)
	{
		
		$query = $this->db->query("SELECT * FROM  `questions` WHERE  uid='$uid'");
		return $query->result_array();
	}
	

	
	
	//result
	
	public function get_pasttests($userid)
	{
		
		$query = $this->db->query(" SELECT * FROM `testtaken` natural join `test_adpt`  where `testtaken`.`userid`='$userid' "  );
		return $query->result_array();
		
		
	}
	
	public function get_pastresults($userid)
	{
	
		$query = $this->db->query(" SELECT * FROM `test_adpt_result` join `test_adpt` on `test_adpt`.`testid`=`test_adpt_result`.`testid` where `test_adpt_result`.`userid`='$userid'  "  );
		return $query->result_array();
	
	
	}
	
	public function get_allresult($userid)
	{
		$query = $this->db->query(" SELECT * FROM `test_adpt_result` join `test_adpt` on `test_adpt`.`testid`=`test_adpt_result`.`testid` where `test`.`userid`='$userid'  "  );
		return $query->result_array();
		
		
		
	}
	
	public function get_questionbank()
	{
		$query = $this->db->query("SELECT * FROM `questionbank`"  );
		return $query->result_array();
	
	}
	
	public function update_pass($sec_ran,$email)
	{
		$query = $this->db->query("update user set password='$sec_ran' where email='$email' "  );
		return $query->result_array();
	
	}
	
	
	
	
	
	public function save_score($userid,$testid, $theta)
	{
		$data = array(
		
		
		
				'userid'=> $userid,
				'testid'=> $testid,
				'qscore' => $theta
		
		);
		
		return 	$this->db->insert('test_adpt_result', $data);
		
		
		
		
		
	}
	
	public function get_test_result($userid)
	{
	
		$query = $this->db->query("SELECT * FROM `test_adpt_result` where `test_adpt_result`.`userid` = '$userid' "  );
		return $query->result_array();
	
	}
	
	
	
	
	public function grant_access($testid,$emailid)
	{
		$data = array(
		
		
				
				'userid'=> $userid,
				'testid'=> $testid	
				
		);
		
		return 	$this->db->insert('testaccess', $data);
		
	}
	
	//general
	
	public function update_user(){
		$this->load->helper('url');
		$session_data = $this->session->userdata('logged_in');
	
		$data = array(
		
		
				'first_name' => $this->input->post('first_name'),
				'email'=> $this->input->post('email'),
				'password' => $this->input->post('password'),
				'userName' => $this->input->post('username'),
				'last_name' => $this->input->post('last_name'),
				'Type'=>  $this->input->post('type')
					
		);
	
		$this->db->where('userid', $session_data['userid'] );
		return $this->db->update('user', $data);
	
	
	}
	
	
	public function get_password($email,$username){
	
		$query = $this->db->query("SELECT * FROM `user` where (`email`='$email' && `userName`='$username' )"  );
		return $query->result_array();
		
		
		
	}
	
	public function insert_user(){
	
		$data = array(
	
	
				'first_name' => $this->input->post('first_name'),
				'email'=> $this->input->post('email'),
				'password' => $this->input->post('password'),
				'userName' => $this->input->post('username'),
				'last_name' => $this->input->post('last_name'),
				'Type'=>  $this->input->post('type')
			
				);
	
		return 	$this->db->insert('user', $data);
	
	}
	
	
	public function get_qbid($userid)
	{
		$query = $this->db->query("SELECT * FROM `questionbank` where `autherid`='$userid'");
		return $query->result_array();
		
		
	}
	
	public function insert_question($lines,$userid,$qbid)
	{
		
	
		$query = $this->db->query("INSERT INTO `questions` (`questionBankid`, `questionText`, `parameterA`, `parameterB`, `parameterC`, `parameterD`, `option1`, `option2`, `option3`, `option4`,`option5`,`answer`,`userid`) VALUES ($qbid,$lines,$userid)"  );
		echo $this->db->affected_rows();
	
		
	}
	
	
	public function insert_userbycsv($lines,$userid){
	
		$type='examinee';
		$cilentid= $userid;
		$query = $this->db->query("INSERT INTO `user` (  `Type`, `email`, `passkey`,`clientid` ) VALUES ('$type',$lines,'$cilentid')"  );
		echo $this->db->affected_rows();
	
	
	}
	
	
	
	public function deleteprofile($userid){
		
		$this->db->where('userid', $userid);
		return $this->db->delete('user');
		
		
		
	}
	
	
	
	//end of  takecat models
	

	
	// from studygujarat
	
	
	
	
}

?>
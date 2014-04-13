<?php
	class test_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get_users(){
	
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('userid','ASC');
		$getData = $this->db->get();
		if($getData->num_rows() > 0)
		return $getData->result_array();
		else return null;
	
	}
	
	
	public function get_client($clientid= FALSE)
	{
		if($clientid==TRUE)
		{	
		$query = $this->db->query(" SELECT * FROM `client` WHERE `clientid`= '$clientid'");
		return $query->result_array();}
		
		else
		{
			$query = $this->db->query(" SELECT * FROM `client` WHERE `clientid`= '1'");
			return $query->result_array();
		}
		
	}
	
	
	
	public function get_user($userid){
		$query = $this->db->query(" SELECT * FROM `users` natural join `client` WHERE `userid`= '$userid'");
		return $query->result_array();
		
		
	}
	
	public function get_questionbank(){
		$query = $this->db->query(" SELECT * FROM `question`");
		return $query->result_array();
		
		
		
	}
	
 	public function update_user(){
	$this->load->helper('url');
	$session_data = $this->session->userdata('logged_in');
	
	$data = array(
		
	
		'name' => $this->input->post('name'),
		'address' => $this->input->post('address'),
		'school' => $this->input->post('school'),
		'city' => $this->input->post('city'),
		'mobileno' => $this->input->post('mobileno'),
		'email'=> $this->input->post('email')
								);
	
		$this->db->where('userid', $session_data['userid'] );
		return $this->db->update('users', $data); 
	
	
	} 
	
	
		public function update_password(){
	$this->load->helper('url');
	$session_data = $this->session->userdata('logged_in');
	
	$data = array(
		
	
		'password' => $this->input->post('newpassword')
		
								);
	
		$this->db->where('userid', $session_data['userid'] );
		return $this->db->update('users', $data); 
	
	
	} 
	
	
	
	public function get_test($userid,$usertype){
		
			$query = $this->db->query(" SELECT * FROM `test` left outer join `test_result` on `test`.`testid`=`test_result`.`test` && `test_result`.`user`=$userid where `test`.`Class`= '$usertype'	 "  );
			return $query->result_array();
		
		
	}
	
	
	public function get_test_info($testid){
		
		
		$query= $this->db->query("SELECT * FROM `test` join `test_info` on `test`.`testid`= `test_info`.`test` where `test`.`testid` = '$testid'");
		return $query->result_array();
		
		
	}
	

	public function get_question($testid = FALSE){
		$query = $this->db->query("SELECT * FROM question_test natural join question  WHERE testid=$testid ");
		return $query->result_array();
	
	}
	
	public function set_result($data){
	
		$this->load->helper('url');
		return $this->db->insert('user_question', $data);
	}
	
	

	public function get_result($testid,$userid){
		$query= $this->db->query("SELECT * FROM `test_result` join `test` join `test_info2` on `test_result`.`test` = `test`.`testid` && `test`.`testid`= `test_info2`.`test` where `test_result`.`user`= $userid && `test_result`.`test` = $testid");
		return $query->result_array();
	
	
	
	}
	
	public function get_results($userid){
		$query= $this->db->query("SELECT * FROM `test_result` join `test` join `test_info2` on `test_result`.`test` = `test`.`testid` && `test`.`testid`= `test_info2`.`test` where `test_result`.`user`= '$userid' ");
		return $query->result_array();
	
	
	
	}
		
	public function get_subjects($userid) {
	
		
	
	}
	
	
	public function get_rank($testid,$userid){
		$query = $this->db->query("SET @rank := 0;
select rank from(
SELECT test_result.*, @rank := @rank + 1 as rank
FROM  test_result where test_result.test='$testid'
ORDER BY test_result.PERCENTAGE desc) t2 where
t2.user='$userid'
				");
		return $query->result_array();
		
		
	}

	public function get_solution($testid,$userid){
		$query = $this->db->query("SELECT * FROM user_question natural join question  WHERE testid=$testid && userid= $userid  ");
				return $query->result_array();
	
	}
	
	
	
/*	public function get_test_subjectwise($subject = FALSE){
		$query = $this->db->get_where('test', array('subject' => $subject));
		return $query->row_array();
	}
	
	public function get_test_topicwise ($topicid= FALSE){
		$query = $this->db->get_where('test', array('topicid' => $topicid));
		return $query->row_array();
		
		
		
	} */
	

	
	
	
}

?>
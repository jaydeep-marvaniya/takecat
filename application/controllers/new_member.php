<?php
class new_member extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('test_model');
		$this->load->helper('url');
	}
	public function index() {
		$data['member'] = $this->test_model->get_users();
		$this->load->view('test/user_print', $data);
	}

	function topdf () {
		$data['member'] = $this->test_model->get_users();

		$this->load->library('mpdf');
		$html = $this->load->view('test/user_print',$data,TRUE);
		$this->mpdf->WriteHTML('<p> HELLO WORLD </p>');
		$this->mpdf->Output();

	}
}
?>
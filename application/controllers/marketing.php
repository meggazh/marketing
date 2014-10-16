<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marketing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
	}

	function index()
	{
		
		$this->load->view('master/bg_top');
		$this->load->view('master/bg_marketing');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

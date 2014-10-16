<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
	}

	function index()
	{
		$this->load->view('master/bg_top');
		$this->load->view('master/link');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

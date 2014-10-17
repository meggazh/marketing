<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Model{

	protected $tbl = 'mstproduct';

	function __construct(){
		$this->load->database('post',TRUE);
	}


	function get_all(){

		return $this->db->get($this->tbl)->result();
	}
}
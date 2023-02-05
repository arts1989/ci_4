<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('ion_auth');
	}	

	public function index()
	{
		
		$data['user'] = $this->ion_auth->user()->result();
		$this->load->view('templates/index/index', $data);
	}
}

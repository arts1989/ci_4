<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

	public function index()
	{
		//$this->load->database();
		//echo '<pre>';

		$this->load->database();
		$auth = $this->load->library('ion_auth');
		$this->load->view('templates/project/index');
	}
}

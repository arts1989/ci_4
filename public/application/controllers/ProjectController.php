<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/project/index');
	}
}

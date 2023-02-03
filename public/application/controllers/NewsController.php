<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/news/index');
	}
}

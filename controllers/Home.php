<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('layout');

		$this->layout->view('layouts/home', array('title' => 'View Layout'));
	}
}

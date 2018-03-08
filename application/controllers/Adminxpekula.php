<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminxpekula extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model(array());
    $this->load->library(array('form_validation','session'));
    $this->load->helper(array('url','html','form'));
  }

	public function index()
	{
		$this->load->view('adminxpekula/index');
	}

}

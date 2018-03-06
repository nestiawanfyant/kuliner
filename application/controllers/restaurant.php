<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

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
		$this->load->view('pekula/restaurant');
	}

  public function view()
  {
    $this->load->view('pekula/view/v_restaurant');
  }

  public function view_menu()
  {
    $this->load->view('pekula/view/v_menu');
  }

}

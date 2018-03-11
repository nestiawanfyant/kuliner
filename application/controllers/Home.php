<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('url','form','html'));
    $this->load->model(array('m_aksi'));
    $this->load->library(array('form_validation','session'));
  }

	public function index()
	{
		$this->load->view('pekula/home');
	}

  public function register()
  {
    $this->load->view('pekula/register');
  }

  public function role()
  {
    $this->load->view('pekula/role.php');

    if (isset($_POST['addrole'])) {
      $error_kode = array(
        'required'        => "Silakan isi Kode Role-nya",
        'max_length'      => "Maksimal data disi dengan 5 karakter",
        'min_length'      => "Minimal data diisi dengan 2 karakter",
      );

      $error_role = array(
        'required'       => "Silakan isi name role-nya",
        'max_length'     => "Maksimal data disi dengan 20 karakter",
        'min_length'     => "Minimal data diisi dengan 4 karakter",
      );

      $this->form_validation->set_rules('kode','Kode','required|max_length[5]|min_length[2]|integer',$error_kode);
      $this->form_validation->set_rules('role','Role','required|max_length[20]|min_length[4]',$error_role);

      if ($this->form_validation->run() != false) {
        $kode = $this->input->post('kode');
        $role = $this->input->post('role');

        $data = array(
          'kode' => $kode,
          'role' => $role,
        );

        $this->m_aksi->addRole('role',$data);
        die('berhasil');
      } else {
        echo form_error('kode');
        echo form_error('role');
      }
    }

  }

}

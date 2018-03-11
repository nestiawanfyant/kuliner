<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aksi extends CI_Model {

  public function addRole($name, $data)
  {
    $this->db->insert($name, $data);
  }

}

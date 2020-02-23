<?php

class Main extends CI_Controller {
  
  public function index() {
  }
  
  public function get() {
    $name = $this->input->post('name');
    $query = $this->db->get($name);
    echo json_encode($query->result_array());
  }
  
  public function get_by_id() {
    $name = $this->input->post('name');
    $id = intval($this->input->post('id'));
    $query = $this->db->get_where($name, array(
        'id' => $id
      ));
    echo json_encode($query->result_array());
  }
  
  public function get_column_by_id() {
    $columnName = $this->input->post('coloumn_name');
    $name = $this->input->post('name');
    $id = intval($this->input->post('id'));
    $query = $this->db->get_where($name, array(
        'id' => $id
      ));
    echo json_encode($query->row_array()[$columnName]);
  }
  
  public function get_by_id_name() {
    $this->load->helper('form');
    $name = $this->input->post('name');
    /*$idName = $this->input->post('id_name');
    $id = intval($this->input->post('id'));
    $query = $this->db->get_where($name, array(
        'banner_id' => 13
      ));
    /*echo json_encode($query->result_array());*/
    echo $name;
  }
  
  public function get_by_id_name_string() {
    $name = $this->input->post('name');
    $idName = $this->input->post('id_name');
    $id = $this->input->post('id');
    $query = $this->db->get_where($name, array(
        $idName => $id
      ));
    echo json_encode($query->result_array());
  }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

  public function index()
  {
    $this->load->view('map/index');
  }

  public function getlokasi()
  {
    $lat = $this->input->post('latitude');
    $lng = $this->input->post('longitude');
    

    $data = $this->db->query("SELECT *, ( 3959 * acos( cos( radians(".$lat.") ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(".$lng.") ) + sin( radians(".$lat.") ) * sin( radians( lat ) ) ) ) AS distance FROM `lokasi` HAVING distance < '5'");

    // $data =  $this->db->get('lokasi')->result();
    echo json_encode($data->result_array());
    
  }

}

/* End of file Maps.php */

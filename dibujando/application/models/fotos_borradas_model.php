<?php

class Fotos_borradas_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('fotos_borradas', $datos);
    }
}
?>

<?php

class Tipos_dni_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        tipos_dni");
        return $query->result_array();
    }
}
?>

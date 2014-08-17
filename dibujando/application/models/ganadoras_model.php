<?php

class Ganadoras_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('ganadoras', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *, f.nombre as titulo
                                    FROM
                                        ganadoras g,
                                        fotos f,
                                        usuarios u
                                    WHERE
                                        f.idfoto = g.idfoto AND
                                        f.idusuario = u.idusuario");
        return $query->result_array();
    }
    
    public function get($idfoto) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        ganadoras
                                    WHERE
                                        idfoto = '$idfoto'");
        return $query->row_array();
    }
}
?>

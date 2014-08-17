<?php

class Votos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function get_voto($idusuario, $idfoto) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        votaciones
                                    WHERE
                                        idusuario = '$idusuario' AND
                                        idfoto = '$idfoto'");
        return $query->row_array();
    }
    
    public function set($datos) {
        $this->db->insert('votaciones', $datos);
    }
    
    public function update($puntaje, $id) {
        $key = array(
            'idusuario' => $id['idusuario'],
            'idfoto' => $id['idfoto']
        );
        $puntaje = array(
            'puntaje' => $puntaje
        );
        
        $this->db->update('votaciones', $puntaje, $key);
    }
    
    public function get_voto_por_ip($idfoto, $ip) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        votos
                                    WHERE
                                        idfoto = '$idfoto' AND
                                        ip = '$ip' AND
                                        timestamp > ADDDATE(CURDATE(), -1)");
        
        
        return $query->result_array();
    }
    
    public function set_voto_ip($idfoto, $ip) {
        $this->db->insert('votos', array('idfoto' => $idfoto, 'ip' => $ip));
    }
}
?>

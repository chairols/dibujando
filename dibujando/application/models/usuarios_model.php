<?php

class Usuarios_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function registrar($datos) {
        $this->db->insert('usuarios', $datos);
    }
    
    public function existe_valor_en_campo($campo, $valor) {
        $query = $this->db->query("SELECT * 
                                    FROM 
                                        usuarios 
                                    WHERE 
                                        $campo = '$valor'");
        $res = $query->row_array();
        if(empty($res)) {
            return false;
        } else {
            return true;
        }
    } 
    
    public function login($usuario, $password) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        usuario = '$usuario' AND
                                        password = '$password'");
        return $query->row_array();
    }
    
    public function get_jurados() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        tipo_usuario = 2");
        return $query->result_array();
    }
    
    public function get_usuario($string) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        usuario LIKE '%$string%'
                                    AND
                                        tipo_usuario = 3");
        return $query->result_array();
    }
    
    public function get_usuario_por_email($email) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        email = '$email'");
        return $query->row_array();
    }
}
?>

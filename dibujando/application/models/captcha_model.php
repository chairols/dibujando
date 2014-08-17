<?php

class Captcha_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('captcha', $datos);
        $this->borrar($datos['captcha_time']);
    }
    
    public function get($time, $ip) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        captcha
                                    WHERE
                                        captcha_time = '$time' AND
                                        ip_address = '$ip'");
        return $query->row_array();
        
    }
    
    private function borrar($time) {
        $time = explode('.', $time);
        $time = $time[0];
        $time -= 120;
        $this->db->query("DELETE 
                            FROM
                                captcha
                            WHERE
                                captcha_time < '$time'");
    }
}
?>

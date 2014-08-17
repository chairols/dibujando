<?php

class Preseleccionadas_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('preseleccionadas', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        preseleccionadas p,
                                        fotos f
                                    WHERE
                                        p.idfoto = f.idfoto");
        return $query->result_array();
    }
    

    public function preseleccionados() {
        $query = $this->db->query("SELECT *, u.nombre as nombre, f.nombre as titulo
                                    FROM
                                        fotos f,
                                        preseleccionadas p,
                                        usuarios u
                                    WHERE
                                        p.idfoto = f.idfoto AND
                                        f.idusuario = u.idusuario
                                    ORDER BY
                                        u.apellido, u.nombre");
        return $query->result_array();
    }
    
    /*public function gets_limit($limit) {
        $query = $this->db->query("SELECT f.*, AVG(v.puntaje) as promedio
                                    FROM
                                        preseleccionadas p,
                                        fotos f,
                                        votaciones v
                                    WHERE
                                        p.idfoto = f.idfoto AND
                                        v.idfoto = f.idfoto AND
                                        f.aprobado = '1'
                                    ORDER BY
                                        promedio DESC
                                    LIMIT
                                        0, $limit");
        return $query->result_array();
     * *
     */
}
?>

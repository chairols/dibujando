<?php
class Fotos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function get_mis_fotos($idusuario) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        idusuario = '$idusuario'");
        return $query->result_array();
    }
    
    public function set($datos) {
        $this->db->insert('fotos', $datos);
        return $this->db->insert_id();
    }
    
    public function get_fotos_sin_aprobar() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 0");
        return $query->result_array();
    }
    
    public function get_fotos_aprobadas() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 1
                                    ORDER BY
                                        idfoto DESC");
        return $query->result_array();
    }
    
    public function get_fotos_aprobadas_random() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 1
                                    ORDER BY
                                        RAND()");
        return $query->result_array();
    }
    
    public function get_fotos_aprobadas_limit($limit) {
        $limit -=1;
        $limit *= 51;
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 1
                                    ORDER BY
                                        idfoto DESC
                                    LIMIT $limit, 51");
        return $query->result_array();
    }
    
    public function get_fotos_no_aprobadas() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 2
                                    ORDER BY
                                        idfoto DESC");
        return $query->result_array();
    }
    
    public function get_fotos_no_aprobadas_limit($limit) {
        $limit -=1;
        $limit *= 50;
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        aprobado = 2
                                    LIMIT $limit, 50");
        return $query->result_array();
    }
    
    
    public function aprobar($idfoto, $idaprobacion) {
        $query = $this->db->query("UPDATE 
                                        fotos
                                    SET 
                                        aprobado = '$idaprobacion'
                                    WHERE
                                        idfoto = $idfoto");
    }
    
    public function get_usuario_por_foto($idfoto) {
        $query = $this->db->query("SELECT u.*
                                    FROM
                                        usuarios u,
                                        fotos f
                                    WHERE
                                        u.idusuario = f.idusuario AND
                                        f.idfoto = '$idfoto'");
        return $query->row_array();
    }
    
    public function get($idfoto) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        idfoto = '$idfoto'");
        return $query->row_array();
    }
    
    public function borrar($idfoto) {
        $query = $this->db->query("DELETE 
                                    FROM
                                        fotos
                                    WHERE
                                        idfoto = '$idfoto'");
    }
    
    public function get_fotos_votadas($idusuario) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        votaciones
                                    WHERE
                                        idusuario = '$idusuario'");
        return $query->result_array();
    }
    
    public function get_fotos_votadas_limit($idusuario, $limit) {
        $limit -=1;
        $limit *= 51;
        $query = $this->db->query("SELECT *
                                    FROM
                                        votaciones
                                    WHERE
                                        idusuario = '$idusuario'
                                    ORDER BY
                                        puntaje DESC
                                    LIMIT $limit, 51");
        return $query->result_array();
    }
    
    public function get_fotos_aprobadas_por_titulo($titulo) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        nombre LIKE '%$titulo%' AND
                                        aprobado = '1'");
        return $query->result_array();
    }
    
    public function get_fotos_aprobadas_por_dni($dni) {
        $query = $this->db->query("SELECT f.*
                                    FROM
                                        fotos f,
                                        usuarios u
                                    WHERE
                                        f.idusuario = u.idusuario AND
                                        u.numerodni = '$dni' AND
                                        f.aprobado = '1'");
        return $query->result_array();
    }
    
    public function get_foto_aprobada_por_id($idfoto) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        idfoto = '$idfoto' AND
                                        aprobado = '1'");
        return $query->result_array();
    }
    
    public function get_promedio_por_id($idfoto) {
        $query = $this->db->query("SELECT AVG(puntaje) as puntaje
                                    FROM
                                        votaciones
                                    WHERE
                                        idfoto = '$idfoto'");
        $res = $query->row_array();
        return $res['puntaje'];
    }
    
    public function get_fotos_para_preseleccion($limit) {
        $query = $this->db->query("SELECT v.idfoto, AVG(v.puntaje) as promedio, f.*
                                    FROM
                                        votaciones v,
                                        fotos f
                                    WHERE
                                        f.idfoto = v.idfoto AND
                                        f.aprobado = '1'
                                    GROUP BY
                                        v.idfoto
                                    ORDER BY
                                        promedio DESC
                                    LIMIT 0, $limit");
        return $query->result_array();
    }
    
    public function get_ultima_foto_votada($idusuario) {
        $query = $this->db->query("SELECT min(idfoto) as ultima
                                    FROM
                                        votaciones
                                    WHERE
                                        idusuario = '$idusuario'");
        return $query->row_array();
    }
    
    public function get_proximas_fotos_a_votar($idultimafoto) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        fotos
                                    WHERE
                                        idfoto < '$idultimafoto' AND
                                        aprobado = '1'
                                    ORDER BY
                                        idfoto DESC");
        return $query->result_array();
    }
}
?>

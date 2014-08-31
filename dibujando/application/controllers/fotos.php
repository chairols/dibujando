<?php

class Fotos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'email',
            'form_validation',
            'h_paginacion'
        ));
        $this->load->helper(array(
            'url',
            'captcha'
        ));
        $this->load->model(array(
            'fotos_model',
            'votos_model',
            'fotos_borradas_model',
            'usuarios_model',
            'preseleccionadas_model',
            'ganadoras_model'
        ));
    }
    
    public function cargar() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 3) {
            show_404();
        }
        $data['exitoso'] = 0;
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $config['upload_path'] = "./upload/";
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = "2048";
            //$config['max_width'] = '1600';
            //$config['max_height'] = '1200';
            $config['encrypt_name'] = true;
            $config['remove_spaces'] = true;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());

                $datos = array(
                    'idusuario' => $session['SID'],
                    'nombre' => $this->input->post('nombre'),
                    'foto' => $data['upload_data']['file_name'],
                    'aprobado' => 1
                );
                $fotos = $this->fotos_model->get_mis_fotos($session['SID']);
                if(count($fotos) < 2) {
                    $id = $this->fotos_model->set($datos);
                    
                    $this->email->from('no-responder@gentedemiciudad.com', 'XV Concuso Gente de mi ciudad');
                    $this->email->to($session['email']);
                    $this->email->subject('Foto subida con éxito');
                    $this->email->message($session['nombre'].' '.$session['apellido'].'

Gracias por participar en el XV Concurso fotográfico Gente de mi Ciudad 
Su foto con el título:'.$this->input->post('nombre').' ID ('.$id.') ha sido subida con éxito.');
                
                    $this->email->send();
                    
                    $data['exitoso'] = '1';
                }
            }
        }
        
        
        
        
        $data['fotos'] = $this->fotos_model->get_mis_fotos($session['SID']);
        $data['session'] = $session;
        
        
        $this->load->view('fotos/cargar', $data);
    }
    
    public function pendientes() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        $data['fotos'] = $this->fotos_model->get_fotos_sin_aprobar();
        $data['jurados'] = $this->usuarios_model->get_jurados();
        $data['session'] = $session;
        
        foreach ($data['jurados'] as $key => $value) {
            $data['jurados'][$key]['fotos'] = $this->fotos_model->get_fotos_aprobadas();
            foreach ($data['jurados'][$key]['fotos'] as $key2 => $value2) {
                $data['jurados'][$key]['fotos'][$key2]['voto'] = $this->votos_model->get_voto($value['idusuario'], $value2['idfoto']);
            }
        }
        
        $this->load->view('fotos/pendientes', $data);
    }
    
    public function desaprueba($idfoto, $idaprobacion, $pagina) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        $usuario = $this->fotos_model->get_usuario_por_foto($idfoto);
        
        $this->fotos_model->aprobar($idfoto, $idaprobacion);
        $this->email->from('admin@bco-ciudad.local', 'Administrador Bco Ciudad');
        $this->email->to($usuario['email']);
        
        $res = null;
        if($idaprobacion==1) {
            $res = "aprobada";
        } else {
            $res = "rechazada";
        }
        
        $body = "Hemos calificado tu fotografía número ".$idfoto."
            Tu fotografía ha sido ".$res;
       
        
        $this->email->subject('Concurso de Fotos Banco Ciudad');
        $this->email->message($body);
        
        //$this->email->send();
        
        
        redirect('/fotos/aprobadas/'.$pagina.'/', 'refresh');
    }
    
    public function reaprueba($idfoto, $idaprobacion, $pagina) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        $usuario = $this->fotos_model->get_usuario_por_foto($idfoto);
        
        $this->fotos_model->aprobar($idfoto, $idaprobacion);
        $this->email->from('admin@bco-ciudad.local', 'Administrador Bco Ciudad');
        $this->email->to($usuario['email']);
        
        $res = null;
        if($idaprobacion==1) {
            $res = "aprobada";
        } else {
            $res = "rechazada";
        }
        
        $body = "Hemos calificado tu fotografía número ".$idfoto."
            Tu fotografía ha sido ".$res;
       
        
        $this->email->subject('Concurso de Fotos Banco Ciudad');
        $this->email->message($body);
        
        //$this->email->send();
        
        
        redirect('/fotos/no-aprobadas/'.$pagina, 'refresh');
    }
    
    public function aprueba($idfoto, $idaprobacion) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        $usuario = $this->fotos_model->get_usuario_por_foto($idfoto);
        
        $this->fotos_model->aprobar($idfoto, $idaprobacion);
        $this->email->from('admin@bco-ciudad.local', 'Administrador Bco Ciudad');
        $this->email->to($usuario['email']);
        
        $res = null;
        if($idaprobacion==1) {
            $res = "aprobada";
        } else {
            $res = "rechazada";
        }
        
        $body = "Hemos calificado tu fotografía número ".$idfoto."
            Tu fotografía ha sido ".$res;
       
        
        $this->email->subject('Concurso de Fotos Banco Ciudad');
        $this->email->message($body);
        
        //$this->email->send();
        
        
        redirect('/fotos/pendientes/', 'refresh');
    }
    
    public function votar() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
       
        /*
        $data['fotos'] = $this->fotos_model->get_fotos_aprobadas();
        foreach ($data['fotos'] as $key => $value) {
            //$data['fotos'][$key]['votos'] = $this->votos_model->get_voto($session['SID'], $value['idfoto']);
            if(count($this->votos_model->get_voto($session['SID'], $value['idfoto'])) > 0) {
                unset($data['fotos'][$key]);
            }
        }
         * 
         */
         
        
        $data['fotos'] = $this->fotos_model->get_fotos_aprobadas();
        $data['votadas'] = $this->fotos_model->get_fotos_votadas($session['SID']);
        
        /*
        $tiempoinicial = $this->getTiempo();
        foreach ($data['fotos'] as $key => $value) {
            foreach ($data['votadas'] as $key2 => $value2) {
                if($value['idfoto'] == $value2['idfoto']) {
                    unset($data['fotos'][$key]);
                }
            }
        }
        $tiempofinal = $this->getTiempo();
        
        var_dump(round($tiempofinal - $tiempoinicial, 6));
        */
        
        /*
         * Prueba 1
         */
        /*
        $tiempoinicial = $this->getTiempo();
        foreach ($data['fotos'] as $key => $value) {
            $i = 0;
            foreach ($data['votadas'] as $key2 => $value2) {
                if($value['idfoto'] == $value2['idfoto']) {
                    $i = 1;
                }
            }
            if($i == 0) {
                $data['foto'] = $value;
                break;
            }
        }
        $tiempofinal = $this->getTiempo();
        var_dump(round($tiempofinal - $tiempoinicial, 6));
        var_dump($data['foto']);
        */
        
        /*
         *  Prueba 2
         */
        //$tiempoinicial = $this->getTiempo();
        
        $idultimafoto = $this->fotos_model->get_ultima_foto_votada($session['SID']);
        $proximas = $this->fotos_model->get_proximas_fotos_a_votar($idultimafoto['ultima']);
        if(count($proximas) > 0) {
            $data['foto'] = $proximas[0];
        } else {
            $data['foto'] = array(
                'idfoto' => 0,
                'foto' => ''
            );
        }
        
        /*
        $tiempofinal = $this->getTiempo();
        var_dump(round($tiempofinal - $tiempoinicial, 6));
        var_dump($idultimafoto);
        var_dump($proximas);
        */
        
        $data['session'] = $session;
        
        $this->load->view('fotos/votar', $data);
    }
    
    public function voto($idfoto, $puntaje) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
        
        $datos = array(
            'idusuario' => $session['SID'],
            'idfoto' => $idfoto,
            'puntaje' => $puntaje
        );
        
        $this->votos_model->set($datos);
        
        redirect('/fotos/votar/', 'refresh');
    }
    
    public function borrar($idfoto) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 3) {
            show_404();
        }
        
        $foto = $this->fotos_model->get($idfoto);
        
        
        if($foto['aprobado'] == 2 && $foto['idusuario'] == $session['SID']) {
            $datos = array(
                'idusuario' => $session['SID'],
                'foto' => $foto['foto']
            );
            
            $this->fotos_borradas_model->set($datos);
            
            $this->fotos_model->borrar($idfoto);
        }
        
        redirect('/fotos/cargar/', 'refresh');
        
    }
    
    public function buscar() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        $data['fotos'] = array();
        $tipo = $this->input->post('tipo');
        
        if($tipo == 'buscar') {
            $this->form_validation->set_rules('select', 'Select', 'required');
            $this->form_validation->set_rules('buscar', 'Buscar', 'required');
        } elseif ($tipo == 'foto') {
            $this->form_validation->set_rules('idfoto', 'idfoto', 'required');
        }
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $select = $this->input->post('select');
            switch ($select) {
                case 'id':
                    $data['fotos'] = $this->fotos_model->get_foto_aprobada_por_id($this->input->post('buscar')); 
                    break;
                case 'titulo':
                    $data['fotos'] = $this->fotos_model->get_fotos_aprobadas_por_titulo($this->input->post('buscar'));
                    break;
                case 'dni':
                    $data['fotos'] = $this->fotos_model->get_fotos_aprobadas_por_dni($this->input->post('buscar'));
                    break;
            }
            
            if($tipo == 'foto') {
                if($this->input->post('seleccionar') == 'on') {
                    $datos = array(
                        'idfoto' => $this->input->post('idfoto'),
                        'mail' => 0
                    );
                    
                    $this->preseleccionadas_model->set($datos);
                }
                if($this->input->post('ganadora') == 'on') {
                    $datos = array(
                        'idfoto' => $this->input->post('idfoto'),
                        'mail' => 0
                    );
                    
                    $this->ganadoras_model->set($datos);
                }
            }
        }
        $data['session'] = $session;
        
        foreach ($data['fotos'] as $key => $value) {
            $data['fotos'][$key]['promedio'] = $this->fotos_model->get_promedio_por_id($value['idfoto']);
        }
        
        
        $this->load->view('fotos/buscar', $data);
    }
    
    public function votadas($pagina = null) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
        if($pagina == null) {
            $pagina = 1;
        }
        
        
        $data['session'] = $session;
        $data['votadas'] = $this->fotos_model->get_fotos_votadas_limit($session['SID'], $pagina);
        foreach ($data['votadas'] as $key => $value) {
            $data['votadas'][$key]['foto'] = $this->fotos_model->get($value['idfoto']);
        }
        $data['votadas_total'] = $this->fotos_model->get_fotos_votadas($session['SID']);
        $data['aprobadas'] = $this->fotos_model->get_fotos_aprobadas();
        
        $data['paginacion'] = $this->h_paginacion->paginar($pagina, 51, count($data['votadas_total']), '/fotos/votadas/');
        
        $this->load->view('fotos/votadas', $data);
    }
    
    public function aprobadas($pagina = null) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        if($pagina == null) {
            $pagina = 1;
        }
        
        $data['session'] = $session;
        $fotos_aprobadas = $this->fotos_model->get_fotos_aprobadas();
        $data['paginacion'] = $this->h_paginacion->paginar($pagina, 51, count($fotos_aprobadas), '/fotos/aprobadas/');
        $data['pagina'] = $pagina;
        
        $data['aprobadas'] = $this->fotos_model->get_fotos_aprobadas_limit($pagina);
        
        $this->load->view('fotos/aprobadas', $data);
    }
    
    public function no_aprobadas($pagina = null) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        if($pagina == null) {
            $pagina = 1;
        }
        
        $data['session'] = $session;
        $fotos_no_aprobadas = $this->fotos_model->get_fotos_no_aprobadas();
        $data['paginacion'] = $this->h_paginacion->paginar($pagina, 50, count($fotos_no_aprobadas), '/fotos/no-aprobadas/');
        $data['pagina'] = $pagina;
        
        $data['aprobadas'] = $this->fotos_model->get_fotos_no_aprobadas_limit($pagina);
        
        
        $this->load->view('fotos/no_aprobadas', $data);
    }
    
    public function preseleccionadas($limit = null) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        if($this->input->post('cantidad')) {
            redirect('/fotos/preseleccionadas/'.$this->input->post('cantidad'), 'refresh');
        }
        if($limit == null) {
            $limit = 100;
        }
        
        
        // Toma las fotos y las preselecciona
        if($this->input->post('tipo') == 'preseleccionar') {
            $fotos = $this->fotos_model->get_fotos_para_preseleccion($this->input->post('limite'));
            foreach($fotos as $foto) {
                $datos = array(
                    'idfoto' => $foto['idfoto'],
                    'mail' => 0
                );
                
                $this->preseleccionadas_model->set($datos);
            }
        }
        
        $data['limit'] = $limit;
        $data['session'] = $session;
        $preseleccionadas = $this->preseleccionadas_model->gets();
        
        if(count($preseleccionadas) > 0) {
            $data['fotos'] = $this->preseleccionadas_model->gets();
            $post = $this->input->post();
            if($post != false) {
                $b = array();
                foreach($post as $key => $value) {
                    $b[] = explode('-', $key);
                }
                foreach($b as $c) {
                    if($c[0] == 'checkbox') {
                        $datos = array(
                            'idfoto' => $c[1],
                            'mail' => 0
                        );
                        $this->ganadoras_model->set($datos);
                    }
                }
            }
            foreach($data['fotos'] as $key => $value) {
                $data['fotos'][$key]['ganadora'] = $this->ganadoras_model->get($value['idfoto']);
            }
            $this->load->view('fotos/preseleccionadas2', $data);
        } else {
            $data['fotos'] = $this->fotos_model->get_fotos_para_preseleccion($limit);
            $this->load->view('fotos/preseleccionadas', $data);
        }
    }
    
    public function ganadoras() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        $data['session'] = $session;
        $data['fotos'] = $this->ganadoras_model->gets();
        
        
        $this->load->view('fotos/ganadoras', $data);
    }
    
    public function editar_puntaje($idfoto) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
        
        $data['session'] = $session;
        $data['foto'] = $this->fotos_model->get($idfoto);
        $data['votadas'] = $this->fotos_model->get_fotos_votadas($session['SID']);
        $data['fotos'] = $this->fotos_model->get_fotos_aprobadas();
        
        $this->load->view('fotos/editar_puntaje', $data);
    }
    
    public function editar_voto($idfoto, $puntaje) {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
        $datos = array(
            'idusuario' => $session['SID'],
            'idfoto' => $idfoto
        );
        
        $this->votos_model->update($puntaje, $datos);
        
        redirect('/fotos/votadas/', 'refresh');
    }
    
    public function getTiempo() { 
        list($usec, $sec) = explode(" ",microtime()); 
        return ((float)$usec + (float)$sec); 
    } 
    
    public function preseleccionados() {
        $data['fotos'] = $this->preseleccionadas_model->preseleccionados();
        $this->load->view('fotos/preseleccionados', $data);
        //var_dump($data);
    }
    
    public function vot($idfoto = null) {
        if($idfoto) {
            $ip = $_SERVER['REMOTE_ADDR'];

            $res = $this->votos_model->get_voto_por_ip($idfoto, $ip);

            if(count($res)) {
                // Ya se votó, no se hace nada acá
            } else {
                $this->votos_model->set_voto_ip($idfoto, $ip);
            }
        }
        redirect('/fotos/votacion/', 'refresh');
    }
    
    public function votacion() {
        $data['aprobadas'] = $this->fotos_model->get_fotos_aprobadas_random();
        
        $this->load->view('fotos/votacion', $data);
    }
    
    public function ranking() {
        $this->load->view('fotos/ranking');
    }
}
?>

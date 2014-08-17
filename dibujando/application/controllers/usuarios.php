<?php

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'usuarios_model',
            'tipos_dni_model',
            'captcha_model',
            'fotos_model'
        ));
        $this->load->library(array(
            'form_validation',
            'session',
            'email'
        ));
        $this->load->helper(array(
            'url',
            'captcha'
        ));
    }
    
    public function registrar() {
        $data['tipos_dni'] = $this->tipos_dni_model->gets();
        $data['exitoso'] = 0;
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('tipo_dni', 'Tipo DNI', 'required');
        $this->form_validation->set_rules('numero_dni', 'Numero DNI', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('ciudad', 'Ciudad', 'required');
        $this->form_validation->set_rules('codigo_postal', 'Codigo Postal', 'required');
        $this->form_validation->set_rules('provincia', 'Provincia', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|matches[email2]');
        $this->form_validation->set_rules('email2', 'Confirmar Email', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Confirmar Password', 'required');
        $this->form_validation->set_rules('bases', 'Bases', 'required');
        //$this->form_validation->set_rules('captcha', 'Captcha', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {

            $flag = 1;
            if($this->usuarios_model->existe_valor_en_campo('numerodni', $this->input->post('numero_dni'))) {
                $flag = 0;
                $data['numero_dni'] = 'El numero de DNI ya se encuentra registrado';
            }
            if($this->usuarios_model->existe_valor_en_campo('usuario', $this->input->post('usuario'))) {
                $flag = 0;
                $data['usuario'] = "El nombre de usuario ya se encuentra registrado";
            }
            if($this->usuarios_model->existe_valor_en_campo('email', $this->input->post('email'))) {
                $flag = 0;
                $data['email'] = "El email ya se encuentra registrado";
            }

            /*
            $time = explode('.', $this->input->post('timecaptcha'));
            $captcha = $this->captcha_model->get($time[0], $this->input->ip_address());
            if($captcha['word'] != $this->input->post('captcha')) {
                $flag = 0;
            }
            */
            if($flag) {
                $datos = array(
                    'nombre' => $this->input->post('nombre'),
                    'apellido' => $this->input->post('apellido'),
                    'tipodni' => $this->input->post('tipo_dni'),
                    'numerodni' => $this->input->post('numero_dni'),
                    'direccion' => $this->input->post('direccion'),
                    'ciudad' => $this->input->post('ciudad'),
                    'codigopostal' => $this->input->post('codigo_postal'),
                    'provincia' => $this->input->post('provincia'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                    'usuario' => $this->input->post('usuario'),
                    'password' => $this->input->post('password'),
                    'tipo_usuario' => 3
                );
                $this->usuarios_model->registrar($datos);

                $this->email->from('no-responder@gentedemiciudad.com', 'Gente de mi Ciudad');
                $this->email->to($this->input->post('email'));
                $this->email->subject('Registro');
                $this->email->message($this->input->post('nombre').' '.$this->input->post('apellido').'

Gracias por registrarse en el XV Concurso fotografico Gente de mi Ciudad 
Su datos de acceso son:
user: '.$this->input->post('usuario').'
pass: '.$this->input->post('password'));

                $this->email->send();
                redirect('/usuarios/login/1/', 'refresh');
            }
        }
        /*
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/'
        );
        
        $cap = create_captcha($vals);
        $data['cap'] = $cap;
        
        $datos = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        
        $this->captcha_model->set($datos);
        */
        $this->load->view('usuarios/registrar', $data);
    }
    
    public function login($ok = null) {
        $session = $this->session->all_userdata();
        if(isset($session['SID'])) {
            switch ($session['tipo_usuario']) {
                case 1:   // Administrador
                    redirect('/fotos/aprobar/', 'refresh');
                    break;
                case 2:   // Jurado
                    redirect('/fotos/votar/', 'refresh');
                    break;
                case 3:   // Usuario
                    redirect('/fotos/cargar/', 'refresh');
                    break;
            }
        }
        
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $usuario = $this->usuarios_model->login($this->input->post('usuario'), $this->input->post('password'));
            if(!empty($usuario)) {
                $datos = array(
                    'SID' => $usuario['idusuario'],
                    'nombre' => $usuario['nombre'],
                    'apellido' => $usuario['apellido'],
                    'email' => $usuario['email'],
                    'tipo_usuario' => $usuario['tipo_usuario']
                );     
                $this->session->set_userdata($datos);
                $session = $this->session->all_userdata();
                switch ($session['tipo_usuario']) {
                    case 1:   // Administrador
                        redirect('/fotos/aprobadas/', 'refresh');
                        break;
                    case 2:   // Jurado
                        redirect('/fotos/votar/', 'refresh');
                        break;
                    case 3:   // Usuario
                        redirect('/fotos/cargar/', 'refresh');
                        break;
                }
            }
        }
        $data['ok'] = $ok;
        
        $this->load->view('usuarios/login1', $data);
    }
    
    public function login1($ok = null) {
        $data['ok'] = $ok;
        $this->load->view('/usuarios/login', $data);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/usuarios/login/', 'refresh');
    }
    
    public function buscar() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        
        $this->load->view('usuarios/buscar');
    }
    
    public function busqueda() {
        $data['usuarios'] = $this->usuarios_model->get_usuario($this->input->post('usuario'));
        
        $this->load->view('usuarios/busqueda', $data);
    }
    
    public function jurados() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 1) {
            show_404();
        }
        
        $data['session'] = $session;
        $data['jurados'] = $this->usuarios_model->get_jurados();
        foreach ($data['jurados'] as $key => $value) {
            $data['jurados'][$key]['votadas'] = $this->fotos_model->get_fotos_votadas($value['idusuario']);
            $data['jurados'][$key]['aprobadas'] = $this->fotos_model->get_fotos_aprobadas();
        }
        
        $this->load->view('usuarios/jurados', $data);
    }
    
    public function recuperar() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $data = array();
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $usuario = $this->usuarios_model->get_usuario_por_email($this->input->post('email'));
            
            $this->email->from('no-responder@gentedemiciudad.com', 'Gente de mi Ciudad');
            $this->email->to($usuario['email']);
            
            $this->email->subject('Recupero de Contraseña');
            $mensaje = "Datos de acceso
                
Usuario: ".$usuario['usuario']."
Contraseña: ".$usuario['password'];
            $this->email->message($mensaje);
            
            if($this->email->send()) {
                $data['ok'] = 1;
            }
            
        }
        
        $this->load->view('usuarios/recuperar', $data);
    }
    
    public function consultas() {
        $session = $this->session->all_userdata();
        if(!isset($session['SID'])) {
            redirect('/usuarios/login/', 'refresh');
        }
        if($session['tipo_usuario'] != 2) {
            show_404();
        }
        
        $this->form_validation->set_rules('asunto', 'Asunto', 'required');
        $this->form_validation->set_rules('consulta', 'Consulta', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $this->email->from('no-responder@gentedemiciudad.com', 'Gente de mi Ciudad');
            $this->email->to('xeon@fibertel.com.ar');
            
            $this->email->subject($this->input->post('asunto'));
            $this->email->message($this->input->post('consulta'));
            
            $this->email->send();
        }
        
        $data['session'] = $session;
        
        $this->load->view('usuarios/consultas', $data);
    }
    
    public function registro_colectivo() {
        $data['tipos_dni'] = $this->tipos_dni_model->gets();
        $data['exitoso'] = 0;
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        //$this->form_validation->set_rules('apellido', 'Apellido', 'required');
        //$this->form_validation->set_rules('tipo_dni', 'Tipo DNI', 'required');
        $this->form_validation->set_rules('numero_dni', 'Numero DNI', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('ciudad', 'Ciudad', 'required');
        $this->form_validation->set_rules('codigo_postal', 'Codigo Postal', 'required');
        $this->form_validation->set_rules('provincia', 'Provincia', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|matches[email2]');
        $this->form_validation->set_rules('email2', 'Confirmar Email', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Confirmar Password', 'required');
        $this->form_validation->set_rules('bases', 'Bases', 'required');
        //$this->form_validation->set_rules('captcha', 'Captcha', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {

            $flag = 1;
            if($this->usuarios_model->existe_valor_en_campo('numerodni', $this->input->post('numero_dni'))) {
                $flag = 0;
                $data['numero_dni'] = 'El numero de DNI ya se encuentra registrado';
            }
            if($this->usuarios_model->existe_valor_en_campo('usuario', $this->input->post('usuario'))) {
                $flag = 0;
                $data['usuario'] = "El nombre de usuario ya se encuentra registrado";
            }
            if($this->usuarios_model->existe_valor_en_campo('email', $this->input->post('email'))) {
                $flag = 0;
                $data['email'] = "El email ya se encuentra registrado";
            }

            /*
            $time = explode('.', $this->input->post('timecaptcha'));
            $captcha = $this->captcha_model->get($time[0], $this->input->ip_address());
            if($captcha['word'] != $this->input->post('captcha')) {
                $flag = 0;
            }
            */
            if($flag) {
                $datos = array(
                    'nombre' => $this->input->post('nombre'),
                    'apellido' => '',
                    'tipodni' => 100,  //  Número asignado para CUIT
                    'numerodni' => $this->input->post('numero_dni'),
                    'direccion' => $this->input->post('direccion'),
                    'ciudad' => $this->input->post('ciudad'),
                    'codigopostal' => $this->input->post('codigo_postal'),
                    'provincia' => $this->input->post('provincia'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                    'usuario' => $this->input->post('usuario'),
                    'password' => $this->input->post('password'),
                    'tipo_usuario' => 3
                );
                $this->usuarios_model->registrar($datos);

                $this->email->from('no-responder@gentedemiciudad.com', 'Gente de mi Ciudad');
                $this->email->to($this->input->post('email'));
                $this->email->subject('Registro');
                $this->email->message($this->input->post('nombre').' '.$this->input->post('apellido').'

Gracias por registrarse en el XV Concurso fotografico Gente de mi Ciudad 
Su datos de acceso son:
user: '.$this->input->post('usuario').'
pass: '.$this->input->post('password'));

                $this->email->send();
                redirect('/usuarios/login/1/', 'refresh');
            }
        }
        /*
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url().'captcha/'
        );
        
        $cap = create_captcha($vals);
        $data['cap'] = $cap;
        
        $datos = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        
        $this->captcha_model->set($datos);
        */
        $this->load->view('usuarios/registro_colectivo', $data);
    }
}
?>

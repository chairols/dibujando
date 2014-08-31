<?php

class Dibujos_participantes extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('dibujos_participantes/index');
    }
}
?>
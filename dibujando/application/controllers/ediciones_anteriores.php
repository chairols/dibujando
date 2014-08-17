<?php

class Ediciones_anteriores extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('ediciones_anteriores/index');
    }
}
?>
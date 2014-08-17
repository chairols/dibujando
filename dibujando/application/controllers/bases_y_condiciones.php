<?php

class Bases_y_condiciones extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('bases_y_condiciones/index');
    }
}
?>
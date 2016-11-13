<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deportes extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
            $cuerpo = $this->load->view('Deportes','',true);
            $this->load->view('plantilla',Array('cuerpo'=>$cuerpo));
	}
}
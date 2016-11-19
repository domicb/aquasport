<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo extends CI_Controller {

    function __construct() {
        parent::__construct();
         //cargo el modelo de artículos
        $this->load->model('Articulos_model');
    }
    
	public function index()
	{//$this -> output->cache(10);
        $this->load->helper('url');       
             //$cuerpo = $this->load->view('Cuerpo_articulos',Array('articulos'=> $articulos),true);
	}
        
        public function mostrar($id)
        {
            $articulo = $this->Articulos_model->get_articulo($id);
            $cuerpo = $this->load->view('Cuerpo_articulos',Array('articulo'=>$articulo),true);
            $this->load->view('plantilla',Array('cuerpo'=>$cuerpo));
        }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

    function __construct() {
        parent::__construct();
         //cargo el modelo de artículos
        $this->load->model('Articulos_model');
    }
    
	public function index($desde = 0)
	{//$this -> output->cache(10);
        $this->load->helper('url');
        $pages=4; //Número de registros mostrados por páginas
	$this->load->library('pagination'); //Cargamos la librería de paginación
        // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['base_url'] = site_url('/index.php/Articulos');
        $config['total_rows'] = $this->Articulos_model->filas();//calcula el número de filas 
        $config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
        $config['first_link'] = 'Primera';//primer link
        $config['last_link'] = 'Última';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
        $config['next_link'] = 'Siguiente';//siguiente link
        $config['prev_link'] = 'Anterior';//anterior link
        $this->pagination->initialize($config); //inicializamos la paginación	   
   
            $articulos = $this->Articulos_model->get_articulos(4,$desde);
             $cuerpo = $this->load->view('Cuerpo',Array('articulos'=> $articulos),true);
            $this->load->view('plantilla',Array('cuerpo'=>$cuerpo));
	}
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Upload_model');
        $this->load->model('Articulos_model');
    }

    function index() {
        //CARGAMOS LA VISTA DEL FORMULARIO
        $this->load->view('upload_view');
    }

    //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
    function do_upload($desde = 0) {
        $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('cuerpo', 'cuerpo', 'required|min_length[35]|max_length[8000]');
        $this->form_validation->set_rules('autor', 'autor', 'required|min_length[3]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('video', 'video', 'required|min_length[3]|max_length[190]');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
            //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_view', $error);
            } else {
                //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
                //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
                $file_info = $this->upload->data();
                //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
                //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
                $this->_create_thumbnail($file_info['file_name']);
                $data = array('upload_data' => $this->upload->data());
                $titulo = $this->input->post('titulo');
                $cuerpo = $this->input->post('cuerpo');
                $autor = $this->input->post('autor');
                $categoria = $this->input->post('categoria');
                $enlace = $this->input->post('video');
                $imagen = $file_info['file_name'];
                $descripcion = $this->input->post('descripcion');          
                $this->Upload_model->subir($titulo, $imagen, $autor, $cuerpo, $categoria, $enlace,$descripcion,$enlace);
                $data['titulo'] = $titulo;
                $data['imagen'] = $imagen;
                $data['cuerpo'] = $cuerpo;
                // VARIABLES NECESARIAS PARA PAGINAR
                // $this->load->helper('url');
                $pages = 4; //Número de registros mostrados por páginas
                $this->load->library('pagination'); //Cargamos la librería de paginación
                // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
                $config['base_url'] = site_url('/index.php/Articulos');
                $config['total_rows'] = $this->Articulos_model->filas(); //calcula el número de filas 
                $config['per_page'] = $pages; //Número de registros mostrados por páginas
                $config['num_links'] = 20; //Número de links mostrados en la paginación
                $config['first_link'] = 'Primera'; //primer link
                $config['last_link'] = 'Última'; //último link
                $config["uri_segment"] = 3; //el segmento de la paginación
                $config['next_link'] = 'Siguiente'; //siguiente link
                $config['prev_link'] = 'Anterior'; //anterior link
                $this->pagination->initialize($config); //inicializamos la paginación	
                //recojemos los articulos y los mostramos
                $this->load->view('imagen_subida_view',$data);
            }
        } else {
            //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
            $this->index();
        }
    }

    //FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
    function _create_thumbnail($filename) {
        $config['image_library'] = 'gd2';
        //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
        $config['source_image'] = 'uploads/' . $filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
        $config['new_image'] = 'uploads/thumbs/';
        $config['width'] = 320;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

}

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
        $this->load->helper('url');
        $this->load->library('pagination'); //Cargamos la librería de paginación
    }

    //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
    function do_upload($desde = 0) {
        $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[200]|trim|xss_clean');
        $this->form_validation->set_rules('cuerpo', 'cuerpo', 'required|min_length[35]|max_length[40000]');
        $this->form_validation->set_rules('autor', 'autor', 'required|min_length[3]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('video', 'video', 'min_length[3]|max_length[290]');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required|min_length[3]|max_length[390]');
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
                //recojemos los articulos y los mostramos
                //$this->load->view('imagen_subida_view',$data);
                redirect('/Articulos/','refresh');
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

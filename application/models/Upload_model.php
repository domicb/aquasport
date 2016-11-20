<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen,$autor,$cuerpo,$categoria,$enlace,$descripcion,$video)
    {
        $fecha = date("Y/m/d");
        $data = array(
            'titulo' => $titulo,
            'ruta' => $imagen,
            'cuerpo' => $cuerpo,
            'autor' => $autor,
            'categoria' => $categoria,
            'enlace' => $enlace,
            'descripcion' =>$descripcion,
            'enlace' => $video,
            'fecha' => $fecha
        );
        return $this->db->insert('imagenes', $data);
    }
}

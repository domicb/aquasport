<?php

class Articulos_model extends CI_Model {

    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA DEVOLVER LOS DATOS DE LOS ARTICULOS
    public function get_articulos($por_pagina, $segmento) {
        $query = $this->db->get('imagenes', 4, 0);
        
        //$this->db->where('inicio', valor, 'fin',valor);
        
        return $query->result_array();
    }
    
    function filas() {
        $consulta = $this->db->get('imagenes');
        return $consulta->num_rows();
    }
}

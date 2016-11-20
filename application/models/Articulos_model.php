<?php

class Articulos_model extends CI_Model {

    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA DEVOLVER LOS DATOS DE LOS ARTICULOS
    public function get_articulos($por_pagina, $segmento) {
        $query = $this->db->get('imagenes',$por_pagina, $segmento);    
        //$this->db->where('inicio', valor, 'fin',valor);    
        return $query->result_array();
    }
    
    //funcion para devolver un articulo
    public function get_articulo($id)
    {
        $this->db->select('*');
        $this->db->from('imagenes');
        $this->db->where('id',$id);
        $this->db->order_by("date", "asc");
        $query =  $this->db->get();
        return $query->row_array();
    }
    
    function filas() {
        $consulta = $this->db->get('imagenes');
        return $consulta->num_rows();
    }
}

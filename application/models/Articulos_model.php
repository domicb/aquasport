<?php

class Articulos_model extends CI_Model {

    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA DEVOLVER LOS DATOS DE LOS ARTICULOS
    public function get_articulos($por_pagina, $segmento) {
        $this->db->select('*');
        $this->db->from('imagenes');
        $this->db->limit($por_pagina,$segmento);
        $this->db->order_by("fecha","desc");
        $query = $this->db->get();    
        //$this->db->where('inicio', valor, 'fin',valor);    
        return $query->result_array();
    }
    
    //funcion para devolver un articulo
    public function get_articulo($id)
    {
        $this->db->select('*');
        $this->db->from('imagenes');
        $this->db->where('id',$id);
        $query =  $this->db->get();
        return $query->row_array();
    }
    
    public function filas() {
        $consulta = $this->db->get('imagenes');
        return $consulta->num_rows();
    }

    public function tiempo($lugar){
        $this->db->select('enlace');
        $this->db->from('enlace');
        $this->db->like('sitio',$lugar);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function costas($lugar)
    {
        $this->db->select('sitio');
        $this->db->from('enlace');
        $this->db->like('provincia',$lugar);
        $query = $this->db->get();
        return $query->result_array();
    }
}

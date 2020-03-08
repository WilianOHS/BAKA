<?php if (! defined('BASEPATH')) exit('No se permite el acceso al script');
	
	class Modelousuarios extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		function crearUsuario($data){
			return ($this->db->insert('usuarios',$data));
		}
		function obtenerUsuarios(){
			$query = $this->db->get('usuarios');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
		function obtenerUsuario($id){
			$this->db->where('idUsuario',$id);
			$query = $this->db->get('usuarios');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
	}
?>
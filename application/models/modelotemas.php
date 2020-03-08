<?php if (! defined('BASEPATH')) exit('No se permite el acceso al script');
	
	class Modelotemas extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		function crearTema($data){
			return ($this->db->insert('temas',$data));
		}
		function obtenerTemas(){
			$query = $this->db->get('temas');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
		function obtenerTema($id){
			$this->db->where('idTema',$id);
			$query = $this->db->get('temas');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
	}
?>
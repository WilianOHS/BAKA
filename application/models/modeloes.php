<?php if (! defined('BASEPATH')) exit('No se permite el acceso al script');
	
	class Modeloes extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		function crearEstudiante($data){
			return ($this->db->insert('estudiantes',$data));
		}
		function obtenerEstudiantes(){
			$query = $this->db->get('estudiantes');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
		function obtenerEstudiante($id){
			$this->db->where('idEstudiante',$id);
			$query = $this->db->get('estudiantes');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
		function editar($id){
			array(
				'x'=>'lol'
			);
			return ($this->db->update('estudiantes',$data, array('id'=>$id)));
		}

	}
?>
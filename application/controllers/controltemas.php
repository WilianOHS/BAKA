<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Controltemas extends CI_Controller {
	//Funcion del constructor
	function __construct(){
		parent::__construct();//Ejecucion del constructor padre
		$this->load->helper('form');//Carga del helper necesario
		$this->load->model('modelotemas');//Carga del modelo
	}
	function index(){
		$this->load->view('headers/menu');
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('headers/headers');
		if (!$data['segmento']) {
			$data['temas'] = $this->modelotemas->obtenerTemas();
		
		} else {
			$data['temas'] = $this->modelotemas->obtenerTema($data['segmento']);
		
		}
		
		$this->load->view('vistas/mostrartemas',$data);
	}
	function nuevo(){
		//$this->load->view('headers/headers');
		$this->load->view('headers/menu');
		$this->load->view('vistas/temasvista');
	}
	function recibirDatos(){
		//Arreglo para mandar la inf necesaria hacia el modelo
		$data = array(
			//Enviamos los campos introducidos por el usuario
			'Tema' => $this->input->post('Tema'),
			'Asesor' => $this->input->post('Asesor'),
			'Departamento' => $this->input->post('Departamento'),
			'Carrera' => $this->input->post('Carrera')
		);
		//if y else si se introducen los datos a la base
		if(!$this->modelotemas->crearTema($data)){
			echo("ERROR AL INSERTAR DATOS");
		}else{
			echo("REGISTRADOS CON EXITO");
		}
		$this->load->view('headers/headers');
		//Se carga la pagina del formulario
		$this->load->view('vistas/temasvista');
	}
}

?>
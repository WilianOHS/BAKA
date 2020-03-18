<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Controles extends CI_Controller {
	//Funcion del constructor
	function __construct(){
		parent::__construct();//Ejecucion del constructor padre
		$this->load->helper('form');//Carga del helper necesario
		$this->load->model('modeloes');//Carga del modelo
		$this->load->library('session');
	}
	function index(){
		//session_start();
		
		if($this->session->has_userdata('Id')){
			$mensaje = "Bienvenido ".$this->session->userdata('Id');
			//echo("lol");
		}else{
			//echo("NO");
			//echo($this->session->Id);
			header('Location: '.base_url("controllogin/salir"));  
		}

		$this->load->view('headers/menu');
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('headers/headers');
		if (!$data['segmento']) {
			$data['estudiante'] = $this->modeloes->obtenerEstudiantes();
		
		} else {
			//$data['estudiantes'] = $this->modeloes->obtenerEstudiante($data['segmento']);
		 
		}
		
		$this->load->view('vistas/mostrarestudiantes',$data);
	}
	function nuevo(){
		//$this->load->view('headers/headers');
		$this->load->view('headers/menu');
		$this->load->view('vistas/vistaestudiantes');
	}
	function recibirDatos(){
		//Arreglo para mandar la inf necesaria hacia el modelo
		$data = array(
			//Enviamos los campos introducidos por el usuario
			'Carnet' => $this->input->post('carnet'),
			'Nombres' => $this->input->post('nombre'),
			'Apellidos' => $this->input->post('apellido'),
			'Carrera' => $this->input->post('carrera'),
			'Grupo' => $this->input->post('grupo')
			
		);
		//if y else si se introducen los datos a la base
		if(!$this->modeloes->crearEstudiante($data)){
			echo("ERROR AL INSERTAR DATOS");
		}else{
			echo("REGISTRADOS CON EXITO");
		}
		header('location: http://localhost/CodeIgniter/controles');
	}
	function actualizar(){

	}
}

?>
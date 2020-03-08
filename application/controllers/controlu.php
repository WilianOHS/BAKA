<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Controlu extends CI_Controller {
	//Funcion del constructor
	function __construct(){
		parent::__construct();//Ejecucion del constructor padre
		$this->load->helper('form');//Carga del helper necesario
		$this->load->model('modelousuarios');//Carga del modelo
	}
	function index(){
		$this->load->view('headers/menu');
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('headers/headers');
		if (!$data['segmento']) {
			$data['usuarios'] = $this->modelousuarios->obtenerUsuarios();
		
		} else {
			$data['usuarios'] = $this->modelousuarios->obtenerUsuario($data['segmento']);
		
		}
		
		$this->load->view('vistas/mostrarusuarios',$data);
	}
	function nuevo(){
		$this->load->view('headers/menu');
		//$this->load->view('headers/headers');
		$this->load->view('vistas/vistausuarios');
	}
	function recibirDatos(){
		//Arreglo para mandar la inf necesaria hacia el modelo
		$data = array(
			//Enviamos los campos introducidos por el usuario
			'Usuario' => $this->input->post('Usuario'),
			'Password' => $this->input->post('password'),
			'Nombre' => $this->input->post('nombre'),
			'Departamento' => $this->input->post('departamento'),
			'Tipo_de_contratacion' => $this->input->post('tipo_de_contratacion')
		);
		//if y else si se introducen los datos a la base
		if(!$this->modelousuarios->crearUsuario($data)){
			echo("ERROR AL INSERTAR DATOS");
		}else{
			echo("REGISTRADOS CON EXITO");
		}
		$this->load->view('headers/headers');
		//Se carga la pagina del formulario
		$this->load->view('vistas/vistausuarios');
	}
}

?>
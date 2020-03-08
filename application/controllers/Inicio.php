<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	//Funcion dek constructor
	function __construct(){
		parent::__construct();//Ejecucion del constructor padre
		//$this->load->model('modelo');
		$this->load->helper('form');//Carga del helper necesario
	}
	public function index()
	{
		
		$this->load->view('vistas/formulario');//Carga de la pagina del formulario
	}
}
?>
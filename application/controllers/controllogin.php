<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Controllogin extends CI_Controller {
	//Funcion del constructor
	function __construct(){
		parent::__construct();//Ejecucion del constructor padre
		$this->load->database();
		$this->load->helper('form');//Carga del helper necesario
		$this->load->library('session');
		$this->load->model("modelousuarios");
	}

	function validar(){

		$us=$this->input->post('usuario');
		$pas=$this->input->post('pass');
		
		$q = $this->modelousuarios->obtenerUsuarios(); 
		foreach($q->result() as $row){
			if($us==$row->Nombre && $pas==$row->Pass){
				$dato =array(
					'Id'=>$row->Id,
					'Nombre'=>$us,
					'Pass'=>$pas,
					'Tipo'=>$row->Tipo

				);
				//session_start();
				$this->session->set_userdata($dato);
				//echo($this->session->userdata('Nombre'));
				//cuandoel usuario y contraseña sean validos
				//se guardaran en session sus datos 
				header('location: '.base_url('controles'));
				//en el controlador de la pagina principal antes de mostrar la view hay que agregar siempre al inicio un comprobante que dira $ this -> session -> has_userdata ( 'id' ); y hacer un if que si eso es falso que no haga lo de load view que solo haga load view cuando eso salga verdadero

				//luego de guardar en sesion manda a la pagina principal en este caos su controlador
			}else{
				//header('location: '.base_url('Controllogin'));
				//sinoq ue vuelva al index del login
			}
		}
		header('location: '.base_url('/controllogin'));


	}
	function salir(){
		//este sera el boton cerrar sesion
		$dato =array('Id','Nombre','Pass','Tipo');
		//session_start();
		$this->session->unset_userdata($dato);//elimina los datos de la sesion porque el suuario saldra y quedara a espera de guardar datos de otro suarioq ue se valide correctamente 
		$this->session->sess_destroy();
		header('location: '.base_url('/controllogin'));
		

	}
	function index(){
		if($this->session->has_userdata('Id')){
			header('location: '.base_url('controles'));
		}
		$this->load->view('headers/headers');
		//Se carga la pagina del formulario
		$this->load->view('Login');
	}

	}



?>
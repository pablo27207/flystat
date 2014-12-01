<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasajero extends CI_Controller {

	public function index($info)
	{
		
		$data['view']       = 'pasajero_view';
		$data['data_view']  = array($info);
		$data['css']        = array();
		$data['js']         = array();
		
		
		
		if($this->session->userdata('logeado')){
		$this->load->view('template',$data);}
		else{
			$this->load->view('login_view');
		}
	}
	public function abrir($idVuelo){
		$a = new Vuelo($idVuelo);
		$a->pasajero->get();
		$this->index($a);
		
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetalleAvion extends CI_Controller {

	public function index($info)
	{
		
		$data['view']       = 'avion_view';
		$data['data_view']  = array($info);
		$data['css']        = array();
		$data['js']         = array();
		
		
		
		if($this->session->userdata('logeado')){
		$this->load->view('template',$data);}
		else{
			$this->load->view('login_view');
		}
	}
	public function abrir($idAvion){
		$a = new Avion($idAvion);
		$a->get();
		$this->index($a);
		
	}
}

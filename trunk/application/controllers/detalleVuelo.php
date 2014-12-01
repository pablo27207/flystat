<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetalleVuelo extends CI_Controller {

	public function index($info)
	{
		
		$data['view']       = 'vuelo_view';
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
		$v = new Vuelo($idVuelo);
		$v->get();
		$this->index($v);
		
	}
}

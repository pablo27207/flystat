<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['view']       = 'home_view';
		$data['data_view']  = array();
		$data['css']        = array();
		$data['js']         = array();
		
		if($this->session->userdata('logeado')){
		$this->load->view('template',$data);}
		else{
			$this->load->view('login_view');
		}
	}
	
	
	public function buscarPorNroVuelo(){
		$valorBusqueda		=	$this->input->post('valor');
		$arrayVuelos	=  array();
		$vuelo 				= new Vuelo();
		 $vuelo->where('nroVuelo', $valorBusqueda);
		 		
		foreach ($vuelo->get() as $row):
		array_push($arrayVuelos, array($row->id,$row->nroVuelo, $row->origen,
		 $row->destino));
		
		endforeach;
		
		echo json_encode($arrayVuelos);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
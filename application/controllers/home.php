<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['view']       = 'home_view';
		$data['data_view']  = array();
		$data['css']        = array();
		$data['js']         = array();
		
		$this->load->view('template',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
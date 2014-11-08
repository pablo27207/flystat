<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Avion extends  DataMapper {
	
	public $table ="avion";
	public $has_many = array("vuelos");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
			'modelo'=> array(
					'label'	=> 'modelo',
					'rules' => array('required')
			),
			'fabricante'=> array(
					'label'	=> 'fabricante',
					'rules' => array('required')
			),
			'matricula'=> array(
					'label'	=> 'matricula',
					'rules' => array('required')
			),
			'fechaFabricacion'=> array(
					'label'	=> 'fecha de fabricaci&oacute;n',
					'rules' => array('required','valid_date')
			),
			'capacidad'=> array(
					'label'	=> 'capacidad',
					'rules' => array('required')
			),
			'fechaEntradaServicio'=> array(
					'label'	=> 'fecha de entrada en servicio',
					'rules' => array('valid_date')
			)
	);
	
	public function buscarDisertantes($valorBusqueda = null){
	
		$u = new Disertante();
		if($valorBusqueda !=null){
			$u->like('id',$valorBusqueda);
			$u->or_like('nombre',$valorBusqueda);
			$u->or_like('telefono',$valorBusqueda);
			$u->or_like('email',$valorBusqueda)->get();
		}
		else{
			$u->get();
		}
		return $u;
	
	}
}
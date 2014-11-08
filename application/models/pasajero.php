<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pasajero extends DataMapper {
	
	public $table ="pasajero";
	public $has_many = array("vuelos");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
			'nombre'=> array(
					'label'	=> 'nombre',
					'rules' => array('required')
			),
			'apellido'=> array(
					'label'	=> 'apellido',
					'rules' => array('required')
			),
			'documento'=> array(
					'label'	=> 'documento',
					'rules' => array('required')
			),
	);
}
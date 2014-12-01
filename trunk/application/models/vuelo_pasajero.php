<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vuelo_pasajero extends DataMapper {
	
	public $table ="vuelo_pasajero";
	public $has_one = array("vuelo","pasajero");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
			'vuelo_id'=> array(
					'label'	=> 'nro vuelo',
					'rules' => array('required')
			),
			'pasajero_id'=> array(
					'label'	=> 'id vuelo',
					'rules' => array('required')
			)
			'nroAsiento'=> array(
					'label'	=> 'nro de asiento',
					'rules' => array('required')
			)
}
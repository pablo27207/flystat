<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Avion extends  DataMapper {
	
	public $table ="avion";
	public $has_many = array("vuelo");
	
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

}
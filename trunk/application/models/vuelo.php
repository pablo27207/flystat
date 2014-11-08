<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Avion extends DataMapper {
	
	public $table ="vuelo";
	public $has_one = array("avion");
	public $has_many = array("pasajeros");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
			'nroVuelo'=> array(
					'label'	=> 'n&uacute;mero de vuelo',
					'rules' => array('required')
			),
			'origen'=> array(
					'label'	=> 'ciudad de origen',
					'rules' => array('required')
			),
			'destino'=> array(
					'label'	=> 'ciudad de destino',
					'rules' => array('required')
			),
			'tiempoLlegada'=> array(
					'label'	=> 'llegada',
					'rules' => array('valid_date')
			),
			'tiempoPartida'=> array(
					'label'	=> 'partida',
					'rules' => array('valid_date')
			)
	);
}
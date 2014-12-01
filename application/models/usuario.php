<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends DataMapper {
	
	public $table ="usuario";
	
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
			'email'=> array(
					'label'	=> 'email',
					'rules' => array('required' ,'unique', 'valid_email')
			),
			
			'pass'=> array(
					'label'	=> 'contrase&ntilde;a',
					'rules' => array('required','encrypt')
			),
			'confirmarContrasenia' => array(
					'label' => 'Confirma la contraseña',
					'rules' => array('required', 'encrypt', 'matches' => 'pass')
			)
	);
	
	
   function login()
    {
    	$u = new Usuario();
		$u->where('email', $this->email)->get();
		$this->salt = $u->salt;
		$this->validate()->get();
		if (empty($this->id))
		{
			$this->error_message('login', 'Email o contrase&ntilde;a invalida');
		
			return FALSE;
		}
		else
		{
			
			return TRUE;
		}
    }

   function _encrypt($field)
    {
        if (!empty($this->{$field}))
        {
           if (empty($this->salt))
            {
                $this->salt = md5(uniqid(rand(), true));
            }

            $this->{$field} = sha1($this->salt . $this->{$field});
        }
    }
	function logout(){
		$this->session->sess_destroy();
	}
}
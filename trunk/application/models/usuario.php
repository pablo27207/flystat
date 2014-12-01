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
    	// Create a temporary user object
		$u = new Usuario();
	
		// Get this users stored record via their username
		$u->where('email', $this->email)->get();
	
		// Give this user their stored salt
		
		$this->salt = $u->salt;
	
		// Validate and get this user by their property values,
		// this will see the 'encrypt' validation run, encrypting the password with the salt
		$this->validate()->get();
	
		// If the username and encrypted password matched a record in the database,
		// this user object would be fully populated, complete with their ID.
	
		// If there was no matching record, this user would be completely cleared so their id would be empty.
		if (empty($this->id))
		{
			// Login failed, so set a custom error message
			$this->error_message('login', 'Email o contrase&ntilde;a invalida');
	
			return FALSE;
		}
		else
		{
			echo $this->id;
			// Login succeeded
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
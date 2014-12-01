<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		
		$this->load->view('login_view');
	}
	
	
function register()
    {
    /*   $u = new Usuario();

        $u->pass = "claudio"; 
         $u->confirmarContrasenia= "claudio";
        $u->nombre = "Claudio";
        $u->apellido = "Mayorga";
        $u->email = "claudiomayorga@gmail.com";
      
         if ($u->save())
        {
            echo '<p>You have successfully registered</p>';
        }
        else
        {
            echo '<p>' . $u->error->string . '</p>';
        }*/
    }

    function entrar()
    {
        $u = new Usuario();

        $u->email = $this->input->post('email');
        $u->pass = $this->input->post('password');

        if ($u->login())
        {
            echo '<p>Bienvenido ' . $u->nombre .' '.$u->apellido . '!</p>';
            echo '<p>You have successfully logged in so now we know that your email is ' . $u->email . '.</p>';
        }
        else
        {
            // Show the custom login error message
            echo '<p>' . $u->error->login . '</p>';
        }
    }
	public function logout(){

		$u = new Usuario();
		$u->logout();
		$this->load->view('login_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
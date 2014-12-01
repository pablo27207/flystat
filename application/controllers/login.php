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
        	$this->session->set_userdata('email',$u->email);
        	$this->session->set_userdata('nombre',$u->nombre);
        	$this->session->set_userdata('apellido',$u->apellido);
        	$this->session->set_userdata('logeado',TRUE);
        	redirect('home','refresh');
        	
        }
        else
        {
        	$this->session->set_userdata('logeado',FALSE);
           	$this->data_page['msg_error']= $u->error->login;
            
           	$this->load->view('login_view',$this->data_page);
        }
    }
	public function logout(){

		$this->session->sess_destroy();
		$this->load->view('login_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
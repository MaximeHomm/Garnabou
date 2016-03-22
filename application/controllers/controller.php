<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
//VERIFICATION AUTHENTIFICATION ET RENVOI SI NON CONNECTE
	public function index()
	{
		$this->load->model('authentification');
		
		if (!$this->authentification->estConnecte())
		{
			$data = array();
			$this->templates->load('site_invite', 'connexion', $data);
		}
		
		else
		{
			$this->load->helper('url');
			redirect ('/connecte/');
		}
	}
	
	public function connecter ()
	{
		$this->load->model('authentification');
		$login = $this->input->post('login');
		$mdp = $this->input->post('mdp');
		
		$authUser = $this->authentification->authentification($login, $mdp);
		
		if(empty($authUser))
		{
			$data = array('erreur'=>'login ou mot de passe incorrect');
			$this->templates->load('site_invite', 'connexion', $data);
		}
		else
		{
			$data = array();
			$this->templates->load('invite', 'accueil', $data);
		}
		
		$this->authentification->connecter($authUser['login']);
		$this->index();
		
	}
	
}

?>

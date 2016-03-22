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
	
}

?>

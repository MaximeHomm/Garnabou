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
	public function index()
	{
		$this->load->view('connexion');
	}
	
//VERIFICATION AUTHENTIFICATION ET RENVOI SI NON CONNECTE
	public function _remap($action, $params = array())
	{
		// CHARGEMENT DU MODEL AUTHENTIFICATION
			$this->load->model('authentification');
		
		// SI L'UTILISATEUR EST CONNECTE
			if (!$this->authentif->estConnecte())
			{
				$this->load->view('connexion');
			}
			
		// SINON SI
		
			else
			{
				// LE CHARGEMENT DE L'ACCUEIL EST DEMANDE
				if ($action == 'accueil')
				{
					$this->load->view('accueil');
				}
				
				// LE CHARGEMENT DE LA CREATION EST DEMANDE
				else if ($action == 'creation')
				{
					$this->load->view('creation');
				}
				
				//LE CHARGEMENT DE LA CONSULTATION EST DEMANDE
				else if ($action == 'creation')
				{
					$this->load->model('consultation');
				}
				
				//LA DECONNEXION EST DEMANDE
				else if ($action == 'deconnexion')
				{
					$this->load->model('authentification');
					$this->authentification->deconnecter();

				}
				
			}
		
	}
	
	
}

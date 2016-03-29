
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
	public function _remap($action, $params = array())
	{
		// CHARGEMENT DU MODEL AUTHENTIFICATION
		$this->load->model('authentification');

		// SI L'UTILISATEUR Est non connecte
		if (!$this->authentification->estConnecte())
		{
			$this->load->helper('url');
			redirect ('/controller/');
		}
			
		// SINON SI

		else
		{
			 /* if ($action == 'index')
			{
				$data = array();
			} 
				*/
			// LE CHARGEMENT DE L'ACCUEIL EST DEMANDE
			if ($action == 'accueil')
			{
				$data = array();
				$this->templates->load('site', 'accueil', $data);
			}

			// LE CHARGEMENT DE LA CREATION EST DEMANDE
			else if ($action == 'creationCR')
			{
				$data = array();
				$this->templates->load('site', 'creation', $data);
			}

			//LE CHARGEMENT DE LA CONSULTATION EST DEMANDE
			else if ($action == 'consultationCR')
			{
				$data = array();
				$this->templates->load('site', 'consultation', $data);
			}

			//LA DECONNEXION EST DEMANDE
			else if ($action == 'deconnexion')
			{
				$this->load->model('authentification');
				$this->authentification->deconnecter();
				$this->load->helper('url');
				redirect ('/controller/');

			}

		}

	}


}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentification extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
/** TEST SI CONNECTE
 * @return vrai ou faux
 */
	
	public function estConnecte()
	{
		return $this->session->userdata('authUser');
	}
	
/** ENREGISTRE LES INFOS DU CONNECTE
 * dans une variable session
 * @param $identifiant
 * @param $password
 */
	public function connecter ($login, $mdp)
	{
		$authUser = array(
				'login'  => $login,
				'mdp' => $mdp
		);
		$this->session->set_userdata('$authUser');	
	}
	
/** DECONNEXION
 * Détruit la session active
 */
	
	public function deconnecter()
	{
		$authUser = array(
				'login'  => '',
				'mdp' => ''
		);
		
		$this->session->unset_userdata($authUser);
		$this->session->sess_destroy();
	}
/** VERIFICATION
 * en base de donnée de la présence de l'utilisateur
 */
// TODO : s'assurer que les paramètres reçus sont cohérents avec ceux mémorisés en session
	public function authentification ($login, $mdp){
		$this->load->model('dataAccess');
		$authUser = $this->dataAccess->getTestCo($login, $mdp);
		return $authUser;
	}
	
}

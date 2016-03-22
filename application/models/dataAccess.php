<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataAccess extends CI_Model{
	// TODO : Transformer toutes les requêtes en requêtes paramétrées

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
/**
 * Retourne les informations d'un visiteur
 * @param $login
 * @param $mdp
 * @return ID 
 */
	// ARRIVER ICI!!!! voir dataAcces la fleur
	public function getTestCo ($login, $mdp)
	{
		$req = "select VIS_NOM AS Nom, VIS_DATEEMBAUCHE AS MDP
				from visiteur
				where visiteur.login = ? and visiteur.mdp = ?";	}
	






}
?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function create($user) {
		$this->db->insert('users', array(
			'username' => $user['username'],
			'prenom'   => $user['prenom'],
			'nom'	   => $user['nom'],
			'password' => hashPass($user['password'])
		));
	}
}
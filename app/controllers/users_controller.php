<?php


class UsersController extends AppController {
	// var $name = 'MiPagina';
	// var $uses = array('Publicacion');

	public function login(){
		$this->layout = 'administrador';
	}
	public function logout(){
		$this->layout = 'administrador';
	}


}

?>
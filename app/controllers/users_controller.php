<?php


class UsersController extends AppController {
    var $components = array( 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

	public function login(){
		$this->layout = 'administrador';
	}
	public function logout(){
		$this->layout = 'administrador';
	}

	function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }


}

?>
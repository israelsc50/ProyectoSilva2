<?php


class UsersController extends AppController {
    var $components = array('Session');
    var $name = 'Users';
    var $uses = array('User');
    // var $helpers = array('Html', 'Form', 'Session');

    // pr($this->Auth);
	public function login(){
        if($this->data){
            
            $usuario= $this->User->find('first', array('conditions' => array('User.username' => $this->data['usuario'], 'User.password' => $this->data['password'] )));
            pr($usuario);

            if(!empty($usuario)){
                $this->Session->write('Usuario', $usuario);
            
            }
        }




		$this->layout = 'administrador';
	}
	public function logout(){
        $this->Session->delete('Usuario');
		$this->redirect(array('controller' => 'Users', 'action' => 'login'));
	}


}

?>
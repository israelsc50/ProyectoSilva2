<?php


class AdministradorController extends AppController {
var $uses = array('Publicacion', 'Receta');
var $name = 'Administrador';

	public function index(){
        $arrPublicaciones = $this->Publicacion->find('all');
      

        //Enviar a la vista
        $this->set('publicaciones', $arrPublicaciones);
        $this->layout = 'administrador';

		// pr('hola'); exit;
	}


	public function beforeFilter(){
		if(!$this->Session->check('Usuario')){
			$this->redirect(array('controller' => 'Users', 'action'=> 'login'));
		}
	}

	public function post(){
		$this->layout = 'administrador';

		

	}
	public function save_post(){

		pr($this->data);
		
		if($this->Publicacion->save($this->data['Publicacion'])){
			echo json_encode(array('success' => true));
		} else {
			echo json_encode(array('success' => false));
		}

		pr($this->data);
		exit;
		
	}

	public function list_post(){
		$this->layout = 'administrador';
		$arrPublicaciones = $this->Publicacion->find('all');
		pr($arrPublicaciones);
		$this->set('publicaciones' , $arrPublicaciones);

	}

	public function edit_post($id = null){
		$this->layout = 'administrador';

		$post = $this->Publicacion->findById($id);
		$this->set('publicaciones' , $post);


		pr($post);

	}


	public function recetas(){
		$arrRecetas = $this->Receta->find('all');
		pr($arrRecetas); exit;
	}

}

?>
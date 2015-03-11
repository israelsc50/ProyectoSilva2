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

	public function post(){
		$this->layout = 'administrador';

		

	}
	public function save_post(){

		$this->Publicacion->create();
		if($this->Publicacion->save($this->data)){
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


	public function recetas(){
		$arrRecetas = $this->Receta->find('all');
		pr($arrRecetas); exit;
	}

}

?>
<?php


class AutorController extends AppController {
var $uses = array('Autor');
var $name = 'Autor';



	public function index(){
         

        $arrPublicaciones = $this->Autor->find('all');
      

        //Enviar a la vista
        $this->set('autores', $arrAutores);
        $this->layout = 'administrador';

	}

	public function add(){


		pr($this->data);

		$this->layout = 'administrador';
	}
	public function save_autor(){

		$this->Autor->create();
		if($this->Autor->save($this->data)){
			echo json_encode(array('success' => true));
		} else {
			echo json_encode(array('success' => false));
		}
		

		pr($this->data);
		exit;
	}

	public function list_autor() {
		$arrAutores = $this->Autor->find('all');
		pr($arrAutores);
        $this->set('autores', $arrAutores);
        $this->layout = 'administrador';
	}


}
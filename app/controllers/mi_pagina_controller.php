<?php


class MiPaginaController extends AppController {
var $name = 'MiPagina';
var $uses = array('Publicacion');
	public function index(){
         

        $arrPublicaciones = $this->Publicacion->find('all');
        //pr($arrPublicaciones);

        //Enviar a la vista
        $this->set('publicaciones', $arrPublicaciones);
        $this->layout = 'administrador';

		// pr('hola'); exit;
	}

}

?>
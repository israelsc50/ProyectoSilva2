<?php 
class AppController extends Controller {
var $components = array(
	'Session'
	);
	function beforeFilter(){
		// if($this->Session->check('Usuario')){
		// 	pr('bienvenido usuario'); exit;
		// }
	}

}

 ?>
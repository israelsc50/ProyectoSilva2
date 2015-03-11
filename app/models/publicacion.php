<?php 

class Publicacion extends AppModel{
	var $name= 'Publicacion';
	var $useTable = 'publicaciones';

	// public $hasOne = 'Autor';
	public $belongsTo = array(
			'Autor' => array(
				'className' => 'Autor',
				'foreignKey' => 'autor_id'
				)
		);
	

	
}

?>
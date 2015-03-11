<?php 

class Autor extends AppModel{
	var $name= 'Autor';
	var $useTable = 'Autores';

	public $hasMany = array(
		'Publicacion' => array(
			'className' => 'Publicacion',
			'foreignKey' => 'autor_id'
			)
		);
}

?>
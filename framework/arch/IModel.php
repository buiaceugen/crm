<?php

namespace framework\arch;

interface IModel
{	
	/**
	* Singleton pattern
	* Daca, de exemplu, intr-o pagina avem mai multe apelari ale Model-ului, doar o instanta de PDO este creata
	* e.g listare un articol si sub el comentarii - se apeleaza modelul de la articole si cel de la comentarii 
	*/ 
	public static function connectDB();

	public function findByPk($pk_name, $pk_value);

	public function delete($pk_name, $pk_value);
}
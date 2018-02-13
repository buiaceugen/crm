<?php

namespace app\models;

use framework\BaseModel as BaseModel;

class UserModel extends BaseModel {
	private $pdo;
	protected static $table_name = "user";
	// protected static $db_fields = array (
	// 'name',
	// 'firstName',
	// 'userName',
	// 'email',
	// 'password',
	// );
	public function __construct() {
		parent::connectDB ();
		$this->pdo = parent::$_pdo;
	}
	// listeaza utilizatori OK
	public function listUsers() {
		return $this->pdo->query ( "SELECT * FROM " . self::$table_name );
	}
}
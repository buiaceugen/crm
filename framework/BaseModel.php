<?php

/**
 * Clasa BaseModel sta la baza oricarui Model si trebuie
 * sa implementeze interfata IModel
 */
namespace framework;

use framework\arch\IModel;

class BaseModel implements IModel {
	use \framework\traits\ClassTrait;
	protected static $_pdo;
	public static function connectDB() {
		if (is_null ( self::$_pdo )) {
			$host = Framework::$params ['database'] ['host'];
			$database = Framework::$params ['database'] ['name'];
			$username = Framework::$params ['database'] ['username'];
			$password = Framework::$params ['database'] ['password'];
			$options = Framework::$params ['database'] ['options'];
			
			self::$_pdo = new \PDO ( "mysql:dbname={$database};host={$host};port=3306;charset=utf8", $username, $password, $options );
		} else {
			return self::$_pdo;
		}
	}
	
	// validare formular OK
	private function validate($post) {
		$validate = true;
		if (empty ( $post ['firstName'] ) || ! ctype_alpha ( $post ['firstName'] )) {
			Mess::setMess ( 'firstName', 'Invalid firstName' );
			$validate = false;
		}
		if (empty ( $post ['name'] ) || ! ctype_alpha ( $post ['name'] )) {
			Mess::setMess ( 'name', 'Invalid name' );
			$validate = false;
		}
		if (empty ( $post ['email'] ) || ! filter_var ( $post ['email'], FILTER_VALIDATE_EMAIL )) {
			Mess::setMess ( 'email', 'Invalid Email' );
			$validate = false;
		}
		
		return $validate;
	}
	
	// select in baza de date OK
	public function findByPk($pk_name, $pk_value) {
		$table = $this->getModelTable ();
		$query = self::$_pdo->prepare ( "SELECT * FROM $table WHERE $pk_name = :idUser" );
		$query->execute ( array (
				':idUser' => $pk_value 
		) );
		return $query->fetch ();
	}
	
	// delete in baza de date OK
	public function delete($pk_name, $pk_value) {
		$table = $this->getModelTable ();
		$query = self::$_pdo->prepare ( "DELETE FROM $table WHERE $pk_name = :idUser" );
		$query->execute ( array (
				':idUser' => $pk_value 
		) );
	}
	
	// insert in baza de date
	public function insert($post) {
		$table = $this->getModelTable ();
		if (! $this->validate ( $post )) {
			return false;
		}
		$sql = "INSERT INTO $table (userName, name, firstName, email, password) VALUES (:userName, :name, :firstName, :email, :password)";
		$stmt = self::$_pdo->prepare ( $sql );
		$stmt->bindParam ( ':userName', $_POST ['User'] ['userName'] );
		$stmt->bindParam ( ':name', $_POST ['User'] ['name'] );
		$stmt->bindParam ( ':firstName', $_POST ['User'] ['firstName'] );
		$stmt->bindParam ( ':email', $_POST ['User'] ['email'] );
		$stmt->bindParam ( ':password', $_POST ['User'] ['password'] );
		$stmt->execute ();
	}
	
	// update in baza de date
	public function update($idUser, $post) {
		$table = $this->getModelTable ();
		if (! $this->validate ( $post )) {
			return false;
		}
		$set = 'firstName = :firstName, name = :name, email = :email';
		$sql = self::$_pdo->prepare ( "UPDATE $table SET $set  WHERE idUser = :idUser" );
		return $sql->execute ( array (
				':idUser' => $idUser,
				':firstName' => $post ['firstName'],
				':name' => $post ['name'],
				':email' => $post ['email'] 
		) );
	}
}
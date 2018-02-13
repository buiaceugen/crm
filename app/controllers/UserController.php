<?php

namespace app\controllers;

use framework\BaseController as BaseController;
use app\models\UserModel;
use framework\Message;

class UserController extends BaseController {
	private $_model;
	public function __construct() {
		$this->_model = new UserModel ();
	}
	
	// actiune de listare OK
	public function listAction() {
		$users = $this->_model->listUsers ();
		$this->render ( 'list', array (
				'users' => $users 
		) );
	}
	
	// actiune inserare utilizator
	public function insertAction() {
		if (isset ( $_POST ['User'] )) {
			$this->_model->insert ( $_POST ['User'] );
			// Mess::setMess('success', 'Update cu succes!');
			$this->redirect ( 'index.php?c=user&a=list' );
		}
		$this->render ( 'insert', array (
				'user' => $user 
		) );
	}
	
	// actiune de editare OK
	public function editAction() {
		// method from parent Model class (must have id parameter in URL)
		$user = $this->_model->findByPk ( 'idUser', $_GET ['idUser'] );
		if (isset ( $_POST ['User'] )) {
			if ($this->_model->update ( ( int ) $_GET ['idUser'], $_POST ['User'] )) {

				$message = new Message ();
				echo $message->output_message('Update cu succes!');

			}
		}
		
		$this->render ( 'update', array (
				'user' => $user 
		) );
	}
	
	// actiune de stergere OK
	public function deleteAction() {
		$this->_model->delete ( 'idUser', $_GET ['idUser'] );
		$this->redirect ( 'index.php?c=user&a=list' );
	}
}
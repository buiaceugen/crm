<?php
namespace app\controllers;

use framework\BaseController as BaseController;

class ServicesController extends BaseController {
	public function servicesAction() {
		$this->render( 'services', array (
				'services' => 'Pagina despre servicii'
		) );
	}
}
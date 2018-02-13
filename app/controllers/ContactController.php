<?php

namespace app\controllers;

use framework\BaseController as BaseController;

class ContactController extends BaseController {
	public function contactAction() {
		$this->render( 'contact', array (
				'contact' => 'Pagina de contact' 
		) );
	}
}
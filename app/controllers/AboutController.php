<?php
namespace app\controllers;

use framework\BaseController as BaseController;

class AboutController extends BaseController {
	public function aboutAction() {
		$this->render( 'about', array (
				'about' => 'Pagina despre noi'
		) );
	}
}
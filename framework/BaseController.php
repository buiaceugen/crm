<?php

/**
 * Clasa BaseController sta la baza fiecarui Controller din aplicatie
 * si trebuie sa implementeze clasa abstracta
 * framework\arch\AController
 */
namespace framework;

use framework\arch\AController;

class BaseController extends AController {
	// Render un array cu continut intr-un anumit view (fisier HTML)
	public function render($view, $vars = array()) {
		$view_file = VIEWS_PATH . $this->getViewFolder () . DIRECTORY_SEPARATOR . $view . '.php';
		if (is_file ( $view_file )) {
			// returneaza continutul unui fisier intr-o variabila
			ob_start ();
			ob_implicit_flush ( false );
			require $view_file;
			$content = ob_get_clean ();
			// incarca continutul view-ului in tema
			$this->loadTheme ( $content );
		} else {
			$this->render ( 'pages/404' );
		}
	}
	protected function loadTheme($content) {
		require THEME_PATH . Framework::$params ['theme'] . DIRECTORY_SEPARATOR . 'index.php';
	}
	
	// redirect
	function redirect($redirect) {
		if (! empty ( $redirect )) {
			header ( "Location: $redirect" );
			exit ();
		}
	}
}
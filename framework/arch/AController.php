<?php
/**
 * Clasa abstracta care sta la baza definirii BaseController
 */
namespace framework\arch;

abstract class AController
{
	// Render un array cu continut intr-un anumit view (fisier HTML)
	abstract public function render($view, $vars = array());

	/**
	* Folderul unde se afla view-ul se obtine din numele clasei Controller-ului
	* care a extins BaseController
	*/
	protected function getViewFolder(){	
		$child_class = get_called_class();
		$end_pos = strpos($child_class, 'Controller');
		$start_pos = strrpos($child_class, '\\');
		return strtolower(substr($child_class, $start_pos+1, $end_pos-$start_pos-1));
	}	

	/**
	* Incarcarea temei furnizata in fisierul de configurare
	* impreuna cu continutul view-ului
	*/
	abstract protected function loadTheme($content);	
}
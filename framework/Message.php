<?php

namespace framework;

class Message {
	public $message;
	function __construct($message = '') {
		$this->message = $message;
	}
	public function setMessage($message) {
		$this->message = $message;
	}
	public function output_message($message) {
		return $this->message = $message;
	}
}
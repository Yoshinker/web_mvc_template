<?php

$data = null;

class HomeController {

	public function index() {
		$data = Message::all();
		include_once "view/header.php";
		include_once "view/welcome.php";
		include_once "view/footer.php";
	}

	public function notfound() {
		include_once "view/header.php";
		include_once "view/404.php";
		include_once "view/footer.php";
	}

}
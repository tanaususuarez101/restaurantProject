<?php
	include_once 'lib.php';
	
	session_start();
	if (!isset($_SESSION['id'])) {
		$_SESSION['id'] = null; 
	}
	if (!isset($_SESSION['user'])) {
		$_SESSION['user'] = null;
	}
	if (!isset($_SESSION['password'])) {
		$_SESSION['password'] = null;
	}
	if (!isset($_SESSION['name'])) {
		$_SESSION['user'] = null;
	}
	if (!isset($_SESSION['type'])) {
		$_SESSION['type'] = 0; // Tipo 0 para visitante
	}
	
	View::start('Restaurante Ca\'Berto');
	
	View::nav();
	View::body();
	View::end();
	
	
	
	
	
	session_write_close();
?>

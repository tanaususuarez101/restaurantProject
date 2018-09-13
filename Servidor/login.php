<?php
	include_once 'lib.php';
	session_start();
	
	
	View::start('Restaurante Ca\'Berto');
	
	if (isset($_GET['user']) && isset($_GET['pass'])) {
		$db = new PDO("sqlite:./restaurante.sql");
		$sql = $db->prepare('SELECT * FROM usuarios WHERE usuario=? AND clave=?;');
		$sql->execute(array($_GET['user'], md5($_GET['pass'])));
		$sql->setFetchMode(PDO::FETCH_NAMED);
   		$result = $sql->fetchAll();
		
		if (count($result) == 1) {
			
			$_SESSION['username'] = $_GET['user'];
			$html = $_SESSION['username'];
			echo "<h2>Soy $html</h2>";
			
		
		
		}
	
	}
	
	View::login();
	View::end();
	
	
	
	session_write_close();
?>
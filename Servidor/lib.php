<?php

	class View {
		
    	public static function start($title) {
        	$html = "<!DOCTYPE html>
			<html>
			<head>
			<meta charset=\"utf-8\">
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\">
			<title>$title</title>
			</head>
			<body>
			<header>
				<img src=\"./resources/pictures/logo.png\" alt=\"Restaurante Ca'Berto\"/><br>
			</header>";
			
        	echo $html;
    	}
		
		public static function nav() {
			$html .= "
				<nav>
					<ul>
						<li><a class=\"active-page-button\" href=\"./index.php\">INICIO</a></li>";
						
			if ($_SESSION['type'] == 0) {
				$html .= "<li class=\"login\"><a href=\"login.php\">LOGIN</a></li>";
				
			} elseif ($_SESSION['type'] == 1) {
				$html .= "
					<li><a href=\"camarero/mesas.php\">MESAS</a></li>
					<li class=\"login\"><a href=\"logout.php\">LOGOUT</a></li>";
			} elseif ($_SESSION['type'] == 2) {
				$html .= "
					<li><a href=\"cocinero/lineas_comanda.php\">LINEAS COMANDAS</a></li>
					<li class=\"login\"><a href=\"logout.php\">LOGOUT</a></li>";						
			} 
			echo $html."</ul></nav>";
		
		}
		
		public static function body() {
			$html = "
			<main>
				<h2>¿QUIÉNES SOMOS?</h2>
				<div id=\"desc-div\">
					<p>En Restaurante Ca'Berto contamos con personal altamente cualificado en el servicio de la hostelería, con una amplia variedad de platos al mejor precio.</p>
					<img class=\"desc-img\" src=\"./resources/pictures/foto_restaurante.jpg\" alt=\"Restaurante Ca'Berto\"/>
				</div>
			</main>";
			
			echo $html;
		}
    
		public static function end() {
        	$html = " 
			<footer>
				<p>Programación 4 año 2016</p>
			</footer>
			</body>
			</html>";
			
			echo $html;
    	}
		
		public static function login() {
			$html = "
			<nav>
				<ul>
					<li><a href=\"./index.php\">INICIO</a></li>
					<li class=\"login\"><a class=\"active-page-button\" href=\"login.php\">LOGIN</a></li>
			</nav>
			
			<main>
				<h2>LOGIN</h2>
				<div id=\"form-div\">
					<form method=\"get\">
					<fieldset>
						<legend>DATOS PERSONALES</legend>
						<label for=\"user-area\">Usuario</label><br/>
						<input type=\"text\" id=\"user-area\" name=\"user\"/><br/>
						<label for=\"pass-area\">Contraseña</label><br/>
						<input type=\"password\" id=\"pass-area\" name=\"pass\"/><br/>
						<input type=\"submit\" value=\"Entrar\"/>
					</fieldset>
					</form>
				</div>
			</main>";
			
			echo $html;
		}
		
	}

?>

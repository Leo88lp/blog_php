<?php session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (!isset($_POST['usuario'])){
		header('Location: '. RUTA . 'login.php');
	} else {
		$usuario = limpiarDatos($_POST['usuario']);
		$password = limpiarDatos($_POST['password']);

		if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
			$_SESSION['admin'] = $blog_admin['usuario'];
			header('Location: '. RUTA . '/admin');
		}
	}
}



 

require 'views/login.view.php';

?>
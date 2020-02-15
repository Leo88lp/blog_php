<?php
session_start();
require 'admin/config.php';
require 'functions.php';



$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
} else {
	echo "conexion exitosa";
}



// Obtenemos los post
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

// Si no hay post entonces redirigimos
 if(!$posts){
	 $_SESSION["nopost"] = "NO HAY POSTEOS, por favor cree uno";
	header('Location: error.php');
}

require 'views/index.view.php';

?>
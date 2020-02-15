<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.

 if (!isset($_SESSION["admin"])){
	header('Location: ' . RUTA .'login.php');
 }


if (!$conexion) {
	header("Location: ../error.php");
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';
?>
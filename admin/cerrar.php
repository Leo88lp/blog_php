<?php session_start();

//session_destroy();
$_SESSION["admin"] = null;
unset ($_SESSION["admin"]);

header('Location: ../');
die();

?>
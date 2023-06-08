<?php

include('model/Auth.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	echo "THIS";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$rol = $_POST['rol'];

	$sesion = new Auth();
	
	var_dump($sesion->login($username, $password));

}

?>
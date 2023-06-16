<?php

require("../../model/Auth.php");

$username = $_POST['username'];
$password = $_POST['password'];

$auth = new Auth();

echo ( $auth->login($username, $password) ) ? "1" : "0";

?>
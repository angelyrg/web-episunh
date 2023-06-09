<?php

require("../model/Auth.php");

$auth = new Auth();
$auth->logout();

header("Location: ../");

?>
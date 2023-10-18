<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/DocumentCategory.php");
date_default_timezone_set('America/Lima');

$category_name = $_POST['category_name'];
$category_description = $_POST['category_description'];

try {
    $category = new DocumentCategory();
    echo $category->create($category_name, $category_description);
    
}catch(Exception $e) {
    echo 'Error al guardar en la base de datos: ' .$e->getMessage();
}

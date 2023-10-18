<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/DocumentCategory.php");
date_default_timezone_set('America/Lima');

$id = $_POST['category_id'];
$category_name = $_POST['category_name_edit'];
$description = $_POST['description_edit'];

try {
    $category = new DocumentCategory();
    echo $category->update($id, $category_name, $description);

}catch(Exception $e) {
    echo 'Error al guardar en la base de datos: ' .$e->getMessage();
}

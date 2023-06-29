<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Authority.php");
date_default_timezone_set('America/Lima');

$name = $_POST['authority_name'];
$lastname = $_POST['authority_lastname'];
$degree = $_POST['authority_degree'];
$position = $_POST['authority_position'];

$file_temp_name = $_FILES['authority_photo']['tmp_name'];
// $file_type = $_FILES['authority_photo']['type'];
// $file_size = $_FILES['authority_photo']['size'];

$temp = explode(".", $_FILES["authority_photo"]["name"]);
$new_filename = "autoridad_".date('YmdHis').".".end($temp);

//Create folder if doesn't exist 
if (!file_exists("../../upload/images")) {
    mkdir("../../upload/images", 0777, true);
}

// echo $new_filename;
// exit();

if (move_uploaded_file($file_temp_name, '../../upload/images/'.$new_filename)) {

    try {
        $authority = new Authority();
        $insert = $authority->create($name, $lastname, $degree, $position, $new_filename);
        echo $insert ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al guardar en la base de datos: ' .$e->getMessage();
    }

}else{
    echo "Error al subir la imagen";
}


?>
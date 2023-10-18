<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Authority.php");
date_default_timezone_set('America/Lima');

$id = $_POST['authority_id'];
$name = $_POST['authority_name_edit'];
$lastname = $_POST['authority_lastname_edit'];
$degree = $_POST['authority_degree_edit'];
$position = $_POST['authority_position_edit'];

if (file_exists($_FILES['authority_photo_edit']['tmp_name'])){
    $file_temp_name = $_FILES['authority_photo_edit']['tmp_name'];
    $temp = explode(".", $_FILES["authority_photo_edit"]["name"]);
    $new_filename = "autoridad_".date('YmdHis').".".end($temp);
    
    if (!file_exists("../../upload/images")) {
        mkdir("../../upload/images", 0777, true);
    }
    move_uploaded_file($file_temp_name, '../../upload/images/'.$new_filename);
    $authority = new Authority();
    echo $authority->update($id, $name, $lastname, $degree, $position, $new_filename);
}else{
    $authority = new Authority();
    echo $authority->update($id, $name, $lastname, $degree, $position);
}


?>
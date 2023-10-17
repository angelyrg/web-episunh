<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Project.php");
date_default_timezone_set('America/Lima');

$project_name = $_POST['project_name'];
$group_name = $_POST['group_name'];
$descripcion = $_POST['descripcion'];


// ARCHIVOS

$temp_inform_file = $_FILES['inform_file']['tmp_name'];
$temp = explode(".", $_FILES["inform_file"]["name"]);
$new_inform_filename = "informe_".date('YmdHis').".".end($temp);


$temp_resolution_file = $_FILES['resolution_file']['tmp_name'];
$temp = explode(".", $_FILES["resolution_file"]["name"]);
$new_resolution_filename = "resolucion_".date('YmdHis').".".end($temp);


$temp_cover_picture = $_FILES['cover_picture']['tmp_name'];
$temp = explode(".", $_FILES["cover_picture"]["name"]);
$new_cover_picture_filename = "caratula_".date('YmdHis').".".end($temp);


//Create folder if doesn't exist 
if (!file_exists("../../upload/images")) {
    mkdir("../../upload/images", 0777, true);
}
if (!file_exists("../../upload/docs")) {
    mkdir("../../upload/docs", 0777, true);
}

// TODO: Max zise of $new_fotos_filenames should be 4
$new_fotos_filenames = [];

if (isset($_FILES['fotos'])){
    foreach ( $_FILES['fotos']['name'] as $item ){
        $t = explode(".", $item);
        $new_temp_filename = "foto_".$t[0].date('YmdHis').".".end($t);
        array_push($new_fotos_filenames, $new_temp_filename);
    }
}


for ($i=0; $i < count($new_fotos_filenames); $i++){
    move_uploaded_file($_FILES['fotos']['tmp_name'][$i] , '../../upload/images/'.$new_fotos_filenames[$i]);
}



if (move_uploaded_file($temp_inform_file, '../../upload/docs/'.$new_inform_filename) &&
    move_uploaded_file($temp_resolution_file, '../../upload/docs/'.$new_resolution_filename) &&
    move_uploaded_file($temp_cover_picture, '../../upload/images/'.$new_cover_picture_filename)) {

    try {
        $project = new Project();

        $foto1 = isset($new_fotos_filenames[0]) ? $new_fotos_filenames[0] : '';
        $foto2 = isset($new_fotos_filenames[1]) ? $new_fotos_filenames[1] : '';
        $foto3 = isset($new_fotos_filenames[2]) ? $new_fotos_filenames[2] : '';
        $foto4 = isset($new_fotos_filenames[3]) ? $new_fotos_filenames[3] : '';

        $insert = $project->create($project_name, $group_name, $new_resolution_filename, $new_inform_filename, $descripcion, $new_cover_picture_filename, $foto1, $foto2, $foto3, $foto4);
        echo $insert ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al guardar en la base de datos: ' .$e->getMessage();
    }

}else{
    echo "Error al subir la imagen";
}


?>
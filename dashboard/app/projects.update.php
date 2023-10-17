<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Project.php");
date_default_timezone_set('America/Lima');

$project_id = $_POST['project_id_edit'];
$project_name = $_POST['project_name_edit'];
$group_name = $_POST['group_name_edit'];
$descripcion = $_POST['descripcion_edit'];
$inform_filename=NULL;
$resolution_filename=NULL;
$cover_picture_filename=NULL;
$picture1=NULL;
$picture2=NULL;
$picture3=NULL;
$picture4=NULL;


//Create folder if doesn't exist 
if (!file_exists("../../upload/images")) {
    mkdir("../../upload/images", 0777, true);
}
if (!file_exists("../../upload/docs")) {
    mkdir("../../upload/docs", 0777, true);
}

// ARCHIVOS
if (isset($_FILES['inform_file_edit']) && file_exists($_FILES['inform_file_edit']['tmp_name'])){
    $temp_inform_file = $_FILES['inform_file_edit']['tmp_name'];
    $temp = explode(".", $_FILES["inform_file_edit"]["name"]);
    $inform_filename = "informe_".date('YmdHis').".".end($temp);

    move_uploaded_file($temp_inform_file, '../../upload/docs/'.$inform_filename);
}

if (isset($_FILES['resolution_file_edit']) && file_exists($_FILES['resolution_file_edit']['tmp_name'])){
    $temp_resolution_file = $_FILES['resolution_file_edit']['tmp_name'];
    $temp = explode(".", $_FILES["resolution_file_edit"]["name"]);
    $resolution_filename = "resolucion_".date('YmdHis').".".end($temp);

    move_uploaded_file($temp_resolution_file, '../../upload/docs/'.$resolution_filename);
}

if (isset($_FILES['cover_picture_edit']) && file_exists($_FILES['cover_picture_edit']['tmp_name'])){
    $temp_cover_picture = $_FILES['cover_picture_edit']['tmp_name'];
    $temp = explode(".", $_FILES["cover_picture_edit"]["name"]);
    $cover_picture_filename = "caratula_".date('YmdHis').".".end($temp);

    move_uploaded_file($temp_cover_picture, '../../upload/images/'.$cover_picture_filename);
}


if (isset($_FILES['fotos_edit']) && file_exists($_FILES['fotos_edit']['tmp_name'][0])){
    $new_fotos_filenames = ['', '', '', ''];
    $i = 0;
    foreach ( $_FILES['fotos_edit']['name'] as $item ){
        $t = explode(".", $item);
        $new_temp_filename = "foto_".$t[0].date('YmdHis').".".end($t);
        $new_fotos_filenames[$i] = $new_temp_filename;
        move_uploaded_file($_FILES['fotos_edit']['tmp_name'][$i] , '../../upload/images/'.$new_temp_filename);
        $i++;
    }
    $project = new Project();
    // var_dump($new_fotos_filenames);
    echo $project->update($project_id, $project_name, $group_name, $descripcion, $inform_filename, $resolution_filename, $cover_picture_filename, $new_fotos_filenames[0], $new_fotos_filenames[1], $new_fotos_filenames[2], $new_fotos_filenames[3]); 

}else{
    $project = new Project();
    echo $project->update($project_id, $project_name, $group_name, $descripcion, $inform_filename, $resolution_filename, $cover_picture_filename); 
}

?>
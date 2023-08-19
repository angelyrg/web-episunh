<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Document.php");
date_default_timezone_set('America/Lima');

$documents_name = $_POST['documents_name'];
$description = $_POST['description'];
$type_document = $_POST['type_document'];
$date = $_POST['date'];
// ARCHIVOS
$temp_inform_file = $_FILES['link']['tmp_name'];
$temp = explode(".", $_FILES["link"]["name"]);
$document_inform_filename = "link_".date('YmdHis').".".end($temp);


//Create folder if doesn't exist 
if (!file_exists("../../upload/docs")) {
    mkdir("../../upload/docs", 0777, true);
}


if (move_uploaded_file($temp_inform_file, '../../upload/docs/'.$document_inform_filename)){

    try {
        $project = new Document();
        $insert = $project->create($documents_name, $description, $type_document, $date, $document_inform_filename);
        // echo $insert ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al guardar en la base de datos: ' .$e->getMessage();
    }

}else{
    echo "Error al subir document";
}


?>
<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Document.php");
date_default_timezone_set('America/Lima');


$document_name = $_POST['document_name'];
$description = $_POST['description'];
$id_doc_category = (int)$_POST['type_document'];

// ARCHIVOS
$temp_inform_file = $_FILES['document_file']['tmp_name'];

$temp = explode(".", $_FILES["document_file"]["name"]);

$document_inform_filename = "document_" . date('YmdHis'). "." . end($temp);


$upload_docs_path = "../../upload/docs/";
//Create folder if doesn't exist 
if (!file_exists($upload_docs_path)) {
    mkdir($upload_docs_path, 0777, true);
}


if (move_uploaded_file($temp_inform_file, $upload_docs_path . $document_inform_filename)){

    try {
        $doc = new Document();
        $insert = $doc->create($document_name, $id_doc_category, $description,  $document_inform_filename);
        echo $insert ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al guardar en la base de datos: ' .$e->getMessage();
    }

}else{
    echo "Error al subir document";
}


?>  
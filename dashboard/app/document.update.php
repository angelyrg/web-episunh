<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Document.php");
date_default_timezone_set('America/Lima');

$id = $_POST['document_id'];
$doc_name = $_POST['document_name_edit'];
$doc_description = $_POST['description_edit'];
$doc_type = $_POST['type_document_edit'];


if (file_exists($_FILES['document_file_edit']['tmp_name'])){
    $file_temp_name = $_FILES['document_file_edit']['tmp_name'];
    $temp = explode(".", $_FILES["document_file_edit"]["name"]);
    $new_filename = "documento_" . date('YmdHis'). "." . end($temp);

    if (!file_exists("../../upload/docs")) {
        mkdir("../../upload/docs", 0777, true);
    }
    move_uploaded_file($file_temp_name, '../../upload/docs/'.$new_filename);
    $doc = new Document();
    echo $doc->update($id, $doc_name, $doc_type, $doc_description,  $new_filename);
}else{
    $doc = new Document();
    echo $doc->update($id, $doc_name, $doc_type, $doc_description);
}

?>
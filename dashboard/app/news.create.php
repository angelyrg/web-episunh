<?php

require("../model/News.php");
date_default_timezone_set('America/Lima');


$news_name = $_POST['news_name'];
$news_link = $_POST['news_link'];


$file_temp_name = $_FILES['news_image']['tmp_name'];
// $file_type = $_FILES['news_image']['type'];
// $file_size = $_FILES['news_image']['size'];


$temp = explode(".", $_FILES["news_image"]["name"]);
$new_filename = "noticia_".date('YmdHis').".".end($temp);

//Create folder if doesn't exist 
if (!file_exists("../../upload/images")) {
    mkdir("../../upload/images", 0777, true);
}

if (move_uploaded_file($file_temp_name, '../../upload/images/'.$new_filename)) {

    try {
        $new = new News();
        $insert = $new->create($news_name , $new_filename, $news_link);
        echo $insert ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al guardar en la base de datos: ' .$e->getMessage();
    }

}else{
    echo "Error al subir la imagen";
}


?>
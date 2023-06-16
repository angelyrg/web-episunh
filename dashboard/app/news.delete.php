<?php

require("../../model/News.php");

$news_id = $_POST['news_id-delete'];

$new = new News();
$news_data = $new->get_by_id($news_id);

if (unlink('../../upload/images/'.$news_data['picture'])) {
    try {        
        $destroy = $new->delete($news_id);
        echo $destroy ? "1" : "0";
    
    }catch(Exception $e) {
        echo 'Error al eliminar el registro' .$e->getMessage();
    }

} else {
    echo "No se pudo eliminar el archivo";
}


?>
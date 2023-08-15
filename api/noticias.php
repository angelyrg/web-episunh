<?php
try {

    require("../model/News.php");
    $noticia = new News();
    $all_data = $noticia->get_all();

} catch (Exception $e) {
    $response = [
        "code" => "500",
        "message" => "Error al obtener los datos"
    ];
    
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}


$data_response = [];

foreach ($all_data as $value) {    
    $temp = [
        'id' => $value['id'],
        'nombre' => $value['name'],
        'link' => $value['link'],
        'url_foto' => $_SERVER['HTTP_HOST']."/upload/images/".$value['picture'],
    ];
    array_push($data_response, $temp);
}


$response = array(
    'code' => '200',
    'message' => 'Ok',
    'data' => $data_response,
);

header("Content-Type: application/json");
echo json_encode($response);

?> 
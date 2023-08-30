<?php
try {

    require("../model/Document.php");
    $proyecto = new Document();
    $all_data = $proyecto->get_all();

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
        'nombre' => $value['name_doc'],
        'tategoria' => $value['cat_id'],
        'descripcion'=>$value['description'],
        'archivo'=>$_SERVER['HTTP_HOST']."/upload/docs/".$value['file'],
    ];
    array_push($data_response, $temp);
}


$response = array(
    'code' => '200',
    'message' => 'Ok',
    'total_items' => count($all_data),
    'data' => $data_response,
);

header("Content-Type: application/json");
echo json_encode($response);

?> 
<?php
try {

    require("../model/Project.php");
    $proyecto = new Project();
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

$ruta_raiz_images = $_SERVER['HTTP_HOST']."/dev_v1/upload/images/";
$ruta_raiz_docs = $_SERVER['HTTP_HOST']."/dev_v1/upload/docs/";

foreach ($all_data as $value) {    
    $temp = [
        'id' => $value['id'],
        'nombre' => $value['project_name'],
        'grupo' => $value['group_name'],
        'descripcion' => $value['description'],
        'url_resolucion' => $ruta_raiz_docs.$value['resolution_file'],
        'url_informe' => $ruta_raiz_docs.$value['inform_file'],
        'url_caratula' => $ruta_raiz_images.$value['cover_picture'],
        'url_foto1' => $ruta_raiz_images.$value['picture1'],
        'url_foto2' => $ruta_raiz_images.$value['picture2'],
        'url_foto3' => $ruta_raiz_images.$value['picture3'],
        'url_foto4' => $ruta_raiz_images.$value['picture4'],
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
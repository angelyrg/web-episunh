<?php
try {
    require("../model/Authority.php");
    $autoridades = new Authority();
    $all_data = $autoridades->get_all();
    $cantidad = count($all_data);

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
        'nombres' => $value['name'],
        'apellidos' => $value['lastname'],
        'grado' => $value['degree'],
        'nombre_completo' => $value['degree']." ".$value['name']." ".$value['lastname'],
        'cargo' => $value['position'],
        'foto' => $value['photo'],
        'url_foto' => $_SERVER['HTTP_HOST']."/dev_v1/upload/images/".$value['photo'],
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
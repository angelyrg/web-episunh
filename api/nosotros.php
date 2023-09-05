<?php
try {
    require_once("../model/About.php");
    $about = new About();
    $all_data = $about->get_all();
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
        'bienvenida' => $value['welcome'],
        'mision' => $value['mision'],
        'vision' => $value['vision']
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
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

foreach ($all_data as $value) {    
    $temp = [
        'id' => $value['id'],
        'nombre' => $value['project_name'],
        'grupo' => $value['group_name'],
        'descripcion'=>$value['description'],
        'resolucion'=>$value['resolution_file'],
        'informe'=>$value['inform_file'],
        'caratula' => $_SERVER['HTTP_HOST']."/upload/images/".$value['cover_picture'],
        'foto1' => $_SERVER['HTTP_HOST']."/upload/images/".$value['picture1'],
        'foto2'=>$_SERVER['HTTP_HOST'].'/upload/images/'.$value['picture2'],
        'foto3'=>$_SERVER['HTTP_HOST'].'/upload/images/'.$value['picture3'],
        'foto4' =>$_SERVER['HTTP_HOST'].'/upload/images/'.$value['picture4'],

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
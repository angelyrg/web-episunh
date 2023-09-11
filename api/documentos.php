<?php
try {

    require("../model/Document.php");
    require("../model/DocumentCategory.php");
    $category = new DocumentCategory();
    $document = new Document();
    $all_categories= $category->get_all();

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

foreach ($all_categories as $value) {

    $docs_by_category = $document->get_by_category($value['id']);
    $temp = [
        'id' => $value['id'],
        'categoria_nombre' => $value['category_name'],
        'categorria_descripcion'=> $value['cat_description'],
        'total_docs' => count($docs_by_category),
        'documentos' => $docs_by_category,
    ];

    array_push($data_response, $temp);
}


$response = array(
    'code' => '200',
    'message' => 'Ok',
    'total_items' => count($all_categories),
    'data' => $data_response,
);

header("Content-Type: application/json");
echo json_encode($response);

?> 
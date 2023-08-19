<?php

require("../../model/Document.php");

$document = new Document();
$all_data = $document->get_all();

echo json_encode($all_data);

?>
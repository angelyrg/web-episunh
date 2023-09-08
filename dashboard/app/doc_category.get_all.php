<?php

require("../../model/DocumentCategory.php");

$doc_cat = new DocumentCategory();
$all_data = $doc_cat->get_all();

echo json_encode($all_data);

?>
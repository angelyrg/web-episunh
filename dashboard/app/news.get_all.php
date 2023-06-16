<?php

require("../../model/News.php");

$new = new News();
$all_data = $new->get_all();

echo json_encode($all_data);


?>
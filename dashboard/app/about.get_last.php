<?php

require("../../model/About.php");

$about = new About();
$all_data = $about->get_last();

echo json_encode($all_data[0]);

?>
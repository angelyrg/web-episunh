<?php

require("../../model/Authority.php");

$authority = new Authority();
$all_data = $authority->get_all();

echo json_encode($all_data);


?>
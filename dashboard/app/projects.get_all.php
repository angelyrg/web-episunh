<?php

require("../../model/Project.php");

$project = new Project();
$all_data = $project->get_all();

echo json_encode($all_data);


?>
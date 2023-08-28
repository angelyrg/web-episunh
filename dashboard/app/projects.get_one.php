<?php

require("../../model/Project.php");

$project_id = $_POST['project_id'];

$project = new Project();
$data = $project->get_by_id($project_id);

echo json_encode($data);

?>
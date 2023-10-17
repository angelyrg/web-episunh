<?php

require("../../model/Project.php");

$id = $_POST['project_id-delete'];

$project = new Project();
$result = $project->disable($id);
echo $result;
exit();

?>
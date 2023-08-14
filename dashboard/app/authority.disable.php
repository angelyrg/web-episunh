<?php

require("../../model/Authority.php");

$authority_id = $_POST['authority_id-delete'];


$authority = new Authority();
$result = $authority->disable($authority_id);

echo $result;
exit();


?>
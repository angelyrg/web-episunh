<?php

require("../../model/Document.php");

$id = $_POST['document_id_delete'];

$doc = new Document();
echo $doc->disable($id);
exit();

?>
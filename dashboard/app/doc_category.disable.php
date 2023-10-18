<?php

require("../../model/DocumentCategory.php");

$id = $_POST['category_id_delete'];

$category = new DocumentCategory();
echo $category->disable($id);
exit();

?>
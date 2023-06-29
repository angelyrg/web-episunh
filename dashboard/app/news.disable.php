<?php

require("../../model/News.php");

$news_id = $_POST['news_id-delete'];

$new = new News();
$result = $new->disable($news_id);

echo $result;
exit();

?>
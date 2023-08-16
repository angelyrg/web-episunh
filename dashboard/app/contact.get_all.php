<?php

require("../../model/Contact.php");

$contact = new Contact();
$all_data = $contact->get_all();

echo json_encode($all_data);


?>
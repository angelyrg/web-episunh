<?php

require("../../model/Contact.php");

$contact_id = $_POST['contact_id-delete'];

$contact = new Contact();
$result = $contact->disable($contact_id);
echo $result;
exit();

?>
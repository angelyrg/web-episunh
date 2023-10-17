<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Contact.php");
date_default_timezone_set('America/Lima');
//id, address, phone, email
$id = $_POST['contact_id-edit'];
$address = $_POST['address_name_edit'];
$phone = $_POST['phone_name_edit'];
$email = $_POST['email_name_edit'];

try {
    $contact = new Contact();
    $insert = $contact->update($id, $address, $phone, $email);
    echo $insert;
}catch(Exception $e) {
    echo 'Error al guardar en la base de datos: ' .$e->getMessage();
}

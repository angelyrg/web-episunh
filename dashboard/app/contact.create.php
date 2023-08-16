<?php

session_start();
if (!isset($_SESSION['login'])){
	header("Location: ../login.php");
}

require("../../model/Contact.php");
date_default_timezone_set('America/Lima');
//address, phone, email
$address = $_POST['address_name'];
$phone = $_POST['phone_name'];
$email = $_POST['email_name'];

 try {
    $contact = new Contact();
    $insert = $contact->create($address, $phone, $email);
     echo $insert ? "1" : "0";
}catch(Exception $e) {
    echo 'Error al guardar en la base de datos: ' .$e->getMessage();
}

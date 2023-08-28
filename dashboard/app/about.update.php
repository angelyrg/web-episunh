<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}

require("../../model/About.php");
date_default_timezone_set('America/Lima');

$id = $_POST['about_id'];
$welcome = $_POST['about_presentation'];
$mision = $_POST['about_mision'];
$vision = $_POST['about_vision'];

try {
    $about = new About();
    $insert = $about->update($id, $welcome, $mision, $vision);
    echo $insert ? "1" : "0";
} catch (Exception $e) {
    echo 'Error al guardar en la base de datos: ' . $e->getMessage();
}

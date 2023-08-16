<?php

//Connect to databse
require "Conection.php";

class Contact extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($address, $phone, $email){
        return $this->conexion_db->query("INSERT INTO contact (address, phone, email) VALUES ('$address', '$phone', '$email')");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM contact WHERE disabled=0");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM contact WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    // public function disable($id, $address, $phone, $email){
    //     return $this->conexion_db->query("UPDATE contact SET address='$address', phone='$phone', email='$email' WHERE id='$id'");
    // }
    public function disable($id){
        return $this->conexion_db->query("UPDATE contact SET disabled=1, disabled_at=NOW() WHERE id='$id'");
    }

    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM contact WHERE id='$id'");
    }

}

?>
<?php

//Connect to databse
require "Conection.php";

class User extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($username, $password, $rol, $status='activo'){
        return $this->conexion_db->query("INSERT INTO users (username, password, rol, status) VALUES ('$username', '$password', '$rol', '$status)");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM users WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    public function update($id, $username, $password, $rol, $status){
        return $this->conexion_db->query("UPDATE users SET username='$username', password='$password', rol='$rol', status='$status' WHERE id='$id'");
    }


    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM users WHERE id='$id'");
    }

}

?>
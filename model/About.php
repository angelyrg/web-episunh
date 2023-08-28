<?php

//Connect to databse
require "Conection.php";

class About extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($welcome, $mision, $vision){
        return $this->conexion_db->query("INSERT INTO about (welcome, mision, vision) VALUES ('$welcome', '$mision', '$vision')");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM about");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function get_last()
    {
        $result = $this->conexion_db->query("SELECT * FROM about ORDER BY id DESC LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM about WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    public function update($id, $welcome, $mision, $vision){
        return $this->conexion_db->query("UPDATE about SET welcome='$welcome', mision='$mision', vision='$vision' WHERE id='$id'");
    }


    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM about WHERE id='$id'");
    }

}

?>
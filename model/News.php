<?php

//Connect to databse
require "Conection.php";

class News extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // Create Read(get_all) Update Delete

    // CREATE
    public function create($name, $picture, $link){
        return $this->conexion_db->query("INSERT INTO news (name, picture, link) VALUES ('$name', '$picture', '$link' )");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM news");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM news WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }


    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM news WHERE id='$id'");
    }

}

?>
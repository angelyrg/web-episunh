<?php

//Connect to databse
require "Conection.php";

class Authority extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($name, $lastname, $degre, $position, $photo){
        return $this->conexion_db->query("INSERT INTO authority (name, lastname, degre, position, photo) VALUES ('$name', '$lastname', '$degre', '$position', '$photo' )");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM authority");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM authority WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    public function update($id, $name, $lastname, $degre, $position, $photo){
        return $this->conexion_db->query("UPDATE authority SET name='$name', lastname='$lastname', degre='$degre', position='$position', photo='$photo' WHERE id='$id'");
    }


    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM authority WHERE id='$id'");
    }

}

?>
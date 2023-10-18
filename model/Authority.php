<?php

//Connect to databse
require "Conection.php";

class Authority extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($name, $lastname, $degree, $position, $photo){
        return $this->conexion_db->query("INSERT INTO authority (name, lastname, degree, position, photo) VALUES ('$name', '$lastname', '$degree', '$position', '$photo' )");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM authority WHERE disabled=0");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM authority WHERE id='$id' LIMIT 1");
        return $result->fetch_assoc();
        
    }

    //UPDATE
    public function update($id, $name, $lastname, $degree, $position, $photo=NULL){
        $query = "UPDATE authority SET name='$name', lastname='$lastname', degree='$degree', position='$position'";

        if ($photo !== NULL){
            $query .= ", photo='$photo'";
        }
        
        $query .= " WHERE id='$id'";
        return $this->conexion_db->query($query);
    }


    // DISABLE
    public function disable($id){
        return $this->conexion_db->query("UPDATE authority SET disabled=1, disabled_at=NOW() WHERE id='$id'");
    }

    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM authority WHERE id='$id'");
    }

}

?>
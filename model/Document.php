<?php

//Connect to databse
require "Conection.php";

class Document extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // Create Read(get_all) Update Delete

    // CREATE
    public function create($name_doc, $description, $type, $date_approval, $link){
        return $this->conexion_db->query("INSERT INTO document (name_doc, description, type, date_approval, link) VALUES 
        ('$name_doc', '$description', '$type', '$date_approval', '$link')");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM document WHERE disabled=0");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM document WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    // DISABLE
    public function disable($id){
        return $this->conexion_db->query("UPDATE document SET disabled=1, disabled_at=NOW() WHERE id='$id'");
    }

    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM document WHERE id='$id'");
    }

}

?>
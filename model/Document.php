<?php

//Connect to databse
require "Conection.php";

class Document extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($name_doc, int $category_id, $description,  $file){
        return $this->conexion_db->query("INSERT INTO document (name_doc, cat_id, description, file)
                                            VALUES ('$name_doc', $category_id, '$description', '$file')");
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

    public function get_by_category($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM document WHERE cat_id='$id' AND disabled=0");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //UPDATE
    public function update($id, $name_doc, $category_id, $description,  $file=NULL){
        $query = "UPDATE document SET name_doc='$name_doc', cat_id='$category_id', description='$description'";

        if ($file !== NULL){
            $query .= ", file='$file'";
        }
        
        $query .= " WHERE id='$id'";
        return $this->conexion_db->query($query);
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
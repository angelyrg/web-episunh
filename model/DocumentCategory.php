<?php

//Connect to databse
require_once "Conection.php";

class DocumentCategory extends Conexion
{

    public function __construct(){
        parent::__construct();
    }

    // CREATE
    public function create($category_name, $cat_description){
        return $this->conexion_db->query("INSERT INTO document_categories (category_name, cat_description) VALUES ('$category_name', '$cat_description')");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM document_categories WHERE disabled=0");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM document_categories WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    // public function disable($id, $address, $phone, $email){
    //     return $this->conexion_db->query("UPDATE document_categories SET address='$address', phone='$phone', email='$email' WHERE id='$id'");
    // }
    public function disable($id){
        return $this->conexion_db->query("UPDATE document_categories SET disabled=1 WHERE id='$id'");
    }

    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM document_categories WHERE id='$id'");
    }

}

?>
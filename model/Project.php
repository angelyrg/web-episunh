<?php

//Connect to databse
require "Conection.php";

class Project extends Conexion
{

    public function __construct(){
        parent::__construct();
    }


    // CREATE
    public function create($project_name, $group_name, $resolution_file, $inform_file, $description, $cover_picture, $picture1, $picture2, $picture3, $picture4){
        return $this->conexion_db->query("INSERT INTO project (project_name, group_name, resolution_file, inform_file, description, cover_picture, picture1, picture2, picture3, picture4) 
        VALUES ('$project_name', '$group_name', '$resolution_file', '$inform_file', '$description', '$cover_picture', '$picture1', '$picture2', '$picture3', '$picture4' )");
    }

    // READ
    public function get_all()
    {
        $result = $this->conexion_db->query("SELECT * FROM project");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_by_id($id)
    {
        $result = $this->conexion_db->query("SELECT * FROM project WHERE id='$id' LIMIT 1");
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    //UPDATE
    public function update($id, $project_name, $group_name, $resolution_file, $inform_file, $description, $cover_picture, $picture1, $picture2, $picture3, $picture4){
        return $this->conexion_db->query("UPDATE project 
        SET project_name='$project_name', group_name='$group_name', resolution_file='$resolution_file', inform_file='$inform_file', description='$description', cover_picture='$cover_picture', picture1='$picture1', picture2='$picture2', picture3='$picture3', picture4='$picture4' 
        WHERE id='$id'");
    }


    // DELETE
    public function delete($id){
        return $this->conexion_db->query("DELETE FROM project WHERE id='$id'");
    }

}

?>
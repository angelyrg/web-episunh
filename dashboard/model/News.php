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
        // TODO: TERMINAR
        $result = $this->conexion_db->query("SELECT * FROM news");
        $news = $result->fetch_all(MYSQLI_ASSOC);

        return $news;
    }

    

    

}

?>
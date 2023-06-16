<?php

//Connect to databse
require "Conection.php";

class Auth extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login(string $username, string $password)
    {
        $result = $this->conexion_db->query("SELECT * FROM users WHERE username='$username'");
        $user_data = $result->fetch_all(MYSQLI_ASSOC);

        if ( (count($user_data) > 0 && password_verify($password, $user_data[0]['password'])) ){
            session_start();
            $_SESSION['login'] = $user_data[0]['id'];
            return true;
        }
        return false;
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
    }

}

?>
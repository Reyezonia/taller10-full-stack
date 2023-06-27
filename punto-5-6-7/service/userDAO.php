<?php 
    include "connection.php";

    function getAllUsers(){
        return mysqli_query(CONNECTION,"SELECT * from usuarios");
    }
    /*
    print_r($query);   
    print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
    */
    function getUserByIdNumber($idNumber){
        return mysqli_query(CONNECTION,"SELECT * FROM usuarios WHERE cedula = $idNumber");
    }

    function createUser($user){
        $query = "INSERT into usuarios(nombre, apellido, cedula) values (";
        $query .="'".$user->nombre."',";
        $query .="'".$user->apellido."',";  
        $query .="'".$user->cedula."',";
        return mysqli_query(CONNECTION, $query);
    }
?>
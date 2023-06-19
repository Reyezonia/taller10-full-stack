<?php 
 include "connection.php";
 function getAllUser(){
    return mysqli_query(CONNECTION,"SELECT * from usuarios");
 }
 /*
 print_r($query);   
 print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
*/
function getUserByIdNumber($idNumber){
    return mysqli_query(CONNECTION,"SELECT * FROM usuarios WHERE cedula = $idNumber");
}
?>
<?php
    const CONNECTION = new mysqli("localhost","root","","mi_proyecto");
    
    $query = mysqli_query(CONNECTION,"select * from usuarios;");

    print_r($query);   
    print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>
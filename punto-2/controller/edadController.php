<?php
   const MAYOR_EDAD = 18;
   $result ="";

   if(isset($_POST["person_name"]) && isset($_POST["person_age"])){
    $person_name = $_POST["person_name"];
    $person_age = intval($_POST["person_age"]);

        if ($person_age >= MAYOR_EDAD){
            $result = ($person_name .",   Eres mayor de edad");
        }else{   
            $result = ($person_name .",   No eres mayor de edad");
        }
        
}
?>
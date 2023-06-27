<?php
   const MAYOR_EDAD = 18;
   $birthDate = date("y-m-d");
   $result ="";

    if(isset($_POST["person_name"]) && isset($_POST["birth_date"])){
        $person_name = $_POST["person_name"];
        $birth_date = $_POST["birth_date"];

        $currentDate = new DateTime(date("Y-m-d"));
        $birth_date = new DateTime($birth_date);
        $age = $currentDate->diff($birth_date)->y;

            if ($age >= MAYOR_EDAD){
                $result = ($person_name .", Tienes ". $age ." años. Eres mayor de edad");
            }else{   
                $result = ($person_name .", Tienes ". $age ." años. No eres mayor de edad");
            }
    }
?>
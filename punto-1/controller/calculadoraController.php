<?php
    $result = 0;
    $message ="";

    if(isset($_POST["first_number"]) && isset($_POST["second_number"]) ){
    $first_number = intval($_POST["first_number"]);
    $second_number = intval($_POST["second_number"]);
    $operacion = $_POST["operacion"];

        switch($operacion){
            case "+":
                $result = $first_number + $second_number;
                break;
            case "-":
                $result = $first_number - $second_number;
                break;
            case "*":
                $result = $first_number * $second_number;
                break;
            case "/":
                $result = $first_number / $second_number;
                break;
            default:
                $message ="operacion no valida";
        }
    
    }
?>
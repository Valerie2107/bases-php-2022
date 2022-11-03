<?php


function calculBasicBis($num1, $num2, $op = "+"){
    if (!is_numeric($num1) || !is_numeric($num2)){
        return "attention, les 2 premiers paramètres doivent être numériques";
    }
    switch ($op){
        case "*": //multiplication
            return $num1*$num2;  //le return arrête la fonction et renvoie le résultat
            break;     // ici le break est facultatif
        case "-":
            return $num1-$num2;
            break;
        case "/": 
            return $num1/$num2;
            break;
        default: 
            return $num1+$num2;
        }
}



?>
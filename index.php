<?php

function add($nom1, $nom2){
    return $nom1 + $nom2;
}

echo add(10,13);
echo add(20,14);
echo add(30,15);

function calculator($operand, $num1, $num2){
    if($operand == "+"){
        return $num1 + $num2;
    }else if($operand == "-"){
        return $num1 - $num2;
    }else if($operand == "*"){
        return $num1 * $num2;
    }else if($operand == "/"){
        return $num1 / $num2;
    }else{
        return "operand not available!";
    }
}

echo calculator("+",10,5); 
echo "<br>";
echo calculator("-",10,5);
echo "<br>";
echo calculator("*",10,5);
echo "<br>";
echo calculator("/",10,5);
?>
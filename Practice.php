<?php
$greeting = "hello world!";
$greetingTwo = "HELLO WORLD!";
$number = 21;
$longString = "Hello world! Today is Tuesday.";
$arr = array("Hello","World!","Today","is","Beautiful");

//How to use strtoupper
echo strtoupper($greeting) ."<br>";
//How to use strtolower
echo strtolower($greetingTwo) ."<br>";
//How to use ucfirst
echo ucfirst($greeting) ."<br>";
//How to use ucwords
echo ucwords($greeting) ."<br>";
//How to use str_replace
echo str_replace("world","Isaac","hello world!") ."<br>"; 
//How to use intval
echo intval($number) ."<br>";
//How to use ceil
echo(ceil(0.85) ."<br>");
echo(ceil(0.20) ."<br>");
echo(ceil(2.3) ."<br>");
//How to use floor
echo(floor(0.85) ."<br>");
echo(floor(4.6) ."<br>");
echo(floor(2.7) ."<br>");
//How to use explode
print_r(explode(" ",$longString));
echo "<br>";
//How to use implode
echo implode(" ",$arr);
echo "<br>";
//How to use Count
echo count($arr);
echo "<br>";
//How to use Die




?>
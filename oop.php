


<?php

echo "Hello</br>";
$str= "Welcome to php";
echo "Welcome to php</br>";

echo "<h1></br>lenght of the string </h1>";
echo strlen($str);
echo"</br></br><h1>word count of the string </h1>";
echo str_word_count($str);
echo "</br></br><h1> Reverse of the string </h1>";
echo strrev($str);

echo "<hr>";
echo "</br>This will replace word :  ";
echo str_replace("php", "world",$str);

echo "</br> This will convert first character of each word in a string to uppercase : ";
echo ucwords($str);

echo "</br> This will convert string to uppercase : ";
echo strtoupper($str);

echo "</br>This will convert string to lowercase : ";
echo strtolower($str);

echo "</br>The string is reapeating for 10 times : ";
echo str_repeat($str,10);


echo "</br> This wil cut the string in parts : ";
echo substr($str,0,10);

echo "</br>Some characters are removed from the string :   ";
echo trim($str,”Wep”);




?>



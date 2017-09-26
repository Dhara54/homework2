


<?php

echo "Hello</br>";
$str= "Welcome to php";
echo "Welcome to php</br>";

echo "</br>lenght of the string is : ";
echo strlen($str);
echo"</br>word count of the string is : ";
echo str_word_count($str);
echo "</br> Reverse of the string is : ";
echo strrev($str);

echo "</br>This will replace string : ";
echo str_replace(“php”, “the programming world”, “Welcome”);


echo "</br> This will convert first character of each word in a string to uppercase : ";
echo ucwords($str);

echo "</br> This will convert string to uppercase : ";
echo strtoupper($str);


?>



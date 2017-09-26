


<?php

echo "Hello</br>";
$str= "Welcome to php";
echo "<center>Welcome to php</center></br>";

echo "<hr>";
echo "<h1></br>lenght of the string </h1>";
echo strlen($str);

echo "<hr>";
echo"</br><h1>word count of the string </h1>";
echo str_word_count($str);

echo "<hr>";
echo "</br><h1> Reverse of the string </h1>";
echo strrev($str);

echo "<hr>";
echo "</br><h1>This will replace word </h1>";
echo str_replace("php", "world",$str);

echo "<hr>";
echo "</br><h1>first character of each word in a string is in uppercase </h1>";
echo ucwords($str);

echo "<hr>";
echo "</br><h1> This will convert string to uppercase </h1>";
echo strtoupper($str);

echo "<hr>";
echo "</br><h1>This will convert string to lowercase </h1>";
echo strtolower($str);

echo "<hr>";
echo "</br><h1>The string is reapeating for 10 times </h1>";
echo str_repeat($str,10);

echo "<hr>";
echo "</br><h1> This will cut the string in parts </h1>";
echo substr($str,0,10);

echo "<hr>";
echo "</br><h1>Some characters are removed from the string </h1>";
echo trim($str,”Wep”);






echo "<hr>";
echo "<center><h1>Following are array functions</h1></center>";
echo "</br><h1>Length of an array</h1>";
$arr = array("Milk ", "tea", "coffee");
echo "The array is  ";
print_r($arr);
echo "</br>"
echo "<h1>Number of string</h1>";
echo count($arr);








?>



<?php
$obj= new main();
Class main
{
Public function_construct()
	{
		header("String Length");
		echo ‘web system development’;
		echo strlen(“web system development”);
	}
echo str_word_count(“Welcome to Cloudways”);
echo strrev(“Welcome to Cloudways”);
echo str_replace(“cloudways”, “the programming world”, “Welcome to cloudways”);
echo ucwords(“welcome to the php world”);
echo strtoupper(“welcome to cloudways”);
echo str_repeat(“=”,13);

echo strcmp(“Cloudways”,”Hosting”);
echo substr(“Welcome to Cloudways”,0,10).”<br>”;

$str = “Wordpess Hosting”;
echo $str . “<br>”;
echo trim(“$str”,”Wording”);






?>


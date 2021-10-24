<?php

$str = 01;

if($str<10){
	$str = str_pad($str,5,"0",STR_PAD_BOTH);
}
echo "\$str:$str";
echo "<br/>";
for ($i=1; $i <= 5; $i++) { 
	echo "<br/>";
echo str_repeat("*",$i);
}
$str = 'Count the number of words found in the string "Hello World!":';
echo "<br/>";
echo str_word_count($str);
echo "<br/>";
echo strcmp("ABC","AB");
echo "<br/>";
$str = "Hello <b>world!</b>";
echo "\$str:$str";
echo "<br/>";
echo strip_tags($str);

echo "<br/>";
echo strip_tags("Hello <b><i>world!</i></b>","<i>");

echo "<br/>";
echo stripcslashes("Hello \Wo \ rld!");
echo "<br/>";

$str = 'What "does" "yolo" mean?';
echo "\$str:$str";
$str = addslashes($str);
echo($str); 


echo "<br/>";
echo stristr("Hello Man ths Man!","Man",false);
echo "<br/>";

echo substr_replace("Hello world","earth",6);
echo "<br/>";
echo ucwords("man singh");

echo "<br/>";
echo ucfirst("this is testing class!");


$number = 9;
$str = "Beijing";
echo "<br/>";
vprintf("There are %u million bicycles in %s.",array($number,$str));

echo "<br/>";



$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);



echo "<br/>";
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,5,"<br>\n",true);



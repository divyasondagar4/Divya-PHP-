<?php

/*
collections of values

$nemeric=array("a","b","c");  index auto generate 0
$associatearray("raj"=>"a","2"=>"b","3"=>"c");
$multidemetional=array("a","b"=>array("p","q"),"c");
*/

$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c","d","e");
print_r($arr);

echo $arr[0]; 
echo $arr[1]; 
echo $arr[2]."<br>"; 

foreach($arr as $w)
{
	echo $w;
}


?>
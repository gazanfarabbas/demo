<?php


//$x = strlen('gazanfar abbas');
//$x = str_word_count('gazanfar abbas');
//$x = strrev('gazanfar abbas');
//$x = strpos('gazanfar abbas','abbas');
//$x = str_replace('abbas','abid','gazanfar abbas');
//$x = chunk_split("gazanfar abbas jafrabad jalalpur",4);
//$x = count_chars('abbas gazanfar');
//$x = explode(" ",'abbas gazanfar');
//echo '<pre>';print_r($x);
//$x = lcfirst(' Gazanfar Abbas');
//$x = ucfirst('gazanfar Abbas');
//$x = md5('Gazanfar Abbas');
//$x = str_repeat('Gazanfar Abbas ',2);
//$x = str_shuffle('Gazanfar Abbas');
/*$x = 1;
while($x<=10){
	echo $x.'<br />';
	$x++;
}*/
/*$x= 1;
do{
	echo $x.'<br />';
	$x++;
}while($x<=10)*/
/*for($x=1;$x<=10;$x++){
	echo $x.'<br />';	
}*/
//echo $x;
/*******Array********/
//$arry = array("gazanfar","abbas","abid","raza");
//$arry = array('a'=>"gazanfar",'b'=>"abbas",'c'=>"abid",'d'=>"raza");
//$a= array_chunk($arry,2);
//echo $arry[1];
//$a = array("gazanfar","abbas","abid");
//$b = array("abid","raza");
//$c = array_combine($a,$b);
//echo '<pre>';print_r($c);
//echo '<pre>'; print_r(array_count_values($arry));
//echo '<pre>'; print_r(array_diff($a,$b));
//echo '<pre>';print_r(array_flip($arry));
//echo '<pre>';print_r(array_intersect($a,$b));
//echo $_SERVER['PHP_SELF'].'<br />';
//echo $_SERVER['SERVER_NAME'].'<br />';
//echo $_SERVER['HTTP_HOST'].'<br />';
//echo $_SERVER['HTTP_REFERER'];
//echo $_SERVER['HTTP_USER_AGENT'].'<br />';
//echo $_SERVER['SCRIPT_NAME'];
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);


?>
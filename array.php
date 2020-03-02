<?php
//$arrayVar = array('best', 'interview', 'question', 'com');
/********get first element of array*********/
//echo $arrayVar[0];
//echo reset($arrayVar);
/*foreach($arrayVar as $val){
	echo $val;
	break;
}*/
/*****************/
/*******second last element of array**********/
/*$array = array(5,6,70,10,36,2);
echo $array[count($array) -2];*/
/******************/
/*****pop method******/
/*$a=array("blue","black","skyblue");
array_pop($a);
print_r($a);*/
/*******push******/
/*$a=array("apple","banana");
array_push($a,"mango","pineapple");
print_r($a);*/
/*******/
/******combine*****/
/*$name = array("best","interview","question");
$index = array("1","2","3");
$result = array_combine($index,$name);
echo '<pre>';print_r($result);*/
/************/
/*******sort an array in asending order*****/
 /*$array = array(1, 6, 23, 10, 3, 2, 15,7);
    $total = count($array);
    for ($i=0; $i < $total; $i++) { 
        for ($j=$i+1; $j < $total; $j++) { 
            if($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo '<pre>';
    echo "Ascending Sorted Array is: "; 
    print_r($array);*/
/*****************************/
/****sort an array in desending order*********/
/*$array = array(1, 6, 23, 10, 3, 2, 15,7);
    $total = count($array);
    for ($i=0; $i < $total; $i++) { 
        for ($j=$i+1; $j < $total; $j++) { 
            if($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo '<pre>';
    echo "Descending Sorted Array is: "; 
    print_r($array);*/
/*****************/
/********smallest number of array**********/
/*$array = array(2,7,10,25,35,65,80);
    $count = count($array);
    $min = $array[0];
    for ($i=0; $i < $count; $i++) { 
        if($array[$i] < $min)
        {
            $min = $array[$i];
        }
    }
    echo "minmum value $min";
    //output 2*/
/******************/
/********largest number of array******/
/*$array = array(2,7,10,25,35,65,80);
    $count = count($array);
    $max = $array[0];
    for ($i=0; $i < $count; $i++) { 
        if($array[$i] > $max)
        {
            $max = $array[$i];
        }
    }
    echo "maximum value $max";
    //output 80*/

/*************/
/*******Duplicate value ********/
/*$arr = array(8,9,10,3,4,8,7,9,11,3);
foreach($arr as $key => $val)
{
  unset($arr[$key]); 
  if (in_array($val,$arr))
  {
    echo $val . ",";
  }
} // ouput 8,9,3*/

/**************/
?>

<?php
function double($number){
    return $number * 2;
}
echo double(5);
echo "\n";


function sum($a,$b){
    return $a +$b;
}
echo "\n";


function kakeru($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  return $result;
}
$array = [1,3,5,7,9];
echo kakeru($array);
echo "\n";


function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;   
    }
  }
  return $max_number;
}
$arr = [3,5,7,2];
echo max_array($arr);
echo"\n";

$str = "<div><p>Hello, world!</p></div>";
echo strip_tags($str);
echo "\n";

$members=array("a","b","c");
 array_push($members,"d","e");
 print_r($members);
 echo "\n";
 
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";

 $time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
 echo "\n";

$timestamp = strtotime('2024-8-14 10:20:30');
echo date('Y年m月d日 H時i分s秒', $timestamp);

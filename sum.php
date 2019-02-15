<?php
function sum($kazu){
  $result = $kazu * 2;
  echo $result;
}
echo sum(5);
echo "\n";

function f($a, $b){
    $result = $a+$b;
    return $result;
}
$result = f(1,2);
echo $result;
echo "\n";

function kome($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
kome(array(1, 3, 5, 7, 9));
echo "\n";

function max_array($arr){
  $max_unmber = $arr[0];
  foreach($arr as $a){
echo $a;
  }
  return $max_unmber;
}
max_array(array(0,13));
echo "\n";

$str = "ひらがな"."カタカナ";
echo strip_tags($str);
echo "\n";

$mozi = array("a", "b", "c");
array_push($mozi, "d", "e");
print_r($mozi);

$abc = array("a" => "1", "b" => "02", "c" => "03");
$add_abc = array("a" => "01", "d" => "04");
$result = array_merge($abc, $add_abc);
print_r($result);

$now = time();
$timestamp =mktime(0, 0, 0, 12, 10, 2019);
print $now; + $timestamp;
echo "\n";

$taime =time() + (60 * 60 * 24)* 7;
$next_week =date('Y年m月d日H時i分s秒', $taime);
print $next_week;
 ?>

<?php

$param1=1;

function &add(&$param2){
	$param2=2;
	return $param2;
}
$param3=&add($param1);
$param4=add($param1);

$param4++;
echo '<br>$param3=='.$param3.'<br>'; //显示为$param3==2

echo '<br>$param4=='.$param4.'<br>'; //显示为$param4==2 

echo '<br>$param1=='.$param1.'<br>'; //显示为$param1==2 调用变量过程中$param2的改变

//$param3++;




?>

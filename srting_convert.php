<?php 
header("Content-Type:text/html;charset=utf-8");
function str_rev_gb($str){
	if(!is_string($str)||!mb_check_encoding($str,'UTF-8')){
		exit('不是utf8字符类型');
	}
	$array=array();
	$l=mb_strlen($str,'UTF-8');
	for ($i=0;$i<$l;$i++){
		$array[]=mb_substr($str,$i,1,'UTF-8');
	}
	var_dump($array);
	//反转反转字符串
	krsort($array);
	
	$string=implode($array);
	return $string;
}
$str3 = "Eng中国lish";
echo $str3."->".str_rev_gb($str3)."<br>";
?>
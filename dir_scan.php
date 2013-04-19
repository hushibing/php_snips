<?php
function my_scandir($dir){
	$files=array();
	if ($handle=opendir($dir)){
		while(($file=readdir($handle))!==false){
			if($file!=".."&&$file!="."){
				if(is_dir($dir."/".$file)){//判断是否是目录
				$files[$file]=scandir($dir."/".$file);
				}else{
				$files[]=$file;
				}
			}
		}
	}
	closedir($handle);
	return $files;
}

var_dump(my_scandir("E:\wamp\www\pos"));
echo '<br>';
var_dump(opendir("E:\wamp\www\pos"));

?>

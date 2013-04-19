<?php
$link=mysql_connect('localhost','root','pawd');
mysql_select_db('test',$link);
function tree($parentId){
$result=mysql_query("select * from article_calss where parentid='.$parentid.'");

while($row=mysql_fetch_array($result)){
	echo str_repeat(' ',$roe['level'].$row['pcname'].'<br>');
	tree($row['pcid']);

}
if(($parentid+0)<1){
$parentid=0;
	}
}

tree($parentid);
?>

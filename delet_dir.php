<?php
function deletedir($dir){
	if(!$handle=@opendir($dir)){
	die("没有该目录！");
	}
}
echo DIRECTORY_SEPARATOR;

echo $f=true or die('faile');
echo '<br>';

class myObject{
	public static $myStaticvar=0;
	function myMethod(){
	self::$myStaticvar+=2+1;
	echo self::$myStaticvar."instance1<br>";
	}
	static function myMethod2(){
		self::$myStaticvar+=2;
		echo self::$myStaticvar.'instance2<br>';
	}
}

class myotherobject extends myObject {
	public static $myStaticvar=0; //
	function myothermethod(){
		echo parent::$myStaticvar.'myObject<br>';
		echo self::$myStaticvar.'myotherobject<br>';
	}
}
$instance1=new myObject();
$instance1->myMethod();

echo  myObject::myMethod2();

$instance2=new myObject();
$instance2->myMethod();
$instance22=new myObject();
$instance22->myMethod();


$instance3=new myotherobject();
$instance3->myothermethod();



$foo='big';

if (!isset($foo{5})) 
{ 
	echo 'Foo is too short';
	var_dump($foo{5});
}




?>

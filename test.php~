<?php


header("Content-type:text/plain"); 
function static_function() 
{ 
static$i=0; 
if($i++<10) 
{ 
echo$i."\n"; 
//static_function(); 
} 
} 
static_function();

echo '###########<br>';
class Classmoduel {
	static $id=0;
	function classmoduel(){
	$this->id=self::$id++;
	}
}
$obj=new Classmoduel();
$obj->name='hell';
$obj->address='tel-aviv';
print $obj->id.'<br>';

$obj->name='hsell';
$obj->address='tels-aviv';
print $obj->id.'<br>';


echo 'session calss';

class session{
	public $age=20;
	public $sub=null;
	public function __clone(){
	$this->sub=clone $this->sub;//强制复制一份this->sub
	}
}

class session2{
public $value=5;
}

$s=new session();
echo '<br>class session';
print_r($s);
echo '<br/>';
$s->sub=new session2();
print_r($s);

echo 'session2222';
$s2=clone $s;
print_r($s2);

$s->sub->value=10;
echo $s2->sub->value;
echo $s->sub->value;
echo '<br>';







?>

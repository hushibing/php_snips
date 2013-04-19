<?php
header("Content-Type:text/html;charset=utf-8");
/**
* author : PHP100.com
* date :2012-9-15 经典的文件上传类 
**/
 if(!empty($_POST['sub'])){
  include("upload.class.php");
  //var_dump($_FILES['up']);
  $up = new upload($_FILES['up'],"E:/","1",'login_bg');
 
//参数，文件流必选，【指定目录，指定大小，指定文件名】可选
 }
 if (!empty($_POST['moren'])){
 	$pathname='E:/';
 	//var_dump(file_exists($pathname.'login_bg_moren.gif')) ;
 	if(file_exists($pathname.'login_bg_moren.gif')){
 	$rn1=rename($pathname.'login_bg.gif',$pathname.'login_bg_'.date('Ymd').'_'.rand(100,999).'.gif');//把目前主题的图片改名
 	$rn2=rename($pathname.'login_bg_moren.gif',$pathname.'login_bg.gif');//改回默认图片名
 	if($rn1 && $rn2){
 		echo '<script language=\'javascript\'>alert(\'默认图片恢复！\');</script>';
 	}
 	}else {
 		echo '<script language=\'javascript\'>alert(\'已经是默认图片了！\');</script>';
 	}
 }
 ?>
 <html>
 <style type="text/css">
 label {font-size:13px; padding:3px;}
 </style>
 <head><title>OA首页图片修改</title></head>
 <body>
 <div style="background:#f2f2f2; font-size:14px;padding:3px 9px;color:#666; margin-bottom:13px;">OA首页图片更改功能</div>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<label>上传图片：</label><input type="file" name="up">　
<input type="submit" name="sub" value="上传">
</form>
<form name="form2" method="post" enctype="multipart/form-data" action="">
<label></label><input name="moren" type="submit" value="恢复默认首页">
</form>
</body>
</html>
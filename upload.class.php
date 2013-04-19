<?php
/**
 * 文件上传类
 */
class upload{
	public $file_size;//文件大小
	public $file_pros;//文件流(属性)
	public $file_name;//文件名
	public $file_dir;//上传目录
 	
	function __construct($file_pros,$file_dir='',$file_size=1,$file_name=''){
		$this->file_name=$file_name;
		$this->file_pros=$file_pros;
		$this->file_size=$file_size*1000000;
		$this->file_dir=$file_dir;
		$this->file_up();
		
	}
	
	//判断文件大小
	function file_size(){
		if ($this->file_pros['size']<=$this->file_size){
			return true;
		}else{
			return false;
		}
	}
	
	//文件类型的判断
	function file_type(){
	switch ($this->file_pros['type']){
		case "image/x-png": $ok='.png';
		break;
		case "image/png": $ok=".png";
		break;
		case "application/pdf": $ok=".pdf";
		break;
		case "image/pjpeg": $ok=".jpg";
		break;
		case "image/jpeg": $ok=".jpg";
		break;
		case "image/jpg": $ok=".jpg";
		break;
		case "image/gif": $ok=".gif";
		break;
		default: $ok=false;
		break;
		}
		return $ok;
	}	
	
	// 终止函数执行
	function f_over($n) {
		echo $n;
		exit();
	}
	
	//判断文件夹是否存在，并创建
	function is_dir(){
		if($this->file_dir){
			
			if (!is_dir($this->file_dir)){
				mkdir($this->file_dir);
			}
			
			return $this->file_dir;
			
		}else{
				
			if(!is_dir(date("Ymd"))){
					mkdir(date("Ymd"));
				}
				
				return date("Ymd");
			}		
	}
	
	//处理文件名
	function is_name(){
		if($this->file_name){
			$filename=$this->file_name.$this->file_type();
		}else{
			$filename=time().rand(100,999).$this->file_type();
		}
		return $this->is_dir()."/".$filename;
		
	}
	//修改文件名
	function rename_file(){
		
		if(file_exists($this->file_dir.$this->file_name.$this->file_type())){//修改默认文件名
			rename($this->file_dir.$this->file_name.$this->file_type(),$this->file_dir.'login_bg_moren'.$this->file_type());
		}
		
	}
	
	//上传文件 
	function file_up(){
		$this->file_size()?null:$this->f_over("文件超过大小");
		$this->file_type()?null:$this->f_over("文件类型不正确");
		$this->rename_file();
		if(move_uploaded_file($this->file_pros['tmp_name'], $this->is_name()))
		{
			echo '<script language=\'javascript\'>alert(\'上传成功！\');</script>';
		}else{
			echo '<script language=\'javascript\'>alert(\'上传失败，检查文件类型、大小？\');</script>';
		}
		; 
	}
	
}
?>
function arrayToJson($array) 
{ 
     arrayForRecursive($array, 'urlencode', true); 
     $json = json_encode($array); 
     $json = urldecode($json); 
     return $json; 
} 
  
function arrayForRecursive(&$array, $function, $apply_to_keys_also=false) 
{ 
     static $recursive_counter = 0; 
     if (++$recursive_counter>1000) 
          die('数组层次太深！'); 
     foreach ($array as $key=>$value) 
     { 
          if (is_array($value)) 
               arrayForRecursive($array[$key], $function, $apply_to_keys_also); 
          else
               $array[$key] = $function(repalceSpecialSign($value)); 
          if ($apply_to_keys_also&&is_string($key)) 
          { 
               $new_key = $function($key); 
               if ($new_key!=$key) 
               { 
                    $array[$new_key] = $array[$key]; 
                    unset($array[$key]); 
               } 
          } 
     } 
     $recursive_counter--; 
} 
  
function struct2Array($item) 
{ 
     if (!is_string($item)) 
     { 
          $item = (array)$item; 
          foreach ($item as $key=>$val) 
          { 
               $item[$key]  = Struct2Array($val); 
          } 
     } 
     return $item; 
} 
  
/** 
* repalceSpecialSign,替换特殊符号. 
* @param str          string     一个字符串 
* @return str 
*/
function repalceSpecialSign($string) 
{ 
     $string = preg_replace("/\s/","",$string); 
     $string = str_replace("\\","\\\\",$string); 
     $string = str_replace("\'","\\\'",$string); 
     $string = str_replace("\"","\\\"",$string); 
     $string = str_replace(PHP_EOL,'',$string); 
     $string = str_replace("\n","",$string); 
     $string = str_replace("\r","",$string); 
     return $string; 
}

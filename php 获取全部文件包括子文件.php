<?php 
 header("content-type:text/html;charset=utf-8");

 
 //echo getcwd() . "<br/>"; 
  
// echo dirname(__FILE__).'<br />'; //当前文件

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名） 
 $dir=getcwd();
 echo $dir."<br /><br />";
  
 
 
	 
 function show_dir($dir)
 {
 	 
	 if(is_dir($dir))
   	{
     	if ($dh = opendir($dir)) 
		{
        	while (($file = readdir($dh)) !== false)
			{
     			if((is_dir($dir."/".$file)) )//文件夹
				{
     				if( $file!="." && $file!="..") 
					{
						
 					   
 						$file_arr .= show_dir( $dir."/".$file );
					
						//echo  '<tr><td>['.$file,"]</td><tr> ";
					}
      			}
				else // 是文件
				{
				   $file_arr .= $dir."/".$file ."," ;
				   
					   //echo     $dir."/".$file  ."<br />";
                     //	echo    '<tr><td>'. $dir."/".$file  . "</td></tr>";
					 //echo    "<td>大小  ". filesize($file )  .   ' bytes</td>';			
					 //echo    "<td>创建日期  ".  date("H:i:s d-m-Y  ",filectime($file )) .   '  </td><tr>';			
					 
     			}
        	}
        	closedir($dh);
     	}
   	}else return false;
	
	 return $file_arr ;
	
 }
 
 $file_arr = show_dir($dir,$file_arr);
 $file_arr = explode(",",$file_arr); 
 sort($file_arr );
  foreach($file_arr as $v)echo $v.' <br />';
 
 
 
 
    ?> 
	
	<br />
<br />
<br />
 
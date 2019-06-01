<?php 
  //全局数组$_FILES
  //$_FILES['userfile']['tmp_name']文件在web服务器中临时存储的位置
  //$_FILES['userfile']['name']用户系统中的文件名称
  //$_FILES['userfile']['size']文件的字节大小
  //$_FILES['userfile']['type']文件的MIME类型，text/plain,image/gif
  //$_FILES['userfile']['error']与文件上载相关的错误代码
?>
<?php
  for ($i=0;$i<count($_FILES['userfile']['tmp_name']);$i++)
  {
   $upfile=$new_folder."/".$_FILES['userfile']['name'][$i];//此处路径换成你的
  if(move_uploaded_file($_FILES['userfile']['tmp_name'][$i],$upfile)){
    echo "第".($i+1)."张图片上传成功<br>";    
  }
    else{
     echo "第".($i+1)."张图片上传不了<br>";     
    }
  }
?>

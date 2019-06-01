<?php 
  //ȫ$_FILES
  //$_FILES['userfile']['tmp_name']ļwebʱ洢λ
  //$_FILES['userfile']['name']ûϵͳеļ
  //$_FILES['userfile']['size']ļֽڴС
  //$_FILES['userfile']['type']ļMIMEͣtext/plain,image/gif
  //$_FILES['userfile']['error']ļصĴ
?>
<?php

  for ($i=0;$i<count($_FILES['userfile']['tmp_name']);$i++)
  {
   $upfile="test/".$_FILES['userfile']['name'][$i];//˴·
  if(move_uploaded_file($_FILES['userfile']['tmp_name'][$i],$upfile)){
    echo "".($i+1)."个成功<br>";    
  }
    else{
     echo "".($i+1)."个失败<br>";     
    }
  }
?>

<html>
<head>
<title></title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="POST">
<fieldset>
<legend >上传</legend>
<input name="userfile[]" type="file"><br>
<input name="userfile[]" type="file"><br>
<input name="userfile[]" type="file"><br>
<input name="userfile[]" type="file"><br>
<input name="userfile[]" type="file"><br>
<input type="submit" value="Send File">
</fieldset>
</form>
</body>
</html>
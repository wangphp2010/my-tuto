<?php
$t=time();
$s=$_FILES['getup'];
$pinfo=pathinfo($s['name']);//name值得是本地文件
$ftype=$pinfo["extension"];
$dizhi="shiyan/".$t.$ftype;//上传后文件地址
$f=$s['tmp_name'];//上传后的文件
if(move_uploaded_file($f,$dizhi)){
echo "<div align=center>成功</div>";
echo '<div align=center><a href='.$dizhi.'>'.$dizhi.'</a></div>';
}//move_uploaded_file(file,newloc):file必需。规定要移动的文件。newloc必需。规定文件的新位置。
 else
 
 {echo "<div align=center>请上传文件</div>";}
?>

<html>
<head>
<title></title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="POST">
<fieldset>
<legend>上传</legend>
<input name="getup" type="file"><br>

<input type="submit" value="上传">
</fieldset>
</form>
</body>
</html>

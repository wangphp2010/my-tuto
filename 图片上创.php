<?php
$uptypes=array('image/jpg',  //上传文件类型列表
'image/jpeg',
'image/png',
'image/pjpeg',
'image/gif',
'image/bmp',
'application/x-shockwave-flash',
'image/x-png');
$max_file_size=5000000;   //上传文件大小限制, 单位BYTE
$destination_folder="upload/"; //上传文件路径
$watermark=1;   //是否附加水印(1为加水印,其他为不加水印);
$watertype=1;   //水印类型(1为文字,2为图片)
$waterposition=1;   //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
$waterstring="monpub.com"; //水印字符串
$waterimg="xplore.gif";  //水印图片
$imgpreview=1;   //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/4;  //缩略图比例
?>
<html>
<head>
<title>图片上传</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
body,td{font-family:tahoma,verdana,arial;font-size:11px;line-height:15px;background-color:white;color:#666666;margin-left:20px;}
strong{font-size:12px;}
a:link{color:#0066CC;}
a:hover{color:#FF6600;}
a:visited{color:#003366;}
a:active{color:#9DCC00;}
table.itable{}
td.irows{height:20px;background:url("index.php?i=dots") repeat-x bottom}</style>
</head>
<body>
<center><form enctype="multipart/form-data" method="post" name="upform">
上传文件: <br><br><br>
<input name="upfile" type="file"  style="width:200;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff" size="17">
<input type="submit" value="上传" style="width:30;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff" size="17"><br><br><br>
允许上传的文件类型为:jpg|jpeg|png|pjpeg|gif|bmp|x-png|swf <br><br>
<a href="index.php">返回</a>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
if (!is_uploaded_file($_FILES["upfile"]['tmp_name']))
//是否存在文件
{
echo "<font color='red'>文件不存在！</font>";
exit;
}

$file = $_FILES["upfile"];
if($max_file_size < $file["size"])
//检查文件大小
{
echo "<font color='red'>文件太大！</font>";
exit;
  }

if(!in_array($file["type"], $uptypes))
//检查文件类型
{
echo "<font color='red'>只能上传图像文件或Flash！</font>";
exit;
}

if(!file_exists($destination_folder))//
mkdir($destination_folder);//检查文件夹是否存在,不存在就创建这个文件夹

$filename=$file["tmp_name"];//["tmp_name"]保存的是文件上传到服务器临时文件夹之后的文件名
$image_size = getimagesize($filename);
$pinfo=pathinfo($file["name"]);//["name"]文件在上传者机器上的文件名
$ftype=$pinfo["extension"];
$destination = $destination_folder."tu".time().".".$ftype;
if (file_exists($destination) && $overwrite != true)
{
     echo "<font color='red'>同名文件已经存在了！</a>";
     exit;
  }

if(!move_uploaded_file ($filename, $destination))
{
   echo "<font color='red'>移动文件出错！</a>";
     exit;
  }

$pinfo=pathinfo($destination);
$fname=$pinfo["basename"];

echo " <font color=red>已经成功上传</font><br>文件名: <font color=blue>".$destination_folder.$fname."</font><br>";
echo " 宽度:".$image_size[0];
echo " 长度:".$image_size[1];
if($watermark==1)
{
$iinfo=getimagesize($destination,$iinfo);
$nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
$white=imagecolorallocate($nimage,255,255,255);
$black=imagecolorallocate($nimage,0,0,0);
$red=imagecolorallocate($nimage,255,0,0);
imagefill($nimage,0,0,$white);
switch ($iinfo[2])
{
case 1:
$simage =imagecreatefromgif($destination);
break;
case 2:
$simage =imagecreatefromjpeg($destination);
break;
case 3:
$simage =imagecreatefrompng($destination);
break;
case 6:
$simage =imagecreatefromwbmp($destination);
break;
default:
die("<font color='red'>不能上传此类型文件！</a>");
exit;
}

imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

switch($watertype)
{
case 1:  //加水印字符串
imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
break;
case 2:  //加水印图片
$simage1 =imagecreatefromgif("xplore.gif");
imagecopy($nimage,$simage1,0,0,0,0,85,15);
imagedestroy("$simage1");
break;
}

switch ($iinfo[2])
{
case 1:
//imagegif($nimage, $destination);
imagejpeg($nimage, $destination);
break;
case 2:
imagejpeg($nimage, $destination);
break;
case 3:
imagepng($nimage, $destination);
break;
case 6:
imagewbmp($nimage, $destination);
//imagejpeg($nimage, $destination);
break;
}

//覆盖原上传文件
imagedestroy($nimage);
imagedestroy($simage);
}

if($imgpreview==1)
{
echo "<br>图片预览:<br>";
echo "<a href=\"".$destination."\" target='_blank'><img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\" border='0'></a>";
}
}
?>
</center>
</body>
</html>
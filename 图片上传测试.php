    <?php
        

//图片上传开始
$uptypes=array('image/jpg',  //上传文件类型列表
'image/jpeg',
'image/png',
'image/pjpeg',
'image/gif',
'image/bmp',
'application/x-shockwave-flash',
'',
'image/x-png');
 $destination_folder="test/"; //上传文件路径
$logo="tu/waterlogo.png";//水印ｌｏｇｏ地址

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

if(count($_FILES['upfile']['tmp_name']<4)){

for ($i=0;$i < count($_FILES['upfile']['tmp_name']);$i++){
	
//防止恶意上传	
if (!is_uploaded_file($_FILES["upfile"]['tmp_name']))exit("Possible file upload attack");
 
 
$file = $_FILES["upfile"];

 
 

if(!in_array($file["type"], $uptypes))
//检查文件类型
{
exit( '	<head><style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>uniquement le photo est autorise...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>');

}




}
}else{exit('a bon plus 3 photos,genial!!');}


}//图片上传结束束





//加水印上传****************************************
    

if(!file_exists($destination_folder))//
mkdir($destination_folder);//检查文件夹是否存在,不存在就创建这个文件夹

//["tmp_name"]保存的是文件上传到服务器临时文件夹之后的文件名
$pinfo=pathinfo($file["name"]);//$file["name"]:文件在上传者机器上的文件名 
$ftype=$pinfo["extension"];/*$pinfo=pathinfo($file["name"]);$ftype=$pinfo["extension"];这两步是为了获取上传文件的文件格式*/


 if ($file["size"] > 0){

$destination_santype=$destination_folder."/".time();
$destination = $destination_santype.".".$ftype;
if(move_uploaded_file ($_FILES["upfile"]['tmp_name'], $destination)){
 

//bmp转化为jpg*********************************************************************

$iinfo=getimagesize($destination);
if($iinfo[2]==6)
{
require('bmp/bmp-jpg.php');
$img_bmp = ImageCreateFromBmp($destination);
imagejpeg($img_bmp, $destination_santype.".jpg");
unlink($destination);
$destination=$destination_santype.".jpg";
$iinfo=getimagesize($destination);
}





//缩小图片开始*************************************************************************************************************************************************************************************


//原图文件
$file_petit = $destination;
$iinfo=getimagesize($destination);
 
$size_change=409600;
list($width, $height) = getimagesize($file_petit);

if(ceil(filesize($file_petit)/1000)>$size_change||$width<160||$height<80)
{
 


// 缩略图比例
$percent = $size_change/2/$file["size"];
if($width<160||$height<80){
if($width/160<$height/80)$percent=320/$width; else $percent=160/$height;
}

// 缩略图尺寸
$newwidth = $width * $percent;
$newheight = $height * $percent;

// 加载图像
 switch ($iinfo[2])
        {
            case 1:
             $src_im = @imagecreatefromgif($destination);
            break;
 
            case 2:
             $src_im = @imagecreatefromjpeg($destination);
            break;
 
            case 3:
            $src_im = @imagecreatefrompng($destination);
            break;
 
           case 6:
           $photoimage =imagecreatefromwbmp($destination);

            break;
 
            default:
            die("ce type n'est pas autorisé!");
            exit("ce type n'est pas autorisé!");
         }
		 
$dst_im = imagecreatetruecolor($newwidth, $newheight);

// 调整大小
imagecopyresized($dst_im, $src_im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

//输出缩小后的图像
  switch ($iinfo[2])
        {
            case 1:
            imagegif($dst_im,$destination);
            break;
 
            case 2:
            imagejpeg($dst_im,$destination);
            break;
 
            case 3:
           imagepng($dst_im,$destination);
            break;
 
            case 6:
            imagewbmp($dst_im,$destination);

            break;
 
            default:
            die("ce type n'est pas autorisé!");
            exit("ce type n'est pas autorisé!");
         }



imagedestroy($dst_im);
imagedestroy($stc_im);

 }
//缩小图片结束*******************************************************************************************************************************************************************************


if($categorie!=14){

//加水印开始

 
$logoimage = imagecreatefrompng($logo);
$iinfo=getimagesize($destination);
switch ($iinfo[2])
        {
            case 1:
            $photoimage =imagecreatefromgif($destination);
            break;
 
            case 2:
            $photoimage =imagecreatefromjpeg($destination);
            break;
 
            case 3:
            $photoimage =imagecreatefrompng($destination);
            break;
 
            case 6:
           $photoimage =imagecreatefromwbmp($destination);

            break;
 
            default:
            die("ce type n'est pas autorisé!");
            exit("ce type n'est pas autorisé!");
         }

imagealphablending($photoimage, true);
$logoW = imagesx($logoimage);
$logoH = imagesy($logoimage);
$photoW=imagesx($photoimage);
$photoH=imagesy($photoimage);


$charW = array($photoW-$logoW,"0");
$charH = array($photoH-$logoH,"0");
$syW=$charW[mt_rand(0, 1)];
$syH=$charH[mt_rand(0, 1)];




imagecopy($photoimage, $logoimage, $syW,$syH, 0, 0, $logoW, $logoH);
 switch ($iinfo[2])
        {
            case 1:
            imagegif($photoimage,$destination);
            break;
 
            case 2:
            imagejpeg($photoimage,$destination);
            break;
 
            case 3:
           imagepng($photoimage,$destination);
            break;
 
            case 6:
           imagewbmp($photoimage,$destination);

            break;
 
            default:
            die("ce type n'est pas autorisé!");
            exit("ce type n'est pas autorisé!");
         }


imagedestroy($photoimage);
imagedestroy($logoimage);
//加水印结束 



}
  

}
}
 
////加水印上传结束****************************************
  echo '<img name="" src="'.$destination.'" width="600" height="600" alt="" style="border:#000 2px  solid" />';
 
     
     ?>
	 
<form   enctype="multipart/form-data" method="post"  action="">    
<input name="upfile" id="upfile" type="file"   />
<input  id="submit" name="submit"  class="tijiaoanniuziti" value="Publier cette annonce" type="submit"  />
</form>


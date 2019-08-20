<?php

 header('content-type:text/html;charset=utf8');

 
function GrabImage($url,$filename="") { //获取网络上的图片
  if($url==""):return false;endif; 

  if($filename=="") { 
    $ext=strrchr($url,"."); 
    if($ext!=".gif" && $ext!=".jpg"):return false;endif; 
    $filename=date("dMYHis").$ext; 
  } 

  ob_start(); 
  readfile($url); 
  $img = ob_get_contents(); 
  ob_end_clean(); 
  $size = strlen($img); 

  $fp2=@fopen($filename, "a"); 
  fwrite($fp2,$img); 
  fclose($fp2); 

  return $filename; 
} 

$url="http://img3.leboncoin.fr/xxl/0e1/0e1673006a03977bb49bae38a96f7914af0beb4d.jpg";
$filename="im/1.jpg";

GrabImage($url,$filename);
 



$destination=$filename;

$iinfo=getimagesize($url);
list($width, $height) = getimagesize($url);//获取图片宽度高度
$wj=58;
$hj=58;

//截取图片开始
$iinfo=getimagesize($url);
switch ($iinfo[2])
        {
            case 1:
 $im = imagecreatefromgif($url); 
            break;
 
            case 2:
 $im = imagecreatefromjpeg($url); 
            break;
 
            case 3:
 $im = imagecreatefrompng($url); 
            break;
 
            case 6:
  $im = imagecreatefromwbmp($url); 

            break;
 
            default:
             exit("ce type n'est pas autorisé!");
         }
		 
		 
		 
          
/* 图片要截多少, 长/宽 */
$new_img_width = $width-$wj*2;
$new_img_height = $height-$hj*2; 

 


 /* 先建立一个 新的空白图档 */
$dst_im = imagecreate($new_img_width, $new_img_height); 
//                   输出图要从哪边开始 x, y ，原始图要从哪边开始 x, y ，要画多大 x, y(resize) , 要抓多大 x, y
 imagecopyresampled($dst_im, $im,0,0, $wj, $hj,$new_img_width, $new_img_height, $new_img_width, $new_img_height); 

/* 放大成 500 x 500 的图 */
//  imagecopyresampled($dst_im, $im, 0, 0, $wj, $hj, 500, 500, $new_img_width, $new_img_height); 



 
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
		 
          
 
   imagejpeg($dst_im,$destination);

 imagedestroy( $im);
imagedestroy($dst_im);

//截取图片结束

 
 
 
 
 /*
 
//缩小图片开始*************************************************************************************************************************************************************************************


//原图文件
$file_petit = $destination;
$iinfo=getimagesize($file_petit);
 
list($width, $height) = getimagesize($file_petit);
$file_petit_size=round(filesize($file_petit));//这样写单位是byt 换成k要除以1024

$size_change=409600;

//if($file_petit_size>$size_change||$width<320||$height<160){

 
 


// 缩略图比例
$percent = $size_change/$file_petit_size;
if($width<320||$height<160){
     if($width/160<$height/80)$percent=640/$width; else $percent=320/$height;
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
	
	
$newwidth = 200 ;
$newheight = 100 ;	
 
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
imagedestroy($src_im);

// }
//缩小图片结束*******************************************************************************************************************************************************************************


*/



 
 
 
 
 
 /*


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



 */

  
  
  



 
?>

 
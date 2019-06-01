<?
header("Content-type: image/jpeg");

//原始图像
$dst = "sy/liu.jpg";

//得到原始图片信息
$dst_im = imagecreatefromjpeg($dst);
$dst_info = getimagesize($dst);

//水印图像
$src = "sy/mm.png";
$src_im = imagecreatefrompng($src);
$src_info = getimagesize($src);	

//水印不透明度
$alpha = 30;

//合并水印图片
imagecopymerge($dst_im,$src_im,$dst_info[0]-$src_info[0],$dst_info[1]-$src_info[1],0,0,$src_info[0],
$src_info[1],$alpha);

//输出合并后水印图片
imagejpeg($dst_im);
imagedestroy($dst_im);
imagedestroy($src_im);
?>
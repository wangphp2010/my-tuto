
<?php
//调整图片大小
/**
 *图片按比例调整大小的原理：
 *1、比较原图大小是否小于等于目标大小，如果是则直接采用原图宽高
 *2、如果原图大小超过目标大小，则对比原图宽高大小
 *3、如：宽>高，则宽=目标宽, 高=目标宽的比例 * 原高
 *4、如：高>宽，则高=目标高，宽=目标高的比例 * 原宽    
 **/

$image = $_REQUEST['image'];
//$image = 'C:/Documents and Settings/TCM/My Documents/Water lilies.jpg';

$max_width = $_REQUEST['max_width'];
//$max_width = 200;
$max_height = $_REQUEST['max_height'];
//$max_height = 200;

if (!$max_width) 
{
    $max_width = 80;
}

if (!$max_height) 
{
    $max_height = 60;
}

$size = getimagesize($image);   //得到图像的大小
$width = $size[0];              
$height = $size[1];

$x_ratio = $max_width / $width;
$y_ratio = $max_height / $height;

if (($width <= $max_width) && ($height <= $max_height))
{
    $tn_width = $width;
    $tn_height = $height;
}
elseif (($x_ratio * $height) < $max_height)
{
    $tn_height = ceil($x_ratio * $height);
    $tn_width = $max_width;
}
else 
{
    $tn_width = ceil($y_ratio * $width);
    $tn_height = $max_height;
}

$src = imagecreatefromjpeg($image);
$dst = imagecreatetruecolor($tn_width, $tn_height); //新建一个真彩色图像
imagecopyresampled($dst, $src, 0, 0, 0, 0,
    $tn_width, $tn_height, $width, $height);        //重采样拷贝部分图像并调整大小
header('Content-Type: image/jpeg');
imagejpeg($dst,null,100);
imagedestroy($src);
imagedestroy($dst);
?>





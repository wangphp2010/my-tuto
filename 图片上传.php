<?php
 
//上传文件类型列表
 
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);
 
$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
$destination_folder=""; //上传文件路径
$watermark=1;      //是否附加水印(1为加水印,其他为不加水印);
$watertype=1;      //水印类型(1为文字,2为图片)
$waterstring="fzzl@cnblogs.com";  //水印字符串
$waterstringfont = "arial.ttf";  //水印字符字体
$alpha = 80;  //图片水印透明度，越大越不透明
$waterimg="watermark.gif";  //水印图片，如果格式不是gif需要改下代码
$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/2;    //缩略图比例
$overwrite = true;
?>

<html>
<head>
<title>Add watermark to an image</title>

</head>
<body>
<form enctype="multipart/form-data" method="post" name="upform">
  Upload file:
  <input name="upfile" type="file">
  <input type="submit" value="upload"><br>
  Available formats:<?php echo implode(', ',$uptypes) ?>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!is_uploaded_file($_FILES["upfile"]["tmp_name"]))
    //是否存在文件
    {
         echo "Image does not exist!";
         exit;
    }

    $file = $_FILES["upfile"];
    //print_r($file);
 
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "File is too large!";
        exit;
    }
 
    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "Unsupported format !".$file["type"];
        exit;
    }
 
    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }
 
    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    //$destination = $destination_folder.time().".".$ftype;
    $destination = $destination_folder.".".$ftype;
    //echo $destination;
 
    if (file_exists($destination) && $overwrite != true)
    {
        echo "There has been a file with the same name!";
        exit;
    }
 
    if(!move_uploaded_file ($filename, $destination))
    {
        echo "Fail to move the file!<br>";
        echo "filename: $filename ; destination: $destination";
        exit;
    }
 
    $pinfo=pathinfo($destination);
    //print_r($pinfo);
    $fname=$pinfo['basename'];
 

    echo " <font color=red>Success to upload</font><br>File name:  <font color=blue>".$destination_folder.$fname."</font><br>";
    echo "Width:".$image_size[0]."<br> ";
    echo "Lenght:".$image_size[1]."<br> ";
    echo "Size:".$file["size"]." bytes <br> ";
 
    if($watermark==1)
    {
        $iinfo=getimagesize($destination,$iinfo);
        /*getimagesize() 函数用于获取图像大小及相关信息。
        索引1给出的是图像高度的像素值;
        索引2给出的是图像的类型，返回的是数字，其中            1=GIF，2=JPG，3=PNG，4=SWF，5=PSD，6=BMP，7=TIFF(intelbyteorder)，8=TIFF(motorolabyteorder)，9=JPC，10=JP2，11=JPX，12=JB2，13=SWC，14=IFF，15=WBMP，16=XBM;
        索引3给出的是一个宽度和高度的字符串，可以直接用于HTML的<image>标签;
        索引bits给出的是图像的每种颜色的位数，二进制格式;
        索引channels给出的是图像的通道值，RGB图像默认是3;
        索引mime给出的是图像的MIME信息，此信息可以用来在HTTPContent-type头信息中发送正确的信息，如：;;header("Content-type:image/jpeg");
        */
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        //resource imagecreatetruecolor ( int $x_size , int $y_size )
        //返回一个图像标识符，代表了一幅大小为 x_size 和 y_size 的黑色图像。
        $white=imagecolorallocate($nimage,255,255,255);
        //int imagecolorallocate(int im, int red, int green, int blue)。本函数用来匹配图形的颜色，供其它绘图函数使用。
        //参数 im 表示图形的 handle。参数 red、green、blue 是色彩三原色，其值从 0 至 255。
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
            die("不支持的文件类型");
            exit;
         }
 
        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        //imagecopy() 函数用于拷贝图像或图像的一部分
        //bool imagecopy( resource dst_im, resource src_im, int dst_x, int dst_y, int src_x, int src_y, int src_w, int src_h )
        //imagefilledrectangle($nimage,1,$image_size[1]-30,80,$image_size[1],$white);
        //imagefilledrectangle() 函数画一矩形并填充。
        //bool imagefilledrectangle( resource image, int x1, int y1, int x2, int y2, int color )

 
        switch($watertype)
        {
            case 1:   //加水印字符串
            //imagestring($nimage,5,3,$image_size[1]-15,$waterstring,$black);
            //本函数在图片上绘出水平的横式字符串。int imagestring(int im, int font, int x, int y, string s, int col);
            //参数 font 为字形，设为 1 到 5 表示使用默认字形。参数 x、y 为字符串起点坐标。字符串的内容放在参数 s 上。参数 col 表示字符串的颜色。
            
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 0, 500, $black, $waterstringfont, $waterstring);
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 300, 500, $black, $waterstringfont, $waterstring);
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 600, 500, $black, $waterstringfont, $waterstring);
            /*
            array ImageTTFText(int im, int size, int angle, int x, int y, int col, string fontfile, string text);
            本函数将 TTF (TrueType Fonts) 字型文字写入图片。
            参数 size 为字形的尺寸；
            angle 为字型的角度，顺时针计算，0 度为水平，也就是三点钟的方向 (由左到右)，90 度则为由下到上的文字；
            x,y 二参数为文字的坐标值 (原点为左上角)；
            参数 col 为字的颜色；
            fontfile 为字型文件名称，亦可是远端的文件；
            text 当然就是字符串内容了。
            返回值为数组，包括了八个元素，头二个分别为左下的 x、y 坐标，第三、四个为右下角的 x、y 坐标，第五、六及七、八二组分别为右上及左上的 x、y 坐标。
            注意的是欲使用本函数，系统要装妥 GD 及 Freetype 二个函数库。
            */
            break;
 
            case 2:   //加水印图片
            $simage1 = imagecreatefromgif($waterimg);
            $simage1_size = getimagesize($waterimg);
            //$simage1 =imagecreatefrompng($waterimg);
            //imagecopy($nimage,$simage1,$image_size[0] - $simage1_size[0],$image_size[1] - $simage1_size[1],0,0,$simage1_size[0],$simage1_size[1]);

            /*
            bool imagecopy(resource dst_im, resource src_im, int dst_x, int dst_y, int src_x, int src_y,int src_w, int src_h )
            imagecopy() 函数用于拷贝图像或图像的一部分。参数含义如下：
                dst_im：目标图像
                src_im：被拷贝的源图像
                dst_x：目标图像开始 x 坐标
                dst_y：目标图像开始 y 坐标，x,y同为 0 则从左上角开始
                src_x：拷贝图像开始 x 坐标
                src_y：拷贝图像开始 y 坐标，x,y同为 0 则从左上角开始拷贝
                src_w：（从 src_x 开始）拷贝的宽度
                src_h：（从 src_y 开始）拷贝的高度
            */
            
            imagecopymerge($nimage,$simage1,$image_size[0] - $simage1_size[0],$image_size[1] - $simage1_size[1],0,0,$simage1_size[0],$simage1_size[1],$alpha);
            imagedestroy($simage1);
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
        echo "<br>Image Preview:<br>";
        echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
        echo " alt=\"Image Preview:\rFile Name:".$destination."\rUpload time:\">";
    }
 
}
 
?>
</body>
</html>
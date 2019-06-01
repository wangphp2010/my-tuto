<?php
 
//�ϴ��ļ������б�
 
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);
 
$max_file_size=2000000;     //�ϴ��ļ���С����, ��λBYTE
$destination_folder=""; //�ϴ��ļ�·��
$watermark=1;      //�Ƿ񸽼�ˮӡ(1Ϊ��ˮӡ,����Ϊ����ˮӡ);
$watertype=1;      //ˮӡ����(1Ϊ����,2ΪͼƬ)
$waterstring="fzzl@cnblogs.com";  //ˮӡ�ַ���
$waterstringfont = "arial.ttf";  //ˮӡ�ַ�����
$alpha = 80;  //ͼƬˮӡ͸���ȣ�Խ��Խ��͸��
$waterimg="watermark.gif";  //ˮӡͼƬ�������ʽ����gif��Ҫ���´���
$imgpreview=1;      //�Ƿ�����Ԥ��ͼ(1Ϊ����,����Ϊ������);
$imgpreviewsize=1/2;    //����ͼ����
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
    //�Ƿ�����ļ�
    {
         echo "Image does not exist!";
         exit;
    }

    $file = $_FILES["upfile"];
    //print_r($file);
 
    if($max_file_size < $file["size"])
    //����ļ���С
    {
        echo "File is too large!";
        exit;
    }
 
    if(!in_array($file["type"], $uptypes))
    //����ļ�����
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
        /*getimagesize() �������ڻ�ȡͼ���С�������Ϣ��
        ����1��������ͼ��߶ȵ�����ֵ;
        ����2��������ͼ������ͣ����ص������֣�����            1=GIF��2=JPG��3=PNG��4=SWF��5=PSD��6=BMP��7=TIFF(intelbyteorder)��8=TIFF(motorolabyteorder)��9=JPC��10=JP2��11=JPX��12=JB2��13=SWC��14=IFF��15=WBMP��16=XBM;
        ����3��������һ����Ⱥ͸߶ȵ��ַ���������ֱ������HTML��<image>��ǩ;
        ����bits��������ͼ���ÿ����ɫ��λ���������Ƹ�ʽ;
        ����channels��������ͼ���ͨ��ֵ��RGBͼ��Ĭ����3;
        ����mime��������ͼ���MIME��Ϣ������Ϣ����������HTTPContent-typeͷ��Ϣ�з�����ȷ����Ϣ���磺;;header("Content-type:image/jpeg");
        */
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        //resource imagecreatetruecolor ( int $x_size , int $y_size )
        //����һ��ͼ���ʶ����������һ����СΪ x_size �� y_size �ĺ�ɫͼ��
        $white=imagecolorallocate($nimage,255,255,255);
        //int imagecolorallocate(int im, int red, int green, int blue)������������ƥ��ͼ�ε���ɫ����������ͼ����ʹ�á�
        //���� im ��ʾͼ�ε� handle������ red��green��blue ��ɫ����ԭɫ����ֵ�� 0 �� 255��
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
            die("��֧�ֵ��ļ�����");
            exit;
         }
 
        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        //imagecopy() �������ڿ���ͼ���ͼ���һ����
        //bool imagecopy( resource dst_im, resource src_im, int dst_x, int dst_y, int src_x, int src_y, int src_w, int src_h )
        //imagefilledrectangle($nimage,1,$image_size[1]-30,80,$image_size[1],$white);
        //imagefilledrectangle() ������һ���β���䡣
        //bool imagefilledrectangle( resource image, int x1, int y1, int x2, int y2, int color )

 
        switch($watertype)
        {
            case 1:   //��ˮӡ�ַ���
            //imagestring($nimage,5,3,$image_size[1]-15,$waterstring,$black);
            //��������ͼƬ�ϻ��ˮƽ�ĺ�ʽ�ַ�����int imagestring(int im, int font, int x, int y, string s, int col);
            //���� font Ϊ���Σ���Ϊ 1 �� 5 ��ʾʹ��Ĭ�����Ρ����� x��y Ϊ�ַ���������ꡣ�ַ��������ݷ��ڲ��� s �ϡ����� col ��ʾ�ַ�������ɫ��
            
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 0, 500, $black, $waterstringfont, $waterstring);
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 300, 500, $black, $waterstringfont, $waterstring);
            $imgtxtinfo = ImageTTFText($nimage, 50, 30, 600, 500, $black, $waterstringfont, $waterstring);
            /*
            array ImageTTFText(int im, int size, int angle, int x, int y, int col, string fontfile, string text);
            �������� TTF (TrueType Fonts) ��������д��ͼƬ��
            ���� size Ϊ���εĳߴ磻
            angle Ϊ���͵ĽǶȣ�˳ʱ����㣬0 ��Ϊˮƽ��Ҳ���������ӵķ��� (������)��90 ����Ϊ���µ��ϵ����֣�
            x,y ������Ϊ���ֵ�����ֵ (ԭ��Ϊ���Ͻ�)��
            ���� col Ϊ�ֵ���ɫ��
            fontfile Ϊ�����ļ����ƣ������Զ�˵��ļ���
            text ��Ȼ�����ַ��������ˡ�
            ����ֵΪ���飬�����˰˸�Ԫ�أ�ͷ�����ֱ�Ϊ���µ� x��y ���꣬�������ĸ�Ϊ���½ǵ� x��y ���꣬���塢�����ߡ��˶���ֱ�Ϊ���ϼ����ϵ� x��y ���ꡣ
            ע�������ʹ�ñ�������ϵͳҪװ�� GD �� Freetype ���������⡣
            */
            break;
 
            case 2:   //��ˮӡͼƬ
            $simage1 = imagecreatefromgif($waterimg);
            $simage1_size = getimagesize($waterimg);
            //$simage1 =imagecreatefrompng($waterimg);
            //imagecopy($nimage,$simage1,$image_size[0] - $simage1_size[0],$image_size[1] - $simage1_size[1],0,0,$simage1_size[0],$simage1_size[1]);

            /*
            bool imagecopy(resource dst_im, resource src_im, int dst_x, int dst_y, int src_x, int src_y,int src_w, int src_h )
            imagecopy() �������ڿ���ͼ���ͼ���һ���֡������������£�
                dst_im��Ŀ��ͼ��
                src_im����������Դͼ��
                dst_x��Ŀ��ͼ��ʼ x ����
                dst_y��Ŀ��ͼ��ʼ y ���꣬x,yͬΪ 0 ������Ͻǿ�ʼ
                src_x������ͼ��ʼ x ����
                src_y������ͼ��ʼ y ���꣬x,yͬΪ 0 ������Ͻǿ�ʼ����
                src_w������ src_x ��ʼ�������Ŀ��
                src_h������ src_y ��ʼ�������ĸ߶�
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
 
        //����ԭ�ϴ��ļ�
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
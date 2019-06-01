<?php 


if(!isset($_POST['submit'])){
    exit('
	<head><style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
	<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">

  
  <tr>
    <td width="190" height="90" ><a href="http://www.monpub.com/"><img src="tu/monpub.jpg" width="190" height="90" border="0" /></a></td>
    <td width="788"></td>
  </tr>
</table>
<div  align="center">
<p class="STYLE1"><a href="http://www.monpub.com/">fail</a></p>

</div>');
}


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
$max_file_size=300000;   //上传文件大小限制, 单位BYTE
$destination_folder="tupian/"; //上传文件路径
$watermark=0;   //是否附加水印(1为加水印,其他为不加水印);
$watertype=1;   //水印类型(1为文字,2为图片)
$waterposition=1;   //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
$waterstring="monpub.com"; //水印字符串
$waterimg="xplore.gif";  //水印图片
$imgpreview=0;   //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/4;  //缩略图比例

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
if (!is_uploaded_file($_FILES["upfile"]['tmp_name']))//要上传的文件是否存在
//是否存在文件
{


}


$file = $_FILES["upfile"];
if($max_file_size < $file["size"])
//检查文件大小
{
echo '	<head><style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>votre photo est trop grand...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>';
exit;
  }

if(!in_array($file["type"], $uptypes))
//检查文件类型
{
echo '	<head><style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>uniquement le photo est autorise...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>';
exit;
}





//提交到数据库,生成小广告开始


$nom = htmlspecialchars(trim($_POST['nom']));
$email = htmlspecialchars(trim($_POST['email']));
$titre = htmlspecialchars(trim($_POST['titre']));
$telephone = htmlspecialchars(trim($_POST['telephone']));
$region = htmlspecialchars(trim($_POST['region']));
$departement = htmlspecialchars(trim($_POST['departement']));
$arrondissement = htmlspecialchars(trim($_POST['arrondissement']));
$codepo = htmlspecialchars(trim($_POST['codepo']));
$ville = htmlspecialchars(trim($_POST['ville']));
$prix = htmlspecialchars(trim($_POST['prix']));
$categorie = htmlspecialchars(trim($_POST['categorie']));
$marque = htmlspecialchars(trim($_POST['marque']));
$annee = htmlspecialchars(trim($_POST['annee']));
$kilometre = htmlspecialchars(trim($_POST['kilometre']));
$cylindree = htmlspecialchars(trim($_POST['cylindree']));
$boiteVTS = htmlspecialchars(trim($_POST['boiteVTS']));
$carburant = htmlspecialchars(trim($_POST['carburant']));
$location = htmlspecialchars(trim($_POST['location']));
$typeimo = htmlspecialchars(trim($_POST['typeimo']));
$typebureau = htmlspecialchars(trim($_POST['typebureau']));
$activite = htmlspecialchars(trim($_POST['activite']));
$surface = htmlspecialchars(trim($_POST['surface']));
$piece = htmlspecialchars(trim($_POST['piece']));
$papro = htmlspecialchars(trim($_POST['papro']));
$offre = htmlspecialchars(trim($_POST['offre']));
$neirong = htmlspecialchars(trim($_POST['neirong']));
$typetra = htmlspecialchars(trim($_POST['typetra']));
$loyer = htmlspecialchars(trim($_POST['loyer']));
$ning = htmlspecialchars(trim($_POST['ning']));



if(!file_exists($destination_folder))//
mkdir($destination_folder);//检查文件夹是否存在,不存在就创建这个文件夹

$filename=$file["tmp_name"];//["tmp_name"]保存的是文件上传到服务器临时文件夹之后的文件名
$pinfo=pathinfo($file["name"]);//["name"]文件在上传者机器上的文件名
$ftype=$pinfo["extension"];
if ($file["size"] > 0)$destination = $destination_folder."tu".$telephone.time().".".$ftype;




if(!move_uploaded_file ($filename, $destination))
{
   
  }

}




if ($_POST['titre']==""){
    exit('
	
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />


</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre la titre...................</p>
<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
</html>
	'

);
}
if ($_POST['telephone']==""){
    exit('
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre votre numero de telephone...................</p>
<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
</html>'
);
}

//if ($_POST['ville']==""){
 //   exit('
	//<html>

	//<head><link href="csub.css" rel="stylesheet" type="text/css" />

//</head>

//<body>
//<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  //<!--DWLayoutTable-->
  
  //<tr>
    //<td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    //<td width="788"></td>
  //</tr>
//</table>
//<div  align=center>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>veuillez mettre votre ville...................</p>
//<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
//</html>'
//);
//}
//if ($_POST['codepo']==""){
  //  exit('
//	<html>
//
//	<head><link href="csub.css" rel="stylesheet" type="text/css" />

//</head>

//<body>
//<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  //<!--DWLayoutTable-->
  
  //<tr>
   // <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
   // <td width="788"></td>
  //</tr>
//</table>
//<div  align=center>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>veuillez mettre votre code postal...................</p>
//<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
//</html>'
//);
//}
if ($_POST['region']==""){
    exit('
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez choisir le region...................</p>
<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
</html>'
);
}
//if ($_POST['departement']==""){
  //  exit('
//	<html>

//	<head><link href="csub.css" rel="stylesheet" type="text/css" />

//</head>

//<body>
//<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
 // <!--DWLayoutTable-->
  
 // <tr>
//    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
 //   <td width="788"></td>
 // </tr>
//</table>
//<div  align=center>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>&nbsp;</p>
//<p class=STYLE1>veuillez choisir le departement...................</p>
//<p><a  class="a4" href="javascript:history.back()">retour</a></p></div></body>
//</html>'
//);
//}

if ($_POST['categorie']==""){
    exit('
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />
>
</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez choisir le categorie...................</p>
<p><a class="a4" href="javascript:history.back()">retour</a></p></div></body>
</html>'
);
}

if ($_POST['categorie']=="Fondsdecommerce"&&$_POST['activite']==""){
    exit('
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez choisir votre activite...................</p>
<p><a class="a4" href="javascript:history.back()">retour</a></p></div></body>
</html>'
);
}

if ($_POST['neirong']==""){
    exit('
	<html>

	<head><link href="csub.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre vos messeges...................</p>
<p><a class="a4"href="javascript:history.back()">retour</a></p></div></body>
</html>'
);
}


require("./imoconn.php");
require("./function.php");

$createtime = time();

$ip = get_client_ip();

 
 if($categorie=="Immobilier"){$fp = fopen ("tempimo.php","r");
  $content  = fread ($fp,filesize ("tempimo.php"));}
 
 
 if($categorie=="Voiture"){$fp = fopen ("tempve.php","r");
 $content  = fread ($fp,filesize ("tempve.php"));}


if($categorie=="Moto"){$fp = fopen ("tempve.php","r");
 $content  = fread ($fp,filesize ("tempve.php"));}


if($categorie=="Fondsdecommerce"){$fp = fopen ("tempfond.php","r");
 $content  = fread ($fp,filesize ("tempfond.php"));}

if($categorie=="BureauCommerce"){$fp = fopen ("tempbureau.php","r");
 $content  = fread ($fp,filesize ("tempbureau.php"));}


if($categorie=="Travail"){$fp = fopen ("temptra.php","r");
 $content  = fread ($fp,filesize ("temptra.php"));}


if($categorie=="Autre"){$fp = fopen ("tempau.php","r");
 $content  = fread ($fp,filesize ("tempau.php"));}
 


//以下为生成文件所房的位置
if($categorie=="Immobilier")$filename = "immobilier/".$telephone.$createtime.".php";
if($categorie=="Voiture")$filename = "vehicule/".$telephone.$createtime.".php";
if($categorie=="Moto")$filename = "moto/".$telephone.$createtime.".php";
if($categorie=="Fondsdecommerce")$filename = "fond de commerce/".$telephone.$createtime.".php";
if($categorie=="BureauCommerce")$filename = "bureau/".$telephone.$createtime.".php";
if($categorie=="Travail")$filename = "travail/".$telephone.$createtime.".php";
if($categorie=="Autre")$filename = "autre/".$telephone.$createtime.".php";
$path = $filename;
 
 
 
  
  
  
  


if($categorie=="Immobilier"){$suru=",location,typeimo,piece,surface,loyer" ;$suru2=",'$location','$typeimo','$piece','$surface','$loyer'";}

if($categorie=="Voiture"){$suru=",marque,annee,kilometre,boiteVTS,carburant" ;$suru2=",'$marque','$annee','$kilometre','$boiteVTS','$carburant'" ;}

if($categorie=="Moto"){$suru=",marque,annee,kilometre,cylindree" ;$suru2=",'$marque','$annee','$kilometre','$cylindree'" ;}

if($categorie=="Fondsdecommerce"){$suru=",activite,surface,loyer" ;$suru2=",'$activite','$surface','$loyer'" ;}


if($categorie=="BureauCommerce"){$suru=",typebureau,surface,loyer" ;$suru2=",'$typebureau','$surface','$loyer'" ;}

if($categorie=="Travail"){$suru=",typetra" ;$suru2=",'$typetra'" ;}

if($ning){$suru.=",ning" ;$suru2.=",'$ning'" ;}





$insert_sql = "INSERT INTO db415861577.imo
(nom,email,titre,telephone,region,departement,arrondissement,codepo,ville,prix,categorie $suru,papro,offre,neirong,createtime,uptime,path,pathtu,clientip)VALUES";
$insert_sql .= "
('$nom','$email','$titre','$telephone','$region','$departement','$arrondissement','$codepo','$ville','$prix','$categorie' $suru2,'$papro','$offre','$neirong','$createtime','$createtime','$path','$destination','$ip')";


if(mysql_query($insert_sql)){
$iidd = mysql_insert_id();//马上获取新数据的id号

 
   $content = str_replace ("{iidd}",$iidd,$content);

 $handle = fopen ($filename,"w"); //打开文件,没有则创建
  /*
　检查文件是否被创建且可写
  */
 if (!is_writable ($filename)){
     die ("file：".$filename."impossbile ecrit");
  }
  if (!fwrite ($handle,$content)){  //将信息写入文件
     die ("creat file".$filename."fail！");
  }
  fclose ($handle); //关闭指针
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Refresh" content="0;url=http://monpub.com/<?=$filename?>">
<title>mon pub poser des annonces gratuitement</title>
<style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><a href="http://www.monpub.com/"><img src="tu/monpub.jpg" width="190" height="90" border="0" /></a></td>
    <td width="788"></td>
  </tr>
</table>
<div  align="center">
<p class="STYLE1">votre message a été bien enregistré </p>
<p class="STYLE1">veuillez patienter...................</p>
</div>
</body>
</html>
<?php
if($ip!="82.237.83.106")//有其他人发帖就给自己发送一条邮件

{	 $too = "philippe660@gmail.com"; 
	     
	    $userr = "小武";
	    $datee = date("Y年m月d日");
	     
	    $headerss  = 'MIME-Version: 1.0' . "\r\n";
	    $headerss .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	    $headerss .= "To: $too \r\n";
	    $headerss .= 'From: contact@monpub.com' . "\r\n";
	 
	    $subjectt = "终于有人来我们的网站发小广告了,哈哈哈!!"; 
	    $subjectt = "=?UTF-8?B?".base64_encode($subjectt)."?=";
	  
	    $contentt = '亲爱的'."$userr".'：'.'<br />'; 
	    $contentt .= '<br />'; 

	
    $contentt .= "Monpub.com -- 终于有人来我们的网站发小广告了,哈------为建成免费发annonce而不断努力着。<br /><br />
	annonce monpub.com<br />
Petites annonces gratuites (fond de commerce,immobilier, voiture, moto, produits d'occasion, locations de vacances, offres d'emploi, services de proximité, animaux ...).<br /><br />".'<a href="http://www.monpub.com" target="_blank">www.monpub.com</a>'.'<br />';
	    $contentt .= '<br />'; 
	    $contentt .= "Monpub广告团队".'<br />';
	    $contentt .= "$datee".'<br /><br />'; 
		$contentt .= "发帖人电话:".$telephone.'<br />';
	 
  mail($too, $subjectt, $contentt, $headerss); }//给自己发邮件结束
  

} else {
	echo 'fail',mysql_error(),'[ <a href="javascript:history.back()">retour</a> ]';
}
?>
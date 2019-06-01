<?php
session_start();
 require("imoconn.php");
 require("function.php");
$time=time();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<!-- Mimic Internet Explorer 7 -->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>annonces gratuit fond de commerce immobilier voiture moto bureau local commercial produit boutique restaurant</title>
<meta name="URL" content="www.monpub.com">
<meta name="ALIAS" content="http://www.monpub.com/">
<meta name="ABSTRACT" content="Petites annonces gratuites d'occasion - monpub.com">
<meta name="DESCRIPTION" content="annonces gratuites (fond de commerce,immobilier, voiture, moto, produits d'occasion, locations de vacances, offres d'emploi, services de proximité, animaux ...)">
<meta name="keywords" content="livreur,serveur,babysitting,fond de commerce,fond de commerce restaurant,voiture,vehicule,immobilier, annonce, particulier, appartement, maison, location, vente,
livreur paris,serveur paris ,babysitting paris,fond de commerce mode ,fond de commerce restaurant,voiture d'occasion,vehicule d'occasion,immobilier neuf , annonce gratuit , particulier a particulier, appartement neuf , maison neuf , location studio ,studio  vente" />
<meta name="language" content="FR" />
<meta name="site-languages" content="French" />
<meta name="Content-Language" content="fr-FR" />
<link href="http://www.monpub.com/tu/tu.ico" rel="Shortcut Icon"/>
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="offre.css" rel="stylesheet" type="text/css" />
<link href="index.css" rel="stylesheet" type="text/css" />
<script src="analytics.js" type="text/javascript"></script>
</head> 
<?php require("./header.php");
?>


<div align="center">
<div class="STYLE1" align="center" style="border:cccccc 1px  solid; width:95%; padding:5px;">
<?php
if($_GET['action'] == 'remonter'){
	$delete_sql = "UPDATE db415861577.imo SET uptime ='$time' WHERE id = $_GET[id]";
	if(mysql_query($delete_sql)){
		exit('<script language="javascript">alert("votre annonce a été remontée");self.location = "model/model.php?id='.$_GET[id].'";</script>');
	} else {
		exit('<script language="javascript">alert("Votre annonce na pas été remontée");self.location = "model/model.php?id='.$_GET[id].'";</script>');
	}
}



if(!isset($_SESSION)||$_SESSION['confirmation']!="wengze"){
	exit('SIL TE PLAIT!');
}

$SN = $_SERVER['SERVER_NAME'];
if (substr($_SERVER['HTTP_REFERER'], 7, strlen($SN))!=$SN&&substr($_SERVER['HTTP_REFERER'], 11, strlen($SN))!=$SN) exit('stop-ouvert directement');//防止跨域提交








if($_GET['action'] == 'update'){
	$delete_sql = "UPDATE db415861577.imo SET uptime ='$time' WHERE id = $_GET[id]";
	if(mysql_query($delete_sql)){
		exit('<script language="javascript">alert("Votre annonce a été remontée");self.location = "mon.php";</script>');
	} else {
		exit('<script language="javascript">alert("Votre annonce na pas été remontée");self.location = "mon.php";</script>');
	}
}

$ttiidd=$_GET['id'];
$query_sql = "SELECT * FROM db415861577.imo WHERE id='$ttiidd'";
$result = mysql_query($query_sql);
if(!$result) exit('fail&nbsp;'.mysql_error());
$gb_array = mysql_fetch_array($result);

$nom=$gb_array['nom'];
$email=$gb_array['email'];
$file1=$gb_array['path'];
$avant=mb_strcut($file1,0,18,'utf-8');
if($avant=="http://monpub.com/"){$wenjian=substr($file1,18);}else {$wenjian=$file1;}

//防止被人乱删除
if(isset($_SESSION['id'])){}
elseif($_SESSION['tid']=$_GET['id']&&$_SESSION['ip']=get_client_ip()){}
else{header("Location: http://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/");exit();}


//文件上传与删除开始

$shancu=$_POST['shancu'];

if($_FILES['wenjian']){
$s=$_FILES['wenjian'];
if(move_uploaded_file($s['tmp_name'],$s['name'])){
echo "<div align=center>上载成功</div>";
echo '<div align=center><a href='.$s['name'].'>'.$s['name'].'</a></div>';
}//move_uploaded_file(file,newloc):file必需。规定要移动的文件。newloc必需。规定文件的新位置。
 else{echo "<div align=center>上载失败</div>";}}

if($_POST['shancu'])
  {if(unlink($_POST['shancu']))echo "<div align=center>删除成功</div>";else echo "<div align=center>删除失败</div>";}

//文件上传与删除结束




if($_GET['action'] == 'del'){//action=del开始删除
$delete_sql = "DELETE FROM db415861577.imo WHERE id = $_GET[id]";

if($gb_array['pathtu']){if(unlink($gb_array['pathtu']))$tu1="1";else $tu1="10";}else{$tu1="1";}
if($gb_array['pathtu2']){if(unlink($gb_array['pathtu2']))$tu2="2";else $tu1="20";}else{$tu2="2";}
if($gb_array['pathtu3']){if(unlink($gb_array['pathtu3']))$tu3="3";else $tu1="30";}else{$tu3="3";}
if($wenjian){if(unlink($wenjian))$f4="4";else $f4="40";}else {$f4="4";}
if(mysql_query($delete_sql))$sj="5";else $sj="50";		
	
	
	if($tu1=="1"&&$tu2=="2"&&$tu3=="3"&&$f4=="4"&&$sj=="5")
	{
	if($email){
	$date = date("d-m-Y à H:i");

	$userrr = $nom;
$headersss  = 'MIME-Version: 1.0' . "\r\n";
$headersss .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headersss .= "To: $email \r\n";
$headersss .= 'From: monpub@monpub.com'."\r\n";
$subjecttt = "Votre annonce a été supprimée!"; 
$subjecttt = "=?UTF-8?B?".base64_encode($subjecttt)."?=";
$contenttt ="";
$contenttt .= '<br />'; 
$contenttt .= '<div  style= "border:solid 5px #cccccc;"><div style=padding:20px;>Votre annonce a été supprimée</div></div><br /><br />';
$contenttt .="<div  style= 'border:solid 5px #cccccc;'><div style=padding:10px;><strong>--Monpub.com--<br />Tout est simple,Tout est gratuit!</strong><br />
<a href=http://monpub.com/ >monpub.com</a><br />Site d'annonces d'offres et de demandes, permettant de publier des annonces dans le secteur immobilier, l'emploi, l'automobile, les fonds de commerce ou pas de porte, Mon Pub propose les annonces des vendeurs, des prestataires de services, des professeurs de cours particuliers, les annonces de vente, de location immobilière, appartement, fond de commerce, sur toute la France, Paris et Province 
annonces fond de commerce,immobilier, voiture, moto,rencontre,produits d'occasion, locations de vacances, offres d'emploi, services de proximité, animaux ...</div></div><br />";
$contenttt .= "---Monpub---".'<br />';
$contenttt .= "$date".'<br />'; 

mail($email, $subjecttt, $contenttt, $headersss);
//发送ｅｍａｉｌ给删除者
	}
	
	
	
	
	
	
	
	
	if($_SESSION['avant']=="del")
	{
	echo '<script language="javascript">alert("Vous avez supprimé annonce Numéro: ',$_GET[id],'");self.location = "/del.php";</script>';
	}
	else
	{
	echo '<script language="javascript">alert("Vous avez supprimé annonce Numéro: ',$_GET[id],'");self.location = "/";</script>';
	}
	
	} 
	
	elseif($tu1=="10"){ echo "Vous n'avez pas supprimé 1er photo  correspondant l'annonce.";}
	elseif($tu2=="20"){ echo "Vous n'avez pas supprimé 2eme photo  correspondant l'annonce.";}
	elseif($tu3=="30"){ echo "Vous n'avez pas supprimé 3eme photo  correspondant l'annonce.";}
	elseif($f1=="40"){ echo "Vous n'avez pas supprimé ce fichier.";}
	elseif($sj1=="50"){ echo "Vous n'avez pas supprimé l'annonce Numéro: ",$_GET[id]," .";}
else{}	
}//action=del开始结束





if($_GET['commentaire'] == 'del'){//删除评论
$tid=$_GET['tid'];
$delete_commentaire = "DELETE FROM db415861577.commentaire WHERE id = '$tid' ";

	if(mysql_query($delete_commentaire)){
		exit('<script language="javascript">alert("删评论成功");self.location = "grossiste/modelgros.php?tid='.$tid.'";</script>');
	} else {
		exit('删评论失败 '.mysql_error().'[ <a href="javascript:history.back()">retour</a> ]');
	}
}





if($_GET['annoncegros'] == 'del'){//删除批发小广告
$tid=$_GET['tid'];
$delete_annoncegros= "DELETE FROM db415861577.societe WHERE id = '$tid' ";

	if(mysql_query($delete_annoncegros)){
		exit('<script language="javascript">alert("删除成功");self.location = "grossiste/modelgros.php";</script>');
	} else {
		exit('删除失败 '.mysql_error().'[ <a href="javascript:history.back()">retour</a> ]');
	}
}



//删除ｅｍａｉｌ
if($_GET['action']=='email')
{ $emailid=$_GET['emailid'];
$delete_email= "DELETE FROM db415861577.email WHERE id = '$emailid' ";

	if(mysql_query($delete_email)){
		exit('<script language="javascript">alert("删除email成功");self.location = "/del.php";</script>');
	} else {
		exit('删除email失败 '.mysql_error().'[ <a href="javascript:history.back()">retour</a> ]');
	}
}

//删除ip
if($_GET['action']=='ip')
{$ip=$_GET['ip'];
$insert_ip= "INSERT INTO db415861577.ip (ip) VALUES ('$ip') ";
	if(mysql_query($insert_ip)){
		exit('<script language="javascript">alert("存入ip成功");self.location = "/del.php";</script>');
	} else {
		exit('存入ip失败 '.mysql_error().'[ <a href="javascript:history.back()">retour</a> ]');
	}
}

?>
</div></div>

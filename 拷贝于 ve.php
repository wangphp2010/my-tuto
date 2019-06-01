<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <!-- Mimic Internet Explorer 7 -->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title>monpub annonces immobilier gratuit</title>

<meta name="Description" content="site,site de partenaie" lang="fr" xml:lang="fr" />
<meta name="keywords" content="immobilier, annonce, particulier, appartement, maison, location, vente" />
<meta name="language" content="FR" />
<meta name="site-languages" content="French" />
<meta name="Content-Language" content="fr-FR" />

<link href="http://www.monpub.com/tu/tu.ico" rel="Shortcut Icon"/>
<link href="css.css" rel="stylesheet" type="text/css" />
<script src="region2.js" type="text/javascript"></script>

<style type="text/css">
<!--
.beijin {background-color: #dddddd;}
-->
</style>
</head>

<body>
<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" valign="top"><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div align="center" class="beijin"><a href="index.php" class="a3">accueil</a> | <a href="offre.php" class="a3">offre</a> | <a href="demande.php" class="a3">demande</a> | <a href="mon.php" class="a3">mon annonce</a> | <a href="contact.php" class="a3"> nous contacter</a> </div>
<div  align="center">
 
  <p><a href="ve.php" class="a3">véhicule</a> | <a href="imo.php" class="a3">immobilier</a> | <a href="fond.php" class="a3">fond</a> | <a href="tra.php"class="a3"> travail</a> | <a href="au.php"class="a3">autre</a> <br>
  <a href="deposer.php" class="a3"><br />
  passer votre annonce</a></p>
</div>
<?php	
$region = $_POST['region'];
$departement = $_POST['departement'];
$arron = $_POST['arron'];				
require("./imoconn.php");
$pagesize = 2;//每页显示数据数量
$p = $_GET['p']?$_GET['p']:1;
$offset = ($p-1)*$pagesize;

if ($region&&$departement&&$arron){$query_sql = "SELECT * FROM db415861577.imo  
WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region' and departement = '$departement'  and arrondissement = '$arron'  ORDER BY id DESC LIMIT  $offset , $pagesize";
$count_result = mysql_query("SELECT count(*) FROM db415861577.imo 
WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region' and departement = '$departement'  and arrondissement = '$arron' ");
}

if ($region==""){
$count_result = mysql_query("SELECT count(*) FROM db415861577.imo 
WHERE categorie = 'Voiture' or categorie = 'Moto'");
$query_sql = "SELECT * FROM db415861577.imo  
WHERE categorie = 'Voiture' or categorie = 'Moto'  ORDER BY id DESC LIMIT  $offset , $pagesize";}

if(!empty($region)&&$departement==""&&$arron==""){
$count_result = mysql_query("SELECT count(*) FROM db415861577.imo
 WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region'");
$query_sql = "SELECT * FROM db415861577.imo 
 WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region'  ORDER BY id DESC LIMIT  $offset , $pagesize";}

if (!empty($region)&&!empty($departement)&&$arron== ""){
$count_result = mysql_query("SELECT count(*) FROM db415861577.imo 
WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region' and departement ='$departement'");
$query_sql = "SELECT * FROM db415861577.imo  
WHERE (categorie = 'Voiture' or categorie = 'Moto') and region = '$region' and departement ='$departement' ORDER BY id DESC LIMIT  $offset , $pagesize";}

//ORDER BY id DESC 表示按照id从大到小排列










$count_array = mysql_fetch_array($count_result);
$pagenum = ceil($count_array['count(*)']/$pagesize);


$s=1+($pagesize*($p-1));

		
		


$result = mysql_query($query_sql);
if(!$result) exit('fail&nbsp;'.mysql_error());

?>

<form name="myform"  method="POST" action="" onSubmit="return InputCheck(this)">
	<div> <br>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="tijiaoanniuziti" >région:</span><br />
                  &nbsp;&nbsp;&nbsp;&nbsp;
				  <select id="region" name="region"  class="STYLE1" onBlur=""onChange="changelocation(document.myform.region.options[document.myform.region.selectedIndex].value)"  >
<option selected="selected"  value=="">--Choisissez la région--</option>
<option value="Ile-de-France">Ile-de-France</option>
<option value="Alsace">Alsace</option>
<option value="Aquitaine">Aquitaine</option>
<option value="Auvergne">Auvergne</option>
<option value="Basse-Normandie">Basse-Normandie</option>
<option value="Bourgogne">Bourgogne</option>
<option value="Bretagne">Bretagne</option>
<option value="Centre">Centre</option>
<option value="Champagne-Ardenne">Champagne-Ardenne</option>
<option value="Corse">Corse</option>
<option value="Franche-Comté">Franche-Comté</option>
<option value="Haute-Normandie">Haute-Normandie</option>
<option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
<option value="Limousin">Limousin</option>
<option value="Lorraine">Lorraine</option>
<option value="Midi-Pyrénées">Midi-Pyrénées</option>
<option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
<option value="Pays-de-la-Loire">Pays-de-la-Loire</option>
<option value="Picardie">Picardie</option>
<option value="Poitou-Charentes">Poitou-Charentes</option>
<option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
<option value="Rhône-Alpes">Rhône-Alpes</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Martinique">Martinique</option>
<option value="Guyane">Guyane</option>
<option value="Réunion">Réunion</option>
				</select> </div>	
	
	<div > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="tijiaoanniuziti" >département:</span><br />
                  &nbsp;&nbsp;&nbsp;&nbsp;		
	<select id="departement" name="departement" class="STYLE1"  onChange="changelocation2(document.myform.departement.options[document.myform.departement.selectedIndex].value)">
      <option selected value=="">--Choisissez le département--</option>
    </select></div>	
	
	<div id="arron">	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="tijiaoanniuziti" >arrondissement:</span><br />
                  &nbsp;&nbsp;&nbsp;&nbsp;	
    <select name="arron"class="STYLE1" >
      <option value=="" selected>--Choisissez l'Arrondissement--</option>
    </select>	
	
	</div>	
	<div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="tijiaoanniuziti" value="chercher" ></div>
</form>	



 
<?php while($gb_array = mysql_fetch_array($result)){?>
<a href="<?=$gb_array['path']?>" class="a5">
<table width="984" border="0" cellpadding="0" cellspacing="2"  bgcolor="#CCCCCC"><!--DWLayoutTable-->
 
  <tr>
    <td width="150" rowspan="2"  bgcolor="#FFFFFF"><img name="" src="<?=$gb_array['pathtu']?>" width="150" height="150" alt="" /></td>
    <td width="635" height="25"  bgcolor="#FFFFFF"><?=$gb_array['titre']?></td>
    <td width="148" valign="top" bgcolor="#FFFFFF">&nbsp;&nbsp;le:
    <?=date("Y-m-d H:i", $gb_array['createtime'])?></td>
  <td width="37"  bgcolor="#FFFFFF">#
    <?php
	echo $s?></td>
  </tr>
  <tr>
    <td height="127" colspan="3"  bgcolor="#FFFFFF"><?=$gb_array['neirong']?> </td>
  </tr>
</table>
</a>
<?php $s++;}?>
<div>
<p class="liuyankuang" align="center" >



<?php
//total  [6]  annonces  1 2 [3] 开始




echo 'total&nbsp;&nbsp;<strong class=cuti>',$count_array['count(*)'],'</strong>&nbsp;&nbsp;annonces';
if($pagenum<=10){
       for($i=1;$i<=$pagenum;$i++) {//for 会循环
		
		if($i==$p) {
			echo '&nbsp;[<strong class=cuti>',$i,'</strong>]';
		} else {
			
			echo '&nbsp;<a  class=a4 href="ve.php?p=',$i,'">'.$i.'</a>';
			
		}
	}
	
	}else{








if ($p<=5) {

	for($i=1;$i<=8;$i++) {//for 会循环
		
		if($i==$p) {
			echo '&nbsp;[<strong class=cuti>',$i,'</strong>]';
		} else {
			
			echo '&nbsp;<a  class=a4 href="ve.php?p=',$i,'">'.$i.'</a>';
			
		}
	}
	echo '&nbsp;...<a  class=a4 href="ve.php?p=',$pagenum,'">'.$pagenum.'</a>';
	}



if ($p>=6&&$p<=($pagenum-5)) {
echo '<a  class=a4 href="ve.php?p=1">1</a>...';
	for($i=($p-3);$i<=($p+3);$i++) {//for 会循环
		
		if($i==$p) {
			echo '&nbsp;[<strong class=cuti>',$i,'</strong>]';
		} else {
			
			echo '&nbsp;<a  class=a4 href="ve.php?p=',$i,'">'.$i.'</a>';
			
		}
	}
	echo '&nbsp;...<a  class=a4 href="ve.php?p=',$pagenum,'">'.$pagenum.'</a>';
	}
	
			
			
			
			if ($p>($pagenum-5)) {
echo '<a  class=a4 href="ve.php?p=1">1</a>...';
	for($i=($p-7);$i<=$pagenum;$i++) {//for 会循环
		
		if($i==$p) {
			echo '&nbsp;[<strong class=cuti>',$i,'</strong>]';
		} else {
			
			echo '&nbsp;<a class=a4 href="ve.php?p=',$i,'">'.$i.'</a>';
			
		}
	}
	
	}
} 

    ?>

</p></div>
</body>
</html>

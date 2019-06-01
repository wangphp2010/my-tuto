<?php
session_start();
// Ö¹ POST Ê½
if(!isset($_POST['submit'])){
    exit('<table width="978" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align="center">
<p class="STYLE1">fail</p>

</div>');
}
// íµ¥Ï¢
if(get_magic_quotes_gpc()){
	$theme = htmlspecialchars(trim($_POST['theme']));
	$numero = htmlspecialchars(trim($_POST['numero']));
	$type = htmlspecialchars(trim($_POST['type']));
	$prix = htmlspecialchars(trim($_POST['prix']));
	$motif = htmlspecialchars(trim($_POST['motif']));
	$lieu = htmlspecialchars(trim($_POST['lieu']));
	$surface = htmlspecialchars(trim($_POST['surface']));
	$content = htmlspecialchars(trim($_POST['content']));
} else {
	$theme = htmlspecialchars(trim($_POST['theme']));
	$numero = htmlspecialchars(trim($_POST['numero']));
	$type = htmlspecialchars(trim($_POST['type']));
	$prix = htmlspecialchars(trim($_POST['prix']));
	$motif = htmlspecialchars(trim($_POST['motif']));
	$lieu = htmlspecialchars(trim($_POST['lieu']));
	$surface = htmlspecialchars(trim($_POST['surface']));
    $content = htmlspecialchars(trim($_POST['content']));
}
if ($_POST['theme']==""){
    exit('
	
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre la titre...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>'
);
}
if ($_POST['numero']==""){
    exit('
	
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre votre numero de telephone...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>'
);
}
if ($_POST['content']==""){
    exit('
	
<div  align=center>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>&nbsp;</p>
<p class=STYLE1>veuillez mettre vos messeges...................</p>
<p><a href="javascript:history.back()">retour</a></p></div>'
);
}


require("./imoconn.php");
require("./function.php");

$createtime = time();//Ê±

$ip = get_client_ip();

// Ð´
$insert_sql = "INSERT INTO db415861577.imo
(theme,numero,type,prix,motif,lieu,surface,content,createtime,clientip)VALUES";
$insert_sql .= "
('$theme','$numero','$type','$prix','$motif','$lieu','$surface','$content','$createtime','$ip')";

if(mysql_query($insert_sql)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Refresh" content="2;url=imo.php">
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
    <td width="190" height="90" ><img src="tu/monpub.jpg" width="190" height="90" /></td>
    <td width="788"></td>
  </tr>
</table>
<div  align="center">
<p class="STYLE1">votre message a t bien enregistr </p>
<p class="STYLE1">veuillez patienter...................</p>
</div>
</body>
</html>
<?php
} else {
	echo 'fail',mysql_error(),'[ <a href="javascript:history.back()">retour</a> ]';
}
?>
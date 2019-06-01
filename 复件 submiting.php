<?php
// 禁止非 POST 方式访问
if(!isset($_POST['submit'])){
    exit('fail');
}
// 表单信息处理
if(get_magic_quotes_gpc()){
	$nickname = htmlspecialchars(trim($_POST['nickname']));
	$numero = htmlspecialchars(trim($_POST['numero']));
	$persone = htmlspecialchars(trim($_POST['persone']));
	$heure = htmlspecialchars(trim($_POST['heure']));
	$content = htmlspecialchars(trim($_POST['content']));
} else {
	$nickname = htmlspecialchars(trim($_POST['nickname']));
	$numero = htmlspecialchars(trim($_POST['numero']));
	$persone = htmlspecialchars(trim($_POST['persone']));
	$heure = htmlspecialchars(trim($_POST['heure']));
	$content = htmlspecialchars(trim($_POST['content']));
}
if(strlen($nickname)>160){
	exit('nom fail: 160 lettre max [ <a href="javascript:history.back()">retour</a> ]');
}
if(strlen($content)>660){
	exit('message fail: 660 lettre max  [ <a href="javascript:history.back()">retour</a> ]');
}



require("./conn.php");
require("./function.php");

$createtime = time();
$ip = get_client_ip();
// 数据写入库表
$insert_sql = "INSERT INTO db411955879.test(nickname,numero,persone,heure,face,content,createtime,clientip)VALUES";
$insert_sql .= "('$nickname','$numero','$persone','$heure','$_POST[face]','$content','$createtime','$ip')";

if(mysql_query($insert_sql)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Refresh" content="3;url=me.html">
<title>BUFFET A VOLONTE MOUSUSHI conflans 78 yvelines livraison eragny herblay conflans maurecourt sushi sashimi a volonte karaoke</title>
<style type="text/css">
<!--
.STYLE1 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 30px; }
-->
</style>
</head>
<body>

<div  align="center">
<p class="STYLE1">&nbsp;</p>
<p class="STYLE1">&nbsp;</p>
<p class="STYLE1">votre message a été bien enregistré </p>
<p class="STYLE1">veuillez patienter...................</p>
</div>
</body>
</html>
<?php
} else {
	echo 'fail：',mysql_error(),'[ <a href="javascript:history.back()">retour</a> ]';
}
?>
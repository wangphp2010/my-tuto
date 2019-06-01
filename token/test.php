<?php
session_start();
include ("GEncrypt.inc.php");
include ("GToken.inc.php");
$token = $_POST["token"];
$result = GToken::isToken($token,"index.php",true);
if($result){
	echo "实现表单逻辑";
	
}else{
	echo "重复提交";
}
?>
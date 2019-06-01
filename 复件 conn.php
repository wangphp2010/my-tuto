<?php 
$conn = @mysql_connect("db415861577.db.1and1.com","dbo415861577","1234qwer");
if (!$conn){
	die("Á¬½ÓÊý¾Ý¿âÊ§°Ü£º" . mysql_error());
}
$db_selected = mysql_select_db("db411955879.imo",$conn);
//×Ö·û×ª»»£¬¶Á¿â
mysql_query("set character set 'gbk'");
//Ð´¿â
mysql_query("set names 'gbk'");
?>


<?php 
$conn = @mysql_connect("db415861577.db.1and1.com","dbo415861577","1234qwer");
if (!$conn){
	die("�������ݿ�ʧ�ܣ�" . mysql_error());
}
$db_selected = mysql_select_db("db411955879.imo",$conn);
//�ַ�ת��������
mysql_query("set character set 'gbk'");
//д��
mysql_query("set names 'gbk'");
?>


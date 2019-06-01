<?php 
 //UNION 会替换掉重复的数据，效率就查。union all 只是简单的合并两表
 mysql_connect("localhost","root","onfigdashboardjsessionid");
 
 
$sql="SELECT * FROM(
SELECT * FROM db508556084.test1    as a
UNION ALL
SELECT * FROM db508556084.test    as b 
)  as c ORDER BY id  desc ";
 
$re=mysql_query($sql);

while($gb=mysql_fetch_array($re)){
	
	 echo $gb['id']." ".$gb['uptime']."<br>";
 
	}
	
	echo mysql_error();
?>



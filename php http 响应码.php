 
<?php
$url= 'http://82.223.10.19/mail.php';
//$url = 'http://monpub.com/mail.html';
$ch = curl_init (); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_TIMEOUT, 200); 
curl_setopt($ch, CURLOPT_HEADER, FALSE); 
curl_setopt($ch, CURLOPT_NOBODY, FALSE); 
#curl_setopt( $ch, CURLOPT_POSTFIELDS, "username=".$username."&password=".$password ); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
curl_exec($ch); 
$httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE); 


echo $httpCode ;

exit;
?>

<br><br><br><br>

<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 默认的导航栏</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	echo date("d-m-Y H:i:s",time());
$arr_ee="wengxiaowu@hotmail.com";
if(mail("$arr_ee", "suject test","test content "))echo "$arr_ee 发送成功<br /><br />";else echo "$arr_ee <font color=red>发送失败</font> *****************<br /><br />";
	?>
<p>带有下拉菜单的标签页</p>
<ul class="nav nav-tabs">
   <li><a href="#">Home</a></li>
   <li><a href="#">SVN</a></li>
   <li><a href="#">iOS</a></li>
   <li class="active" ><a href="#">VB.Net</a></li>
   <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
         Java <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
         <li><a href="#">Swing</a></li>
         <li><a href="#">jMeter</a></li>
         <li><a href="#">EJB</a></li>
         <li class="divider"></li>
         <li><a href="#">分离的链接</a></li>
      </ul>
   </li>
   <li><a href="#">PHP</a></li>
</ul>

</body>
</html>
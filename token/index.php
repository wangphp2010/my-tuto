<?php
session_start();
include ("GEncrypt.inc.php");
include ("GToken.inc.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>令牌测试</title>
</head>
<body>
<form action="test.php" method="post">
输入值:<input name="输入值" type="text">
<input name="token" type="hidden" value="<?php echo GToken::newToken("index.php");?>">
<input type="submit" value="提交" />
</form>
</body>
</html>
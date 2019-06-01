<?php
$str = "An example on a long word is: Supercalifragulistic";
echo wordwrap($str,15);
?>

浏览器输出：

An example on a long word is: Supercalifragulistic 

HTML 源代码：

<html>
<body>
An example on a
long word is:
Supercalifragulistic
</body>
</html>

例子 2

<?php
$str = "An example on a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br />\n");
?>

输出：

An example on a
long word is:
Supercalifragulistic

例子 3

<?php
$str = "An example on a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br />\n",TRUE);
?>

输出：

An example on a
long word is:
Supercalifragul
istic";

$t=$s;
print "<pre>\n".wordwrap($t,500)."\n</pre>";//
?>


<?php
$t   =   strtotime(date( "Y-m-d "));   //得到今日零点的时间戳
echo   date( "Y-m-d   H:i:s ",$t);   //验证
echo "<br>",$t;
?> 
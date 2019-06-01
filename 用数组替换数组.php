<?php
function change($o){
$s=array('1','2','3','4','5','6','7','8','9');
$t=array('壹','贰','叁','肆','伍','陆','柒','捌','玖');
return str_replace($s,$t,$o);
}
echo change('34567');
?>
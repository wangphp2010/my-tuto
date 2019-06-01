<?php
 

 
function ipAdressNumber($dotted){
 $dotted = preg_split( "/[.]+/", $dotted);
 $ip = (double) ($dotted[0]*16777216)+($dotted[1]*65536)+($dotted[2]*256)+($dotted[3]);
 // IP Number = A x (256*256*256) + B x (256*256) + C x 256 + D
 return $ip;
}

 
 
 

$a='188.165.236.209';

$a=str_replace('	',' ',$a);

$a=preg_replace('#\s+#',' ',$a);


$a=str_replace(' 
','
',$a);

$a=str_replace(' ','
',$a);


 
$a=explode("
",$a);

$b[]=''; 
  
for($i=0;$i<=count($a)-1;$i++)
{
$b[].=$a[$i];
}
 

for($i=1;$i<=count($b)-1;$i++)
{
if(($i+1)%3==0)$c= '';else $c=' ';
 if($i%3==0&&$i>0)echo '<br >';else echo ipAdressNumber($b[$i]).$c;
 }
 ?>



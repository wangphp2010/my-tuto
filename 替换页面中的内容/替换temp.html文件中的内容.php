<?php
  $title = "monpub annonce gratuit.........................";
  $file  = "------notre site est en train de construire--------";
  $fp = fopen ("temp.html","r");
  $content  = fread ($fp,filesize ("temp.html"));
  $content = str_replace ("{ title }",$title,$content);
  $content = str_replace ("{ file }",$file,$content);


  echo $content;
?> 

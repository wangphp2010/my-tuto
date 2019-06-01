<?php
   $title = "monpub anouuuuuuuu";
   $file   = "notre site est en train de construire";
   $fp = fopen ("temp.html","r");
   $content = fread ($fp,filesize ("temp.html"));
   $content = str_replace ("{file}",$file,$content);
   $content = str_replace ("{title}",$title,$content);
   
   //  生成列表开始
   require("./imoconn.php");
   $list = '';
   $sql = "select id,theme from db415861577.imo";
   $query = mysql_query ($sql);
   while ($result = mysql_fetch_array ($query)){
      $list .= '<a href='.$root.$result['theme'].' target=_blank>'.$result['theme'].'</a><br>';
   }
   $content = str_replace ("{articletable}",$list,$content);
   
   //生成列表结束
   echo $content;
   


?>
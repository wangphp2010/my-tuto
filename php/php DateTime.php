
<?php

/* $d1 = '2010-08-10';
$d2 = '2019-08-01';

$date = new Datetime($d1);
$date2 = new Datetime($d2);

$diff = $date->diff($date2,true ) ;
var_dump($diff ) ; */
//var_dump(  $date->diff($date2,true )->days);
 
/*  $date->modify('+1 month');
  var_dump($date  );
 echo '<br>';
 var_dump($date->format('d/m/Y')  );
 
 */
 

 	$date = new DateTime('2019-01-01');

	$interval = new DateInterval('P5Y1M2DT3M'); // 5年2个月2天3分钟
	
	//var_dump( $interval );
	
	$date->add($interval);
 
	
	var_dump($date) ;  


 
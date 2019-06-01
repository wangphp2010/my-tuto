<?php


function currentMicroTime()
{
	$time = explode ( " ", microtime () );
	$time = $time [1] . ($time [0] * 1000000);
	return $time;                    
}
echo currentMicroTime()."微秒";
 echo currentMicroTime()."微秒";
 
 ?>
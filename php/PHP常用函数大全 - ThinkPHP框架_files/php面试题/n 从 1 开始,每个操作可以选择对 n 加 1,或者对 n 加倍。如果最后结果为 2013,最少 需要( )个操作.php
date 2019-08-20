<?php

//n 从 1 开始,每个操作可以选择对 n 加 1,或者对 n 加倍。如果最后结果为 2013,最少 需要( )个操作。（1分）
	function dd($n)
	{
		
		 
		$s = $n  ;
		$i = 0 ;
		$v = $s ;
		while( $s != 1 )
		{
			$i++ ;
			$v = $s ;
			if($s % 2 == 0 ) 
				$s = $s / 2 ;
			else 
				$s -=1 ;
			
			
			
			if($s <0 ) break ;
			
		}
		echo $v,' ' . $i ;
	}
	
	
	dd(2013);
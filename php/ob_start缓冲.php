<?php


/*

ob_end_flush — 冲刷出（送出）输出缓冲区内容并关闭缓冲

ob_clean — 清空（擦掉）输出缓冲区

ob_end_clean — 清空（擦除）缓冲区并关闭输出缓冲

ob_flush — 冲刷出（送出）输出缓冲区中的内容

ob_get_contents — 返回输出缓冲区的内容

*/


 
	/* 	ob_start();

		echo 'Hellon'; //输出
		phpinfo(); //使用phpinfo函数

		$contents = ob_get_contents();
		echo "xxxx";
		//header('location:index.php'); //把浏览器重定向到index.php
		ob_end_clean();//输出全部内容到浏览器

		echo 			$contents ;
		 
		*/
//**********************************************
echo "1234";
echo "56";
 
//ob_clean是忽略掉前面所有的输出 也就是说前面那两个输出将不会输出到浏览器
ob_clean(); 
 
//ob_start告诉php这里开始要记录输出的内容了，并且所有输出放到连续的内存块里
ob_start(); 
 
echo "123";
echo "31";
$b = ob_get_contents();//此时$b的值连接前面所有输出的内容，该例子$b的值为"12331"
echo $b; 





//*******************

ob_start(); 
echo   'level 1<br/> ';
ob_start(); 
echo   'level 2<br/> ';
ob_start(); 
echo   'level 3<br/> ';
ob_end_clean(); //第一次修改
ob_end_flush();
ob_end_clean(); //第二次修改



/*
刚开始。  F:null 

ob_start();
 新建缓冲区A。  A: null -> F:null

echo 'level 1<br/> ';
程序有输出，输出进入最低的缓冲区A  A: 'level 1<br/>' -> F:null

ob_start(); 
新建缓冲区B 。 B:null  ->  A: 'level 1<br/>' -> F:null

echo   'level 2<br/> ';
程序有输出，输出进入最低的缓冲区B     B:'level 2<br/> ' ->  A: 'level 1<br/>' ->F:null

ob_start();
新建缓冲区C   C:null  B:'level 2<br/> '   A: 'level 1<br/>' -> F:null

echo 'level 3<br/> ';
程序有输出，输出进入最低的缓冲区C    C:'level 3<br/> '  ->  B:'level 2<br/> '  ->  A: 'level 1<br/>' -> F:null

ob_end_clean(); //第一次修改
缓冲区C被清空并关闭。  B:'level 2<br/> '  ->  A: 'level 1<br/>' -> F:null

ob_end_flush();
缓冲区B输出到上一级的缓冲区A并关闭。   A: 'level 1<br/>level 2<br/> ' -> F:null

ob_end_clean(); //第二次修改
缓冲区A被清空并关闭。 此时缓冲区A的东西还没真正输出到最终的F中，因此也就整个程序也就没有任何的输出了。

*/
?>

 
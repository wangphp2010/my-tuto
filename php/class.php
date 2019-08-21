<?php


class Compteur
{
	const INCREMENT = 1 ;
	
	public function incrementer():void
	{
		$compteur = 1 ;
		$compteur += static::INCREMENT ; #子类重新定义的INCREMENT
		$compteur += self::INCREMENT ; #本类定义的INCREMENT
	}
}


class Compteur2 extends Compteur
{
	const INCREMENT = 3 ;
	
	 
}


class GuestBook{
	public function __construct(string $file)
	{
		$dir = dirname($file);
		if(!is_dir($dir)){
			mkdir($dir , 0777 , true );
		}
		if(!file_exists($file)){
			touch($file);#创建文件
		}
	}
}
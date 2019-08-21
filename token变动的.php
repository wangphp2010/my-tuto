<?php

class Token{
	
 	private const CLE  = 'its a cle' ;
	private const ADDNUM  =  5 ;
	private const NUMS  =  10  ;
	
 	public $token ; 
	private $randStr ;
	private $unidMd5 ;
 	
	
	
	function __construct($str){
 		$this->init($str);
	}
	
	private function init($str)
	{
		$this->setUnidMd5();
		$this->setRandStr();
		$this->token =  $this->getToken( $this->unidMd5   ,  $str  );
	}
	private function getToken(  $unidMd5   ,  $str  ){
		 
		$token =  $unidMd5 . md5(   $str . self::CLE .  $unidMd5  );
		$c = self::NUMS ;
		if(self::NUMS > strlen($token) )$c = 21 ; 
		
		$a = substr($token , 0 , self::NUMS );
		$b = substr($token , self::NUMS );
		
		return $a. $this->randStr .$b;
		 
	}
	private function setUnidMd5()
	{
		$this->unidMd5 = md5(uniqid());
	}
	
	private function setRandStr()
	{
		$a = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$b = '' ;
		for($i=1; $i<= self::ADDNUM ; $i++){
			$b.=$a[ rand(0 , strlen($a) - 1 )] ;
		}
		$this->randStr = $b ;
		 
	}
	public function isValid($str, $token ){
		$bool = false  ;
		$a = substr($token , 0 , self::NUMS);
		$b = substr($token , self::NUMS + self::ADDNUM  );
		$unidMd5 =  substr( $a.$b , 0 , 32 );
 		if( $this->getToken(  $unidMd5   ,  $str  ) === $token   )$bool = true ;
		
		return $bool ;
		
	}
	
}
$str = "ok" ;
$t = new Token($str );
var_dump($t);
echo " <br>" ;

$token = $t->token ; 
echo $t->isValid( $str , $token   ) ."<br>" ;
echo "$token  <br>" ;
 






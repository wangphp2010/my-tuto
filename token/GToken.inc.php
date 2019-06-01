<?php 
/** 
* 原理：请求分配token的时候，想办法分配一个唯一的token, base64( time + rand + action) 
* 如果提交，将这个token记录，说明这个token以经使用，可以跟据它来避免重复提交。 
* 
*/ 
class GToken {
	
	const ENCRYPT_KEY = "GNSSSSSSSS";  
	const SESSION_KEY_TOKEN = "gssssss";
	const SSN_KEY_TOKEN = "xdgsxxd";

/** 
* 得到当前所有的token 
* 
* @return array 
*/ 
public static function getTokens(){ 
	$tokens = $_SESSION[self::SSN_KEY_TOKEN ]; 
	if (empty($tokens) && !is_array($tokens)) { 
		$tokens = array(); 
	}
	return $tokens; 
} 

/** 
* 产生一个新的Token 
* 
* @param string $formName 
* @param 加密密钥 $key 
* @return string 
*/ 

public static function newToken($formName,$key = self::ENCRYPT_KEY){
	$token = GEncrypt::encrypt($formName.session_id(),$key); 
	return $token; 
} 

/** 
* 删除token,实际是向session 的一个数组里加入一个元素，说明这个token以经使用过，以避免数据重复提交。 
* 
* @param string $token 
*/ 
public static function dropToken($token){ 
	$tokens = self::getTokens(); 
	$tokens[] = $token;
	$_SESSION[self::SSN_KEY_TOKEN ] = $tokens; 
} 

/** 
* 检查是否为指定的Token 
* 
* @param string $token 要检查的token值 
* @param string $formName 
* @param boolean $fromCheck 是否检查来路,如果为true,会判断token中附加的session_id是否和当前session_id一至. 
* @param string $key 加密密钥 
* @return boolean 
*/ 

public static function isToken($token,$formName,$fromCheck = false,$key = self::ENCRYPT_KEY){ 
	if(empty($token)) return false; 
	$tokens = self::getTokens(); 
	if (in_array($token,$tokens)) //如果存在，说明是以使用过的token 
		return false; 

	$source = GEncrypt::decrypt($token,$key);
	self::dropToken($token); 
	if($fromCheck) 
		return $source == $formName.session_id(); 
	else{ 
		return strpos($source,$formName) === 0; 
	} 
} 

public static function getTokenKey($token,$key = self::ENCRYPT_KEY){ 
if($token == null || trim($token) == "") return false; 
$source = GEncrypt::decrypt($token,$key); 
return $source != "" ? str_replace(session_id(),"",$source) : false; 
} 

} 
?> 
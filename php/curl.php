<?php

$curl = curl_init('https://samples.openweathermap.org/data/2.5/weather?q=Bondy, FR&appid=d61065bd44750312655bf02f6a8b1f44
');

#证书保存到本地方法
/*
打开网站,点击网址左边的锁->证书->证书路径->点第一个->查看证书->详细信息->复制到文件->选base64编码
*/
curl_setopt_array($curl , [
	CURLOPT_CAINFO 				=> '证书地址.cer'# 
	CURLOPT_RETURNTRANSFER  	=> true ,
	CURLOPT_TIMEOUT  			=> 1 
]);

$data = curl_exec($curl) ;

if( $data == false )
{
	throw new CurlException($curl) ;
	
	//var_dump(curl_error($curl));
}
else
{
	if(curl_getinfo($curl , CURLINFO_HTTP_CODE) === 200 )
	{
		$data = json_decode($data , true );
		echo '<pre>';
		var_dump($data['main']['temp']);
		echo '</pre>';
	}
}
curl_close($curl) ;
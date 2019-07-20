<?php
header('Content-Type: text/plain');
include ("cf.php");

function bypassCloudF($link) {
	preg_match("/\/\/(.*?)\//",$_GET['linkf'],$filesave);
	$cookie = __DIR__ . "/CloudflareRequest/".getUserIpAddr().".$filesave[1].fast.txt";
	$cookie2 = __DIR__ . "/CloudflareRequest/".getUserIpAddr().".$filesave[1].slow.txt";
	$head = array(
		'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		'Accept-Language: en-US,en;q=0.5',
		'Accept-Encoding: deflate, b, php, html, txt',
		'Connection: keep-alive',
		'Upgrade-Insecure-Requests: 1'
	);
	$ua	= 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	curl_setopt($ch, CURLINFO_HEADER_OUT, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$h = curl_exec($ch);
	
	
	if (strpos($h, 'id="cf-dn') === false)
		$q = getClearanceLink_old($h, $link,0);
	else
		$q = getClearanceLink($h, $link,0);
	
	$cfuid = '_cfduid Not Found !';
	$cf_clearance = 'cf_clearance Not Found !';
	$c = @file_get_contents($cookie);
	if(preg_match("/__cfduid\s+[a-z0-9\-]+/",$c,$matchs)){
		$cfuid = str_replace('_cfduid	','',$matchs[0]);
		$cfuid = str_replace('_','',$cfuid);
		$cfuid = trim($cfuid);
	}
	$c2 = @file_get_contents($cookie2);
	if(preg_match("/cf_clearance\s+[a-z0-9\-]+/",$c2,$clearance)) {
		$cf_clearance = $clearance[0];
		$cf_clearance = str_replace('cfclearance ','',$cf_clearance);
		$cf_clearance = str_replace('_','',$cf_clearance);
		$cf_clearance = trim($cf_clearance);
		$cf_clearance = str_replace('cfclearance	','',$cf_clearance);
	}
	curl_setopt($ch, CURLOPT_URL, $q);
	curl_setopt($ch, CURLOPT_COOKIE, '__cfduid='.$cfuid.'; cf_clearance='.$cf_clearance.';');
	$html_page=curl_exec($ch);
	curl_close($ch);
	return ['id' => $cfuid, 'clear' => $cf_clearance, 'link_challenge' => $q, 'html' => $html_page];
}
function bypassCloudS($link) {
	preg_match("/\/\/(.*?)\//",$_GET['linkf'],$filesave);
	$cookie = __DIR__ . "/CloudflareRequest/".getUserIpAddr().".$filesave[1].slow.txt";
	$head = array(
		'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		'Accept-Language: en-US,en;q=0.5',
		'Accept-Encoding: deflate, b, php, html, txt',
		'Connection: keep-alive',
		'Upgrade-Insecure-Requests: 1'
	);
	$ua	= 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	curl_setopt($ch, CURLINFO_HEADER_OUT, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$h = curl_exec($ch);
	
	
	if (strpos($h, 'id="cf-dn') === false)
		$q = getClearanceLink_old($h, $link,3);
	else
		$q = getClearanceLink($h, $link,3);
	
	$cfuid = '_cfduid Not Found !';
	$cf_clearance = 'cf_clearance Not Found !';
	$c = @file_get_contents($cookie);
	if(preg_match("/__cfduid\s+[a-z0-9\-]+/",$c,$matchs)){
		$cfuid = str_replace('_cfduid	','',$matchs[0]);
		$cfuid = str_replace('_','',$cfuid);
		$cfuid = trim($cfuid);
	}
	if(preg_match("/cf_clearance\s+[a-z0-9\-]+/",$c,$clearance)) {
		$cf_clearance = $clearance[0];
		$cf_clearance = str_replace('cfclearance ','',$cf_clearance);
		$cf_clearance = str_replace('_','',$cf_clearance);
		$cf_clearance = trim($cf_clearance);
		$cf_clearance = str_replace('cfclearance	','',$cf_clearance);
	}
	curl_setopt($ch, CURLOPT_URL, $q);
	curl_setopt($ch, CURLOPT_COOKIE, '__cfduid='.$cfuid.'; cf_clearance='.$cf_clearance.';');
	$html_page=curl_exec($ch);
	curl_close($ch);
	return ['id' => $cfuid, 'clear' => $cf_clearance, 'link_challenge' => $q, 'html' => $html_page];
}
function bypassVer($link){
	$ver=bypassCloudF($link);
	if(strpos($ver['html'],"Just a moment")){
		return bypassCloudS($link);
	}else{
		return $ver;
	}
}
function getUserIpAddr(){
    return $_SERVER['REMOTE_ADDR'];
}
$target = bypassVer($_GET['linkf']);
echo $target['html'];
<?php
	//从文件中读取，找出字符出现的行数及字符位置，空格不计字符数
	$handle=fopen('../test/file.txt','r') or die('file open error');
	$contents='';
	$count=0;
	$search='楚小天';
	$search=utf8_str_split($search);
	$search_len=count($search)-1;
	while(!feof($handle)){
		$count++;
		$contents=fgets($handle);
		$contents=str_replace(array("\r\n","\r","\n"," "),'',$contents);
		$contents=utf8_str_split($contents);
		foreach($contents as $k=>$v){
			//echo $v,'(',$k,')';
			if($v==$search[0]){
				if($contents[$k+$search_len]==$search[$search_len]){
					for($i=1;$i<$search_len;$i++){
						if($contents[$k+$i]!=$search[$i]) break 2;
					}
					//因为数组索引从0开始，所以字符位置应为索引+1
					$save[$count][]=$k+1;
				}
			}
		}
	}
	echo '字串“',implode($search),'”出现的位置有：<br>';
	foreach($save as $k=>$v){
		echo '第',$k,'行，第',implode('和',$v),'个字符<br>';
	}
	
	/*
	//整段文字内检索字串出现位置，空格不计字符数
	$contents=file_get_contents('./file.txt');
	$contents=str_replace(array("\r\n","\r","\n"," "),'',$contents);
	$contents=utf8_str_split($contents);
	$search='楚小天';
	$search=utf8_str_split($search);
	$search_len=count($search)-1;
	$save=array();
	foreach($contents as $k=>$v){
		//echo $v,'(',$k,')';
		if($v==$search[0]){
			if($contents[$k+$search_len]==$search[$search_len]){
				for($i=1;$i<$search_len;$i++){
					if($contents[$k+$i]!=$search[$i]) break 2;
				}
				//因为数组索引从0开始，所以字符位置应为索引+1
				$save[]=$k+1;
			}
		}
	}
	echo '字串“',implode($search),'”出现的位置有：<br>',implode('<br>',$save);
	*/

	//UTF8字符的分割方法
	function utf8_str_split($str, $split_len = 1){
		if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
			return FALSE;
		$len = mb_strlen($str, 'UTF-8');
		if ($len <= $split_len)
			return array($str);
		preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);
		return $ar[0];
	}
?>
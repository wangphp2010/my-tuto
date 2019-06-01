<?php
$encrypt_key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890=%!()[]{};?.";
 $arrd=str_split($encrypt_key,1);
print_r($arrd);

shuffle($arrd);

print_r($arrd);

$decrypt_key=implode("",$arrd);
echo '*******************************<br ><br >';
echo $decrypt_key.'------------$decrypt_key解密<br ><br >';
 echo strlen($encrypt_key).'加密数量<br ><br >-';
 echo strlen($decrypt_key).'解密数量<br><br >';

 
?>
 
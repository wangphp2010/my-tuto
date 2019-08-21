<?php
/*
password_hash：对密码进行hash，得到散列值
password_verify：对输入的密码进行校验，判断是否正确
password_get_info：获取生成的hash值的信息，包括加密算法，相关加密参数等
password_needs_rehash：检查一个hash值是否是使用特定算法及选项创建的

*/

$hash = password_hash('v6' , PASSWORD_DEFAULT,['cost'=>10]);
var_dump($hash);

var_dump(password_verify( "v6" , $hash ) );
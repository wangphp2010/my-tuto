<?php
function calc($m,$n,$x){
    $errors=array(
        '被除数不能为零',
        '负数没有平方根'
    );//www.Qsyz.net 
    switch($x){
        case 'add':
            $t=bcadd($m,$n);
            break;
        case 'sub':
            $t=bcsub($m,$n);
            break;
        case 'mul':
            $t=bcmul($m,$n);
            break;
        case 'div':
            if($n!=0){
                $t=bcdiv($m,$n);
            }else{
                return $errors[0];
            }
            break;
        case 'pow':
            $t=bcpow($m,$n);
            break;
        case 'mod':
            if($n!=0){
                $t=bcmod($m,$n);
            }else{
                return $errors[0];
            }
            break;
        case 'sqrt':
            if($m>=0){
                $t=bcsqrt($m);
            }else{
                return $errors[1];
            }
            break;
    }
    $t=preg_replace("/\..*0+$/",'',$t);
    return $t;
}
?>
使用方法:
calc(参数1参数2,参数3);
参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根
加减乖除:参数1 加上/减去/乘以/除以 参数2
幂:参数1 的 参数2 次方.
模:参数1 除以 参数2 得到的余数.
算术平方根:求 参数1 的算术平方根.参数2不起作用,但不能省略.
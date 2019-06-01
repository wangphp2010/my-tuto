<?php
header("content-type:text/html;charset=utf-8");
//如果不是UTF-8编码请删除上面这句.
date_default_timezone_set("PRC");
echo '<div id="time"></div>
<script type="text/javascript">
        function $(o){
            return document.getElementById(o);
        }
        var ts='.(round(microtime(true)*1000))./*本代码由www.Qsyz.net 提供*/';
        function getTime(){
            var t=new Date(ts);
            with(t){
                var _time="现在是:"+getFullYear()+"-" + (getMonth()+1)+"-"+getDate()+" " + (getHours()<10 ? "0" :"") + getHours() + ":" + (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + (getSeconds()<10 ? "0" :"") + getSeconds();
            }
            $("time").innerHTML=_time;
            setTimeout("getTime()",1000);
            ts+=1000;
        }
        getTime();
</script>';
?>
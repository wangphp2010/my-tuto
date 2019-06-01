<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>HTML5无刷修改url - 琼台博客</title>
        <script type="text/javascript">
            function changeURL(){
                var url = document.getElementById('url').value;
                // window.history.pushState({},0,'http://'+window.location.host+'/'+url);      
                window.history.pushState({},0, url);      
            }
 
        </script> 
    </head>
    <body>
        <h1>html5无刷新改变url</h1>
        <div id="info" style="margin:30px 0;">
            页面真实地址:
            <span style="color:red;"><script type="text/javascript">document.write(window.location.href);</script></span>
        </div>
        <div>
        请输入要改变地URL字符串：<input id='url' type="text"  value='http://localhost/2.php'/>
        <button onclick="changeURL();">点击无刷改变url</button>
        </div>
        <div style="color:red;margin-top:30px;">请使用支持html5的浏览器访问</div>
        <div style="margin-top:30px;"><a href="http://www.qttc.net/201303292.html" target="_blank">《html5无刷新改变URL》</a> - 琼台博客</div>
    </body>
 
</html>
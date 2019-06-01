<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>HTML5无刷修改url - 琼台博客</title>
    <script type="text/javascript">
    var changeURL = function(){
         
        if(location.href.indexOf("?") > -1){
            var arr = location.href.split('?');
            var urlbase = arr[0];
            var pageObj = arr[1].match(/page=(\d+)/);
            var page = Number(pageObj[1]) || 1;
        }else{
            var urlbase = location.href;
            var page = 1;
        }
 
        load = false;
        var content = document.getElementById("content");   
        var ajax = new XMLHttpRequest();
 
        // 调用数据回掉函数
        var ajaxCallback = function(){
            if(ajax.readyState == 4){
                load = false;
                result = eval('('+ajax.responseText+')');
                content.innerHTML = result.data;
                next.href = urlbase + "?page=" + (page + 1);
 
                // push到历史记录里，可以在点击后退时从历史记录里恢复内容
                // 并且无刷修改url地址
                window.history.pushState({content:content.innerHTML,page:page},page,urlbase + "?page=" + page);
            }
        };
 
        // 点击事件
        document.getElementById('next').onclick = function(event){
            if(!load){
                load = true;
                content.innerHTML = '加载中数据中...(注意看数据返回后url改变)';
                page++;
                ajax.open('GET','shuju.php?page='+page, true);
                ajax.onreadystatechange = ajaxCallback;
                ajax.send('');
                return false;
            }
        };
 
 
        // 记录到历史里，当点击后退按钮还退回上次页面请求前的页面内容
        window.onpopstate = function(){
            content.innerHTML = history.state.content;
            page = history.state.page;              
        }
 
        // 修改当前页面在 history 中的记录
        window.history.replaceState({content:content.innerHTML,page:page},page,urlbase + (page > 1 ? '?page=' + page : '' ));
    };
 
    // 检测是否支持
    try{
        //监听事件
        window.addEventListener('DOMContentLoaded', changeURL, false);
    }catch(e){
        alert('浏览器不支持，请使用支持html5的浏览器'); 
    }
 
    </script>
    </head>
    <body>
        <div id="content" style="width:300px;height:100px;border:1px solid #999;">第1页的内容</div>
        <div><a id="next" href="?page=2">下一页</a></div>
         
        <div style="color:red; margin-top:30px;">请使用支持html5的浏览器测试</div>
        <div><a href="http://www.qttc.net">xxx</a></div>
    </body>
</html>
var bloghost = "http://www.shixinke.com/";
var cookiespath = "/";
var ajaxurl = "http://www.shixinke.com/zb_system/cmd.php?act=ajax&src=";
var lang_comment_name_error = "名称不能为空或格式不正确";
var lang_comment_email_error = "邮箱格式不正确，可能过长或为空";
var lang_comment_content_error = "评论内容不能为空或过长";

$(function () {var $cpLogin = $(".cp-login").find("a");var $cpVrs = $(".cp-vrs").find("a");SetCookie("timezone", (new Date().getTimezoneOffset()/60)*(-1));var $addoninfo = GetCookie("addinfo");if(!$addoninfo){LoadRememberInfo();return ;}$addoninfo = eval("("+$addoninfo+")");if($addoninfo.chkadmin){$(".cp-hello").html("欢迎 " + $addoninfo.useralias + " (" + $addoninfo.levelname  + ")");if ($cpLogin.length == 1 && $cpLogin.html().indexOf("[") > -1) { $cpLogin.html("[后台管理]");} else {$cpLogin.html("后台管理");};}if($addoninfo.chkarticle){if ($cpLogin.length == 1 && $cpVrs.html().indexOf("[") > -1) {$cpVrs.html("[新建文章]"); } else {$cpVrs.html("新建文章");};$cpVrs.attr("href", bloghost + "zb_system/cmd.php?act=ArticleEdt");}});

document.writeln("<script src='http://www.shixinke.com/zb_users/plugin/UEditor/third-party/SyntaxHighlighter/shCore.pack.js' type='text/javascript'></script><link rel='stylesheet' type='text/css' href='http://www.shixinke.com/zb_users/plugin/UEditor/third-party/SyntaxHighlighter/shCoreDefault.pack.css'/>");

$(document).ready(function(){SyntaxHighlighter.highlight();for(var i=0,di;di=SyntaxHighlighter.highlightContainers[i++];){var tds = di.getElementsByTagName('td');for(var j=0,li,ri;li=tds[0].childNodes[j];j++){ri = tds[1].firstChild.childNodes[j];ri.style.height = li.style.height = ri.offsetHeight + 'px';}}});

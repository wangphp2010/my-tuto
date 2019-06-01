 

$(document).ready(function(){
var a=100;
$(".fancybox").each(function(){
	$("img",this).hide();
a=a+50;
 
$("img",this).delay(250+a).fadeIn(500)}).fancybox({helpers:{title:{type:"inner"}},margin:50,openEffect:"elastic",openEasing:"easeOutBack",closeEffect:"elastic",closeEasing:"easeInBack",});






});

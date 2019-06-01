
var FUNC=[
    function() {$("#block1").animate({left:"+=100"},aniCB);},
    function() {$("#block2").animate({left:"+=100"},aniCB);},
    function() {$("#block1").animate({left:"+=100"},aniCB);},
    function() {$("#block2").animate({left:"+=100"},aniCB);},
    function() {$("#block1").animate({left:"+=100"},aniCB);},
 ];
var aniCB=function() {
    $(document).dequeue("myAnimation");
}
$(document).queue("myAnimation",FUNC);
aniCB();

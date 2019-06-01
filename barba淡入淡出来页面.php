 <script src='tv/js/jquery-3.2.1.min.js'></script>

<script src='js/barba.min.js'></script>
 
<div id="barba-wrapper">
  <div class="barba-container">
 
	<img src="1.jpg">
	<br>
	<a href="1.php">page 1 </a>
	<a href="2.php" target="_blank">page 2 </a>
	<a href="3.php">page 3 </a>
  </div>
</div>

<script  >
	     $('document').ready(function(){
            var transEffect = Barba.BaseTransition.extend({
                start: function(){
                  this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
                },
                fadeInNewcontent: function(nc) {
                  nc.hide();
                  var _this = this;
                  $(this.oldContainer).fadeOut(300).promise().done(() => {
                    nc.css('visibility','visible');
                    nc.fadeIn(300, function(){
                      _this.done();
                    })
                  });
                }
            });
            Barba.Pjax.getTransition = function() {
              return transEffect;
            }
            Barba.Pjax.start();
          });

</script>

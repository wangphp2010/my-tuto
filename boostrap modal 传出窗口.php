 
	<title>Bootstrap 实例 - 模态框（Modal）插件</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 
 
 
 <h2>模态框（Modal）插件事件</h2>

<!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   开始演示模态框
</button>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               模态框（Modal）标题
            </h4>
         </div>
         <div class="modal-body">
            点击关闭按钮检查事件功能。
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default"
               data-dismiss="modal">
               关闭
            </button>
            <button type="button" class="btn btn-primary" id='custom-close'>
               提交更改
            </button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
   $(function () { $('#myModal').modal('hide')})});
</script>
<script>
   $(function () { $('#myModal').on('hide.bs.modal', function () {
      alert('嘿，我听说您喜欢模态框...');})
   });
   
   $(function () {  
    $("#custom-close").on('click', function() {  
        $('#myModal').modal('hide');  
    });  
});


</script>


以下可拖动

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BootStrap Modal</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
	<script src="//cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.js"></script>
</head>
<body>
	<button class="btn btn-default">显示Modal</button>
 
	<div class="modal fade" id="myModal" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>One fine body&hellip;</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
			<!-- /.modal-content -->	
		</div>
		<!-- /.modal-dialog -->	
	</div>
	<!-- /.modal -->
<script type="text/javascript">
		var $button = $('.btn-default'),
			$modal = $('#myModal');
		$(function(){
			$button.on('click',function(event) {
				event.preventDefault();
				/* Act on the event */
				$modal.show(
					'300',
					function() {
						var modal = $(this);
						modal.find('.modal-title').text('New message to ');
						$.ajax({});
				});
				/* 完成拖拽 */
				$modal.draggable({
					cursor: "move",
					handle: '.modal-header'
				});
				$modal.modal('show');
			});
		});
	</script>
 
</body>
</html>
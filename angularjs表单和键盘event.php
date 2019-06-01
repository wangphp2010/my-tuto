 <meta charset="utf-8">
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  ></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
 
 <style>.help-block{color:red}</style>
 <body  style="padding:10px;" ng-app="myApp" ng-controller="myController">

<div class="container">
<div class="col-md-6 col-md-offset-3">
 
    <!-- PAGE TITLE -->
    <div class="page-header">
        <h1><span class="glyphicon glyphicon-tower"></span> Submitting Forms with Angular</h1>
    </div>
 
    <!-- SHOW ERROR/SUCCESS MESSAGES -->
    <div id="messages"></div>
 
    <!-- FORM -->
    <form name="myForm"  ng-model="myForm"  ng-submit="submitForm(myForm.$valid)" novalidate    onkeydown="if(event.keyCode==13){return false;}" action="" enctype="multipart/form-data" method="post"  >
        <!-- NAME -->
        <div id="name-group" class="form-group">
            <label>Name</label>
            <input type="text" name="user" class="form-control"  ng-model="user" required  placeholder="Bruce Wayne">
             
             <span class="help-block" ng-show=" myForm.user.$error.required && submitted   ">
   用户名是必须的
  </span>
         </div>
 
      
         <div id="email-group" class="form-group">
            <label>email</label>
            <input type="email" name="email" class="form-control"  ng-model="email" required  placeholder="xx@xx.com"      >
		    <span ng-show="myForm.email.$invalid  " class="help-block" >非法的邮箱。</span>

             <span ng-show="myForm.email.$error.required && submitted " class="help-block" >email是必须的。</span>
             <span ng-show="myForm.email.$error.email   " class="help-block" >邮箱格式错误。</span>
  ng-pattern="/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/"  
         </div>
		 
		  <div id="email-group" class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control"  ng-model="password" required   >
             <span ng-show="myForm.password.$error.required && submitted " class="help-block" >密码是必须的。</span>
 
         </div>
 
         <div  class="form-group">
            <label>password repeat</label>
            <input type="password" name="repassword" class="form-control"  ng-model="repassword" required   >
             <span ng-show="myForm.repassword.$error.required && submitted " class="help-block" >密码是必须的。</span>
             <span ng-show="(myForm.repassword != myForm.password) && submitted " class="help-block" >密码必须的相同</span>
 
         </div>
		 
		 
		 
		 
		  <div  class="form-group">
            <label>birthday</label>
            <input type="text" name="birthday" class="form-control"  ng-model="birthday" required ng-keyup="keyup($event)" placeholder="xx/xx/xxxx"  maxlength="10"  >
			<br>
            <input type="text" name="birthdays" class="form-control"  ng-model="birthdays" required   value="{{birthday}}" >
			{{birthday}} - {{birthdays}}
         </div>
		 
		 
 
        <!-- SUBMIT BUTTON -->
        <button type="submit"   name="submit"    class="btn btn-success btn-lg btn-block"  >
            <span class="glyphicon glyphicon-flash"></span> Submit!
        </button>
 
    </form>
	<script>
	var app = angular.module('myApp', []);
    app.controller('myController', function($scope) {
	$scope.submitted=false;
 
	$scope.submitForm=function()
	{
    $scope.submitted=true;	
  // alert($scope.myForm.$invalid);
 
	}
	$scope.keyup= function($event)
	{
 		if($event.keyCode!=8){
  	$scope.birthday=$scope.birthday.replace(/[^\/0-9]/g,"",$scope.birthday);
 	$scope.birthday=$scope.birthday.replace(/\/\//g,"/",$scope.birthday);
 	$scope.birthday = $scope.birthday .replace(/(?=^)(\d\d)(?=$)/,"$1/",$scope.birthday);
 	$scope.birthday = $scope.birthday .replace(/(?=^)(\d\d\/\d\d)(?=$)/,"$1/",$scope.birthday);
 
 	$scope.birthdays = $scope.birthday ; 	
	}
		
	}
 	
    });
	$(function(){
		
	$("input").keydown(function(event){
 alert(event.which);
});
	});
	</script>
    <span>{{ myForm.user.$touched}}</span>
</div>
</div>

</body>
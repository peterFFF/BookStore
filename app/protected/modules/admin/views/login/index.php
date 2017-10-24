<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="<?php echo ROOT?>/css/login.css" 	type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo ROOT?>/js/jquery.js"></script>
	<script type="text/javascript">
		function checkUser(){
			var userVal=$("#username").val();
			var reg=/[\'"](.*?)[\'"]*/;
			if(userVal==""){
				$("#username").focus();
				$("#username").val("用户名不能为空");
			}
			if(reg.test(userVal)){
				$("#username").focus();
				$("#username").val("非法输入");
			}
			if(userVal=="非法输入"){
				$("#username").focus();
				$("#username").val("非法输入");
			}
			if(userVal.length>14||userVal.length<3){
				$("#username").focus();
				$("#username").val("用户名长度为3~14位字符");
			}
		};
		$(function(){
			$("#username").blur(function(){
				return checkUser();
			})
			$("#username").click(function(){
				$("#username").val("");
			})

		})
	</script>
</head>
<body>
<div class="lg-container">
	<h1>Admin Area</h1>
	<form action="<?php echo APP?>/admin/login/login" id="lg-form" name="lg-form" method="post">

		<div>
			<label for="username">Username:</label>
			<input type="text" name="userName" id="username" placeholder="username"/>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="password" />
		</div>

		<div>
			<button type="submit" id="login">Login</button>
		</div>

	</form>
	<div id="message"></div>
</div>
</body>
</html>
<?php
 /* compiled by (WeePHP) at (2017-12-21 11:22:14) */
?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>管理登录 - $this->data['$1'] $this->data['$1']</title>

	<!--- CSS --->
	<link rel="stylesheet" href="images/css/style.css" type="text/css" />
	<script type="text/javascript" src="images/js/yzmm.js"></script>


	<!--- Javascript libraries (jQuery and Selectivizr) used for the custom checkbox --->

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="images/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="images/js/selectivizr.js"></script>
		<noscript><link rel="stylesheet" href="images/css/fallback.css" /></noscript>
	<![endif]-->
	
	<script>
function loginok(form){
	
	if (form.login_name.value==""){
		alert("用户名不能为空！");
		form.login_name.focus();
		return (false);
	}else if (form.login_pwd.value==""){
		alert("密码不能为空！");
		form.login_pwd.focus();
		return (false);
	}else if (form.login_yzm.value==""){
		alert("验证码不能为空！");
		form.login_yzm.focus();
		return (false);
	}else{
		
			var inputCode = document.getElementById("login_yzm").value.toUpperCase();

			if(inputCode.length <=0) {
			alert("请输入验证码！");
			return false;
}
			else if(inputCode != code ){
				alert("验证码输入错误！");
				createCode();
				return false;
}
			else {
  
				return true;
}

	}
	

	
	
	
	
}
if(self!=top){
	top.location=self.location;
}
</script>



	</head>

	<body onload="createCode();">
		<div id="container">
			<form action="?c=Main&a=login" method="post" name="gxcms" onsubmit="return loginok(this)">
				<div class="login">IMGCMS-后台程序登录</div>
				<div class="username-text">姓名:</div>
				<div class="password-text">密码:</div>
				<div class="username-field">
					<input type="text" name="name" id="login_name"  value="" />
				</div>
				<div class="password-field">
					<input type="password" name="password" id="login_pwd" value="" />
				</div>
				<div class="yanzheng-field">
					<input type="text" name="yzmm" id="login_yzm" onfocus='clearr(this)'  value="请输入验证码" />
				</div>
				<div class="yanzheng-fieldd" ;><div class="yzm" id="checkCode" onclick="createCode()" ></div></div>
				<input name="submit" type="submit" value=" 登入" class="input" />
				<input name="post" type="hidden" value="true" class="input" />
			</form>
		</div>
		<div id="footer">
			Powered By IMGCMS 官方网站：<a href="http://www.imgcms.com" target="_blank"><font color=red >WWW.IMGCMS.COM</font></a> <br/>官方Q群：<font color=red >198819459</font> 欢迎加入支持我们！
		</div>

</body>
</html>
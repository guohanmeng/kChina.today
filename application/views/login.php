<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>kChina</title>
	<link rel="stylesheet" id="dashicons-css" href="/css/color.css?ver=<?php echo CSS_VERSION?>" type="text/css" media="all"/>
	<script type="text/javascript" src="js/jquery.min.js?var=<?php echo JS_VERSION ?>"></script>
	<script src="/js/less.min.js?var=<?php echo JS_VERSION ?>"></script>
	<script type="text/javascript" src="js/kc_login.js?var=<?php echo JS_VERSION ?>"></script>

</head>
<body class="login">
	<div id="header">
		<div class="login">
			<h1>kChina.today</h1>
			<form name="loginform" id="loginform" action="/login/kc_login" method="post" onsubmit="return kc_login_form(this);">
				<div class="login_input">
					<p>
						<bookmark-label for='user_login'>用户名：<input class="input" type="text" name='login' size='20'></input></bookmark-label>
					</p>
					<p>
						<bookmark-label for='user_pass'>密码 ：<input class="input" type="password" name="pwd" size='20'></input></bookmark-label>
					</p>
					<p>
						<input class="submit" type="submit" name="submit" value="登录">
						<input type="hidden" name="redirect_to" value="http://www.kchina.today">
						<input type="hidden" name="textcookie" value="1">
					</p>
				</div>
			</form>
		</div>

	</div>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<title>欢迎来到管理员登陆</title>
<link href="instyle/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<script src="/style/jq.js"></script>
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="instyle/js/jquery.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>管理员登录</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form action="index.php?r=welcome/show" method="post">
			<li>
				<input type="text" class="text" name="username"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="password"> <a href="#" class="icon lock"></a>
			</li>
			<li>

				<input type="text" name="code" style="width:100px;"><img id="captcha_img" border='1' src='/style/captcha.php?r=echo rand(); ?>' style="width:150px; height:40px" onclick="document.getElementById('captcha_img').src='/style/captcha.php?r='+Math.random()"/>
			</li>
			
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" value="登录" >
				<h4><a href="#">忘记密码 ？</a></h4>
						  <div class="clear">  </div>	
			</div>
		
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
	<script>
	function changing(){
    	document.getElementById('captcha_img').src="/style/captcha.php?"+Math.random();
	} 
	</script>
<!--- footer --->
<div class="footer">
	<p>Copyright &copy; 2017.</p>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
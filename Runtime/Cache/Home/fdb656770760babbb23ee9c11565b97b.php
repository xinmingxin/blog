<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Trendz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/blog/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/blog/Public/css/style.css" rel='stylesheet' type='text/css' />	
<script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"> </script>
<!--webfonts-->
<!--  <link href='http://fonts.useso.com/css?family=Raleway:400,100,200,300,500,600,700|Cinzel+Decorative:400,700' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
</head>
<body>
	<!--start-home-->
	<div class="full">
		<span class="menu"></span>
			<div class="navbar">
				 <a class="menu" href="#"><i class="icon-align-justify">
				 </i></a>
				 <a class="link hme" href="index.html">
					<span class="active"><span class="valign"><span class="vertical">首页</span></span></span>
					<span class="hover"><span class="valign"><span class="vertical">首页</span></span></span>
				  </a>
				   <a class="link con" href="contact.html">
					<span class="active"><span class="valign"><span class="vertical">联系我</span></span></span>
					<span class="hover"><span class="valign"><span class="vertical">联系我</span></span></span>
				  </a>
				  <a class="link con" href="about.html">
					<span class="active"><span class="valign"><span class="vertical">关于</span></span></span>
					<span class="hover"><span class="valign"><span class="vertical">关于</span></span></span>
				  </a>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".navbar" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!--main-->
			<div class="main">
				<div id="home" class="header two">
					<div class="header-top">
						<div class="container">
							<div class="logo.two">
								<a href="<?php echo U('/Home/Index');?>"><h1>我的博客</h1></a>
							</div>
						</div>
						</div>
					</div>
			<div class="contact">
				<div class="second-head">
						<h3>联系我</h3>
						
				</div>
				<div class="contact-form">
					<div class="col-md-6 contact-grid">
						<h3>提交建议</h3>
					<form action="<?php echo U('suggest');?>" method="post" accept-charset="utf-8">
						<p class="your-para">您的邮箱:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">您的名字:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">您的建议:</p>
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
						<div class="send">
							<input type="submit" value="发送" >
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-in">
					<h3>联系信息</h3>
					<br><br>
					<p>如果您想了解本站的相关情况;如果您对本站的网页设计等方面有很好的建议和意见;如果您在浏览过程中发现了错误的链接;欢迎您通过以下方式跟我取得联系:</p>
					<p class="sed-para"> （提示：为了防止垃圾邮件，我们在此将@用#来代替了。您发邮件时，千万不要忘了将#替换成@，谢谢！）
					</p>
					<br><br><br>
					<div class="address-left">
							<p>电话:15966830123</p>
							<p>网址:www.xinmingxin.win</p>
							<p><a href="mailto:mingxinhappy@gmail.com">邮箱:mingxinhappy#gmail.com
							</a></p>
						</div>
						<div class="clearfix"> </div>
				      </div>
				</div>
				<div class="clearfix"> </div>
			   </div>

		  <div class="map">
				<iframe src="/blog/Public/map.html"></iframe>
			</div>
	</div>
			<!--/start-copyright-section-->
				<div class="copyright">
						<p class="write">Copyright &copy; 2015.Company name All rights reserved.</p>
				</div>
			</div>
		</div>

			<!--start-smoth-scrolling-->
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
				$()				
			</script>
							<!--start-smoth-scrolling-->
						
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
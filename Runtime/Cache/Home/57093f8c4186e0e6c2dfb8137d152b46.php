<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>关于</title>
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
<!-- <link href='http://fonts.useso.com/css?family=Raleway:400,100,200,300,500,600,700|Cinzel+Decorative:400,700' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
</head>
<body>
	<!--start-home-->
	<div class="full">
		<span class="menu"></span>
			<div class="navbar">
				 <a class="menu" href="#"><i class="icon-align-justify">
				 </i></a>
				 <a class="link hme" href="<?php echo U('/Home/Index');?>">
					<span class="active"><span class="valign"><span class="vertical">首页</span></span></span>
					<span class="hover"><span class="valign"><span class="vertical">首页</span></span></span>
				  </a>
				   <a class="link con" href="<?php echo U('/Home/Index/contact');?>">
					<span class="active"><span class="valign"><span class="vertical">联系我</span></span></span>
					<span class="hover"><span class="valign"><span class="vertical">联系我</span></span></span>
				  </a>
				  <a class="link con" href="<?php echo U('/Home/Index/about');?>">
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
	<!-- trends -->
	<div id="chengqilai">
		<div class="trends">
		    <div class="second-head">
				<h3>关于我</h3>
				<p>美国时代周刊2006年度年度人物 曾获08年感动中国组委会特别大奖 </p>
			</div>
		</div>
			<!-- <div class="grid">
					<figure class="effect-terry">
						<img src="/blog/Public/images/t1.jpg" alt="img16"/>
						<figcaption>
							<h2>New <span>Trendz</span></h2>
							<p>
								<a href="#"><i class="download"></i></a>
								<a href="#"><i class="heart"></i></a>
								<a href="#"><i class="share"></i></a>
								<a href="#"><i class="tag"></i></a>
							</p>
						</figcaption>			
					</figure>
					<!-- 留个图片好遍历 -->
	</div> 
				<div class="clearfix"> </div>
			</div>
			<!--/start-featured-->
			<!-- <div class="featured-section"> -->
					<!-- <div class="second-head">
							<h3></h3>
							<p></p>
					</div> -->
					<!--<div class="clearfix"> </div>
				</div>
			</div> -->
			<!--/start-bottom-->
			<!-- <div class="bottom-section">
					<div class="second-head two">
					   <h3></h3>
					   <p></p>
					</div>
			</div> -->
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
								</script>
							<!--start-smoth-scrolling-->
						
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
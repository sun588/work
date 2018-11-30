<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>登陆</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="/Public/Home/css/style.css">
	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<!-- Reponsive -->

    <link rel="shortcut icon" type="image/png" href="/Public/Home/ico/favicon-16x16.png">
  
    <!-- 新引入 -->
    <link rel="stylesheet" href="/Public/Home/css/main.css">
    <link rel="stylesheet" href="/Public/Home/css/style.css">
    <!-- end -->
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="/Public/Home/css/bootstrap/css/bootstrap.min.css">
    <link href="/Public/Home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/Home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/Public/Home/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/lib.css" rel="stylesheet">
    <link href="/Public/Home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="/Public/Home/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="/Public/Home/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/so-categories.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="/Public/Home/css/footer/footer1.css" rel="stylesheet">
    <link href="/Public/Home/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="/Public/Home/css/theme.css" rel="stylesheet">
    <link href="/Public/Home/css/responsive.css" rel="stylesheet">


</head>
<body class="header_sticky">
	<div class="boxed">

		<div class="overlay"></div>

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->

		

		<section id="header" class="header">

			<div class="top-bar" style="background-color:#222;">
	            <div class="container" style="width:1200px;color: #fff;">
	              <span style="color:#d9d7d7;line-height: 35px;">欢迎来到竞价买卖网!</span>
	              <a href=""  style="color:#d9d7d7;margin-left:15px"><span>请登录</span></a>
	              <a href=""  style="color:#d9d7d7;margin-left:15px"><span>免费注册</span></a>
	              <div class="right-sec" style="color:#d9d7d7;">
	                <ul style="margin-top: 3px;" class="baobei">
	                  <li class=""><a href="#." style="color:#d9d7d7;">我的宝贝</a>
	                      <ul class="baobei-ying">
	                          <a href=""><li style="display:block;">已买到的宝贝</li></a>
	                          <a href=""><li style="display:block;">已卖出的宝贝</li></a>
	                      </ul>
	                  </li>
	                  <li><a href="#." style="color:#d9d7d7;">收藏夹</a></li>
	                  <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/sj.png" style="margin-right:5px;"></span>手机站</a></li>
	                  <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/wx2.png" style="margin-right:5px;"></span>微信公众号 </a></li>
	                  <li><a href="#." style="color:#d9d7d7;">帮助中心 </a></li>
	                  <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/dh.png" style="margin-right:5px;"></span>网站导航</a></li>

	                </ul>
	               
	              </div>
	            </div>
	          </div>

			<div class="header-middle" style="height: 85px;">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div id="logo" class="logo" style="height: 85px;">
								<a href="index.html" title="">
									<img src="/Public/Home/images/logo.png" alt="" style=" margin-top: 20px;">
								</a>
							</div><!-- /#logo -->
						</div><!-- /.col-md-3 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header-middle -->	
		</section><!-- /#header -->

		
		<section class="flat-account background">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					   <img src="/Public/Home/image/catalog/slideshow/home1/slider-3.jpg" style="    height: 400px;">
						
					</div><!-- /.col-md-6 -->
					<div class="col-md-4">
						<div class="form-login">
							<div class="title" style="    margin-bottom: 40px;">
								<h3>登陆</h3>
							</div>
							<form action="<?php echo U('login');?>" method="post" accept-charset="utf-8">
								<div class="form-box">
									<label for="user" style="text-align: left;width: 20px;"><img src="/Public/Home/image/hy/zh.png" > </label>
									<input type="text" id="user" name="user" placeholder="输入手机号" style="width: 77%;margin: 10px;">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="password" style="text-align: left;width: 20px;"><img src="/Public/Home/image/hy/ma.png" > </label>
									<input type="text" id="password" name="password" placeholder="请输入密码" style="width: 77%;margin: 10px;">
								</div><!-- /.form-box -->
								<div class="form-box" style="text-align: center;">
									<p style="color:red; font-size: 14px;"><?php echo ($errmsg); ?></p>
								</div><!-- /.form-box -->
								<div class="form-box">
									<button type="submit" class="login" style=" margin:20px 0px;width:200px;padding: 5px 0px;color: #fff;border: 0px; background-color: #ff5e00; width: 250px;border-radius: 20px;">登陆</button><br>
									<a href="<?php echo U('retrieve');?>" title="">忘记密码</a>
									<a href="<?php echo U('register');?>" title="" style="margin-left: 20px;">免费注册 </a>
									<a href="<?php echo U('businessRegister');?>" title="" style="margin-left: 20px;">企业入驻 </a>
								</div><!-- /.form-box -->
							</form><!-- /#form-login -->
							<div>
							     其他方式登陆
							     <a href=""><img src="/Public/Home/image/hy/wee.png" style="margin-left: 20px;    width: 20px;"></a>
							     <a href=""><img src="/Public/Home/image/hy/qq.png" style="margin-left: 20px;    width: 20px;"></a>
							</div>
						</div><!-- /.form-login -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-account -->

		<section class="flat-row flat-iconbox style1 background" style="padding: 80px;">
			<div class="container" style="text-align: center;">
				<p>Copyright &copy; 2018.邢台尚进网络科技有限公司
                <!--  <a href="">Legal Statement|</a>
                 <a href=""> Terms of Service |</a>
                 <a href="">Privacy Policy |</a>
                 <a href=""> About Aladdino |</a> -->
				</p>
				
			</div><!-- /.container -->
		</section><!-- /.flat-iconbox -->

	
	</div><!-- /.boxed -->



</body>	
</html>
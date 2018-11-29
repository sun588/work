<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>忘记密码</title>
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

		
		<section class="flat-account " >
			<div class="container">
				<div class="row">
				    <div class="col-md-12 zhuce">
                         <h3 style="    text-align: center;">修改密码</h3>
				    </div>
				    <div class="col-md-12">
				        <div style="    margin-left: 25%;width: 50%; margin-top: 30px;background-color: #fff;">
				        <form action="#" method="get" id="form-retrieve" accept-charset="utf-8">
								<div class="form-box">
									<label for="phone">手机号： </label>
									<input type="text" id="phone" name="phone" placeholder="请输入你的手机号" style="margin: 10px;">
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="verify">验证码： </label>
									<input type="text" id="verify" name="verify" placeholder="请输入验证码" style="width:41%;">
									<button style="color: #fff;background-color: #ff5e00;border: 0px;line-height: 35px; width: 18%;" onclick="return getVerify()">获取验证码</button>
								</div><!-- /.form-box -->
								<div class="form-box">
									<label for="password">输入新密码： </label>
									<input type="password" id="password" name="password" placeholder="请输入你的新密码">
								<div class="form-box">
									<label for="password1">请再次输入密码： </label>
									<input type="password" id="password1" name="password1" placeholder="请输入你的新密码" >
								</div><!-- /.form-box -->
                                <!-- <div class="form-box" style="text-align: center; margin-top: 14px;">
                                    <input type="checkbox" name="" style="vertical-align: middle;width: 20px;"> <a href=""><span>我已阅读并同意协议</span></a>
                                </div> -->
								<div class="form-box buzou">
									<a href="javascript:void(0);" onclick="register()"  class="login" style="color:#fff;"><span>确认</span></a>
								</div><!-- /.form-box -->
							</form><!-- /#form-login -->
				        </div>
				    </div>	

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-account -->

		<section class="flat-row flat-iconbox style1" style="padding: 80px;">
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
<script type="text/javascript" src="/Public/Home/js/jquery-2.2.4.min.js"></script>
<script>
    function getVerify() {
        phone = $('#phone').val();
        $.post('<?php echo U("sendVerifyCode");?>',{phone:phone,retrieve:1},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    alert('验证码发送成功');
                }else {
                    alert(rs['msg']);
                }
            }else {
                alert('验证码发送失败');
            }
        })
        return false;
    }

    function register() {
        var pwd = $('#password').val();
        var pwd1 = $('#password1').val();
        var phone = $('#phone').val();
        var verify = $('#verify').val();

        if(pwd.length < 6 || pwd.length > 16){
            alert('密码名必须大于6位小于16位');
            return;
        }
        if(pwd != pwd1){
            alert('2次密码输入不一致');
            return;
        }
        $.post('<?php echo U("retrieve");?>',$('#form-retrieve').serialize(),function(rs){
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    alert('修改密码成功')
                    location.href = '<?php echo U(login);?>';
                }else {
                    alert(rs['msg']);
                }
            }else {
                alert('修改密码失败');
            }
        })
    }
</script>
</html>
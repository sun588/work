<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title></title>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png">
  
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

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}


    </style>

</head>

<body class="res layout-1 listing-page">

    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
     <!-- Header Container  -->
   <header id="header" class=" typeheader-1" style="background-color:#fff;">
    <!-- Header Top -->
    <div class="top-bar" style="background-color:#222;">
        <div class="container" style="width:1200px;color: #fff;">
            <span style="color:#d9d7d7;line-height: 35px;">欢迎来到竞价买卖网!</span>
            <?php if(empty($_SESSION['userInfo']['id'])): ?><a href="<?php echo U('Register/login');?>"  style="color:#d9d7d7;margin-left:15px"><span>请登录</span></a>
                <a href="<?php echo U('Register/register');?>"  style="color:#d9d7d7;margin-left:15px"><span>免费注册</span></a>
            <?php else: ?>
                <?php if(($_SESSION['userInfo']['accountType']) == "2"): ?><a href="<?php echo U('Businessuser/businessUser');?>"  style="color:#d9d7d7;margin-left:15px"><span>欢迎你：<?php echo ($_SESSION['userInfo']['nickname']); ?></span></a>
                <?php else: ?>
                    <a href="<?php echo U('User/user');?>"  style="color:#d9d7d7;margin-left:15px"><span>欢迎你：<?php echo ($_SESSION['userInfo']['nickname']); ?></span></a><?php endif; endif; ?>
            <div class="right-sec" style="color:#d9d7d7;">
                <ul style="margin-top: 3px;" class="baobei">
                    <li class=""><a href="#." style="color:#d9d7d7;">我的宝贝</a>
                        <ul class="baobei-ying">
                            <a href=""><li style="display:block;">已买到的宝贝</li></a>
                            <a href=""><li style="display:block;">已卖出的宝贝</li></a>
                        </ul>
                    </li>
                    <li><a href="collection.html" style="color:#d9d7d7;">收藏夹</a></li>
                    <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/sj.png" style="margin-right:5px;"></span>手机版</a></li>
                    <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/wx2.png" style="margin-right:5px;"></span>微信公众号 </a></li>
                    <li><a href="#." style="color:#d9d7d7;">购物指南 </a></li>
                    <li><a href="<?php echo U('Register/enterad');?>" style="color:#d9d7d7;">商家入驻 </a></li>
                    <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/dh.png" style="margin-right:5px;"></span>网站导航</a></li>

                </ul>

            </div>
        </div>
    </div>

    <!-- Header -->
    <header style="padding-top:40px;">
        <div class="container" >
            <div class="logo"> <a href="index.html"><img src="/Public/Home/images/logo.png" alt="" ></a> </div>
            <form action="index.php/Home/Product/product" method="get" id="searchProduct">
            <div class="search-cate" style="    float: left;">
                <input type="search" name="searchValue" placeholder="请输入您想要的商品">
                <select style="font-size: 16px;border: 0px;margin-top: 14px;width: 60px;float: left;" name="searchType">
                    <option value="1">产品</option>
                    <option value="2">型号</option>
                </select>
                <button class="submit" type="submit">询价</button>
            </div>
            </form>

            <!-- Cart Part -->
            <ul class="nav navbar-right cart-pop">
                <li class="dropdown" style="display: inline-block;"> <a href="<?php echo U('User/cart');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont"><?php echo ($headerCartCount); ?></span> <i class="fa fa-shopping-bag"></i> <strong>购物车</strong> <br>
                </a>
                    <ul class="dropdown-menu">
                        <?php if(is_array($headerCartProduct)): $i = 0; $__LIST__ = $headerCartProduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
                                <div class="media-left"> <a href="<?php echo U('User/cart');?>" class="thumb"> <img src="<?php echo ($row["pic1"]); ?>" class="img-responsive" alt="" > </a> </div>
                                <div class="media-body"> <a href="<?php echo U('User/cart');?>" class="tittle "><?php echo ($row["name"]); ?></a> <span><?php echo ($row["type"]); ?></span> </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li class="btn-cart"> <a href="<?php echo U('User/cart');?>" class="btn-round">查看更多</a> </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Nav -->
        <div class="header-bottom hidden-compact" style="margin-top: 30px;background-color: red;">
            <div class="container">
                <div class="row">

                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">

                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        商品分类
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                                <i class="fa fa-bars"></i>
                                                <span>  All Categories     </span>
                                            </button>
                                        </div>
                                        <div class="vertical-wrapper" >
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu">


                                                    <?php if(is_array($headerCategory)): $i = 0; $__LIST__ = $headerCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>

                                                                <span>
                                                                    <?php if(is_array($row["c2"])): $i = 0; $__LIST__ = $row["c2"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row2): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/product',array(c2=>$row2['id']));?>"><?php echo ($row2["name"]); ?></a> |<?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </span>
                                                                <a>
                                                                <b class="fa-angle-right"></b>
                                                                </a>

                                                            <div class="sub-menu" data-subwidth="60"  >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-sm-12">

                                                                            <div class="row">
                                                                                <div class="col-md-12 static-menu">
                                                                                    <div class="menu title-sy">
                                                                                        <ul>
                                                                                            <?php if(is_array($row["c2"])): $i = 0; $__LIST__ = $row["c2"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row2): $mod = ($i % 2 );++$i;?><li class="">
                                                                                                <a href="<?php echo U('Product/product',array(c2=>$row2['id']));?>"  class="main-menu"><?php echo ($row2["name"]); ?></a>
                                                                                                <ul class="erji">
                                                                                                    <?php if(is_array($row2["c3"])): $i = 0; $__LIST__ = $row2["c3"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row3): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/product',array(c3=>$row3['id']));?>"><?php echo ($row3["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                                </ul>
                                                                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <!--头部栏目-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <!--common header-->
                    <!-- Main menu -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="<?php echo U('Index/index');?>">首页 </a>

                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?php echo U('Product/product',array('column6'=>1));?>" class="clearfix">
                                                            <strong>精品推荐</strong>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?php echo U('Product/product',array('column7'=>1));?>" class="clearfix">
                                                            <strong>智能潮货</strong>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?php echo U('Product/product',array('column8'=>1));?>" class="clearfix">
                                                            <strong>家用电器</strong>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="<?php echo U('Product/product',array('column9'=>1));?>" class="clearfix">
                                                            <strong>品牌汽车</strong>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                    <div class="bottom3">


                    </div>

                </div>
            </div>

        </div>
    </header>
    <!-- //Header center -->
</header>
    <!-- //Header Container  -->

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i>首页1</a></li>
			<li><a href="category-one.html">商家入驻</a></li>
		</ul>
		<div row>
      <div class="col-md-12">
          <div class="joinin-index-step suspension-step">
            <span class="step">
              <a href="#ruzhu">
              <img src="/Public/Home/image/hy/lc.png"><br>
                入驻流程</a>
            </span>
            <span class="step">
              <a href="#biaozui">
              <img src="/Public/Home/image/hy/bz.png"><br>
              入驻标准</a>
            </span>
            <span class="step">
              <a href="#biaozui">
              <img src="/Public/Home/image/hy/zhizi.png"><br>
              公司资质要求</a>
            </span>
            <span class="step">
              <a href="#biaozui">
              <img src="/Public/Home/image/hy/pinpai.png"><br>
              品牌资质要求</a>
            </span>
            <span class="step">
              <a href="#hezuo">
              <img src="/Public/Home/image/hy/hez.png"><br>
              合作细则</a>
            </span>
            <span class="step">
              <a href="#yihezuo">
              <img src="/Public/Home/image/hy/ruz.png"><br>
              立即入驻</a>
            </span>
            <!-- <div class="item-l2">
              <a href="http://33hao.user.wzsite.com/index.php?act=store_joinin&op=step0" class="login">
              立即入驻<i></i></a>
            </div> -->
          </div>

         <div class="enter-ad enter-ad-img">
            <img src="/Public/Home/image/hy/youshi.png">
         </div>
          <ul class="advantage-list">
            <li class="list-item item-leader shake shake-slow">
              <p class="item-number"><span>01</span></p>
              <p class="item-logo"><i class="logo_1"></i></p>
              <div class="item-text">
                  <p class="title">行业领先</p>
                  <p class="t-eng">INDUSTRY LEADING</p>
                  <p class="line"></p>
                  <p class="text-1">国内首创，行业领先</p>
                  <p class="text-2">在国内首批创立综合销售这一独特商业模式</p>
                  <p class="text-3">创始初期即与拥有千万级活跃用户</p>
                  <p class="text-4">垂直综合平台-成为合作伙伴</p>
              </div>
            </li>
            <li class="list-item item-user shake shake-slow">
              <p class="item-number"><span>02</span></p>
              <p class="item-logo"><i class="logo_2"></i></p>
              <div class="item-text">
                  <p class="title">庞大的用户群</p>
                  <p class="t-eng">LARGE USER BASE</p>
                  <p class="line"></p>
                  <p class="text-1">庞大的用户群</p>
                  <p class="text-2">线上线下媒体深度合作万千网友的信赖</p>
                  <p class="text-3">携手竞价买卖网</p>
                  <p class="text-4">深耕以销售用户为基础的综合市场</p>
              </div>
            </li>
            <li class="list-item item-team shake shake-slow">
              <p class="item-number"><span>03</span></p>
              <p class="item-logo"><i class="logo_3"></i></p>
              <div class="item-text">
                  <p class="title">专业团队</p>
                  <p class="t-eng">PROFESSIONAL TEAM</p>
                  <p class="line"></p>
                  <p class="text-1">专业店铺管家</p>
                  <p class="text-2">专业招商团队，一对一服务</p>
                  <p class="text-4">清晰申请流程，高效的审核制度</p>
              </div>
            </li>
            <li class="list-item item-cost shake shake-slow">
              <p class="item-number"><span>04</span></p>
              <p class="item-logo"><i class="logo_4"></i></p>
              <div class="item-text">
                  <p class="title">零风险低成本</p>
                  <p class="t-eng">ZERO RISK AND LOW COST</p>
                  <p class="line"></p>
                  <p class="text-1">0佣金，助你实现0库存</p>
                  <p class="text-2">暂不收取商品销售佣金</p>
                  <p class="text-3">独特销售模式为你实现0库存</p>
              </div>
            </li>
          </ul>
      </div>
    </div> <!-- row end -->
        	<!--Middle Part End-->
  </div>
 </div>
	<!-- //Main Container -->
  <div  class="wrapper-fluid banners-effect-5" style="background-color: #feeee4;" id="ruzhu">
     <div class="main-container container">
         <div class="row">
             <div class="col-md-12">
                <div class="enter-ad">
                    <div class="right">
                        <div class="settled"> <div class="left"><i class="i_1"></i><p>入驻流程</p> <p class="eng">PROCESS</p><span class="span_1"></span></div>

                        <div class="right">
                          <ul class="right-top">
                              <li class="single">
                                      <p class="first" style="    line-height: 20px;">
                                              了解入驻相关要求
                                      </p>
                              </li>
                              <li class="double">
                                      <span>入驻标准</span> 
                              </li>
                              <li class="single">
                                      <p>
                                              入驻申请
                                      </p>
                              </li>
                              <li class="double">
                                      <span>马上入驻</span> 
                              </li>
                              <li class="single">
                                      <p>
                                              等待审核
                                      </p>
                              </li>
                              <li class="double">
                                      <span>查看审核进度</span> 
                              </li>
                              <li class="single">
                                      <p>
                                              入驻成功
                                      </p>
                              </li>
                          </ul>
                          <div class="t-1">
                              <p class="title">
                                      注册本站账号
                              </p>
                              <p>
                                      点击网站右上方的“免费注册”按钮进行注册，成为本站会员
                              </p>
                          </div>
                          <div class="bg-icon">
                          </div>
                          <div class="t-2">
                              <p class="title">
                                      基本资料填写
                              </p>
                              <p>
                                      进入“商家中心”，点击“立即入驻”即可进行资料填写
                              </p>
                          </div>
                          <div class="bg-icon">
                          </div>
                          <div class="t-3">
                              <p class="title">
                                      资质证明上传
                              </p>
                              <p>
                                      将营业执照原件的彩色扫描件（或彩照形式）及盖公章的申请人身份证正反面复印件上传
                              </p>
                          </div>
                          <div class="bg-icon">
                          </div>
                          <div class="t-4">
                              <p class="title">
                                      等候审核
                              </p>
                              <p>
                                      本站会在3个工作日内审核您的入驻申请
                              </p>
                          </div>
                          <div class="bg-icon">
                          </div>
                          <div class="t-5">
                              <p class="title">
                                      签署协议
                              </p>
                              <p>
                                      审核通过后即可在线签署《竞价买卖网商城协议》
                              </p>
                          </div>
                          <div class="bg-icon">
                          </div>
                          <div class="t-6">
                              <p class="title">
                                      提交保证金
                              </p>
                              <p>
                                      商家在活动上线前须交纳 ¥10000 元商品质量和服务保证金
                              </p>
                              <p>
                                      数码类目商家保证金为 ¥50000（等其他类目
                              </p>
                              <p>
                                      $8500，手续费需自行承担）
                              </p>
                          </div>
                        </div>
                     </div>
                  </div>

                </div>
            </div>  <!--  col-md-12-->  
        </div><!-- row end -->
     </div><!-- container -->
  </div><!--Middle Part End-->
	<div  class="wrapper-fluid banners-effect-5" style="    background-color: #e4f9f1;" id="biaozui">
     <div class="main-container container">
         <div class="row">
              <div class="col-md-12">
                  <div class="enter-ad">
                      <div class="stand">
                      <div class="left"><i class="i_2"></i> <p>招商标准</p><p class="eng">STANDARD</p><span class="span_2"></span> 
                      </div>
                       <div class="right"><div class="text">
                            <p style="line-height: 120px;">
                              <span>1</span>商家需具有一般纳税人或者小额纳税人资质；注册资本50万元及以上。
                            </p>
                          </div>
                          <div class="text">
                            <p class="more" style="line-height: 120px;">
                              <span>2</span>我们接受各行业有一定知名度的品牌入驻，入驻企业须是品牌所有者或授权渠道商，并且确保所提供的商品
                                    为品牌正品，价格足够有竞争力。
                            </p>
                          </div>
                          <div class="text">
                            <span>3</span>入驻商家经营类目需是以下类目的一种或几种 <span class="sign">汽车</span> <span class="sign">大家电</span> <span class="sign">电器</span> <span class="sign">数码</span> <span class="sign">办公</span> 
                          </div>
                          <div class="text last-text">
                            <p style="line-height: 120px;">
                              <span>4</span>入驻商家成立时间需大于1年，即商家营业执照有效期起始时间至商家提交入驻审核时间大于1年。
                            </p>
                          </div>
                          <div class="c-request">
                            <div class="title">
                              <span></span>公司资质要求
                            </div>
                            <table>
                              <tbody>
                                <tr>
                                  <td class="col1">
                                    证件名称
                                  </td>
                                  <td>
                                    资质要求
                                  </td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td class="col1">
                                    1.营业执照
                                  </td>
                                  <td>
                                    必须具有法人资格，如为分支机构不具有法人资格的需提供总公司营业执照及其授权书；
                                              完成有效年检，复印件需加盖公司公章。<a class="showImg" href="denied:javascript:;">查看样例&gt;</a> 
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    2.税务登记证
                                  </td>
                                  <td>
                                    国税、地税均可，复印件需加盖公司公章。<a class="showImg" href="denied:javascript:;">查看样例&gt;</a> 
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    3.组织机构代码证
                                  </td>
                                  <td>
                                    复印件需加盖公司公章。<a class="showImg" href="denied:javascript:;">查看样例&gt;</a> 
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    4.法人身份证
                                  </td>
                                  <td>
                                    需提供法人正反面身份证扫描件或复印件，并加盖公司公章。<a class="showImg" href="denied:javascript:;">查看样例&gt;</a> 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="b-request">
                            <div class="title">
                              <span></span>品牌资质要求
                            </div>
                            <table>
                              <tbody>
                                <tr>
                                  <td class="col1">
                                    证件名称
                                  </td>
                                  <td>
                                    资质要求
                                  </td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td class="col1">
                                    1.商标注册证
                                  </td>
                                  <td>
                                    需提供有效期内的商标注册证，仅接受R标。
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    2.品牌授权书
                                  </td>
                                  <td>
                                    若品牌申请人为代理商，需提供满足以下条件的品牌授权书：
                                    <p>
                                      (1) 需授权在本站销售
                                    </p>
                                    <p>
                                      (2) 授权书需注明授权期限、落款
                                    </p>
                                    <p>
                                      (3) 若商标注册人是个人，需提供商标注册人身份证正反面复印件
                                    </p>
                                    <p>
                                      (4) 需要确保授权链条的完整，即申请入驻企业拿到的授权能够逐级逆推回品牌商。
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    3.质检报告或3C认证证书
                                  </td>
                                  <td>
                                    每个品牌须提供一份由权威质检机构出具的最近2年内的质检报告
                          或者有效期内的3C认证证书。<a class="showImg" href="denied:javascript:;">查看详细说明&gt;</a> 
                                  </td>
                                </tr>
                                <tr>
                                  <td class="col1">
                                    4.报关单和检验检疫证明
                                  </td>
                                  <td>
                                    若为进口产品，须提交近一年内海关进口报关单和检验检疫合格证明
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                       </div>
                     </div>
                  </div>
              </div>
         </div><!-- row end -->
      </div><!-- container -->
  </div><!--Middle Part End-->

  <div  class="wrapper-fluid banners-effect-5" style="    background-color: #fbeae7;" id="hezuo">
     <div class="main-container container">
         <div class="row">
              <div class="col-md-12">
                  <div class="enter-ad">
                      <div class="rule">
                       <div class="left"> <i class="i_3"></i> <p>合作细则</p><p class="eng">PROCESS</p> <span class="span_3"></span>
                       </div>
                       <div class="right">
                         <div class="fee">
                            <div class="title">
                                    <span></span>收费标准
                            </div>
                            <p>
                                    *本站于2015年2月1日起，邀请部分品牌商家体验平台合作，暂时不收佣金。
                            </p>
                            <p>
                                    *本站有权根据市场情况及自身经营情况调整佣金比例，但调整需至少提前30天通知商家。
                            </p>
                          </div>
                          <div class="fee-rule">
                              <div class="title">
                                      <span></span>保证金
                              </div>
                              <p>
                                      *商家在本站参与抢购活动必须交商品质量服务保证金（保证金主要用于保证商家按照竞价买卖网的规则进行抢购活动，并且在商家有违规行为时
                      根据相关规则用于向本站及消费者支付违约金）。
                              </p>
                              <p>
                                      *商家在申请入驻获得批准时需一次性缴纳保证金，统一为人民币壹万元，食品类目商家、海外购国内商家为伍万元人民币（海外购国外商家需
                      缴纳捌仟伍佰元美元，手续费需自行承担）
                              </p>
                              <p>
                                      *本站有权根据商家的业务变化及实际违约赔付情况通知商家调整保证金金额，商家应在收到本站通知后的10天内补足保证金，如果没有及
                      时补足保证金金额的，本站有权中止合作。
                              </p>
                              <p>
                                      *由于保证金并非本站收取的费用，一直存在于您的本站企业账户中做冻结，所以不提供收据或发票，敬请谅解。
                              </p>
                              <p>
                                      *商家如果要退出本站，终止合作，可以向本站提出保证金退还申请，本站审核通过后会在1个月内将保证金解冻至商家的本站账户内。
                      商家同意该保证金不计算利息。
                              </p>
                              <p>
                                      *商家有违规行为时，如根据相关规则需从已冻结保证金中支付违约金的，本站根据商家申请，按照商家实际支付金额向商家开具合法票据。
                      开具日期为商家提交申请后的15个工作日内。
                              </p>
                              <p>
                                      *因资质造假被清退的商家将不返还保证金，因违规行为扣取的保证金不返还，具体保证金扣取情况参见《本站合作商家违规处罚管理规定》。
                              </p>
                              <p>
                                      *本站将根据国家经济情况、市场状况及神爸网经营情况适时适当调整保证金制度。保证金制度的调整会提前1个月公布并通知所有商家。
                              </p>
                      </div>
                      <div class="fee services">
                              <div class="title">
                                      <span></span>48小时发货服务
                              </div>
                              <p>
                                      *您的订单将在付款后48小时内发货。
                              </p>
                          </div>
                          <div class="fee baoyou">
                              <div class="title">
                                      <span></span>全场包邮
                              </div>
                              <p>
                                      *配送：本站支持偏远地区除外的下单即包邮（偏远地区包括新疆、西藏、内蒙古、宁夏、青海），特定地区按每笔最小订单加收25元运费，
                      部分类目（一般指大件商品）因供应商原因不支持包邮送货。
                              </p>
                      </div>
                      <div class="fee qianshou">
                              <div class="title">
                                      <span></span>验货签收
                              </div>
                              <p>
                                      *货物当面交付的，收货人接受货物后，视为对表面一致的确认；
                      收货人不能亲自签收，委托第三人签收时，第三人应当提供收货人的授权文件并出示收货人及第三人本人身份证原件。
                              </p>
                              <p>
                                      对于需要先签收再打开包装查看的货物，收货人应当要求承运人当场监督并打开包装查看。如发现表面不一致，应当直接退货或者要求在签收单
                      （收货人联和承运人联）上加注详细情况并让承运人签字确认。
                              </p>
                              <p>
                                      收货人签字确认表面一致后，不得就表面一致的问题提出异议并要求退款。但如收货人能够提供相关证据，如物流公司证明商品签收时即存在表面
                      一致问题的除外。
                              </p>
                              <p>
                                      表面一致的定义：表面一致指凭肉眼或简单计量工具即可判断所收到的货物表面状况良好且与网页上的商品图片或者文字描述一致。表面一致的判
                      断范围可参考但不限于货物的形状、大小、重量、颜色、型号、新旧程度。
                              </p>
                          </div>
                          <div class="fee meiliyou">
                              <div class="title">
                                      <span></span>15天无理由退货服务
                              </div>
                              <h3>
                                      一、15天无理由退货
                              </h3>
                              <p>
                                      *本站郑重承诺：如商品未经使用或穿着，商品及外包装保持出售时的原状，商品吊牌及配件齐全，将享受15天无理由退货服务。即如果您对商
                      品不满意，在不影响二次销售的前提下，可在收货后15天之内申请无理由退货。退回运费由您自行承担。
                      退货金额将在供应商确认收货1个工作日内退至您的本站账户
                              </p>
                              <p>
                                      *温馨提示：以下情况均不享受15天无理由退货服务
                              </p>
                              <p>
                                      1、任何非本站出售的商品；
                              </p>
                              <p>
                                      2、申请退货日期距商品签收日期超过7天的；
                              </p>
                              <p>
                                      3、任何因非正常使用、保管或买家个人原因造成商品损坏的，包括但不限于自行修改尺寸，洗涤，皮具表面刮花、打油，刺绣，水洗、碰酸、碱、
                           油或者触硬物，雨天穿着，长时间穿着等；
                              </p>
                              <p>
                                      4、未经网上申请，自行寄回至本站或供应商仓库的；
                              </p>
                              <p>
                                      5、使用快递到付、平邮或未将商品寄至正确地址的；
                              </p>
                              <p>
                                      6、鉴于食品安全问题，食品类商品不支持无理由退货；
                              </p>
                              <p>
                                      7、海外购某些特殊情况不办理退货的，但仍可与商家协商；
                              </p>
                              <h3>
                                      二、退货运费条款
                              </h3>
                              <p>
                                      （一）15天无理由退货产生的运费由买家承担
                              </p>
                              <p>
                                      （二）由于商品问题导致的退货，本站将提供运费补贴。同省补贴不超过10元，非同省不超过20元，特定地区不超过25元（特定地区指：新疆、
                                西藏、内蒙古、宁夏、青海）。
                              </p>
                              <p>
                                      （三）、本站是限时抢购模式，商品在线时间均不超过7天，不支持换货。
                              </p>
                          </div>
                          <div class="fee tuihuo">
                              <div class="title">
                                      <span></span>退货流程
                              </div>
                              <p>
                                      第一步，申请退货：进入“会员中心—我的订单”找到对应的订单，点击“售后”，填写及上传相关的信息提交退货申请。
                              </p>
                              <p>
                                      第二步，本站审核：退货申请提交后，本站将对售后理由、图片凭证进行审核。
                              </p>
                              <p>
                                      第三步，寄回商品：审核通过后，根据页面的退货地址退货商品，并填写有效的退货物流单号（部分退货原因无需此操作）
                              </p>
                              <p>
                                      第四步，供应商签收：供应商签收商品后，同意退款申请。
                              </p>
                              <p>
                                      第五步，退款完成：退款款项将在1个工作日内打款至神爸网账户。
                              </p>
                          </div>
                          <div class="fee peifu">
                              <div class="title">
                                      <span></span>非正品赔付
                              </div>
                              <p>
                                      本站承诺，在线销售的所有商品均为品牌正品。您在本站购买的每件商品，均由中国人民财产保险公司（PICC）承保。如您对商品是否正品
                      存在怀疑，可到品牌专柜或有资质的机构进行鉴定，并及时通知神爸网。如鉴定结果为非正品，请提供相关证明，并在收件后90天内申请赔付。
                      本站将按商品实付金额的三倍进行赔偿。
                              </p>
                          </div>
                      </div>
                    </div>
                  </div><!-- enter-ad -->
              </div><!-- col-md-12 -->
         </div><!-- row end -->
      </div><!-- container -->
  </div><!--Middle Part End-->
<div class="xuanf-daohang-right" style="width: 35px; height: 944px;visibility: visible;right: 0px;">
        <div class="xuanf-daohang-div" style=" line-height: 14px;">
            <a href="" > <img src="/Public/Home/image/hy/hy.png"></a>
            <div class="xuanf-hy">
                会员权益
            </div>
        </div>
        <div class="gouwu">
           <a href=""><img src="/Public/Home/image/hy/car.png">
           <p style="width: 10px;color: #fff;text-align: center;margin-left: 11px;margin-top: 3px;">购物车</p></a>
        </div>
        <div class="xuanf-daohang-zc" style=" line-height: 14px;">
            <a href=""><img src="/Public/Home/image/hy/zc.png"></a>
            <div class="xuanf-zc">
                我的资产
            </div>
        </div>
   </div>
	<!-- Footer Container -->
   <footer class="footer-container typefooter-1">
    <!-- Footer Top Container -->

    <div class="container">
        <div class="row footer-top">
            <div class="col-lg-3 " style="text-align: center;">
                <img src="/Public/Home/image/tu/pin.png" style="    width: 30px; margin-bottom: 5px; margin-right: 6px;">
                <span style="font-size: 24px;color:#fff;">品质</span>
                <span style="font-size: 14px;color:#fff;margin-left:10px;">正品行货 购物无忧</span>
            </div>
            <div class="col-lg-3 " style="text-align: center;">
                <img src="/Public/Home/image/tu/di.png" style="    width: 30px; margin-bottom: 5px; margin-right: 6px;">
                <span style="font-size: 24px;color:#fff;">低价</span>
                <span style="font-size: 14px;color:#fff;margin-left:10px;">普惠实价 帮你省钱</span>
            </div>
            <div class="col-lg-3 " style="text-align: center;">
                <img src="/Public/Home/image/tu/su.png" style="    width: 30px; margin-bottom: 5px; margin-right: 6px;">
                <span style="font-size: 24px;color:#fff;">速达</span>
                <span style="font-size: 14px;color:#fff;margin-left:10px;">专业配送 按时按需</span>
            </div>
            <div class="col-lg-3 " style="text-align: center;">
                <img src="/Public/Home/image/tu/wu.png" style="    width: 30px; margin-bottom: 5px; margin-right: 6px;">
                <span style="font-size: 24px;color:#fff;">包邮</span>
                <span style="font-size: 14px;color:#fff;margin-left:10px;">全场商品包邮（除汽车）</span>
            </div>
        </div>
    </div>

    <!-- /Footer Top Container -->

    <div class="footer-middle ">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                    <div class="infos-footer">
                        <a href="#"><img src="/Public/Home/images/logo.png" alt="image"></a>
                        <ul class="menu">

                            <li class="phone">
                                0577-86787446
                            </li>
                            <li class="time">
                                工作时间: 8:00AM - 6:00PM
                            </li>
                        </ul>
                    </div>
                </div>
                <?php if(is_array($footerPage)): $i = 0; $__LIST__ = $footerPage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle"><?php echo ($row["name"]); ?></h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Common/pageDetial',array('id'=>$row1['id']));?>"><?php echo ($row1["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Container -->
    <div class="footer-bottom">
        <div class="copyright-w">
            <div class="container">
                <div class="copyright">
                    Copyright &copy; 2018.邢台尚进网络科技有限公司.
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Bottom Container -->


    <!--Back To Top-->
    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</footer>
    <!-- //end Footer Container -->

    </div>
	
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
	<i class="fa fa-cog"></i>
</div>		

<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" srcsrc="/Public/Home/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/Public/Home/js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="/Public/Home/js/themejs/libs.js"></script>
	<script type="text/javascript" src="/Public/Home/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="/Public/Home/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="/Public/Home/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="/Public/Home/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="/Public/Home/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="/Public/Home/js/themejs/application.js"></script>

	
</body>
</html>
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
    <link rel="shortcut icon" type="image/png" href="/Public/Home/ico/favicon-16x16.png">
    
    <!-- 新引入 -->
    <link rel="stylesheet" href="/Public/Home/css/main.css">
    <link rel="stylesheet" href="/Public/Home/css/style.css">
    <link rel="stylesheet" href="/Public/Home/css/app-orange.css" id="theme_color" />
    <!-- end -->
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="/Public/Home/css/bootstrap/css/bootstrap.min.css">
    <link href="/Public/Home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/Home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/Public/Home/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/Public/Home/css/themecss/lib.css" rel="stylesheet">

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
         .cart_item td{
          text-align: center;
         }
         .content-top .entry-summary table thead tr th, .entry-content .entry-summary table thead tr th, .commentlist .entry-summary table thead tr th {
    border-right: 0px;
}
    </style>

</head>

<body class="res layout-subpage layout-1 banners-effect-5">

    <div id="wrapper" class="wrapper-fluid">
   <!-- Header Container  -->
        <header id="header" class=" typeheader-1" style="background-color:#fff;">
    <!-- Header Top -->
    <div class="top-bar" style="background-color:#222;">
        <div class="container" style="width:1200px;color: #fff;">
            <span style="color:#d9d7d7;line-height: 35px;">欢迎来到竞价买卖网!</span>
            <?php if(empty($_SESSION['userInfo']['id'])): ?><a href="<?php echo U('Register/login');?>"  style="color:#d9d7d7;margin-left:15px"><span>请登录</span></a>
                <a href="<?php echo U('Register/register');?>"  style="color:#d9d7d7;margin-left:15px"><span>免费注册</span></a>
            <?php else: ?>
                <a href="<?php echo U('User/user');?>"  style="color:#d9d7d7;margin-left:15px"><span>欢迎你：<?php echo ($_SESSION['userInfo']['nickname']); ?></span></a><?php endif; ?>
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
                    <li><a href="enter-ad.html" style="color:#d9d7d7;">商家入驻 </a></li>
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
                <li class="dropdown" style="display: inline-block;"> <a href="<?php echo U('User/cart');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">3</span> <i class="fa fa-shopping-bag"></i> <strong>购物车</strong> <br>
                </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="media-left"> <a href="#." class="thumb"> <img src="/Public/Home/images/item-img-1-1.jpg" class="img-responsive" alt="" > </a> </div>
                            <div class="media-body"> <a href="#." class="tittle ">海尔 冰箱 BCD-470WDPG 470升十字对开变频静音节能干湿分储电冰箱</a> <span>250 x 1</span> </div>
                        </li>
                        <li class="">
                            <div class="media-left"> <a href="#." class="thumb" > <img src="/Public/Home/images/item-img-1-2.jpg" class="img-responsive" alt="" > </a> </div>
                            <div class="media-body"> <a href="#." class="tittle">海尔 冰箱 BCD-470WDPG 470升十字对开变频静音节能干湿分储电冰箱</a> <span>250 x 1</span> </div>
                        </li>
                        <li class="btn-cart"> <a href="#." class="btn-round">查看更多</a> </li>
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
                                                        <a href="index.html">首页 </a>

                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>精品推荐</strong>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>智能潮货</strong>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>家用电器</strong>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
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
		
		<div class="container">
		<div class="row">

            <!--左侧导航栏-->
            <div id="contents" role="main" class="main-page col-lg-2 hy-list">
    <div class="huiyuan">
        <span>会员中心</span>
    </div>
    <nav>
        <ul>
            <li><a href="cart.html" bank><i class="fa fa-pencil-square-o" style="font-size: 16px;margin-right: 4px;"></i>我的订单<span class="sign-10">(20)</span></a></li>
            <li><a href="cart.html" bank><i class="fa fa-shopping-cart" style="font-size: 16px;margin-right: 4px;"></i>我的购物车<span class="sign-10">(20)</span></a></li>
            <li><a href="<?php echo U('wishlist');?>" bank><i class="fa fa-heart-o" style="font-size: 16px;margin-right: 4px;"></i>我的收藏<span class="sign-10">(<?php echo ($wishlistCount); ?>)</span></a></li>
            <li><a href="cart.html" bank><i class="fa fa-star-o" style="font-size: 16px;margin-right: 4px;"></i>评价管理<span class="sign-10">(10)</span></a></li>
            <li><a href="<?php echo U('address');?>" bank><i class="fa fa-map-marker" style="font-size: 16px;margin-right: 4px;"></i>收货地址</a></li>
            <li><a href="cart.html" bank><i class="fa fa-cog" style="font-size: 16px;margin-right: 4px;"></i>账号设置</a></li>
            <li><a href="cart.html" bank><i class="fa fa-sign-out" style="font-size: 16px;margin-right: 4px;"></i>退出登录</a></li>
        </ul>
    </nav>
</div>
            <!--左侧导航栏-->

            <div id="contents" role="main" class="main-page col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-12 statr-list" style="padding:0px;margin-bottom: 16px;">
                <form id="address_form">
                    <div class="dindan-title">
                        <div class="add-title">
                             <h3><span class="sign">*</span>添加新的地址</h3>
                        </div>
                        <div class="form-box dizhi">
                          <label style="width: 12%;"><span class="sign">*</span>地址： </label>
                          <ul style="width:86%;">
                             <li>
                                 <select id="province" name="province" onchange="setCity(this)">

                                 </select>
                             </li>
                             <li>
                                 <select id="city" name="city" onchange="setArea(this)">
                                  <option value="0">--市--</option>
                                 </select>
                             </li>
                             <li>
                                 <select id="area" name="area">
                                  <option value="0">--区--</option>
                                 </select>
                             </li>
                          </ul>
                        </div><!-- /.form-box -->
                        <div class="form-box">
                          <label for="address" style="width: 12%;"><span class="sign">*</span>详细地址 </label>
                          <input type="text" id="address" name="address" placeholder="请输入你详细的收货地址" >
                        </div><!-- /.form-box -->
                        <div class="form-box">
                          <label for="name" style="width: 12%;"><span class="sign">*</span>收货人姓名： </label>
                          <input type="tel" name="name"  id="name" placeholder="收件人姓名">
                        </div><!-- /.form-box -->
                        <div class="form-box" >
                          <label for="postcode" style="width: 12%;">邮政编码： </label>
                          <input type="tel" name="postcode"  id="postcode" placeholder="邮编">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                          <label for="phone" style="width: 12%;"><span class="sign">*</span>手机号： </label>
                          <input type="text"  name="phone" placeholder="请输入你的手机号"  id="phone">
                        </div><!-- /.form-box -->
                        <div class="form-box">
                          <input type="checkbox" id="isdefault" name="isdefault" value="2" style="margin-left: 10%;width: 20px;">
                          <span style="margin-right:20px;">设为默认地址</span>
                          <input type="hidden" id="addressID" name="id">
                          <button onclick="return addAddress()" style="background-color:#ff5e00;color:#fff;border:1px solid #ff5e00; width:80px;">保存</button>
                        </div><!-- /.form-box -->
                    </div>
                </form>
              </div>

              <h3>全部地址</h3>
					<div class="page type-page status-publish hentry">
						<div class="entry-content">
							<div class="entry-summary">
								<div class="woocommerce">
                                    <table class="shop_table shop_table_responsive cart" cellspacing="0" style="width:100%;margin-bottom: 50px;">
                                        <thead>
                                            <tr style="background-color: #fbf1f1;">
                                                <th class="">收货人</th>
                                                <th class="">所在地区</th>
                                                <th class="">详细地址</th>
                                                <th class="">邮编</th>
                                                <th class="">电话/手机号</th>
                                                <th class="">操作</th>
                                                <th class="">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody id="addressList">
                                           <?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr class="cart_item cart-table shanchu2" >
                                                <td class="product-name" data-title="Product" style="text-align: center;">
                                                    <?php echo ($row["name"]); ?>
                                                </td>
                                                <td class="product-thumbnail" style="text-align: center;">
                                                    <?php echo ($row["province"]); ?> <?php echo ($row["city"]); ?> <?php echo ($row["area"]); ?>
                                                </td>
                                                <td class="product-name" data-title="Product" style="text-align: center;">
                                                    <?php echo ($row["address"]); ?>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                                                    <?php echo ($row["postcode"]); ?>
                                                </td>
                                                <td class="product-price" data-title="Price" style="text-align: center;">
                                                    <?php echo ($row["phone"]); ?>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                                                    <a onclick="edit('<?php echo ($row["id"]); ?>',this)" ><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:16px"></i></a>
                                                    <a onclick="del('<?php echo ($row["id"]); ?>',this)" style="margin-left:20px;"><i class="fa fa-trash fa-trash2" aria-hidden="true"></i></a>
                                                </td>
                                                <td class="product-subtotal" data-title="Total" style="text-align: center;">
                                                     <?php if(($row["isdefault"]) == "2"): ?>默认地址<?php endif; ?>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>

					</div>

				</div>
			</div>
		</div>
		<!-- //Main Container -->
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
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                    <div class="box-information box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">购物指南</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">注册登录</a></li>
                                    <li><a href="#">密码相关</a></li>
                                    <li><a href="#">购物流程</a></li>
                                    <li><a href="#">交易条款</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                    <div class="box-account box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">支付方式</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">支付宝支付</a></li>
                                    <li><a href="#">微信支付</a></li>
                                    <li><a href="#">发票说明</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-clear">
                    <div class="box-service box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">售后服务</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">售后服务政策</a></li>
                                    <li><a href="#">退换货说明</a></li>
                                    <li><a href="#">安装/维修</a></li>
                                    <li><a href="#">咨询投诉</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                    <div class="box-service box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">商家入驻</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">入驻说明</a></li>
                                    <li><a href="#">入驻流程</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                    <div class="box-service box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">关于我们</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    <li><a href="#">平台简介</a></li>
                                    <li><a href="#">联系我们</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



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
   

<!-- End Color Scheme
============================================ -->



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="/Public/Home/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/Public/Home/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="/Public/Home/js/themejs/libs.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="/Public/Home/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/Public/Home/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="/Public/JS/area.js"></script>

<script>
var temp = `<tr class="cart_item cart-table shanchu2" >
               <td class="product-name" data-title="Product" style="text-align: center;">
                    {<name>}
                </td>
                <td class="product-thumbnail" style="text-align: center;">
                    {<province>} {<city>} {<area>}
                </td>
                <td class="product-name" data-title="Product" style="text-align: center;">
                    {<address>}
                </td>
                <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                   {<postcode>}
                </td>
                <td class="product-price" data-title="Price" style="text-align: center;">
                    {<phone>}
                </td>
                <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                    <a onclick="edit('{<id>}',this)"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:16px"></i></a>
                    <a onclick="del('{<id>}',this)" style="margin-left:20px;"><i class="fa fa-trash fa-trash2" aria-hidden="true"></i></a>
                </td>
                <td class="product-subtotal" data-title="Total" style="text-align: center;">
                     {<isdefault>}
                </td>
            </tr>`;

function addAddress() {
    if($('#province').find('option:selected').val() == 0 || $('#city').find('option:selected').val() == 0 || $('#area').find('option:selected').val() == 0 || $('#address').val() == '' ){
        alert('请选择收货地址');
        return false;
    }
    if(!$('#name').val()){
        alert('请填写收件人姓名');
        return false;
    }
    if(!$('#postcode').val()){
        alert('请填写邮编');
        return false;
    }
    if(!$('#phone').val()){
        alert('请填写手机号');
        return false;
    }

    var province = $('#province').find('option:selected').text();
    var city = $('#city').find('option:selected').text();
    var area = $('#area').find('option:selected').text();
    var address = $('#address').val();
    var name = $('#name').val();
    var postcode = $('#postcode').val();
    var phone = $('#phone').val();
    var isdefault = $('#isdefault').is(':checked') ? 2 : 1;
    var id = $('#addressID').val();

    var data = {province:province,city:city,area:area,address:address,name:name,postcode:postcode,phone:phone,isdefault:isdefault};
    if(id > 0){
        data['id'] = id;
    }
    $.post('<?php echo U("addAddress");?>',data,function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                if(id > 0){
                    $('#addressID').val('');
                    location.reload();
                }else {
                    if(data['isdefault'] == 2){
                        data['isdefault'] = '默认地址';
                    }else {
                        data['isdefault'] = '';
                    }
                    for(var key in data){
                        temp = temp.replace('{<' + key + '>}',data[key]);
                    }
                    $('#addressList').append(temp);
                }
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('保存收货地址失败');
        }
    })
    return false;
}

function edit(id,obj) {
    $.post('<?php echo U("getAddressByID");?>',{id:id},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                setProvince();
                var data = rs['data'];

                var province = $('#province').find('option');
                for(var i = 0; i < province.length; i++){
                    if($(province[i]).text() == data['province']){
                        $(province[i]).attr('selected','selected');
                        setCity($('#province'));
                    }
                }
                var city = $('#city').find('option');
                for(var i = 0; i < city.length; i++){
                    if($(city[i]).text() == data['city']){
                        $(city[i]).attr('selected','selected');
                        setArea($('#city'));
                    }
                }
                var area = $('#area').find('option');
                for(var i = 0; i < area.length; i++){
                    if($(area[i]).text() == data['area']){
                        $(area[i]).attr('selected','selected');
                    }
                }

                $('#address').val(data['address']);
                $('#name').val(data['name']);
                $('#postcode').val(data['postcode']);
                $('#phone').val(data['phone']);
                if(data['isdefault'] == 2){
                    $('#isdefault').attr('checked','checked');
                }else {
                    $('#isdefault').attr('checked',false);
                }
                $('#addressID').val(data['id']);
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('修改失败');
        }
    })
}

function del(id,obj) {
    if(confirm('确认要删除？')){
        $.post('<?php echo U("delAddress");?>',{id:id},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    $(obj).parents('tr').remove();
                }else {
                    alert(rs['msg']);
                }
            }else {
                alert('删除失败');
            }
        })
    }
}
</script>

</body>
</html>
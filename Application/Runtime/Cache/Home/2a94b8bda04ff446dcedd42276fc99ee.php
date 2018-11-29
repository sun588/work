<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="cn">
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
    <link rel="stylesheet" href="/Public/Home/css/app-orange.css" id="theme_color" />
    <!-- end -->
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="/Public/Home/css/style.css">
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
    <link rel="stylesheet" href="/Public/Home/css/main.css">
    <link href="/Public/Home/css/footer/footer1.css" rel="stylesheet">
    <link href="/Public/Home/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="/Public/Home/css/theme.css" rel="stylesheet">
    <link href="/Public/Home/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}
         #nav-open-btn .nav li a:hover{background-color:#ff5e00;}
         .daoh{margin-right:30px;}
         .erji li{
          display:inline-block;
         }



    </style>

</head>

<body class="common-home res layout-1">


    <div id="wrapper" class="wrapper-fluid banners-effect-3">



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
    <div id="content">
        <div class="content-top-w">
            
            <!-- <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left">
                <div class="module col1 hidden-sm hidden-xs"></div>
            </div>
             -->
          <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-right"> -->
                <div class="slider-container row"> 
                                
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col2">
                        <div class="module sohomepage-slider ">
                            <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                <?php if(is_array($headPic)): $i = 0; $__LIST__ = $headPic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="yt-content-slide" >
                                    <a href="<?php echo ($row["link"]); ?>"><img src="<?php echo ($row["pic"]); ?>" alt="slider1" class="img-responsive" style="width:100%"></a>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            
                            <div class="loadeding"></div>
                        </div>
                        
                    </div>

                     <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 col3" style="    margin-left: -12px;">
                        <div class="module product-simple extra-layout1">
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider" >
                                   <a href=""><img src="/Public/Home/image/hy/gp.jpg"></a>
                                </div>
                                <div id="so_extra_slider_2" class="so-extraslider" style="">
                                   <a href=""><img src="/Public/Home/image/hy/gp2.jpg" style="    height: 305px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
           <!--  </div>  -->                                       
        </div>
        <div class="row content-main-w">
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 main-left">
                
                <div class="module">
                    <div class="banners banners2">
                        <div class="banner">
                            <a href="#" style="width:100%;"><img src="/Public/Home/image/catalog/banners/banner1.jpg" alt="image"></a>
                        </div>
                    </div>
                </div>

                <div class="module product-simple extra-layout1">
                    <h3 class="modtitle">
                        <span>最新产品</span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                <?php if(is_array($newProduct)): $i = 0; $__LIST__ = $newProduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="item">
                                    <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><div class="product-layout item-inner style1 ">
                                            <div class="item-image">
                                                <div class="item-img-info">
                                                    <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self"><img src="<?php echo ($row1["pic1"]); ?>"></a>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-title element">
                                                    <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self"><?php echo ($row1["name"]); ?> </a>
                                                </div>
                                                <div class="content_price price">
                                                    <span style="font-size: 14px;color: #666;">型号:</span><span class="price-new product-price"><?php echo ($row1["type"]); ?></span>&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-10 -->

             <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 main-right">
                <div class="static-cates">
                    <ul>
                        <li>
                            <a href="#"><img src="/Public/Home/image/catalog/banners/cat1.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/Public/Home/image/catalog/banners/cat2.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/Public/Home/image/catalog/banners/cat3.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/Public/Home/image/catalog/banners/cat4.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/Public/Home/image/catalog/banners/cat5.jpg" alt="image"></a>
                        </li>
                    </ul>
                </div>

                <!-- Deals -->
                <div class="module deals-layout1">
                    <div class="head-title">
                        <div class="modtitle">
                            <span>今日优惠</span>
                              <a class="viewall" href="#">查看更多</a>
                        </div>    
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                <?php if(is_array($discountProduct)): $i = 0; $__LIST__ = $discountProduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"><?php echo ($row["discount"]); ?></span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="<?php echo U('Product/productDetail',array('id'=>$row['id']));?>" target="_self" title="Pastrami bacon">
                                                            <img src="<?php echo ($row["pic1"]); ?>" class="img-1 img-responsive">
                                                            <img src="<?php echo ($row["pic2"]); ?>" class="img-2 img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="加入购物车" onclick="addCart('<?php echo ($row["id"]); ?>');">
                                                            <span>加入购物车 </span>
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="收藏" onclick="addWishlist('<?php echo ($row["id"]); ?>');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont element1" >
                                                        <h4 style="margin:0;"><a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" title="Pastrami bacon" target="_self"><?php echo ($row["name"]); ?></a></h4>
                                                    </div>
                                                </div>

                                                <div class="item-available">
                                                    <p class="a2">型号: <b><?php echo ($row["type"]); ?></b>  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                      </div>
                </div>
                <!-- End Deals -->

                <!-- Banners -->
                <div class="banners3 banners">
                    <div class="item1">
                        <a href="#"><img src="/Public/Home/image/catalog/banners/banner3.jpg" alt="image"></a>
                    </div>
                    <div class="item2">
                        <a href="#"><img src="/Public/Home/image/catalog/banners/banner4.jpg" alt="image"></a>
                    </div>
                    <div class="item3">
                        <a href="#"><img src="/Public/Home/image/catalog/banners/banner5.jpg" alt="image"></a>
                    </div>
                </div>
                <!-- end Banners -->
            </div>

          <!-- col-10 -->
            <div class="col-lg-12" >
                <div class="so-category-slider container-slider module cateslider1" id="dapai">
                    <div class="modcontent">                                                                
                        <div class="page-top" style="margin-bottom:0px;">
                            <div class="page-title-categoryslider">大牌推荐</div> 
                        </div>
                        <div class="tabs clearfix">
                          <div class="item-sub-cat tabbable" style="float:left;width: 100%">
                              <ul class="nav nav-tabs">
                                  <li  style=" margin-left: 20px;background-color: #dbdada;margin-top: 2px;"><a onmouseover="showContent('div-1')" style="padding: 4px 42px;">电脑</a></li>
                                  <li style=" margin-left: 20px;background-color: #dbdada;margin-top: 2px;"><a onmouseover="showContent('div-2')" style="padding: 4px 42px;">手机</a></li>
                                  <li style=" margin-left: 20px;background-color: #dbdada;margin-top: 2px;"><a onmouseover="showContent('div-3')" style="padding: 4px 42px;">大家电</a></li>
                                  <li style=" margin-left: 20px;background-color: #dbdada;margin-top: 2px;"><a onmouseover="showContent('div-4')" style="padding: 4px 42px;">影音娱乐</a></li>
                                  <li style=" margin-left: 20px;background-color: #dbdada;margin-top: 2px;"><a onmouseover="showContent('div-5')" style="padding: 4px 42px;">汽车</a></li>
                              </ul>
                              <div class=" tab-content">
                                <div class="tab-pane active pinpai-div element1" >
                                  <?php if(is_array($brandCommend)): $i = 0; $__LIST__ = $brandCommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><ul id="div-<?php echo ($key + 1); ?>" style="display: none;">
                                          <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/product',array('bid'=>$row1['id']));?>"><img src="<?php echo ($row1["pic"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                      </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- col-12 -->
           <div class="col-lg-12" >

               <?php if(is_array($datas)): $mk = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$model): $mod = ($mk % 2 );++$mk;?><!-- Category Slider 1 -->
                <?php if(($mod) == "1"): ?><div class="so-category-slider container-slider module cateslider1" id="dnbg">
                    <div class="modcontent">
                        <!-- 模块标题 -->
                        <div class="page-top" style="margin-bottom: 0px;">
                            <div class="page-title-categoryslider"><?php echo ($model['modelName']); ?></div>
                            <div class="item-sub-cat"  style="    margin-top: 20px;">
                                <a href="<?php echo U('Product/product',array('c1'=>$model['modelID']));?>" style="margin-right:30px;"><span>查看更多&gt</span></a>
                            </div>
                        </div>
                        <!-- 模块标题结束 -->

                        <!-- 模块tag -->
                        <div class="page-top" style="background-color:#ebe8e8;">
                            <?php if(is_array($model["tag"])): $i = 0; $__LIST__ = $model["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><div style="" class="mulu-lf">
                                 <div style="" class="title-list-lf">
                                      <h3><span style="margin-right:10px;"><img src="/Public/Home/image/hy/le1.png"></span><?php echo ($row["name"]); ?></h3>
                                 </div>
                                 <div style="" class="title-list-rg">
                                      <ul>
                                        <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/product',array('tid'=>$row1['id']));?>"><li><?php echo ($row1["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                     </ul>
                                 </div>
                            </div>
                            <?php else: ?>
                            <div style="" class="mulu-rg">
                                <div style="" class="title-list-lf-lf">
                                      <h3><span style="margin-right:10px;"><img src="/Public/Home/image/hy/le2.png"></span><?php echo ($row["name"]); ?></h3>
                                </div>
                                <div style="" class="title-list-lf-rg">
                                    <ul>
                                        <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/product',array('tid'=>$row1['id']));?>"><li><?php echo ($row1["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <!-- 模块tag end -->

                        <div class="categoryslider-content row">
                            <!--广告图-->
                            <div class="item-cat-image erjimul col-md-4" style="">
                                <div class="erjimu2">
                                     <img src="/Public/Home/image/catalog/demo/category/tab2.jpg">
                                </div>
                                <div class="erjimul" style="padding: 0px;">
                                     <img src="/Public/Home/image/hy/2.png">
                                </div>
                            </div>
                            <!--广告图-->
                            <div class="category-slider-inner products-list row col-md-8" >
                                <!--产品-->
                                <div class="col-md-9">
                                    <div class="row product-layout transition product-grid">
                                        <?php if(is_array($model["product"])): $i = 0; $__LIST__ = $model["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-md-3 product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="product-image-container second_img">
                                                        <a href="<?php echo U('Product/productDetail',array('id'=>$row['id']));?>" target="_self">
                                                            <img src="<?php echo ($row["pic1"]); ?>" class="img-1 img-responsive">
                                                            <noempty name="row.pic2"></noempty>
                                                            <img src="<?php echo ($row["pic2"]); ?>" class="img-2 img-responsive">
                                                            </noempty>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="加入购物车" onclick="addCart('<?php echo ($row["id"]); ?>');">
                                                            <span>加入购物车 </span>
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="收藏" onclick="addWishlist('<?php echo ($row["id"]); ?>');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont element1">
                                                        <h4 style="margin:0;"><a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" title="Pastrami bacon" target="_self"><?php echo ($row["name"]); ?></a></h4>
                                                    </div>
                                                    <p class="price"><span style="color: #666;">型号：</span><?php echo ($row["type"]); ?></p>
                                                </div>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <!--产品-->

                                <!--标签产品-->
                                <div class="col-md-3" >
                                    <div class="left-title" style=" border: 1px solid #eee;margin-bottom:20px;">
                                        <ul>
                                            <?php if(is_array($model["tproduct"])): $i = 0; $__LIST__ = $model["tproduct"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li onmouseover="showTagContent('m<?php echo ($mk); ?>-','<?php echo ($i); ?>')"><?php echo ($row["tagName"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>

                                    <?php if(is_array($model["tproduct"])): $k = 0; $__LIST__ = $model["tproduct"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($k % 2 );++$k;?><div class="row" id="m<?php echo ($mk); ?>-<?php echo ($k); ?>" style="display: none;">
                                           <?php if(is_array($row["product"])): $i = 0; $__LIST__ = $row["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><div class="product-layout item-inner style1 col-md-12" style="">
                                                  <div class="item-image" style="width: 24%;float: left;">
                                                      <div class="item-img-info">
                                                          <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self">
                                                              <img src="<?php echo ($row1["pic1"]); ?>" alt="Mandouille short">
                                                              </a>
                                                      </div>
                                                  </div>
                                                  <div class="item-info ele" style="width: 70%;float: left;margin-top:3%;margin-left:10px;">
                                                      <div class="item-title element ">
                                                          <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self"><?php echo ($row1["name"]); ?></a>
                                                      </div>
                                                      <div class="content_price price">
                                                          <p class="a2" style="color:#666;">型号: <b style="color:#ff5e00;"><?php echo ($row1["type"]); ?></b></p>
                                                      </div>
                                                  </div>
                                              </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <!--标签产品-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 1 -->
                <?php else: ?>
                <!-- Category Slider 2 -->
                <div class="so-category-slider container-slider module cateslider2" id="shoujisj">
                    <div class="modcontent">                                                                
                        <div class="page-top" style="margin-bottom:0px;">
                            <div class="page-title-categoryslider"><?php echo ($model["modelName"]); ?></div>
                            <div class="item-sub-cat" style="    margin-top: 20px;">  
                                 <a href="<?php echo U('Product/product',array('c1'=>$model['modelID']));?>" style="margin-right:30px;"><span>查看更多&gt</span></a>
                            </div> 
                        </div>

                        <div class="page-top" style="background-color:#ebe8e8;">
                            <?php if(is_array($model["tag"])): $i = 0; $__LIST__ = $model["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><div style="" class="mulu-lf">
                                        <div style="" class="title-list-lf">
                                            <h3><span style="margin-right:10px;"><img src="/Public/Home/image/hy/le1.png"></span><?php echo ($row["name"]); ?></h3>
                                        </div>
                                        <div style="" class="title-list-rg">
                                            <ul>
                                                <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/product',array('tid'=>$row1['id']));?>"><li><?php echo ($row1["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div style="" class="mulu-rg">
                                        <div style="" class="title-list-lf-lf">
                                            <h3><span style="margin-right:10px;"><img src="/Public/Home/image/hy/le2.png"></span><?php echo ($row["name"]); ?></h3>
                                        </div>
                                        <div style="" class="title-list-lf-rg">
                                            <ul>
                                                <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Product/product',array('tid'=>$row1['id']));?>"><li><?php echo ($row1["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        
                        <div class="categoryslider-content row">
                            <div class="item-cat-image erjimul col-md-4" style="min-height: 351px;padding: 0px;">
                                <div class="erjimu2">
                                     <img src="/Public/Home/image/catalog/demo/category/tab1.jpg">
                                </div>
                                <div class="erjimul">
                                    <img src="/Public/Home/image/hy/3.png">
                                </div>
                            </div>
                            <div class=" category-slider-inner products-list row col-md-8" >

                                <!--标签产品-->
                                <div class="col-md-3" >
                                    <div class="left-title" style=" border: 1px solid #eee;margin-bottom:20px;">
                                        <ul>
                                            <?php if(is_array($model["tproduct"])): $i = 0; $__LIST__ = $model["tproduct"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li onmouseover="showTagContent('m<?php echo ($mk); ?>-','<?php echo ($i); ?>')"><?php echo ($row["tagName"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>

                                    <?php if(is_array($model["tproduct"])): $k = 0; $__LIST__ = $model["tproduct"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($k % 2 );++$k;?><div class="row" id="m<?php echo ($mk); ?>-<?php echo ($k); ?>" style="display: none;">
                                            <?php if(is_array($row["product"])): $i = 0; $__LIST__ = $row["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><div class="product-layout item-inner style1 col-md-12" style="">
                                                    <div class="item-image" style="width: 24%;float: left;">
                                                        <div class="item-img-info">
                                                            <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self">
                                                                <img src="<?php echo ($row1["pic1"]); ?>">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="item-info ele" style="width: 70%;float: left;margin-top:3%;margin-left:10px;">
                                                        <div class="item-title element ">
                                                            <a href="<?php echo U('Product/productDetail',array('id'=>$row1['id']));?>" target="_self"><?php echo ($row1["name"]); ?></a>
                                                        </div>

                                                        <div class="content_price price">
                                                            <p class="a2" style="color:#666;">型号: <b style="color:#ff5e00;"><?php echo ($row1["type"]); ?></b></p>
                                                        </div>
                                                    </div>
                                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <!--标签产品-->
                                <!--产品-->
                                <div class="col-md-9">
                                    <div class="row product-layout transition product-grid">
                                        <?php if(is_array($model["product"])): $i = 0; $__LIST__ = $model["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-md-3 product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="product-image-container second_img">
                                                        <a href="<?php echo U('Product/productDetail',array('id'=>$row['id']));?>" target="_self">
                                                            <img src="<?php echo ($row["pic1"]); ?>" class="img-1 img-responsive">
                                                            <noempty name="row.pic2"></noempty>
                                                            <img src="<?php echo ($row["pic2"]); ?>" class="img-2 img-responsive">
                                                            </noempty>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="加入购物车" onclick="addCart('<?php echo ($row["id"]); ?>');">
                                                            <span>加入购物车 </span>
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="收藏" onclick="addWishlist('<?php echo ($row["id"]); ?>');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont element1">
                                                        <h4 style="margin:0;"><a href="<?php echo U('Product/productDetail',array('id'=>$row['id']));?>" target="_self"><?php echo ($row["name"]); ?></a></h4>
                                                    </div>
                                                    <p class="price"><span style="color: #666;">型号：</span><?php echo ($row["type"]); ?></p>
                                                </div>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <!--产品-->
                           </div>
                        </div>
                    </div>
                </div><?php endif; ?>
                <!-- end Category Slider 2 --><?php endforeach; endif; else: echo "" ;endif; ?>


                <!-- Banners -->
                <div class="banners4 banners">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="/Public/Home/image/catalog/banners/bn1.jpg" alt="image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="/Public/Home/image/catalog/banners/bn2.jpg" alt="image"></a>
                        </div>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Listing tabs -->
                <div class="module listingtab-layout1">
                    
                    <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap"> 
                                <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">热销榜</span> </li>
                                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">发现好货</span> </li>
                                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">猜你喜欢</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                        
                            <div class="ltabs-items-container products-list grid">
                                <!--Begin Items-->
                                <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                    <div class="ltabs-items-inner ltabs-slider">
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/1.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/1.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                         <p class="price"><span style="color: #666;">型号：</span>14-ce0016TU</p>
                                                          
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>
                                        
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Eiusmod tempor incid">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/e3.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/e8.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                         <p class="price"><span style="color: #666;">型号：</span>14-ce0016TU</p>
                              
                                                        </p>
                                                    </div>

                                                   
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Duis aute irure ">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/e4.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/e7.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                         <p class="price"><span style="color: #666;">型号：</span>14-ce0016TU</p>
                                  
                                                        </p>
                                                    </div>

                                                    
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Excepteur sint occ">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/fu5.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/fu6.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">￥55.00-99.00</span>
                                                
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                       
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/f6.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/f2.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                       <p class="price"><span style="color: #666;">型号：</span>14-ce0016TU</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>      
                                        </div>
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        <div class="box-label">
                                                            <span class="label-product label-sale">-10%</span>
                                                        </div>
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Quis nostrud exercita">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/f2.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/Public/Home/image/catalog/demo/product/270/f4.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="查看详情" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>查看详情</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->
                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                                <span>加入购物车 </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="收藏" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="询价 " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>询价</span>
                                                            </button>
                                                            
                                                        </div>
                                                       <div class="caption hide-cont element1">
                                                            
                                                            <h4 style="margin:0;"><a href="product.html" title="Pastrami bacon" target="_self">冰箱 BCD-629WDSTU1 629升十字对</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                         <p class="price"><span style="color: #666;">型号：</span>14-ce0016TU</p>
                                                          
                                                        </p>
                                                    </div>

                                                    
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="ltabs-items items-category-18 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                    
                                </div>
                                <div class="ltabs-items  items-category-25 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                </div>
                                <!--End Items-->
                            </div>
                            
                        </div>   
                    </div>
                </div>
                <!-- end Listing tabs -->
                
                <!-- Slider Brands -->
                <div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="7" data-items_column0="7" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                            data-pagination="no" data-lazyload="yes" data-loop="yes">
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/1.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/2.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/1.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/4.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/5.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/6.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/7.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/11.jpg" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/Public/Home/image/pinpai/22.jpg" alt="brand">
                            </a>
                        </div>
                    </div>
                </div> 
                <!-- Slider Brands -->


            </div>
          <!-- col-12 -->
        </div>
        
    </div>
</div>
<!-- //Main Container -->
   <div class="xuanf-daohang" style="width: 35px; height: 310px;;display: block;">
        <div class="xuanf-daohang-div" style=" line-height: 14px;">
            <ul>
               <a href="#dapai"><li>大牌推荐</li></a>
               <li><a href="#dnbg"><span>电脑办公</span></a></li>
               <li><a href="#shoujisj"><span>手机</span></a></li>
               <li> <a href="#yinyue"><span>影音娱乐</span></a></li>
               <li> <a href="#dajiadian"><span>大家电</span></a></li>
               <li><a href="#cartc"><span>汽车</span></a></li>
            </ul> 
        </div>
   </div>
   <div class="xuanf-daohang-right" style="width: 35px; height: 944px;visibility: visible;right: 0px;">
        <div class="xuanf-daohang-div" style=" line-height: 14px;">
            <a href="" > <img src="/Public/Home/image/hy/hy.png"></a>
            <div class="xuanf-hy">
                会员权益
            </div>
        </div>
        <div class="gouwu">
           <a href="cart.html"><img src="/Public/Home/image/hy/car.png">
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
<script type="text/javascript" src="/Public/Home/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/Public/Home/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/Public/Home/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/minicolors/jquery.miniColors.min.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="/Public/Home/js/themejs/application.js"></script>

<script type="text/javascript" src="/Public/Home/js/themejs/homepage.js"></script>

<script type="text/javascript" src="/Public/Home/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="/Public/Home/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/Public/Home/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="/Public/JS/common.js"></script>

<script language="javascript">
$('#div-1').css('display','block');
function showContent(id) {
    id = '#' + id;
    for(var i = 0; i < 6; i++){
        var name = '#div-' + i;
        $(name).css('display','none');
    }
    $(id).css('display','block');
}

$('#m1-1').css('display','block');
$('#m2-1').css('display','block');
function showTagContent(id,index){
    var el = '#' + id + index;
    for(var i = 0; i < 5; i++){
        var name = '#' + id + i;
        $(name).css('display','none');
    }
    $(el).css('display','block');
}
</script>
</body>
</html>
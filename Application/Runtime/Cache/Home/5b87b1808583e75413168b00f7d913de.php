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
		<ul class="breadcrumb">
			<li><a href="<?php echo U('Index/index');?>"><i class="fa fa-home"></i>首页</a></li>
			<li><a href="category-one.html">大家电</a></li>
            <li><input type="" name=""><i class="fa fa-search" style="margin-left: -20px;"></i></li>
		</ul>
		
		<div class="row">
        	<!--Middle Part Start-->
        	<div id="content" class="col-md-12 col-sm-8">
        		<div class="products-category">
                   <!--  <h3 class="title-category ">Accessories</h3> -->
        			<div class="category-desc">
        				<div class="row">

                            <!--品牌类目-->
                            <?php if(!empty($brand)): ?><div class="col-sm-12 list-top" style="padding:0px;">
                                <div class="list-pingpai">
                                    <h3>品牌</h3>
                                </div>
                                <div class="list-pingpai-list" id="brandContent" style="height:66px;">
                                    <div style="width:95%;float:left;">
                                        <ul id="brandList">
                                            <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li class="yy"><a href="<?php echo U('product',array('bid'=>$row['id'],'c1'=>$c1));?>"><?php echo ($row["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                    <div class="list-pinpai-gengduo">
                                         <a id="brandButton"><span>更多</span></a>
                                    </div>
                                </div>
                            </div><?php endif; ?>
                            <!--品牌类目-->

                            <?php if(!empty($category)): if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-sm-12 list-top" style="padding:0px;">
                                          <div class="list-leixing">
                                                <h3><?php echo ($row["name"]); ?></h3>
                                          </div>
                                          <div class="list-leixing-list">
                                               <div style="width:95%;float:left;">
                                                  <ul>
                                                      <?php if(is_array($row["c3"])): $i = 0; $__LIST__ = $row["c3"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('product',array('c3'=>$row1['id']));?>"><?php echo ($row1["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                  </ul>
                                              </div>
                                              <div class="list-pinpai-gengduo2">
                                                 <!--   <a href=""><span>更多</span></a> -->
                                              </div>
                                          </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>

                            <?php if(!empty($attr)): if(is_array($attr)): $i = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-sm-12 list-top" style="padding:0px;">
                                        <div class="list-leixing">
                                            <h3><?php echo ($row["name"]); ?></h3>
                                        </div>
                                        <div class="list-leixing-list">
                                            <div style="width:95%;float:left;">
                                                <ul>
                                                    <?php if(is_array($row["value"])): $i = 0; $__LIST__ = $row["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('product',array('attrvalue'=>$row1['id']));?>"><?php echo ($row1["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            </div>
                                            <div class="list-pinpai-gengduo2">
                                                <!--   <a href=""><span>更多</span></a> -->
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>

                        </div>
        			</div>
        		</div>
        			<!-- Filters -->
              <div class="product-filter product-filter-top filters-panel sort" style="margin-top:50px;">
                   <ul>
                       <li><a href="">综合<span ><img src="/Public/Home/image/hy/do.png"></span></a></li>
                       <li><a href="">人气新品<span ><img src="/Public/Home/image/hy/do.png"></span></a></li>
                       <li><a href="">销量<span ><img src="/Public/Home/image/hy/do.png"></span></a></li>
                       <li style="width:150px;float: right;">
                            <span style="margin-right:10px;">1/20</span>
                            <button><i class="fa fa-angle-left"></i></button>
                            <button><i class="fa fa-angle-right"></i></button>
                       </li>
                   </ul>
              </div>
              <!-- //end Filters -->

        			<!--changed listings-->
              <div class="products-list row nopadding-xs so-filter-gird">
                  <?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "没有产品" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block left-b">
                                    <div class="product-image-container second_img">
                                        <a href="<?php echo U('productDetail',array('id'=>$row['id']));?>" target="_self" title="Lastrami bacon">
                                            <img src="<?php echo ($row["pic1"]); ?>" class="img-1 img-responsive" alt="image1">
                                            <img src="<?php echo ($row["pic2"]); ?>" class="img-2 img-responsive" alt="image2">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart" title="加入购物车" onclick="addCart('<?php echo ($row["id"]); ?>')">
                                            <span>加入购物车</span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="addWishlist('<?php echo ($row["id"]); ?>')">
                                            <i class="fa fa-heart-o"></i>
                                            <span>收藏</span>
                                        </button>
                                    </div>
                                    <div class="caption hide-cont element1">
                                        
                                        <h4><a href="product.html" title="Pastrami bacon" target="_self"><?php echo ($row["name"]); ?></a></h4>
                                        
                                    </div>
                                    <p class="price">
                                      <span class="price-new">型号:<?php echo ($row["type"]); ?></span>
                                    </p>
                                    <div class="list-block">
                                        <button class="addToCart btn-button" type="button" title="加入购物车" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="添加收藏" onclick="wishlist.add('60');">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "没有产品" ;endif; ?>
              </div>
        			<!--// End Changed listings-->
        			<!-- Filters -->
        			<div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                           <!--  <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div> -->
                        </div>
                    </div>
        			<!-- //end Filters -->
        			
        		</div>
        		
        	</div>
        	

        	<!--Middle Part End-->
        </div>
    </div>
	<!-- //Main Container -->
	

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
                                <h3 class="modtitle">购物指南</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Common/pageDetial',array('id'=>$row1['id']));?>"><?php echo ($row1["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="/Public/Home/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="/Public/Home/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="/Public/Home/js/themejs/application.js"></script>
    <script type="text/javascript" src="/Public/JS/common.js"></script>

	<script type="text/javascript">
    // Check if Cookie exists
    if($.cookie('display')){
        view = $.cookie('display');
    }else{
        view = 'grid';
    }
    if(view) display(view);
    /*头部框下拉*/
    $('#brandButton').on('click',function(){
        var state = $('#brandContent').css('height');
        if(state == '66px'){
            $('#brandButton span').text('收起');
            $('#brandContent').css('height','auto');
        }else{
            $('#brandButton span').text('更多');
            $('#brandContent').css('height','66px');
        }
    })
    </script> 
</body>
</html>
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
		
		<div class="container">
			<div class="row">

                <div id="contents" role="main" class="main-page col-lg-2 hy-list">
    <div class="huiyuan">
        <span>商家会员中心</span>
    </div>
    <nav>
        <ul>
            <li><a href="<?php echo U('supplierOrder');?>" bank><i class="fa fa-pencil-square-o" style="font-size: 16px;margin-right: 4px;"></i>我的订单<span class="sign-10">(<?php echo ($supplierOrdercount); ?>)</span></a></li>
            <li><a href="<?php echo U('offer');?>" bank><i class="fa fa-jpy" style="font-size: 16px;margin-right: 4px;"></i>报价管理<span class="sign-10">(<?php echo ($offerCount); ?>)</span></a></li>
            <li><a href="tixian-ad.html" bank><i class="fa fa-credit-card" style="font-size: 16px;margin-right: 4px;"></i>提现管理</a></li>
            <li><a href="<?php echo U('evaluate');?>" bank><i class="fa fa-star-o" style="font-size: 16px;margin-right: 4px;"></i>评价管理<span class="sign-10">(<?php echo ($evaluateCount); ?>)</span></a></li>
            <li><a href="shouhuo-ad.html" bank><i class="fa fa-cog" style="font-size: 16px;margin-right: 4px;"></i>售后管理</a></li>
            <li><a href="<?php echo U('setting');?>" bank><i class="fa fa-cog" style="font-size: 16px;margin-right: 4px;"></i>账号设置</a></li>
            <li><a href="<?php echo U('Register/logout');?>" bank><i class="fa fa-sign-out" style="font-size: 16px;margin-right: 4px;"></i>退出登录</a></li>
        </ul>
    </nav>
</div>

                <div id="contents" role="main" class="main-page col-lg-10 col-md-12 col-sm-12 col-xs-12">
                   <div class="col-lg-12 statr-list" style="padding:0px;margin-bottom: 16px;">
                      <div class="dindan-title">
                        <h3>我的订单</h3>
                      </div>
                      <div class="dindan-list">
                        <ul>
                           <a href="<?php echo U('User/buyerOrder');?>"><li  style="color:#ff5e00;border-bottom: 4px solid #ff5e00;">全部<span><?php echo ($count1); ?></span></li></a>
                           <!--<a href="daifu.html"><li><i class="fa fa-credit-card-alt" aria-hidden="true"></i>待付款<span>2</span></li></a>-->
                           <a href="<?php echo U('User/buyerOrder',array('send'=>1));?>"><li><i class="fa fa-truck" aria-hidden="true"></i>待发货<span><?php echo ($count3); ?></span></li></a>
                           <a href="<?php echo U('User/buyerOrder',array('send'=>2));?>"><li><i class="fa fa-gift" aria-hidden="true"></i>待收货<span><?php echo ($count4); ?></span></li></a>
                           <a href="<?php echo U('User/buyerOrder',array('send'=>3));?>"><li><i class="fa fa-star-o" aria-hidden="true"></i>待评价<span><?php echo ($count5); ?></span></li></a>
                           <a href="<?php echo U('User/buyerOrder',array('send'=>4));?>"><li><i class="fa fa-check" aria-hidden="true"></i>已完成<span><?php echo ($count6); ?></span></li></a>
                        </ul>
                      </div>
                   </div>

					<div class="page type-page status-publish hentry">
						<div class="entry-content">
							<div class="entry-summary">
								<div class="woocommerce">
									<form action="" method="post">
										<table class="shop_table shop_table_responsive cart" cellspacing="0" style="width:100%;">
											<thead>
												<tr>
													<th class="">&nbsp;</th>
													<th class="">图片</th>
													<th class="">产品</th>
													<th class="">型号</th>
                                                    <th class="">价格</th>
													<th class="">数量</th>
													<th class="">操作</th>
												</tr>
											</thead>
											<tbody>

                                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr style="position: sticky;bottom:0px;background-color: #fff;z-index: 99999;">
                                                      <td colspan="7" class="actions" style="text-align: center;border: 1px solid #ccc;padding:4px 10px;background-color: rgba(244, 242, 242, 0.43);">
                                                        <div class="coupon">
                                                            <!--<input type="checkbox" name="" style=" vertical-align: middle;">-->
                                                            <span style="font-size:12px;margin-left:10px;">订单号：<?php echo ($row["outtradeno"]); ?></span>
                                                        </div>
                                                        <div style="width:50%;float:right;    text-align: right;">
                                                            <?php if(($$row["paystate"]) == "1"): ?><a href=""><span>删除</span></a><?php endif; ?>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr class="cart_item cart-table">
                                                        <td class="product-remove">

                                                        </td>
                                                        <td class="product-thumbnail" style="text-align: center;">
                                                            <a href="<?php echo U('Proudct/productDetail',array('id'=>$row['pid']));?>">
                                                                <img width="180" height="180" src="<?php echo ($row["pic1"]); ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                            </a>
                                                        </td>
                                                        <td class="product-name" data-title="Product" style="text-align: center;">
                                                            <a href="<?php echo U('Proudct/productDetail',array('id'=>$row['pid']));?>"><?php echo ($row["name"]); ?></a>
                                                        </td>
                                                        <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                                                            <div class="">
                                                                 <span>店铺：<?php echo ($row["shopName"]); ?></span><br>
                                                                 <span>型号：<?php echo ($row["type"]); ?></span><br>
                                                            </div>
                                                        </td>
                                                        <td class="product-price" data-title="Price" style="text-align: center;">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo ($row["price"]); ?></span>
                                                        </td>
                                                        <td class="product-quantity" data-title="Quantity" style="text-align: center;">
                                                            <div class="">
                                                                <span><?php echo ($row["num"]); ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal" data-title="Total" style="text-align: center;">

                                                            <?php if(($row["send"]) == "1"): ?><button type="button" class="wishlist btn-button" onclick="showSendGoodsModel(this,'<?php echo ($row["id"]); ?>')">
                                                                    <span>发货</span>
                                                                </button><?php endif; ?>

                                                        </td>
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

											</tbody>
										</table>
									</form>
                                    <div style="text-align: center;font-size: 20px;"><?php echo ($page); ?></div>
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

<!--======= send goods model-->
<div class="modal fade" tabindex="-1" role="dialog" id="sendGoodsModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">发货</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="m_sendNo" class="col-sm-3 control-label">发货单号</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="m_sendNo" name="sendNo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" onclick="sendGoods()">保存地址</button>
            </div>
        </div>
    </div>
</div>
<!--======= send goods model-->

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

<script type="text/javascript">
    /*确认收货*/
    var orderID;
    var sendObj;
    function sendGoods() {
        var sendNo = $('#m_sendNo').val();

        if(sendNo){
            $.ajax({
                url:'<?php echo U("Businessuser/checkSendGoods");?>',
                data:{id:orderID,sendNo:sendNo},
                type:'post',
                dataType:'json',
                success:function (rs) {
                    if(rs && rs['errno'] ==1){
                        alert('发货成功');
                        $(sendObj).remove();
                    }else {
                        alert("发货失败");
                    }
                }
            })
        }else {
            alert('请填写运单号');
        }
    }
    
    function showSendGoodsModel(obj,id) {
        orderID = id;
        sendObj = obj;
        $('#sendGoodsModal').modal();
    }
</script>


</body>
</html>
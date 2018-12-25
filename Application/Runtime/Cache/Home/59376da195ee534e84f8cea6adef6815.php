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

          <!-- 商家会员中心侧边栏  -->
          <div id="contents" role="main" class="main-page col-lg-2 hy-list">
    <div class="huiyuan">
        <span>商家会员中心</span>
    </div>
    <nav>
        <ul>
            <li><a href="sj-dindan.html" bank><i class="fa fa-pencil-square-o" style="font-size: 16px;margin-right: 4px;"></i>我的订单<span class="sign-10">(20)</span></a></li>
            <li><a href="<?php echo U('offer');?>" bank><i class="fa fa-jpy" style="font-size: 16px;margin-right: 4px;"></i>报价管理<span class="sign-10">(<?php echo ($offerCount); ?>)</span></a></li>
            <li><a href="tixian-ad.html" bank><i class="fa fa-credit-card" style="font-size: 16px;margin-right: 4px;"></i>提现管理</a></li>
            <li><a href="pingjia-ad.html" bank><i class="fa fa-star-o" style="font-size: 16px;margin-right: 4px;"></i>评价管理<span class="sign-10">(10)</span></a></li>
            <li><a href="shouhuo-ad.html" bank><i class="fa fa-cog" style="font-size: 16px;margin-right: 4px;"></i>售后管理</a></li>
            <li><a href="cart.html" bank><i class="fa fa-cog" style="font-size: 16px;margin-right: 4px;"></i>账号设置</a></li>
            <li><a href="<?php echo U('Register/logout');?>" bank><i class="fa fa-sign-out" style="font-size: 16px;margin-right: 4px;"></i>退出登录</a></li>
        </ul>
    </nav>
</div>
          <!-- 商家会员中心侧边栏  -->

        <div id="contents" role="main" class="main-page col-lg-10 col-md-12 col-sm-12 col-xs-12">
        

       <div class="page type-page status-publish hentry">
        <div class="entry-content">
          <div class="entry-summary">
            <div class="woocommerce">                
                <div class="row">
          <!--Middle Part Start-->
          <div id="content" class="col-md-12 col-sm-8">
            <div class="products-category">
                   <!--  <h3 class="title-category ">Accessories</h3> -->
              <div class="category-desc">
                <div class="row">
                  <div class="bjls" style="    text-align: center;background-color: #484747;color: #fff;">
                      <h2 style="margin:8px;">报价发布</h2>
                  </div>
                  <div class="col-md-12 baojia-title">
                     <h3>选择所需要报价的商品类别</h3>
                     <span style="font-weight: 200;font-size: 12px;color: #acabab;">请首先选择品牌，再选择二级商品分类，最后选择三级商品分类。</span>
                  </div>
                  <div class="col-sm-12 list-top-1" style="padding:0px;">
                    <div class="list-pingpai-list-1" id="brandContent">
                        <div style="float:left;">
                            <ul>
                                <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li onclick="getCategory2('<?php echo ($row["id"]); ?>',this)"><?php echo ($row["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                  </div>

                  <div class="col-sm-12 list-top yiji" style="padding:0px;display: none;" id="category2DIV">
                      <div class="list-leixing-list-1">
                          <div style="float:left;">
                              <ul id="category2">

                              </ul>
                          </div>
                          <div class="list-pinpai-gengduo2">
                              <!--  <a href=""><span>更多</span></a> -->
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-12 list-top yiji" style="padding:0px;display: none;" id="category3DIV">
                      <div class="list-leixing-list-1">
                          <div style="float:left;">
                              <ul id="category3">

                              </ul>
                          </div>
                          <div class="list-pinpai-gengduo2">
                              <!--  <a href=""><span>更多</span></a> -->
                          </div>
                      </div>
                  </div>


                  <div class="col-md-12 baojia-title">
                     <h3>商品列表</h3>
                  </div>
                  <div class="col-sm-12 list-top" style="padding:0px;background-color: #fff;">
                  <div class="baojia-list"  id="product-kong">
                      <div style="width:100%;text-align:center;line-height: 118px;">
                          <span>你还没有选择商品，点击上方的品牌试试！</span>
                      </div>
                  </div>

                    <table class="shop_table shop_table_responsive cart" cellspacing="0" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">图片</th>
                          <th class="product-name">产品</th>
                          <th class="product-price">型号</th>
                          <th class="product-price">填写报价</th>
                          <th class="product-name">供货优势</th>
                          <th class="product-subtotal">操作</th>
                        </tr>
                      </thead>
                      
                      <tbody id="product">

                      </tbody>
                    </table>

                  </div>

                </div><!-- row -->
          
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


<script type="text/javascript">
var bid = '';
function getCategory2(id,obj) {
    bid = id;
    $('#category2DIV').hide();
    $('#category3DIV').hide();
    $.post('<?php echo U("getCategory2");?>',{bid:id},function (rs) {
        if(rs){
            rs =JSON.parse(rs);
            var content = '';
            for(var key in rs){
                var row = rs[key];
                content += '<li onclick="getCategory3(' + row.id + ',this)">' + row.name + '</li>';
            }
            $('#category2').html(content);
            $('#category2DIV').show();
        }
    })
}

function getCategory3(id,obj) {
    $('#category3DIV').hide();
    $.post('<?php echo U("getChildCategory");?>',{cid:id},function (rs) {
        if(rs){
            rs =JSON.parse(rs);
            var content = '';
            for(var key in rs){
                var row = rs[key];
                content += '<li onclick="getProduct(' + row.id + ',this)">' + row.name + '</li>';
            }
            $('#category3').html(content);
            $('#category3DIV').show();
        }
    })
}

var proTpl = `<tr class="cart_item cart-table">
              <td class="product-thumbnail" style="text-align: center;border: 1px solid #ccc;">
                <a href="simple_product.html">
                  <img width="180" height="180" src="{<pic1>}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                </a>
              </td>

              <td class="product-name" data-title="Product" style="text-align: center;border: 1px solid #ccc; width: 200px;">
                <a href="simple_product.html">{<name>}</a>
              </td>
              <td class="product-quantity" data-title="Quantity" style="text-align: center;border: 1px solid #ccc;">
                <div class="">
                 <span>{<type>}</span><br>
                </div>
              </td>
              <td class="product-price" data-title="Price" style="text-align: center;border: 1px solid #ccc;">
                 <input type="number" class="price" min="0" max="9999" style=" border: 1px solid #ff5e00;">
              </td>
              </td>
               <td class="product-price" data-title="Price" style="text-align: center;border: 1px solid #ccc;">
               <textarea class="info" style=" border: 1px solid #ff5e00;width: 350px"" id="BZ" name="BZ" style="height: 50px; width: 350px">最多可填写32个文字</textarea>
              </td>
              <td class="product-subtotal" data-title="Total" style="text-align: center;border: 1px solid #ccc;">
              <!--   <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:16px"></i></a> -->
                <a onclick="addOffer('{<id>}',this)"><span>提交</span></a>
              </td>
            </tr>`;

function getProduct(id,obj) {
    $('#product').html('');
    $.post('<?php echo U("getProduct");?>',{cid:id,bid:bid},function (rs) {
        if(rs){
            rs =JSON.parse(rs);
            var content = '';
            for(var key in rs){
                var tpl = proTpl;
                var row = rs[key];
                for(var key1 in row){
                    var name = '{<' + key1 + '>}';
                    tpl = tpl.replace(name,row[key1]);
                }
                content += tpl;
            }
            $('#product').html(content);
        }
    })
}
    
function addOffer(id,obj) {
    var price = $(obj).parents('tr').find('.price').val();
    var info = $(obj).parents('tr').find('.info').val();
    $.post('<?php echo U("setOffer");?>',{pid:id,price:price,info:info},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                alert('报价成功');
                $(obj).parents('tr').remove();
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('报价失败');
        }
    })
}
</script>

<script type="text/javascript">
        //多行文本输入框剩余字数计算
        function checkMaxInput(obj, maxLen) {
            if (obj == null || obj == undefined || obj == "") {
                return;
            }
            if (maxLen == null || maxLen == undefined || maxLen == "") {
                maxLen = 100;
            }

            var strResult;
            var $obj = $(obj);
            var newid = $obj.attr("id") + 'msg';

            if (obj.value.length > maxLen) {  //如果输入的字数超过了限制
                obj.value = obj.value.substring(0, maxLen); //就去掉多余的字
                strResult = '<span id="' + newid + '" class=\'Max_msg\' ><br/>剩(' + (maxLen - obj.value.length) + ')字/32</span>'; //计算并显示剩余字数
            }
            else {
                strResult = '<span id="' + newid + '" class=\'Max_msg\' ><br/>剩(' + (maxLen - obj.value.length) + ')字/32</span>'; //计算并显示剩余字数
            }

            var $msg = $("#" + newid);
            if ($msg.length == 0) {
                $obj.after(strResult);
            }
            else {
                $msg.html(strResult);
            }
        }
</script>



</body>
</html>
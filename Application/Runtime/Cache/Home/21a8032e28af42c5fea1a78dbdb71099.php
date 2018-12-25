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
              <a href=""  style="color:#d9d7d7;margin-left:15px"><span>你好！2306</span></a>
              <!-- <a href=""  style="color:#d9d7d7;margin-left:15px"><span>免费注册</span></a> -->
              <div class="right-sec" style="color:#d9d7d7;">
                <ul style="margin-top: 3px;" class="baobei">
                  <li class=""><a href="#." style="color:#d9d7d7;">我的宝贝</a>
                      <ul class="baobei-ying">
                          <a href=""><li style="display:block;">已买到的宝贝</li></a>
                          <a href=""><li style="display:block;">已卖出的宝贝</li></a>
                      </ul>
                  </li>
                  <li><a href="#." style="color:#d9d7d7;">收藏夹</a></li>
                  <li><a href="#." style="color:#d9d7d7;">手机站</a></li>
                  <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/wx2.png" style="margin-right:5px;"></span>微信公众号 </a></li>
                  <li><a href="#." style="color:#d9d7d7;">帮助中心 </a></li>
                  <li><a href="#." style="color:#d9d7d7;"><span><img src="/Public/Home/image/hy/dh.png" style="margin-right:5px;"></span>网站导航</a></li>

                </ul>

              </div>
            </div>
          </div>

  <!-- Header -->
          <header style="padding-top:40px;">
            <div class="container" >
              <div class="logo">
                  <a href="index.html"><img src="images/logo.png" alt="" ></a>
              </div>
              <div>
                  <div class="shop_process_box">
					<ul class="shop_process">
						<li class="fl">
							<div class="shop_process_imgbox cur tc"></div>
							<div class="shop_process_word c_666 tc">确认订单</div>
						</li>
						<li class="fl">
							<div class="shop_process_imgbox tc"><span>2</span></div>
							<div class="shop_process_word c_666 tc">在线付款</div>
						</li>
						<li class="fl">
							<div class="shop_process_imgbox tc"><span>3</span></div>
							<div class="shop_process_word c_666 tc">确认收货</div>
						</li>
					</ul>
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
		        <div class="col-lg-12 querens" style="">
		           <h3 style=" font-weight: bold;color: #ff5e00;">确认收货地址</h3>
		        </div>
		        <div class="w1200">
					<!-- <p class="font16 c_999 fontw order_adr_title"></p> -->
					<ul class="order_adr_choose_box clearfix">
						<?php if(is_array($orderInfo[0]['address'])): $i = 0; $__LIST__ = $orderInfo[0]['address'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><li class="fl mr-20 cur" onclick="selectAddress(this)">
							<?php else: ?>
							<li class="fl mr-20" onclick="selectAddress(this)"><?php endif; ?>
								<div class="order_adr_choose font13 c_666">
									<p class="fontw postPople"  style="margin:0px;"><?php echo ($row["name"]); ?> <?php echo ($row["phone"]); ?></p>
									<hr style="margin:0px;">
									<span class="postAddress"><?php echo ($row["province"]); ?> <?php echo ($row["city"]); ?> <?php echo ($row["area"]); ?></span><br>
									<span class="postArea"><?php echo ($row["address"]); ?></span>
								</div>

								<p class="clearfix font14 dis_none">
									<a class="fl" onclick="setDefaultAddress('<?php echo ($row["id"]); ?>')">设为默认</a>
									<a class="fr ml-20 c_006bd5" onclick="delAddress(this,'<?php echo ($row["id"]); ?>')">删除</a>
									<!--<a class="fr c_006bd5" onclick="upAddress(this,'<?php echo ($row["id"]); ?>')">修改</a>-->
								</p>

							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						<li class="fl">
							<a onclick="$('#myModal').modal()" class="order_adr_add tc">
								<span class="fontw tc">+</span>
								<span class="font14 c_333">使用新地址</span>
							</a>
						</li>
					</ul>
				</div>
		        <div class="col-lg-3 address">
		        </div>
				<div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page type-page status-publish hentry">
						<div class="entry-content">
							<div class="entry-summary">
							    <div class="woocommerce">
							       <h3 style=" font-weight: bold;color: #ff5e00;">确认订单信息</h3>
							    </div>
								<div class="woocommerce">
									<form action="" method="post">
										<table class="shop_table shop_table_responsive cart" cellspacing="0" style="width:100%;">
											<thead>
												<tr>
													<th class="product-thumbnail">图片</th>
													<th class="product-name">产品</th>
													<th class="product-price">型号</th>
                                                    <th class="product-price">价格</th>
													<th class="product-quantity">数量</th>
													<th class="product-subtotal">小计</th>
												</tr>
											</thead>
											
											<tbody id="productItem">
												<?php if(is_array($orderInfo)): $i = 0; $__LIST__ = $orderInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr class="cart_item cart-table">
														<td class="product-thumbnail" style="text-align: center;    border: 1px solid #f9ecec;">
															<img width="180" height="180" src="<?php echo ($row["product"]["pic1"]); ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
														</td>

														<td class="product-name" data-title="Product" style="text-align: center;border: 1px solid #f9ecec;">
															<?php echo ($row["product"]["name"]); ?>
														</td>
														<td class="product-quantity" data-title="Quantity" style="text-align: center;border: 1px solid #f9ecec;">
															<?php echo ($row["product"]["type"]); ?>
														</td>

														<td class="product-price" data-title="Price" style="text-align: center;border: 1px solid #f9ecec;">
															<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">￥</span><?php echo ($row["offer"]["price"]); ?></span>
														</td>

														<td class="product-quantity" data-title="Quantity" style="text-align: center;border: 1px solid #f9ecec;">
															<div class="" >
															  <input type="hidden" name="offerID" value="<?php echo ($row["offer"]["id"]); ?>">
															  <input type="hidden" name="productID" value="<?php echo ($row["product"]["id"]); ?>">
															  <input type="number" name="productNum" AUTOCOMPLETE="off" value="<?php echo ($row["product"]["num"]); ?>" onchange="setTotal(this,'<?php echo ($row["offer"]["price"]); ?>');" class="text_box" max="999" min="1"  inputmode="numeric" style="width: 60px;text-align: center;">
															</div>
														</td>
														<td class="product-subtotal" data-title="Total" style="text-align: center;border: 1px solid #f9ecec;">
															<span class="woocommerce-Price-amount amount" style="color:#ff5e00;font-size: 18px;font-weight: bold;"><span class="woocommerce-Price-currencySymbol" >￥</span><span class="minTotal"><?php echo ($row['product']['num'] * $row['offer']['price']); ?></span></span>
														</td>
													</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
									</form>

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
    <div class="main-container container">
		<div class="container">
			<div class="row">
				<div class="fl col-lg-4" >
					<div class="clearfix order_pay_type_box">
						<h3 style="    color: #ff5e00;font-weight: bold;">快捷支付</h3>
						<ul class="fl clearfix">
							<li class="fl clearfix">
								<label class="wx_pay order_pay_type fl">
									<input type="radio" name="pay_type" value="1">
								</label>
							</li>
							<li class=" clearfix">
								<label class="zfb_pay order_pay_type fl">
									<input type="radio" name="pay_type" value="2">
								</label>
							</li>
						</ul>
					</div>
					<div class="leaving_msg_box ">
						<p class="leaving_msg">给商家留言:</p>
						<textarea id="message" class="leaving_msg_content font12"></textarea>
					</div>
				</div>
				<div class="buy_msg_box col-lg-8">
				<p class="tr"><span class="font16 mr-20 fontw c_333 order_confirm_total">实付款:</span>￥<span class="fontw" style="font-size:18px;color:#ff5e00;font-weight: bold;" id="Total">0.00</span></p>
				<p class="tr"><span class="font14 c_333 fontw">寄送至： </span><span class="c_666 font14" id="Address"></span></p>
				<p class="tr"><span class="font14 c_333 fontw">收货人：</span><span class="c_666 font14" id="pople"></span></p>
			</div>
			<div style="width:50%;float:right;text-align: right;margin-top:8%;" class="zflj">
                <input type="button" onclick="createOrder()" class="button" name="update_cart" value="立即支付" >
            </div>
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
   

<!--================add address modal==================== -->
	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">添加地址</h4>
				</div>
				<div class="modal-body">
					<div class="row" style="padding: 5px;">
						<div class="col-sm-4">
							<select class="form-control" id="province" name="province" onchange="setCity(this)">

							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" id="city" name="city" onchange="setArea(this)">
								<option value="0">--市--</option>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" id="area" name="area">
								<option value="0">--区--</option>
							</select>
						</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<label for="m_address" class="col-sm-3 control-label">详细地址</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="m_address" name="address">
							</div>
						</div>
						<div class="form-group">
							<label for="postcode" class="col-sm-3 control-label">邮编地址</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="postcode" name="postcode">
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">收件人姓名</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-sm-3 control-label">收件人号码</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="phone" name="phone">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<label>
									<input type="checkbox" name="isdefault"> 设为默认
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="addAddress()">保存地址</button>
				</div>
			</div>
		</div>
	</div>
<!--================add address modal==================== -->


<!--address tpl-->
	<div id="addressTpl" style="display: none;">
		<li class="fl mr-20 cur" onclick="selectAddress(this)">
			<div class="order_adr_choose font13 c_666">
				<p class="fontw postPople"  style="margin:0px;">{[name]} {[phone]}</p>
				<hr style="margin:0px;">
				<span class="postAddress">{[province]} {[city]} {[area]}</span><br>
				<span class="postArea">{[address]}</span>
			</div>

			<p class="clearfix font14 dis_none">
				<a class="fl" onclick="setDefaultAddress('{[id]}')">设为默认</a>
				<a class="fr ml-20 c_006bd5" onclick="delAddress(this,'{[id]}')">删除</a>
				<!--<a class="fr c_006bd5" onclick="upAddress(this,'{[id]}')">修改</a>-->
			</p>
		</li>
	</div>
<!--address tpl-->

<!--alipay post-->
    <form action="<?php echo U('Order/aliPay');?>" method="post" id="outTradeNoForm">
        <input type="hidden" name="outTradeNo">
    </form>
<!--alipay post-->

<!--======= wx pay model-->
    <div class="modal fade" tabindex="-1" role="dialog" id="wxPayModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">微信付款</h4>
                </div>
                <div class="modal-body">
                    <div style="width: 50%; float: left; text-align: center;">
                        <p>扫描右侧二维码付款</p>
                        <p class="subject"></p>
                        <p style="font-size: 32px; line-height: 64px; color: red">金额:<span class="total"></span></p>
                        <p style="text-align: center;">
                            付款完成后如页面没有跳转请到<a href="#">用户中心-我的订单</a>查看订单付款状态
                        </p>
                    </div>
                    <div id="wxPayQrcode" style="text-align: center; width: 50%; float: left;"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
<!--======= wx pay model-->

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
<script type="text/javascript" src="/Public/JS/QRCode.js"></script>

<script type="text/javascript">
    function init() {
        var count = 0;
        $('#productItem tr').each(function () {
            var minTotal = $(this).find('.minTotal').text();
            count += parseInt(minTotal);
        })
        $('#Total').text(count);

        if($('.order_adr_choose_box li').length > 1){
            var pople = $($('.order_adr_choose_box li')[0]).find('.postPople').text();
            var address = $($('.order_adr_choose_box li')[0]).find('.postAddress').text();
            var area = $($('.order_adr_choose_box li')[0]).find('.postArea').text();
            $('#pople').text(pople);
            $('#Address').text(address + ' ' +area);
        }
    }
    init()

	function setTotal(obj,price){
        var tbodyObj = $(obj).parents('tbody');
        var trObj = $(obj).parents('tr');
	    var minTotal = $(obj).val() * price;
	    //小计
		trObj.find('.minTotal').text(minTotal);
		//总价
		var Total = 0;
		tbodyObj.find('.minTotal').each(function () {
            Total += parseInt($(this).text());
        })
		$('#Total').text(Total);
	}

    function selectAddress(obj){
        $('.order_adr_choose_box li').each(function () {
            $(this).removeClass('cur');
        })
        $(obj).addClass('cur');
        var pople = $(obj).find('.postPople').text();
        var address = $(obj).find('.postAddress').text();
        var area = $(obj).find('.postArea').text();
        $('#pople').text(pople);
        $('#Address').text(address + ' ' +area);
	}
	// $('.order_adr_choose_box li').on('click',function () {
	// 	$('.order_adr_choose_box li').each(function () {
	// 		$(this).removeClass('cur');
	// 	})
	// 	$(this).addClass('cur');
     //    var pople = $(this).find('.postPople').text();
     //    var address = $(this).find('.postAddress').text();
     //    var area = $(this).find('.postArea').text();
     //    $('#pople').text(pople);
     //    $('#Address').text(address + ' ' +area);
	// })

	function delAddress(obj,id) {
        if(confirm('确定要删除?')){
            $.ajax({
                url:'<?php echo U("User/delAddress");?>',
                data:{id:id},
                type:'post',
				dataType:'json',
                success:function (rs) {
                    if(rs && rs['errno'] == 1){
                        alert('删除成功');
                        $(obj).parents('li').remove();
					}else {
                        alert('删除失败');
					}
                }
            })
		}
    }

    function setDefaultAddress(id) {
		if(confirm('确定要将该地址设为默认？')){
		    $.ajax({
				url:'<?php echo U("User/setDefaultAddress");?>',
				data:{id:id},
				type:'post',
				dataType:'json',
				success:function (rs) {
					if(rs && rs['errno'] == 1){
					    alert('设置默认收货地址成功');
					}else {
					    alert('设置默认收货地址失败');
					}
                }
			})
		}
    }

    function addAddress() {
        if($('#province').find('option:selected').val() == 0 || $('#city').find('option:selected').val() == 0 || $('#area').find('option:selected').val() == 0 || $('#m_address').val() == '' ){
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
        var address = $('#m_address').val();
        var name = $('#name').val();
        var postcode = $('#postcode').val();
        var phone = $('#phone').val();
        var isdefault = $('#isdefault').is(':checked') ? 1 : 0;

        var data = {province:province,city:city,area:area,address:address,name:name,postcode:postcode,phone:phone,isdefault:isdefault};

        $.post('<?php echo U("User/addAddress");?>',data,function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    data['id'] = rs['data'];
					var tpl = $('#addressTpl').html();
                    for(var key in data){
                        var reg = '\\{\\[' + key + '\\]\\}';
                        tpl = tpl.replace(new RegExp(reg,'g'),data[key]);
                    }
                    $('.order_adr_choose_box').prepend(tpl);
                    selectAddress($('.order_adr_choose_box li')[0]);
                }else {
                    alert(rs['msg']);
                }
            }else {
                alert('保存收货地址失败');
            }
        })
        return false;
    }

    function upAddress(obj,id) {

    }
</script>

<script type="text/javascript">
	/*生成支付订单进行支付*/
	function createOrder() {
	    var allOrder = {};
	    var product = {};
	    var i = 0;
		$('#productItem tr').each(function () {
			var singlerOrder = {};
			singlerOrder['productID'] = $(this).find('input[name="productID"]').val();
            singlerOrder['productNum'] = $(this).find('input[name="productNum"]').val();
            singlerOrder['offerID'] = $(this).find('input[name="offerID"]').val();
            singlerOrder['minTotal'] = $(this).find('.minTotal').text();
            product[i] = singlerOrder;
            i++;
        })
		allOrder['product'] = product;
		allOrder['payType'] = $('input[name="pay_type"]:checked').val();
		allOrder['message'] = $('#message').val();
		allOrder['total'] = $('#Total').text();
		allOrder['address'] = $('#Address').text();
		allOrder['pople'] = $('#pople').text();
		
		$.ajax({
			url:'<?php echo U("Order/createOrder");?>',
			data:allOrder,
			type:'post',
			dataType:'json',
			success:function (rs) {
			    if(rs && rs['errno'] == 1){
			        var outTradeInfo = rs['data'];
                    if(outTradeInfo['payType'] == 1){
                        //微信支付
                        wxPay(outTradeInfo['order']);
                    }
                    if(outTradeInfo['payType'] == 2){
                        //支付宝支付
                        $('#outTradeNoForm input[name="outTradeNo"]').val(outTradeInfo['order']);
                        $('#outTradeNoForm').submit();
                    }
				}else {
			        alert('创建订单失败!');
                }
            }
		})
    }

    function wxPay(outTradeNo) {
        $.ajax({
            url:'<?php echo U("Order/wxPay");?>',
            data:{outTradeNo:outTradeNo},
            type:'post',
            dataType:'json',
            success:function (rs) {
                if(rs && rs['errno'] == 1){
                    var qrcode = new QRCode(document.getElementById("wxPayQrcode"),{
                        width:150,
                        height:150,
                    });
                    qrcode.makeCode(rs['data']['payUrl']);
                    $("#wxPayModal .subject").text(rs['data']['title']);
                    $("#wxPayModal .total").text(rs['data']['total']);
                    $('#wxPayModal').modal();
                }else {
                    alert('支付失败!');
                }
            }
        })
    }
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新增文章 - 资讯管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo U('save');?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>页面名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($page["name"]); ?>" placeholder="" id="articletitle" name="name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="type" class="select">
					<?php if(($page["type"]) == "1"): ?><option selected value="1">购物指南</option>
					<?php else: ?>
						<option value="1">购物指南</option><?php endif; ?>

					<?php if(($page["type"]) == "2"): ?><option selected value="2">支付方式</option>
					<?php else: ?>
						<option value="2">支付方式</option><?php endif; ?>

					<?php if(($page["type"]) == "3"): ?><option selected value="3">售后服务</option>
					<?php else: ?>
						<option value="3">售后服务</option><?php endif; ?>

					<?php if(($page["type"]) == "4"): ?><option selected value="4">商家入驻</option>
					<?php else: ?>
						<option value="4">商家入驻</option><?php endif; ?>

					<?php if(($page["type"]) == "5"): ?><option selected value="5">关于我们</option>
					<?php else: ?>
						<option value="5">关于我们</option><?php endif; ?>
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($page["od"]); ?>" placeholder="" id="articlesort" name="od">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name="content" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type='hidden' name='id' value='<?php echo ($page["id"]); ?>'/>
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>保存</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
	var ue = UE.getEditor('editor');
    ue.ready(function () {
        ue.setContent(htmldecode("<?php echo ($page["content"]); ?>"));
    })

    function htmldecode(s){
        var div = document.createElement('div');
        div.innerHTML = s;
        return div.innerText || div.textContent;
    }
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>建材列表</title>
<link rel="stylesheet" href="/Public/Admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">

<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c"> 产品分类
			<span class="select-box" style="margin-top: 5px;">
				<select id="c1" class="" onchange="getCategory(1,this)">
					<option value="0">请选择分类</option>
				</select>
				<select id="c2" class="" onchange="getCategory(2,this)">
					<option value="0">请选择分类</option>
				</select>
				<select id="c3" class="" onchange="getCategory(3,this)">
					<option value="0">请选择分类</option>
				</select>
				<select id="c4" class="" onchange="getCategory(4,this)">
					<option value="0">请选择分类</option>
				</select>
			</span>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a class="btn btn-primary radius" onclick="product_add()" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value=""></th>
						<th width="40">ID</th>
						<th width="60">缩略图</th>
						<th width="100">产品名称</th>
						<th width="100">产品型号</th>
						<th width="40">排序</th>
						<th width="60">状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

var dataTableObj = $('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"aoColumnDefs": [
		//{"bVisible": false, "aTargets": [ 4 ]} //控制列的隐藏显示
		{"orderable":false,"aTargets":[0,1,2,3,4,5,6,7]}// 制定列不参与排序
	],
	"serverSide": true,
	"ajax":{
		"url":"<?php echo U('getProduct');?>",
		"type":"POST",
		"dataSrc":AddColumns,
	},
	"columns": [
		{ data: "checkbox" },
		{ data: "id" },
		{ data: "pic"},
		{ data: "name" },
        { data: "type" },
        { data: "od" },
        { data: "state" },
		{ data: "action" },
	],
});

//datatable动态的生成的表格上添加类名
$('.table-sort').on('draw.dt',function(){
	$('.table-sort tr').addClass('text-c');
	for(var i = 0; i < $('.table-sort tbody tr').length; i++){
		var trObj = $('.table-sort tbody tr')[i];
        $(trObj).find('td:eq(6)').addClass('td-status');
		$(trObj).find('td:eq(7)').addClass('td-manage');
	}
})

//给datatable添加列
function AddColumns(data){
	for(var i = 0; i < data['data'].length; i++){
		//添加选择框
		data['data'][i]['checkbox'] = '<input id="culbClassCheck" type="checkbox" value="' + data['data'][i]['id'] + '" name="culbClassCheck">';

		//添加操作列
		if(data['data'][i]['state'] == 1){
            var action = '<a style="text-decoration:none" onClick="product_stop(this,' + data['data'][i]['id'] + ')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>';
		}else {
            var action = '<a style="text-decoration:none" onClick="product_start(this,' + data['data'][i]['id'] + ')" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a>';
		}
        action += '<a style="text-decoration:none" class="ml-5" onClick="product_edit(this,' + data['data'][i]['id'] + ')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>';
        action += '<a style="text-decoration:none" class="ml-5" onClick="product_del(this,' + data['data'][i]['id'] + ')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>';
		data['data'][i]['action'] = action;

		if(data['data'][i]['state'] == 1){
            data['data'][i]['state'] = '<span class="label label-success radius">已发布</span>';
		}else {
            data['data'][i]['state'] = '<span class="label label-defaunt radius">已下架</span>';
		}

        data['data'][i]['pic'] = '<img style="max-height: 40px;" src="' + data['data'][i]['pic'] + '" />'
	}
	//console.log(data);
	return data['data'];
}

/*产品-添加*/
function product_add(){
	var index = layer.open({
		type: 2,
		title: '添加产品',
		content: '<?php echo U("productAdd");?>'
	});
	layer.full(index);
}
/*产品-查看*/
function product_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*产品-下架*/
function product_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
	    $.post('<?php echo U("changeState");?>',{id:id,state:2},function (rs) {
			if(rs){
                rs = JSON.parse(rs);
			    if(rs['errno'] == 1){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,' + id + ')" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
                    $(obj).remove();
                    layer.msg('已下架!',{icon: 5,time:1000});
				}else {
			        alert('下架失败');
				}
			}else {
			    alert('下架失败');
			}
        })
	});
}

/*产品-发布*/
function product_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
        $.post('<?php echo U("changeState");?>',{id:id,state:1},function (rs) {
			if(rs){
                rs = JSON.parse(rs);
			    if(rs['errno'] == 1){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,' + id + ')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                    $(obj).remove();
                    layer.msg('已发布!',{icon: 6,time:1000});
				}else {
			        alert('发布失败');
				}
			}else {
			    alert('发布失败');
			}
        })
	});
}

/*产品-编辑*/
function product_edit(obj,id){
    var url = location.href;
    url = url.substring(0,url.lastIndexOf('/')) + '/ProductAdd/id/' + id;
	var index = layer.open({
		type: 2,
		title: '编辑产品',
		content: url,
	});
	layer.full(index);
}

/*产品-删除*/
function product_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo U("del");?>',
			dataType: 'json',
			data:{id:id},
			success: function(rs){
			    if(rs){
			        if(rs['errno'] == 1){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
					}else {
			            alert('删除失败');
					}
				}else {
			        alert('删除失败');
				}
			},
			error:function(data) {
				calert('删除失败');
			},
		});		
	});
}

function getCategory(level,obj) {
    //根据条件加载重绘表格内容
    var c1 = $('#c1').find("option:selected").val();
    var c2 = $('#c2').find("option:selected").val();
    var c3 = $('#c3').find("option:selected").val();
    var c4 = $('#c4').find("option:selected").val();
    dataTableObj.fnSettings().ajax.data = {c1:c1,c2:c2,c3:c3,c4:c4};
	dataTableObj.fnDraw();

	var pid = $(obj).find("option:selected").val();
    if(level == 1){
        $('#c2').html("<option value='0'>请选择分类</option>");
        $('#c3').html("<option value='0'>请选择分类</option>");
        $('#c4').html("<option value='0'>请选择分类</option>");
    }
    if(level == 2){
        $('#c3').html("<option value='0'>请选择分类</option>");
        $('#c4').html("<option value='0'>请选择分类</option>");
    }
    if(level == 3){
        $('#c4').html("<option value='0'>请选择分类</option>");
    }
    if(pid == 0 || level > 3){
        return;
    }

    $.post('<?php echo U("Category/getCategoryByPID");?>',{pid:pid},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            var content = "<option value='0'>请选择分类</option>";
            for(var key in rs){
                var row = rs[key];
                content += "<option value='" + row.id + "'>" + row.name + "</option>";
            }

            var id = '#c' + (level + 1);
            $(id).html(content);
        }
    })
}

/*加载一级分类*/
$.post('<?php echo U("Category/getCategoryByPID");?>',{pid:0},function (rs) {
    if(rs){
        rs = JSON.parse(rs);
        var content = "<option value='0'>请选择分类</option>";
        for(var key in rs){
            var row = rs[key];
            content += "<option value='" + row.id + "'>" + row.name + "</option>";
        }
        $('#c1').html(content);
    }
})
</script>
</body>
</html>
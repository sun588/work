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
<title>品牌管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="post" action="<?php echo U('add');?>" id="add_form">
			<input name="name" type="text" placeholder="品牌名称" value="" class="input-text" style="width:120px">
			<button type="button" class="btn btn-success" id="" name="" onClick="addBrand()"><i class="Hui-iconfont">&#xe600;</i> 添加</button>
		</form>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="70">ID</th>
					<th width="120">品牌名称</th>
					<th width="100">操作</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

var dataTableObj = $('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"aoColumnDefs": [
		//{"bVisible": false, "aTargets": [ 4 ]} //控制列的隐藏显示
		{"orderable":false,"aTargets":[0,2,3]}// 制定列不参与排序
	],
	"serverSide": true,
	"ajax":{
		"url":"<?php echo U('getBrand');?>",
		"type":"POST",
		"dataSrc":AddColumns,
	},
	"columns": [
		{ data: "checkbox" },
		{ data: "id" },
		{ data: "name" },
		{ data: "action" },
	],
});

//datatable动态的生成的表格上添加类名
$('.table-sort').on('draw.dt',function(){
	$('.table-sort tr').addClass('text-c');
	for(var i = 0; i < $('.table-sort tbody tr').length; i++){
		var trObj = $('.table-sort tbody tr')[i];
		$(trObj).find('td:eq(3)').addClass('td-manage');
	}
})

//给datatable添加列
function AddColumns(data){
	for(var i = 0; i < data['data'].length; i++){
		//添加选择框
		data['data'][i]['checkbox'] = '<input id="culbClassCheck" type="checkbox" value="' + data['data'][i]['id'] + '" name="culbClassCheck">';

		//添加操作列
		var action = '<a title="编辑" href="javascript:;" onclick="edit(' + data['data'][i]['id'] + ',\'' + data['data'][i]['name'] + '\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="del(' + data['data'][i]['id'] + ')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>';

		data['data'][i]['action'] = action;
	}
	//console.log(data);
	return data['data'];
}

function addBrand() {
	$.post('<?php echo U("add");?>',$('#add_form').serialize(),function (rs) {
		if(rs){
		    rs = JSON.parse(rs);
		    if(rs['errno'] == 1){
                dataTableObj.fnDraw();
			}else {
		        alert(rs['msg']);
			}
		}else {
		    alert('添加数据失败');
		}
    })
}

function edit(id,name) {
    layer.open({
        type: 1,
        area: ['300px','200px'],
        fix: false, //不固定
        maxmin: false,
        shade:0.4,
        title: '修改',
        content: '<div style="text-align: center;">名称：<input id="newName" type="text" value="' + name + '"><br/><input onclick="upData(' + id + ')" type="button" value="修改"></div>',
    });
}

function upData(id,index) {
	var name = $('#newName').val();
	$.post('<?php echo U("upData");?>',{id:id,name:name},function(rs){
		if(rs){
		    rs = JSON.parse(rs);
		    if(rs['errno'] == 1){
                layer.closeAll();
                dataTableObj.fnDraw();
			}else {
		        alert(rs['msg']);
			}
		}else {
		    alert('修改数据失败');
		}
    })
}

function del(id) {
    if(confirm('确定要删除?')){
        $.post('<?php echo U("del");?>',{id,id},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    dataTableObj.fnDraw();
                }else {
                    alert('删除失败');
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
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
<link rel="stylesheet" href="/Public/Admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<style>
		/*按钮*/
	.icon_div {
		display: inline-block;
		height: 25px;
		width: 35px;
	}

	.icon_div a {
		display: inline-block;
		width: 27px;
		height: 20px;
		cursor: pointer;
	}

	/*end--按钮*/

	/*ztree表格*/
	.ztree {
		padding: 0;
		border: 2px solid #CDD6D5;
	}

	.ztree li a {
		vertical-align: middle;
		height: 30px;
	}

	.ztree li > a {
		width: 100%;
	}

	.ztree li > a,
	.ztree li a.curSelectedNode {
		padding-top: 0px;
		background: none;
		height: auto;
		border: none;
		cursor: default;
		opacity: 1;
	}

	.ztree li ul {
		padding-left: 0px
	}

	.ztree div.diy span {
		line-height: 30px;
		vertical-align: middle;
	}

	.ztree div.diy {
		height: 100%;
		width: 33%;
		line-height: 30px;
		border-top: 1px dotted #ccc;
		border-left: 1px solid #eeeeee;
		text-align: center;
		display: inline-block;
		box-sizing: border-box;
		color: #6c6c6c;
		font-family: "SimSun";
		font-size: 12px;
		overflow: hidden;
	}

	.ztree div.diy:first-child {
		text-align: left;
		text-indent: 10px;
		border-left: none;
	}

	.ztree .head {
		background: #5787EB;
	}

	.ztree .head div.diy {
		border-top: none;
		border-right: 1px solid #CDD2D4;
		color: #fff;
		font-family: "Microsoft YaHei";
		font-size: 14px;
	}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>产品分类</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品分类 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<table class="table">
	<tr>
		<td width="60%" class="va-t"><ul id="treeDemo" class="ztree"></ul></td>
		<td class="va-t"><iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=390px SRC="<?php echo U('categoryAdd');?>"></iframe></td>
	</tr>
</table>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript">
var setting = {
    view: {
        dblClickExpand: false,
        showLine: false,
        selectedMulti: false,
        showIcon: true,
        addDiyDom: addDiyDom,
    },
    data: {
        simpleData: {
            enable:true,
            idKey: "id",
            pIdKey: "pid",
            rootPId: "0"
        }
    },
    callback: {
        beforeClick: function(treeId, treeNode) {

        }
    }
};

function addDiyDom(treeID,treeNode){
    var spaceWidth = 15;

    var liObj = $("#" + treeNode.tId);
    var aObj = $("#" + treeNode.tId + "_a");
    var switchObj = $("#" + treeNode.tId + "_switch");
    var icoObj = $("#" + treeNode.tId + "_ico");
    var spanObj = $("#" + treeNode.tId + "_span");

    aObj.attr('title', '');
    aObj.append('<div class="diy swich"></div>');

    var div = $(liObj).find('div').eq(0);

    switchObj.remove();
    spanObj.remove();
    icoObj.remove();

    div.append(switchObj);
    div.append(spanObj);

    var spaceStr = "<span style='height:1px;display: inline-block;width:" + (spaceWidth * treeNode.level) + "px'></span>";
    switchObj.before(spaceStr);

    var editStr = '';
    editStr += '<div class="diy">' + (treeNode.od ? treeNode.od : 0 ) + '</div>';
    editStr += '<div class="diy">' + formatHandle(treeNode) + '</div>';
    aObj.append(editStr);
}

function formatHandle(treeNode) {
    var htmlStr = '';
    htmlStr += '<div class="icon_div"><a class="icon_edit" title="修改" href="javascript:edit(' + treeNode.id + ')">修改</a></div>';
    if(treeNode.level < 2){
        htmlStr += '<div class="icon_div"><a class="icon_add" title="添加子类" href="javascript:addChild(' + treeNode.id + ')">添加</a></div>';
	}
    htmlStr += '<div class="icon_div"><a class="icon_del" title="删除" href="javascript:del(' + treeNode.id + ',' + treeNode.tId + ');">删除</a></div>';
    return htmlStr;
}

function addChild(pid) {
    var formContent = "<div style='text-align: center;'><form id='addChildForm'>";
    formContent += "名称:<input type='text' id='addName'><br/>";
    formContent += "排序:<input type='text' id='addOd'><br/>";
    formContent += "备注:<input type='text' id='addNote'><br/>";
    formContent += "<input type='button' value='提交' onclick='addData(" + pid + ")'></form></div>";

    layer.open({
        type: 1,
        area: ['300px','200px'],
        fix: false, //不固定
        maxmin: false,
        shade:0.4,
        title: '添加子类',
        content: formContent
    });
}

function addData(pid){
    var name = $('#addName').val();
    var od = $('#addOd').val();
    var note = $('#addNote').val();
    $.post('<?php echo U("add");?>',{name:name,od:od,note:note,pid:pid},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
				location.reload();
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('添加失败');
        }
    })
}

function del(id,objID){
    if(confirm("确定要删除?")){
        $.post('<?php echo U("del");?>',{id:id},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                if(rs['errno'] == 1){
                    $("#" + objID.id).remove();
                }else {
                    alert(rs['msg']);
                }
            }else {
                alert('删除失败');
            }
        })
	}
}

function edit(id){
    $.post('<?php echo U("getCategoryByID");?>',{id:id},function (rs) {
		if(rs){
		    rs = JSON.parse(rs);

			var formContent = "<div style='text-align: center;'><form id='addChildForm'>";
			formContent += "名称:<input type='text' id='addName' value='" + rs.name + "'><br/>";
			formContent += "排序:<input type='text' id='addOd' value='" + rs.od + "'><br/>";
			formContent += "备注:<input type='text' id='addNote' value='" + rs.note + "'><br/>";
			formContent += "<input type='button' value='提交' onclick='editData(" + id + ")'></form></div>";

			layer.open({
				type: 1,
				area: ['300px','200px'],
				fix: false, //不固定
				maxmin: false,
				shade:0.4,
				title: '添加子类',
				content: formContent
			});
		}else {
		    alert('修改数据失败');
		}
    })
}

function editData(id){
    var name = $('#addName').val();
    var od = $('#addOd').val();
    var note = $('#addNote').val();
    $.post('<?php echo U("upData");?>',{name:name,od:od,note:note,id:id},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            if(rs['errno'] == 1){
                location.reload();
            }else {
                alert(rs['msg']);
            }
        }else {
            alert('修改失败');
        }
    })
}

$.post('<?php echo U("getAllCategory");?>',{},function (rs) {
    if(rs){
        $.fn.zTree.init($("#treeDemo"),setting,JSON.parse(rs));

        //添加表头
		var li_head = ' <li class="head"><a><div class="diy">名称</div><div class="diy">排序</div><div class="diy">操作</div></a></li>';
		var rows = $("#treeDemo").find('li');
		if (rows.length > 0) {
		    rows.eq(0).before(li_head)
		} else {
		    $("#dataTree").append(li_head);
			$("#dataTree").append('<li ><div style="text-align: center;line-height: 30px;" >无符合条件数据</div></li>')
		}
	}
})

function reload() {
	location.reload();
}
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.min.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<link href="/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form method="post" class="form form-horizontal" id="productAdd_form" action="<?php echo U('save');?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($product["name"]); ?>" placeholder="" name="name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品型号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($product["type"]); ?>" placeholder="" name="type">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品品牌：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
					<select name="brand" id="brand" class="select">
						<option value="0">请选择品牌</option>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
					<select name="c1" id="c1" class="select" onchange="getCategory(2,this)">
						<option value="0">请选择分类</option>
						<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><option value="<?php echo ($row["id"]); ?>"><?php echo ($row["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
				<span class="select-box" style="margin-top: 5px;">
					<select name="c2" id="c2" class="select" onchange="getCategory(3,this)">
						<option value="0">请选择分类</option>
					</select>
				</span>
				<span class="select-box" style="margin-top: 5px;">
					<select name="c3" id="c3" class="select" onchange="getCategory(4,this)">
						<option value="0">请选择分类</option>
					</select>
				</span>
				<span class="select-box" style="margin-top: 5px;">
					<select name="c4" id="c4" class="select">
						<option value="0">请选择分类</option>
					</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品标签：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<table>
					<thead>

					</thead>
					<tbody id="tag">

					</tbody>
				</table>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品属性：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<table>
					<thead>

					</thead>
					<tbody id="attr">

					</tbody>
				</table>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($product["od"]); ?>" placeholder="" name="od">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">优惠率：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($product["discount"]); ?>" placeholder="" name="discount">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">栏目展示：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<label class="checkbox-inline">
					<?php if(($product["isdiscount"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox1" name="isdiscount" value="1"> 今日优惠 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox1" name="isdiscount" value="1"> 今日优惠 |<?php endif; ?>
				</label>
				<label class="checkbox-inline">
					<?php if(($product["column1"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox2" name="column1" value="1"> 电脑 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox2" name="column1" value="1"> 电脑 |<?php endif; ?>
				</label>
				<label class="checkbox-inline">
					<?php if(($product["column2"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox3" name="column2" value="1"> 手机 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox3" name="column2" value="1"> 手机 |<?php endif; ?>
				</label>
				<label class="checkbox-inline">
					<?php if(($product["column3"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox4" name="column3" value="1"> 大家电 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox4" name="column3" value="1"> 大家电 |<?php endif; ?>
				</label>
				<label class="checkbox-inline">
					<?php if(($product["column4"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox5" name="column4" value="1"> 影音娱乐 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox5" name="column4" value="1"> 影音娱乐 |<?php endif; ?>
				</label>
				<label class="checkbox-inline">
					<?php if(($product["column5"]) == "1"): ?><input checked type="checkbox" id="inlineCheckbox6" name="column5" value="1"> 汽车 |
					<?php else: ?>
						<input type="checkbox" id="inlineCheckbox6" name="column5" value="1"> 汽车 |<?php endif; ?>
				</label>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品图片：</label>
			<div class="formControls col-xs-8 col-sm-9 row" id="productImg">
				<div class="col-xs-3">
					<img style="width: 100%" src="<?php echo ($product["pic1"]); ?>" id="picUrl1">
					<div style="text-align: center; background-color: #0b0b0b" >
						<button style="height:20px;" type="button" class="btn btn-xs" onclick="delPic(1)">删除</button>
					</div>
					<input type="hidden" name="pic1" id="picPath1" value="<?php echo ($product["pic1"]); ?>">
				</div>
				<div class="col-xs-3">
					<img style="width: 100%" src="<?php echo ($product["pic2"]); ?>" id="picUrl2">
					<div style="text-align: center; background-color: #0b0b0b" >
						<button style="height:20px;" type="button" class="btn btn-xs" onclick="delPic(2)">删除</button>
					</div>
					<input type="hidden" name="pic2" id="picPath2" value="<?php echo ($product["pic2"]); ?>">
				</div>
				<div class="col-xs-3">
					<img style="width: 100%" src="<?php echo ($product["pic3"]); ?>" id="picUrl3">
					<div style="text-align: center; background-color: #0b0b0b" >
						<button style="height:20px;" type="button" class="btn btn-xs" onclick="delPic(3)">删除</button>
					</div>
					<input type="hidden" name="pic3" id="picPath3" value="<?php echo ($product["pic3"]); ?>">
				</div>
				<div class="col-xs-3">
					<img style="width: 100%" src="<?php echo ($product["pic4"]); ?>" id="picUrl4">
					<div style="text-align: center; background-color: #0b0b0b" >
						<button style="height:20px;" type="button" class="btn btn-xs" onclick="delPic(4)">删除</button>
					</div>
					<input type="hidden" name="pic4"id="picPath4" value="<?php echo ($product["pic4"]); ?>">
				</div>
			</div>
		</div>



		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container">
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<div id="filePicker-2"></div>
							<p>请上传4张产品图片</p>
						</div>
					</div>
					<div class="statusBar" style="display:none;">
						<div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name="pcontent" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>

        <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">规格参数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <script id="editor1" name="tcontent" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>

		<!--编辑产品时候这里存放产品ID-->
		<input id="productID" type="hidden" value="<?php echo ($product["id"]); ?>">

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存产品</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script>
<script type="text/javascript">
    (function( $ ){
        // 当domReady的时候开始初始化
        $(function() {
            var $wrap = $('.uploader-list-container'),

                // 图片容器
                $queue = $( '<ul class="filelist"></ul>' )
                    .appendTo( $wrap.find( '.queueList' ) ),

                // 状态栏，包括进度和控制按钮
                $statusBar = $wrap.find( '.statusBar' ),

                // 文件总体选择信息。
                $info = $statusBar.find( '.info' ),

                // 上传按钮
                $upload = $wrap.find( '.uploadBtn' ),

                // 没选择文件之前的内容。
                $placeHolder = $wrap.find( '.placeholder' ),

                $progress = $statusBar.find( '.progress' ).hide(),

                // 添加的文件数量
                fileCount = 0,

                // 添加的文件总大小
                fileSize = 0,

                // 优化retina, 在retina下这个值是2
                ratio = window.devicePixelRatio || 1,

                // 缩略图大小
                thumbnailWidth = 110 * ratio,
                thumbnailHeight = 110 * ratio,

                // 可能有pedding, ready, uploading, confirm, done.
                state = 'pedding',

                // 所有文件的进度信息，key为file id
                percentages = {},
                // 判断浏览器是否支持图片的base64
                isSupportBase64 = ( function() {
                    var data = new Image();
                    var support = true;
                    data.onload = data.onerror = function() {
                        if( this.width != 1 || this.height != 1 ) {
                            support = false;
                        }
                    }
                    data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
                    return support;
                } )(),

            // 实例化
            uploader = WebUploader.create({
                pick: {
                    id: '#filePicker-2',
                    label: '点击选择图片'
                },
                formData: {
                    uid: 123
                },
                dnd: '#dndArea',
                paste: '#uploader',
                swf: '/Public/Admin/lib/webuploader/0.1.5/Uploader.swf',
                chunked: false,
                chunkSize: 512 * 1024,
                server: '<?php echo U("fileUpload");?>',

                // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
                disableGlobalDnd: true,
                fileNumLimit: 4,
                fileSizeLimit: 10 * 1024 * 1024,    // 200 M
                fileSingleSizeLimit: 10 * 1024 * 1024    // 50 M
            });

            // 拖拽时不接受 js, txt 文件。
            uploader.on( 'dndAccept', function( items ) {
                var denied = false,
                    len = items.length,
                    i = 0,
                    // 修改js类型
                    unAllowed = 'text/plain;application/javascript ';

                for ( ; i < len; i++ ) {
                    // 如果在列表里面
                    if ( ~unAllowed.indexOf( items[ i ].type ) ) {
                        denied = true;
                        break;
                    }
                }

                return !denied;
            });

            uploader.on('uploadAccept',function (file,response) {
				if(response){
				    //response = JSON.parse(response);
				    if(response['errno'] == 1){
						for(var i = 1; i < 5; i++){
						    var urlName = '#picUrl' + i;
						    var pathName = '#picPath' + i;
						    if( $(urlName).attr('src') == '#' || $(urlName).attr('src') == '' ){
								$(urlName).attr('src',response['data']['url']);
								$(pathName).val(response['data']['url']);
								break;
							}
						}
				        return true;
					}else {
				        alert(response['msg']);
				        return false;
					}
				}else {
				    return false;
				}
            })

            uploader.on('dialogOpen', function() {
                console.log('here');
            });


            // 添加“添加文件”的按钮，
            uploader.addButton({
                id: '#filePicker2',
                label: '继续添加'
            });

            uploader.on('ready', function() {
                window.uploader = uploader;
            });

            // 当有文件添加进来时执行，负责view的创建
            function addFile( file ) {
                var $li = $( '<li id="' + file.id + '">' +
                    '<p class="title">' + file.name + '</p>' +
                    '<p class="imgWrap"></p>'+
                    '<p class="progress"><span></span></p>' +
                    '</li>' ),

                    $btns = $('<div class="file-panel">' +
                        '<span class="cancel">删除</span>' +
                        '<span class="rotateRight">向右旋转</span>' +
                        '<span class="rotateLeft">向左旋转</span></div>').appendTo( $li ),
                    $prgress = $li.find('p.progress span'),
                    $wrap = $li.find( 'p.imgWrap' ),
                    $info = $('<p class="error"></p>'),

                    showError = function( code ) {
                        switch( code ) {
                            case 'exceed_size':
                                text = '文件大小超出';
                                break;

                            case 'interrupt':
                                text = '上传暂停';
                                break;

                            default:
                                text = '上传失败，请重试';
                                break;
                        }

                        $info.text( text ).appendTo( $li );
                    };

                if ( file.getStatus() === 'invalid' ) {
                    showError( file.statusText );
                } else {
                    // @todo lazyload
                    $wrap.text( '预览中' );
                    uploader.makeThumb( file, function( error, src ) {
                        var img;

                        if ( error ) {
                            $wrap.text( '不能预览' );
                            return;
                        }

                        if( isSupportBase64 ) {
                            img = $('<img src="'+src+'">');
                            $wrap.empty().append( img );
                        } else {
                            $.ajax('lib/webuploader/0.1.5/server/preview.php', {
                                method: 'POST',
                                data: src,
                                dataType:'json',
                            }).done(function( response ) {
                                if (response.result) {
                                    img = $('<img src="'+response.result+'">');
                                    $wrap.empty().append( img );
                                } else {
                                    $wrap.text("预览出错");
                                }
                            });
                        }
                    }, thumbnailWidth, thumbnailHeight );

                    percentages[ file.id ] = [ file.size, 0 ];
                    file.rotation = 0;
                }

                file.on('statuschange', function( cur, prev ) {
                    if ( prev === 'progress' ) {
                        $prgress.hide().width(0);
                    } else if ( prev === 'queued' ) {
                        $li.off( 'mouseenter mouseleave' );
                        $btns.remove();
                    }

                    // 成功
                    if ( cur === 'error' || cur === 'invalid' ) {
                        console.log( file.statusText );
                        showError( file.statusText );
                        percentages[ file.id ][ 1 ] = 1;
                    } else if ( cur === 'interrupt' ) {
                        showError( 'interrupt' );
                    } else if ( cur === 'queued' ) {
                        percentages[ file.id ][ 1 ] = 0;
                    } else if ( cur === 'progress' ) {
                        $info.remove();
                        $prgress.css('display', 'block');
                    } else if ( cur === 'complete' ) {
                        $li.append( '<span class="success"></span>' );
                    }

                    $li.removeClass( 'state-' + prev ).addClass( 'state-' + cur );
                });

                $li.on( 'mouseenter', function() {
                    $btns.stop().animate({height: 30});
                });

                $li.on( 'mouseleave', function() {
                    $btns.stop().animate({height: 0});
                });

                $btns.on( 'click', 'span', function() {
                    var index = $(this).index(),
                        deg;

                    switch ( index ) {
                        case 0:
                            uploader.removeFile( file );
                            return;

                        case 1:
                            file.rotation += 90;
                            break;

                        case 2:
                            file.rotation -= 90;
                            break;
                    }

                    if ( supportTransition ) {
                        deg = 'rotate(' + file.rotation + 'deg)';
                        $wrap.css({
                            '-webkit-transform': deg,
                            '-mos-transform': deg,
                            '-o-transform': deg,
                            'transform': deg
                        });
                    } else {
                        $wrap.css( 'filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ (~~((file.rotation/90)%4 + 4)%4) +')');
                    }
                });

                $li.appendTo( $queue );
            }

            // 负责view的销毁
            function removeFile( file ) {
                var $li = $('#'+file.id);

                delete percentages[ file.id ];
                updateTotalProgress();
                $li.off().find('.file-panel').off().end().remove();
            }

            function updateTotalProgress() {
                var loaded = 0,
                    total = 0,
                    spans = $progress.children(),
                    percent;

                $.each( percentages, function( k, v ) {
                    total += v[ 0 ];
                    loaded += v[ 0 ] * v[ 1 ];
                } );

                percent = total ? loaded / total : 0;


                spans.eq( 0 ).text( Math.round( percent * 100 ) + '%' );
                spans.eq( 1 ).css( 'width', Math.round( percent * 100 ) + '%' );
                updateStatus();
            }

            function updateStatus() {
                var text = '', stats;

                if ( state === 'ready' ) {
                    text = '选中' + fileCount + '张图片，共' +
                        WebUploader.formatSize( fileSize ) + '。';
                } else if ( state === 'confirm' ) {
                    stats = uploader.getStats();
                    if ( stats.uploadFailNum ) {
                        text = '已成功上传' + stats.successNum+ '张照片至XX相册，'+
                            stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'
                    }

                } else {
                    stats = uploader.getStats();
                    text = '共' + fileCount + '张（' +
                        WebUploader.formatSize( fileSize )  +
                        '），已上传' + stats.successNum + '张';

                    if ( stats.uploadFailNum ) {
                        text += '，失败' + stats.uploadFailNum + '张';
                    }
                }

                $info.html( text );
            }

            function setState( val ) {
                var file, stats;

                if ( val === state ) {
                    return;
                }

                $upload.removeClass( 'state-' + state );
                $upload.addClass( 'state-' + val );
                state = val;

                switch ( state ) {
                    case 'pedding':
                        $placeHolder.removeClass( 'element-invisible' );
                        $queue.hide();
                        $statusBar.addClass( 'element-invisible' );
                        uploader.refresh();
                        break;

                    case 'ready':
                        $placeHolder.addClass( 'element-invisible' );
                        $( '#filePicker2' ).removeClass( 'element-invisible');
                        $queue.show();
                        $statusBar.removeClass('element-invisible');
                        uploader.refresh();
                        break;

                    case 'uploading':
                        $( '#filePicker2' ).addClass( 'element-invisible' );
                        $progress.show();
                        $upload.text( '暂停上传' );
                        break;

                    case 'paused':
                        $progress.show();
                        $upload.text( '继续上传' );
                        break;

                    case 'confirm':
                        $progress.hide();
                        $( '#filePicker2' ).removeClass( 'element-invisible' );
                        $upload.text( '开始上传' );

                        stats = uploader.getStats();
                        if ( stats.successNum && !stats.uploadFailNum ) {
                            setState( 'finish' );
                            return;
                        }
                        break;
                    case 'finish':
                        stats = uploader.getStats();
                        if ( stats.successNum ) {
                            alert( '上传成功' );
                        } else {
                            // 没有成功的图片，重设
                            state = 'done';
                            location.reload();
                        }
                        break;
                }

                updateStatus();
            }

            uploader.onUploadProgress = function( file, percentage ) {
                var $li = $('#'+file.id),
                    $percent = $li.find('.progress span');

                $percent.css( 'width', percentage * 100 + '%' );
                percentages[ file.id ][ 1 ] = percentage;
                updateTotalProgress();
            };

            uploader.onFileQueued = function( file ) {
                fileCount++;
                fileSize += file.size;

                if ( fileCount === 1 ) {
                    $placeHolder.addClass( 'element-invisible' );
                    $statusBar.show();
                }

                addFile( file );
                setState( 'ready' );
                updateTotalProgress();
            };

            uploader.onFileDequeued = function( file ) {
                fileCount--;
                fileSize -= file.size;

                if ( !fileCount ) {
                    setState( 'pedding' );
                }

                removeFile( file );
                updateTotalProgress();

            };

            uploader.on( 'all', function( type ) {
                var stats;
                switch( type ) {
                    case 'uploadFinished':
                        setState( 'confirm' );
                        break;

                    case 'startUpload':
                        setState( 'uploading' );
                        break;

                    case 'stopUpload':
                        setState( 'paused' );
                        break;

                }
            });

            uploader.onError = function( code ) {
                alert( 'Eroor: ' + code );
            };

            $upload.on('click', function() {
                if ( $(this).hasClass( 'disabled' ) ) {
                    return false;
                }

                if ( state === 'ready' ) {
                    uploader.upload();
                } else if ( state === 'paused' ) {
                    uploader.upload();
                } else if ( state === 'uploading' ) {
                    uploader.stop();
                }
            });

            $info.on( 'click', '.retry', function() {
                uploader.retry();
            } );

            $info.on( 'click', '.ignore', function() {
                alert( 'todo' );
            } );

            $upload.addClass( 'state-' + state );
            updateTotalProgress();
        });

    })( jQuery );

$(function(){
	var ue = UE.getEditor('editor');
	ue.ready(function () {
        ue.setContent(htmldecode("<?php echo ($product["pcontent"]); ?>"));
    })

    var ue1 = UE.getEditor('editor1');
    ue1.ready(function () {
        ue1.setContent(htmldecode("<?php echo ($product["tcontent"]); ?>"));
    })
});

function htmldecode(s){
	var div = document.createElement('div');
	div.innerHTML = s;
	return div.innerText || div.textContent;
}

function getCategory(level,obj) {
    var pid = $(obj).find("option:selected").val();
	if(level == 2){
		$('#c2').html("<option value='0'>请选择分类</option>");
		$('#c3').html("<option value='0'>请选择分类</option>");
		$('#c4').html("<option value='0'>请选择分类</option>");
	}
	if(level == 3){
		$('#c3').html("<option value='0'>请选择分类</option>");
		$('#c4').html("<option value='0'>请选择分类</option>");
	}
	if(level == 4){
		$('#c4').html("<option value='0'>请选择分类</option>");
	}
	if(pid == 0){
		return;
	}


	//获取商品标签
	if(level == 2){
        $('#attr').html('');
        $.post('<?php echo U("Tag/getTagByCID");?>',{cid:pid},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                var content = '';
                for(var key in rs){
                    var row = rs[key];
					content += '<tr>';
					content += '<td>' + row.name + '</td>';
					content += '<td>';
					for(var key1 in row['value']){
					    var row1 = row['value'][key1];
					    content += '<label class="checkbox-inline">';
					    content += '<input name="tag[]" type="checkbox" value="' + row1.id + '">' + row1.name;
					    content += '</label>';
					}
                }
                content += "</td></tr>";
                $('#tag').html(content);
            }
        })
	}

    //获取商品属性
    if(level == 3){
        $('#attr').html('');
        $.post('<?php echo U("Attr/getAttrByCID");?>',{cid:pid},function (rs) {
            if(rs){
                rs = JSON.parse(rs);
                var content = '';
                for(var key in rs){
                    var row = rs[key];
                    content += '<tr>';
                    content += '<td>' + row.name + '</td>';
                    content += '<td>';
                    for(var key1 in row['value']){
                        var row1 = row['value'][key1];
                        content += '<label class="checkbox-inline">';
                        content += '<input name="attr[]" type="checkbox" value="' + row1.id + '">' + row1.name;
                        content += '</label>';
                    }
                }
                content += "</td></tr>";
                $('#attr').html(content);
            }
        })
    }

	//获取子类
    $.post('<?php echo U("Category/getCategoryByPID");?>',{pid:pid},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            var content = "<option value='0'>请选择分类</option>";
            for(var key in rs){
                var row = rs[key];
                content += "<option value='" + row.id + "'>" + row.name + "</option>";
            }
            var id = '#c' + level;
            $(id).html(content);
        }
    })
}

/*修改产品时设置产品分类 属性*/
function setCategory(){
    var pid = '<?php echo ($product["id"]); ?>';
    var c1 = '<?php echo ($product["c1"]); ?>';
    var c2 = '<?php echo ($product["c2"]); ?>';
    var c3 = '<?php echo ($product["c3"]); ?>';
    var c4 = '<?php echo ($product["c4"]); ?>';
    if(c1 > 0){
        getBrothersCategory(c1,1);
        $.post('<?php echo U("getProductTag");?>',{pid:pid},function (selectTag) {
            if(selectTag){
                selectTag = JSON.parse(selectTag);
                $.post('<?php echo U("Tag/getTagByCID");?>',{cid:c1},function (rs) {
                    if(rs){
                        rs = JSON.parse(rs);
                        var content = '';
                        for(var key in rs){
                            var row = rs[key];
                            content += '<tr>';
                            content += '<td>' + row.name + '</td>';
                            content += '<td>';
                            for(var key1 in row['value']){
                                var row1 = row['value'][key1];
                                content += '<label class="checkbox-inline">';
                                if(attrIsSelected(selectTag,row1.id)){
                                    content += '<input checked name="tag[]" type="checkbox" value="' + row1.id + '">' + row1.name;
                                }else {
                                    content += '<input name="tag[]" type="checkbox" value="' + row1.id + '">' + row1.name;
                                }
                                content += '</label>';
                            }
                        }
                        content += "</td></tr>";
                        $('#tag').html(content);
                    }
                })
            }
        })
	}
    if(c2 > 0){
        getBrothersCategory(c2,2);
        $.post('<?php echo U("getProductAttr");?>',{pid:pid},function (selectAttr) {
            if(selectAttr){
                selectAttr = JSON.parse(selectAttr);
                $.post('<?php echo U("Attr/getAttrByCID");?>',{cid:c2},function (rs) {
                    if(rs){
                        rs = JSON.parse(rs);
                        var content = '';
                        for(var key in rs){
                            var row = rs[key];
                            content += '<tr>';
                            content += '<td>' + row.name + '</td>';
                            content += '<td>';
                            for(var key1 in row['value']){
                                var row1 = row['value'][key1];
                                content += '<label class="checkbox-inline">';
                                if(attrIsSelected(selectAttr,row1.id)){
                                    content += '<input checked name="attr[]" type="checkbox" value="' + row1.id + '">' + row1.name;
                                }else {
                                    content += '<input name="attr[]" type="checkbox" value="' + row1.id + '">' + row1.name;
                                }
                                content += '</label>';
                            }
                        }
                        content += "</td></tr>";
                        $('#attr').html(content);
                    }
                })
            }
        })
    }
    if(c3 > 0){
        getBrothersCategory(c3,3);
    }
    if(c4 > 0){
        getBrothersCategory(c4,4);
    }
}
//编辑产品时初始化设置产品的分类目录
setCategory();

function attrIsSelected(productAttrID,attrID) {
    var result = false;
	for(var key in productAttrID){
        if(productAttrID[key] == attrID){
            result = true;
            break;
		}
	}
	return result;
}

function getBrothersCategory(id,level) {
    var selectedID = id;
    $.post('<?php echo U("Category/getBrothersCategory");?>',{id:id},function (rs) {
        if(rs){
            rs = JSON.parse(rs);
            var content = "<option value='0'>请选择分类</option>";
            for(var key in rs){
                var row = rs[key];
                if(row['id'] == selectedID){
                    content += "<option selected value='" + row.id + "'>" + row.name + "</option>";
				}else{
                    content += "<option value='" + row.id + "'>" + row.name + "</option>";
				}
            }
            var id = '#c' + level;
            $(id).html(content);
        }
    })
}

$.post('<?php echo U("Brand/getAllBrand");?>',{},function (rs) {
    //修改产品时候需要
    var selectedID = '<?php echo ($product["brand"]); ?>';
	if(rs){
		rs = JSON.parse(rs);
		var content = '<option value="0">请选择品牌</option>';
		for (var key in rs){
			var row = rs[key];
			if(selectedID == row.id){
                content += '<option selected value="' + row.id + '">' + row.name + '</option>';
			}else {
                content += '<option value="' + row.id + '">' + row.name + '</option>';
			}
		}
		$('#brand').html(content);
	}
})

function delPic(id) {
	var urlName = '#picUrl' + id;
	var pathName = '#picPath' + id;
	var path = $(urlName).attr('src');
	$(urlName).attr('src','#');
	$(pathName).val('');
	$.post('delPic',{path:path},function (rs) {

    })
}

function article_save_submit() {
	if( $("input[name='name']").val() == '' ){
        alert('产品名称必须填写');
        return false;
    }
    if( $("input[name='type']").val() == '' ){
        alert('产品型号必须填写');
        return false;
    }

    /*编辑产品的时候给隐藏的input控件加上name属性*/
    var productID = "<?php echo ($product["id"]); ?>";
	if(productID > 0 && $('#productID').val() == productID){
		$('#productID').attr('name','id');
	}

    $('#productAdd_form').submit();
}	
</script>
</body>
</html>
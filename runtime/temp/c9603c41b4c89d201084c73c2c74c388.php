<?php /*a:3:{s:67:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\news\add.html";i:1570697523;s:70:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\meta.html";i:1570605320;s:72:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\footer.html";i:1569577119;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/houtai/lib/html5.js"></script>
    <script type="text/javascript" src="/static/houtai/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/houtai/h-ui/css/H-ui.min.css" />
    <link href="/static/houtai/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/static/houtai/h-ui.admin.pro/css/h-ui.admin.pro.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/houtai/lib/Hui-iconfont/1.0.9/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/houtai/business/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
	<!--/meta 作为公共模版分离出去-->

	<title>新增文章 - 资讯管理 - h-ui.admin.pro v1.0</title>
	<meta name="keywords" content="h-ui.admin.pro v1.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
	<meta name="description" content="h-ui.admin.pro v1.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<article class="Hui-admin-page-container">
		<form class="form form-horizontal" id="form-article-add" >
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="articleTitle" name="articleTitle">
				</div>
			</div>
		<!--	<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>简略标题：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="articleSubTitle" name="articleSubTitle">
				</div>
			</div>-->
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<span class="select-box">
						<select name="articleClassify" class="select">
							<option value="" selected>全部栏目</option>
							<option value="1">新闻资讯</option>
							<option value="11">├行业动态</option>
							<option value="12">├行业资讯</option>
							<option value="13">├行业新闻</option>
						</select>
					</span>
				</div>
			</div>-->
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<span class="select-box">
						<select name="articleType" class="select">
							<option value="" selected>全部类型</option>
							<option value="1">帮助说明</option>
							<option value="2">新闻资讯</option>
						</select>
					</span>
				</div>
			</div>-->
<!--			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>排序值：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="0" placeholder="" id="articleSort" name="articleSort">
				</div>
			</div>-->
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>关键词：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="articleKey" name="articleKey">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">

				</span>是否显示</label>
				<input type="checkbox" id="isShow" name="isShow" >
			</div>
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章摘要：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<textarea cols="" rows="" class="textarea textarea-article"  placeholder="说点什么...最少输入10个字符" name="articleAbstract"></textarea>
				</div>
			</div>-->
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章作者：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="articleAuthor" name="articleAuthor">
				</div>
			</div>
			<div class="row clearfix">
				<!--				<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <span class="btn-upload">
                                        <a href="javascript:void();" class="btn btn-primary radius btn-upload"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                                        <input type="file" multiple name="teacherphoto" id="teacherphoto" class="input-file">
                                    </span>
                                </div>-->
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<div class="uploader-list-container">
							<div class="queueList">
								<div id="dndArea" class="placeholder">
									<div id="filePicker-2"></div>
									<!-- <p> 当前组件的说明 -->
									<p>缩略图，只能选择一张</p>
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
				<div id="InputsWrapper">
				</div>
			</div>
		<!--	<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章来源：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="0" placeholder="" id="articleSource" name="articleSource">
				</div>
			</div>-->
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2">允许评论：</label>
				<div class="form-controls col-xs-8 col-sm-9 skin-minimal">
					<div class="check-box">
						<input type="checkbox" id="articleComment" name="articleComment" checked>
						<label for="articleComment">&nbsp;</label>
					</div>
				</div>
			</div>-->
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2">评论开始日期：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" id="comment-datetime-start" class="input-text datetimepicker-input" name="commentDatetimeStart">
				</div>
			</div>-->
			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2">评论结束日期：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" id="comment-datetime-end" class="input-text datetimepicker-input" name="commentDatetimeEnd">
				</div>
			</div>-->

			<!--<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<span class="btn-upload">
						<a href="javascript:void();" class="btn btn-primary radius btn-upload"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
						<input type="file" multiple name="btnUploadFileThumb" id="btn-upload-file-thumb" class="input-file">
					</span>
				</div>
			</div>-->
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<textarea id="content" name="content" type="text/plain" style="width:100%;height:400px;"></textarea>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
					<button class="btn btn-primary radius" id="newsAdd" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>

					<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
				</div>
			</div>
		</form>
	</article>

	<!--_footer 作为公共模版分离出去-->
	<script type="text/javascript" src="/static/houtai/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/houtai/lib/layer/3.1.1/layer.js"></script>
<script type="text/javascript" src="/static/houtai/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/houtai/h-ui.admin.pro/js/h-ui.admin.pro.js"></script>
<script>
    $(function () {
        $('#loginout').click(function () {
            $.ajax({
                url:"<?php echo url('admin/home/loginout'); ?>",
                type:'post',
                dataType:'json',
                success:function (data) {
                  if(data.code==1){
                            layer.msg(data.msg,{
                                icon:6,
                                time:2000
                            },function () {
                                location.href =data.url;
                            });
                  }else{
                      layer.open({
                          titile:'退出失败',
                          content:data.msg,
                          icon:5,
                          anim:6
                      })
                  }
                    
                }
            });
            
        });
        
    });
</script>
	<!--/_footer /作为公共模版分离出去-->

	<!--请在下方写此页面业务相关的脚本-->
	<script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/validate-methods.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/messages_zh.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/webuploader/0.1.5/webuploader.min.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/ueditor/1.4.3/ueditor.config.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
	<script type="text/javascript" src="/static/houtai/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript" src="/static/houtai/business/js/main.js"></script>
	<script type="text/javascript">
		$(function(){
            // 文章内容 实例化百度富文本编辑器
            UE.getEditor('content');
			// 复选框样式
		/*	$('.skin-minimal input').iCheck({
				checkboxClass: 'icheckbox-blue',
				radioClass: 'iradio-blue',
				increaseArea: '20%'
			});*/
			// 是否评论
/*
			$('#articleComment').on('ifChecked', function(event){
				$("#comment-datetime-start,#comment-datetime-end").attr("disabled",false).removeClass("disabled");
			});
			$('#articleComment').on('ifUnchecked', function(event){
				$("#comment-datetime-start,#comment-datetime-end").attr("disabled",true).addClass("disabled");
			});
*/

			// 设置评论日期
/*			$("#comment-datetime-start").datetimepicker({
		    format: 'yyyy-mm-dd',
		    minView: "month",
		    todayBtn:  1,
		    autoclose: 1,
		    endDate : new Date(),
		  }).on('changeDate', function(event) {
		    event.preventDefault();
		    event.stopPropagation();
		    var startTime = event.date;
		    $('#search-datetime-end').datetimepicker('setStartDate',startTime);
		  });
		  $("#comment-datetime-end").datetimepicker({
		    format: 'yyyy-mm-dd',
		    minView: "month",
		    todayBtn:  1,
		    autoclose: 1,
		    endDate : new Date(),
		  }).on('changeDate', function(event) {
		    event.preventDefault();
		    event.stopPropagation();
		    var endTime = event.date;
		    $("#search-datetime-start").datetimepicker('setEndDate',endTime);
		  });*/

			// 文章摘要
	/*		$(".textarea-article").Huitextarealength({
				minlength: 10,
				maxlength: 500
			});*/
			$('#newsAdd').click(function () {
					$.ajax(
						{
							url:"<?php echo url('admin/news/add'); ?>",
							type:'post',
							data:$('#form-article-add').serialize(),
							dataType:'json',
							success:function (data) {
							    if(data.code==1){
							        layer.msg(data.msg,{
							            icon:6,
										time:2000
									},function () {
							            location.href=data.url;
                                    });
								}else{
							        layer.open({
										title:'新闻添加失败',
										content:data.msg,
										icon:5,
										anim:6
									});
								}
								
                            }
						}
					);
				return false;
            });


		});
	</script>
	<script type="text/javascript">
        var SCOPE = {
            'swf' : '/public/static/webuploader/0.1.5/Uploader.swf',
            'url' : "<?php echo url('admin/News/fileUpload'); ?>",
        };

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

                // 检测是否已经安装flash，检测flash的版本
                flashVersion = ( function() {
                    var version;

                    try {
                        version = navigator.plugins[ 'Shockwave Flash' ];
                        version = version.description;
                    } catch ( ex ) {
                        try {
                            version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash')
                                .GetVariable('$version');
                        } catch ( ex2 ) {
                            version = '0.0';
                        }
                    }
                    version = version.match( /\d+/g );
                    return parseFloat( version[ 0 ] + '.' + version[ 1 ], 10 );
                } )(),

                supportTransition = (function(){
                    var s = document.createElement('p').style,
                        r = 'transition' in s ||
                            'WebkitTransition' in s ||
                            'MozTransition' in s ||
                            'msTransition' in s ||
                            'OTransition' in s;
                    s = null;
                    return r;
                })(),

                // WebUploader实例
                uploader;

            if ( !WebUploader.Uploader.support('flash') && WebUploader.browser.ie ) {

                // flash 安装了但是版本过低。
                if (flashVersion) {
                    (function(container) {
                        window['expressinstallcallback'] = function( state ) {
                            switch(state) {
                                case 'Download.Cancelled':
                                    alert('您取消了更新！')
                                    break;

                                case 'Download.Failed':
                                    alert('安装失败')
                                    break;

                                default:
                                    alert('安装已成功，请刷新！');
                                    break;
                            }
                            delete window['expressinstallcallback'];
                        };

                        var swf = 'expressInstall.swf';
                        // insert flash object
                        var html = '<object type="application/' +
                            'x-shockwave-flash" data="' +  swf + '" ';

                        if (WebUploader.browser.ie) {
                            html += 'classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ';
                        }

                        html += 'width="100%" height="100%" style="outline:0">'  +
                            '<param name="movie" value="' + swf + '" />' +
                            '<param name="wmode" value="transparent" />' +
                            '<param name="allowscriptaccess" value="always" />' +
                            '</object>';

                        container.html(html);

                    })($wrap);

                    // 压根就没有安转。
                } else {
                    $wrap.html('<a href="http://www.adobe.com/go/getflashplayer" target="_blank" border="0"><img alt="get flash player" src="http://www.adobe.com/macromedia/style_guide/images/160x41_Get_Flash_Player.jpg" /></a>');
                }

                return;
            } else if (!WebUploader.Uploader.support()) {
                alert( 'Web Uploader 不支持您的浏览器！');
                return;
            }

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
                swf: SCOPE.swf,
                chunked: false,
                chunkSize: 512 * 1024,
                server: SCOPE.url,
                // runtimeOrder: 'flash',

                // accept: {
                //     title: 'Images',
                //     extensions: 'gif,jpg,jpeg,bmp,png',
                //     mimeTypes: 'image/*'
                // },

                // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
                disableGlobalDnd: true,
                fileNumLimit: 1,
                fileSizeLimit: 200 * 1024 * 1024,    // 200 M
                fileSingleSizeLimit: 50 * 1024 * 1024    // 50 M
                //fileNumLimit: 3
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

            uploader.on('dialogOpen', function() {
                console.log('here');
            });

            // uploader.on('filesQueued', function() {
            //     uploader.sort(function( a, b ) {
            //         if ( a.name < b.name )
            //           return -1;
            //         if ( a.name > b.name )
            //           return 1;
            //         return 0;
            //     });
            // });

            // 添加“添加文件”的按钮，
            uploader.addButton({
                id: '#filePicker2',
                label: '继续添加'
            });


            var picId = 0;
            // 文件上传成功，给item添加成功class, 用样式标记上传成功。
            uploader.on( 'uploadSuccess', function( file ,response) {

                picId++;
                console.log("response:",response);
                $("#InputsWrapper").append('<input type="hidden"  name="newspicture" id="'+picId+'" value="'+response+'"/>');

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
                                dataType:'json'
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
                // if (code == "Q_EXCEED_NUM_LIMIT") {
                //     alert('最多只能上传3张哦');
                // }
                if (code == "Q_TYPE_DENIED") {
                    alert('请上传JPG、PNG、GIF、BMP格式文件');
                } else if (code == "Q_EXCEED_NUM_LIMIT") {
                    alert('最多只能上传3张哦');
                }else {
                    alert('上传出错！请检查后重新上传！错误代码'+code);
                }
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
    </script>
	<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>

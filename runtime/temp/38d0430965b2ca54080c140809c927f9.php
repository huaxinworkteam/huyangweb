<?php /*a:3:{s:60:"/www/wwwroot/huyangWeb/application/admin/view/admin/add.html";i:1570263077;s:62:"/www/wwwroot/huyangWeb/application/admin/view/Common/meta.html";i:1570605320;s:64:"/www/wwwroot/huyangWeb/application/admin/view/Common/footer.html";i:1569577119;}*/ ?>
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

	<title>添加管理员 - 管理员管理 - h-ui.admin.pro v1.0</title>
	<meta name="keywords" content="h-ui.admin.pro v1.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
	<meta name="description" content="h-ui.admin.pro v1.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<article class="clearfix pd-20">
		<form class="form form-horizontal" id="form-admin-add">
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>昵称：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text"  placeholder="" id="nickname" name="nickname">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>账号：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" placeholder="" id="username" name="username">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="password" class="input-text" autocomplete="off"  placeholder="密码" id="password" name="password">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text"  placeholder="" id="phone" name="phone">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
				<div class="form-controls col-xs-8 col-sm-9">
					<input type="text" class="input-text" placeholder="@" name="email" id="email">
				</div>
			</div>
			<div class="row clearfix">
				<label class="form-label col-xs-4 col-sm-3">角色：</label>
				<div class="form-controls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
					<select class="select" name="is_super" size="1">
						<option value="0">普通管理员</option>
						<option value="1">超级管理员</option>
					</select>
					</span> </div>
			</div>
			<div class="row clearfix">
				<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
					<input class="btn btn-primary radius" id="adminadd" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
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
	<script type="text/javascript">
		$(function () {
			$('#adminadd').click(function () {
				$.ajax({
					url:"<?php echo url('admin/admin/add'); ?>",
					type:"post",
					data:$('form').serialize(),
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
								title:'管理员添加失败',
								content:data.msg,
								icon:5,
								anim:6
							});
						}
                    }
				});
				return false;
            });
        });
	</script>
	<script type="text/javascript">
		$(function(){
			/* 通过iCheck插件，美化checkbox */
			$('.skin-minimal input').iCheck({
				checkboxClass: 'icheckbox-blue',
				radioClass: 'iradio-blue',
				increaseArea: '20%'
			});

			/* 表单验证，提交 */
			$("#form-admin-add").validate({
				rules:{
					username:{
						required:true,
						minlength:4,
						maxlength:16
					},
					nickname:{
                        required:true,
                        maxlength:16
                    },
					password:{
						required:true,
					},
					password2:{
						required:true,
						equalTo: "#password"
					},
					phone:{
						required:true,
						isPhone:true,
					},
					email:{
						required:true,
						email:true,
					},
					is_super:{
						required:true,
					},
				},
				onkeyup:false,
				focusCleanup:true,
				success:"valid",
				submitHandler:function(form){
					$(form).ajaxSubmit();
					var index = parent.layer.getFrameIndex(window.name);
					parent.location.replace(parent.location.href)
					parent.layer.close(index);
				}
			});
		});
	</script>
	<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>

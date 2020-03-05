<?php /*a:1:{s:62:"/www/wwwroot/huyangWeb/application/admin/view/index/login.html";i:1572677422;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="/static/houtai/lib/html5.js"></script>
  <script type="text/javascript" src="/static/houtai/lib/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="/static/houtai/h-ui/css/H-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="/static/houtai/h-ui.admin.pro/css/H-ui.login.min.css" />
  <link rel="stylesheet" type="text/css" href="/static/houtai/lib/Hui-iconfont/1.0.9/iconfont.css" />
  <link rel="stylesheet" type="text/css" href="/static/houtai/business/css/style.css" />
  <!--[if IE 6]>
  <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
  <script>DD_belatedPNG.fix('*');</script><![endif]-->
  <title>后台登录 - h-ui.admin.pro v1.0</title>
  <meta name="keywords" content="h-ui.admin.pro v1.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
  <meta name="description" content="h-ui.admin.pro v1.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
  <input type="hidden" id="TenantId" name="TenantId" value="" />
  <div class="header"></div>
  <div class="loginWraper">
    <div class="loginBox">
      <form id="form-admin-login" class="form form-horizontal" method="post" >
        <div class="row clearfix">
          <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
          <div class="form-controls col-xs-7">
            <input id="adminName" name="adminName" type="text" placeholder="账户" class="input-text size-L">
          </div>
        </div>
        <div class="row clearfix">
          <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
          <div class="form-controls col-xs-7">
            <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
          </div>
        </div>
        <div class="row clearfix">
          <div class="form-controls col-xs-7 col-xs-offset-3">
            <input id="code" name="code" class="input-text size-L" type="text" placeholder="验证码"  style="width:150px;">
           <img src="<?php echo url('admin/index/verify'); ?>"  width="150" height="45" alt="验证码" onclick="this.src='<?php echo url('admin/index/verify'); ?>'" />
          </div>
        </div>
     <!--   <div class="row clearfix">
          <div class="form-controls col-xs-7 col-xs-offset-3">
            <label for="online">
              <input type="checkbox" name="online" id="online" value="">
          使我保持登录状态
            </label>
          </div>
        </div>-->
        <div class="row clearfix">
          <div class="form-controls col-xs-8 col-xs-offset-3">
            <input name="" id="login" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
            <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="footer">胡杨大学后台管理系统</div>

  <script type="text/javascript" src="/static/houtai/lib/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="/static/houtai/h-ui/js/H-ui.min.js"></script>
  <script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
  <script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/validate-methods.js"></script>
  <script type="text/javascript" src="/static/houtai/lib/jquery.validation/1.14.0/messages_zh.js"></script>
  <script type="text/javascript" src="/static/houtai/lib/layer/3.1.1/layer.js"> </script>
  <script type="text/javascript">
    $(function(){

      /* 表单验证，提交 */
      $("#login").click(function () {
          $.ajax({
              url:"<?php echo url('admin/Index/login'); ?>",
              type:"post",
              data:$("#form-admin-login").serialize(),
              dataType:'json',
              success:function (data) {
             //     alert(data.code);
                   if(data.code==1){
                       layer.msg(data.msg,{
                           icon:6,
                           time:2000,
                       },function(){
                           location.href = data.url;
                         /* location.href="www.baidu.com";*/
                       });
                   } else{
                       layer.open({
                           title:'登陆失败',
                           content:data.msg,
                           icon:5,
                           anim:6,
                       })
                   }

              },
              error:function(xhr){
                  alert(xhr.responseText);
              },
          });
          return false;

      });
     /* $("#form-admin-login").validate({
        rules: {
          adminName: {
            required:true,
          },
          password: {
            required:true,
            rangelength: [6, 16]
          },
          verificationCode: {
            required:true,
          }
        },
        messages: {
          adminName: {
            required: "账户不能为空"
          },
          adminName: {
            required: "密码不能为空",
            rangelength: "密码长度6到16个字符"
          },
          verificationCode: {
            required: "验证码不能为空"
          },
        },
        onkeyup: false,
        focusCleanup: false,
        submitHandler: function(form) {
          //在这里执行表单提交
        }
      });*/
    });
  </script>
</body>
</html>

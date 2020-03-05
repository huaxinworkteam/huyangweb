<?php /*a:5:{s:69:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\home\index.html";i:1572677422;s:70:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\meta.html";i:1572677422;s:73:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\leftbar.html";i:1572677422;s:72:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\header.html";i:1572677422;s:72:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\Common\footer.html";i:1572677422;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
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

	<title>h-ui.admin.pro v1.0</title>
	<meta name="keywords" content="h-ui.admin.pro v1.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
	<meta name="description" content="h-ui.admin.pro v1.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

	<!--_menu 作为公共模版分离出去-->
		<aside class="Hui-admin-aside-wrapper">
    <div class="Hui-admin-logo-wrapper">
        <a class="logo navbar-logo" href="/aboutHui.shtml">
            <i class="va-m iconpic global-logo"></i>
            <span class="va-m">H-ui.admin</span>
        </a>
    </div>
    <div class="Hui-admin-menu-dropdown bk_2">
        <dl id="menu-home" class="Hui-menu">
            <dd class="Hui-menu-item-frist">
                <ul>
                    <li><a href="<?php echo url('admin/home/index'); ?>" title="首页"><i class="Hui-iconfont">&#xe616;</i>&nbsp; 首页</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe616;</i> 活动管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="<?php echo url('admin/activity/lists'); ?>" title="活动管理">活动管理</a></li>
                    <li><a href="<?php echo url('admin/activity/add'); ?>"  title="新增活动">新增活动</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe620;</i>新闻管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="<?php echo url('admin/news/lists'); ?>" title="品牌管理">新闻管理</a></li>
                    <li><a href="<?php echo url('admin/news/add'); ?>" title="分类管理">新增新闻</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe620;</i>教师管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="<?php echo url('admin/teachers/index'); ?>" title="教师管理">教师管理</a></li>
                    <li><a href="<?php echo url('admin/teachers/add'); ?>" title="新增教师">新增教师</a></li>
                    <li><a href="<?php echo url('admin/teachers/series'); ?>" title="院系管理">院系管理</a></li>
                </ul>
            </dd>
        </dl>
        <script type="text/javascript">

        </script>
<!--        <dl id="menu-comments" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="comment-list.html" title="评论列表">评论列表</a></li>
                    <li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
                </ul>
            </dd>
        </dl>-->
        <dl id="menu-admin" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="<?php echo url('admin/admin/all'); ?>" title="管理员列表">管理员列表</a></li>
                    <?php if(session('admin.is_super')==1): ?>
                    <li><a href="<?php echo url('admin/admin/add'); ?>" title="管理员添加">管理员添加</a></li>
                    <?php endif; ?>
                </ul>
            </dd>
        </dl>
        <dl id="menu-errorPage" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe6e0;</i> 异常页面<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="error-404.html" title="404">404</a></li>
                    <li><a href="error-500.html" title="404">500</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="Hui-admin-aside-mask"></div>

	<!--/_menu 作为公共模版分离出去-->

	<div class="Hui-admin-dislpayArrow">
		<a href="javascript:void(0);" onClick="displaynavbar(this)">
			<i class="Hui-iconfont Hui-iconfont-left">&#xe6d4;</i>
			<i class="Hui-iconfont Hui-iconfont-right">&#xe6d7;</i>
		</a>
	</div>

	<section class="Hui-admin-article-wrapper">
		<!--_header 作为公共模版分离出去-->
<header class="Hui-navbar">
    <div class="navbar">
        <div class="container-fluid clearfix">
            <nav id="Hui-topNav" class="nav navbar-nav">
                <ul class="clearfix">
                    <li><a href="">顶部菜单</a></li>
                    <li class="dropDown dropDown_hover">
                        <a class="dropDown_A" href="javascript:;">顶部菜单</a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li class="">
                                <a href="#">二级导航</a>
                            </li>
                            <li class="">
                                <a href="#">二级导航</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar">
                <ul class="clearfix">
                    <li><?php if(session('admin.is_super')==1): ?>超级管理员<?php else: ?>管理员<?php endif; ?></li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo session('admin.nickname'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <li><a href="#" id="loginout">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                    <li id="Hui-skin" class="dropDown dropDown_hover right">
                        <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（蓝色）">默认（深蓝）</a></li>
                            <li><a href="javascript:;" data-val="black" title="黑色">黑色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
		<!--/_header 作为公共模版分离出去-->

		<div class="Hui-admin-article">
			<article class="Hui-admin-content clearfix">
				<div class="row-24 clearfix" style="margin-left: -12px; margin-right: -12px;">
					<div class="col-24-xs-24 col-24-sm-12 col-24-md-12 col-24-lg-12 col-24-xl-6" style="padding-left: 12px; padding-right: 12px; margin-bottom: 24px;">
						<div class="panel">
							<div class="panel-header" style="padding:15px 24px;font-weight: 400;color:#999;">总销售额：</div>
							<div class="panel-body" style="padding-bottom: 0; padding-left:24px;padding-right:24px;">
								<div class="c-primary" style="font-size: 30px;line-height: 38px;padding-bottom: 24px;">
									&yen; 9,999,999
								</div>
								<div class="f-14" style="padding: 10px 0;border-top:solid 1px #eee"><span class="c-999">今日销售额</span> <span>&yen; 1,234</span></div>
							</div>
						</div>
					</div>
					<div class="col-24-xs-24 col-24-sm-12 col-24-md-12 col-24-lg-12 col-24-xl-6" style="padding-left: 12px; padding-right: 12px; margin-bottom: 24px;">
						<div class="panel">
							<div class="panel-header" style="padding:15px 24px;font-weight: 400;color:#999;">总访问量：</div>
							<div class="panel-body" style="padding-bottom: 0; padding-left:24px;padding-right:24px;">
								<div class="c-success" style="font-size: 30px;line-height: 38px;padding-bottom: 24px;">
									9,999,999
								</div>
								<div class="f-14" style="padding: 10px 0;border-top:solid 1px #eee"><span class="c-999">今日访问量</span> <span>1,234</span></div>
							</div>
						</div>
					</div>
					<div class="col-24-xs-24 col-24-sm-12 col-24-md-12 col-24-lg-12 col-24-xl-6" style="padding-left: 12px; padding-right: 12px; margin-bottom: 24px;">
						<div class="panel">
							<div class="panel-header" style="padding:15px 24px;font-weight: 400;color:#999;">总会员数：</div>
							<div class="panel-body" style="padding-bottom: 0; padding-left:24px;padding-right:24px;">
								<div class="c-danger" style="font-size: 30px;line-height: 38px;padding-bottom: 24px;">
									99,999 人
								</div>
								<div class="f-14" style="padding: 10px 0;border-top:solid 1px #eee"><span class="c-999">今日新增会员</span> <span>1,234 人</span></div>
							</div>
						</div>
					</div>
					<div class="col-24-xs-24 col-24-sm-12 col-24-md-12 col-24-lg-12 col-24-xl-6" style="padding-left: 12px; padding-right: 12px; margin-bottom: 24px;">
						<div class="panel">
							<div class="panel-header" style="padding:15px 24px;font-weight: 400;color:#999;">总文章数：</div>
							<div class="panel-body" style="padding-bottom: 0; padding-left:24px;padding-right:24px;">
								<div class="c-warning" style="font-size: 30px;line-height: 38px;padding-bottom: 24px;">
									99,999
								</div>
								<div class="f-14" style="padding: 10px 0;border-top:solid 1px #eee"><span class="c-999">今日新增文章</span> <span>1,234</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel">
					<div class="panel-body"发布>
						<p class="f-20 text-success">欢迎使用H-ui.admin
							<span class="f-14">v2.3</span>
							后台模版！
						</p>
						<p>登录次数：18 </p>
						<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
						<table class="table table-border table-bordered table-bg mt-20">
							<thead>
								<tr>
									<th colspan="2" scope="col">服务器信息</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="30%">服务器计算机名</th>
									<td><span id="lbServerName">http://127.0.0.1/</span></td>
								</tr>
								<tr>
									<td>服务器IP地址</td>
									<td>192.168.1.1</td>
								</tr>
								<tr>
									<td>服务器域名</td>
									<td>www.h-ui.net</td>
								</tr>
								<tr>
									<td>服务器端口 </td>
									<td>80</td>
								</tr>
								<tr>
									<td>服务器IIS版本 </td>
									<td>Microsoft-IIS/6.0</td>
								</tr>
								<tr>
									<td>本文件所在文件夹 </td>
									<td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
								</tr>
								<tr>
									<td>服务器操作系统 </td>
									<td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
								</tr>
								<tr>
									<td>系统所在文件夹 </td>
									<td>C:\WINDOWS\system32</td>
								</tr>
								<tr>
									<td>服务器脚本超时时间 </td>
									<td>30000秒</td>
								</tr>
								<tr>
									<td>服务器的语言种类 </td>
									<td>Chinese (People's Republic of China)</td>
								</tr>
								<tr>
									<td>.NET Framework 版本 </td>
									<td>2.050727.3655</td>
								</tr>
								<tr>
									<td>服务器当前时间 </td>
									<td>2014-6-14 12:06:23</td>
								</tr>
								<tr>
									<td>服务器IE版本 </td>
									<td>6.0000</td>
								</tr>
								<tr>
									<td>服务器上次启动到现在已运行 </td>
									<td>7210分钟</td>
								</tr>
								<tr>
									<td>逻辑驱动器 </td>
									<td>C:\D:\</td>
								</tr>
								<tr>
									<td>CPU 总数 </td>
									<td>4</td>
								</tr>
								<tr>
									<td>CPU 类型 </td>
									<td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
								</tr>
								<tr>
									<td>虚拟内存 </td>
									<td>52480M</td>
								</tr>
								<tr>
									<td>当前程序占用内存 </td>
									<td>3.29M</td>
								</tr>
								<tr>
									<td>Asp.net所占内存 </td>
									<td>51.46M</td>
								</tr>
								<tr>
									<td>当前Session数量 </td>
									<td>8</td>
								</tr>
								<tr>
									<td>当前SessionID </td>
									<td>gznhpwmp34004345jz2q3l45</td>
								</tr>
								<tr>
									<td>当前系统用户名 </td>
									<td>NETWORK SERVICE</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</article>
			<footer class="footer Hui-admin-footer">
				<p>感谢jQuery、layer、laypage、Validform、UEditor、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br> Copyright &copy;2015 h-ui.admin.pro v1.0 All Rights Reserved.<br> 本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
			</footer>
		</div>
	</section>

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
<script type="text/javascript" src="/static/houtai/business/js/main.js"></script>
</body>
</html>

<?php /*a:5:{s:66:"/www/wwwroot/huyangWeb/application/admin/view/teachers/series.html";i:1572677422;s:62:"/www/wwwroot/huyangWeb/application/admin/view/Common/meta.html";i:1574735572;s:65:"/www/wwwroot/huyangWeb/application/admin/view/Common/leftbar.html";i:1574735604;s:64:"/www/wwwroot/huyangWeb/application/admin/view/Common/header.html";i:1572677422;s:64:"/www/wwwroot/huyangWeb/application/admin/view/Common/footer.html";i:1572677422;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>胡杨大学后台</title>
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

	<title>管理员列表 - 管理员列表 - h-ui.admin.pro v1.0</title>
	<meta name="keywords" content="h-ui.admin.pro v1.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
	<meta name="description" content="h-ui.admin.pro v1.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<!--_menu 作为公共模版分离出去-->
<aside class="Hui-admin-aside-wrapper">
    <div class="Hui-admin-logo-wrapper">
        <a class="logo navbar-logo" href="/aboutHui.shtml">
            <i class="va-m iconpic global-logo"></i>
            <span class="va-m">胡杨大学</span>
        </a>
    </div>
    <div class="Hui-admin-menu-dropdown bk_2">
        <!--<dl id="menu-home" class="Hui-menu">
            <dd class="Hui-menu-item-frist">
                <ul>
                    <li><a href="<?php echo url('admin/home/index'); ?>" title="首页"><i class="Hui-iconfont">&#xe616;</i>&nbsp; 首页</a></li>
                </ul>
            </dd>
        </dl>-->
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
			<nav class="breadcrumb" style="background-color:#fff;padding: 0 24px">
				首页
				<span class="c-gray en">/</span>
				院系管理
				<span class="c-gray en">/</span>
				院系列表
			</nav>

			<article class="Hui-admin-content clearfix">
				<div class="panel mt-20">
					<div class="panel-body">
						<div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
								<a href="javascript:;" onclick="series_add('添加院系','addseries.html')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加院系</a>
							</span>
							<span class="f-r">共有数据：<strong><?php echo htmlentities($total); ?></strong> 条</span>
						</div>
						<div class="mt-20 clearfix">
							<table class="table table-border table-bordered table-bg table-hover table-sort">
								<thead>
									<tr>
										<th scope="col" colspan="9">员工列表</th>
									</tr>
									<tr class="text-c">
										<th width="25"><input type="checkbox"  id="ckAll" onclick="QuanXuan()"></th>
										<th width="40">ID</th>
										<th width="150">院系名称</th>
										<th width="40">教师个数</th>
									</tr>
								</thead>
								<tbody>
								<?php if(is_array($series) || $series instanceof \think\Collection || $series instanceof \think\Paginator): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<tr class="text-c">

										<td><input class="ckc" type="checkbox" value="<?php echo htmlentities($vo['seriesID']); ?>" name=""></td>
										<td><?php echo htmlentities($vo['seriesID']); ?></td>
										<td><?php echo htmlentities($vo['series']); ?></td>
										<td><?php if($vo['sums']==null): ?>0<?php else: ?><?php echo htmlentities($vo['sums']); ?><?php endif; ?></td>

									</tr>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</article>
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
	<script type="text/javascript" src="/static/houtai/lib/datatables/1.10.15/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/static/houtai/lib/laypage/1.2/laypage.js"></script>
	<script type="text/javascript" src="/static/houtai/business/js/main.js"></script>
	<script type="text/javascript">
		$(function(){
			runDatetimePicker();
		});
	</script>
	<script type="text/javascript">
        function QuanXuan()
        {
            $(".ckc").prop("checked",$("#ckAll").prop("checked"))
        }
        function datadel() {
            var array = new Array();
            $('.ckc:checked').each(function () {
                array.push(this.value);
            });
            console.log(array.toString());
            if(confirm("确定要删除吗")){
                $.ajax({
                    url:"<?php echo url('admin/Teachers/delseries'); ?>",
                    data:{id:array.toString()},
                    type:"post",
                    dataType:"json",
                    success:function (data) {
                        if(data.code==1){
                            layer.msg(data.msg,{
                                icon:6,
                                time:1000
                            },function () {
                                location.href=data.url;
                            });

                        }else{
                            layer.open({
                                title:"删除失败",
                                content:data.msg,
                                icon:5,
                                anim:6

                            });
                        }

                    }
                });
                return false;
            }
        }
	</script>

	<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>

<?php /*a:5:{s:80:"D:\phpstudy\PHPTutorial\WWW\huyangWeb\application\admin\view\teachers\index.html";i:1572677422;s:77:"D:\phpstudy\PHPTutorial\WWW\huyangWeb\application\admin\view\Common\meta.html";i:1574735572;s:80:"D:\phpstudy\PHPTutorial\WWW\huyangWeb\application\admin\view\Common\leftbar.html";i:1583390538;s:79:"D:\phpstudy\PHPTutorial\WWW\huyangWeb\application\admin\view\Common\header.html";i:1572677422;s:79:"D:\phpstudy\PHPTutorial\WWW\huyangWeb\application\admin\view\Common\footer.html";i:1572677422;}*/ ?>
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

<title>资讯列表 - 资讯管理 - h-ui.admin.pro v1.0</title>
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
        <dl id="menu-gallery" class="Hui-menu">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe62d;</i> 轮播图管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
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
            教师管理
            <span class="c-gray en">/</span>
            教师列表
        </nav>
        <article class="Hui-admin-content clearfix">
            <div class="panel">
                <div class="panel-body">
                    <div class="row clearfix">
                        <!--							<div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="row clearfix mb-10">
                                                            <span class="col-xs-4 form-item-label">选择分类：</span>
                                                            <span class="col-xs-8 form-item-control">
                                                                <span class="select-box">
                                                                    <select id="classifyID" name="" class="select">
                                                                        <option value="0">全部分类</option>
                                                                        <option value="1">分类一</option>
                                                                        <option value="2">分类二</option>
                                                                    </select>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="row clearfix mb-10">
                                                            <span class="col-xs-4 form-item-label">开始日期：</span>
                                                            <span class="col-xs-8 form-item-control">
                                                                <input type="text" id="search-datetime-start" class="input-text datetimepicker-input">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="row clearfix mb-10">
                                                            <span class="col-xs-4 form-item-label">结束日期：</span>
                                                            <span class="col-xs-8 form-item-control">
                                                                <input type="text" id="search-datetime-end" class="input-text datetimepicker-input">
                                                            </span>
                                                        </div>
                                                    </div>-->
                        <form action="<?php echo url('teachers/search'); ?>" method="get">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="row clearfix mb-10">
                                    <span class="col-xs-8 form-item-control">
										<input type="text" name="search" value="" id="search-input"
                                               placeholder=""
                                               class="input-text"/>
									</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="row clearfix">
									<span class="col-xs-4 form-item-control">
										<button  id="search-submit" class="btn btn-success radius"
                                                type="submit" ><i
                                                class="Hui-iconfont">&#xe665;</i> 搜教师</button>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel mt-20">
                <div class="panel-body">
                    <div class="clearfix">
							<span class="f-l">
							<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i
                                    class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
							<a class="btn btn-primary radius" href="javascript:;" onclick="teacher_add('教师添加','teacheradd')"><i
                                    class="Hui-iconfont">&#xe600;</i> 添加教师</a>
							</span>
                        <span class="f-r">共有数据：<strong><?php echo htmlentities($total); ?></strong> 条</span>
                    </div>
                    <div class="mt-20 clearfix">
                        <table id="data-table-list"
                               class="table table-border table-bordered table-bg table-hover table-sort">
                            <thead>
                            <tr class="text-c">
                                <th width="25"><input type="checkbox" id="ckAll" onclick="QuanXuan()"></th>
                                <th width="80">ID</th>
                                <th width="80">教师姓名</th>
                                <th width="80">院系</th>
                                <th width="120">教师等级</th>
                                <th width="120">创建时间</th>
                                <th width="60">显示</th>
                                <th width="120">操作</th>
                            </tr>
                            </thead>
                            <tbody class="getData-list" data-currPage='1'>
                            <?php if(is_array($teachers) || $teachers instanceof \think\Collection || $teachers instanceof \think\Paginator): $i = 0; $__LIST__ = $teachers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr class="text-c">
                                <td><input type="checkbox" class="ckc" value="<?php echo htmlentities($vo['teacherid']); ?>"></td>
                                <td><?php echo htmlentities($vo['teacherid']); ?></td>
                                <td><?php echo htmlentities($vo['teachername']); ?></td>
                                <td><?php echo htmlentities($vo['series']); ?></td>
                                <td><?php echo htmlentities($vo['teacherlevel']); ?></td>
                                <td><?php echo htmlentities($vo['create_time']); ?></td>
                                <td class="td-status"><span class="label label-success radius"><?php if($vo['isShow'] ==1): ?>已显示<?php else: ?>已隐藏<?php endif; ?>
                                </td>
                                <td class="f-14 td-manage">
                                    <?php if($vo['isShow'] ==1): ?><a class="op1" style="text-decoration:none" href="javascript:;"
                                                          title="下架" isShow="<?php echo htmlentities($vo['isShow']); ?>" newsid="<?php echo htmlentities($vo['teacherid']); ?>"><i
                                        class="Hui-iconfont">&#xe631;</i></a>
                                    <?php else: ?><a class="op1" style="text-decoration:none" href="javascript:;" title="上架"
                                               isShow="<?php echo htmlentities($vo['isShow']); ?>" newsid="<?php echo htmlentities($vo['teacherid']); ?>"><i
                                        class="Hui-iconfont">&#xe631;</i></a>
                                    <?php endif; ?>
                                    <a style="text-decoration:none" class="op2 ml-5"
                                       onclick="teacher_edit('教师编辑','teacheredit',<?php echo htmlentities($vo['teacherid']); ?>)"
                                       href="javascript:;"
                                       title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                                    <a style="text-decoration:none" class="op3 ml-5" teacherid="<?php echo htmlentities($vo['teacherid']); ?>"
                                       onClick="teacher_del(this,<?php echo htmlentities($vo['teacherid']); ?>)"
                                       href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>

                        </table>
                        <?php echo $teachers->render(); ?>
                    </div>
                    <div id="laypage" class="text-c"></div>
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
<!--/请在上方写此页面业务相关的脚本-->
<script type="text/javascript">
    $(function () {
            window.onload = function () {
                for ($i = 0; $i < $(".td-status span").length; $i++) {
                    if ($(".td-status span")[$i].innerText == '已隐藏') {
                        $(".td-status span")[$i].className = "label label-defaunt radius";
                    }
                    else {
                    }
                }
            }
        }
    );

</script>
<script type="text/javascript">
    /*    function article_del(obj, id) {
            alert(id);
            layer.confirm('确认要删除吗？', function (index) {
                layer.close(index);
                $.ajax({
                    url:"<?php echo url('admin/teachers/teachersdel'); ?>",
                    type:'POST',
                    data:{teacherid:id},
                    dataType:'json',
                    success: function (data) {
                        alert("1");
                        if (data.code == 1) {
                            layer.msg(data.msg, {
                                icon: 6,
                                time: 2000
                            }, function () {
                                location.href = data.url;
                            });
                        } else {
                            alert(id);
                            layer.open(
                                {
                                    title: "教师删除失败",
                                    content:data.msg,
                                    icon:5,
                                    anim:6

                                }
                            );
                        }
                    }
                });
            });
            return false;
        }*/
    $(function () {
        $('.op1').click(function () {
            var teacherid = $(this).attr('teacherid');
            var isShow = $(this).attr('isShow');
            if (isShow == 1) {
                var msg = "确定要隐藏吗？";
            } else {
                var msg = "确认要发布吗？";
            }
            layer.confirm(msg, {
                title: "上隐藏操作",
                icon: 3
            }, function (index) {
                layer.close(index);
                $.ajax({
                    url: "<?php echo url('admin/teachers/show'); ?>",
                    type: "post",
                    data: {teacherid: teacherid, isShow: isShow},
                    dataType: "json",
                    success: function (data) {
                        if (data.code == 1) {
                            layer.msg(data.msg, {
                                icon: 6,
                                time: 2000
                            }, function () {
                                location.href = data.url;
                            });
                        } else {
                            layer.open({
                                title: "操作失败",
                                content: data.msg,
                                icon: 5,
                                anim: 6
                            });
                        }
                    }
                });
            });
        });
        return false;
    });

</script>
<script type="text/javascript">
    /* =====所有的列表页都可照搬这套模式====== */
    // 获取URL参数，初始化条件
    function getUrlParameter() {
        // parseQueryString() 方法 在main.js中 提取URL参数为对象
        var urlObj = parseQueryString(window.location.href);
        // console.log(urlObj);

        $("#classifyID").val(urlObj.classifyID);
        $(".getData-list").attr("data-currPage", urlObj.currPage)
        $("#search-datetime-start").val(urlObj.datetimeStart);
        $("#search-datetime-end").val(urlObj.datatimeEnd);
        $("#search-input").val(urlObj.keywords);
    }

    // 封装一个获取数据列表的方法，将条件封装到options对象中
    function getDataList(options) {
        console.log(options);
        $.ajax({
            url: 'article-list.html',// 跳转到 action, 换成自己的接口
            data: options,
            type: 'get',
            cache: false,
            dataType: 'json', // 不一定非要json，可以是html，后台封好结构后，直接扔前台
            success: function (respData) {
                /* 大概的数据结构
                    respData: {
                        result: ture, // 返回状态
                        msg: '',		// 返回信息
                        pagination: { // 翻页数据
                            currPage: 1,// 当前第几页
                            total: 100, //数据总数
                            pageSize: 10,  // 每页条数
                        },
                        datas: [    // 详细数据
                            {
                                id: '',  // id
                                title: '', // 标题
                                classify: [  // 分类 允许属于多个分类
                                    {
                                        id: '',				// 分类id
                                        name: '',     // 分类名称
                                    },
                                    ……
                                ],
                                source: { // 来源
                                    id: '', // 来源id
                                    name: '', // 来源名称
                                },
                                updateTime: '', // 更新时间
                                viewsNo: '', // 浏览次数
                                status: {  // 各种状态
                                    examine: '',  // 审核状态
                                    manage: {     // 管理状态
                                        canPublish: 0, // 能否发布
                                        canEdit: 0,  // 能否编辑
                                        canDel: 0,   // 能否删除
                                    }
                                }
                            },
                            ……
                        ],
                    }
                */
                if (respData.result) { // 请求正确 返回true, 也指200状态
                    var data = respData.datas; // 返回的数据
                    var htmlstr = '';
                    if (data.length > 0) {
                        // 只有获取的数据对象长度大于0，我们才做for循环处理。
                        for (var i = 0; i < data.length; i++) { // for循环将json数据拼接成html结构。 此处可以用模板引擎。
                            htmlstr +=
                                '<tr>' +
                                '<td><input type="checkbox" value="" name=""></td>' +
                                '<td>' + data[i].id + '</td>' +
                                '<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit(\'查看\',\'article-zhang.html\',\'+data[i].id+\')" title="查看">' + data[i].title + '</u></td>' +
                                '<td data-id="' + data[i].classify.id + '">' + data[i].classify.name + '</td>' +
                                '<td data-id="' + data[i].source.id + '">' + data[i].source.name + '</td>' +
                                '<td>' + data[i].updateTime + '</td>' +
                                '<td>' + data[i].viewsNo + '</td>';
                            // data[i].status.examine 审核状态(字符串) '0'为草稿，'1'为审核中，'2'通过，'3'为未通过，'4'为发布，'5'为隐藏
                            if (data[i].status.examine == '0') {
                                htmlstr += '<td class="td-status"><span class="label label-default radius">草稿</span></td>';
                            }
                            if (data[i].status.examine == '1') {
                                htmlstr += '<td class="td-status"><span class="label label-primary radius">审核中</span></td>';
                            }
                            if (data[i].status.examine == '2') {
                                htmlstr += '<td class="td-status"><span class="label label-primary radius">通过，待发布</span></td>';
                            }
                            if (data[i].status.examine == '3') {
                                htmlstr += '<td class="td-status"><span class="label label-danger radius">未通过</span></td>';
                            }
                            if (data[i].status.examine == '4') {
                                htmlstr += '<td class="td-status"><span class="label label-success radius">已发布</span></td>';
                            }
                            if (data[i].status.examine == '5') {
                                htmlstr += '<td class="td-status"><span class="label label-danger radius">已隐藏</span></td>';
                            }

                            htmlstr += '<td class="f-14 td-manage">';
                            // data[i].status.manage 管理状态集合（子对象为布尔值）  canPublish 能否发布  canEdit 能否编辑 canDel能否删除
                            if (data[i].status.examine == '4' && data[i].status.manage.canPublish) {
                                htmlstr += '<a style="text-decoration:none" onClick="article_stop(this,\'+ data[i].id +\')" href="javascript:;" title="隐藏">隐藏</a>';
                            }
                            if ((data[i].status.examine == '2' || data[i].status.examine == '5') && data[i].status.manage.canPublish) {
                                htmlstr += '<a style="text-decoration:none" onClick="article_start(this,\'+ data[i].id +\')" href="javascript:;" title="发布">发布</a>';
                            }
                            if (data[i].status.manage.canEdit) {
                                htmlstr += '<a style="text-decoration:none" class="ml-5" onClick="article_edit(\'资讯编辑\',\'article-add.html\',\'+ data[i].id +\')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>';
                            }
                            if (data[i].status.manage.canDel) {
                                htmlstr += '<a style="text-decoration:none" class="ml-5" onClick="article_del(this,\'+ data[i].id +\')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>';
                            }
                            htmlstr += '</td>' +
                                '</tr>';
                        }
                        // 在页面对应<tbody class=".getData-list">标签中输出拼接好的html结构。
                        $(".getData-list").html(htmlstr);

                        // 渲染分页
                        laypage({
                            cont: 'laypage',    //容器。值支持id名、原生dom对象，jquery对象。【如该容器为】：&lt;div id="laypage">&lt;/div>
                            pages: Math.ceil(respData.pagination.total / respData.pagination.pageSize),  // 除法运算，向上取整
                            curr: currPage,    //初始化当前页
                            hash: 'page',
                            limits: [10, 25, 50, 100],
                            first: '首页',
                            last: '尾页',
                            prev: '<em>&lt;&lt;</em>',
                            next: '<em>&gt;&gt;</em>',
                            jump: function (e, first) { //触发分页后的回调
                                console.log(e);
                                if (!first) {
                                    $(".getData-list").attr("data-currPage", e.curr);
                                    runGetDataList();
                                }
                            }
                        });
                    } else {
                        console.log(respData.msg); // 返回正确状态，但是没有数据，在此处处理。
                        var tdNum = $("#data-table-list thead tr td").length;
                        htmlstr = '<tr><td colspan="' + tdNum + '" class="data-null">数据为空</td></tr>';
                        $(".getData-list").html(htmlstr);
                    }
                } else {
                    console.log(respData.msg);  // 返回错误状态，通常指网络请求失败、后台报错等，最好后台给出错误提示，方便前台调试。也可定义几种返回的错误状态码，如201 203 400 404 500 503等。
                }
            },
            error: function (respData) { // ajax的error状态
                console.log(respData);
            }
        });
    }

    // 运行获取数据列表这个方法，这里面可以灵活自定义要传递的参数
    function runGetDataList() {
        getDataList({
            classifyID: $("#classifyID").val() || 0, // 分类id
            currPage: $(".getData-list").attr("data-currPage") || 1, // 当前第几页
            pageSize: 10, // 每页几条
            datetimeStart: $("#search-datetime-start").val() || '',
            datatimeEnd: $("#search-datetime-end").val() || '',
            keywords: $("#search-input").val() || '',
        });
    }

    $(function () {
        runDatetimePicker(); // 实例化日期控件
        getUrlParameter(); // 获取URL参数，初始化条件

        $('.table-sort').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "pading": false,
            "pagingType": "full_numbers",
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 8]}// 不参与排序的列
            ]
        });

        // runGetDataList(); // 页面载入，自执行加载数据...
        // 点击搜索执行...
        $("#search-submit").on("click", function () {
            // runGetDataList();
        });


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
                url:"<?php echo url('admin/Teachers/delteachers'); ?>",
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
</body>
</html>

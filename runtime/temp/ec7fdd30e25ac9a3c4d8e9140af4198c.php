<?php /*a:4:{s:81:"/www/wwwroot/huyangWeb/application/index/view/chhcollege/about/personalbrand.html";i:1576485192;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_header.html";i:1576828632;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_leftBy.html";i:1574734484;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_footer.html";i:1576828823;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>个人品牌学院介绍</title>
    <meta name='keywords' content="学院介绍"/>
    <meta name='description' content="学院介绍"/>

    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7996666e6d269b8161c664dc73b41699";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script src="/static/chhcollege/js/entrance.js" data-args="groupId=f120961075064bbebb64783685097ee4" class="zhiCustomBtn"
            id="zhichiScript"></script>
    <!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/static/chhcollege/images/icon.png"/>
    <link rel="apple-touch-icon-precomposed" href="/static/chhcollege/images/icon.png"/>
    <link rel="apple-touch-startup-image" media="screen and (orientation: portrait)"
          href="/static/chhcollege/images/startup.png"/>
    <link rel="apple-touch-startup-image" media="screen and (orientation: landscape)"
          href="/static/chhcollege/images/startupL.png"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1"/>
    <script type="text/javascript">
        function fBrowserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

            if (bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                window.location.href = "http://www.chhcollege.org/mobile/";
            }
        }

        fBrowserRedirect();
    </script>
    <link href="/static/chhcollege/css/flexslider.css" type="text/css" rel="stylesheet"/>
    <link href="/static/chhcollege/css/reset.css" type="text/css" rel="stylesheet"/>
    <link href="/static/chhcollege/css/layout.css" type="text/css" rel="stylesheet"/>
    <link href="/static/chhcollege/css/common.css" type="text/css" rel="stylesheet"/>
    <link href="/static/chhcollege/css/page.css" type="text/css" rel="stylesheet"/>
    <!--[if IE]>
    <script src="/static/chhcollege/js/html5.js"></script><![endif]-->
    <!--[if lt IE 10]>
    <script type="text/javascript" src="/static/chhcollege/js/pie.js"></script><![endif]-->
    <script type="text/javascript" src="/static/chhcollege/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery-powerswitch.js"></script>
    <script type="text/javascript">
        $(function () {

            $('.flexslider').flexslider({
                animation: "fade",
                slideshow: true,
                slideshowSpeed: 3000,
                animationSpeed: 2000,
                touch: false,
                controlNav: true,
                directionNav: false,
                pauseOnHover: false
            });
            $(".index_btm_body .tab_body a").click(function () {
                var index = $(".index_btm_body .tab_body a").index($(this));
                $(".index_btm_body .tab_body a").removeClass("cur").eq(index).addClass("cur");
                $(".index_btm_body .tab_con .con").hide().eq(index).fadeIn();
            }).eq(0).click();


        });
    </script>
</head>
<body>
<header>
    <!--<script type="text/javascript">
    $(function () {
        $('#searchAll').click(function () {
            var keys=$("#keys").val();
            $.ajax({
                url:"<?php echo url('index/search'); ?>",
                type:"get",
                data:{keys:keys},
                dataType:"json",
                success:function (data) {
                    if(data.code==1){
                        location.href=data.url;
                    }else{
                        alert(data.msg);
                    }

                }
            });
            return false;
        });
    });
</script>-->
<div class="cw">
    <a href="<?php echo url('index/index'); ?>" class="logo fl"></a>
    <div class="tools_bar fr">
        <div class="tools_top">
            <div class="search_bar" onkeydown="if (event.keyCode==13) {searchAll();}" style="position: relative">
 <!--               <div style="position: absolute; margin-left: -160px; font-size: 22px; color: #311f13;">电话：400-6886-238</div>
               <input type="text" id="keys" placeholder="Search" />
                <a href="javascript:void(0);" id="searchAll"></a>-->
            </div>
            <!-- <a href="javascript:;" class="wechat"><span><img src="/static/chhcollege/picture/qr_code_top.jpg" /></span></a> </div> -->
            <ul class="nav_list">
                <li><a href="<?php echo url('index/index'); ?>" class="">首页</a></li>
                <li><a href="<?php echo url('index/about'); ?>" class="">胡杨概况</a>
                    <div class="sub_Nav">
                        <div class="line"></div>
                        <p><a href="<?php echo url('index/introduction'); ?>">学院介绍</a></p>
                        <p><a href="<?php echo url('index/organization'); ?>">组织架构</a></p>
                    </div>
                </li>
                <li><a href="<?php echo url('index/course'); ?>" class="">核心课程</a>
                    <div class="sub_Nav">
                        <div class="line"></div>
                        <p><a href="<?php echo url('index/m402'); ?>" target="_blank">工商管理类</a></p>
                    </div>
                </li>
                <li><a href="<?php echo url('index/szll',['seriesNO'=>1]); ?>" class="">师资力量</a>
                    <div class="sub_Nav">
                        <div class="line"></div>
                        <?php if(is_array($shizi) || $shizi instanceof \think\Collection || $shizi instanceof \think\Paginator): $i = 0; $__LIST__ = $shizi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <p><a href="<?php echo url('index/szll',['seriesNO'=>$vo['seriesNO']]); ?>" target="_blank"><?php echo htmlentities($vo['series']); ?></a></p>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
                <li><a href="<?php echo url('index/news'); ?>" class="">新闻动态</a></li>
                <li><a href="http://www.massmakers.cn/category-9338.html" target="_blank" class="">培训报名</a></li><!--<?php echo url('index/activity'); ?>-->
                <li><a href="<?php echo url('index/contact'); ?>" class="">联系我们</a></li>
            </ul>
        </div>
    </div>
</header>
<script type="text/javascript">
    function searchAll() {
        var str = $("#keys").val();
        if (str == "")
            alert("请输入要搜索的关键词");
        else
            location.href = "/index/search/index.html?q=" + str;
    }

    $(function () {
        $("ul.nav_list li").hover(function () {
            $("ul.nav_list li .sub_Nav").stop(false, true);
            $(this).find(".sub_Nav").fadeIn();
        }, function () {
            $("ul.nav_list li .sub_Nav").stop(false, true);
            $(this).find(".sub_Nav").fadeOut();
        });
    });
</script>
<div class="pageBanner">
    <div class="roll flexslider">
        <ul class="slides">
            <!--<li><img src="/static/chhcollege/picture/schoolnews.jpg"></li>-->
            <li><img src="/static/chhcollege/images/huyanggaikuang.jpg"></li>
        </ul>
    </div>
    <!--<div class="txt">-->
    <!--<div class="cw">-->
    <!--<h3></h3>-->
    <!--</div>-->
    <!---->
    <!--</div>-->
    <!--<div class="line"></div>-->
    <!--<div class="btn">-->
    <!--<div class="cw"> <a href="/index/contact/message.html" class="act" target="_blank">在线报名</a> </div>-->
    <!--</div>-->

</div>
<div class="page">
    <div class="cw">
        <div class="pageBody clearfix">
            <!--left start-->
            <div class="leftBy fl">
                <div class="tit">
                    <h3>新闻动态</h3>
                    <h4>News</h4>
                </div>
                <div class="list03">
        <div class="content">

            <div class="lay02">
                <h3><span>平台活动</span></h3>
                <ul>
                    <?php if(is_array($activity) || $activity instanceof \think\Collection || $activity instanceof \think\Paginator): $i = 0; $__LIST__ = $activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('index/act_detail',['activityId'=>$vo['activityId']]); ?>" target="_blank">
                            <div class="txt"><?php echo htmlentities($vo['activityTitle']); ?><br><?php echo htmlentities($vo['createTime']); ?></div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="lay03">
                <h3>官方微信</h3>
                <ul>
                    <li><img src="/static/chhcollege/picture/wx_1.jpg">
                        <h4 class="pt10"><br>教育平台</h4>
                    </li>
                    <li><img src="/static/chhcollege/picture/wx_2.jpg">
                        <h4 class="pt10">创合汇</h4>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom"></div>
    </div>
            </div>
            <!--left End-->
            <!--right start-->
            <div class="rightBy fr">
                <div class="tool clearfix">
                    <div class="fl">
                        <h3> 学院<span>介绍</span></h3>
                    </div>
                    <div class="fr"><a href="<?php echo url('index/index'); ?>" target="_blank">首页</a><span class="cur">></span><a
                            href="javascript:;"
                            class="cur">学院介绍</a>
                    </div>
                </div>
                <div class="contBody">
                    <h1 style="font-size: 30px;text-align: center;margin:10px auto;">胡杨大学个人品牌学院</h1>

                    <p style="text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">胡杨大学个人品牌学院为国内第一家垂直于【个人品牌商业运营】领域的公益学院；</span></span>
                    </p>
                    <p style="text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">人品牌学院于2019年6月成立，目前已分别在上海、南京共开设四期，每期开课学员爆满；</span></span>
                    </p>
                    <p style="text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">年时间内，为胡杨大学引进三家专业学院，孵化4位导师，2位院长；</span></span>
                    </p>

                    <p><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section
                                        style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                    <section
                                            style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                        <section class=""
                                                 style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                        <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                            <span style="color: rgb(170, 117, 80);">
                                                <strong style="box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">办学理念</span></strong></span></strong></span></strong>
                                            </span>
                                        </p>
                                        <section class=""
                                                 style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                    </section>
                                    <p style="line-height: 1.75em;box-sizing: border-box !important;"><span class=""
                                                                                                            style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"></span>
                                    </p></section>
                            </blockquote>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"> 以人为本  因道而商</span></span>
                            </p>
                            <p>
                                <br/>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/1.png"
                                                                title="1.png" alt="1.png"
                                                                style="width: 665px; height: 500px;" width="665"
                                                                vspace="0" height="500" border="0"/></p>
                            <p style="text-align: left;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section style="margin: 1em auto;box-sizing: border-box !important;">
                                    <section class=""
                                             style="padding-right: 16px;padding-left: 16px;border-bottom: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);border-right-color: rgb(189, 140, 119);border-left-color: rgb(189, 140, 119);line-height: 25px;display: inline-block;box-sizing: border-box !important;">
                                        <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;">
                                            <span style="font-size: 16px;font-weight: bold;color: rgb(170, 117, 80);box-sizing: border-box !important;">学院宗旨</span>
                                        </p>
                                    </section>
                                    <section style="box-sizing: border-box !important;"><span class=""
                                                                                              style="margin: -1px auto 10px;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;display: block;border-top: 8px solid rgb(189, 140, 119);box-sizing: border-box !important;"><br/></span>
                                    </section>
                                </section>
                                <p style="text-align: center;">
                                    <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">让更多商业人群通过【人设经济商业破局】实务课程，达成新商业时代下的创业梦想</span></span>
                                </p>
                                <p style="text-align: center;">
                                    <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">培养更多有商业变现价值的意见领袖人物</span></span>
                                </p>
                                <p style="text-align: center;">
                                    <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">为学员打造轻松优质的学习型社交场景</span></span>
                                </p>
                                <p style="text-align: center;">
                                    <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">给予更多优秀学员在个人品牌商业运营中的高光机会及上升通道</span></span>
                                </p>
                            </blockquote>
                        </section>
                    </blockquote>
                    <p><br/></p>

                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/2.png" title="2.png"
                                                        alt="2.png" style="width: 665px; height: 371px;" width="665"
                                                        vspace="0" height="371" border="0"/></p>

                    <p><br/></p>

                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;line-height: 27.2px;white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section
                                style="margin-right: auto;margin-left: auto;text-align: center;box-sizing: border-box !important;">
                            <section
                                    style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                <section class=""
                                         style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                <p style="padding: 2px 10px;box-sizing: border-box !important;"><span
                                        style="font-size: 18px;color: rgb(170, 117, 80);box-sizing: border-box !important;"><strong
                                        style="box-sizing: border-box !important;">课程体系</strong></span></p>
                                <section class=""
                                         style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                            </section>
                            <section style="box-sizing: border-box !important;"><span class=""
                                                                                      style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                    style="box-sizing: border-box !important;"/></span></section>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">明星导师课程</span></strong></span>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/3.png"
                                                                title="3.png" alt="3.png"
                                                                style="width: 498px; height: 597px;" width="498"
                                                                vspace="0" height="597" border="0"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">辅助课程体系</span></strong></span>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/4.png"
                                                                title="4.png" alt="4.png"
                                                                style="width: 595px; height: 597px;" width="595"
                                                                vspace="0" height="597" border="0"/></p>
                        </section>
                    </blockquote>
                    <p style="white-space: normal;text-align: center;"><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section
                                        style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                    <section
                                            style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                        <section class=""
                                                 style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                        <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                            <span style="color: rgb(170, 117, 80);">
                                                <strong style="box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">课后服务</span></strong></span></strong></span></strong>
                                            </span>
                                        </p>
                                        <section class=""
                                                 style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                    </section>
                                    <p style="line-height: 1.75em;box-sizing: border-box !important;"><span class=""
                                                                                                            style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"></span>
                                    </p></section>
                            </blockquote>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">【十三宴】学员私域晚宴</span></span>
                            </p>
                            <p><br/></p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/5.png"
                                                                title="5.png" alt="5.png"
                                                                style="width: 490px; height: 300px;" width="490"
                                                                vspace="0" height="300" border="0"/></p>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">个人IP商业私董会</span></span>
                            </p>
                            <p><br/></p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/6.png"
                                                                title="6.png" alt="6.png"
                                                                style="width: 575px; height: 300px;" width="575"
                                                                vspace="0" height="300" border="0"/></p>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">学员团建活动</span></span>
                            </p>
                            <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                                <br/>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/7.png"
                                                                title="7.png" alt="7.png"
                                                                style="width: 491px; height: 292px;" width="491"
                                                                vspace="0" height="292" border="0"/></p>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">学员专属内训定制课程</span></span>
                            </p>
                            <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                                <br/>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/8.png"
                                                                title="8.png" alt="8.png"
                                                                style="width: 490px; height: 300px;" width="490"
                                                                vspace="0" height="300" border="0"/></p>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">【世界咖啡日】学员社交沙龙</span></span>
                            </p>
                            <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                                <br/>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/9.png"
                                                                title="9.png" alt="9.png"
                                                                style="width: 508px; height: 307px;" width="508"
                                                                vspace="0" height="307" border="0"/></p>
                            <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">学员企业参访</span></span>
                            </p>
                            <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                                <br/>
                            </p>
                            <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/personalbrand/10.png"
                                                                title="10.png" alt="10.png"
                                                                style="width: 490px; height: 300px;" width="490"
                                                                vspace="0" height="300" border="0"/></p>

                        </section>
                    </blockquote>
                    <p style="white-space: normal;text-align: center;"><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section
                                        style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                    <section
                                            style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                        <section class=""
                                                 style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                        <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                            <span style="color: rgb(170, 117, 80);">
                                                <strong style="box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                        style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                        style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">个性化特色</span></strong></span></strong></span></strong>
                                            </span>
                                        </p>
                                        <section class=""
                                                 style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                    </section>
                                    <p style="line-height: 1.75em;box-sizing: border-box !important;"><span class=""
                                                                                                            style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"></span>
                                    </p></section>
                            </blockquote>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色一：原创系统课程</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">全国首家【个人品牌学院】，原创课程体系及实操方法</span></strong></span>
                            </p>
                            <p><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色二：场景去中心化</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">强互动，既是学习场景，又是社交场景</span></strong></span>
                            </p>
                            <p><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色三：学员晋升通道</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">优秀学员有机会孵化成为有商业卖点的明星导师资格</span></strong></span>
                            </p>
                            <p><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色四：课程在线回看</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">所有课程在线直播，不错过任何一个知识点</span></strong></span>
                            </p>
                            <p ><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色五：理论结合实际</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">课内设置体验式实训环节，课后【十三宴】提供督导面诊咨询</span></strong></span>
                            </p>
                            <p><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255)"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">特色六：导师人设多元</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);"
                               helvitica="" hiragino="" sans="" microsoft="" arial=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">娱乐型授课模式，学习不无聊，每位导师人设风格差异化，总有一款适合你</span></strong></span>
                            </p>
                            <p><br style="box-sizing: border-box !important;"/></p>
                        </section>
                    </blockquote>
                </div>
            </div>
            <!--right End-->
        </div>
    </div>
    <div class="right_extend"></div>
</div>
<div class="color_blank s_1"></div>
<footer>
    <div class="cw">
    <div class="top_body clearfix">
        <ul class="fl clearfix">
            <li>
                <h3><a href="<?php echo url('index/about'); ?>" target="_blank">胡杨概况</a></h3>
                <p><a href="<?php echo url('index/introduction'); ?>" target="_blank">学院介绍</a></p>
                <p><a href="<?php echo url('index/organization'); ?>" target="_blank">组织架构</a></p>
            </li>
            <li>
                <h3><a href="<?php echo url('index/course'); ?>" class="">核心课程</a></h3>
                <p><a href="<?php echo url('chhcollege/m402'); ?>" target="_blank">工商管理类</a></p>
            </li>
            <li>
                <h3><a href="<?php echo url('index/szll',['seriesNO'=>1]); ?>" class="">师资力量</a></h3>
                <?php if(is_array($footer_szll) || $footer_szll instanceof \think\Collection || $footer_szll instanceof \think\Paginator): $i = 0; $__LIST__ = $footer_szll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <p><a href="<?php echo url('index/szll',['seriesNO'=>$vo['seriesNO']]); ?>" target="_blank"><?php echo htmlentities($vo['series']); ?></a></p>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
            <li>
                <h3 class="no_b"><a href="<?php echo url('index/news'); ?>" target="_blank">新闻动态</a></h3>
            </li>
            <li>
                <h3 class="no_b"><a href="http://www.massmakers.cn/category-9338.html" target="_blank" class="">培训报名</a></h3>
            </li>
            <!--<li>-->
                <!--<h3 class="no_b"><a href="<?php echo url('index/contact'); ?>" target="_blank">联系我们</a></h3>-->
            <!--</li>-->
        </ul>

        <div class="contactus_body fr">
            <h3>联系我们</h3>
            <!--<p><span>：</span></p>-->
            <p>地址：上海市杨浦区公共实训基地裙楼3楼</p>
            <p>电话：021-62095281</p>
            <p>传真：021-52308253</p>
            <!-- <h6><img src="static/picture/qr_code.jpg" /></h6> -->
        </div>

    </div>

    <div class="links">
        友情链接：
        <a href="http://www.hcclub.org" target="_blank">华创官网</a>
        <a href="http://www.massmakers.cn" target="_blank">创服汇</a>
        <a href="http://www.v7mall.com" target="_blank">商城</a>
    </div>


    <div class="copyright_bar">
        <!-- <div class="fl">
             <a href="<?php echo url('index/contact'); ?>" target="_blank">联系我们</a>
             <em>|</em>
             <a href="<?php echo url('index/index'); ?>" target="_blank">网站地图</a>
             <em>|</em>
             <a href="#" target="_blank">法律声明</a>
         </div>
         <p class="fr">版权 ©  网站备案号：
             <a style='color: #e6e6e6;' href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备18026080号-1</a>
             <a class="blank" id="host" target="_blank" href=""><img src="static/picture/dian.png" alt=""></a>
         </p>-->
     </div>

    <script>
        var link = ['http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020190125155927000003646420-SAIC_SHOW_310000-20190703165346702253&signData=MEYCIQCrnaIIflg67U0hfPCfiVlkLaW0yTyYt/GiY7XUNVxtMgIhAJCTWwD1Hp4jrl4On+ciavsC4DwSXgA3wT0v+r7iMpoE', 'http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020190327163918000004498431-SAIC_SHOW_310000-4028e4cb697682950169cf8d393c3725618&signData=MEQCIDSCUjNe0hZGCeWPdf8pKfbQD3X8Yf71iwcGL7xvbf14AiAwL8YfS2vNIr2VGKle2IqaoTgKiXS7tDeNCOMPq30m6Q==']
        var host = window.location.host;
        var dom = document.getElementById('host')
        if (host.indexOf('college.chuanghehui.com') >= 0) {
            dom.href = link[0]
        } else {
            dom.href = link[1]
        }
    </script>

    <script src="//at.alicdn.com/t/font_1471030_svadb868xjp.js"></script>
    <script type="text/javascript">
        //Dialog icon base path
        ds.Dialog.defaults.iconBasePath = 'images/';
        ds.loadScript(baseJSUrl+'quick_links.js');
    </script>

</div>

<!--在线咨询--><!--
<div class="consultation">
    <div class="consultation_head">
        <div class="consultation_bj"></div>
    </div>
    <div class="consultation_icon">
        <a href="">
            <div class="consultation_icon_item">
                <div class="consultation_icon_item_img"></div>
                <div class="consultation_icon_item_text">创新管理课程</div>
            </div>
        </a>
        <a href="">
            <div class="consultation_icon_item">
                <div class="consultation_icon_item_img"></div>
                <div class="consultation_icon_item_text">创新管理课程</div>
            </div>
        </a>
        <a href="">
            <div class="consultation_icon_item">
                <div class="consultation_icon_item_img"></div>
                <div class="consultation_icon_item_text">创新管理课程</div>
            </div>
        </a>
        <a href="">
            <div class="consultation_icon_item">
                <div class="consultation_icon_item_img"></div>
                <div class="consultation_icon_item_text">创新管理课程</div>
            </div>
        </a>
    </div>
</div>-->
</footer>
</body>
</html>

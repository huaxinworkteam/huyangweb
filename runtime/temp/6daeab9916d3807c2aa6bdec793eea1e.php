<?php /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\chhcollege\about\index.html";i:1569227773;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_header.html";i:1569216667;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_footer.html";i:1569215764;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>学院介绍</title>
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
    <div class="cw">
    <a href="/" class="logo fl"></a>
    <div class="tools_bar fr">
        <div class="tools_top">
            <div class="search_bar" onkeydown="if (event.keyCode==13) {searchAll();}" style="position: relative">
                <div style="position: absolute; margin-left: -160px; font-size: 22px; color: #311f13;">400-6886-238</div>
                <input type="text" id="keys" placeholder="Search" />
                <a href="javascript:;" onclick="searchAll()"></a>
            </div>
            <div class="website_change"><span>创合汇网群</span><i></i>
                <ul>
                    <li><a href="<?php echo url('index/index'); ?>" target="_blank">创合汇总站</a></li>
                    <li><a href="<?php echo url('chhcapital/index'); ?>" target="_blank">创合汇资本</a></li>

                    <li><a href="<?php echo url('chhcollege/index'); ?>" target="_blank">创合汇商学院</a></li>
                    <li><a href="<?php echo url('chhconsulting/index'); ?>" target="_blank">创合汇咨询</a></li>
                    <li><a href="http://www.chhcollege.org/index/mooc/index.html" target="_blank">创合汇APP</a></li>
                </ul>
            </div>
            <!-- <a href="javascript:;" class="wechat"><span><img src="/static/chhcollege/picture/qr_code_top.jpg" /></span></a> </div> -->
            <ul class="nav_list">
                <li><a href="<?php echo url('chhcollege/index'); ?>" class="">首页</a></li>
                <li><a href="<?php echo url('chhcollege/about'); ?>" class="">学院介绍</a></li>
                <li><a href="<?php echo url('chhcollege/course'); ?>" class="cur">核心课程</a>
                    <div class="sub_Nav">
                        <div class="line"></div>
                        <p><a href="<?php echo url('chhcollege/m402'); ?>" target="_blank">工商管理类</a></p>
                        <p><a href="<?php echo url('chhcollege/m404'); ?>" target="_blank">创新创业类</a></p>
                        <p><a href="<?php echo url('chhcollege/m385'); ?>" target="_blank">金融实务类</a></p>
                        <p><a href="<?php echo url('chhcollege/m375'); ?>" target="_blank">人文与领导力类</a></p>
                        <p><a href="<?php echo url('chhcollege/m380'); ?>" target="_blank">国际访学类</a></p>
                    </div>
                </li>
                <li><a href="<?php echo url('chhcollege/szll'); ?>" class="">师资力量</a>
                    <div class="sub_Nav">
                        <div class="line"></div>
                        <p><a href="/index/staff/index/cateid/1.html" target="_blank"> 中教师资 </a></p>
                        <p><a href="/index/staff/index/cateid/2.html" target="_blank"> 外教师资 </a></p>
                        <p><a href="/index/staff/index/cateid/3.html" target="_blank"> 论坛讲座师资 </a></p>
                    </div>
                </li>
                <li><a href="<?php echo url('chhcollege/news'); ?>" class="">新闻动态</a></li>
                <li><a href="<?php echo url('chhcollege/activity'); ?>" class="">平台活动</a></li>
                <li><a href="<?php echo url('chhcollege/contact'); ?>" class="">联系我们</a></li>
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
            <li><img src="/static/chhcollege/picture/schoolnews.jpg"></li>
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
                    <h3>学院介绍</h3>
                    <h4>Introduction of College</h4>
                </div>
                <div class="list03">
                    <div class="content">
                        <div class="lay02">
                            <h3><span>平台活动</span></h3>
                            <ul>
                                <li>
                                    <a href="/index/activity/detail/id/1044.html" target="_blank">
                                        <div class="txt">扬帆起航，成就卓越 | 创合汇 「独...<br>2019-07-03</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index/activity/detail/id/1041.html" target="_blank">
                                        <div class="txt">硅谷重量级创业教父、天使投资人，亲授...<br>2018-12-07</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index/activity/detail/id/1040.html" target="_blank">
                                        <div class="txt">大咖开讲：人文与科技的碰撞，融汇共生...<br>2018-08-12</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="lay03">
                            <h3>官方微信</h3>
                            <ul>
                                <li><img src="/static/chhcollege/picture/wx_1.jpg">
                                    <h4 class="pt10">创合汇商学院<br>教育平台</h4>
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
                    <div class="fr"><a href="/" target="_blank">首页</a><span class="cur">></span><a href="javascript:;"
                                                                                                   class="cur">学院介绍</a>
                    </div>
                </div>
                <div class="contBody">
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/1562557033637015.jpg"
                                                        title="1562557033637015.jpg" alt="1562557033637015.jpg"
                                                        style="width: 640px; height: 391px;" width="640" vspace="0"
                                                        height="391" border="0"/></p>
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
                                            <span style="color: rgb(170, 117, 80);"><strong
                                                    style="box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">关于创合汇商学院</span></strong></span></strong></span></strong></span>
                                        </p>
                                        <section class=""
                                                 style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                    </section>
                                    <p style="line-height: 1.75em;box-sizing: border-box !important;"><span class=""
                                                                                                            style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"></span>
                                    </p></section>
                            </blockquote>
                            <p style="text-align: center;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">创合汇商学院是基于上海交通大学等国内外知名院校优质资源的基础上成立的全球新一代平台型商学院。</span></span>
                            </p>
                            <p style="text-align: center;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">致力于打破大学围墙，突破教育界与产业界的界限，打造中国乃至世界领先的创业者、企业家及其管理团</span></span>
                            </p>
                            <p style="text-align: center;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">队最有价值的学习与发展平台，为中国创新创业和经济转型贡献力量！</span></span>
                            </p>
                            <p style="text-align: left;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section style="margin: 1em auto;box-sizing: border-box !important;">
                                    <section class=""
                                             style="padding-right: 16px;padding-left: 16px;border-bottom: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);border-right-color: rgb(189, 140, 119);border-left-color: rgb(189, 140, 119);line-height: 25px;display: inline-block;box-sizing: border-box !important;">
                                        <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;">
                                            <span style="font-size: 16px;font-weight: bold;color: rgb(170, 117, 80);box-sizing: border-box !important;">使命与愿景</span>
                                        </p></section>
                                    <section style="box-sizing: border-box !important;"><span class=""
                                                                                              style="margin: -1px auto 10px;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;display: block;border-top: 8px solid rgb(189, 140, 119);box-sizing: border-box !important;"><br/></span>
                                    </section>
                                </section>
                            </blockquote>
                        </section>
                    </blockquote>
                    <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                        <br/></p>
                    <p><br/></p>
                    <section class="" title="490，更新于2015-12-04 10:41"
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">使命</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="white-space: normal; letter-spacing: 0.544px; line-height: 25.6px; background-color: rgb(255, 255, 255); box-sizing: border-box !important; text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"></span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">打破</span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">大学围墙，突破教育界与产业界的界限，打造</span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">中国乃至世界领先的创业者、企业家及其管理团队最有</span>
                    </p>
                    <p style="white-space: normal; letter-spacing: 0.544px; line-height: 25.6px; background-color: rgb(255, 255, 255); box-sizing: border-box !important; text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">价值的学习发展</span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">平台，为</span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;text-align: left;">中国创新创业和经济转型贡献力量！</span></p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <section class="" title="490，更新于2015-12-04 10:41"
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">愿景</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="white-space: normal; letter-spacing: 0.544px; line-height: 27.2px; background-color: rgb(255, 255, 255); box-sizing: border-box !important; text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">成为最具价值和影响力的商学教育平台！</span>
                    </p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <section class="" title="490，更新于2015-12-04 10:41"
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">核心价值观</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="white-space: normal; letter-spacing: 0.544px; line-height: 27.2px; background-color: rgb(255, 255, 255); box-sizing: border-box !important; text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">专注、创新、追求卓越；谦虚、尊重、团队合作。</span>
                    </p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 25.6px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br/></p>
                    <p><br/></p>
                    <section class="" title="490，更新于2015-12-04 10:41"
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">教学理念</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="white-space: normal; letter-spacing: 0.544px; line-height: 27.2px; background-color: rgb(255, 255, 255); box-sizing: border-box !important; text-align: center;">
                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">和而不同</span><span
                            style="font-family: arial;font-size: 13px;line-height: 16.016px;box-sizing: border-box !important;">·</span><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">知行合一</span>
                    </p>
                    <p><br/></p>
                    <section class="" title="746，更新于2016-07-02 16:44"
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="margin: 1em auto;text-align: center;box-sizing: border-box !important;">
                            <section class=""
                                     style="padding-right: 16px;padding-left: 16px;border-bottom: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);border-right-color: rgb(189, 140, 119);border-left-color: rgb(189, 140, 119);line-height: 25px;display: inline-block;box-sizing: border-box !important;">
                                <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;"><span
                                        style="font-weight: bold;font-size: 16px;color: rgb(170, 117, 80);box-sizing: border-box !important;"><br/></span>
                                </p>
                                <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;"><span
                                        style="font-weight: bold;font-size: 16px;color: rgb(170, 117, 80);box-sizing: border-box !important;">教学模式</span>
                                </p></section>
                            <section style="box-sizing: border-box !important;"><span class=""
                                                                                      style="margin: -1px auto 10px;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;display: block;border-top: 8px solid rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                    style="box-sizing: border-box !important;"/></span></section>
                        </section>
                    </section>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);line-height: 1.6;font-size: 14px;box-sizing: border-box !important;">创合汇商学采用全球最先进的教学理念，独创“五位一体、双导师制、学习课堂与实践课堂相结合”的教</span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);line-height: 1.6;font-size: 14px;box-sizing: border-box !important;">学模式打造全方位、立体化的学习体验，助推学习成果的最高程度转化。</span>
                    </p>
                    <p><span
                            style="color: rgb(81, 79, 79);line-height: 1.6;font-size: 14px;box-sizing: border-box !important;"><br/></span>
                    </p>
                    <p><br/></p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/1562557100549341.jpg"
                                                        title="1562557100549341.jpg" alt="1562557100549341.jpg"
                                                        style="width: 640px; height: 406px;" width="640" vspace="0"
                                                        height="406" border="0"/></p>
                    <p><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section
                                style="margin-right: auto;margin-left: auto;text-align: center;box-sizing: border-box !important;">
                            <section
                                    style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                <section class=""
                                         style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                <p style="padding: 2px 10px;box-sizing: border-box !important;"><span
                                        style="font-size: 18px;color: rgb(170, 117, 80);box-sizing: border-box !important;"><strong
                                        style="box-sizing: border-box !important;">教学体系</strong></span></p>
                                <section class=""
                                         style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                            </section>
                            <section style="box-sizing: border-box !important;"><span class=""
                                                                                      style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                    style="box-sizing: border-box !important;"/></span></section>
                        </section>
                    </blockquote>
                    <p style="text-align:center"><img src="/static/chhcollege/picture/1562557124901875.jpg"
                                                      title="1562557124901875.jpg" alt="1562557124901875.jpg"
                                                      style="width: 640px; height: 319px;" width="640" vspace="0"
                                                      height="319" border="0"/></p>
                    <p style="text-align: center;"><br/></p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 25.6px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br/></p>
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
                        </section>
                    </blockquote>
                    <p style="text-align: center;"><img class="rich_pages " data-ratio="1.8035982008995501"
                                                        data-s="300,640"
                                                        data-src="/static/chhcollege/picture/df7ea4b101af42879ca4cc5bc176e08e.gif"
                                                        data-type="png" data-w="667"
                                                        style="width: 667px !important; height: auto !important; visibility: visible !important;"
                                                        _width="667px"
                                                        src="/public/upload/20190708/1562557482856566.jpg"
                                                        crossorigin="anonymous" data-fail="0"
                                                        title="1562557482856566.jpg" alt="1562557482856566.jpg"
                                                        width="640" vspace="0" height="1154" border="0"/></p>
                    <p><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                            <section
                                    style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                <section class=""
                                         style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                    <span style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 18px;box-sizing: border-box !important;"><strong
                                            style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                            style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                            style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                            style="font-size: 18px;box-sizing: border-box !important;">创合汇APP</span></strong></span></strong></span></strong></span>
                                </p>
                                <section class=""
                                         style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;">
                                    &nbsp;
                                </section>
                            </section>
                            <p style="line-height: 1.75em;box-sizing: border-box !important;"><span class=""
                                                                                                    style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                    style="box-sizing: border-box !important;"/></span></p></section>
                    </blockquote>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section
                                style="margin-right: auto;margin-left: auto;text-align: center;box-sizing: border-box !important;">
                            <section style="box-sizing: border-box !important;">
                                <blockquote class="" data-author="Wxeditor"
                                            style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                    <section
                                            style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                        <p style="line-height: 1.75em;box-sizing: border-box !important;"><img
                                                data-src="/static/chhcollege/picture/ce7b21e196df483ba073509ca820dbc7.gif"
                                                data-type="jpeg" class="" data-ratio="0.6194444444444445" data-w="1080"
                                                _width="677px" src="/public/upload/20190708/1562557515522708.jpg"
                                                style="width: 677px !important; height: auto !important; visibility: visible !important;"
                                                crossorigin="anonymous" data-fail="0" title="1562557515522708.jpg"
                                                alt="1562557515522708.jpg" width="640" vspace="0" height="396"
                                                border="0"/></p></section>
                                </blockquote>
                            </section>
                        </section>
                    </blockquote>
                    <blockquote class=""
                                style="margin-top: 2px;margin-bottom: 2px;padding: 2px;border-width: 1px;border-style: dotted;border-color: rgb(189, 140, 119);white-space: normal;box-sizing: border-box;letter-spacing: 0.544px;color: rgb(62, 62, 62);font-size: 16px;line-height: 28.4444px;background-color: rgb(255, 255, 255);">
                        <section style="padding: 10px;box-sizing: border-box;color: inherit;"><p
                                style="line-height: 28.4444px; box-sizing: border-box !important; text-align: center;">
                            <span style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;">创合汇APP打破大学围墙，整合国际知名商学教育资源和全球产业核心资源，构建商学社群生态平台，</span>
                        </p>
                            <p style="line-height: 28.4444px; box-sizing: border-box !important; text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;">旨在为企业家、创业者及其管理团队提供优质的在线课程以及资源对接、交流共创的服务平台。</span>
                            </p>
                            <p style="line-height: 28.4444px;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;box-sizing: border-box !important;">商学课程</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 2em;color: rgb(136, 136, 136);box-sizing: border-box !important;">迭代认知 拥抱变化</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 0em;font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" line-height:="" box-sizing:=""
                               border-box=""><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;">社群连接</strong></span></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 0em;color: rgb(136, 136, 136);box-sizing: border-box !important;">思想共生 价值共创</span></strong></span>
                            </p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);text-indent: 0em;font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" line-height:="" box-sizing:=""
                               border-box=""><br style="box-sizing: border-box !important;"/></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span
                                    style="color: rgb(170, 117, 80);font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;">生态服务</strong></span></p>
                            <p style="margin-top: 5px;margin-bottom: 5px;color: inherit;font-size: 14px;letter-spacing: 0.544px;text-align: center;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                               helvitica="" hiragino="" sans="" microsoft="" arial="" text-indent:="" box-sizing:=""
                               border-box=""><span style="font-size: 15px;box-sizing: border-box !important;"><strong
                                    style="box-sizing: border-box !important;"><span
                                    style="text-indent: 0em;color: rgb(136, 136, 136);box-sizing: border-box !important;">创新加速 平台赋能</span></strong></span>
                            </p></section>
                    </blockquote>
                    <p><br/></p>
                    <article class="" data-author="Wxeditor"
                             style="margin: 5px auto;letter-spacing: 0.544px;white-space: normal;background-color: rgb(255, 255, 255);font-family: "
                             helvitica="" hiragino="" sans="" microsoft="" arial="" font-size:="" line-height:=""
                             border-width:="" border-style:="" border-color:="" box-sizing:="" border-box="">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <section data-author="Wxeditor" style="box-sizing: border-box !important;">
                                <section data-author="Wxeditor" style="box-sizing: border-box !important;"><p
                                        style="box-sizing: border-box !important;"><span
                                        style="color: rgb(170, 117, 80);box-sizing: border-box !important;"><br/></span>
                                </p>
                                    <p style="box-sizing: border-box !important;"><strong><span
                                            style="color: rgb(170, 117, 80);box-sizing: border-box !important;">&nbsp;</span></strong>
                                    </p>
                                    <section data-author="Wxeditor"
                                             style="letter-spacing: 0.544px;white-space: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <blockquote class="" data-author="Wxeditor"
                                                    style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;text-align: center;background-color: rgb(255, 255, 255);">
                                            <section style="margin-right: auto;margin-left: auto;">
                                                <section style="display: inline-block;vertical-align: top;">
                                                    <section class=""
                                                             style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);"></section>
                                                    <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);">
                                                        <span style="color: rgb(170, 117, 80);"><strong><span
                                                                style="font-size: 18px;"><strong
                                                                style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;"><span
                                                                style="color: rgb(170, 117, 80);font-size: 18px;"><strong
                                                                style="font-size: 16px;line-height: 30px;"><span
                                                                style="font-size: 18px;">学术支持</span></strong></span></strong></span></strong></span>
                                                    </p>
                                                    <section class=""
                                                             style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);"></section>
                                                </section>
                                                <p style="line-height: 1.75em;"><span class=""
                                                                                      style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);"><br/></span>
                                                </p></section>
                                        </blockquote>
                                        <p style="white-space: normal;letter-spacing: 0.544px;line-height: 1.5em;background-color: rgb(255, 255, 255);">
                                            <img class="" data-copyright="0" data-ratio="0.08275328692962104"
                                                 data-s="300,640" data-type="png" data-w="1293"
                                                 data-src="/static/chhcollege/picture/e8a80b36f3394dacb7a4f41230a5bf25.gif"
                                                 style="font-size: 14px; visibility: visible !important; width: 677px !important; height: auto !important;"
                                                 _width="677px" src="/public/upload/20190708/1562557575122995.jpg"
                                                 crossorigin="anonymous" data-fail="0" title="1562557575122995.jpg"
                                                 alt="1562557575122995.jpg" width="640" vspace="0" height="53"
                                                 border="0"/></p>
                                        <p style="white-space: normal;letter-spacing: 0.544px;line-height: 1.5em;background-color: rgb(255, 255, 255);">
                                            <br/></p></section>
                                    <blockquote class="" data-author="Wxeditor"
                                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <section
                                                style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                            <section
                                                    style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                                <section class=""
                                                         style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                                <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                                    <span style="color: rgb(170, 117, 80);"><strong
                                                            style="box-sizing: border-box !important;"><span
                                                            style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                            style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                            style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                            style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                            style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">师资力量</span></strong></span></strong></span></strong></span>
                                                </p>
                                                <section class=""
                                                         style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                            </section>
                                            <p style="line-height: 1.75em;box-sizing: border-box !important;"><span
                                                    class=""
                                                    style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                                    style="box-sizing: border-box !important;"/></span></p></section>
                                    </blockquote>
                                    <p style="margin-top: 5px;margin-bottom: 5px;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">创合汇商学突破单一院校界限，打破大学围墙，以全球化的视野整合国内外顶尖商学院优质师资力量、业</span>
                                    </p>
                                    <p style="margin-top: 5px;margin-bottom: 5px;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">界权威专家学者以及实践领域的知名企业家共同授课，为学员们打造中西贯通、理论与实践深度融合的学</span>
                                    </p>
                                    <p style="margin-top: 5px;margin-bottom: 5px;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;">习体验。</span>
                                    </p>
                                    <p style="margin-top: 5px;margin-bottom: 5px;white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);line-height: normal;box-sizing: border-box !important;">
                                        <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><br/></span>
                                    </p>
                                    <p><img class="" data-copyright="0" data-ratio="1.5548387096774194" data-s="300,640"
                                            data-src="/static/chhcollege/picture/7b9050f7dbe14d64b9cdf77a94a49864.gif"
                                            data-type="jpeg" data-w="1240"
                                            style="font-size: 14px; text-align: center; white-space: normal; width: 677px !important; height: auto !important; visibility: visible !important;"
                                            _width="677px" src="/public/upload/20190708/1562557603693645.jpg"
                                            crossorigin="anonymous" data-fail="0" title="1562557603693645.jpg"
                                            alt="1562557603693645.jpg" width="640" vspace="0" height="995" border="0"/>
                                    </p>
                                    <p style="box-sizing: border-box !important;"><strong><span
                                            style="color: rgb(170, 117, 80);box-sizing: border-box !important;"></span></strong><strong
                                            style="color: rgb(170, 117, 80);box-sizing: border-box !important;"></strong>
                                    </p>
                                    <p style="white-space: normal;letter-spacing: 0.544px;background-color: rgb(255, 255, 255);text-align: center;box-sizing: border-box !important;">
                                        <br/></p>
                                    <blockquote class="" data-author="Wxeditor"
                                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;text-align: center;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                                        <section
                                                style="margin-right: auto;margin-left: auto;box-sizing: border-box !important;">
                                            <section
                                                    style="display: inline-block;vertical-align: top;box-sizing: border-box !important;">
                                                <section class=""
                                                         style="height: 5px;border-top: 1px solid rgb(189, 140, 119);border-right: 1px solid rgb(189, 140, 119);border-bottom-style: none;border-left: 1px solid rgb(189, 140, 119);border-bottom-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                                <p style="padding: 2px 10px;font-size: 16px;color: rgb(6, 6, 6);box-sizing: border-box !important;">
                                                    <span style="color: rgb(170, 117, 80);"><strong
                                                            style="box-sizing: border-box !important;"><span
                                                            style="font-size: 18px;box-sizing: border-box !important;"><strong
                                                            style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                            style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                            style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                            style="font-size: 18px;box-sizing: border-box !important;">2019年课表</span></strong></span></strong></span></strong></span>
                                                </p>
                                                <section class=""
                                                         style="height: 5px;border-right: 1px solid rgb(189, 140, 119);border-top-style: none;border-bottom: 1px solid rgb(189, 140, 119);border-left: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);box-sizing: border-box !important;"></section>
                                            </section>
                                            <p style="line-height: 1.75em;box-sizing: border-box !important;"><span
                                                    class=""
                                                    style="display: inline-block;width: 30px;height: 2px;vertical-align: top;background: rgb(189, 140, 119);box-sizing: border-box !important;"><br
                                                    style="box-sizing: border-box !important;"/></span></p></section>
                                    </blockquote>
                                    <p style="text-align: center;"><img class="" data-copyright="0" data-cropselx1="0"
                                                                        data-cropselx2="556" data-cropsely1="0"
                                                                        data-cropsely2="1486"
                                                                        data-ratio="2.43739837398374" data-s="300,640"
                                                                        data-src="/static/chhcollege/picture/d557676940044f4db19e4a175626c74b.gif"
                                                                        data-type="png" data-w="615"
                                                                        style="width: 556px !important; height: auto !important; visibility: visible !important;"
                                                                        _width="556px"
                                                                        src="/public/upload/20190708/1562557639232730.jpg"
                                                                        crossorigin="anonymous" data-fail="0"
                                                                        title="1562557639232730.jpg"
                                                                        alt="1562557639232730.jpg" width="640"
                                                                        vspace="0" height="1560" border="0"/></p>
                                    <p style="box-sizing: border-box !important;"><br/></p></section>
                            </section>
                        </section>
                    </article>
                    <p><br/></p></div>
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
                <h3>学院介绍</h3>
                <p><a href="<?php echo url('chhcollege/index'); ?>" target="_blank">使命与愿景</a></p>
                <p><a href="#" target="_blank">核心价值观</a></p>
                <p><a href="#" target="_blank">学院特色</a></p>
                <p><a href="#" target="_blank">学习模式</a></p>
            </li>
            <li>
                <h3>核心课程</h3>
                <p><a href="<?php echo url('chhcollege/m402'); ?>" target="_blank">工商管理类</a></p>
                <p><a href="<?php echo url('chhcollege/m404'); ?>" target="_blank">创新创业类</a></p>
                <p><a href="<?php echo url('chhcollege/m385'); ?>" target="_blank">金融实务类</a></p>
                <p><a href="<?php echo url('chhcollege/m375'); ?>" target="_blank">人文与领导力类</a></p>
                <p><a href="<?php echo url('chhcollege/m380'); ?>" target="_blank">国际访学类</a></p>
            </li>
            <li>
                <h3>师资力量</h3>
                <p><a href="/index/staff/index/cateid/1.html" target="_blank">中教师资</a></p>
                <p><a href="/index/staff/index/cateid/2.html" target="_blank">名教师资</a></p>
                <p><a href="/index/staff/index/cateid/3.html" target="_blank">名家讲坛师资</a></p>
            </li>
            <li>
                <h3 class="no_b"><a href="/index/activity/index.html" target="_blank">平台活动</a></h3>
            </li>
            <li>
                <h3 class="no_b"><a href="/index/news/index.html" target="_blank">新闻动态</a></h3>
            </li>
        </ul>

        <div class="contactus_body fr">
            <h3>联系我们</h3>
            <p><span>创合汇商学院：</span></p>
            <p>地址：上海市淮海西路55号申通信息广场17楼</p>
            <p>电话：400-6886-238</p>
            <p>传真：021-52308253</p>
            <!-- <h6><img src="static/picture/qr_code.jpg" /></h6> -->
        </div>

    </div>

    <div class="copyright_bar">
        <div class="fl">
            <a href="/index/contact/index.html" target="_blank">联系我们</a>
            <em>|</em>
            <a href="#" target="_blank">网站地图</a>
            <em>|</em>
            <a href="#" target="_blank">法律声明</a>
        </div>
        <p class="fr">版权 © 创合汇商学院 网站备案号：
            <a style='color: #e6e6e6;' href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备18026080号-1</a>
            <a class="blank" id="host" target="_blank" href=""><img src="static/picture/dian.png" alt=""></a>
        </p>
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

</div>
</footer>
</body>
</html>

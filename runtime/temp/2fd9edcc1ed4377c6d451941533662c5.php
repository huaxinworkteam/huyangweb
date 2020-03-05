<?php /*a:4:{s:81:"/www/wwwroot/huyangWeb/application/index/view/chhcollege/about/financeandtax.html";i:1576489134;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_header.html";i:1576828632;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_leftBy.html";i:1574734484;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_footer.html";i:1576828823;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>财税学院介绍</title>
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
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">目标</span></strong></span></strong></span></strong></span>
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
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">组建超强的明星讲师团队，向学员传递及时准确的财税政策，前沿的财税管理理念，系统的财税知识和创新性业务实践。<br/>颠覆传统培训模式，通过科技力量的持续强化，以大数据驱动财税教育革新，开启个性化的培训模式。</span></span>
                            </p>
                            <p style="text-align: left;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                        </section>
                    </blockquote>
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
                                            <span style="color: rgb(170, 117, 80);"><strong
                                                    style="box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">愿景</span></strong></span></strong></span></strong></span>
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
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">根据实务场景，打破财务、税务、管理、法律、IT的边界，重新组合知识。<br/>压缩理论知识学习，专注于“解决方案Solution”的讨论；面对问题，我们反对不顾生死的合规，不分主次的一步到位，<br/>主张在发展中解决问题。凭借系统的课程体系，先进的培训理念和培训模式，以及优质的培训师资，<br/>赋能创业者及其团队核心人员，华创胡杨大学财税学院将成为财税培训领域的标杆。</span></span>
                            </p>
                            <p style="text-align: left;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                        </section>
                    </blockquote>
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
                                            <span style="color: rgb(170, 117, 80);"><strong
                                                    style="box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">使命</span></strong></span></strong></span></strong></span>
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
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">创业是每一个创业人的宿命。什么时候可以创业？你是不是具备了在一个行业创业的能力？<br/>这必然会有一个过程，但或早或晚，终会到来。<br/>对外，我们不断的突破商业的边界；对内，我们不断解放自我的束缚。<br/>我们否定自己，也成就自己；工欲善其事，必先利其器，唯有“学习”永恒。<br/>华创胡杨大学是国内第一个团结全社会资源，培养全社会创业人才、技能人才的终身免费的公益大学。<br/>随着市场经济日趋规范和完善，财税管理在企业竞争中所起的作用越来越显着。企业的财税管理，要着重从税务管理的方法及措施入手,<br/>通过加强税法知识学习，从而进一步提高纳税意识，在掌握税法理论知识的前提下，通过税收优惠、税收筹划等一些合理合法的避税方法<br/>来达到降低企业经营成本、提高财务管理水平,帮助企业在资产重组等方面获得有效知识，最终提高企业的竞争力。<br/>胡杨大学财税学院将助力企业最终走向成功。</span></span>
                            </p>
                            <p style="text-align: left;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                        </section>
                    </blockquote>
                    <p><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section style="margin: 1em auto;box-sizing: border-box !important;">
                                    <section class=""
                                             style="padding-right: 16px;padding-left: 16px;border-bottom: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);border-right-color: rgb(189, 140, 119);border-left-color: rgb(189, 140, 119);line-height: 25px;display: inline-block;box-sizing: border-box !important;">
                                        <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;">
                                            <span style="font-size: 16px;font-weight: bold;color: rgb(170, 117, 80);box-sizing: border-box !important;">院长</span>
                                        </p></section>
                                    <section style="box-sizing: border-box !important;"><span class=""
                                                                                              style="margin: -1px auto 10px;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;display: block;border-top: 8px solid rgb(189, 140, 119);box-sizing: border-box !important;"><br/></span>
                                    </section>
                                </section>
                            </blockquote>
                        </section>
                    </blockquote>
                    <section class="" title=""
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">院长 简介</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">傅旭东</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/1.png"
                                                        title="1.png" alt="1.png"
                                                        style="width: 171px; height: 229px;" width="171"
                                                        vspace="0" height="229" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海财经大学财务会计学士、法律学士。</span></span>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海仟一税务师事务所合伙人。</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">资深财务管理顾问、管理咨询顾问。</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">中国注册会计师、注册税务师。</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">在财税审计领域从业22年，精通分析企业股权结构、企业财务风险管理，拥有丰富的财税实操和执行经验。</span></span>
                    </p>

                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>

                    <section class="" title=""
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">副院长 简介</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">颜晓斌</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/2.png"
                                                        title="2.png" alt="2.png"
                                                        style="width: 246px; height: 217px;" width="246"
                                                        vspace="0" height="217" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海友文财务顾问有限公司管理合伙人</span></span>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海移泊物联网有限公司创始合伙人</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">资深财税顾问</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">拥有互联网与软件开发经验的财务人士</span></span>
                    </p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>

                    <section class="" title=""
                             style="margin: 5px auto;white-space: normal;letter-spacing: 0.544px;font-family: 微软雅黑, 宋体;font-size: 14px;line-height: normal;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="box-sizing: border-box;">
                            <section
                                    style="margin-top: 0.5em; margin-bottom: 0.5em; box-sizing: border-box; text-align: center;">
                                <section class=""
                                         style="padding: 2px 10px;box-sizing: border-box;display: inline-block;border-top-right-radius: 1em;border-bottom-right-radius: 1em;border-width: 2px;border-style: solid;border-color: rgb(189, 140, 119);color: rgb(189, 140, 119);">
                                    <section style="box-sizing: border-box;"><span
                                            style="color: rgb(170, 117, 80);"><strong
                                            style="box-sizing: border-box !important;"><span
                                            style="font-size: 15px;line-height: 25.6px;white-space: pre-wrap;box-sizing: border-box !important;">副院长 简介</span></strong></span>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">程国恒</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/3.png"
                                                        title="3.png" alt="3.png"
                                                        style="width: 284px; height: 240px;" width="284"
                                                        vspace="0" height="240" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">创氪巴巴（上海）创业孵化器有限公司创始人</span></span>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海团飞企业管理有限公司创始人</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海芸商佳互联网科技有限公司合伙人</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">资深财税顾问</span></span>
                    </p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">致力于互联网财税与共享财税领域的研究</span></span>
                    </p>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <blockquote class="" data-author="Wxeditor"
                                style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <section style="text-align: center;box-sizing: border-box !important;">
                            <blockquote class="" data-author="Wxeditor"
                                        style="margin: 5px auto;padding-left: 0px;border-width: 0px;border-style: initial;border-color: initial;box-sizing: border-box !important;">
                                <section style="margin: 1em auto;box-sizing: border-box !important;">
                                    <section class=""
                                             style="padding-right: 16px;padding-left: 16px;border-bottom: 1px solid rgb(189, 140, 119);border-top-color: rgb(189, 140, 119);border-right-color: rgb(189, 140, 119);border-left-color: rgb(189, 140, 119);line-height: 25px;display: inline-block;box-sizing: border-box !important;">
                                        <p style="margin-top: 5px;margin-bottom: 5px;box-sizing: border-box !important;">
                                            <span style="font-size: 16px;font-weight: bold;color: rgb(170, 117, 80);box-sizing: border-box !important;">讲师</span>
                                        </p></section>
                                    <section style="box-sizing: border-box !important;"><span class=""
                                                                                              style="margin: -1px auto 10px;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;display: block;border-top: 8px solid rgb(189, 140, 119);box-sizing: border-box !important;"><br/></span>
                                    </section>
                                </section>
                            </blockquote>
                        </section>
                    </blockquote>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">傅旭东</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/4.png"
                                                        title="4.png" alt="4.png"
                                                        style="width: 171px; height: 229px;" width="171"
                                                        vspace="0" height="229" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海财经大学财务会计学士、法律学士。上海仟一税务师事务所合伙人。资深财务管理顾问、管理咨询顾问。中国注册会计师、注册税务师。在财税审计领域从业21年，精通分析企业股权结构、企业财务风险管理，拥有丰富的财税实操和执行经验。</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">夏国庆</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/5.png"
                                                        title="5.png" alt="5.png"
                                                        style="width: 229px; height: 240px;" width="229"
                                                        vspace="0" height="240" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">清华大学EMBA。聚云创客合伙人。合税宝CEO。实战型税务筹划专家。在产业互联网、财税领域从业18年，擅长公司架构、互联网+、财税筹划落地执行。</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">董磊</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/6.png"
                                                        title="6.png" alt="6.png"
                                                        style="width: 192px; height: 240px;" width="192"
                                                        vspace="0" height="240" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海仟一会计师事务所副主任会计师/合伙人，中国注册会计师、审计师、司法鉴定人、证券从业资格、上市公司独立董事资格，上海审计局2011年先进个人，上海市审计局专家库专家，上海上咨会计师事务所项目评审专家，</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">乐青霖</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/7.png"
                                                        title="7.png" alt="7.png"
                                                        style="width: 256px; height: 384px;" width="256"
                                                        vspace="0" height="384" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">火橙创业加速器 投资总监，美国丹佛大学MSF/MBA双学位硕士。曾任职于美国LIB基金担任高级行研研究员，汉理资本投资总监，负责汽车、电子商务、互联网金融等行业投融资。曾主导案例包括一嗨租车、光猪圈、好智医疗（并购）、多彩投等。</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">项伟</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/8.png"
                                                        title="8.png" alt="8.png"
                                                        style="width: 249px; height: 327px;" width="249"
                                                        vspace="0" height="327" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">美国丹佛大学商学院MBA学位，上海大学金融专业学士学位。曾于2012年加入汉理资本，担任汉理资本董事总经理，负责汉理资本在早期及成长期领域的投资，累计投资金额超过3亿人民币，多个项目已IPO排队或并购退出并获得高额回报。积极领导并参与了卷皮网，到喜啦，丽 人丽妆，捷昌驱动(603583)，新农哥，捏捏动漫，东方融资网，翰鑫科 技，小马保险，翰迪数据，正道北拓等公司的投资及管理。</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
                    <p style="text-align: center;">
                                <span style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                        style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">陈顺</span></span>
                    </p>
                    <p style="text-align: center;"><img src="/static/chhcollege/picture/xueyuan/financeandtax/9.png"
                                                        title="9.png" alt="9.png"
                                                        style="width: 275px; height: 306px;" width="275"
                                                        vspace="0" height="306" border="0"/></p>
                    <p style="text-align: center;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                            style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">上海政法学院法学学士 ，同济大学法律硕士，首届上海市公诉人、辩护人辩论赛最佳辩手 杨浦区青年创业导师 上海政法学院职业导师。拥有近十年时间的丰富诉讼经验， 对于公司结构治理，商业纠纷预防与化解，金融并购，娱乐法服务，企业家刑事法律风险防控等领域的各类潜在争议具有较强的专业能力。</span></span>
                    <p style="white-space: normal;letter-spacing: 0.544px;line-height: 27.2px;background-color: rgb(255, 255, 255);box-sizing: border-box !important;">
                        <br style="box-sizing: border-box !important;"/></p>
                    <p><br/></p>
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
                                            <span style="color: rgb(170, 117, 80);"><strong
                                                    style="box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="color: rgb(189, 140, 119);font-size: 16px;white-space: pre-wrap;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;"><strong
                                                    style="font-size: 16px;line-height: 30px;box-sizing: border-box !important;"><span
                                                    style="color: rgb(170, 117, 80);font-size: 18px;box-sizing: border-box !important;">课程体系</span></strong></span></strong></span></strong></span>
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
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">我们将创业过程中遇到的问题划分4大板块：创业Entrepreneurship、资本Capital、合规Compliance、内控Control。</span></span>
                            </p>
                            <p style="text-align: center;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">根据板块，涵盖了财税有关的20+课程进行循环授课，每个课程讨论一类具体的场景，综合解决场景中具体的问题。</span></span>
                            </p>
                            <p style="text-align: center;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);">“创业/资本”适合创业者；“合规、内控”则创业者和执行者都可以进行系统学习。完成财税学院四大板块课程，将获得完整的“规则”地图，足矣规划并应对创业历程中必须面对的所有财税难题。</span></span>
                            </p>
                            <p style="text-align: left;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;line-height: 1.6;box-sizing: border-box !important;"><span
                                    style="color: rgb(81, 79, 79);font-size: 14px;letter-spacing: 0.544px;text-align: left;background-color: rgb(255, 255, 255);"><br/></span></span>
                            </p>
                        </section>
                    </blockquote>
                    <p><br/></p>
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

<?php /*a:5:{s:72:"/www/wwwroot/huyangWeb/application/index/view/chhcollege/news/index.html";i:1577929887;s:62:"/www/wwwroot/huyangWeb/application/index/view/public/head.html";i:1574909810;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_header.html";i:1576828632;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_leftBy.html";i:1574734484;s:69:"/www/wwwroot/huyangWeb/application/index/view/public/coll_footer.html";i:1576828823;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>新闻动态</title>
    <meta name='keywords' content="——全球开放式平台型商学院"/>
    <meta name='description' content="——全球开放式平台型商学院"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name='keywords' content="创合汇，商学院，，商学院课程"/>
<meta name='description'
      content="是基于上海交通大学等国内外知名院校优质资源的基础上成立的全球新一代平台型商学院。致力于打破大学围墙，突破教育界与产业界的界限，打造中国乃至世界领先的创业者、企业家及其管理团队最有价值的学习与发展平台"/>

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
<link href="/static/chhcollege/css/reset.css" type="text/css" rel="stylesheet"/>
<link href="/static/chhcollege/css/layout.css" type="text/css" rel="stylesheet"/>
<link href="/static/chhcollege/css/common.css" type="text/css" rel="stylesheet"/>
<link href="/static/chhcollege/css/index.css" type="text/css" rel="stylesheet"/>
<link href="/static/chhcollege/css/base.css" rel="stylesheet">

<!--[if IE]>
<script src="/static/chhcollege/js/html5.js"></script><![endif]-->
<!--[if lt IE 10]>
<script type="text/javascript" src="/static/chhcollege/js/pie.js"></script><![endif]-->
<script type="text/javascript" src="/static/chhcollege/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/chhcollege/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/static/chhcollege/js/banner.js"></script>
<script type="text/javascript" src="/static/chhcollege/js/jquery-powerswitch.js"></script>
<script type="text/javascript" src="/static/chhcollege/js/common.js"></script>
<link href="/static/chhcollege/css/flexslider.css" type="text/css" rel="stylesheet"/>
<link href="/static/chhcollege/css/page.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="/static/chhcollege/js/jquery.flexslider-min.js"></script>
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
<script type="text/javascript">
    //base
    var _baseUrl = '';
    var baseJSUrl = '/static/chhcollege/js/';
    var baseCSSUrl = '/static/chhcollege/css/';
</script>
<script type="text/javascript">

    $(function () {

        $.fn.banner(".index_kv_body", 5000);



        $("#scroll_1 a.btn").powerSwitch({

            container: $("#scroll_1 .scroll_in"),

            number: 4

        });



        $("#scroll_2 a.btn").powerSwitch({

            container: $("#scroll_2 .scroll_in"),

            number: 4

        });



        $("#scroll_3 a.btn").powerSwitch({

            container: $("#scroll_3 .scroll_in"),

            number: 4

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
            <!--<li><img src="/static/chhcollege/picture/20190923144414.jpg"></li>-->
            <li><img src="/static/chhcollege/images/news.jpg"></li>
        </ul>
    </div>
    <!--<div class="txt">
        <div class="cw">
            <h3></h3>
        </div>

    </div>
    <div class="line"></div>
    <div class="btn">
        <div class="cw"><a href="/index/contact/message.html" class="act" target="_blank">在线报名</a></div>
    </div>-->

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
                        <h3> 新闻<span>动态</span></h3>
                    </div>
                    <div class="fr"><a href="/" target="_blank">首页</a><span class="cur">></span><a href="javascript:;"
                                                                                                   class="cur">新闻动态</a>
                    </div>
                </div>
                <div class="news">
                    <ul>
                        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('index/news_detail',['newsid'=>$vo['newsid']]); ?>">
                                <div class="item">
                                    <div class="fl">
                                        <img src="<?php echo htmlentities($vo['newspicture']); ?>">
                                    </div>
                                    <div class="fr">
                                        <h3><?php echo htmlentities($vo['newstitle']); ?></h3>
                                        <p><?php echo $vo['articleContent']; ?></p>
                                        <i><?php echo htmlentities($vo['createTime']); ?></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="Pagers">
                        <ul class="pagination">
                            <?php echo $news; ?>
                        </ul>
                    </div>


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

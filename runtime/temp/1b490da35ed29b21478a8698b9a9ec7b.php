<?php /*a:3:{s:70:"D:\phpStudy\WWW\huyangWeb\application\index\view\chhcollege\index.html";i:1574234887;s:72:"D:\phpStudy\WWW\huyangWeb\application\index\view\public\coll_header.html";i:1574220279;s:72:"D:\phpStudy\WWW\huyangWeb\application\index\view\public\coll_footer.html";i:1574220134;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head runat="server">
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
    <!--[if IE]>
    <script src="/static/chhcollege/js/html5.js"></script><![endif]-->
    <!--[if lt IE 10]>
    <script type="text/javascript" src="/static/chhcollege/js/pie.js"></script><![endif]-->
    <script type="text/javascript" src="/static/chhcollege/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/banner.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery-powerswitch.js"></script>
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
                        <p><a href="" target="_blank">学院介绍</a></p>
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
<!--<script>
    function Getajax(){
        $.ajax(
            {
                type:"get",
                url:"<?php echo url('Index/index'); ?>",
                data:"page=seriesNO",
                success:function (msg) {
                    console.log(msg);
                },
                error:function (xhr) {
                    alert(xhr.status);
                }

            }
        );
    }
</script>-->
<div class="index_kv_body">
    <a href="http://college.chuanghehui.com/index/dujiaoshou.html" target="_blank" class="kv"
       style="background-image:url(/static/chhcollege/images/home.jpg);"></a>
    <!--<a href="http://college.chuanghehui.com/index/dujiaoshou.html" target="_blank" class="kv"
       style="background-image:url(/static/chhcollege/images/home1.jpg);"></a>
    <a href="http://college.chuanghehui.com/index/course/index/cid/375.html" target="_blank" class="kv"
       style="background-image:url(/static/chhcollege/images/home2.jpg);"></a>
    <a href="http://college.chuanghehui.com/index/embaceo.html" target="_blank" class="kv"
       style="background-image:url(/static/chhcollege/images/home3.jpg);"></a>
    <a href="http://college.chuanghehui.com/index/course/index/cid/380.html" target="_blank" class="kv"
       style="background-image:url(/static/chhcollege/images/home4.jpg);"></a>
    <a href="javascript:;" class="btn prev_btn"></a>
    <a href="javascript:;" class="btn next_btn"></a>-->
</div>

<div class="index_center_body">
    <div class="cw">
        <h3 class="blank_tit"><span>创造价值，回报社会</span></h3>
        <h6>华创胡杨大学，是一所不设门槛的创新创业大学，是一所终身公益免费培养企业家的学校，是一所所有导师无私奉献的学校。 <br/>学校致力于系统性的培养企业家及其管理团队，打造最有价值的学习与发展平台，为中国创新创业事业和实业发展贡献力量。</h6>
        <div class="ico_list">
            <a href="/index/course/index/cid/375.html" target="_blank" class="ico_10">
                <span></span>
                <p>理论学习</p>
                <i></i>
            </a>
            <em>|</em>
            <a href="/index/course/index/cid/402.html" target="_blank" class="ico_7">
                <span></span>
                <p>咨询辅导</p>
                <i></i>
            </a>
            <em>|</em>
            <a href="/index/course/index/cid/385.html" target="_blank" class="ico_9">
                <span></span>
                <p>融资路演</p>
                <i></i>
            </a>
            <em>|</em>
            <a href="/index/course/index/cid/404.html" target="_blank" class="ico_8">
                <span></span>
                <p>综合服务</p>
                <i></i>
            </a>
            <!--<em>|</em>
            <a href="/index/course/index/cid/387.html" target="_blank" class="ico_5">
                <span></span>
                <p>O2O课程</p>
                <i></i>
            </a>
            <em>|</em>
            <a href="/index/course/index/cid/379.html" target="_blank" class="ico_6">
                <span></span>
                <p>国际访学</p>
                <i></i>
            </a>-->
        </div>
        <h6 style="margin: 50px 0 25px;">胡杨大学给学员培养的不仅仅是知识和能力，更重要的是社会责任感和核心价值观。鼓励所有学员奉献和担当，通过持续创造价值来成就自己的事业。 <br/>胡杨大学不仅仅是一所学校，而是助力创业者成长和企业发展的全方位服务生态，是创业者的加油站和休息站。</h6>
    </div>
</div>

<div class="index_btm_body">
    <div class="cw">

        <h3 class="blank_tit"><span>师资力量</span></h3>

        <!--    <div class="tab_body">
                <?php if(is_array($group) || $group instanceof \think\Collection || $group instanceof \think\Paginator): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$se): $mod = ($i % 2 );++$i;?>
       <a href="<?php echo url('index/index',['seriesNO'=>$se['seriesNO']]); ?>"><?php echo htmlentities($se['series']); ?></a>
                <a href="javascript:" onclick="Getajax();"><?php echo htmlentities($se['series']); ?></a>
            <em>|</em>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>-->

        <div class="tab_con">

            <div class="con">
                <div class="scroll_body" id="scroll_1">
                    <div class="scroll_in fl">
                        <?php if(is_array($teachers) || $teachers instanceof \think\Collection || $teachers instanceof \think\Paginator): $i = 0; $__LIST__ = $teachers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <ul>
                            <li class="box_1">
                                <a href="#">
                                    <div class="in">
                                        <img src="<?php echo htmlentities($vo['teacherphoto']); ?>"/>
                                        <h3><?php echo htmlentities($vo['teachername']); ?></h3>
                                        <h4><?php echo htmlentities($vo['teacherlevel']); ?></h4>
                                        <p><?php echo htmlentities($vo['teacherdescription']); ?></p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="index_news_body">
    <div class="cw">
        <div class="clearfix">

            <div class="news_body fl">
                <h3 class="tit">
                    <a href="<?php echo url('index/news'); ?>" target="_blank">更多 +</a>
                    <span>新闻动态</span>
                </h3>
                <ul class="list">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/news_detail',['newsid'=>$vo['newsid']]); ?>" target="_blank"><em><?php echo htmlentities($vo['createTime']); ?></em><span><?php echo htmlentities($vo['newstitle']); ?></span></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <div class="event_body fr">
                <h3 class="tit">
                    <a href="http://www.massmakers.cn/category-9338.html" target="_blank">更多 +</a>
                    <span>培训报名</span>
                </h3>
                <ul class="list">
                    <?php if(is_array($index_activity) || $index_activity instanceof \think\Collection || $index_activity instanceof \think\Paginator): $i = 0; $__LIST__ = $index_activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('index/act_detail',['activityId'=>$vo['activityId']]); ?>" target="_blank">
                            <img src="<?php echo htmlentities($vo['activity_pic']); ?>" class="fl"/>

                            <div class="fl">
                                <h3><?php echo htmlentities($vo['activityTitle']); ?></h3>
                                <h4><?php echo htmlentities($vo['createTime']); ?></h4>
                                <p><?php echo $vo['articleContent']; ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="color_blank s_1"></div>
<footer>
    <div class="cw">
    <div class="top_body clearfix">
        <ul class="fl clearfix">
            <li>
                <h3><a href="<?php echo url('index/about'); ?>" target="_blank">胡杨概况</a></h3>
                <p><a href="<?php echo url('index/about'); ?>" target="_blank">学院介绍</a></p>
                <p><a href="#" target="_blank">组织架构</a></p>
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
                <h3 class="no_b"><a href="<?php echo url('index/contact'); ?>" target="_blank">联系我们</a></h3>
            </li>
        </ul>

        <div class="contactus_body fr">
            <h3>联系我们</h3>
            <p><span>：</span></p>
            <p>地址：上海市淮海西路55号申通信息广场17楼</p>
            <p>电话：400-6886-238</p>
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
        <div class="fl">
            <a href="<?php echo url('index/contact'); ?>" target="_blank">联系我们</a>
            <em>|</em>
            <a href="<?php echo url('index/index'); ?>" target="_blank">网站地图</a>
            <em>|</em>
            <a href="#" target="_blank">法律声明</a>
        </div>
        <p class="fr">版权 ©  网站备案号：
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
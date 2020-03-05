<?php /*a:3:{s:62:"/www/wwwroot/huyangWeb/application/index/view/index/index.html";i:1572675889;s:64:"/www/wwwroot/huyangWeb/application/index/view/public/header.html";i:1572675889;s:64:"/www/wwwroot/huyangWeb/application/index/view/public/footer.html";i:1572675889;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>创合汇</title>
    <meta name='keywords' content="创合汇" />
    <meta name='description' content="创合汇" />
    <!-- Apple iOS and Android stuff -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/static/chuanghehui/index/images/icon.png" />
    <link rel="apple-touch-icon-precomposed" href="/static/chuanghehui/index/images/icon.png" />
    <link rel="apple-touch-startup-image" media="screen and (orientation: portrait)" href="/static/chuanghehui/index/images/startup.png" />
    <link rel="apple-touch-startup-image" media="screen and (orientation: landscape)" href="/static/chuanghehui/index/images/startupL.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />
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
                window.location.href = "/mobile/";
            }
        }

        fBrowserRedirect();
    </script>
    <link href="/static/chuanghehui/index/css/reset.css" type="text/css" rel="stylesheet" />
    <link href="/static/chuanghehui/index/css/layout.css" type="text/css" rel="stylesheet" />
    <link href="/static/chuanghehui/index/css/common.css" type="text/css" rel="stylesheet" />
    <link href="/static/chuanghehui/index/css/colorbox.css" type="text/css" rel="stylesheet" />
    <link href="/static/chuanghehui/index/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/static/chuanghehui/index/css/qrCode.css" type="text/css" rel="stylesheet">
    <!--[if IE]>
    <script src="/static/chuanghehui/index/js/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script type="text/javascript" src="/static/chuanghehui/index/js/pie.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/static/chuanghehui/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/chuanghehui/index/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/static/chuanghehui/index/js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="/static/chuanghehui/index/js/banner.js"></script>
    <script type="text/javascript" src="/static/chuanghehui/index/js/ckplayer.js"></script>
    <script type="text/javascript">
        $(function() {


            function changeVideo(flv, mp4, ogv, webm, v_c, _img) {
                var _h = 450;
                var _w = 800;
                mp4 = 'https://v.qq.com/x/page/p0889lif6ax.html';
                var flashvars = {
                    f: flv,
                    c: 0,
                    b: 1,
                    e: 1,
                    p: 0,
                    i: _img
                };
                var params = {
                    bgcolor: '#FFF',
                    allowFullScreen: true,
                    allowScriptAccess: 'always',
                    wmode: 'transparent'
                };
                var video = [mp4 + '->video/mp4', ogv + '->video/ogg', webm + '->video/webm'];
                CKobject.embed('/public/index/js/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '' + _w + '', '' + _h + '', true, flashvars, video, params);

            }



            $.fn.banner(".index_kv_body", 5000);

            $(".index_center_body .list li").hover(function() {
                $(this).find("*").stop(false, true);
                $(this).find("img").fadeIn().end().find(".more_btn").show(300).end().find(".mask").addClass("show");

            }, function() {
                $(this).find("*").stop(false, true);
                $(this).find("img").fadeOut().end().find(".more_btn").hide(300).end().find(".mask").removeClass("show");
            });


            $(".news_body .tab_body span").click(function() {
                var index = $(".news_body .tab_body span").index($(this));
                $(".news_body .tab_body span").removeClass("cur").eq(index).addClass("cur");
                $(".news_body .tab_con .con").hide().eq(index).fadeIn();
            }).eq(0).click();

            $(".video_con").click(function() {

                changeVideo('', '', '', '', '', '');

                $.colorbox({
                    "inline": true,
                    "href": ".video_pop"
                });
            });

        });
    </script>
</head>

<body>
<!-- 头部 header biger -->
<header>
<div class="cw">
    <a href="/" class="logo fl"></a>
    <div class="right_body fr">
        <ul class="nav_list fl">
            <li><a href="/" class="cur" target="_blank">首页</a>
            </li>
            <li><a href="<?php echo url('About/index'); ?>" class="" target="_blank">关于创合汇</a>

                <div class="sub_Nav">
                    <div class="line"></div>
                    <p> <a href="/index/about/index/cid/369.html">创合汇概况</a>
                    </p>
                    <p> <a href="<?php echo url('about/speech'); ?>">创始人致辞</a>
                    </p>
                    <p> <a href="<?php echo url('about/culture'); ?>">企业文化</a>
                    </p>
                    <p> <a href="<?php echo url('about/video'); ?>">视频集锦</a>
                    </p>
                    <p> <a href="<?php echo url('about/join'); ?>">加入创合汇</a>
                    </p>
                </div>
            </li>
            <li><a href="#" target="_blank">生态业务</a>

                <div class="sub_Nav">
                    <div class="line"></div>
                    <p> <a href="<?php echo url('chhcollege/index'); ?>" target="_blank">创合汇商学院</a>
                    </p>
                    <p> <a href="<?php echo url('Chhconsulting/index'); ?>" target="_blank">创合汇咨询</a>
                    </p>
                    <p> <a href="http://www.Chhconsulting.org/index/mooc/index.html" target="_blank">创合汇APP</a>
                    </p>
                    <p> <a href="<?php echo url('chhcapital/index'); ?>" target="_blank">创合汇资本</a>
                    </p>
                    <p> <a href="#">创合汇社群</a>
                    </p>
                    <p> <a href="#">创合汇众创空间</a>
                    </p>
                </div>
            </li>
            <li><a href="<?php echo url('activity/index'); ?>" class="" target="_blank">平台活动</a>

                <div class="sub_Nav">
                    <div class="line"></div>
                    <p> <a href="<?php echo url('activity/series'); ?>">创新创业系列活动</a>
                    </p>
                    <p> <a href="<?php echo url('activity/subjects'); ?>">项目路演会</a>
                    </p>
                    <p> <a href="<?php echo url('activity/campus'); ?>">学院活动</a>
                    </p>
                    <p> <a href="<?php echo url('activity/redrabbit'); ?>">赤兔活动</a>
                    </p>
                </div>
            </li>
            <li><a href="/index/news/index.html" class="" target="_blank">新闻动态</a>

                <div class="sub_Nav">
                    <div class="line"></div>
                    <p> <a href="/index/news/index/cid/466.html">创合汇新闻</a>
                    </p>
                    <p> <a href="/index/news/index/cid/467.html">媒体报道</a>
                    </p>
                    <p> <a href="/index/news/index/cid/468.html">行业资讯</a>
                    </p>
                </div>
            </li>
            <li><a href="<?php echo url('Staff/staff'); ?>" class="" target="_blank">战略资源</a>

                <div class="sub_Nav">
                    <div class="line"></div>
                    <p> <a href="/index/staff/index.html">战略合作</a>
                    </p>
                    <p> <a href="/index/staff/teacher.html">专家智库</a>
                    </p>
                </div>
            </li>
            <li><a href="/index/contact/index.html" class="" target="_blank">联系我们</a>
            </li>
        </ul>
        <div class="tools_bar fr">
            <div class="search_bar fl" onkeydown="if (event.keyCode==13) {searchAll();}">
                <input type="text" id="keys" placeholder="Search" />
                <a href="javascript:;" onclick="searchAll()"></a>
            </div>
            <div class="website_change fl"><span>创合汇网群</span><i></i>

                <ul>
                    <li><a href="http://www.chuanghehui.cn/" target="_blank">创合汇总站</a>
                    </li>
                    <li><a href="http://chhcapital.cn/" target="_blank">创合汇资本</a>
                    </li>
                    <li><a href="http://www.Chhconsulting.org/" target="_blank">创合汇商学院</a>
                    </li>
                    <li> <a href="http://www.chhconsulting.cn/" target="_blank">创合汇咨询</a>
                    </li>
                    <li><a href="http://www.Chhconsulting.org/index/mooc/index.html" target="_blank">创合汇APP</a>
                    </li>
                </ul>
            </div> <a href="javascript:;" class="wechat"><span><img src="/static/chuanghehui/index/picture/qr_code_top.jpg" /></span></a>

        </div>
    </div>
</div>
</header>
<!-- 头部 header end -->
<script type="text/javascript">
    function searchAll() {
        var str = $("#keys").val();
        if (str == "")
            alert("请输入要搜索的关键词");
        else
            location.href = "/index/search/index.html?q=" + str;
    }
    $(function() {
        $("ul.nav_list li").hover(function() {
            $("ul.nav_list li .sub_Nav").stop(false, true);
            $(this).find(".sub_Nav").fadeIn();
        }, function() {
            $("ul.nav_list li .sub_Nav").stop(false, true);
            $(this).find(".sub_Nav").fadeOut();
        });
    });
</script>
<!--背景图 开始-->
<div class="index_kv_body">
    <a href="/index/about/index.html" target="_blank" class="kv" style="background-image:url(/static/chuanghehui/index/images/20180423152230.jpg);"></a>
</div>
<!--背景图 end-->

<!--二维码悬浮窗 -->
<div>
    <a href="/index/a.html" class="qr_img" target="_blank" style="background-image: url(/static/chuanghehui/index/images/qr_img.png);"></a>
</div>
<!--二维码悬浮窗 end-->
<!--主体 开始-->
<!--生态业务 开始-->
<div class="index_center_body">
    <div class="in">
        <div class="cw">
            <h3 class="tit"><img src="/static/chuanghehui/index/picture/index_tit_1.jpg" /></h3>

            <ul class="list clearfix">
                <li>
                    <a href="http://www.chhcollege.org/" target="_blank">
                        <div class="mask">
                            <h3>创合汇商学院</h3>

                            <h4>新一代平台型商学院</h4>

                            <p>基于上海交通大学等国内外知名院校优质资源的基础上成立的新一代平台型商学院。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
                <li>
                    <a href="http://www.chhcollege.org/index/mooc/index.html" target="_blank">
                        <div class="mask">
                            <h3>创合汇APP</h3>

                            <h4>商学社群生态平台</h4>

                            <p>打破大学围墙，整合国际知名商学院教育资源和全球产业资源，构建中国线上商学社群生态平台。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <div class="mask">
                            <h3>创合汇咨询</h3>

                            <h4>企业创新发展整体解决方案提供者</h4>

                            <p>助力企业实现创新转型，构建可持续发展的核心竞争优势。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
                <li>
                    <a href="http://chhcapital.cn/" target="_blank">
                        <div class="mask">
                            <h3>创合汇资本</h3>

                            <h4>赋能型股权投融资平台</h4>

                            <p>以“投资+创服”的模式服务于创新创业企业和拟挂牌上市企业的投融资服务平台。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <div class="mask">
                            <h3>创合汇社群</h3>

                            <h4>全球商学院校友联盟</h4>

                            <p>打造跨商学院校友交流分享、合作共赢的平台，推动商学院校友创新创业，弘扬企业家精神与新商业文明。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <div class="mask">
                            <h3>创合汇创业服务中心</h3>

                            <h4>生态型创业服务平台</h4>

                            <p>集培训咨询、创业投资、投行投顾、创业空间、人才对接、产学研对接等服务为一体。</p>
                            <h6><span>MORE</span><i>+</i></h6>

                        </div> <span class="more_btn"></span>

                        <img src="/static/chuanghehui/index/picture/img_1.jpg" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--生态业务 end-->

<div class="page-body"></div>
<div class="page-footer"></div>
<div class="index_btm_body">
    <div class="cw">
        <div class="clearfix">
            <div class="news_body fl">
                <div class="tab_body"> <a href="/index/news/index.html" target="_blank" class="fr"><em>MORE +</a>
                    <span>最新活动</span>
                    <span>新闻动态</span>

                </div>
                <div class="tab_con">
                    <div class="con">
                        <div class="focus_news">
                            <a href="/index/activity/detail/id/58/cid/466.html" target="_blank">
                                <img src="" class="fl" width="195" />
                            </a>
                            <div class="fl">
                                <h3>“从自我激活到组织共创——企业家精神与事业合伙人制度”主题论坛成功举办</h3>

                                <p>2019年7月26日，由宁波市商务局主办，创合汇宁波分院协办的“从自我激活到组织共创——企业家精神与事业合伙人制度”主题论坛在宁波成功举办，本次论坛邀请到了国内...</p>
                                <h6><a href="/index/activity/index.html" target="_blank">MORE +</a></h6>

                            </div>
                        </div>
                        <ul>
                            <li><span>2019-05-06</span><a href="/index/activity/detail/id/54/cid/466.html">“最强阵容”聚首论道：企业家经济学首届年会暨《企业家》出版30周年纪念活动成功举办  </a>
                            </li>
                            <li><span>2019-04-27</span><a href="/index/activity/detail/id/55/cid/466.html">科创赋能，领航未来：「创合汇」科创板与中国新兴产业创新发展论坛  </a>
                            </li>
                            <li><span>2019-03-29</span><a href="/index/activity/detail/id/56/cid/466.html">「创合汇」中国哲学与历史智慧论坛暨人文与领导力俱乐部启动仪式成功举办！  </a>
                            </li>
                        </ul>
                    </div>
                    <div class="con">
                        <div class="focus_news">
                            <a href="/index/news/detail/id/1066/cid/466.html" target="_blank">
                                <img src="/static/chuanghehui/index/picture/20190904141130.jpg" class="fl" width="195" />
                            </a>
                            <div class="fl">
                                <h3>两天一夜，带你造访“中国硅谷”！| 创合汇创业服务中心“标杆企业参访”系列活动 </h3>

                                <p>8月22日-23日，创合汇创业服务中心重磅打造“标杆企业参访”系列活动第一站，20余位校友、会员走进深圳南山区，造访了中国干细胞技术领域第一家获得国家高新技术认...</p>
                                <h6><a href="/index/news/index.html" target="_blank">MORE +</a></h6>

                            </div>
                        </div>
                        <ul>
                            <li><span>2019-09-04</span><a href="/index/news/detail/id/1064/cid/466.html">转型激活，共享共生 | 创合汇论坛直击 </a>
                            </li>
                            <li><span>2019-08-12</span><a href="/index/news/detail/id/1063/cid/466.html">创合汇“商学院好项目”第十二期科创专场路演会成功举办 </a>
                            </li>
                            <li><span>2019-07-07</span><a href="/index/news/detail/id/1062/cid/466.html">一步到位！你与金牌董秘之间就差这份进阶秘籍 </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="video_body fr">
                <h3 class="tit"><a href="/index/about/video.html" target="_blank" class="fr">MORE +</a><span>视频中心</span></h3>

                <div class="video_con">
                    <img src="/static/chuanghehui/index/picture/20180328132823.jpg" />
                    <div class="mask"><i></i><span>创合汇宣传片</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--尾部 开始-->
<footer>
<div class="cw">
    <div class="top_body clearfix">
        <ul class="fl clearfix">
            <li>
                <h3><a href="<?php echo url('about/index'); ?>" target="_blank">关于创合汇</a></h3>

                <p><a href="<?php echo url('about/survey'); ?>" target="_blank">创合汇概况</a>
                </p>
                <p><a href="<?php echo url('about/speech'); ?>" target="_blank">创始人致辞</a>
                </p>
                <p><a href="<?php echo url('about/culture'); ?>" target="_blank">企业文化</a>
                </p>
                <p><a href="<?php echo url('about/video'); ?>" target="_blank">视频集锦</a>
                </p>
                <p><a href="<?php echo url('about/join'); ?>" target="_blank">加入创合汇</a>
                </p>
            </li>
            <li>
                <h3><a href="#" target="_blank">生态业务</a></h3>

                <p><a href="http://www.chhcollege.org/" target="_blank">创合汇商学院</a>
                </p>
                <p><a href="http://www.chhconsulting.cn/" target="_blank">创合汇咨询</a>
                </p>
                <p><a href="http://www.chhcollege.org/index/mooc/index.html" target="_blank">创合汇APP</a>
                </p>
                <p><a href="http://chhcapital.cn/" target="_blank">创合汇资本</a>
                </p>
                <p><a href="#" target="_blank">创合汇社群</a>
                </p>
                <p><a href="#" target="_blank">赤兔创业咖啡</a>
                </p>
            </li>
            <li>
                <h3><a href="<?php echo url('activity/index'); ?>" target="_blank">平台活动</a></h3>

                <p><a href="<?php echo url('activity/series'); ?>" target="_blank">创新创业系列活动</a>
                </p>
                <p><a href="<?php echo url('activity/subjects'); ?>" target="_blank">项目路演会</a>
                </p>
                <p><a href="<?php echo url('activity/campus'); ?>" target="_blank">学院活动</a>
                </p>
                <p><a href="<?php echo url('activity/redrabbit'); ?>" target="_blank">赤兔活动</a>
                </p>
            </li>
            <li>
                <h3><a href="/index/news/index.html" target="_blank">新闻动态</a></h3>

                <p><a href="/index/news/index/cid/466.html" target="_blank">创合汇新闻</a>
                </p>
                <p><a href="/index/news/index/cid/467.html" target="_blank">行业资讯</a>
                </p>
                <p><a href="/index/news/index/cid/468.html" target="_blank">媒体报道</a>
                </p>
            </li>
            <li>
                <h3><a href="/index/staff/index.html" target="_blank">战略资源</a></h3>

                <p><a href="/index/staff/index.html" target="_blank">战略合作</a>
                </p>
                <p><a href="/index/staff/teacher.html" target="_blank">专家智库</a>
                </p>
            </li>
        </ul>
        <div class="contactus_body fr">
            <h3>联系我们</h3>

            <p>创合汇集团总部：</p>
            <p>地址：上海市淮海西路55号申通信息广场17楼</p>
            <p>电话：021-52307916</p>
            <p>传真：021-52308253</p>
            <h6><img src="/static/chuanghehui/index/picture/qr_code.jpg" /></h6>

        </div>
    </div>
    <div class="copyright_bar">
        <div class="fl"> <a href="../contact/index.html" target="_blank">联系我们</a>
            <em>|</em>
            <a href="#" target="_blank">网站地图</a>
            <em>|</em>
            <a href="#" target="_blank">法律声明</a>

        </div>
        <p class="fr">版权 © 创合汇 网站备案号：沪ICP备18026080号-1
            <a id="host" class="blank" target="_blank" href="">
                <img src="/static/chuanghehui/index/picture/dian.png" alt="">
            </a>
        </p>
    </div>
    <script>
        var link = ['http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020190125155927000003646420-SAIC_SHOW_310000-20190703165346678141&signData=MEQCID6D+Kk3JMEPpl4NGATnOj/swxm0DQwyTm24OUb/YXprAiBXJavHx8ZRYmFD/yTrJhxdEKznRL2S3/w6ZfcJkJvVjQ==', 'http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020170727204631000001958645-SAIC_SHOW_310000-20190703185346598361&signData=MEUCIBEfysZzHK/mLAoFg8iVvAlBmY9+Ri1EJ5umj31Z/60tAiEA135hLFHJo4UGVsQvwVB7BLke/iToLN8rgCWVBjzEQoY=']
        var host = window.location.host;
        var dom = document.getElementById('host')
        if (host.indexOf('chuanghehui.com') >= 0) {
            dom.href = link[0]
        } else {
            dom.href = link[1]
        }
    </script>
</div>
</footer>
<!--尾部 end-->
</body>

</html>
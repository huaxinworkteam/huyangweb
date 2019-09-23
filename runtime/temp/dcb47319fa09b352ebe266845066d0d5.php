<?php /*a:3:{s:84:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\chhcollege\activity\index.html";i:1569228057;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_header.html";i:1569216667;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_footer.html";i:1569215764;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title>近期活动</title>
<meta name='keywords' content="创合汇商学院——全球开放式平台型商学院" />
<meta name='description' content="创合汇商学院——全球开放式平台型商学院" />

<script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?7996666e6d269b8161c664dc73b41699";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
</script>

<script src="/static/chhcollege/js/entrance.js" data-args="groupId=f120961075064bbebb64783685097ee4"  class="zhiCustomBtn" id="zhichiScript"></script>
 <!-- Apple iOS and Android stuff -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="/static/chhcollege/images/icon.png"/>
<link rel="apple-touch-icon-precomposed" href="/static/chhcollege/images/icon.png" />
<link rel="apple-touch-startup-image" media="screen and (orientation: portrait)" href="/static/chhcollege/images/startup.png" />
<link rel="apple-touch-startup-image" media="screen and (orientation: landscape)" href="/static/chhcollege/images/startupL.png" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />
<script type="text/javascript">
function fBrowserRedirect()
{    
    var sUserAgent = navigator.userAgent.toLowerCase();    
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";      
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";    
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";    
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";    
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";    
    var bIsAndroid = sUserAgent.match(/android/i) == "android";    
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";    
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";    
   
    if(bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM){    
            window.location.href = "http://www.chhcollege.org/mobile/";   
    }     
}   

fBrowserRedirect();  
</script> 
    <link href="/static/chhcollege/css/flexslider.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/reset.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/layout.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/common.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/page.css" type="text/css" rel="stylesheet" />
    <!--[if IE]><script src="/static/chhcollege/js/html5.js"></script><![endif]-->
    <!--[if lt IE 10]><script type="text/javascript" src="/static/chhcollege/js/pie.js"></script><![endif]-->
    <script type="text/javascript" src="/static/chhcollege/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery-powerswitch.js"></script>
    <script type="text/javascript">
        $(function() {
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

            $(".index_btm_body .tab_body a").click(function() {
                var index = $(".index_btm_body .tab_body a").index($(this));
                $(".index_btm_body .tab_body a").removeClass("cur").eq(index).addClass("cur");
                $(".index_btm_body .tab_con .con").hide().eq(index).fadeIn();
            }).eq(0).click();

            $(".ullist li:odd").addClass("last");

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
    <div class="pageBanner">
        <div class="roll flexslider">
            <ul class="slides">
                <li><img src="/static/chhcollege/picture/20190923163925.jpg"></li>            </ul>
        </div>
        <div class="txt">
            <div class="cw">
                <h3></h3>
            </div>
        </div>
        <div class="line"></div>
        <div class="btn">
            <div class="cw"> <a href="/index/contact/message.html" class="act" target="_blank">在线报名</a> </div>
        </div>
    </div>
    <div class="page">
        <div class="cw">
            <div class="pageBody clearfix">
                <!--left start-->
                <div class="leftBy fl">
                    <div class="tit">
                        <h3>平台活动</h3>
                        <h4>Recent Activities</h4>
                    </div>
                    <div class="list03">
                        <div class="content"> <div class="lay02">
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
                            <!-- <div class="lay03">
              <h3>官方微信</h3>
              <ul>
                <li> <img src="/static/chhcollege/picture/wx_1.jpg">
                  <h4 class="pt10">创合汇商学院<br>教育平台</h4>
                </li>
                <li> <img src="/static/chhcollege/picture/wx_2.jpg">
                  <h4 class="pt10">创合汇</h4>
                </li>
              </ul>
            </div>  -->
                        </div>
                        <div class="bottom"></div>
                    </div>
                </div>
                <!--left End-->
                <!--right start-->
                <div class="rightBy fr">
                    <div class="tool clearfix">
                        <div class="fl">
                            <h3> 平台<span>活动</span> </h3>
                        </div>
                        <div class="fr"> <a href="/" target="_blank">首页</a><span class="cur">></span><a href="javascript:;" class="cur">平台活动</a> </div>
                    </div>
                    <div class="activity">
                        <ul class="ullist">
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1047.html" class="pic"><img src="/static/chhcollege/picture/20190812092743.jpg"></a>
                                    <h3>人文与传承论坛首届年会暨「创合汇」人文传承大使颁奖典礼成功举办</h3>
                                    <p>2019年7月17日，创合汇和九鲲文化联合主办的“人文与传承论坛首届年会暨「创合汇」人文传承大使颁奖典礼"隆重举行。本次论坛邀请到了深耕于国际家族传承...</p>
                                    <i>2019-08-12</i>
                                </div>
                            </li>
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1044.html" class="pic"><img src="/static/chhcollege/picture/20190705160657.jpg"></a>
                                    <h3>扬帆起航，成就卓越 | 创合汇 「独角兽」创业成长计划三期开学典礼成功举办！</h3>
                                    <p>2019年3月23日，创合汇「独角兽」创业成长计划三期的学员们开启了他们学习、成长、蜕变的新征程。此次学习之旅让创业者携手同行，在创业征途中成为时代的...</p>
                                    <i>2019-07-03</i>
                                </div>
                            </li>
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1041.html" class="pic"><img src="/static/chhcollege/picture/1544169007872500.jpg"></a>
                                    <h3>硅谷重量级创业教父、天使投资人，亲授 X 创业心法</h3>
                                    <p>2018年12月8日，由创合汇主办的“独角兽.创业成长营”开放讲堂，特邀美国硅谷重量级创业教父、天使投资人，史蒂夫.霍夫曼，上海交大专家教授、知名投资...</p>
                                    <i>2018-12-07</i>
                                </div>
                            </li>
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1040.html" class="pic"><img src="/static/chhcollege/picture/20180814104923.jpg"></a>
                                    <h3>大咖开讲：人文与科技的碰撞，融汇共生，相映生辉！</h3>
                                    <p>8月12日，由创合汇主办的“人文与科技论坛”特邀复旦大学哲学学院副教授、宗教学系副主任郁喆隽，WBF纽约世界区块链大会、Blockmedia（硅谷）创...</p>
                                    <i>2018-08-12</i>
                                </div>
                            </li>
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1039.html" class="pic"><img src="/static/chhcollege/picture/20180524163832.jpg"></a>
                                    <h3>他是语言处理专家、硅谷风投大师、畅销书作家...今天，来听他谈AI，论“见识”</h3>
                                    <p>5月18日，由创合汇、上海交通大学苏州人工智能研究院主办，上海交通大学国家大学科技园协办的AI+与商业变革论坛暨《见识》新书分享会在上海交通大学成功举...</p>
                                    <i>2018-05-18</i>
                                </div>
                            </li>
                                                        <li>
                                <div class="item">
                                    <a href="/index/activity/detail/id/1038.html" class="pic"><img src="/static/chhcollege/picture/20180423133853.jpg"></a>
                                    <h3>大师开讲！周国平老师亲临「创合汇」哲学与东方领导力学习坊开放讲堂</h3>
                                    <p>4月21日，周国平老师亲临「创合汇」哲学与东方领导力学习坊开营典礼暨开放讲堂，与现场200余名学员及听众畅谈《哲学与人生》，以生动的故事、生活的案例、...</p>
                                    <i>2018-04-21</i>
                                </div>
                            </li>
                                                        <!--<li>
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li class="last">
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li>
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li class="last">
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li>
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li class="last">
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li>
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>
					<li class="last">
						<div class="item">
						
						<a href="#" class="pic" target="_blank"><img src="/static/chhcollege/picture/img_1.jpg"></a>
						
						 <h3>管理模式 ——《战略管理及创新思维》			   </h3>
					   <p>牛津大学塞德商学院教授Prof.Teppo Felin从组织是否能“双管齐下”、组织创新（内部）及开放创新（外部）等方面...</p>
					   <i>2017.10.26</i>
						
						</div>
					</li>-->
                        </ul>
                        <div class="Pagers"> <ul class="pagination"><li class="disabled"><span>上一页</span></li> <li class="active"><span>1</span></li><li><a href="/index/activity/index.html?page=2">2</a></li><li><a href="/index/activity/index.html?page=3">3</a></li><li><a href="/index/activity/index.html?page=4">4</a></li> <li><a href="/index/activity/index.html?page=2">下一页</a></li></ul> </div>
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
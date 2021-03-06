﻿<!DOCTYPE HTML>
<html>
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>胡杨大学学院——全球开放式平台型商学院</title>
<meta name='keywords' content="——全球开放式平台型商学院" />
<meta name='description' content="——全球开放式平台型商学院" />

<script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?7996666e6d269b8161c664dc73b41699";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
</script>

<script src="https://www.sobot.com/chat/frame/js/entrance.js?sysNum=126a3b647d5247f38d75f041556992c8&channelFlag=4" data-args="groupId=f120961075064bbebb64783685097ee4"  class="zhiCustomBtn" id="zhichiScript"></script>
<!-- Apple iOS and Android stuff -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="/images/icon.png"/>
<link rel="apple-touch-icon-precomposed" href="/images/icon.png" />
<link rel="apple-touch-startup-image" media="screen and (orientation: portrait)" href="/images/startup.png" />
<link rel="apple-touch-startup-image" media="screen and (orientation: landscape)" href="/images/startupL.png" />
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
<link href="/public/index/css/flexslider.css" type="text/css" rel="stylesheet" />
<link href="/public/index/css/reset.css" type="text/css" rel="stylesheet" />
<link href="/public/index/css/layout.css" type="text/css" rel="stylesheet" />
<link href="/public/index/css/common.css" type="text/css" rel="stylesheet" />
<link href="/public/index/css/page.css" type="text/css" rel="stylesheet" />
<!--[if IE]><script src="js/html5.js"></script><![endif]-->
<!--[if lt IE 10]><script type="text/javascript" src="js/PIE.js"></script><![endif]-->
<script type="text/javascript" src="/public/index/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/index/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/public/index/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/public/index/js/jquery-powerSwitch.js"></script>
<script type="text/javascript">
$(function(){
	
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
	$(".index_btm_body .tab_body a").click(function(){
		var index = $(".index_btm_body .tab_body a").index($(this));
		$(".index_btm_body .tab_body a").removeClass("cur").eq(index).addClass("cur");
		
		$(".index_btm_body .tab_con .con").hide().eq(index).fadeIn();
	}).eq(0).click();
	
	$(".list2 li a").each(function(){
			if($(this).hasClass('cur'))
			{
				$(this).next('dl').show();
			}
  	});
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
                <div class="website_change"><span>胡杨大学网群</span><i></i>
                    <ul>
                        <li><a href="http://www.chuanghehui.cn/" target="_blank">胡杨大学总站</a></li>
                        <li><a href="http://chhcapital.cn/" target="_blank">胡杨大学资本</a></li>

                        <li><a href="http://www.chhcollege.org/" target="_blank"></a></li>
                        <li><a href="http://www.chhconsulting.cn/" target="_blank">胡杨大学咨询</a></li>
                        <li><a href="http://www.chhcollege.org/index/mooc/index.html" target="_blank">胡杨大学APP</a></li>
                    </ul>
                </div>
                <!-- <a href="javascript:;" class="wechat"><span><img src="/public/index/images/common/qr_code_top.jpg" /></span></a> </div> -->
                <ul class="nav_list">
                    <li><a href="/" class="">首页</a></li>
                    <li><a href="/index/about/index.html" class="">学院介绍</a></li>
                    <li><a href="/index/course/index.html" class="cur">培训课程</a>
                        <div class="sub_Nav">
                            <div class="line"></div>
                                                        <p><a href="/index/course/index/cid/402.html" target="_blank">工商管理类</a></p>
                                                        <p><a href="/index/course/index/cid/404.html" target="_blank">创新创业类</a></p>
                                                        <p><a href="/index/course/index/cid/385.html" target="_blank">金融实务类</a></p>
                                                        <p><a href="/index/course/index/cid/375.html" target="_blank">人文与领导力类</a></p>
                                                        <p><a href="/index/course/index/cid/380.html" target="_blank">国际访学类</a></p>
                                                    </div>
                    </li>
                    <li><a href="/index/staff/index.html" class="">师资力量</a>
                        <div class="sub_Nav">
                            <div class="line"></div>
                            <p><a href="/index/staff/index/cateid/1.html" target="_blank"> 中教师资 </a></p>
                            <p><a href="/index/staff/index/cateid/2.html" target="_blank"> 外教师资 </a></p>
                            <p><a href="/index/staff/index/cateid/3.html" target="_blank"> 论坛讲座师资 </a></p>
                        </div>
                    </li>
                    <li><a href="/index/news/index.html" class="">新闻动态</a></li>
                    <li><a href="/index/activity/index.html" class="">平台活动</a></li>
                    <li><a href="/index/contact/index.html" class="">联系我们</a></li>
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
    <li><img src="/public/upload/20180523/20180523104050.jpg"></li>    </ul>
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
          <h3>培训课程</h3>
          <h4>Main course</h4>
        </div>
        		<ul class="list2">
                            <li> <a href="/index/course/index/cid/402.html" class="title " >工商管理类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/402.html" class="">> 荷兰商学院MBA/DBA学位课程</a></dd>
                                                 <dd><a href="/index/course/index/cid/403.html" class="">> 上海交通大学高级研修课程</a></dd>
                      	
                  </dl>
                </li>
                            <li> <a href="/index/course/index/cid/404.html" class="title " >创新创业类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/404.html" class="">> 「独角兽」创业成长计划 | 独步天下，角逐未来</a></dd>
                                                 <dd><a href="/index/course/index/cid/405.html" class="">> 全球CEO创新领导力发展计划</a></dd>
                      	
                  </dl>
                </li>
                            <li> <a href="/index/course/index/cid/385.html" class="title " >金融实务类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/385.html" class="">> 股权激励实战特训营</a></dd>
                                                 <dd><a href="/index/course/index/cid/384.html" class="">> 董事会秘书研修班</a></dd>
                      	
                  </dl>
                </li>
                            <li> <a href="/index/course/index/cid/375.html" class="title " >人文与领导力类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/375.html" class="">> 哲学与东方领导力学习坊</a></dd>
                      	
                  </dl>
                </li>
                            <li> <a href="/index/course/index/cid/380.html" class="title " >国际访学类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/380.html" class="">> 2019「胡杨大学」德国访学 | 隐形冠军与工匠精神</a></dd>
                                                 <dd><a href="/index/course/index/cid/379.html" class="">> 美国访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/381.html" class="">> 英国访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/383.html" class="">> 日本访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/382.html" class="">> 以色列访学</a></dd>
                      	
                  </dl>
                </li>
                    </ul>
       
               
      </div>
      <!--left End-->
      <!--right start-->
      <div class="rightBy fr">
        <div class="tool clearfix">
          <div class="fl">
            <h3>  </h3>
          </div>
          <div class="fr"> <a href="/" target="_blank">首页</a><span>></span><a href="/index/course/index/id/369.html">培训课程</a><span class="cur">></span><a href="javascript:;" class="cur"></a> </div>
        </div>
        <div class="course">
			<div class="contBody">
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
                    <h3>学院介绍</h3>
                    <p><a href="/index/about/index.html" target="_blank">使命与愿景</a></p>
                    <p><a href="#" target="_blank">核心价值观</a></p>
                    <p><a href="#" target="_blank">学院特色</a></p>
                    <p><a href="#" target="_blank">学习模式</a></p>
                </li>
                <li>
                    <h3>培训课程</h3>
                                        <p><a href="/index/course/index/cid/402.html" target="_blank">工商管理类</a></p>
                                        <p><a href="/index/course/index/cid/404.html" target="_blank">创新创业类</a></p>
                                        <p><a href="/index/course/index/cid/385.html" target="_blank">金融实务类</a></p>
                                        <p><a href="/index/course/index/cid/375.html" target="_blank">人文与领导力类</a></p>
                                        <p><a href="/index/course/index/cid/380.html" target="_blank">国际访学类</a></p>
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
                <p><span>：</span></p>
                <p>地址：上海市淮海西路55号申通信息广场17楼</p>
                <p>电话：400-6886-238</p>
                <p>传真：021-52308253</p>
                <!-- <h6><img src="/public/index/images/common/qr_code.jpg" /></h6> -->
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
            <p class="fr">版权 ©  网站备案号：
                <a style='color: #e6e6e6;' href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备18026080号-1</a>
                <a class="blank" id="host" target="_blank" href=""><img src="/public/index/images/common/dian.png" alt=""></a>
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

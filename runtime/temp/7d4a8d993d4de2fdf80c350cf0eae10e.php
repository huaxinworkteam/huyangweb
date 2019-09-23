<?php /*a:3:{s:85:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\chhcollege\contact\contact.html";i:1569227788;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_header.html";i:1569216667;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_footer.html";i:1569215764;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>联系我们</title>
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
      <li><img src="/static/chhcollege/picture/contactus.jpg"></li>    </ul>
  </div>
  <div class="txt">
    <div class="cw">
       <h3>移动互联网时代开放式商学院</h3>
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
          <h3>联系我们</h3>
          <h4>contact us</h4>
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
                <li> <img src="/static/chhcollege/picture/wx_1.jpg">
                  <h4 class="pt10">创合汇商学院<br>教育平台</h4>
                </li>
                <li> <img src="/static/chhcollege/picture/wx_2.jpg">
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
            <h3> 联系<span>我们</span> </h3>
          </div>
          <div class="fr"> <a href="/" target="_blank">首页</a><span class="cur">></span><a href="javascript:;" class="cur">联系我们</a> </div>
        </div>
        <div class="contact">
            <div class="warp">
          <ul>
            <li>
              <div class="item">
                <div class="fl"> <img src="/static/chhcollege/picture/address.png"> </div>
                <div class="fr">
                  <h3>地址</h3>
                  <p>上海市淮海西路55号申通信息广场17楼I-K座</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item">
                <div class="fl"> <img src="/static/chhcollege/picture/tel.png"> </div>
                <div class="fr">
                  <h3>电话</h3>
                  <p>400-6886-238</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item">
                <div class="fl"> <img src="/static/chhcollege/picture/fax.png"> </div>
                <div class="fr">
                  <h3>传真</h3>
                  <p>021-52308253</p>
                </div>
              </div>
            </li>
          </ul>
            </div>
		   <img src="/static/chhcollege/picture/map.jpg" style="display: block;float: left">
            <div class="tw">
            <form action="" method="get">
                <ul>
                    <li class="item1"><input class="context" id="name1" name="name" type="text" placeholder="您的姓名" value=""></li>
                    <li class="item2"><input class="context" id="phone1" name="phone" type="text" placeholder="您的电话" value=""></li>
                    <li class="item3"><input class="context" id="qq" name="email" onkeyup="value=value.replace(/[^\d]/i,'')" type="text" placeholder="您的QQ" value=""></li>
                    <li class="item4"><textarea class="conteat" id="content1" name="content" placeholder="您的留言内容"></textarea></li>
                    <li class="item5">
                        <input class="consub" type="submit" value="立即提交">
                    </li>

                </ul>
            </form>
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

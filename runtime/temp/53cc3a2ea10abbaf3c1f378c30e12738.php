<?php /*a:2:{s:77:"D:\phpStudy\WWW\huyangWeb\application\index\view\chhcollege\course\index.html";i:1574218470;s:72:"D:\phpStudy\WWW\huyangWeb\application\index\view\public\coll_header.html";i:1574218197;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>核心课程-工商管理类-荷兰商学院MBA/DBA学位课程</title>
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
                        <p><a href="" target="_blank">组织架构</a></p>
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
    <!--<li><img src="/static/chhcollege/picture/20190923144043.jpg"></li>-->
        <li><img src="/static/chhcollege/images/course.jpg"></li>
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
          <h3>核心课程</h3>
          <h4>Main course</h4>
        </div>
        		<ul class="list2">
                            <li> <a href="/index/course/index/cid/402.html" class="title cur" >工商管理类</a>
                  <dl>
                                                 <dd><a href="/index/course/index/cid/402.html" class="cur">> 荷兰商学院MBA/DBA学位课程</a></dd>
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
                                                 <dd><a href="/index/course/index/cid/380.html" class="">> 2019「创合汇」德国访学 | 隐形冠军与工匠精神</a></dd>
                                                 <dd><a href="/index/course/index/cid/379.html" class="">> 美国访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/381.html" class="">> 英国访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/383.html" class="">> 日本访学</a></dd>
                                                 <dd><a href="/index/course/index/cid/382.html" class="">> 以色列访学</a></dd>
                      	
                  </dl>
                </li>
                    </ul>
       
        
        <div class="list03">
          <div class="content">
            <div class="course01">
              <h3><span>报名咨询</span></h3>
              <ul>
                <li>
                  <div class="txt"> 在职MBA<br>
                    <span>021-62826006</span> </div>
				</li>
                <li>
                  <div class="txt"> 在职DBA<br>
                    <span>021-62826818</span> </div>
                </li>
              </ul>
			  <a href="/index/contact/message.html">在线报名</a>
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
            <h3> 荷兰商学院MBA/DBA学位课程 </h3>
          </div>
          <div class="fr"> <a href="/" target="_blank">首页</a><span>></span><a href="/index/course/index/id/369.html">核心课程</a><span class="cur">></span><a href="javascript:;" class="cur">荷兰商学院MBA/DBA学位课程</a> </div>
        </div>
        <div class="course">
			<div class="contBody">
				<p style="text-align: left;"><span style="font-size: 14px;"></span><span style="font-size: 14px;"></span></p><article class="yead_editor" id="m746" style="margin: 5px auto; font-size: 14px;" data-author="Wxeditor"><section style="margin: 1em auto; text-align: center;"><section class="yead_bdc" style="border-color: rgb(153, 20, 31); padding: 0px 16px; line-height: 25px; border-bottom-width: 1px; border-bottom-style: solid; display: inline-block;"><p><span style="font-size: 16px; font-weight: bold; color: rgb(255, 0, 0);">MBA</span><span style="color: rgb(51, 51, 51); font-size: 16px; font-weight: bold;">第33期2019年9月7日、<span style="font-size: 16px; font-weight: bold; color: rgb(255, 0, 0);">DBA</span>第20期2019年12月14日上海交大开学，</span></p><p><span style="color: rgb(51, 51, 51); font-size: 16px; font-weight: bold;">报名电话：<span style="color: rgb(255, 0, 0); font-size: 16px; font-weight: bold;">021-52307916 / 6282 6006</span></span></p></section><section><span class="yead_bdtc" style="margin: -1px auto 10px; width: 0px; height: 0px; border-top-color: rgb(153, 20, 31); border-right-color: transparent; border-left-color: transparent; border-top-width: 8px; border-right-width: 10px; border-left-width: 10px; border-top-style: solid; border-right-style: solid; border-left-style: solid; display: block;"><br/></span></section></section></article><p style="text-align: left;"><span style="font-size: 14px;"><br/></span></p><p style="text-align: left;"><span style="font-size: 14px;">荷兰商学院Business School Netherlands，简称BSN，是将英国教育与管理大师雷格·瑞文斯（Reg Revans）开创的“行动学习法”应用到管理教育的先驱之一。</span></p><p><span style="font-size: 14px;"><br/></span></p><section data-author="Wxeditor"><article id="m47" class="yead_editor" data-author="Wxeditor" style="font-size:14px;margin:5px auto;"><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); white-space: pre-wrap; min-height: 1.5em; max-width: 100%; font-stretch: normal; word-wrap: break-word !important;"><span style="font-size: 16px;"><strong><span class="yead_bgc" style="padding: 4px 10px; font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; margin-right: 8px; max-width: 100%; word-wrap: break-word !important; background-color: rgb(239, 130, 0);">认证与荣誉</span></strong></span></p></article><p><span style="font-size: 16px;"><strong>国际资质认证</strong></span><br/></p></section><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">全球少数同时拥有三项重要国际认证：</span><br/></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">美国商学院认证委员会：ACBSP 全球知名商学院认证；</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">瑞士知名质量认证机构：EduQua认证；</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">荷兰-佛兰德斯认证机构颁：NVAO认证。</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">具备荷兰教育、文化和科学部承认，并在其“高等教育注册中心”（CROHO）注册的一所应用型大学。</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">获得荷兰鉴定委员会认证（DVC），并且还获得了“CEDEO批准证章”。&nbsp;</span></p></section><p style="text-align: center;"><span style="font-size: 14px;"><img src="/static/chhcollege/picture/1562058197901246.png" title="1562058197901246.png" alt="1562058197901246.png" style="width: 804px; height: 480px;" width="804" vspace="0" height="480" border="0"/></span></p><p><strong>中国资质认证</strong><br/></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">中国教育部涉外监管网认证http://www.jsj.edu.cn；</span><br/></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">中国教育部留学中心与荷兰高等教育国际合作组织（NUFFIC）合办的NESO中国网站认证http://www.nesochina.org（该合作办公室是荷兰教育界在中国的官方代表，请见荷兰驻华大使馆网站声明）。&nbsp;</span></p></section><p><span style="font-size: 14px;"><br/></span></p><p style="text-align: center;"><span style="font-size: 14px;"><img src="/static/chhcollege/picture/1514427089657111.jpg" title="1514427089657111.jpg" alt="1514427089657111.jpg" style="width: 800px; height: 99px;" width="800" vspace="0" height="99" border="0"/></span></p><p><strong><br/></strong></p><p><strong>荣誉</strong></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">欧洲知名的管理杂志《Intermediair》评选为综合排名第八，并在教学内容上连续六年蝉联第一名的桂冠；</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">在2012年荷兰权威刊物《管理团队》（MT）对全国商学院的综合评比中，获得总分第一名；</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">BSN国际行动学习学位项目成为荷兰仅有的9个入选国家奖学金课程的项目之一；</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<span style="font-size: 14px;">2016年2月，英国《CEO》杂志评选BSN为欧洲第一等级商学院之一。</span></p></section><p><br/></p><section data-author="Wxeditor"><article id="m47" class="yead_editor" data-author="Wxeditor" style="font-size:14px;margin:5px auto;"><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); white-space: pre-wrap; min-height: 1.5em; max-width: 100%; font-stretch: normal; word-wrap: break-word !important;"><span style="font-size: 16px;"><strong><span class="yead_bgc" style="padding: 4px 10px; font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; margin-right: 8px; max-width: 100%; word-wrap: break-word !important; background-color: rgb(239, 130, 0);">行动学习在BSN</span></strong></span></p></article></section><p style="text-align: center;"><br/></p><p style="text-align: center;"><img src="/static/chhcollege/picture/1514427107238006.jpg" title="1514427107238006.jpg" alt="1514427107238006.jpg" style="width: 800px; height: 356px;" width="800" vspace="0" height="356" border="0"/></p><p><br/></p><section data-author="Wxeditor"><article id="m47" class="yead_editor" data-author="Wxeditor" style="font-size:14px;margin:5px auto;"><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); white-space: pre-wrap; min-height: 1.5em; max-width: 100%; font-stretch: normal; word-wrap: break-word !important;"><span style="font-size: 16px;"><strong><span class="yead_bgc" style="padding: 4px 10px; font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; margin-right: 8px; max-width: 100%; word-wrap: break-word !important; background-color: rgb(239, 130, 0);">荷兰商学院在职MBA学位项目</span></strong></span></p></article><p><span style="font-size: 14px;">BSN荷兰商学院的MBA教育（中国）课程专门针对高层管理实践者及资深管理研究咨询者而开设。旨在结合中国的管理实践，系统深入地传授国际先进的管理理论和经验。在中国加入WTO以及经济全球一体化的形势之下，为中国培养能够融贯中西，深谙全球经济，掌握关键经济技能，具备博大精深的文化和清晰的战略视角的商界精英，帮助企业领导更新现代管理知识，提高应用管理研究能力。</span><br/></p></section><p><br/></p><p><span style="font-size: 14px;">自2008年首期课程开班以来，BSN荷兰商学院上海中心MBA课程至今已成功开办至28期。</span></p><p><br/></p><p><strong>项目特色</strong></p><p><span style="font-size: 14px;">1、免联考，以资质审核为主；</span><br/></p><p><span style="font-size: 14px;">2、采用国际“行动学习法”，关注个人与企业绩效的双重提升；</span></p><p><span style="font-size: 14px;">3、优质课程，正规学位；</span></p><p><span style="font-size: 14px;">4、整合全球优质教育资源，共享国际高端人脉资源平台；</span></p><p><span style="font-size: 14px;">5、中文教学为主，外教课程配备翻译；</span></p><p><span style="font-size: 14px;">6、国际视野，本土实践</span></p><p><span style="font-size: 14px;"><br/></span></p><p><span style="font-size: 14px;">更多MBA学位课程信息登录：<a href="http://www.bsn-shanghai.org/index/course/index/cid/375.html" _src="http://www.bsn-shanghai.org/index/course/index/cid/375.html">http://www.bsn-shanghai.org/index/course/index/cid/375.html</a></span></p><p><span style="font-size: 14px;"><br/></span></p><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><article id="m47" class="yead_editor" data-author="Wxeditor" style="font-size:14px;margin:5px auto;"><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); white-space: pre-wrap; min-height: 1.5em; max-width: 100%; font-stretch: normal; word-wrap: break-word !important;"><span style="font-size: 16px;"><strong><span class="yead_bgc" style="padding: 4px 10px; font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; margin-right: 8px; max-width: 100%; word-wrap: break-word !important; background-color: rgb(239, 130, 0);">荷兰商学院在职DBA学位项目</span></strong></span></p></article><p><span style="font-size: 14px;">BSN工商管理博士学位（Doctor of Business Administration, DBA）在国际上享有极高的知名度和美誉度。旨在为工商界高层管理人士、经济界精英进一步提升管理、经济、金融等理论水平，提高在实际工作中解决决策性的重大疑难问题的能力。是更系统地综合运用理论知识，解决公司战略层面的核心问题而应运而生的高端学位项目。</span><br/></p></section><p><br/></p><p><span style="font-size: 14px;">自2010年首期课程开班以来，BSN荷兰商学院上海中心DBA课程至今已成功开办至第16期。</span></p><p><br/></p><p><strong>核心价值</strong></p><p><span style="font-size: 14px;">1、采用“国际行动学习法”，将学术研究与管理实践相结合，提升创新思维与战略决策力，推动创新与创业发展。</span><br/></p><p><span style="font-size: 14px;">2、深入系统学习，构建管理体系，形成管理新思想，塑造具有学术底蕴的管理实践家。</span></p><p><br/></p><p><strong>学员受益</strong></p><p>►<strong><span style="font-size: 14px;">学术成果</span></strong><span style="font-size: 14px;">：导师辅导与个人研究相结合，系统梳理所学知识与实践经验，在导师的指导下形成自己的研究成果。</span><br/></p><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<strong><span style="font-size: 14px;">个人提升</span></strong><span style="font-size: 14px;">：获得博士学位，提升个人竞争力。</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<strong><span style="font-size: 14px;">学以致用</span></strong><span style="font-size: 14px;">：掌握研究方法，带领团队用所学成果来解决企业中的重大战略决策问题。</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<strong><span style="font-size: 14px;">社交人脉</span></strong><span style="font-size: 14px;">：与世界知名企业高层管理者和商界领袖分享、交流，相互学习借鉴的同时，获得合作、共赢机会。与导师直接接触，获得更多咨询机会。参加DBA校友会活动，在高端平台上获得个人演讲机会。</span></p></section><p><span style="font-size: 14px;"></span></p><section data-author="Wxeditor"><p>►<strong><span style="font-size: 14px;">职业发展</span></strong><span style="font-size: 14px;">：成为战略决策者、企业咨询顾问、专职讲师。</span></p><p><span style="font-size: 14px;">►<strong>报名热线</strong><span style="font-size: 14px;">：<span style="color: rgb(51, 51, 51); font-size: 16px; font-weight: bold;"><span style="color: rgb(255, 0, 0); font-size: 16px; font-weight: bold;">021-52307916 / 6282 6006</span></span></span></span></p></section><p><span style="font-size: 14px;"><br/></span><span style="font-size: 14px;">更多DBA学位课程信息登录：<a href="http://www.bsn-shanghai.org/index/course/index/cid/375.html" _src="http://www.bsn-shanghai.org/index/course/index/cid/375.html">http://www.bsn-shanghai.org/index/course/index/cid/377.html</a></span></p><p><br/></p>			</div>
         	
        </div>
      </div>
      <!--right End-->
    </div>
  </div>
  <div class="right_extend"></div>
</div>
<div class="color_blank s_1"></div>
<footer>
    {include file="public/coll_foot er" /}
</footer>
</body>
</html>

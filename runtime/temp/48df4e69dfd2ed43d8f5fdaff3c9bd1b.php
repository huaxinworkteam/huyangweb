<?php /*a:3:{s:79:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\chhcollege\szll\szll.html";i:1569217232;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_header.html";i:1569216667;s:77:"D:\phpStudy\PHPTutorial\WWW\tp\application\index\view\public\coll_footer.html";i:1569215764;}*/ ?>
<!DOCTYPE HTML>
<html>

<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title>创合汇商学院</title>
    <meta name='keywords' content="创合汇，商学院，创合汇商学院，商学院课程" />
    <meta name='description' content="创合汇商学院是基于上海交通大学等国内外知名院校优质资源的基础上成立的全球新一代平台型商学院。致力于打破大学围墙，突破教育界与产业界的界限，打造中国乃至世界领先的创业者、企业家及其管理团队最有价值的学习与发展平台" />

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
    <link href="/static/chhcollege/css/reset.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/layout.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/common.css" type="text/css" rel="stylesheet" />
    <link href="/static/chhcollege/css/index.css" type="text/css" rel="stylesheet" />
    <!--[if IE]><script src="/static/chhcollege/js/html5.js"></script><![endif]-->
    <!--[if lt IE 10]><script type="text/javascript" src="/static/chhcollege/js/pie.js"></script><![endif]-->
    <script type="text/javascript" src="/static/chhcollege/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/banner.js"></script>
    <script type="text/javascript" src="/static/chhcollege/js/jquery-powerswitch.js"></script>
    <script type="text/javascript">
        $(function() {
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

            $(".index_btm_body .tab_body a").click(function() {
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

<div class="index_kv_body">
    <a href="http://college.chuanghehui.com/index/dujiaoshou.html" target="_blank" class="kv" style="background-image:url(/static/chhcollege/images/T2_I.jpg);"></a>
    <a href="http://college.chuanghehui.com/index/course/index/cid/375.html" target="_blank" class="kv" style="background-image:url(/static/chhcollege/images/T3_I.jpg);"></a>
    <a href="http://college.chuanghehui.com/index/embaceo.html" target="_blank" class="kv" style="background-image:url(/static/chhcollege/images/T1_I.jpg);"></a>
    <a href="javascript:;" class="btn prev_btn"></a>
    <a href="javascript:;" class="btn next_btn"></a>
</div>


<div class="index_btm_body">
    <div class="cw">

        <h3 class="blank_tit"><span>师资力量</span></h3>

        <div class="tab_body">
            <a href="javascript:;">中教师资</a>
            <em>|</em>
            <a href="javascript:;">外教师资</a>
            <em>|</em>
            <a href="javascript:;">名家讲坛师资</a>
        </div>

        <div class="tab_con">

            <div class="con">

                    
                    <div class="scroll_in fl">
                        <ul>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122144729.jpg" />
                                        <h3>王毅捷</h3>
                                        <h4>中教师资</h4>
                                        <p>上海交大管理学院教授，EMBA、MBA导师。上海交通大学城市管理研究所所长。上海交通大学21世纪发展研究院秘书长。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122132008.jpg" />
                                        <h3>陆满平</h3>
                                        <h4>中教师资</h4>
                                        <p>平安证券有限公司投资银行总部执行总经理,中国社会科学院产业经济学博士学位。曾任深圳证券交易所综合研究所博士后及高级研究员...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122141318.jpg" />
                                        <h3>孙立坚</h3>
                                        <h4>中教师资</h4>
                                        <p>复旦大学经济学院教授、复旦大学经济学院副院长，复旦大学经济学院证券研究所常务副主任、复旦大学世界经济研究所副所长...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122141031.jpg" />
                                        <h3>朱学勤</h3>
                                        <h4>中教师资</h4>
                                        <p>中国当代学者，复旦大学历史系史学博士。哈佛大学访问学者，现为上海大学历史系教授，上海和平与发展研究中心主任。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122132322.jpg" />
                                        <h3>王德培</h3>
                                        <h4>中教师资</h4>
                                        <p>著名经济学家，中国经济体制改革研究会副会长，福卡智库首席研究员，享受国务院特殊津贴专家，教授。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116114125.jpg" />
                                        <h3>张嘉伟</h3>
                                        <h4>中教师资</h4>
                                        <p>中国人民大学心理学博士、国内知名人力资源管理咨询与管理技能培训专家、国内企业经营管理模式与人力资源成长模式分析专家， 上海交大、北京大学、清华大学、香港理工大MBA、EMBA特聘教...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171114164050.jpg" />
                                        <h3>孟宪忠</h3>
                                        <h4>中教师资</h4>
                                        <p>上海交通大学教授、战略管理研究所长。首批国家级有突出贡献专家，三省一市政府经济顾问，国家教育部首批跨世纪经济学人。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122125622.jpg" />
                                        <h3>任建标</h3>
                                        <h4>中教师资</h4>
                                        <p>上海交通大学管理学院副教授、博士。上海交通大学管理学院院长助理、EMBA项目主任，美国新泽西州立大学供应链管理研究中心研究学者、美国麻省理工学院斯隆管理学院高级访问学者...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116130004.jpg" />
                                        <h3>章友德</h3>
                                        <h4>中教师资</h4>
                                        <p>上海政法学院社会管理学院院长；社会学与社会工作系主任；中国城市发展研究会理事，学术委员会委员；上海社会学会常务理事。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122143218.jpg" />
                                        <h3>朱耿洲</h3>
                                        <h4>中教师资</h4>
                                        <p>著名融资策划专家、资深金融律师、高级金融经济师，“首届全球金融类10强华人讲师”、“中国中小企业融资实战策划第一人”。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122142039.jpg" />
                                        <h3>余颖</h3>
                                        <h4>中教师资</h4>
                                        <p>上海交通大学管理学院副教授，博士.曾在著名咨询公司工作，为包括广州控股、真空电子、东阿阿胶、上海市国资委在内的诸多上市公司和大型机构提供过战略管理和投融资方面的咨询服务...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116112629.png" />
                                        <h3>高贤峰</h3>
                                        <h4>中教师资</h4>
                                        <p>北京大学博士，曾任北大汇丰商学院领导力研究中心副主任。担任北京贤峰融智管理顾问中心首席顾问、上海交通大学、清华大学、中山大学等全国十六家高校EMBA、MBA、总裁班特聘教授。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116104223.jpg" />
                                        <h3>张银杰</h3>
                                        <h4>中教师资</h4>
                                        <p>中国人民大学博士、上海财经大学教授、博士生导师，主要讲授《中国经济问题分析》、《公司治理结构》和《宏观经济理论》等多门课程。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_1">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116113414.jpg" />
                                        <h3>于长滨</h3>
                                        <h4>中教师资</h4>
                                        <p>中国注册职业经理人国家级专家评委、于长滨教授是中国著名的"《孙子兵法》与营销实战研究专家，被誉为"《孙子兵法》实战第一人"...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


            </div>

            <div class="con">
                <div class="scroll_body" id="scroll_2">

                    <div class="scroll_in fl">
                        <ul>
                            <li class="box_2">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122142905.jpg" />
                                        <h3>Pieter J. de Vries</h3>
                                        <h4>外教师资</h4>
                                        <p>BSN荷兰商学院战略管理教授，也是荷兰Nyenrode大学访问教授。</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_2">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116162856.jpg" />
                                        <h3>Paul Turken</h3>
                                        <h4>外教师资</h4>
                                        <p>BSN荷兰商学院营销学教授、荷兰Nyenrode大学和Erasmus大学访问教授、荷兰著名营销管理专家。曾服务于位列世界第五大营销与沟通专业咨询公司BBDO并担任董事及咨询业务总裁...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_2">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116170930.jpg" />
                                        <h3>Norbert Greveling</h3>
                                        <h4>外教师资</h4>
                                        <p>荷兰商学院著名教授、荷兰埃因霍温科技大学博士、国际著名管理咨询师。Nobert博士先后曾在IBM及荷兰知名咨询公司 Twynstra Gudde任职...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_2">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116171606.jpg" />
                                        <h3>Carl van Dyck</h3>
                                        <h4>外教师资</h4>
                                        <p>荷兰驻比利时商会董事会成员，Octofarma 医药公司非执行董事。拥有丰富实战经验的管理专家，在咨询业、石油化工行业和银行业都曾长期担任高级管理职位，并有在欧洲、美国和亚洲众多跨...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="con">
                <div class="scroll_body" id="scroll_3">

                    <div class="scroll_in fl">
                        <ul>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171122134318.png" />
                                        <h3>章苏阳</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>中欧国际工商管理学院EMBA，IDG技术创业投资基金合伙人，1994年加入IDG，他在技术及国际金融方面有坚实的专业背景，并与中国的创业者群体有密切关系，他曾成功地完成了电子、通讯...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116174115.jpg" />
                                        <h3>哈继铭</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>高盛投资管理部中国副主席暨首席投资策略师。2010年加入高盛，任董事总经理。加入高盛前，于2004至2010年在中国国际金融公司任首席经济学家，于1993至2004年在国际货币基金...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116173730.jpg" />
                                        <h3>曹景行</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>资深媒体人。曾任凤凰卫视资讯台副台长、凤凰卫视言论部总监、《亚洲周刊》副总编辑、《明报》主笔、《中天新闻频道》总编辑。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116182204.jpg" />
                                        <h3>袁岳</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>零点研究咨询集团董事长、北京大学博士、哈佛大学肯尼迪政府学院MPA。研究和著述集中于工商管理领域的品牌管理、系统营销体系、内部管理转型、领导力塑造、危机管理、终端管理、营销研究方法...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116175316.jpg" />
                                        <h3>茅于轼</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>中国最有影响的经济学家之一，人文经济学代表人物，是中国民间经济学者的重要代表。2012年获美国华盛顿的智库卡托研究所颁发的 “希尔顿-弗里德曼促进自由奖”；2014年入选英国 Pr...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116180130.jpg" />
                                        <h3>吴晓波</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>毕业于复旦大学新闻系。财经作家，“蓝狮子”财经图书出版人，上海交通大学EMBA课程教授，哈佛大学访问学者。...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="/static/chhcollege/picture/20171116174517.jpg" />
                                        <h3>许小年</h3>
                                        <h4>论坛讲座师资</h4>
                                        <p>美国加州大学戴维斯分校经济学博士、中欧国际工商学院经济学和金融学教授。1999年-2004年曾任中国国际金融公司研究部董事总经理，此前，曾担任美林证券亚太区高级经济学家以及世界银行...</p>
                                    </div>
                                </a>
                            </li>
                            <li class="box_3">
                                <a href="/index/staff/index.html">
                                    <div class="in">
                                        <img src="#" />
                                        <h3></h3>
                                        <h4></h4>
                                        <p></p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


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

<!--<button id="gotop">top</button>-->
<script>
    $(document).ready(function () {

        $("#gotop").click(function () {
            document.body.scrollTop = document.documentElement.scrollTop = 0;
        });
    });
</script>
</body>

</html>
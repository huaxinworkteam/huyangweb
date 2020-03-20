/**
 * 右侧快速操作
 * kongge@office.weiphone.com
 * 2012.06.07
 */
jQuery(function($){
    //创建DOM
    // '<a href="#" class="qq"><i class="view"><svg class="icon" aria-hidden="true"> <use xlink:href="#icon-qq"></use> </svg></i><span>QQ</span></a>' +
    var quickHTML = '<div class="quick_links_panel"><div id="quick_links" class="quick_links"><a href="#top" class="return_top"><i class="top"><svg class="icon" aria-hidden="true"> <use xlink:href="#icon-gotop"></use> </svg></i><span>返回</span></a>' +
            '<a href="javascript: void(0);" onClick="openKefu()" class="leave_message"><i class="qa"><svg class="icon" aria-hidden="true"> <use xlink:href="#icon-service"></use> </svg> </i><span>联系客服</span></a></div>' +
            '<div class="quick_toggle"><a href="javascript:;" class="toggle" title="展开/收起"><svg class="icon" >\n' +
            '    <use xlink:href="#icon-btn"></use>\n' +
            '</svg></a></div></div>' +
            '<div id="quick_links_pop" class="quick_links_pop hide"></div>',
        quickShell = $(document.createElement('div')).html(quickHTML).addClass('quick_links_wrap'),
        quickLinks = quickShell.find('.quick_links');
    quickPanel = quickLinks.parent();
    quickShell.appendTo('body');

    //具体数据操作
    var
        quickPopXHR,
        loadingTmpl = '<div class="loading" style="padding:30px 80px"><i></i><span>Loading...</span></div>',
        popTmpl = '<div class="title"><h3><i></i><%=title%></h3></div><div class="pop_panel"><%=content%></div><div class="arrow"><i></i></div><div class="fix_bg"></div>',
        quickPop = quickShell.find('#quick_links_pop'),
        quickDataFns = {

            //最近浏览
            history_list: {
                title: '最近浏览',
                content: loadingTmpl,
                init: function(ops){
                    //获取实时最近浏览
                    quickPopXHR = $.ajax({
                        url: recentlyViewedUrl,
                        dataType: 'json',
                        cache: false,
                        success: function(data){
                            var html = '<div class="no_data"><i></i><span>没有浏览记录</span></div>';
                            if(data && data.length > 0){
                                html = ds.tmpl(historyListTmpl, {
                                    items: data
                                });
                            }
                            quickPop.html(ds.tmpl(popTmpl, {
                                title: ops.title,
                                content: '<div class="slider related_slider history_slider"><div class="inner">'+ html +'</div></div>'
                            }));
                        }
                    });
                }
            },
            //给客服留言
            leave_message: {
                init: function(ops){
                    setTimeout(function(){
                        quickPop.find('textarea').focus();
                    }, 100);
                    //验证码
                    quickPop.find('#token_txt').bind('focus', getValidateCode);

                    //效验 & 提交数据
                    var form = quickPop.find('form');
                    form.attr("action",saveMessageUrl);
                    form.bind('submit', function(e){
                        e.preventDefault();
                        var data = form.serialize();
                        if(!checkMessageForm()){
                            return false;
                        }
                        var type=quickPop.find(':radio:checked').val();
                        jQuery.ajax({
                            type:'post',
                            url: saveMessageUrl,
                            data:{"message_style":type,"message_content":$("#msg").val(),"checkcode":$("#token_txt").val()},
                            dataType:"json",
                            error:function(value){
                                ds.dialog.alert('留言失败');
                            },
                            success: function(value){
                                var success = value.success;
                                var info = value.info;
                                if(success==1){
                                    hideQuickPop();
                                    showInfoTip(info, 'success');
                                }else{
                                    ds.dialog.alert(info);
                                }
                            }
                        });
                    });
                }
            }
        };

    //showQuickPop
    var
        prevPopType,
        prevTrigger,
        doc = $(document),
        popDisplayed = false,
        hideQuickPop = function(){
            if(prevTrigger){
                prevTrigger.removeClass('current');
            }
            popDisplayed = false;
            prevPopType = '';
            quickPop.hide();
        },
        showQuickPop = function(type){
            if(quickPopXHR && quickPopXHR.abort){
                quickPopXHR.abort();
            }
            if(type !== prevPopType){
                var fn = quickDataFns[type];
                quickPop.html(ds.tmpl(popTmpl, fn));
                fn.init.call(this, fn);
            }
            doc.unbind('click.quick_links').one('click.quick_links', hideQuickPop);

            quickPop[0].className = 'quick_links_pop quick_' + type;
            popDisplayed = true;
            prevPopType = type;
            quickPop.show();
        };
    quickShell.bind('click.quick_links', function(e){
        e.stopPropagation();
    });

    //通用事件处理
    var
        view = $(window),
        quickLinkCollapsed = !!ds.getCookie('ql_collapse'),
        getHandlerType = function(className){
            return className.replace(/current/g, '').replace(/\s+/, '');
        },
        showPopFn = function(){
            var type = getHandlerType(this.className);
            if(popDisplayed && type === prevPopType){
                return hideQuickPop();
            }
            showQuickPop(this.className);
            if(prevTrigger){
                prevTrigger.removeClass('current');
            }
            prevTrigger = $(this).addClass('current');
        },
        quickHandlers = {
            leave_message: showPopFn,
            //返回顶部
            return_top: function(){
                ds.scrollTo(0, 0);
                hideReturnTop();
            },
            toggle: function(){
                quickLinkCollapsed = !quickLinkCollapsed;
                quickShell[quickLinkCollapsed ? 'addClass' : 'removeClass']('quick_links_min');
                ds.setCookie('ql_collapse', quickLinkCollapsed ? '1' : '', 30);
            }
        };
    quickShell.delegate('a', 'click', function(e){
        var type = getHandlerType(this.className);
        if(type && quickHandlers[type]){
            quickHandlers[type].call(this);
            e.preventDefault();
        }
    });

    //Return top
    var scrollTimer, resizeTimer, minWidth = 1350;

    function resizeHandler(){
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(checkScroll, 160);
    }

    function scrollHandler(){
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(checkResize, 160);
    }
    function checkScroll(){
        view.scrollTop()>100 ? showReturnTop() : hideReturnTop();
    }
    function showReturnTop(){
        quickPanel.addClass('quick_links_allow_gotop');
    }
    function hideReturnTop(){
        quickPanel.removeClass('quick_links_allow_gotop');
    }

    view.bind('scroll.go_top', resizeHandler).bind('resize.quick_links', scrollHandler);
    quickLinkCollapsed && quickShell.addClass('quick_links_min');
    resizeHandler();
    scrollHandler();



    //获取验证码
    function getValidateCode(){
        this.value="";
        var validateCodeUrl = validateCode_url+'?t='+Math.random();
        $("#code_img").html('<img id="validate_code_img_id_1" src="' + validateCodeUrl + '" height="20" width="80" alt="验证码" />');
        return;
    }
});

//首次加载站内消息总数
jQuery(function($){
    var shell = $('#quick_links a.message_list');
    if(shell.find("em").length){

        $.ajax({
            url: unreadNewMsgUrl,
            dataType: 'json',
            cache: false,
            success: function(data){
                if(1 == data.success){
                    if(0 == data.msgtotal){
                        shell.find('em').remove();
                    }else{
                        var num = data.msgtotal;
                        //消息总数最大只显示 99
                        shell.append('<em class="num"><b>'+ Math.min(99, num) +'</b></em>').show();
                    }
                }
            }
        });
    }
});


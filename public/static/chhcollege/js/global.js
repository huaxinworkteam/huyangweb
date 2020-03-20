var common = (function () {
    var g = {};
    
    /**
     * 检查是否登录
     */
    g.checkLogin = function (eventId, inviterId, inviterApplication) {
        var userInfo = localStorage.getItem('userInfo');
        if (!userInfo) {
            var url = '/view/login?backUrl=' + encodeURIComponent(window.location.href);
            if (eventId && Number(eventId) !== 0) {
                url += '&eventId='+eventId;
            }
            if (inviterId && Number(inviterId) !== 0) {
                url += '&inviterId='+inviterId;
            }
            if (inviterApplication && Number(inviterApplication) !== 0) {
                url += '&inviterApplication='+inviterApplication;
            }
            window.location.href = url;
            return;
        }
    };

    /**
     * 处理手机号
     * @param {string} phone 完整手机号
     * @returns {string} eg: 132****1234
     */
    g.handlePhone = function (phone) {
        if (phone.length === 0) {
            return '';
        }
        var showPhone =  phone.replace(/^(\d{3})\d{4}(\d+)/,"$1****$2");
        return showPhone;
    };


    /**
     * 链接跳转 新开浏览器窗口
     * @param {string} url 链接url
     */
    g.toPage = function (url) {
        var $a = document.createElement('a');
        $a.href = url;
        $a.target = '_blank';
        document.body.appendChild($a);
        $a.click();
        document.body.removeChild($a);
    };

    /**
     * 处理活动列表数据
     * @param {object} m 活动列表对象
     * @param {dateTime} nowTime 服务器当前时间
     * @returns {object}
     */
    g.handleAvtivity = function (m, nowTime) {
        var now = new Date();
        // 未开始时 报名是否已截止
        m.isOver = 0; // 表示未开始
        m.isOverClass = 'not-start';
        m.start_time = m.start_time.replace(/-/g, '/');
        m.end_time = m.end_time.replace(/-/g, '/');
        
        // 报名截止时间
        var signUpEndedTime = null;
        // 已设置报名截止时间，未设置则为活动开始时间
        if (m.sign_up_end_time) {
            signUpEndedTime = m.sign_up_end_time.replace(/-/g, '/');
        } else {
            signUpEndedTime = m.start_time;
        }
        m.signUpEnded = 0; // 未过报名截止时间
        if (now.getTime() > new Date(signUpEndedTime).getTime()) {
            m.signUpEnded = 1; // 已过报名截止时间
        }
        
        var s = new Date(m.start_time).getTime() // 开始时间
        var e = new Date(m.end_time).getTime() // 结束时间
        if (s < now && e > now) {
            m.isOver = 1; // 表示进行中
            m.isOverClass = 'processing';
        } else if (now > e) {
            m.isOver = 2; // 表示已结束
            m.isOverClass = 'is-over';
        }
        m.timeStr = time.formatTimeLength(m.start_time, m.end_time);
        m.timeStr2 = time.formatTimeLength(m.start_time, m.end_time, true);
        m.startTimeStr = time.formatStartTime(m.start_time);
        
        // 直播按钮状态 - 默认 文字为约直播，可点击
        m.onlineBtn = {
            id: m.id,
            name: '约直播',
            disabled: false,
            show: false,
            url: m.live_url,
            status: -1 // -1 未预约 1 已预约 2 看直播 3 看回放
        };
        // 线下按钮状态 - 默认 文字为去现场，可点击
        m.offlineBtn = {
            id: m.id,
            name: '去现场',
            status: 0, // 0 跳转表单 1 报名截止 2 审核中 3 报名成功 4 报名未通过 
            disabled: false,
            show: false,
        };
        // 按钮状态
        // 未开始
        if (m.isOver === 0) {
            if (m.type !== 1) { // 有直播
                m.onlineBtn.show = true;
                if (m.pc_user_activity_online_status === -1 || m.pc_user_activity_online_status === 0) { // -1/0 没预约 1 已预约
                    m.onlineBtn.name = '约直播';
                    m.onlineBtn.status = -1;
                } else {
                    m.onlineBtn.name = '已预约';
                    m.onlineBtn.status = 1;
                    m.onlineBtn.disabled = true;
                }

                if (nowTime) {
                    // 提前10分钟 进入直播间
                    var liveStartTime = new Date(m.live_start_time.replace(/-/g, '/')).getTime();
                    // 服务器当前时间 加10分钟
                    var linuxNowTime = new Date(nowTime.replace(/-/g, '/')).getTime() + 10 * 60 * 1000;
                    if (linuxNowTime >= liveStartTime) {
                        m.onlineBtn.name = '看直播';
                        m.onlineBtn.status = 2;
                        m.onlineBtn.disabled = false;
                    }
                }
            }
            if (m.type !== 2) { // 有线下
                m.offlineBtn.show = true;
                if (m.pc_user_activity_offline_status === 2) { // -1:未预约 需要判断是否可报名 2:审核中 3:审核通过 4:审核拒绝
                    m.offlineBtn.status = 2;
                } else if (m.pc_user_activity_offline_status === 3) {
                    m.offlineBtn.status = 3;
                } else if (m.pc_user_activity_offline_status === 4) {
                    m.offlineBtn.status = 4;
                } else if (m.pc_user_activity_offline_status === -1 || m.pc_user_activity_offline_status === 0) { // 未预约 判断是否可报名
                    if (m.signUpEnded === 1) {
                        m.offlineBtn.status = 1;
                        m.offlineBtn.name = '报名截止';
                        m.offlineBtn.disabled = true;
                    } else {
                        m.offlineBtn.status = 0;
                    }
                }
            }
        } else if (m.isOver === 1) { // 进行中
            if (m.type !== 1) { // 有直播
                m.onlineBtn.name = '看直播';
                m.onlineBtn.status = 2;
                m.onlineBtn.disabled = false;
                m.onlineBtn.show = true;
            }

            if (m.type !== 2) { // 有线下
                m.offlineBtn.show = true;
                if (m.pc_user_activity_offline_status === 2) { // -1:未预约 需要判断是否可报名 2:审核中 3:审核通过 4:审核拒绝
                    m.offlineBtn.status = 2;
                } else if (m.pc_user_activity_offline_status === 3) {
                    m.offlineBtn.status = 3;
                } else if (m.pc_user_activity_offline_status === 4) {
                    m.offlineBtn.status = 4;
                } else if (m.pc_user_activity_offline_status === -1 || m.pc_user_activity_offline_status === 0) { // 未预约 判断是否可报名
                    if (m.signUpEnded === 1) { // 报名截止
                        m.offlineBtn.status = 1;
                        m.offlineBtn.name = '报名截止';
                        m.offlineBtn.disabled = true;
                    } else {
                        m.offlineBtn.status = 0;
                    }
                }
            }
        } else if (m.isOver === 2) { // 已结束
            // 只有直播 或者 有线下和线上 且有回放 只显示线上按钮
            if ((m.type === 2 && m.if_replay === 1) ||  (m.type === 3 && m.if_replay === 1)) { 
                m.onlineBtn.name = '看回放';
                m.onlineBtn.status = 3;
                m.onlineBtn.disabled = false;
                m.onlineBtn.show = true;
                // 不显示线下按钮
                m.offlineBtn.show = false;
            }
            // 只有直播 或者 有线下和线上 且无回放 只显示线上按钮
            if ((m.type === 2 && m.if_replay === 0) || (m.type === 3 && m.if_replay === 0)) {
                m.onlineBtn.name = '已结束';
                m.onlineBtn.status = 4;
                m.onlineBtn.disabled = true;
                m.onlineBtn.show = true;
                // 不显示线下按钮
                m.offlineBtn.show = false;
            }

            if (m.type === 1) {// 只有线下
                m.offlineBtn.name = '已结束';
                m.offlineBtn.disabled = true;
                m.offlineBtn.show = true;
                m.offlineBtn.status = 1;
                // 不显示线上按钮
                m.onlineBtn.show = false;
            }
        }

        return m;
    };

    return g;
})();
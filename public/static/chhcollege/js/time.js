var time = (function () {
    var time = {};

    var now = new Date(); //当前日期
    var nowDayOfWeek = now.getDay(); //今天本周的第几天
    var nowDay = now.getDate(); //当前日
    var nowMonth = now.getMonth(); //当前月
    var nowYear = now.getFullYear(); //当前年

    /**
     * 格式化日期：yyyy-MM-dd
     * @param {dateTime} date 标准时间格式
     * @returns {string} eg: yyyy-MM-dd
     */
    time.formatDate = function (date, format) {
        if (!format) {
            format = 'yyyy-MM-dd hh:mm:ss';
        }
        var o = {
            'M+': date.getMonth() + 1, // month
            'd+': date.getDate(), // day
            'h+': date.getHours(), // hour
            'm+': date.getMinutes(), // minute
            's+': date.getSeconds(), // second
            'q+': Math.floor((date.getMonth() + 3) / 3), // quarter
            'S': date.getMilliseconds() // millisecond
        }
        if (/(y+)/.test(format)) {
            format = format.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length))
        }
        for (var k in o) {
            if (new RegExp('(' + k + ')').test(format)) {
                format = format.replace(RegExp.$1, RegExp.$1.length === 1 ? o[k] : ('00' + o[k]).substr(('' + o[k]).length))
            }
        }
        return format
    };

    /**
     * 当天为周几
     * @param {number} day 开始时间格式
     * @returns {string} eg: 周一
     */
    time.getDayOfWeek = function (day) {
        var str = '';

        switch(day) {
            case 0:
                str = '周日';
                break;
            case 1:
                str = '周一';
                break;
            case 2:
                str = '周二';
                break;
            case 3:
                str = '周三';
                break;
            case 4:
                str = '周四';
                break;
            case 5:
                str = '周五';
                break;
            case 6:
                str = '周六';
                break;
        }

        return str;
    };

    //获得某月的天数
    time.getMonthDays = function (myMonth) {
        var monthStartDate = new Date(nowYear, myMonth, 1);
        var monthEndDate = new Date(nowYear, myMonth + 1, 1);
        var days = (monthEndDate - monthStartDate) / (1000 * 60 * 60 * 24);
        return days;
    };

    //获得本周的开始日期
    time.getWeekStartDate = function () {
        var weekStartDate = new Date(nowYear, nowMonth, nowDay - (nowDayOfWeek - 1));
        return this.formatDate(weekStartDate);
    };

    //获得本周的结束日期
    time.getWeekEndDate = function () {
        var weekEndDate = new Date(nowYear, nowMonth, nowDay + (7 - nowDayOfWeek));
        weekEndDate = weekEndDate.getTime() + 24 * 60 * 60 * 1000 - 1;
        weekEndDate = new Date(weekEndDate);
        return this.formatDate(weekEndDate);
    };

    //获得本月的开始日期
    time.getMonthStartDate = function () {
        var monthStartDate = new Date(nowYear, nowMonth, 1);
        return this.formatDate(monthStartDate);
    };

    //获得本月的结束日期
    time.getMonthEndDate = function () {
        var monthEndDate = new Date(nowYear, nowMonth, this.getMonthDays(nowMonth));
        monthEndDate = monthEndDate.getTime() + 24 * 60 * 60 * 1000 - 1;
        monthEndDate = new Date(monthEndDate);
        return this.formatDate(monthEndDate);
    };

    /**
     * 时间格式
     * @param {dateTime} startTime 开始时间格式 eg: 2018-10-10 10:00:00
     * @param {dateTime} endTime   结束时间格式 eg: 2018-10-10 10:00:00
     * @returns {string} eg: 3月25日 17:00-19:00
     */
    time.formatTimeLength = function (startTime, endTime, flag) {
        startTime = startTime.replace(/-/g, '/');
        endTime = endTime.replace(/-/g, '/');
        var s = new Date(startTime);
        var e = new Date(endTime);
        var y = s.getFullYear();
        var m = s.getMonth() + 1;
        var d = s.getDate();
        var st = ((s.getHours() < 10) ? '0' + s.getHours() : s.getHours()) + ':' + ((s.getMinutes() < 10) ? '0' + s.getMinutes() : s.getMinutes());
        var et = ((e.getHours() < 10) ? '0' + e.getHours() : e.getHours()) + ':' + ((e.getMinutes() < 10) ? '0' + e.getMinutes() : e.getMinutes());
        if (!flag) {
            return m + '月' + d + '日 ' + st + '-' + et;
        }
        return y + '-' + m + '-' + d + ' ' + st + '-' + et;
    };

    /**
     * 时间格式
     * @param {dateTime} startTime 开始时间格式 eg: 2018-10-10 10:00:00
     * @returns {string} eg: 3月25日 17:00
     */
    time.formatStartTime = function (startTime, week) {
        startTime = startTime.replace(/-/g, '/');
        var s = new Date(startTime);
        var m = (s.getMonth() + 1) < 10 ? `0${s.getMonth() + 1}` : s.getMonth() + 1
        var d = (s.getDate()) < 10 ? `0${s.getDate()}` : s.getDate()
        var day = this.getDayOfWeek(s.getDay());
        var hour = (s.getHours() < 10) ? '0' + s.getHours() : s.getHours();
        var min = (s.getMinutes() < 10) ? '0' + s.getMinutes() : s.getMinutes();
        return m + '月' + d + '日 ' + day + ' ' + hour + ':' + min;
    };

    /**
     * 格式化视频时长
     * @param {number} second 秒
     * @param {number} digital 是否为纯数字  eg 17:00
     * @returns {string} eg:  17:00/17分钟05秒
     */
    time.formatVideoTime = function (second, digital) {
        var m = Math.floor(second / 60)
        var s = second % 60
        s = s < 10 ? `0${s}` : s
        m = m < 10 ? `0${m}` : m
        if (digital) {
            return `${m}:${s}`
        }
        if (!m || m === '00') {
            return `${s}秒`
        }
        return `${m}分钟${s}秒`
    };

    return time;
})();

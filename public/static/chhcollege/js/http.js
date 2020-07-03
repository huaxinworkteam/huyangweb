// <!-- IE 兼容 插件 -->
//<script type="text/javascript"  src="__ADMIN__/lib/babel-polyfill/polyfill.min.js"></script>
//<script type="text/javascript"  src="__ADMIN__/lib/babel-polyfill/browser.min.js"></script>

/** post jQuery ajax */
var URL = '/index/index/'

function http_post(url, data) {
  return new Promise(function (reslove, reject) {
    $.ajax({
      url: URL + url,
      type: 'post',
      data: data,
      dataType: 'json',
      success: function (res) {
        // 格式化 json
        if (!isJSON(res)) res = $.parseJSON(res);
        console.log(res);
        reslove(res);

      },
      error: function (err) {
        console.log(err);
        reject(err);
        layer.msg('出错了，状态 status:' + err.status);
      }
    });
  });
}

function http_get(url, data) {
  return new Promise(function (reslove, reject) {
    $.ajax({
      url: URL + url,
      type: 'get',
      data: data,
      dataType: 'json',
      success: function (res) {
        // 格式化 json
        if (!isJSON(res)) res = $.parseJSON(res);
        console.log(res);
        reslove(res);
      },
      error: function (err) {
        console.log(err);
        reject(err);
        layer.msg('出错了，状态 status:' + err.status);

      }
    });
  });
}

// 校验数据是否是json 数据
function isJSON(str) {
  var isjson = typeof (str) == "object" && Object.prototype.toString.call(str).toLowerCase() == "[object object]" && !str.length;
  return isjson;
}

/**
 *  时间工具类
 *  @author fei
 */
var DateUtil = {

  getDate: function (strDate) {
    var date = eval('new Date(' + strDate.replace(/\d+(?=-[^-]+$)/,
      function (a) {
        return parseInt(a, 10) - 1;
      }).match(/\d+/g) + ')');
    return date;
  },
  /**
   * 当前时间，格式 yyyy-MM-dd HH:mm:ss
   *
   * @return 当前时间的标准形式字符串
   */
  now: function () {
    return new Date().format("yyyy-MM-dd HH:mm:ss");
  },
  /**
   * 格式化日期时间
   * 格式 yyyy-MM-dd HH:mm:ss
   *
   * @param date 被格式化的日期
   * @param format 格式化 参考 {@link date_formate}
   * @return 格式化后的日期
   */
  formatDateTime: function (date, format) {
    if (format == undefined || format == null) {
      format = "yyyy-MM-dd HH:mm:ss";
    }

    return date.format(format);
  },
  /**
   * 只支持毫秒级别时间戳，如果需要秒级别时间戳，请自行×1000
   *
   * @param timestamp 时间戳
   * @return 时间对象
   */
  date: function (timestamp) {
    return new Date(timestamp);
  }
};

/** 日期格式 命名参考hutool工具类 */
date_formate = {
  /** 标准日期格式：yyyy-MM-dd */
  normDatePattern: "yyyy-MM-dd",
  /** 标准时间格式：hh:mm:ss */
  normTimePattern: "HH:mm:ss",
  /** 标准日期时间格式，精确到分：yyyy-MM-dd HH:mm */
  normDatetimeMinutePattern: "yyyy-MM-dd HH:mm",
  /** 标准日期时间格式，精确到秒：yyyy-MM-dd HH:mm:ss */
  normDatetimePattern: "yyyy-MM-dd HH:mm:ss",
  /** 标准日期时间格式，精确到毫秒：yyyy-MM-dd HH:mm:ss.SSS */
  normDatetimeMsPattern: "yyyy-MM-dd HH:mm:ss.SSS",
  /** 标准日期格式：yyyy年MM月dd日 */
  chineseDatePattern: "yyyy年MM月dd日",
  /** 标准日期格式：yyyyMMdd */
  pureDatePattern: "yyyyMMdd",
  /** 标准日期格式：HHmmss */
  pureTimePattern: "HHmmss",
  /** 标准日期格式：yyyyMMddHHmmss */
  pureDatetimePattern: "yyyyMMddHHmmss",
  /** 标准日期格式：yyyyMMddHHmmssSSS */
  pureDatetimeMsPattern: "yyyyMMddHHmmssSSS",
};

Date.prototype.format = function (fmt) {
  var o = {
    "M+": this.getMonth() + 1, //月份
    "d+": this.getDate(), //日
    "H+": this.getHours(), //小时
    "h+": this.getHours(), //小时
    "m+": this.getMinutes(), //分
    "s+": this.getSeconds(), //秒
    "q+": Math.floor((this.getMonth() + 3) / 3), //季度
    "S": this.getMilliseconds() //毫秒
  };
  if (/(y+)/.test(fmt)) {
    fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
  }
  for (var k in o) {
    if (new RegExp("(" + k + ")").test(fmt)) {
      fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    }
  }
  return fmt;
};

// 图片访问不到
function imgError(event, path) {
  console.log("sssss")
  console.log(event)
  let img = event.srcElement;
  img.src = 'https://' + path;
  img.onerror = null; //防止闪图
}
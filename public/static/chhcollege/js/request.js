var RequestSender = {
    createNew: function (apiPrefix) {
        var instance = {
			apiPrefix: apiPrefix
        };
        

        // Create an XML request.
        var createXHR = function () {
            var xmlHttp = null;
            if (window.XMLHttpRequest) {
                xmlHttp = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                try {
                    xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        xmlHttp = null;
                    }
                }
            }
            // XML request is unsupported.
            if (xmlHttp === null) {
                throw new Error('浏览器不支持XHR对象！');
            }

            return xmlHttp;
        };

        // 初始化数据
        var init = function (obj) {
            var objAdapter = {
                method : 'get',
                data : {},
                success : function() {
                },
                complete : function() {
                },
                error : function(s) {
                    alert('status:' + s + 'error!');
                },
                async : true,
                isNeedLogin: false
            }
            // 通过使用JS随机字符串解决IE浏览器第二次默认获取缓存的问题
            objAdapter.url = instance.apiPrefix + obj.url + '?rand=' + Math.random();
            objAdapter.method = obj.method || objAdapter.method;
            objAdapter.data = handleData(obj.method, obj.data);
            objAdapter.async = obj.async || objAdapter.async;
            objAdapter.isNeedLogin = obj.isNeedLogin || objAdapter.isNeedLogin;
            objAdapter.complete = obj.complete || objAdapter.complete;
            objAdapter.success = obj.success || objAdapter.success;
            objAdapter.error = obj.error || objAdapter.error;

            return objAdapter;
        };

        // 根据方法处理参数
        var handleData = function (method, data) {
            method = method.toLowerCase();
            if (method === 'get') {
                return params(data) || params({});
            } else if (method === 'post' || method === 'put') {
                return JSON.stringify(data) || JSON.stringify({})
            }
        };

        // 数据转换
        var params = function (data) {
            var arr = [];
            for ( var i in data) {
                // 特殊字符传参产生的问题可以使用encodeURIComponent()进行编码处理
                arr.push(encodeURIComponent(i) + '=' + encodeURIComponent(data[i]));
            }
            return arr.join('&');
        };

        // 请求成功后，回调方法
        var callback = function(obj, xhr) {
            if (xhr.status == 200) { // 判断http的交互是否成功，200表示成功
                if (xhr.responseText.length !== 0) {
                    obj.success(JSON.parse(xhr.responseText)); // 回调传递参数
                }
            } else {
                console.log('获取数据错误！错误代号：' + xhr.status + '，错误信息：' + xhr.statusText);
            }
        };
        
        // request
        instance.request = function (obj) {
            var xhr = createXHR(); // 创建XHR对象
            var requestObj = init(obj);
            if (requestObj.async === true) { // true表示异步，false表示同步
                // 使用异步调用的时候，需要触发readystatechange 事件
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) { // 判断对象的状态是否交互完成
                        callback(obj, this); // 回调
                    }
                };
            }
            // 它接受三个参数：请求类型(get、post)、请求的URL和表示是否异步。
            // 在使用XHR对象时，必须先调用open()方法，
            method = requestObj.method.toLowerCase();
            if (method === 'get') {
                xhr.open(method, requestObj.url + "&" + requestObj.data, requestObj.async);
                if (requestObj.isNeedLogin) {
                    xhr.setRequestHeader('token', localStorage.getItem('token'));
                }
                xhr.send(null);
            } else if (method === 'post' || method === 'put') {
                xhr.open(requestObj.method, requestObj.url, requestObj.async);
                // 放在open方法之后，send方法之前。
                xhr.setRequestHeader('Content-Type', 'application/json');
                if (requestObj.isNeedLogin) {
                    xhr.setRequestHeader('token', localStorage.getItem('token'));
                }
                xhr.send(requestObj.data); // post方式将数据放在send()方法里
            }
            if (requestObj.async === false) { // 同步
                requestObj.callback(obj, this); // 回调
            }
        };

        

        return instance;
    }
};

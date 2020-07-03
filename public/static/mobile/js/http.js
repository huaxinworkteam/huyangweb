// 创建实例
var instance = axios.create({
    // baseURL: '/api/',
    timeout: 5000,
    // `headers` 是即将被发送的自定义请求头
    headers: {'X-Requested-With': 'XMLHttpRequest'},
});


// 拦截器
// 添加请求拦截器
instance.interceptors.request.use(function (config) {
    // 在发送请求之前做些什么
    return config;
  }, function (error) {
    // 对请求错误做些什么
    return Promise.reject(error);
});

// 添加响应拦截器
instance.interceptors.response.use(function (response) {
    // 对响应数据做点什么
    if (!isJSON(response.data)) response.data = JSON.parse( response.data );
    return response;
  }, function (error) {
    // 对响应错误做点什么
    return Promise.reject(error);
});



// 封装 请求
var http = function request(api, method, params) {
  return new Promise((reslove, reject) => {
    instance({
        method: method || 'GET',
        url: api,
        params: params || {},
    }).then( res => {
        reslove(res);
    }).catch( err => {
        reject(err);
    });
  });
};

['options', 'get', 'post', 'put', 'head', 'delete', 'trace', 'connect'].forEach( method => {
    http[method] = (api, params, opt) => http(api, method, params, opt || {});
});

// 校验数据是否是json 数据
function isJSON(str) {
  var isjson = typeof(str) == "object" && Object.prototype.toString.call(str).toLowerCase() == "[object object]" && !str.length;
  return isjson;
}
/**
 * 使用方法
 * http.get(url,params).then( res => {
 * 
 * }).catch( err => {
 * 
 * });
 */
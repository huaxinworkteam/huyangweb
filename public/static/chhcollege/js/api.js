var bsApi = (function() {
    var g = {};
    g.config = {
        // prefix: "https://www.chuanghehui.com/api",
        // prefix: "http://test.v7mall.com/"
    };

    if (RequestSender) {
        g.sender = RequestSender.createNew(g.config.prefix);
    }
    // 发送验证码
    g.fetchSmsSend = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/smsSend',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 登录
    g.fetchLogin = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/login',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 重置密码
    g.fetchPasswordReset = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/resetPwd',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 注册
    g.fetchRegist = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/register',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 微信登陆
    g.fetchWechatLogin = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/wechatlogin',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 首页
    g.fetchIndex = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/index',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 课程信息
    g.fetchCourse = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/lessons',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 课程详情
    g.fetchCourseInfo = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/lesson',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 课程报名
    g.fetchCourseSignUp = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                isNeedLogin: true,
                url: '/course/ext',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 个人中心 我的订单
    g.fetchOrderList = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                isNeedLogin: true,
                url: '/userOrder',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 活动类型
    g.fetchActivityType = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/activity/type',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 活动列表
    g.fetchActivityList = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/activities',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 活动banner
    g.fetchActivityBanner = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/activity/banner',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 活动详情
    g.fetchActivityDetail = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/activity',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 活动报名
    g.fetchActivitySignUp = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/activity/ext',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 公开课列表
    g.fetchPublicCourseList = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourseList',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 公开课分类
    g.fetchPublicCourseCategory = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/courseCategory',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 公开课详情
    g.fetchPublicCourseDetail = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/detail',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 公开课推荐
    g.fetchPublicCourseRecommend = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/recommend',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 师资列表
    g.fetchLecturerList = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/lecturer',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 师资详情
    g.fetchLecturerDetail = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/lecturer/detail',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 个人中心 我的活动
    g.fetchMyActivity = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                isNeedLogin: true,
                url: '/activity/userActivity',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 侧边热门内容
    g.fetchHotContent = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/sidebar',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 新闻列表
    g.fetchNewsList = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/news',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 新闻详情
    g.fetchNewsDetail = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/news/detail',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 获取用户信息
    g.fetchGetUserInfo = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/userInfo',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 获取赠送内容
    g.fetchGetProduct = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/product',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 用户学习课程
    g.fetchPublicCourse = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/userList',
                method: 'get',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 课程预约
    g.fetchPublicCourseAppointment = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/appointment',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    // 记录用户观看进度
    g.fetchPublicCourseProgress = function(data) {
        return new MyPromise(function(resolve, reject) {
            g.sender.request({
                url: '/publicCourse/chapter/progress',
                method: 'post',
                data: data,
                success: function(res) {
                    resolve(res)
                }
            });
        });
    };

    return g;
})();
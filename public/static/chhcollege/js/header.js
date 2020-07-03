Vue.component('g-header', {
    props: {
        current: {
            type: Number,
            default: 0
        },
        active: {
            type: Boolean,
            default: false
        }
    },
    template: 
        '<nav class="g-header" :class="{active: active}">' +
            '<div class="wrapper g-width">' +
                '<h1 class="logo float-left">' +
                    '<a href="/" title="官网首页"></a>' +
                '</h1>' +
                '<div class="lf-head float-left">' +
                    '<!-- 首页 -->' +
                    '<a class="item mk" :class="{\'active\': current === 0}" href="/" title="首页">首页</a>' +
                    '<!-- 学院课程 -->' +
                    '<span class="item all-lesson">' +
                        '<a class="mk" :class="{\'active\': current === 1}" @click="goToPage(\'course\')">学院课程</a>' +
                        '<ul class="dropdown all-lesson-dorp">' +
                            '<li v-for="(item, index) in courseData" :key="index"  @click="goToCourse(item)">' +
                                '<a>{{item.name}}</a>' +
                            '</li>' +
                        '</ul>' +
                    '</span>' +
                    '<!-- 在线课程 -->' +
                    '<a class="item mk" :class="{\'active\': current === 2}" href="publiccourse" title="在线课程">在线课程</a>' +
                    '<!-- 活动中心 -->' +
                    '<span class="item activity-center">' +
                        '<a class="mk" :class="{\'active\': current === 3}" href="activity">直播/活动</a>' +
                        '<ul class="dropdown activity-center-dorp" v-if="activityListData.length !== 0">' +
                            '<li v-for="(item, index) in activityListData" :key="index">' +
                                '<a class="g-width-100" :href="\'activitydetail?id=\' + item.id" target="_blank">' +
                                    '<p class="title">{{item.title}}</p>' +
                                    '<div class="info float-clear">' +
                                        '<span class="left float-left">{{item.startTimeStr}}</span>' +
                                        '<span class="right float-right">{{item.statusStr}}</span>' +
                                    '</div>' +
                                '</a>' +
                            '</li>' +
                            '<a class="more" href="activity" target="_blank">更多活动</a>' +
                        '</ul>' +
                    '</span>' +
                    '<!-- 校友俱乐部 -->' +
                    '<span class="item club">' +
                        '<a class="mk" :class="{\'active\': current === 4}" @click="goToPage(\'club\')">校友俱乐部</a>' +
                        '<ul class="dropdown club-dorp">' +
                            '<li v-for="(item, index) in clubData" :key="item.value" @click="goToClub(item)">' +
                                '<a>{{item.title}}</a>' +
                            '</li>' +
                        '</ul>' +
                    '</span>' +
                    '<!-- 师资团队 -->' +
                    '<a class="item mk" :class="{\'active\': current === 5}" href="teacher" title="师资团队">师资团队</a>' +
                    '<!-- 关于我们 -->' +
                    '<!-- <a class="item mk" :class="{\'active\': current === 6}" href="about" title="关于我们">关于我们</a> -->' +
                '</div>' +
                '<div class="lr-head">' +
                    '<a class="app-download" href="/view/download" target="_blank">' +
                        '<i class="icon header-app-icon"></i>' +
                        '<span class="mk">App下载</span>' +
                    '</a>' +
                    '<!-- 未登录 -->' +
                    '<span class="login-before" v-if="!userInfo">' +
                        '<i class="icon header-login-icon"></i>' +
                        '<a class="mk login" @click="login">登录</a>' +
                        '<a class="mk regist" href="login">注册</a>' +
                    '</span>' +
                    '<!-- 已登录 -->' +
                    '<span class="login-after item" v-else>' +
                        '<img class="avatar" :src="userInfo.avatar || \'../static/images/pc/default-avatar.png\'" alt="avatar">' +
                        '<span class="nickname">{{userInfo.loginStr}}</span>' +
                        '<i class="arrow-down"></i>' +
                        '<ul class="dropdown login-after-dorp">' +
                            '<li v-for="(item, index) in userCenter" :key="item.id">' +
                                '<a :href="\'usercenter?id=\' + item.id">' +
                                   '<i class="icon" :class="item.icon"></i>{{item.title}}</a>' +
                            '</li>' +
                            '<li @click="logout">' +
                                '<a>' +
                                    '<i class="logout icon"></i>' +
                                    '退出' +
                                '</a>' +
                            '</li>' +
                        '</ul>' +
                    '</span>' +
                '</div>' +
            '</div>' +
       '</nav>'
    ,
    data: function () {
        return {
            userInfo: null,
            // 课程分类
            courseData: [],
            // 俱乐部分类
            clubData: [
                {
                    title: '创投俱乐部',
                    value: 1
                },
                // {
                //     title: '董秘俱乐部',
                //     value: 2
                // },
                {
                    title: 'HR俱乐部',
                    value: 3
                },
                {
                    title: '人文与领导力俱乐部',
                    value: 4
                },
                {
                    title: '大健康产业联盟',
                    value: 5
                },
                {
                    title: '制造供应链分会',
                    value: 6
                }
            ],
            // 推荐活动
            activityList: [],
            // 个人中心
            userCenter: [
                {
                    title: '我的学习',
                    icon: 'my-study',
                    id: 3
                },
                {
                    title: '我的活动',
                    icon: 'my-activity',
                    id: 1
                },
                {
                    title: '课程报名',
                    icon: 'my-order',
                    id: 2
                },
            ]
        }
    },
    computed: {
        activityListData: function () {
            for (var i = 0; i < this.activityList.length; i++) {
                var m = this.activityList[i];
                var now = new Date();
                var startTime = new Date(m.start_time.replace(/-/g, '/'));
                var month = startTime.getMonth() + 1;
                var day = startTime.getDate();
                m.startTimeStr = [month, day].map(this.formatNumber).join('-');
                
                var endTime = new Date(m.end_time.replace(/-/g, '/'));
                if (now < startTime) { // 
                    m.statusStr = '报名中';
                } else if (endTime < now) {
                    m.statusStr = '已结束';
                } else {
                    m.statusStr = '进行中';
                }
            }

            return this.activityList;
        }
    },
    methods: {
        formatNumber: function  (n) {
            const str = n.toString();
            return str[1] ? str : '0' + str;
        },
        goToPage: function (page) {
            window.location.href = page;
            localStorage.removeItem(page+ 'ID')
        },
        goToClub: function (item) {
            location.href = "club?type=" + item.value;
            // localStorage.setItem("clubID", item.value);
        },
        goToCourse: function (item) {
            location.href = "course?id=" + item.id;
        },
        // 登录
        login: function () {
            window.location.href = 'login?backUrl=' + encodeURIComponent(window.location.href);
        },
        // 退出登录
        logout: function () {
            // localStorage.clear();
            localStorage.removeItem('userInfo');
            localStorage.removeItem('token');
            window.location.reload();
        }
    },
    mounted: function () {
        this.userInfo = (!localStorage.getItem('userInfo') || localStorage.getItem('userInfo').length === 0)
                            ? null 
                            : JSON.parse(localStorage.getItem('userInfo'));
        this.courseData = (!localStorage.getItem('schoolList') || localStorage.getItem('schoolList').length === 0)
                            ? [
                                {id: 1, name: "创业课程"},
                                {id: 2, name: "管理课程"},
                                {id: 5, name: "资本课程"},
                                {id: 6, name: "科技课程"},
                                {id: 4, name: "人文课程"},
                            ]
                            : JSON.parse(localStorage.getItem('schoolList'));
        this.activityList = (!localStorage.getItem('headActivity') || localStorage.getItem('headActivity').length === 0)
                            ? []
                            : JSON.parse(localStorage.getItem('headActivity'));
    }
})
Vue.component('g-footer', {
    props: {},
    template: 
        '<footer class="g-footer g-width-100">' +
            '<div class="wrapper g-width">' +
                '<div class="sitemapcont float-clear">' +
                    '<dl class="float-left">' +
                        '<dt class="fs20">平台生态</dt>' +
                        '<dd><a class="fs14" href="about?tab=1" target="_blank">关于创合汇</a></dd>' +
                        '<dd><a class="fs14" href="about" target="_blank">创合汇商学院</a></dd>' +
                        '<dd><a class="fs14" href="http://chhcapital.cn" target="_blank">创合汇资本</a></dd>' +
                        // '<dd><a class="fs14" href="http://www.chhconsulting.cn/" target="_blank">创合汇咨询</a></dd>' +
                        '<dd><a class="fs14" href="club?type=1" target="_blank">创合汇创业服务中心</a></dd>' +
                        '<dd><a class="fs14" href="download" target="_blank">创合汇APP</a></dd>' +
                    '</dl>' +

                    '<dl class="float-left">' +
                        '<dt class="fs20">全部课程</dt>' +
                        '<dd><a class="fs14" href="publiccourse" target="_blank">公开课</a></dd>' +
                        '<dd v-for="(item, index) in courses" :key="index" v-cloak>' +
                            '<a class="fs14" :href="\'course?id=\' + item.id" target="_blank">{{item.name}}</a>' +
                        '</dd>' +
                    '</dl>' +

                    '<dl class="float-left">' +
                        '<dt class="fs20">新闻报道</dt>' +
                        '<dd><a class="fs14" href="news" target="_blank">新闻动态</a></dd>' +
                        '<dd><a class="fs14" href="news?type=2" target="_blank">媒体报道</a></dd>' +
                    '</dl>' +

                    '<dl class="float-left">' +
                        '<dt class="fs20">关于我们</dt>' +
                        '<dd><a class="fs14" href="about" target="_blank">关于我们</a></dd>' +
                        '<dd><a class="fs14" href="contact" target="_blank">联系我们</a></dd>' +
                        // '<dd><a class="fs14" href="map" target="_blank">网站地图</a></dd>' +
                    '</dl>' +

                    '<dl class="float-clear">' +
                        '<dt class="fs20">关注我们</dt>' +
                        '<dd class="float-left">' +
                            '<div class="mr28 float-left">' +
                                '<img class="qrcode-img" src="https://chhcollege-static.oss-cn-shanghai.aliyuncs.com/othermaterial/wechat.jpg" alt="qrcode">' +
                                '<p class="qrcode-text">微信服务号</p>' +
                            '</div>' +
                            '<div class="float-left">' +
                                '<img class="qrcode-img" src="https://chhcollege-static.oss-cn-shanghai.aliyuncs.com/othermaterial/weibo.png" alt="qrcode">' +
                                '<p class="qrcode-text">官网微博</p>' +
                            '</div>' +
                        '</dd>' +
                    '</dl>' +
                '</div>' +
                '<div class="connect">' +
                    '<p class="copyright">版权 © 创合汇商学院 网站备案号： 沪ICP备18026080号-1</p>' +
                '</div>' +
            '</div>' +
        '</footer>'
    ,
    data: function () {
        return {
            courses: []
        }
    },
    mounted: function () {
        this.courses = (!localStorage.getItem('schoolList') || localStorage.getItem('schoolList').length === 0)
                            ? [
                                {id: 1, name: "创业学院"},
                                {id: 2, name: "管理学院"},
                                {id: 5, name: "资本学院"},
                                {id: 6, name: "科技学院"},
                                {id: 4, name: "人文学院"},
                            ]
                            : JSON.parse(localStorage.getItem('schoolList'));
    }
})
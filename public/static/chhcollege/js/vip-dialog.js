Vue.component('vip-dialog', {
    props: {
        visible: {
            type: Boolean,
            default: false
        }
    },
    template: 
        '<div class="dialog">' +
            '<div class="mask" v-show="visible"></div>' +
            '<div class="join-vip-dialog" :class="{active: visible}">' +
                '<div class="wrapper">' +
                    '<div class="dialog-header">' +
                        '<i class="dialog-close" @click="closeDialog"></i>' +
                    '</div>' +
                    '<div class="dialog-body">' +
                        '<div class="center">' +
                            '<img src="../../../static/images/pc/join-vip.png" alt="加入会员" width="100">' +
                        '</div>' +
                        '<h2 class="center title fs24">成为创合汇会员吧！</h2>' +
                        '<p class="center text fs18">此活动为会员专享，加入创合汇会员，公开课<span class="s1">全年免费学</span></p>' +
                        '<p class="center text fs18">更有<span class="s2">17项会员权益</span></p>' +
                        '<div class="vip-qrcode center">' +
                            '<img src="https://chhcollege-static.oss-cn-shanghai.aliyuncs.com/chh_bc/images/gkkqrc.png" alt="二维码" width="120">' +
                            '<p class="fs14">微信扫码加入会员</p>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>'
    ,
    data: function () {
        return {
            
        }
    },
    methods: {
        closeDialog: function () {
            this.$parent.showVipDialog();
        }
    },
    mounted: function() {
        
    },
});

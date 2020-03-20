Vue.component('right-tools', {
    props: {},
    template: 
        '<div class="right-tools">' +
            '<a class="connect-phone flexColumnCenter">' +
                '<i class="icon"></i>' +
                '<p>电话沟通</p>' +
                '<div class="hover-phone">' +
                    '400-6886-238' +
                    '<i class="triangle"></i>' +
                '</div>'+
            '</a>' +
            '<a class="connect-online zhiCustomBtn">' +
                '<i class="icon"></i>' +
                '<p>在线咨询</p>' +
            '</a>' +
            '<a class="to-top" @click="toTop" :style="{display: display}">' +
                '<i class="icon"></i>' +
                '<p>回到顶部</p>' +
            '</a>' +
        '</div>'
    ,
    data: function () {
        return {
            scrollTop: 0
        }
    },
    computed: {
        display: function () {
            return this.scrollTop === 0 ? 'none' : 'block';
        }
    },
    methods: {
        handleScroll: function () {
            this.scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
        },
        toTop: function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    },
    mounted: function() {
        window.addEventListener('scroll', this.handleScroll)
    },
});

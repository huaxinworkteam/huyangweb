Vue.component('g-message', {
    props: {},
    template:
        '<div class="g-message" :class="[messageOption.type, {active: messageOption.active}]" style="top: 20px;z-index: 2000">' +
            '<i class="g-message__icon" v-if="messageOption.type !== \'normal\'"></i>' +
            '<p class="g-message__content">{{messageOption.text}}</p>' +
        '</div>'
    ,
    data: function () {
        return {
            messageOption: {
                active: false,
                type: 'info',
                text: '这是一条消息'
            }
        }
    },
    methods: {
        sentMessageOption: function (active, type, text) {
            this.messageOption.active = active;
            this.messageOption.type = type;
            this.messageOption.text = text;
            var self = this;
            setTimeout(function () {
                self.messageOption.active = !active;
            }, 1000);
        }
    }
});

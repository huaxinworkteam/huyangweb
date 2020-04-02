var designW = 750;  //设计稿宽
var font_rate = 100;
// rem适配 1rem = 100px
//适配
window.onresize = function () {
    var offsetWid = document.body.offsetWidth;
    var offsetHei = document.body.offsetHeight;
    if (/(Android)/i.test(navigator.userAgent)){     // 判断是否为Android手机
        offsetWid = screen.width;
        offsetHei = screen.height;
    }else if(/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)){  // 判断是否为苹果手机
        offsetWid=document.body.clientWidth;
        offsetHei=document.body.clientHeight;
    }
    //适配
    document.getElementsByTagName("html")[0].style.fontSize = offsetWid / designW * font_rate + "px";
    document.getElementsByTagName("body")[0].style.fontSize = offsetWid / designW * font_rate + "px";
}
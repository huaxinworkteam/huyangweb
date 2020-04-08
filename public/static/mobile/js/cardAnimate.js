var cardAnimate = {
    prex: 0,  // 坐标x
    prey: 0,    // 坐标y
    speed: 0,
    index: 0, // 移动到第几个元素
    card: '', // document 元素
    prePos: 0,  //帧位移
    fingerTouch: false, //手指是否触摸屏幕
    moveDirect: 0, //1表示正向，-1表示反向
    ani_move : false, //动画是否进行
    // transNum : 0, 
    length: 0, // card 片数量
    init: function(card){
        var self = this;
        this.card = document.getElementsByClassName(card);
        this.length = this.card.length;
        document.addEventListener("touchstart", this.onDocumentMouseDown.bind(self));
        document.addEventListener("touchmove", this.onDocumentMouseMove.bind(self));
        document.addEventListener("touchend", this.onDocumentMouseUp.bind(self));
    },
    animate: function(){
  
        // this.prePos += (this.lon - this.prePos) * 0.1;
        // if (this.prePos > 40) {
        //     this.lon = this.lon - 40;
        //     this.prePos = this.prePos - 40;
        // }else if (this.prePos < -40) {
        //     this.lon = this.lon + 40;
        //     this.prePos = this.prePos + 40;
        // }
        this.prePos = -(6 * this.index); // 6 是元素宽度 6rem;
        console.log(this.card.length)
        
        // 判断是否到达了目标位置
        if ((!this.fingerTouch))
        {
            this.ani_move = false;
            for( let i = 0; i< this.length ; i++) {
                this.card[i].style = "transform: translateX("+ this.prePos +"rem)";
            }
  
        }else{
            this.card.style = "transform: translateX("+ this.prePos +"rem)";
            requestAnimationFrame(this.animate.bind(this));
  
        }
    },
    onDocumentMouseDown : function(e){
        // 若是上次动画未结束不需要再次启动动画和重置目标位移
        if( this.ani_move && this.fingerTouch == false) {
        }
        else {
            // this.lon = 0;
            cardAnimate.animate();
        }
        e = e.touches[0];
        this.prex = e.clientX; 
        this.prey = e.clientY;
        
        this.ani_move = true; //动画开启 
        // console.log("touchstart",e)
  
    },
    onDocumentMouseMove : function(e){
  
        e = e.touches[0];
  
        if( this.ani_move && this.fingerTouch == false) {
            // 判断是否不同向
            // if (((e.clientX - this.prex) > 0 ? 1: -1) == -this.moveDirect ) {
            //     this.lon = 0;
            //     this.prePos = 0;
            //     this.moveDirect = -this.moveDirect;
            // }
            console.log(e.clientX - this.prex)
            if (e.clientX - this.prex > 0) {
                this.index --;
            } else {
                this.index ++;
            }
        }
        //判断是否是移动事件
        if (Math.abs(e.clientX - this.prex) >= 4 ) {
            this.fingerTouch = true;
            
            this.speed = (e.clientX - this.prex) * Math.max(Math.abs(e.clientX - this.prex), 8) * 0.00005;
            this.lon += this.speed;
    
            this.prex = e.clientX;
            this.prey = e.clientY;
        }
        // console.log("touchmove",e)
    },
    onDocumentMouseUp : function(e){
      
        //如果是点击事件 不设置移动
        if (!this.fingerTouch) return;
  
        // this.moveDirect = this.lon > 0 ? 1 : -1;
        // this.transNum = this.lon/10 + this.moveDirect;
        // this.lon = Math.round(this.transNum) * 10;
        this.fingerTouch = false;
        // console.log("touchend",e)
    }
  }
  
  
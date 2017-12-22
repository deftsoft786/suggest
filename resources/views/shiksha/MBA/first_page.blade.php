<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('shiksha/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="{{url('shiksha/css/style.css')}}" rel="stylesheet">
     <link href="{{url('shiksha/css/style2.css')}}" rel="stylesheet">
     <link href="{{url('shiksha/css/font-awesome.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <script src="{{url('shiksha/js/modernizr.js')}}"></script>
  <script>   
(function(a){if(typeof define==="function"&&define.amd&&define.amd.jQuery){define(["jquery"],a)}else{if(typeof module!=="undefined"&&module.exports){a(require("jquery"))}else{a(jQuery)}}}(function(f){var y="1.6.15",p="left",o="right",e="up",x="down",c="in",A="out",m="none",s="auto",l="swipe",t="pinch",B="tap",j="doubletap",b="longtap",z="hold",E="horizontal",u="vertical",i="all",r=10,g="start",k="move",h="end",q="cancel",a="ontouchstart" in window,v=window.navigator.msPointerEnabled&&!window.navigator.pointerEnabled&&!a,d=(window.navigator.pointerEnabled||window.navigator.msPointerEnabled)&&!a,C="TouchSwipe";var n={fingers:1,threshold:75,cancelThreshold:null,pinchThreshold:20,maxTimeThreshold:null,fingerReleaseThreshold:250,longTapThreshold:500,doubleTapThreshold:200,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,pinchIn:null,pinchOut:null,pinchStatus:null,click:null,tap:null,doubleTap:null,longTap:null,hold:null,triggerOnTouchEnd:true,triggerOnTouchLeave:false,allowPageScroll:"auto",fallbackToMouseEvents:true,excludedElements:"label, button, input, select, textarea, a, .noSwipe",preventDefaultEvents:true};f.fn.swipe=function(H){var G=f(this),F=G.data(C);if(F&&typeof H==="string"){if(F[H]){return F[H].apply(this,Array.prototype.slice.call(arguments,1))}else{f.error("Method "+H+" does not exist on jQuery.swipe")}}else{if(F&&typeof H==="object"){F.option.apply(this,arguments)}else{if(!F&&(typeof H==="object"||!H)){return w.apply(this,arguments)}}}return G};f.fn.swipe.version=y;f.fn.swipe.defaults=n;f.fn.swipe.phases={PHASE_START:g,PHASE_MOVE:k,PHASE_END:h,PHASE_CANCEL:q};f.fn.swipe.directions={LEFT:p,RIGHT:o,UP:e,DOWN:x,IN:c,OUT:A};f.fn.swipe.pageScroll={NONE:m,HORIZONTAL:E,VERTICAL:u,AUTO:s};f.fn.swipe.fingers={ONE:1,TWO:2,THREE:3,FOUR:4,FIVE:5,ALL:i};function w(F){if(F&&(F.allowPageScroll===undefined&&(F.swipe!==undefined||F.swipeStatus!==undefined))){F.allowPageScroll=m}if(F.click!==undefined&&F.tap===undefined){F.tap=F.click}if(!F){F={}}F=f.extend({},f.fn.swipe.defaults,F);return this.each(function(){var H=f(this);var G=H.data(C);if(!G){G=new D(this,F);H.data(C,G)}})}function D(a5,au){var au=f.extend({},au);var az=(a||d||!au.fallbackToMouseEvents),K=az?(d?(v?"MSPointerDown":"pointerdown"):"touchstart"):"mousedown",ax=az?(d?(v?"MSPointerMove":"pointermove"):"touchmove"):"mousemove",V=az?(d?(v?"MSPointerUp":"pointerup"):"touchend"):"mouseup",T=az?(d?"mouseleave":null):"mouseleave",aD=(d?(v?"MSPointerCancel":"pointercancel"):"touchcancel");var ag=0,aP=null,a2=null,ac=0,a1=0,aZ=0,H=1,ap=0,aJ=0,N=null;var aR=f(a5);var aa="start";var X=0;var aQ={};var U=0,a3=0,a6=0,ay=0,O=0;var aW=null,af=null;try{aR.bind(K,aN);aR.bind(aD,ba)}catch(aj){f.error("events not supported "+K+","+aD+" on jQuery.swipe")}this.enable=function(){aR.bind(K,aN);aR.bind(aD,ba);return aR};this.disable=function(){aK();return aR};this.destroy=function(){aK();aR.data(C,null);aR=null};this.option=function(bd,bc){if(typeof bd==="object"){au=f.extend(au,bd)}else{if(au[bd]!==undefined){if(bc===undefined){return au[bd]}else{au[bd]=bc}}else{if(!bd){return au}else{f.error("Option "+bd+" does not exist on jQuery.swipe.options")}}}return null};function aN(be){if(aB()){return}if(f(be.target).closest(au.excludedElements,aR).length>0){return}var bf=be.originalEvent?be.originalEvent:be;var bd,bg=bf.touches,bc=bg?bg[0]:bf;aa=g;if(bg){X=bg.length}else{if(au.preventDefaultEvents!==false){be.preventDefault()}}ag=0;aP=null;a2=null;aJ=null;ac=0;a1=0;aZ=0;H=1;ap=0;N=ab();S();ai(0,bc);if(!bg||(X===au.fingers||au.fingers===i)||aX()){U=ar();if(X==2){ai(1,bg[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}if(au.swipeStatus||au.pinchStatus){bd=P(bf,aa)}}else{bd=false}if(bd===false){aa=q;P(bf,aa);return bd}else{if(au.hold){af=setTimeout(f.proxy(function(){aR.trigger("hold",[bf.target]);if(au.hold){bd=au.hold.call(aR,bf,bf.target)}},this),au.longTapThreshold)}an(true)}return null}function a4(bf){var bi=bf.originalEvent?bf.originalEvent:bf;if(aa===h||aa===q||al()){return}var be,bj=bi.touches,bd=bj?bj[0]:bi;var bg=aH(bd);a3=ar();if(bj){X=bj.length}if(au.hold){clearTimeout(af)}aa=k;if(X==2){if(a1==0){ai(1,bj[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}else{aH(bj[1]);aZ=at(aQ[0].end,aQ[1].end);aJ=aq(aQ[0].end,aQ[1].end)}H=a8(a1,aZ);ap=Math.abs(a1-aZ)}if((X===au.fingers||au.fingers===i)||!bj||aX()){aP=aL(bg.start,bg.end);a2=aL(bg.last,bg.end);ak(bf,a2);ag=aS(bg.start,bg.end);ac=aM();aI(aP,ag);be=P(bi,aa);if(!au.triggerOnTouchEnd||au.triggerOnTouchLeave){var bc=true;if(au.triggerOnTouchLeave){var bh=aY(this);bc=F(bg.end,bh)}if(!au.triggerOnTouchEnd&&bc){aa=aC(k)}else{if(au.triggerOnTouchLeave&&!bc){aa=aC(h)}}if(aa==q||aa==h){P(bi,aa)}}}else{aa=q;P(bi,aa)}if(be===false){aa=q;P(bi,aa)}}function M(bc){var bd=bc.originalEvent?bc.originalEvent:bc,be=bd.touches;if(be){if(be.length&&!al()){G(bd);return true}else{if(be.length&&al()){return true}}}if(al()){X=ay}a3=ar();ac=aM();if(bb()||!am()){aa=q;P(bd,aa)}else{if(au.triggerOnTouchEnd||(au.triggerOnTouchEnd==false&&aa===k)){if(au.preventDefaultEvents!==false){bc.preventDefault()}aa=h;P(bd,aa)}else{if(!au.triggerOnTouchEnd&&a7()){aa=h;aF(bd,aa,B)}else{if(aa===k){aa=q;P(bd,aa)}}}}an(false);return null}function ba(){X=0;a3=0;U=0;a1=0;aZ=0;H=1;S();an(false)}function L(bc){var bd=bc.originalEvent?bc.originalEvent:bc;if(au.triggerOnTouchLeave){aa=aC(h);P(bd,aa)}}function aK(){aR.unbind(K,aN);aR.unbind(aD,ba);aR.unbind(ax,a4);aR.unbind(V,M);if(T){aR.unbind(T,L)}an(false)}function aC(bg){var bf=bg;var be=aA();var bd=am();var bc=bb();if(!be||bc){bf=q}else{if(bd&&bg==k&&(!au.triggerOnTouchEnd||au.triggerOnTouchLeave)){bf=h}else{if(!bd&&bg==h&&au.triggerOnTouchLeave){bf=q}}}return bf}function P(be,bc){var bd,bf=be.touches;if(J()||W()){bd=aF(be,bc,l)}if((Q()||aX())&&bd!==false){bd=aF(be,bc,t)}if(aG()&&bd!==false){bd=aF(be,bc,j)}else{if(ao()&&bd!==false){bd=aF(be,bc,b)}else{if(ah()&&bd!==false){bd=aF(be,bc,B)}}}if(bc===q){if(W()){bd=aF(be,bc,l)}if(aX()){bd=aF(be,bc,t)}ba(be)}if(bc===h){if(bf){if(!bf.length){ba(be)}}else{ba(be)}}return bd}function aF(bf,bc,be){var bd;if(be==l){aR.trigger("swipeStatus",[bc,aP||null,ag||0,ac||0,X,aQ,a2]);if(au.swipeStatus){bd=au.swipeStatus.call(aR,bf,bc,aP||null,ag||0,ac||0,X,aQ,a2);if(bd===false){return false}}if(bc==h&&aV()){clearTimeout(aW);clearTimeout(af);aR.trigger("swipe",[aP,ag,ac,X,aQ,a2]);if(au.swipe){bd=au.swipe.call(aR,bf,aP,ag,ac,X,aQ,a2);if(bd===false){return false}}switch(aP){case p:aR.trigger("swipeLeft",[aP,ag,ac,X,aQ,a2]);if(au.swipeLeft){bd=au.swipeLeft.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case o:aR.trigger("swipeRight",[aP,ag,ac,X,aQ,a2]);if(au.swipeRight){bd=au.swipeRight.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case e:aR.trigger("swipeUp",[aP,ag,ac,X,aQ,a2]);if(au.swipeUp){bd=au.swipeUp.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case x:aR.trigger("swipeDown",[aP,ag,ac,X,aQ,a2]);if(au.swipeDown){bd=au.swipeDown.call(aR,bf,aP,ag,ac,X,aQ,a2)}break}}}if(be==t){aR.trigger("pinchStatus",[bc,aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchStatus){bd=au.pinchStatus.call(aR,bf,bc,aJ||null,ap||0,ac||0,X,H,aQ);if(bd===false){return false}}if(bc==h&&a9()){switch(aJ){case c:aR.trigger("pinchIn",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchIn){bd=au.pinchIn.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break;case A:aR.trigger("pinchOut",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchOut){bd=au.pinchOut.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break}}}if(be==B){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);if(Z()&&!I()){O=ar();aW=setTimeout(f.proxy(function(){O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}},this),au.doubleTapThreshold)}else{O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}}}}else{if(be==j){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);O=null;aR.trigger("doubletap",[bf.target]);if(au.doubleTap){bd=au.doubleTap.call(aR,bf,bf.target)}}}else{if(be==b){if(bc===q||bc===h){clearTimeout(aW);O=null;aR.trigger("longtap",[bf.target]);if(au.longTap){bd=au.longTap.call(aR,bf,bf.target)}}}}}return bd}function am(){var bc=true;if(au.threshold!==null){bc=ag>=au.threshold}return bc}function bb(){var bc=false;if(au.cancelThreshold!==null&&aP!==null){bc=(aT(aP)-ag)>=au.cancelThreshold}return bc}function ae(){if(au.pinchThreshold!==null){return ap>=au.pinchThreshold}return true}function aA(){var bc;if(au.maxTimeThreshold){if(ac>=au.maxTimeThreshold){bc=false}else{bc=true}}else{bc=true}return bc}function ak(bc,bd){if(au.preventDefaultEvents===false){return}if(au.allowPageScroll===m){bc.preventDefault()}else{var be=au.allowPageScroll===s;switch(bd){case p:if((au.swipeLeft&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case o:if((au.swipeRight&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case e:if((au.swipeUp&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break;case x:if((au.swipeDown&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break}}}function a9(){var bd=aO();var bc=Y();var be=ae();return bd&&bc&&be}function aX(){return !!(au.pinchStatus||au.pinchIn||au.pinchOut)}function Q(){return !!(a9()&&aX())}function aV(){var bf=aA();var bh=am();var be=aO();var bc=Y();var bd=bb();var bg=!bd&&bc&&be&&bh&&bf;return bg}function W(){return !!(au.swipe||au.swipeStatus||au.swipeLeft||au.swipeRight||au.swipeUp||au.swipeDown)}function J(){return !!(aV()&&W())}function aO(){return((X===au.fingers||au.fingers===i)||!a)}function Y(){return aQ[0].end.x!==0}function a7(){return !!(au.tap)}function Z(){return !!(au.doubleTap)}function aU(){return !!(au.longTap)}function R(){if(O==null){return false}var bc=ar();return(Z()&&((bc-O)<=au.doubleTapThreshold))}function I(){return R()}function aw(){return((X===1||!a)&&(isNaN(ag)||ag<au.threshold))}function a0(){return((ac>au.longTapThreshold)&&(ag<r))}function ah(){return !!(aw()&&a7())}function aG(){return !!(R()&&Z())}function ao(){return !!(a0()&&aU())}function G(bc){a6=ar();ay=bc.touches.length+1}function S(){a6=0;ay=0}function al(){var bc=false;if(a6){var bd=ar()-a6;if(bd<=au.fingerReleaseThreshold){bc=true}}return bc}function aB(){return !!(aR.data(C+"_intouch")===true)}function an(bc){if(!aR){return}if(bc===true){aR.bind(ax,a4);aR.bind(V,M);if(T){aR.bind(T,L)}}else{aR.unbind(ax,a4,false);aR.unbind(V,M,false);if(T){aR.unbind(T,L,false)}}aR.data(C+"_intouch",bc===true)}function ai(be,bc){var bd={start:{x:0,y:0},last:{x:0,y:0},end:{x:0,y:0}};bd.start.x=bd.last.x=bd.end.x=bc.pageX||bc.clientX;bd.start.y=bd.last.y=bd.end.y=bc.pageY||bc.clientY;aQ[be]=bd;return bd}function aH(bc){var be=bc.identifier!==undefined?bc.identifier:0;var bd=ad(be);if(bd===null){bd=ai(be,bc)}bd.last.x=bd.end.x;bd.last.y=bd.end.y;bd.end.x=bc.pageX||bc.clientX;bd.end.y=bc.pageY||bc.clientY;return bd}function ad(bc){return aQ[bc]||null}function aI(bc,bd){bd=Math.max(bd,aT(bc));N[bc].distance=bd}function aT(bc){if(N[bc]){return N[bc].distance}return undefined}function ab(){var bc={};bc[p]=av(p);bc[o]=av(o);bc[e]=av(e);bc[x]=av(x);return bc}function av(bc){return{direction:bc,distance:0}}function aM(){return a3-U}function at(bf,be){var bd=Math.abs(bf.x-be.x);var bc=Math.abs(bf.y-be.y);return Math.round(Math.sqrt(bd*bd+bc*bc))}function a8(bc,bd){var be=(bd/bc)*1;return be.toFixed(2)}function aq(){if(H<1){return A}else{return c}}function aS(bd,bc){return Math.round(Math.sqrt(Math.pow(bc.x-bd.x,2)+Math.pow(bc.y-bd.y,2)))}function aE(bf,bd){var bc=bf.x-bd.x;var bh=bd.y-bf.y;var be=Math.atan2(bh,bc);var bg=Math.round(be*180/Math.PI);if(bg<0){bg=360-Math.abs(bg)}return bg}function aL(bd,bc){var be=aE(bd,bc);if((be<=45)&&(be>=0)){return p}else{if((be<=360)&&(be>=315)){return p}else{if((be>=135)&&(be<=225)){return o}else{if((be>45)&&(be<135)){return x}else{return e}}}}}function ar(){var bc=new Date();return bc.getTime()}function aY(bc){bc=f(bc);var be=bc.offset();var bd={left:be.left,right:be.left+bc.outerWidth(),top:be.top,bottom:be.top+bc.outerHeight()};return bd}function F(bc,bd){return(bc.x>bd.left&&bc.x<bd.right&&bc.y>bd.top&&bc.y<bd.bottom)}}}));!function(n){"use strict";n.fn.bsTouchSlider=function(i){var a=n(".carousel");return this.each(function(){function i(i){var a="webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";i.each(function(){var i=n(this),t=i.data("animation");i.addClass(t).one(a,function(){i.removeClass(t)})})}var t=a.find(".item:first").find("[data-animation ^= 'animated']");a.carousel(),i(t),a.on("slide.bs.carousel",function(a){var t=n(a.relatedTarget).find("[data-animation ^= 'animated']");i(t)}),n(".carousel .carousel-inner").swipe({swipeLeft:function(n,i,a,t,e){this.parent().carousel("next")},swipeRight:function(){this.parent().carousel("prev")},threshold:0})})}}(jQuery);
</script>
<script>
 $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
                delay: 10,
                time: 2000
            });

$('#bootstrap-touch-slider').bsTouchSlider();
</script>
<script>
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
</script>

<style>
.dropdown-submenu {
    position: relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}
.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}
.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}
.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}
.dropdown-submenu.pull-left {
    float: none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color:#004080;
    color: white;
    padding: 0px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 76%;
  font-weight:bold;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #004080;
  margin-left:20px;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
  margin-right:20px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width:100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
  width:50%;
    /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  
}


.log-frm {
}
.log-frm ul {
    margin: 0 !important;
    padding: 0 !important;
}
.log-frm ul li {
    color:#004080;
    display: block;
    font-size: 14px;
    line-height: 25px;
}
.log-frm ul li a {
    color: #f47521;
    cursor: pointer;
    display: block;
    padding: 10px 0;
}
.log-frm ul li p {
    border: 1px solid #ccc;
    color: #666;
    font-size: 12px;
    line-height: 18px;
    margin: 10px 0;
    padding: 2px 5px;
}
.log-frm ul li input[type="text"] {
    border: 1px solid #ccc;
    border-radius: 0;
    color: #000;
    display: block;
    font-size: 13px;
    line-height: 19px;
    margin-bottom: 10px;
    width: 100%;
}
.model-l {    
    padding-right: 0px;    
}
.model-r .o-r {
    background: #fff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100%;
    bottom: 0;
    height: 40px;
    margin: auto;
    overflow: hidden;
    position: absolute;
    left: -19px;
    top: 0;
    width: 40px;
    z-index: 99999;
}
.model-r .o-r span {
    background: #fff none repeat scroll 0 0;
    border: 2px solid #ccc;
    color: #666;
    display: block;
    height: 100%;
    padding: 8px 0 0;
    text-align: center;
    width: 100%;
    border-radius: 100%;
    display:block;
    position: relative;
}
.model-r {
    padding-left: 30px;
    position: relative;
    border-left: 1px dotted #cccccc;
}
.forgot {
    display: none;
}
.btn-primary {
 background-color:#004080;
    border-color: #2e6da4;
   color: #fff;
   font-size: 18px;
  padding: 0 22px;
  border-radius: 6px;
  margin-top:20px;
  
}
.btn-default {
    background-color:#004080;
    border-color: #004080;
    color: #fff;
  float:left;
}
.btn-default:hover {
    background-color:#fff;
    border-color: #004080;
    color:#004080;
}

</style>

 </head>
  
  

<body>




<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <div class="col-md-1">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="width:auto">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{url('/')}}">
          <img src="{{url('shiksha/images/'.$logo->image)}}" class="img-responsive"></a>
        </div>
     </div>
     
     
        <div class="col-md-11">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            
            
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MBA <b class="caret"></b></a>
              <ul class="dropdown-menu multi-level jj">
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Course </a>
                        <ul class="dropdown-menu mm">

                                <li><a href="{{url('/popular_course_mba')}}" style="color:#F00;font-weight:normal">get data here</a></li>

                                 </ul>    
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/exam_cat')}}" style="color:#F00;">Popular Exam</a></li>
 @foreach($exams as $values)
                                <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal">@if(!empty($values->exam)) {{$values->exam}} @else  N/A @endif</a></li>
   @endforeach 
                                   <li><a href="{{url('/exam_mba')}}" style="color:#F00">>All MBA Exams</a></li>
                                        <li><a href="" style="color:#F00;">>Exam Calendar</a></li>
                                 </ul>        
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Colleges By Location </a>
                            <ul class="dropdown-menu mm">
                                         <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal">MBA Colleges in india</a></li>
                                         <li> <a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Bangalore</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Chennai</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Hydrabad</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Kolkata</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Mumbai</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html"style="color:#F00;font-weight:normal">MBA Colleges in Pune</a></li>
                                       
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;">All Locations</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                              <li><a href="{{url('/top_college_mba')}}" style="color:#F00;">Popular Colleges</a></li>
                                        

                                  @foreach($college as $colleges)
                                      <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" > @if(!empty($colleges->college)) {{$colleges->college}} @else  N/A @endif</a></li>
                                        
                                  @endforeach     

                                        <li><a href=""  style="color:#F00;font-weight:normal">MBA College Rnakings</a></li>
                                        <li><a href=""  style="color:#F00">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="#"class="dropdown-toggle" data-toggle="dropdown" >Compare Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/compare_college_mba')}}" style="color:#F00">Popular Colmparison</a></li>
                                        <li><a href="{{url('/compare_college_mba')}}" style="color:#F00;font-weight:normal">Get Data here </a></li>
                                        
                                    </ul>
                                </li>
                                
                                
                       <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges Reviews </a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/college_review_mba')}}" style="color:#F00">Popular  Reviews </a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal">get data here</a></li>
                                     
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00">>All Colleges Review</a></li>
                                        <li><a href="MBA-COLL-REVIEW-WRITE-REVIEW.html" style="color:#F00">>Write a Review</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="{{url('/call_padicator')}}">IMM Call Predictor</a>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ask current Mba Student</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00">Popular Colleges</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}"style="color:#F00;font-weight:normal"> get data here XIME Banglore</a></li>
                                        
                                        <li><a href="{{url('/ask_current_mba_other_mba_college')}}" style="color:#F00">>Other MBA Colleges</a></li>
                                    </ul>
                                </li>
                                
                                
                       <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/mba_alumani_salary_data')}}" style="color:#F00;font-weight:normal">MBA AlumaniSalary Data </a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Questions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                        <li><a href="{{url('/mba_resource_apply_college')}}" style="color:#F00;font-weight:normal">Apply to Colleges</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENGINEERING<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Executive MBA/PGDM</a> </li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Online MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                            <li class="dropdown-submenu">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams</a>
                            <ul class="dropdown-menu mm">
                                 <li><a href="#" style="color:#F00;">Popular Exam</a></li>
                                       <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CMAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">SNAP</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">XAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">MATT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NMAT by GMAC</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">>All MBA Exams</a></li>
                                        <li><a href="" style="color:#F00;">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                            <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges By Location </a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in india</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Bangalore</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Chennai</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Hydrabad</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Kolkata</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Mumbai</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">MBA Colleges in Pune</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00; ">>All Locations</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Colleges</a> </li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Ahemdabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Banglore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">XLRI</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">FMS</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Indore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SIBM Pune</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">MBA College Rnakings</a></li>
                                        <li><a href="" style="color:#F00;">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                          <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Compare Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Colmparison</a></li>
                                        <li><a href="Compare-coll - IMM_A Vs IMM-B.html" style="color:#F00;font-weight:normal">IMM-A vs IMM-B</a></li>
                                        <li><a href="Compare-coll - IMM_A Vs IMM-B.html" style="color:#F00;font-weight:normal">IMM-A vs IMM-C</a></li>
                                        <li><a href="Compare-coll - IMM_A Vs IMM-B.html" style="color:#F00;font-weight:normal">SP Jain Mumbai vs  MDI Gurgaon</a></li>
                                        <li><a href="Compare-coll - IMM_A Vs IMM-B.html" style="color:#F00;font-weight:normal"c>SIES Mumbai vs PUMBA Pune</a></li>
                                        <li><a href="Compare-Coll-Other-Coll.html" style="color:#F00">>Compare MBA Other Colleges</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rank Predictors</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Engineering- Rank Pedicator-COMEDK.html" style="color:#F00;font-weight:normal">COMEDK 2017 Rank Predictor</a></li>
                                        <li><a href="Engineering- Rank Pedicator-COMEDK.html" style="color:#F00;font-weight:normal">JEE Advanced 2017 Rank Predictor</a></li>
                                        <li><a href="Engineering- Rank Pedicator-COMEDK.html" style="color:#F00;font-weight:normal">JEE Main 2017 Rank Predictor</a></li>
                                    </ul>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">College Predictors</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">COMEDK 2017 Rank Predictor</a></li>
                                 <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">JEE Advanced 2017 Rank Predictor</a></li>
                                 <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">CGPET 2017 College Predictor</a></li>
                                 <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">PTU 2017 College Predictor</a></li>
                                 <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">HSTES  2017 College Predictor</a></li>
                                 <li><a href="Engg-Coll-Pedicator CGPET.html" style="color:#F00;font-weight:normal">MHCET 2017 College Predictor</a></li>
                                 </ul>
                               </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges Reviews </a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular  Reviews </a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">IMMs</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">Non IMMs</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">MBA Colleges in Banglore</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">MBA Colleges in Pune</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;font-weight:normal">MBA Colleges in Mumbai</a></li>
                                        <li><a href="Coll Review-IMMS.html" style="color:#F00;">>All Colleges Review</a></li>
                                        <li><a href="COLL-REVIEW-WRITE-REVIEW.html" style="color:#F00;">>Write a Review</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="MBA Pages/IMM Call Padicator.html" class="dropdown-toggle" data-toggle="dropdown">IMM Call Predictor</a>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Questions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                        <li><a href="Resource-Apply-Coll.html" style="color:#F00;font-weight:normal">Apply to Colleges</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                         
                    
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAW<b class="caret"></b></a>
                      
                      <ul class="dropdown-menu multi-level jj">
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                       <li><a href="MBA Pages/Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MBA/PGDM</a></li>
                                       <li><a href="MBA Pages/Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Executive MBA/PGDM</a></li>
                                        <li><a href="MBA Pages/Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance MBA</a></li>
                                        <li><a href="MBA Pages/Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Online MBA</a></li>
                                        <li><a href="MBA Pages/Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Exam</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">CAT</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">CMAT</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">SNAP</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">XAT</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">MATT</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00;font-weight:normal">NMAT by GMAC</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00">>All MBA Exams</a></li>
                                        <li><a href="MBA Pages/Exam-Cat.html" style="color:#F00">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li> <a href="#"  style="color:#F00;">Popular Colleges</a> </li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Ahemdabad</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Banglore</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">XLRI</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">FMS</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Indore</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SIBM Pune</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">MBA College Rnakings</a></li>
                                        <li><a href="MBA Pages/Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="MBA Pages/Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Questions</a></li>
                                        <li><a href="MBA Pages/Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="MBA Pages/Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                    
                    
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DESIGN<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Specialization</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Communication Design</a></li>
                                        <li> <a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Fashion Design</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Industrial/Product Design</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Interior Design</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">>All Design  Specialization </a></li>
                                    </ul>
                                </li>
                                
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Executive MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Online MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Exam</a></li>
                                        <li> <a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CMAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">SNAP</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">XAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" >MATT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NMAT by GMAC</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">>All MBa Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Ahemdabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Banglore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">XLRI</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">FMS</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMM Indore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SIBM Pune</a></li>
                                        <li><a href="#" style="color:#F00;font-weight:normal">MBA College Rnakings</a></li>
                                        <li><a href="#" style="color:#F00;font-weight:normal">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Questions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                         
                         
                    <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MORE COURSES<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hospitality & Travel</a>
                               <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00;">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BHM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.S.c in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;">>All Hospitality  Course</a></li>
                                        
                                        <li><a href="" style="color:#F00;">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IHM Ahemdabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IHM Hydrabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IHM Mumbai</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IHM Banglore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IHM chennai</a></li>
                                        <li><a href="#" style="color:#F00;font-weight:normal">Hotel Management College Ranking</a></li>
                                        
                                         <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">IIHM eCHAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NCHMCT JEE</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">Ecole Hoteliere Lavasa Exam</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00;font-weight:normal">> All Hospitality Exams </a></li>
                                        
                                         <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Ask &  Question</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html"  style="color:#F00;font-weight:normal">News & Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">2D/3D Animation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Graphic/Web Desgin</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Sound & Video Edting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">VFX</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">>All Animation Speicalization</a></li>
                                    </ul>
                                  
                                  
                                  
                          <li class="dropdown-submenu">  
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Animation</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="Popular-Course_Mba.html" style="color:#F00">Popular Course</a></li>
                                <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.S.e Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal">M.S.e Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal">B.S.c in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal">Diploma in Web/ Graphic Design</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in VFX</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in  Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">>All animation Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">MAAC</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Arena Animation</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">FX School</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Ask &  Question</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News & Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">2D/3D Animation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Graphic/Web Desgin</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Sound & Video Edting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">VFX</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">>All Animation Speicalization</a></li>
                                    </ul>
                                </li>
                                
                                
                               <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mass Communication & Media</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.J.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.j.M.C</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.M.M</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in Journalism</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00">>All Mass Comm & Media Course</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">LSR</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IMMC Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Mardas Chirtstan College</a></li>
                                        <li><a href="#" style="color:#F00">>Mass Communication  College Ranking</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">IMMC Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">JMI Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">ACJ  Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">XIC OET </a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Mass Comm & Media Exam</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Advertising</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Event Managementn</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Film & TV</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Journalism</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Music & Sound Production</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Public Relations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Radio</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">>All Mass Comm & Media Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business & Management Studies</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Management Certifications</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html "style="color:#F00;font-weight:normal">Executive MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal"<strong></strong>>Online MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Part-Time MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Management Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Christ University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Mount Carmel College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Ethiraj College</a></li>
                                        <li><a href="" style="color:#F00">>BBA College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">SET BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NPAT BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">SUAT BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">DU JAT </a></li>
                                        <li><a href="Exam-All-Mba-Exams.html"  style="color:#F00">> All Management Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">IT & Software</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance BCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Part-time MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">CCNA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">DOEACC 'O' Level </a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All IT Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Aptech</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Jetking</a></li>
                                        <li><a href="#" style="color:#F00">> BCA College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NIMCET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">WBJEE JECA</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Management Exams> All IT & Software Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">AI & Robotics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Big Data & Analytics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">CAD / CAM / CAE</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Cloud Computing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">CRM</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Databases</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">ERP</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Game Design</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">IT Service Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Mobile App Development</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Networking, Hardware & Security</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Office Suite</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Operating Systems</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Programming</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Project Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Quality Assurance & Testing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All IT Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html"style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                 
                                 
                                 
                                  <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Humanities & Social Sciences</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BSW</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Phil</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MSW</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;" >> All Humanities Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Loyola College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Fergusson College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Hansraj College</a></li>
                                        <li><a href="#" style="color:#F00">> Arts & Humanities College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">JNUEE</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">DUET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">PUBDET</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Anthropology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Archaeology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Communication Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Economics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Geography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">History</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Languages</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Library & Information Science</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Linguistics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Literature</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Philosophy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Political Science</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Psychology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Religious Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Rural Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Social Work</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Sociology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Rural Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Humanities Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Arts (Fine/Visual/Performing)</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;">> All Arts Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Stella Maris College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Sir JJ Institute of Applied Art</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">L S Raheja School of Art</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">Jamia Millia Islamia Entrance</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">PUBDET</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Applied Arts</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Art History & Aesthetics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Ceramics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Dance & Choreography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Decorative Arts</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Film Making</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Graphics Art</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Murals</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Music</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Painting & Drawing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Photography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Sculpture</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Theatre</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Arts Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Science</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Distance M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;">> All Science Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Fergusson College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Miranda House</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">St. Stephen's College</a></li>
                                        <li><a href="#" style="color:#F00">>Science College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">MCAER CET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NEST</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">IIT JAM</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">JEST</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Science Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Architecture & Planning</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Arch</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal"> M.Arch</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Plan</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Architecture Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SPA Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Sir J J College of Architecture</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Chandigarh College of Architecture</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">AAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NATA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">UPAT</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Architecture & Planning Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Environmental</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Landscape</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Rural (Regional)</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Urban</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Architecture Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounting & Commerce</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Com</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Com</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">CA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">CS</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in Accounting</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in Taxation</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Accounting & Commerce Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">MCC Chennai</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Hansraj College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Hindu College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SRCC Delhi</a></li>
                                        <li><a href="#" style="color:#F00;">> Commerce College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">ICAI</a></li>
                                        <li><a href="Exam-Cat.html"  style="color:#F00;font-weight:normal">ICSI</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">ICWAI</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Accounting & Commerce Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Accounting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Taxation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Accounting & Commerce Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Banking, Finance & Insurance</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">CFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">CFP</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">Diploma in Banking & Finance</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Banking & Finance Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">AIMA Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">XIME Bangalore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">ISBF</a></li>
                                        
                                        <li><a href="Exam-Cat.html" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CFA</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aviation</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Cabin Crew / Air Hostess</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Cargo Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Flying / Pilot Training</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Ground Services</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Aircraft Maintenance Engineering</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Aviation Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00"> Top Colleges </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Indian Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Rajiv Gandhi Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html"  style="color:#F00; font-weight:normal">Hindustan Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html"  style="color:#F00;font-weight:normal">Frankfinn</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teaching & Education</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.P.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Voc</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.P.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">D.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Teaching & Education Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">LSR Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Lady Irwin College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Loreto College Kolkata</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SRCC Delhi</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">CTET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">TSTET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">UGC NET</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Teaching & Education Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Middle School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Physical Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Pre Primary & Primary School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Secondary & Sr. Secondary School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Special Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Vocational Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Teaching & Education Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nursing</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">B.Sc. in Nursing</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">M.Sc. in Nursing</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">>All Nursing Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Nursing & Midwifery</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">>All Nursing Specializations</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Medicine & Health Sciences</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MBBS</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MD</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">BMLT</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MPT</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal">MPH</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00">> All Medical Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">AIIMS Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">AFMC Pune</a></li>
                                        <li><a href="#" style="color:#F00">> Medical College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00"> Exams </a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">NEET UG</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">AIIMS MBBS</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal">JIPMER MBBS</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00">> All Medicine Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Alternative Medicine</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Dental</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Dietics & Nutrition</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Medicine</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Paramedical</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Pharmacy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Physiotherapy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Public Health & Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Medical Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beauty & Fitness</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Beauty Culture & Cosmetology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Massage & Spa Therapy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal">Yoga</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00">> All Beauty & Fitness Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Resources</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                        <li><a href="Resources-mba-alumani.html" style="color:#F00;font-weight:normal">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Universities</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00"> Top Central Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">University of Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">JNU Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IGNOU Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Banaras Hindu University</a></li>
                                        
                                        <li><a href="#" style="color:#F00"> Top State Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">University of Mumbain</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Anna University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Gujarat University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">CCS University</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Top Private Universities</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Amity University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Galgotias university</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">LPU Jalandhar</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Chandigarh University</a></li>
                                        
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00"> Top Deemed Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">Manipal University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">IISC Bangalore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">SRM University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal">BIT Mesra</a></li>
                                    </ul>
                                </li>
                            </li>
                       </ul>
                   </li>
                
                
                
                 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDY ABROAD<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colleges</a>
                               <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00"> BACHELORS </a></li>
                                <li><a href="#" style="color:#F00;"> By course </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Btech</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">B.S.c in Hotel Management</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00"> Masters </a></li>
                                        
                                        <li><a href="" style="color:#F00;font-weight:lighter"> By course </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">MBA</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">MS</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">IHM Mumbai</a></li> 
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00">Certificate - Diploma </a></li>
                                        
                                        <li><a href="#" style="color:#F00">By stream </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Business</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Computers</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Engineering</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Humanities</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Law</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Medicine</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Science</a></li> 
                                        
                                        <li><a href="#" style="color:#F00">By stream </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Business</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Computerse</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Engineering</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Humanities</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Law</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Medicine</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Science</a></li>
                                        
                                        <li><a href="#" style="color:#F00">By stream </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Business</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Computerse</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Engineering</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Humanities</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Law</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Medicine</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Scienc</a></li>
                                    </ul>
                                  
                                  
                                  
                                <li class="dropdown-submenu">  
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Countries</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00"> Universities by Country </a></li>
                                <li><a href="Study Pages/Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in Australia</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in Canadan</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in Germany</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in New Zealand</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal" >Universities in Singapore</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in UK</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">Universities in USA</a></li>
                                        <li><a href="Study-Countries-University By Country.html" style="color:#F00">> Explore more countries</a></li>
                                        
                                        <li><a href="" style="color:#F00"> Country Home </a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in USA</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in Canada</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in Australia</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in UK</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in Germany</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in Singapore</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in New Zealand</a></li>
                                        <li><a href="" style="color:#F00;font-weight:normal">Study in Netherlands</a></li>
                                        <li><a href="#" style="color:#F00">> Explore More Countriese</a></li>
                                        
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00"> Rankings </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Top MBA Colleges in UK</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Top MS Colleges in UK</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Top MBA Colleges in USA</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Top UG Business Schools in USA</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Top MS Colleges Abroad</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Graphic/Web Desgin</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">Sound & Video Edting</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal">VFX</a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00">>All Animation Speicalization</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application Process</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00"> Exams </a></li>
                                <li><a href="#" style="color:#F00"> Language Exam </a></li>
                                <li><a href="Study Pages/Study-Countries-University By Country.html" style="color:#F00;font-weight:normal">IELTS</a></li>
                                        <li><a href="Tofel.html" style="color:#F00;font-weight:normal">TOFEL</a></li>
                                        <li><a href="Tofel.html" style="color:#F00;font-weight:normal">PTE</a></li>
                                        <li><a href="Tofel.html" style="color:#F00">Aptitude Exam</a></li>
                                        <li><a href="Tofel.html" style="color:#F00;font-weight:normal">GRE</a></li>
                                        <li><a href="Tofel.html" style="color:#F00;font-weight:normal">GMAT</a></li>
                                        <li><a href="Tofel.html" style="color:#F00;font-weight:normal">SAT</a></li>
                                        
                                        <li><a href="#" style="color:#F00">Application Writing </a></li>
                                        <li><a href="Study-Application-App-Writing.html" style="color:#F00;font-weight:normal">Statement of Purpose(SOP)</a></li>
                                        <li><a href="Study-Application-App-Writing.html" style="color:#F00;font-weight:normal">Student CV</a></li>
                                        <li><a href="Study-Application-App-Writing.html" style="color:#F00;font-weight:normal">Student Visa</a></li>
                                        <li><a href="Study-Application-App-Writing.html" style="color:#F00;font-weight:normal">Admission Essays</a></li>
                                        <li><a href="Study-Application-App-Writing.html" style="color:#F00;font-weight:normal">letter of Recomendation</a></li>
                                    </ul>
                                </li>
                            </li>
                        </ul>
                    </li>
                
                
                
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">COUNSELLING<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Expert Guidance</a>
                                 <ul class="dropdown-menu mm">
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal">Discussions</a></li>
                                    </ul>
                                  
                             <li class="dropdown-submenu">  
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Careers after 12th</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00">By Stream</a></li>
                                <li><a href="Counseling After 12- Science.html" style="color:#F00;font-weight:normal">Science</a></li>
                                        <li><a href="Counseling After 12- Science.html" style="color:#F00;font-weight:normal">Commerce</a></li>
                                        <li><a href="Counseling After 12- Science.html" style="color:#F00;font-weight:normal">Humanities</a></li>
                                        <li><a href="#" style="color:#F00"> Popular Careers </a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Aeronautical Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Chartered Accountant</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Computer Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Aeronautical Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Chartered Accountant</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Computer Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Doctor</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Hotel Manager</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal">Pilot</a></li>
                                        <li><a href="Counselling-Career-After12th-Pop-Car-Other_Careers.html" style="color:#F00">> All other careers</a></li>
                                    </ul>
                                </li>
                            </li>
                       </ul>
                   </li>
                   
         
               
            </ul>
            
            
<div class="col-md-3">
       <ul class="nav navbar-nav">
      <li>
       <button onclick="document.getElementById('myModal').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-user"></span>signup</button>
     
       <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                               
                <div class="modal-body">                                       
                    
                    <div class="col-md-12 col-sm-12 no-padng">
                        <div class="model-r">
                          <center><img src="{{url('shiksha/images/author.png')}}"></center>
                             <form method="post" id="userRegisterFrm" class="log-frm" name="userRegisterFrm">  
                            <ul>
                             <li>First Name</li>
                            <li><input type="text" placeholder="First Name" name="fName" class="form-control"></li>
                             <li>Last Name</li>
                            <li><input type="text" placeholder="Last Name" name="lName" class="form-control"></li>
                            <li>Email</li>
                            <li><input type="text" placeholder="Email Id" name="emailId" class="form-control"></li>
                            <li>Password</li>
                            <li><input type="password" placeholder="Password" name="password" class="form-control"></li>
                            <li>Confirm Password</li>
                            <li><input type="password" placeholder="Confirm Password" name="repassword" class="form-control"></li>
                           <br> 
                           <li><button type="button" name="userRegBtn" class="btn btn-default">Sign Up</button></li>
                             <div style="display:none;" class="sign greenglow">
                                 <li>   <i class="icon-check"></i><br>
                                     <font color="red"> 
                                     User registration successful.<br>
                                      Your login Url already send to your email.
                                     
                                     </font></li>
                          </div>
                           <div style="display:none;" id="regnSuc11" class="sign redglow">
                               <li>   <i class="icon-mail"></i><br>
                                   <font color="red">    Email Exist.</font></li>
                          </div> 
                        </ul>
                    </form>
                        </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
      </li>
      
      
      <li>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span>Login</button>
      
      <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="file:///C|/xampp/htdocs/born-bred-talent/author.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname" placeholder="Email address" required>

      <input type="password" placeholder="Enter Password" name="psw" placeholder="Password" required>
        
     <button type="submit">Login</button><br>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
      </li>
    </ul>
        </div>            
        </div><!--/.nav-collapse -->
        </div>
        
        
    </div>
    
</div>

       

     
       <!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->

    <div class="row exam" style="background:#fff; margin-top:70px">
         <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Third Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="{{url('shiksha/images/SLIDER1.jpg')}}" class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">International School of Management</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
                <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="{{url('shiksha/images/slider2.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                       <h1 data-animation="animated zoomInRight">International School of Management</h1>
                    </div>
                </div>
                <!-- End of Slide -->
                <!-- Third Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="{{url('shiksha/images/slider3.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                       <h1 data-animation="animated zoomInRight">International School of Management</h1>
                    </div>
                </div>
                <!-- End of Slide -->
            </div>
            <!-- End of Wrapper For Slides -->
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End  bootstrap-touch-slider Slider -->
      </div><!-- /row -->
  
<!-- *****************************************************************************************************************
  Empowering
   ***************************************************************************************************************** -->
   <div id="service">
    <div class="container">
      <div class="row centered">
        <div class="col-md-12 col-xs-12 text-center">
          <h3 style="color:#004080;">Empowering millions of students in making the right <br>career and college decision</h3>
        </div>
                    
      </div>
    </div><! --/container -->
   </div><! --/service -->
        <section id="counter_two" class="counter_two">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_counter_two sections text-center">
            <h4 style="color:#fff;">STUDY IN INDIA</h4>
              &nbsp;
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_two_right">
                                            <i class="fa fa-users"></i>
                                            <h2 class="statistic-counter_two">3,800</h2>
                                            <p>COLLEGES & UNIVERSITIES</p>
                                        </div>
                                    </div><!-- End off col-sm-3 -->
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_two_right">
                                            <i class="fa fa-line-chart"></i>
                                            <h2 class="statistic-counter_two">4510</h2>
                                            <p>COLLEGE REVIEWS</p>
                                        </div>
                                    </div><!-- End off col-sm-3 -->
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_two_right">
                                            <i class="fa fa-heart"></i>
                                            <h2 class="statistic-counter_two">2,800</h2>
                                            <p>QUESTIONS ANSWERED</p>
                                        </div>
                                    </div><!-- End off col-sm-3 -->
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_two_right">
                                            <i class="fa fa-gift"></i>
                                            <h2 class="statistic-counter_two">5,500</h2>
                                            <p>CAREERS</p>
                                        </div>
                                    </div>
                                </div><!-- End off col-sm-3 -->
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </div><!-- End off overlay -->
        </section><!-- End off Counter section -->


    
<!-- *****************************************************************************************************************
   EDUCATION & CAREER GUIDANCE
   ***************************************************************************************************************** -->
    <div id="service">
       <div class="container">
        <div class="col-md-12 text-center">
      <h4 style="color:#004080; font-size:30px">EDUCATION & CAREER GUIDANCE</h4>
      <br>
      <p style="color:#004080; font-size:20px">Get guidance from faculty, alumni, exam toppers & industry professionals to help <br> you make the right decision. Also, find information on 180+              careers.</p>
    </div>
      </div>
    </div>     

<!-- *****************************************************************************************************************
   ARTICLES
   ***************************************************************************************************************** -->
    <div id="service">
      <div class="container">
         <div class="col-md-12 col-xs-12">
            <iframe class="embed-responsive-item video-tube" title="YouTube video player" src="https://www.youtube.com/embed/aFZVduNInHg?autoplay="></iframe>
         </div>
      </div>
   </div>  
                  
  <!-- *****************************************************************************************************************
   Popular Courses
   ***************************************************************************************************************** -->
   <div id="portfoliowrap">
        <h3 style="color:#004080; font-size:26px">POPULAR COURSES</h3>
          <div class="portfolio-centered">
            <div class="recentitems portfolio">
        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
          <img src="{{url('shiksha/img/portfolio/Professional-Graphic-Designer.jpg')}}" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">Graphic Design Courses</h3>
                                <a data-rel="prettyPhoto" href="{{url('shiksha/img/portfolio/Professional-Graphic-Designer.jpg')}}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                          </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
                            
                <div class="portfolio-item web-design">
                    <div class="he-wrap tpl6">
          <img src="{{url('shiksha/img/portfolio/engineer.jpg')}}" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">Engineering Courses</h3>
                                <a data-rel="prettyPhoto" href="{{url('shiksha/img/portfolio/engineer.jpg')}}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                          </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
        
                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
          <img src="{{url('shiksha/img/portfolio/gavel-scale-book.jpg')}}" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">B.A. LL.B. Courses</h3>
                                <a data-rel="prettyPhoto" href="{{url('shiksha/img/portfolio/gavel-scale-book.jpg')}}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                          </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
        
                <div class="portfolio-item graphic-design">
                    <div class="he-wrap tpl6">
          <img src="{{url('shiksha/img/portfolio/hotel-management-as-career.jpg')}}" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">Hotel management Courses</h3>
                                <a data-rel="prettyPhoto" href="{{url('shiksha/img/portfolio/hotel-management-as-career.jpg')}}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                          </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
                                        
                <div class="portfolio-item books">
                    <div class="he-wrap tpl6">
          <img src="{{url('shiksha/img/portfolio/fashion.jpg')}}" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                                <h3 class="a1" data-animate="fadeInDown">Arts</h3>
                                <a data-rel="prettyPhoto" href="{{url('shiksha/img/portfolio/fashion.jpg')}}" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                          </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
                    
            </div><!-- portfolio -->
        </div><!-- portfolio container -->
   </div><!--/Portfoliowrap -->
   
   
   <!-- *****************************************************************************************************************
   MIDDLE CONTENT
   ***************************************************************************************************************** -->
  <section class="home-newsletter">
       <div class="container">
            <div class="row">
                 <div class="col-sm-12">
                    <div class="single">
                     <h2>Subscribe to our Newsletter</h2>
                        <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                 <button class="btn btn-theme" type="submit">Subscribe</button>
                                 </span>
                             </div>
                       </div>
                    </div>
               </div>
           </div>
   </section>
   
   
  <!-- *****************************************************************************************************************
   MIDDLE CONTENT
   ***************************************************************************************************************** -->

   <div class="container mtb">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1">
        <h4 style="color:#004080">More About Our Agency.</h4>
          <p style="color:#004080">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when                      an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,                        remaining essentially unchanged. </p>
            <p><br/><a href="#" class="btn btn-theme" style="background-color:#004080; color:#FFF">More Info</a></p>
         </div>
      
         <div class="col-lg-3">
        <h4 style="color:#004080">Frequently Asked</h4>
        <div class="hline"></div>
        <p><a href="#">How cool is this theme?</a></p>
        <p><a href="#">Need a nice good-looking site?</a></p>
        <p><a href="#">Is this theme retina ready?</a></p>
        <p><a href="#">Which version of Font Awesome uses?</a></p>
        <p><a href="#">Free support is integrated?</a></p>
         </div>
      
         <div class="col-lg-3">
        <h4 style="color:#004080">Latest Posts</h4>
        <div class="hline"></div>
        <p><a href="single-post.html">Our new site is live now.</a></p>
        <p><a href="single-post.html">Retina ready is not an option.</a></p>
        <p><a href="single-post.html">Bootstrap 3 framework is the best.</a></p>
        <p><a href="single-post.html">You need this theme, buy it now.</a></p>
        <p><a href="single-post.html">This theme is what you need.</a></p>
        </div>
      
    </div><! --/row -->
  </div><! --/container -->
   
   
  <!-- *****************************************************************************************************************
   TESTIMONIALS
   ***************************************************************************************************************** -->
   <div id="twrap">
    <div class="container centered">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
        <i class="fa fa-comment-o"></i>
        <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took                    a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially                            unchanged."</p>
        <p>Marcel Newman<p>
        <p>WEB DESIGNER - BLACKTIE.CO</p>
        </div>
      </div><! --/row -->
    </div><! --/container -->
   </div><! --/twrap -->
     
   
  <!-- *****************************************************************************************************************
   OUR CLIENTS
   ***************************************************************************************************************** -->
   <div id="cwrap">
     <div class="container">
      <center><div class="row centered">
        <h3 style="color:#004080">FEATURED COLLEGES</h3>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="{{url('shiksha/images/1490951799phpqQeOVE.gif')}}" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="{{url('shiksha/images/1492077692phpYbFhTA.gif')}}" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="{{url('shiksha/images/1495012907phpz1vAEz.gif')}}" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="{{url('shiksha/images/1496207003phpjDLiEr.gif')}}" class="img-responsive">
        </div>
      </div><! --/row --></center>
     </div><! --/container -->
   </div><! --/cwrap -->

@include('shiksha/footer')
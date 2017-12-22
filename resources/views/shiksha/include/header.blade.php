<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{url('shiksha/assets/ico/favicon.ico')}}">
    <title>Suggest</title>
    <link href="{{url('shiksha/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('shiksha/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('shiksha/assets/css/style2.css')}}" rel="stylesheet">
    <link href="{{url('shiksha/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="{{url('shiksha/assets/js/modernizr.js')}}"></script>
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
.doggee:hover>.dropdown-menu {
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
btn.btn-primary {
     width: auto;
      margin:0 auto;
   }
   .btn-primary {
    background-color:none;
    border: none;
    color: #fff;
    font-size: 18px;
  padding: 0 22px;
  border-radius: 6px;
  margin-top:20px;
    line-height:35px ;

   }
   .btn-primary:hover {
     background:none;
     border: none;
   }
   label{
     color:#004080;
     height:40px;
   }

.fa {
  padding: 20px;
  font-size: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
</style>

 </head>
 <body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="row">
     <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="width:auto">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
    <div class="container">
    <div class="">
        
     </div>
      <div class="col-md-9">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar">   
            </ul>
            <ul class="nav navbar-nav">
                <li class="doggee">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">MBA <b class="caret"></b></a>

              <ul class="dropdown-menu multi-level jj">
                        
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                         <li><a href="{{url('/popular_course_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">Executive MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">Distance MBA</a></li>
                                        <li><a href="{{url('/popular_course_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">Online MBA</a></li>
                                        <li><a href="{{url('/popular_course_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">Part -Time MBA</a></li>
                 
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Exam</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">CAT</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">CMAT</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">SNAP</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">XAT</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">MATT</a></li>
                                        <li><a href="{{url('/exam_cat')}}" style="color:#F00;font-weight:normal" rel="nofollow">NMAT by GMAC</a></li>
                                        <li><a href="{{url('/exam_mba')}}" style="color:#F00" rel="nofollow">>All MBa Exams</a></li>
                                        <li><a href="{{url('/exam_calender')}}" style="color:#F00" rel="nofollow">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Colleges By Location </a>
                            <ul class="dropdown-menu mm">
                                         <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in india</a></li>
                                         <li> <a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Bangalore</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Chennai</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Hydrabad</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Kolkata</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Mumbai</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}"style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Pune</a></li>
                                        <li><a href="{{url('/college_by_location_mba')}}" style="color:#F00;" rel="nofollow">All Locations</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Colleges</a></li>
                                        <li><a href="{{url('/top_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Ahemdabad</a></li>
                                        <li><a href="{{url('/top_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Banglore</a></li>
                                        <li><a href="{{url('/top_college_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">XLRI</a></li>
                                        <li><a href="{{url('/top_college_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">FMS</a></li>
                                        <li><a href="{{url('/top_college_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">IMM Indore</a></li>
                                        <li><a href="{{url('/top_college_mba')}}"  style="color:#F00;font-weight:normal" rel="nofollow">SIBM Pune</a></li>
                                        <li><a href="{{url('/top_rank')}}" style="color:#F00;" rel="nofollow">MBA College Rnakings</a></li>
                                        <li><a href="{{url('/top_rank')}}"  style="color:#F00" rel="nofollow">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Compare Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">Popular Colmparison</a></li>
                                        <li><a href="{{url('/compare_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM-A vs IMM-B</a></li>
                                        <li><a href="{{url('/compare_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM-A vs IMM-C</a></li>
                                        <li><a href="{{url('/compare_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">SP Jain Mumbai vs  MDI Gurgaon</a></li>
                                        <li><a href="{{url('/compare_college_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIES Mumbai vs PUMBA Pune</a></li>
                                        <li><a href="{{url('/other_compare_college')}}" style="color:#F00" rel="nofollow">>Compare MBA Other Colleges</a></li>
                                    </ul>
                                </li>
                                
                                
                       <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Colleges Reviews </a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">Popular  Reviews </a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMMs</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">Non IMMs</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Banglore</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Pune</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Mumbai</a></li>
                                        <li><a href="{{url('/college_review_mba')}}" style="color:#F00" rel="nofollow">>All Colleges Review</a></li>
                                        <li><a href="{{url('/write_review')}}" style="color:#F00" rel="nofollow">>Write a Review</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="{{url('/call_padicator')}}"  rel="nofollow">IMM Call Predictor</a>
                                </li>
                                
                                
                                <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Ask current Mba Student</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">Popular Colleges</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">XIME Banglore</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIBM Pune</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">JBIMS Mumbai</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">FMS</a></li>
                                        <li><a href="{{url('/ask_current_mba_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Ahemdabad</a></li>
                                        <li><a href="{{url('/ask_current_mba_other_mba_college')}}" style="color:#F00" rel="nofollow">>Other MBA Colleges</a></li>
                                    </ul>
                                </li>
                                
                                
                       <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Resources</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/mba_alumani_salary_data')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA AlumaniSalary Data </a></li>
                                        <li><a href="{{url('/mba_alumani_salary_data')}}" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Questions</a></li>
                                        <li><a href="{{url('/mba_alumani_salary_data')}}" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="{{url('/mba_alumani_salary_data')}}" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                        <li><a href="{{url('/mba_resource_apply_college')}}" style="color:#F00;font-weight:normal" rel="nofollow">Apply to Colleges</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                    <li class="doggee">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">ENGINEERING<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Executive MBA/PGDM</a> </li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Distance MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Online MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                            <li class="dropdown-submenu">
                             <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Exams</a>
                            <ul class="dropdown-menu mm">
                                 <li><a href="javascript:void(0)" style="color:#F00;">Popular Exam</a></li>
                                       <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CMAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SNAP</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">XAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MATT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">NMAT by GMAC</a></li>
                                        <li><a href="{{url('/exam_engineering')}}" style="color:#F00" rel="nofollow">>All MBA Exams</a></li>
                                        <li><a href="{{url('/exam_calender_engineering')}}" style="color:#F00;" rel="nofollow">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                            <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Colleges By Location </a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in india</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Bangalore</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Chennai</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Hydrabad</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Kolkata</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Mumbai</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Pune</a></li>
                                        <li><a href="{{url('/college_by_location_engineering')}}" style="color:#F00;" rel="nofollow">>All Locations</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow" >Popular Colleges</a> </li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Ahemdabad</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Banglore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow" >XLRI</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">FMS</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Indore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIBM Pune</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">MBA College Rnakings</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                          <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Compare Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Colmparison</a></li>
                                        <li><a href="{{url('/compare_college_engineering')}}" style="color:#F00;font-weight:normal" >IMM-A vs IMM-B</a></li>
                                        <li><a href="{{url('/compare_college_engineering')}}" style="color:#F00;font-weight:normal" >IMM-A vs IMM-C</a></li>
                                        <li><a href="{{url('/compare_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SP Jain Mumbai vs  MDI Gurgaon</a></li>
                                        <li><a href="{{url('/compare_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIES Mumbai vs PUMBA Pune</a></li>
                                        <li><a href="{{url('/other_compare_college_engineering')}}" style="color:#F00" rel="nofollow">>Compare MBA Other Colleges</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Rank Predictors</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/rank_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">COMEDK 2017 Rank Predictor</a></li>
                                        <li><a href="{{url('/rank_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">JEE Advanced 2017 Rank Predictor</a></li>
                                        <li><a href="{{url('/rank_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">JEE Main 2017 Rank Predictor</a></li>
                                    </ul>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">College Predictors</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">COMEDK 2017 Rank Predictor</a></li>
                                 <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">JEE Advanced 2017 Rank Predictor</a></li>
                                 <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">CGPET 2017 College Predictor</a></li>
                                 <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal " rel="nofollow">PTU 2017 College Predictor</a></li>
                                 <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">HSTES  2017 College Predictor</a></li>
                                 <li><a href="{{url('/college_predicator')}}" style="color:#F00;font-weight:normal" rel="nofollow">MHCET 2017 College Predictor</a></li>
                                 </ul>
                               </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Colleges Reviews </a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular  Reviews </a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMMs</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">Non IMMs</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Delhi-NCR</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Banglore</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Pune</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA Colleges in Mumbai</a></li>
                                        <li><a href="{{url('/college_review_engineering')}}" style="color:#F00;" rel="nofollow">>All Colleges Review</a></li>
                                        <li><a href="{{url('/write_review_engineering')}}" style="color:#F00;" rel="nofollow">>Write a Review</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="{{url('/call_padicator_engineering')}}" rel="nofollow">IMM Call Predictor</a>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Resources</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Questions</a></li>
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="{{url('/news_article_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                        <li><a href="{{url('/engineering_resource_apply_college')}}" style="color:#F00;font-weight:normal" rel="nofollow">Apply to Colleges</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                         
                    
                    <li class="doggee">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">LAW<b class="caret"></b></a>
                      
                      <ul class="dropdown-menu multi-level jj">
                        
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                       <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA/PGDM</a></li>
                                       <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Executive MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Distance MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Online MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                           <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Exam</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CMAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SNAP</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">XAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal"  rel="nofollow">MATT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">NMAT by GMAC</a></li>
                                        <li><a href="{{url('/exam_engineering')}}" style="color:#F00" rel="nofollow">>All MBA Exams</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00" rel="nofollow">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                         <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li> <a href="javascript:void(0)"  style="color:#F00;" rel="nofollow">Popular Colleges</a> </li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Ahemdabad</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Banglore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">XLRI</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">FMS</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Indore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIBM Pune</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">MBA College Rnakings</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Resources</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Questions</a></li>
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="{{url('/news_article_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                    
                    
                    <li class="doggee">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">DESIGN<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Popular Specialization</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Communication Design</a></li>
                                        <li> <a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Fashion Design</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Industrial/Product Design</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Interior Design</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00" rel="nofollow">>All Design  Specialization </a></li>
                                    </ul>
                                </li>
                                
                        
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Popular Course</a>
                            <ul class="dropdown-menu mm">
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Executive MBA/PGDM</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Distance MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Online MBA</a></li>
                                        <li><a href="{{url('/popular_course')}}" style="color:#F00;font-weight:normal" rel="nofollow">Part -Time MBA</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Exams</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Exam</a></li>
                                        <li> <a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">CMAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SNAP</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">XAT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">MATT</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">NMAT by GMAC</a></li>
                                        <li><a href="{{url('/exam_engineering')}}" style="color:#F00" rel="nofollow">>All MBa Exams</a></li>
                                        <li><a href="{{url('/exam_cat_engineering')}}" style="color:#F00" rel="nofollow">>Exam Calendar</a></li>
                                    </ul>
                                </li>
                                
                                
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Top Colleges</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow">Popular Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IMM Ahemdabad</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Banglore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">XLRI</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">FMS</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">IMM Indore</a></li>
                                        <li><a href="{{url('/top_college_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">SIBM Pune</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">MBA College Rnakings</a></li>
                                        <li><a href="{{url('/top_rank_engineering')}}" style="color:#F00;" rel="nofollow">Exeutive MBA College Rnakings</a></li>
                                    </ul>
                                </li>
                                
                                
                          <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Resources</a>
                            <ul class="dropdown-menu mm">
                                <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Questions</a></li>
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="{{url('/news_article_engineering')}}" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </li>
                         
                         
                    <li class="doggee">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">MORE COURSES<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Hospitality & Travel</a>
                               <ul class="dropdown-menu mm">
                                <li><a href="#" style="color:#F00; " rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BHM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.S.c in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;" rel="nofollow">>All Hospitality  Course</a></li>
                                        
                                        <li><a href="" style="color:#F00;" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IHM Ahemdabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IHM Hydrabad</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow" >IHM Mumbai</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow" >IHM Banglore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IHM chennai</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00;font-weight:normal" rel="nofollow">Hotel Management College Ranking</a></li>
                                        
                                         <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">IIHM eCHAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NCHMCT JEE</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">Ecole Hoteliere Lavasa Exam</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00;font-weight:normal" rel="nofollow">> All Hospitality Exams </a></li>
                                        
                                         <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask &  Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html"  style="color:#F00;font-weight:normal" rel="nofollow">News & Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">2D/3D Animation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Graphic/Web Desgin</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Sound & Video Edting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">VFX</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">>All Animation Speicalization</a></li>
                                    </ul>
                                  
                                  
                                  
                          <li class="dropdown-submenu">  
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Animation</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.S.e Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal" rel="nofollow">M.S.e Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal" rel="nofollow">B.S.c in Hotel Management</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Web/ Graphic Design</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in VFX</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in  Animation</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">>All animation Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">MAAC</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Arena Animation</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">FX School</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask &  Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html"  style="color:#F00;font-weight:normal" rel="nofollow">News & Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">2D/3D Animation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Graphic/Web Desgin</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Sound & Video Edting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">VFX</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">>All Animation Speicalization</a></li>
                                    </ul>
                                </li>
                                
                                
                               <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Mass Communication & Media</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.J.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.j.M.C</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.M.M</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Journalism</a></li>
                                        <li><a href="Popular-Course_Mba.html"style="color:#F00" rel="nofollow">>All Mass Comm & Media Course</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">LSR</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IMMC Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Mardas Chirtstan College</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">>Mass Communication  College Ranking</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">IMMC Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">JMI Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">ACJ  Enterance Exam</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">XIC OET </a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Mass Comm & Media Exam</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specialization</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Advertising</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Event Managementn</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Film & TV</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Journalism</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Music & Sound Production</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Public Relations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Radio</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">>All Mass Comm & Media Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Business & Management Studies</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Management Certifications</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html "style="color:#F00;font-weight:normal" rel="nofollow">Executive MBA/PGDM</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Distance MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:norma" rel="nofollow">Online MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Part-Time MBA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Management Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Christ University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Mount Carmel College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Ethiraj College</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">>BBA College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">SET BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NPAT BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">SUAT BBA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">DU JAT </a></li>
                                        <li><a href="Exam-All-Mba-Exams.html"  style="color:#F00" rel="nofollow">> All Management Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">IT & Software</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Distance BCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow"> M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Part-time MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Distance MCA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">CCNA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">DOEACC 'O' Level </a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All IT Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Aptech</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Jetking</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">> BCA College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NIMCET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">WBJEE JECA</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Management Exams> All IT & Software Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">AI & Robotics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Big Data & Analytics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">CAD / CAM / CAE</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Cloud Computing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">CRM</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Databases</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">ERP</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Game Design</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">IT Service Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Mobile App Development</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Networking, Hardware & Security</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Office Suite</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow"> Operating Systems</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Programming</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Project Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Quality Assurance & Testing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All IT Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html"  style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                 
                                 
                                 
                                  <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Humanities & Social Sciences</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BSW</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.A.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Phil</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MSW</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;" rel="nofollow" >> All Humanities Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00"  rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Loyola College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Fergusson College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Hansraj College</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">> Arts & Humanities College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">JNUEE</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">DUET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">PUBDET</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow"> Anthropology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Archaeology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Communication Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Economics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Geography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">History</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Languages</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Library & Information Science</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Linguistics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Literature</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Philosophy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Political Science</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Psychology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Religious Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Rural Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Social Work</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Sociology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Rural Studies</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Humanities Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html"  style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Arts (Fine/Visual/Performing)</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;" rel="nofollow">> All Arts Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Stella Maris College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Sir JJ Institute of Applied Art</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">L S Raheja School of Art</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">Jamia Millia Islamia Entrance</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">PUBDET</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Applied Arts</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Art History & Aesthetics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Ceramics</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Dance & Choreography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Decorative Arts</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Film Making</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow"> Graphics Art</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Murals</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Music</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Painting & Drawing</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Photography</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Sculpture</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow" >Theatre</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Arts Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Science</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Distance B.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Distance M.Sc.</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00; " rel="nofollow">> All Science Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow" >Fergusson College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Miranda House</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">St. Stephen's College</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">>Science College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">MCAER CET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NEST</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">IIT JAM</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">JEST</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Science Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Architecture & Planning</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Arch</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow"> M.Arch</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Plan</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Architecture Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">SPA Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Sir J J College of Architecture</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Chandigarh College of Architecture</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal " rel="nofollow">AAT</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NATA</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">UPAT</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Architecture & Planning Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Environmental</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Landscape</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Rural (Regional)</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Urban</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Architecture Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Accounting & Commerce</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Com</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Com</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">CA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">CS</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Accounting</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Taxation</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Accounting & Commerce Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">MCC Chennai</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Hansraj College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Hindu College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">SRCC Delhi</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00;" rel="nofollow">> Commerce College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">ICAI</a></li>
                                        <li><a href="Exam-Cat.html"  style="color:#F00;font-weight:normal" rel="nofollow">ICSI</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">ICWAI</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Accounting & Commerce Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Accounting</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Taxation</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Accounting & Commerce Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow"> Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Banking, Finance & Insurance</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">CFA</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">CFP</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">Diploma in Banking & Finance</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Banking & Finance Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">AIMA Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">XIME Bangalore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">ISBF</a></li>
                                        
                                        <li><a href="Exam-Cat.html" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">CFA</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Aviation</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Cabin Crew / Air Hostess</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow"> Cargo Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Flying / Pilot Training</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Ground Services</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Aircraft Maintenance Engineering</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Aviation Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow"> Top Colleges </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Indian Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Rajiv Gandhi Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html"  style="color:#F00; font-weight:normal" rel="nofollow">Hindustan Aviation Academy</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html"  style="color:#F00;font-weight:normal" rel="nofollow">Frankfinn</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Teaching & Education</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.P.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow"> B.Voc</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow"> M.P.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">D.Ed</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Teaching & Education Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">LSR Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Lady Irwin College</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Loreto College Kolkata</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">SRCC Delhi</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Exams</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">CTET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow" >TSTET</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">UGC NET</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Teaching & Education Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Middle School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Physical Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Pre Primary & Primary School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Secondary & Sr. Secondary School</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Special Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Vocational Education</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Teaching & Education Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal " rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Nursing</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">B.Sc. in Nursing</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">M.Sc. in Nursing</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">>All Nursing Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Nursing & Midwifery</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">>All Nursing Specializations</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Medicine & Health Sciences</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Course</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MBBS</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MD</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">BMLT</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MPT</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00;font-weight:normal" rel="nofollow">MPH</a></li>
                                        <li><a href="Popular-Course_Mba.html" style="color:#F00" rel="nofollow">> All Medical Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Colleges</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">AIIMS Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">AFMC Pune</a></li>
                                        <li><a href="top-ranking.html" style="color:#F00" rel="nofollow">> Medical College Rankings</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow"> Exams </a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">NEET UG</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">AIIMS MBBS</a></li>
                                        <li><a href="Exam-Cat.html" style="color:#F00;font-weight:normal" rel="nofollow">JIPMER MBBS</a></li>
                                        <li><a href="Exam-All-Mba-Exams.html" style="color:#F00" rel="nofollow">> All Medicine Exams</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Alternative Medicine</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Dental</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Dietics & Nutrition</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Medicine</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Paramedical</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Pharmacy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Physiotherapy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow"> Public Health & Management</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Medical Specializations</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal" rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                                <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Beauty & Fitness</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">Popular Specializations</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Beauty Culture & Cosmetology</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Massage & Spa Therapy</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00;font-weight:normal" rel="nofollow">Yoga</a></li>
                                        <li><a href="Coll-By-Loc-Mba In India.html" style="color:#F00" rel="nofollow">> All Beauty & Fitness Courses</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Resources</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="Ask-curr-Mba-student-XIME.html" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                        <li><a href="More-Course-Hosp-Res-news.html" style="color:#F00;font-weight:normal " rel="nofollow">News and Articles</a></li>
                                    </ul>
                                </li>
                                
                                
                                 <li class="dropdown-submenu">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Universities</a>
                                        <ul class="dropdown-menu mm">
                                        <li><a href="#" style="color:#F00" rel="nofollow"> Top Central Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">University of Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">JNU Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IGNOU Delhi</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Banaras Hindu University</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow"> Top State Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">University of Mumbain</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Anna University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Gujarat University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">CCS University</a></li>
                                        
                                        <li><a href="#" style="color:#F00" rel="nofollow">Top Private Universities</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Amity University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Galgotias university</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">LPU Jalandhar</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Chandigarh University</a></li>
                                        
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00" rel="nofollow"> Top Deemed Universities </a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">Manipal University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">IISC Bangalore</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">SRM University</a></li>
                                        <li><a href="Top-Coll-IMM_Ahemdabad.html" style="color:#F00;font-weight:normal" rel="nofollow">BIT Mesra</a></li>
                                    </ul>
                                </li>
                            </li>
                       </ul>
                   </li>
                
                
                
                 <li class="doggee">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">STUDY ABROAD<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Colleges</a>
                               <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow"> BACHELORS </a></li>
                                <li><a href="javascript:void(0)" style="color:#F00;" rel="nofollow"> By course </a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Btech</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">B.S.c in Hotel Management</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00" rel="nofollow"> Masters </a></li>
                                        
                                        <li><a href="javascript:void(0)" style="color:#F00;font-weight:lighter" rel="nofollow"> By course </a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">MBA</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">MS</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">IHM Mumbai</a></li> 
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00" rel="nofollow">Certificate - Diploma </a></li>
                                        
                                        <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">By stream </a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Business</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Computers</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Engineering</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Humanities</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Law</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Medicine</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Science</a></li> 
                                        
                                        <li><a href="javascript:void(0)" style="color:#F00"  rel="nofollow">By stream </a></li>
                                        <li><a href="study-Coll-Bachlor-Course-Btech.html" style="color:#F00;font-weight:normal" rel="nofollow">Business</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Computerse</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Engineering</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Humanities</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow" >Law</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Medicine</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Science</a></li>
                                        
                                        <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">By stream </a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Business</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Computerse</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal " rel="nofollow">Engineering</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Humanities</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Law</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Medicine</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Scienc</a></li>
                                    </ul>
                                  
                                  
                                  
                                <li class="dropdown-submenu">  
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Countries</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow"> Universities by Country </a></li>
                                <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in Australia</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in Canadan</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in Germany</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in New Zealand</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow" >Universities in Singapore</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in UK</a></li>
                                        <li><a href="{{url('/university_by_country')}}" style="color:#F00;font-weight:normal" rel="nofollow">Universities in USA</a></li>
                                        <li><a href="{{url('/country_by_university')}}" style="color:#F00" rel="nofollow">> Explore more countries</a></li>
                                        
                                        <li><a href="{{url('/country_home')}}" style="color:#F00" rel="nofollow"> Country Home </a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in USA</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal"  rel="nofollow"> Study in Canada</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in Australia</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in UK</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in Germany</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in Singapore</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in New Zealand</a></li>
                                        <li><a href="{{url('/country_home')}}" style="color:#F00;font-weight:normal" rel="nofollow">Study in Netherlands</a></li>
                                        <li><a href="{{url('/country_by_university')}}" style="color:#F00" rel="nofollow">> Explore More Countriese</a></li>
                                        
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00" rel="nofollow"> Rankings </a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Top MBA Colleges in UK</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Top MS Colleges in UK</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Top MBA Colleges in USA</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Top UG Business Schools in USA</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Top MS Colleges Abroad</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Graphic/Web Desgin</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">Sound & Video Edting</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00;font-weight:normal" rel="nofollow">VFX</a></li>
                                        <li><a href="{{url('/study_abroad_course_btech')}}" style="color:#F00" rel="nofollow">>All Animation Speicalization</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown-submenu">  
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Application Process</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00"  rel="nofollow"> Exams </a></li>
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow"> Language Exam </a></li>
                                <li><a href="{{url('/country_by_university')}}" style="color:#F00;font-weight:normal" rel="nofollow">IELTS</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00;font-weight:normal" rel="nofollow">TOFEL</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00;font-weight:normal" rel="nofollow">PTE</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00" rel="nofollow">Aptitude Exam</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00;font-weight:normal" rel="nofollow">GRE</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00;font-weight:normal" rel="nofollow">GMAT</a></li>
                                        <li><a href="{{url('/tofel')}}" style="color:#F00;font-weight:normal" rel="nofollow">SAT</a></li>
                                        
                                        <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">Application Writing </a></li>
                                        <li><a href="{{url('/study_app_writting')}}" style="color:#F00;font-weight:normal" rel="nofollow">Statement of Purpose(SOP)</a></li>
                                        <li><a href="{{url('/study_app_writting')}}" style="color:#F00;font-weight:normal" rel="nofollow">Student CV</a></li>
                                        <li><a href="{{url('/study_app_writting')}}" style="color:#F00;font-weight:normal" rel="nofollow">Student Visa</a></li>
                                        <li><a href="{{url('/study_app_writting')}}" style="color:#F00;font-weight:normal" rel="nofollow">Admission Essays</a></li>
                                        <li><a href="{{url('/study_app_writting')}}" style="color:#F00;font-weight:normal" rel="nofollow">letter of Recomendation</a></li>
                                    </ul>
                                </li>
                            </li>
                        </ul>
                    </li>
                
                
                
                <li class="doggee">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">COUNSELLING<b class="caret"></b></a>
                      <ul class="dropdown-menu multi-level jj">
                      <li class="dropdown-submenu">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Get Expert Guidance</a>
                                 <ul class="dropdown-menu mm">
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Ask a Question</a></li>
                                        <li><a href="{{url('/ask_current_engineering_student')}}" style="color:#F00;font-weight:normal" rel="nofollow">Discussions</a></li>
                                    </ul>
                                  
                             <li class="dropdown-submenu">  
                                 <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">Careers after 12th</a>
                                <ul class="dropdown-menu mm">
                                <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow">By Stream</a></li>
                                <li><a href="{{url('/career_after_12_science')}}" style="color:#F00;font-weight:normal" rel="nofollow">Science</a></li>
                                        <li><a href="{{url('/career_after_12_science')}}" style="color:#F00;font-weight:normal" rel="nofollow">Commerce</a></li>
                                        <li><a href="{{url('/career_after_12_science')}}" style="color:#F00;font-weight:normal" rel="nofollow">Humanities</a></li>
                                        <li><a href="javascript:void(0)" style="color:#F00" rel="nofollow"> Popular Careers </a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Aeronautical Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Chartered Accountant</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Computer Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Aeronautical Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Chartered Accountant</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" <strong></strong>>Computer Engineer</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Doctor</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow">Hotel Manager</a></li>
                                        <li><a href="coun Aft 12-_popular car _Docter.html" style="color:#F00;font-weight:normal" rel="nofollow" >Pilot</a></li>
                                        <li><a href="Counselling-Career-After12th-Pop-Car-Other_Careers.html" style="color:#F00" rel="nofollow">> All other careers</a></li>
                                    </ul>
                                </li>
                            </li>
                       </ul>
                   </li>
                   
         
               
            </ul>
            
            
            
        </div><!--/.nav-collapse -->
        </div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
   $('#signup').click(function(){
    $('#myModal').modal('show');
    $('#myModal').modal('show');
});
});
</script>
         <div class="col-md-1">
           <ul class="nav navbar-nav bb">
             <li>
                <button id="signup" style="width:auto;"><span class="glyphicon glyphicon-user"></span>Signup</button> 
                  <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-body">                                       
                            <div class="col-md-12 col-sm-12 no-padng">
                              <div class="model-r">
                                 <center><img src="{{url('shiksha/assets/images/author.png')}}"></center>
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
                                           </font>
                                        </li>
                                        </div>
                                        <div style="display:none;" id="regnSuc11" class="sign redglow">
                                        <li>   <i class="icon-mail"></i><br>
                                        <font color="red">    Email Exist.</font>
                                        </li>
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
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in">Login</button>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
           <div class="modal-dialog modal-lg">
             <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#004080">LOGIN </h4>
                </div>
                     <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                <div class="tab-content">
                                   <div class="tab-pane active" id="Login">
                                      <form role="form" class="form-horizontal">
                                          <div class="form-group">
                                              <label for="email" class="col-sm-2 control-label">
                                                  Email</label>
                                              <div class="col-sm-10">
                                                  <input type="email" class="form-control" id="email1" placeholder="Email" />
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                  Password</label>
                                              <div class="col-sm-10">
                                                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="password"/>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-sm-2">
                                              </div>
                                              <div class="col-sm-10">
                                                  <button type="submit" class="btn btn-primary btn-sm">
                                                      Submit</button>
                                                      <br>
                                                      &nbsp;
                                                  <a href="javascript:;">Forgot your password?</a>
                                              </div>
                                          </div>
                                     </form>
                                 </div>
                           </div>
                        </div>
                    </div>
                </div>
           </div>
     </div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
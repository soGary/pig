<?php if (!defined('THINK_PATH')) exit();?><html>
        <head>
       <?php if($zd['status'] == 1): echo ($zd['code']); endif; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        
		
        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/114/iscroll.css" media="all">
<!-- <link href="<?php echo RES;?>/css/114/cate14_.css" rel="stylesheet" type="text/css"> -->
<link href="<?php echo RES;?>/css/allcss/cate12_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
<style>

 
</style>
<script src="<?php echo RES;?>/css/114/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>

</head>

<body id="cate14">
<!--背景音乐-->
<?php if($homeInfo['musicurl'] != false): ?><style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('<?php echo RES;?>/images/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 20px;
}
.btn_music.on {
    background-image: url("<?php echo RES;?>/images/stop.png");
}

</style>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>

var playbox = (function(){
	//author:eric_wu
	var _playbox = function(){
		var that = this;
		that.box = null;
		that.player = null;
		that.src = null;
		that.on = false;
		//
		that.autoPlayFix = {
			on: true,
			//evtName: ("ontouchstart" in window)?"touchend":"click"
			evtName: ("ontouchstart" in window)?"touchstart":"mouseover"
			
		}

	}
	_playbox.prototype = {
		init: function(box_ele){
			this.box = "string" === typeof(box_ele)?document.getElementById(box_ele):box_ele;
			this.player = this.box.querySelectorAll("audio")[0];
			this.src = this.player.src;
			this.init = function(){return this;}
			this.autoPlayEvt(true);
			return this;
		},
		play: function(){
			if(this.autoPlayFix.on){
				this.autoPlayFix.on = false;
				this.autoPlayEvt(false);
			}
			this.on = !this.on;
			if(true == this.on){
				this.player.src = this.src;
				this.player.play();
			}else{
				this.player.pause();
				this.player.src = null;
			}
			if("function" == typeof(this.play_fn)){
				this.play_fn.call(this);
			}
		},
		handleEvent: function(evt){
			this.play();
		},
		autoPlayEvt: function(important){
			if(important || this.autoPlayFix.on){
				document.body.addEventListener(this.autoPlayFix.evtName, this, false);
			}else{
				document.body.removeEventListener(this.autoPlayFix.evtName, this, false);
			}
		}
	}
	//
	return new _playbox();
})();

playbox.play_fn = function(){
	this.box.className = this.on?"btn_music on":"btn_music";
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	playbox.init("playbox");
	/*
	setTimeout(function() {
		// IE
		if(document.all) {
			document.getElementById("playbox").click();
		}
		// 其它浏览器
		else {
			var e = document.createEvent("MouseEvents");
			e.initEvent("click", true, true);
			document.getElementById("playbox").dispatchEvent(e);
		}
	}, 2000);
	*/
});

</script>
<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio id="audio" loop src="<?php echo ($homeInfo["musicurl"]); ?>"></audio></span><?php endif; ?>
<div class="banner">
<div id="wrapper" style="overflow: hidden;">
<div id="scroller" style="width: <?php echo ($num*260); ?>px; -webkit-transition: 0ms; transition: 0ms;">
<ul id="thelist">
               
    <?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>
        <p><?php echo ($so["info"]); ?></p>
        <img src="<?php echo ($so["img"]); ?>" style="width: 260px;">
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
 

</ul>
</div>
</div>
    <div id="nav">
<div id="prev" onClick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,3);return false">← prev</div>
<ul id="indicator">
            
<?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; ?>
 
</ul>
<div id="next" onClick="myScroll.scrollToPage(&#39;next&#39;, 0,400,3);return false">next →</div>
</div>
    <div class="clr"></div>
</div>

<div class="mainmenu">
<ul><div id="insert1"></div>
   
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="menubtn">
                            <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" style="<?php if($tplinfo['tpltypeid'] == 12 || $tplinfo['tpltypeid'] == 144 || $tplinfo['tpltypeid'] == 213 || $tplinfo['tpltypeid'] == 235): ?>background-color: rgba(231, 231, 231, 0.6);color:#000;<?php else: endif; ?>"><?php echo ($vo["name"]); ?></a>
                        </div>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
 

        <div id="insert2"></div>
        
        <div class="clr"></div>
</ul>
</div>

 
<div style="display:none"> </div>
<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;  

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 


</script>

   <div class="copyright" style="text-align:center;margin-top:10px">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>

 <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> <style type="text/css">
body { margin-bottom:60px !important; }
ul, li { list-style:none; margin:0;}
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; transition: all 100ms ease-out; -webkit-transition: all 100ms ease-out; }
.top_bar { position:fixed; bottom:0; right:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; right: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-right: -45px; }
.top_menu>li { min-width: 86px; padding: 0 10px; height:32px; border-radius:32px; box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25); background:#B70000; margin-bottom: 23px; margin-right: 23px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:26px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; }
.top_menu>li a img { display: block; width: 24px; height: 24px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
 .top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;
}
.top_menu>li.on:nth-of-type(5) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;
}
.top_menu>li.on:nth-of-type(6) {
-webkit-transform: translate(-45px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;
}

/**/
.top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(-45px, 280px) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(-45px, 235px) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(-45px, 190px) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(-45px, 145px) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(-45px, 100px) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(-45px, 55px) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;
}
.top_menu>li.out { width: 20px; height: 20px; min-width: 20px; border-radius: 20px; padding: 0; opacity: 0; }
.top_menu>li.out a { display:none; }
/**/
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>

<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
      <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="themeStyle out" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
  </nav>
</div>

<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
</script> <?php if($home['start'] == 1): ?><style>
*{
	margin:0;
	outline:none;
}

body{
   background:#000;
}

a:link,a:visited {
	color:#FFF;
	text-decoration:none;
}

a:hover,a:active {
	color:#FFF;
	text-decoration:none;
}

#logo{
	background:url(<?php echo ($staticPath); ?>/tpl/static/home/img/lamborghini.png) no-repeat center bottom;
	background-size:100% auto;
	position:absolute;
	width:20px;
	height:50px;
	top:50px;
	left:20px;
	display:none;
}

.container{
	background:url(<?php echo ($staticPath); ?>/tpl/static/home/img/splash-bg-small.jpg) top center no-repeat #000;
	position:absolute;
	width:100%;
	max-width:640px;
	height:100%;
	background-size:100% 50%;
	z-index: 100;
	position: absolute;
	top: 0;
	left: 0px;
}

.titles{
    text-align:center;
    font:30px 'Bickham Script Pro', 'Edwardian Script ITC', 'Palace Script MT', Zapfino, cursive;
	text-shadow:0 0 30px #fff;
	color:#fff;
	margin-top:80px;
	display:none;
	width:100px;
	margin-left:60px;
}



.car{
	position:absolute;
	left:50%;
	top:90px;
	width:200px;
	height:200px;
	margin-left:-95px;
	background:url(<?php echo ($staticPath); ?>/tpl/static/home/img/lamborghiniBMW.png) no-repeat center;
	background-size:100% auto;
	z-index:1;
}

.small{
	-webkit-transform:scale(0.05);
	-moz-transform:scale(0.05);
	-ms-transform:scale(0.05);
	-o-transform:scale(0.05);
}


.door{
	position:absolute;
	left:250px;
	top:160px;
	width:545px;
	height:395px;
	opacity:0;
	z-index:2px;
}

.door.hover{
	opacity:1;

}
</style>
<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/home/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/home/js/chinaz_com.js"></script>

<body>
<div class="container">
      <div style="display: block;" id="logo"></div>
      <div style="display: block;" class="titles">BMW</div>
      <div style="transform: scale(1);" class="car"></div>
</div>

<script type="text/javascript"> 	
	$(document).ready(function(){
	var n = 0.05;		
    
	$(".car").removeClass("small");
	var running = setInterval(function(){
		if(n<1){
		n+=0.05;
		var scale = "scale("+n+")"	
		$(".car").css({"-ms-transform":scale,
					   "-webkit-transform":scale,
					   "-moz-transform": scale,
					   "-o-transform" : scale
							});
		}
		else{
			clearInterval(running);
			fadeIn();
		}
	},70)
	
	var i = 0;

	function fadeIn(){
		$("#logo,.title").fadeIn(500,show);
	}
	
	function show(){
			
		screenAndAudio();
	}

	function screenAndAudio(){
		var closeScreen = {
			manual_off: false,
			evtName: ("ontouchstart" in window)?"touchend":"click",
			handleEvent: function(){
				if(closeScreen.manual_off){
					var playbox = parent.playbox;
					if(playbox){
						playbox.autoPlayFix.on = false;
						playbox.autoPlayEvt(false);
						playbox.play();
					}
				}
				setTimeout(function(){
					var iframe_screen = parent.document.getElementById("iframe_screen");
					iframe_screen.parentNode.removeChild(iframe_screen);
				}, 500);
			}
		}
		//
		if(closeScreen.manual_off){
			document.body.addEventListener(closeScreen.evtName, closeScreen, false);
		}else{
			closeScreen.handleEvent();
		}
		$(".container").hide();
	}
});

</script> 

<?php elseif($home['start'] == 2): ?>
		<style>
		*{
			margin:0;
		}
		html, body{
			height:100%;
		}
		.overlay{
			height:100%;
			background:<?php echo ($homeInfo["stpic"]); ?>;
			opacity:0.7; 
			position:absolute;
			z-index:100;
			width:100%;
			left:0;
			top:0;

			/*-webkit-transform-style: preserve-3d;*/
			/*-webkit-animation-name:'bg';*/
			/*-webkit-animation-duration: 1s;*/
			/*-webkit-animation-timing-function: ease-out;*/
			/*-webkit-animation-delay: 0.6s;*/
			/*-webkit-animation-iteration-count:1;//infinite*/
			/*-webkit-animation-direction: alternate;*/
		}
		.overlay>div{
			background:rgba(255,255,255,0.5);
			position:absolute;
			top:0;
			left:0;
			bottom:0;
			right:0;
			width:100%;
			margin:auto;
			height:0;

			-webkit-transform-style: preserve-3d;
			-webkit-animation-name:'open';
			-webkit-animation-duration: 1s;
			-webkit-animation-timing-function: ease-out;
			-webkit-animation-delay: 0s;
			-webkit-animation-iteration-count:1;//infinite
		-webkit-animation-direction: alternate;
		}


		@-webkit-keyframes 'open' {
			0% {
				height:0;
				-webkit-transform:rotateY(89.9deg);
			}
			50% {
				height:100%;
				-webkit-transform:rotateY(89.9deg);
			}
			100% {
				height:100%;
				-webkit-transform:rotateY(0deg);
			}
		}

		@-webkit-keyframes 'bg' {
			 0% {
				opacity:1;
			 }
			
			 100% {
				opacity:0;
			 }
		}


		
	</style>
	<script>
		window.addEventListener("DOMContentLoaded", function(){
			document.getElementById("loader1").querySelectorAll("div")[0].addEventListener("webkitAnimationEnd", function(){
				screenAndAudio();
			}, false);
		}, false);

		function screenAndAudio(){
			var closeScreen = {
				manual_off: false,
				evtName: ("ontouchstart" in window)?"touchend":"click",
				handleEvent: function(){
					if(closeScreen.manual_off){
						var playbox = parent.playbox;
						if(playbox){
							playbox.autoPlayFix.on = false;
							playbox.autoPlayEvt(false);
							playbox.play();
						}
					}
					setTimeout(function(){
						var iframe_screen = parent.document.getElementById("iframe_screen");
						iframe_screen.parentNode.removeChild(iframe_screen);
					}, 500);
				}
			}
			//
			if(closeScreen.manual_off){
				document.body.addEventListener(closeScreen.evtName, closeScreen, false);
			}else{
				closeScreen.handleEvent();
			}
			$("#loader1").hide();
		}
	</script>
</head>
<body>
	<section id="loader1" class="overlay">
		<div></div>
	</section>
</body>
</html>
<?php elseif($home['start'] == 3): ?>
		<style>
		*{
			margin:0;
		}
		html, body{
			height:100%;
		}
		.overlay{
			height:100%;
			background:<?php echo ($homeInfo["stpic"]); ?>;
			opacity:0.7;
			position:absolute;
			z-index:100;
			width:100%;
			left:0;
			top:0;

			/*-webkit-transform-style: preserve-3d;*/
			/*-webkit-animation-name:'bg';*/
			/*-webkit-animation-duration: 1s;*/
			/*-webkit-animation-timing-function: ease-out;*/
			/*-webkit-animation-delay: 0.6s;*/
			/*-webkit-animation-iteration-count:1;//infinite*/
			/*-webkit-animation-direction: alternate;*/
		}
		.overlay>div{
			background:rgba(255,255,255,0.5);
			position:absolute;
			top:0;
			left:0;
			right:0;
			bottom:0;
			width:0;
			margin:auto;
			height:100%;

			-webkit-transform-style: preserve-3d;
			-webkit-animation-name:'open';
			-webkit-animation-duration: 1s;
			-webkit-animation-timing-function: ease-out;
			-webkit-animation-delay: 0s;
			-webkit-animation-iteration-count:1;//infinite
		-webkit-animation-direction: alternate;
		}


		@-webkit-keyframes 'open' {
			0% {
				width:0;
				-webkit-transform:rotateX(89.9deg);
			}
			50% {
				width:100%;
				-webkit-transform:rotateX(89.9deg);
			}
			100% {
				width:100%;
				-webkit-transform:rotateX(0deg);
			}
		}

		@-webkit-keyframes 'bg' {
			 0% {
				opacity:1;
			 }
			
			 100% {
				opacity:0;
			 }
		}


		
	</style>
	<script>
		window.addEventListener("DOMContentLoaded", function(){
			document.getElementById("loader1").querySelectorAll("div")[0].addEventListener("webkitAnimationEnd", function(){
				screenAndAudio();
			}, false);
		}, false);

		function screenAndAudio(){
			var closeScreen = {
				manual_off: false,
				evtName: ("ontouchstart" in window)?"touchend":"click",
				handleEvent: function(){
					if(closeScreen.manual_off){
						var playbox = parent.playbox;
						if(playbox){
							playbox.autoPlayFix.on = false;
							playbox.autoPlayEvt(false);
							playbox.play();
						}
					}
					setTimeout(function(){
						var iframe_screen = parent.document.getElementById("iframe_screen");
						iframe_screen.parentNode.removeChild(iframe_screen);
					}, 500);
				}
			}
			//
			if(closeScreen.manual_off){
				document.body.addEventListener(closeScreen.evtName, closeScreen, false);
			}else{
				closeScreen.handleEvent();
			}
			$("#loader1").hide();
		}
	</script>
<body>
	<section id="loader1" class="overlay">
		<div></div>
	</section>
</body>
</html>
<?php elseif($home['start'] == 4): ?>
	<style>
	*{margin: 0;}
	body{font-size: 12px;}
</style>
	
<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/home/js/jquery_min.js"></script>
</head>
<body>
	<!--自定义开场动画-->
	<div data-role="widtet" data-widget="screen_1" class="screen_1" id="screen_1">
		<style>
			.screen_1 .animation, .screen_1 .loading{position: fixed; left: 0; top: 0; width: 100%; height: 100%; min-height: 330px;  box-shadow:5px 5px 5px 10px rgba(0, 0, 0, 0.6); z-index: 9000; display: none;background: #ffffff;}
			.screen_1 .loading{background-color: #fff; display: block; text-align: center;}
			.screen_1 .loading > div{position: absolute; left: 0; top: 50%; margin-top: -32px; width: 100%; color: #fc8e65; z-index:9010;}
		</style>
		<script>
			var screen_1 = (function(){
				$.extend($.easing, {
					def: 'easeOutQuad',
					easeOutBack: function (x, t, b, c, d, s) {
						if (s == undefined) s = 1.70158;
						return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
					},
					easeOutElastic: function (x, t, b, c, d) {
						var s=1.70158;var p=0;var a=c;
						if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
						if (a < Math.abs(c)) { a=c; var s=p/4; }
						else var s = p/(2*Math.PI) * Math.asin (c/a);
						return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
					},
					easeOutExpo: function (x, t, b, c, d) {
						return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
					}
				});

				function _animation(callback){ //开场动画
					var obj = $('#screen_1_animation');
					if(obj.length){
						obj.fadeIn(1500, function(){
							$(this).animate({top: 120}, 'easeOutBack', function(){
								$(this).animate({top: 0}, 500, 'easeOutElastic');
								$('#screen_1_loading').remove();
							}).one('touchstart click', function(e){
								$(this).animate({top: '-100%'}, function(){
								$(this).remove();
							});
							if(callback) callback.call(this);
								e.preventDefault();
							});
						});
					}else{
						if(callback) callback.call(this);
					}
				}

				function screenClose(evt){
					evt.preventDefault();
					switch(evt.type){
						case "load":
						case "error":
						default:
							_animation(function(){
								setTimeout(function(){
									$("#screen_1").remove();
									try{
										var iframe_screen = parent.document.getElementById("iframe_screen");
										iframe_screen.parentNode.removeChild(iframe_screen);
									}catch(e){
										console.log(e);
									}
									delete window.screen_1;
								}, 2000);
							});
						break;
					}
				}
				return {
					screenClose: screenClose
				}
			})($);
		</script>

		<div class="loading" id="screen_1_loading">
			<div><img src="<?php echo ($staticPath); ?>/tpl/static/home/img/loading.gif" width="50" height="50" /><!--p>数据加载中..</p--></div>
		</div>
		
		<div class="animation t1" id="screen_1_animation" style="display: block; top: 0px;">
			<img src="<?php if($homeInfo['stpic'] == ''): echo ($staticPath); ?>/tpl/static/home/kcdhbj.jpg<?php else: echo ($homeInfo["stpic"]); endif; ?>" style="width:100%;min-height:100%;" onload="screen_1.screenClose(event);" onerror="screen_1.screenClose(event);">
		</div>
	</div>

</body></html>
<?php else: endif; ?>
<!-- share -->

	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": "0",
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'type'=>$_GET['type'],'bid'=>$_GET['bid'],'id'=>$_GET['id'],'wecha_id'=>$_GET['wecha_id']));?>",
					"sendFriendLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'type'=>$_GET['type'],'bid'=>$_GET['bid'],'id'=>$_GET['id'],'wecha_id'=>$_GET['wecha_id']));?>",
					"weiboLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'type'=>$_GET['type'],'bid'=>$_GET['bid'],'id'=>$_GET['id'],'wecha_id'=>$_GET['wecha_id']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"NewsList",
				"moduleID": "<?php echo (intval($_GET['classid'])); ?>",
				"imgUrl": "<?php echo ($thisClassInfo["img"]); ?>", 
				"timeLineLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($thisClassInfo["name"]); ?>",
				"tContent": "<?php echo ($thisClassInfo["info"]); ?>"
			};
		</script><?php endif; ?>
	
<?php echo ($shareScript); ?>
</body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>

<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/newswelcome/js/jquery-1.10.2.min.js"  type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
	
<div id="wp" class="wp">
	<?php if($usertplid == 0): ?><link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
	<?php else: ?>
		<link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" /><?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common.css?BPm" />
<style>
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}

.pages{padding:3px;margin:3px;text-align:center;}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}
.pages a:hover{border:#999 1px solid;color:#666;}
.pages a:active{border:#999 1px solid;color:#666;}
.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}
.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
</style>
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
 <?php if(session('isQcloud') == true): ?><link type="text/css" rel="stylesheet" href="http://qzonestyle.gtimg.cn/qcloud/app/open/v1/css/wxcloud.min.css" />


<style>
.px {
	background:#fff;

	border-color:#c9c9c9;

}


input[type=radio] {

	border-radius:55px;

	border: none;

}
.btnGreen {
	border:1px solid #FFFFFF;
	box-shadow:0 1px 1px #0A8DE4;
	-moz-box-shadow:0 1px 1px #0A8DE4;
	-webkit-box-shadow:0 1px 1px #0A8DE4;
	padding:5px 20px;
	cursor:pointer;
	display:inline-block;
	text-align:center;
	vertical-align:bottom;
	overflow:visible;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
*zoom:1;
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #107BAD  3%, #18C2D1 97%, #18C2D1 100%);
	background-image:-moz-linear-gradient(bottom, #107BAD  3%, #0A8DE40 97%, #18C2D1 100%);
	background-image:-webkit-linear-gradient(bottom, #107BAD  3%,#0A8DE4 97%, #18C2D1 100%);
	color:#fff; font-size:14px; line-height: 1.5;
}
.btnGreen:hover {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-moz-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-webkit-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	color:#fff
}
.btnGreen:active {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-moz-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-webkit-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	color:#fff
}

.btnGreen{border:1px solid #3d810c;box-shadow:0 1px 1px #aaa;-moz-box-shadow:0 1px 1px #aaa;-webkit-box-shadow:0 1px 1px #aaa;padding:5px 20px;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;*zoom:1;background-color:#5ba607;background-image:linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);color:#fff;font-size:14px;line-height:1.5;}.btnGreen:hover{background-color:#5ba607;background-image:linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);color:#fff}.btnGreen:active{background-color:#5ba607;background-image:linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);color:#fff}

</style><?php endif; ?>
<!--对接独立样式-->
<?php if ($_SESSION['is_syn'] != 0): ?>
<style>
.tableContent {
	background:none !important;
}
	<?php if ($_SESSION['is_syn'] == 1): ?>
	.tableContent .content {
		border-left: 0;
		padding: 5px 10px;
		background-color: #FFFFFF;
		width:820px;
		min-height: inherit;
	}
	.tableContent .content .px {
		width:300px !important;
	}
	<?php endif;?>
	<?php if ($_SESSION['is_syn'] == 2): ?>
	.tableContent .content {
		border-left: 0;
		padding: 5px 10px;
		background-color: #FFFFFF;
		width:95%;
		min-height: inherit;
		margin:0;
		float:left;
	}
	<?php endif;?>
.tableContent .content .bgfc {
	padding:5px;
}
</style>
<script type="text/javascript">
$(function () {
	$('.tableContent form').removeAttr('target');
});
</script>
<?php endif;?>
<!--对接隐藏头部和公用菜单-->
<?php
if (!isset($_SESSION['is_syn']) && ($_SESSION['is_syn'] == 0)){ ?>
<?php
if (!isset($_SESSION['isQcloud']) && (!isset($_SESSION['role_name']) || $_SESSION['role_name'] != 'staff')){ ?>
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid == 1): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:101px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: right; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome">欢迎使用<?php echo ($f_siteName); ?>!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"><h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" height="55" /></a></h1></div>
            
            <div class="navr">
        	<ul id="topMenu">
                <li style="width:85px"></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?> <?php if($zdydh6['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh6['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh6['url'] == ''): echo U('Home/Index/help'); else: echo ($zdydh6['url']); endif; ?>"><?php if($zdydh6['name'] == ''): ?>帮助中心<?php else: echo ($zdydh6['name']); endif; ?></a>
                </li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?> <?php if($zdydh5['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh5['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh5['url'] == ''): echo U('User/Index/index'); else: echo ($zdydh5['url']); endif; ?>"><?php if($zdydh5['name'] == ''): ?>管理中心<?php else: echo ($zdydh5['name']); endif; ?></a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?> <?php if($zdydh4['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh4['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh4['url'] == ''): echo U('Home/Index/common'); else: echo ($zdydh4['url']); endif; ?>"><?php if($zdydh4['name'] == ''): ?>产品案例<?php else: echo ($zdydh4['name']); endif; ?></a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?> <?php if($zdydh3['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh3['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh3['url'] == ''): echo U('Home/Index/price'); else: echo ($zdydh3['url']); endif; ?>"><?php if($zdydh3['name'] == ''): ?>资费说明<?php else: echo ($zdydh3['name']); endif; ?></a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?> <?php if($zdydh2['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh2['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh2['url'] == ''): echo U('Home/Index/about'); else: echo ($zdydh2['url']); endif; ?>"><?php if($zdydh2['name'] == ''): ?>关于我们<?php else: echo ($zdydh2['name']); endif; ?></a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?> <?php if($zdydh1['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($zdydh1['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($zdydh1['url'] == ''): echo U('Home/Index/fc'); else: echo ($zdydh1['url']); endif; ?>"><?php if($zdydh1['name'] == ''): ?>功能介绍<?php else: echo ($zdydh1['name']); endif; ?></a></li>                        
           		<li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>       
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>
<?php
}else{ ?>
	<div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid == 1): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:32px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: left; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:40px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 40px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome">欢迎使用多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION['staff_id']==false && $_SESSION['staff_username']==false): ?><a href="<?php echo U('Index/staff_login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('staff_username')); ?></span></a>&nbsp;&nbsp;&nbsp;
			<a href="javascript:;" onclick="window.location.href = '<?php echo U('Home/Users/staff_logout',array('token'=>$_SESSION['token']));?>'" >退出</a><?php endif; ?>	
	</div>
</div>
    </div>
</div>
<?php } ?>
  <!--中间内容234-->

  <div class="contentmanage"<?php if (isset($_SESSION['isQcloud'])){?> style="width:100%"<?php }?>>
  <?php
if (!isset($_SESSION['isQcloud'])){ if(!isset($_SESSION['role_name']) || $_SESSION['role_name'] != 'staff'){ ?>
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<a href="<?php echo U('Function/welcome',array('token'=>$token));?>"><img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100" /></a>
</div>

<div id="nickname">
<strong><a href="<?php echo U('Function/welcome',array('token'=>$token));?>"><?php echo ($wecha["wxname"]); ?></a></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['taxisid']-1; ?>" title=""></a></div>
<div id="weixinid">	
	微信号:<?php echo ($wecha["weixin"]); ?>	

</div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php echo (date("Y-m-d",$thisUser["viptime"])); ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<!-- <td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td> -->
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$thisUser['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

<?php } ?>
<?php } ?>
<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
background: #fff;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  background: #fff;
}

ul#menu a {
  display: block;
  text-decoration: none;
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;

}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}

a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}

</style>




<style type="text/css">
	.welcome1{
		width:981px;
		border: 1px solid #EAEAEA;
		position: relative;
	}
	.welcome1 li{
		float: left;	
		height: 50px;
 		width: 12.323%;	
 		text-align:center;
 		font-weight: bold;
 		position: relative;
 		font-size: 1.25em;
 		border: 1px solid #DFDFDF;
 		background: #F3F3F3;
	}
	.welcome1 ul{
		max-width: 981px;
	}
	.welcome1 li a{
		line-height:3.5;
	}
	.welcome1 li.tab-current{
 		border-right:0;		
		border-left:0;
		border-bottom:0;
		background: none;
	}
	.content1{
		margin:80px auto;
		width:900px;
		top:80px;
	}
	.img1{
		margin: 60px 30px 0px 30px;
		width:120px;
		height:150px;
		float: left;
		text-align: center;
	}
	.img1 a {
		line-height: 50px;
	}
	.img1 a:hover{
		text-decoration:none;  
	}	
</style>



<?php
} ?>
      <div class="tableContent">
<?php if($_SESSION['is_syn']== 0): if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜55单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php
$menus=array( array( 'name'=>'基础设置', 'iconName'=>'base', 'display'=>0, 'subs'=>array( array('name'=>'关注时回复与帮助','link'=>U('Areply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Areply')), array('name'=>'微信－文本回复','link'=>U('Text/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Text')), array('name'=>'微信－图文回复','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'微信－多图文回复','link'=>U('Img/multi',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'multi')), array('name'=>'微信－语音回复','link'=>U('Voiceresponse/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Voiceresponse')), array('name'=>'微信－群发消息','link'=>U('Message/sendHistory',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Message')), array('name'=>'微信－模板消息','link'=>U('TemplateMsg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'TemplateMsg')), array('name'=>'LBS商家连锁','link'=>U('Company/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Company')), array('name'=>'自定义菜单','link'=>U('Diymen/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Diymen')), array('name'=>'自动获取粉丝信息','link'=>U('Auth/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Auth')), array('name'=>'店员管理','f'=>'Assistente','link'=>U('Assistente/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Assistente')), array('name'=>'回答不上来的配置','link'=>U('Other/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Other')), )), array( 'name'=>'人气红包[VIP]', 'iconName'=>'service', 'display'=>0, 'subs'=>array( array('name'=>'红包设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'index')), array('name'=>'概率设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/rands',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'rands')), array('name'=>'赞助商设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/zzs',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'zzs')), array('name'=>'用户管理','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/user',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'user')), )), array( 'name'=>'微网站', 'iconName'=>'site', 'display'=>0, 'subs'=>array( array('name'=>'首页回复配置','f'=>'Home','link'=>U('Home/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'set')), array('name'=>'分类管理','f'=>'Home','link'=>U('Classify/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Classify')), array('name'=>'H5动态自定义模板','f'=>'CustomTmpls','link'=>U('CustomTmpls/dynamic',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'CustomTmpls','a'=>'dynamic')), array('name'=>'静态模板管理','f'=>'Home','link'=>U('Tmpls/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Tmpls','a'=>'index')), array('name'=>'文章管理','f'=>'Home','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'首页幻灯片','f'=>'Home','link'=>U('Flash/index',array('token'=>$token,'tip'=>1)),'new'=>0,'selectedCondition'=>array('m'=>'Flash','tip'=>1)), array('name'=>'轮播背景图','f'=>'Home','link'=>U('Flash/index',array('token'=>$token,'tip'=>2)),'new'=>1,'selectedCondition'=>array('m'=>'Flash','tip'=>2)), array('name'=>'底部导航菜单','f'=>'Home','link'=>U('Catemenu/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Catemenu')), array('name'=>'版权设置','f'=>'Home','link'=>U('Home/plugmenu',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'plugmenu')), array('name'=>'微场景','f'=>'Home','link'=>U('Live/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Live'),'notinpigcms'=>1), array('name'=>'在线预览','link'=>U('Yulan/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Yulan'),'blank'=>1), )), array( 'name'=>'游戏&贺卡', 'iconName'=>'game', 'display'=>0, 'subs'=>array( array('name'=>'游戏信息设置','f'=>'Game','link'=>U('Game/config',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'config')), array('name'=>'我的游戏','f'=>'Game','link'=>U('Game/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'index')), array('name'=>'游戏库','f'=>'Game','link'=>U('Game/gameLibrary',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'gameLibrary')), array('name'=>'我的贺卡','f'=>'Card','link'=>U('Card/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Card','a'=>'index')), array('name'=>'贺卡库','f'=>'Card','link'=>U('Card/cardLibrary',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Card','a'=>'cardLibrary')), )), array( 'name'=>'PC网站[独立]', 'iconName'=>'scene', 'display'=>0, 'subs'=>array( array('name'=>'基本设置','f'=>'Web','link'=>U('Web/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'set')), array('name'=>'选择模板','f'=>'Web','link'=>U('Web/choose_tpl',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'choose_tpl')), array('name'=>'导航菜单','f'=>'Web','link'=>U('Web/nav',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'nav')), array('name'=>'图集管理','f'=>'Web','link'=>U('Web/flash',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'flash')), array('name'=>'新闻管理','f'=>'Web','link'=>U('Web/news',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'news')), array('name'=>'产品管理','f'=>'Web','link'=>U('Web/product',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'product')), array('name'=>'下载管理','f'=>'Web','link'=>U('Web/down',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'down')), array('name'=>'自定义页面','f'=>'Web','link'=>U('Web/page',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'page')), )), array( 'name'=>'手机站[独立]', 'iconName'=>'site', 'display'=>0, 'subs'=>array( array('name'=>'手机站配置','f'=>'Phone','link'=>U('Phone/baseSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Phone','a'=>'baseSet')) )), array( 'iconName'=>'zhida', 'name'=>'百度直达号', 'display'=>0, 'subs'=>array( array('name'=>'对接配置','f'=>'Zhida','link'=>U('Zhida/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhida','a'=>'index')), )), array( 'name'=>'微场景', 'iconName'=>'ditch', 'display'=>0, 'subs'=>array( array('name'=>'创建场景','f'=>'SeniorScene','link'=>U('SeniorScene/highLive',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene'),'blank'=>1), array('name'=>'我的场景','f'=>'SeniorScene','link'=>U('SeniorScene/highLive',array('token'=>$token,'v'=>'myscene')),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene'),'blank'=>1), array('name'=>'场景关键词','f'=>'SeniorScene','link'=>U('SeniorScene/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene')), )), array( 'iconName'=>'ditch', 'name'=>'高级场景(本地化)', 'display'=>0, 'subs'=>array( array('name'=>'场景管理','f'=>'Eqx','link'=>U('Eqx/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Eqx','a'=>'index')), array('name'=>'场景回复配置','f'=>'Eqx','link'=>U('Eqx/keywordlist',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Eqx','a'=>'keywordlist')), )), array( 'name'=>'微互动', 'iconName'=>'interact', 'display'=>0, 'subs'=>array( array('name'=>'微名片','f'=>'Person_card','link'=>U('Person_card/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Person_card')), array('name'=>'留言板','f'=>'Reply','link'=>U('Reply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Reply')), array('name'=>'微论坛','f'=>'Forum','link'=>U('Forum/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Forum')), array('name'=>'3G图集(相册)','f'=>'Photo','link'=>U('Photo/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Photo')), array('name'=>'3G微投票','f'=>'Vote','link'=>U('Vote/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Vote')), array('name'=>'图文投票','f'=>'Voteimg','link'=>U('Voteimg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Voteimg')), array('name'=>'微预约(万能表单,报名)','f'=>'Custom','link'=>U('Custom/record',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Custom')), array('name'=>'微调研','f'=>'Research','link'=>U('Research/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Research')), array('name'=>'分享管理','f'=>'Share','link'=>U('Share/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Share')), array('name'=>'邀请函','f'=>'Invite','link'=>U('Invite/add',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Invite')), )), array( 'name'=>'行业应用', 'iconName'=>'business', 'display'=>0, 'subs'=>array( array('name'=>'微排号','f'=>'Numqueue','link'=>U('Numqueue/index',array('token'=>$token,'type'=>'Numqueue')),'new'=>1,'selectedCondition'=>array('m'=>'Numqueue','type'=>'Numqueue'),'test'=>0), array('name'=>'微餐饮（无线打印）','f'=>'Repast','link'=>U('Repast/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Repast')), array('name'=>'微外卖[新版]','f'=>'DishOut','link'=>U('DishOut/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'DishOut'),'test'=>0), array('name'=>'全民经纪人','f'=>'MicroBroker','link'=>U('MicroBroker/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'MicroBroker'),'test'=>0), array('name'=>'楼盘房产','f'=>'Estate','link'=>U('Estate/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Estate')), array('name'=>'360°全景','f'=>'Panorama','link'=>U('Panorama/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Panorama')), array('name'=>'微婚庆（喜帖）','f'=>'Wedding','link'=>U('Wedding/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wedding')), array('name'=>'微汽车','f'=>'Car','link'=>U('Car/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Car')), array('name'=>'微教育','f'=>'School','link'=>U('School/index',array('token'=>$token,'type'=>'semester')),'new'=>0,'selectedCondition'=>array('m'=>'School')), array('name'=>'微医疗','f'=>'Medical','link'=>U('Medical/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Medical'),'test'=>0), array('name'=>'酒店宾馆','f'=>'Hotels','link'=>U('Hotels/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Hotels')), array('name'=>'通用订单(酒吧KTV)','f'=>'Host','link'=>U('Host/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Host')), array('name'=>'微美容','f'=>'Beauty','link'=>U('Business/index',array('token'=>$token,'type'=>'beauty')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'beauty'),'test'=>0), array('name'=>'微健身','f'=>'Fitness','link'=>U('Business/index',array('token'=>$token,'type'=>'fitness')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'fitness'),'test'=>0,'show'=>1), array('name'=>'微政务','f'=>'Gover','link'=>U('Business/index',array('token'=>$token,'type'=>'gover')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'gover'),'test'=>0,'show'=>1), array('name'=>'微食品','f'=>'Food','link'=>U('Business/index',array('token'=>$token,'type'=>'food')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'food'),'test'=>0), array('name'=>'微旅游','f'=>'Travel','link'=>U('Business/index',array('token'=>$token,'type'=>'travel')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'travel'),'test'=>0), array('name'=>'微花店','f'=>'Flower','link'=>U('Business/index',array('token'=>$token,'type'=>'flower')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'flower'),'test'=>0), array('name'=>'微物业','f'=>'Property','link'=>U('Business/index',array('token'=>$token,'type'=>'property')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'property'),'test'=>0), array('name'=>'微KTV','f'=>'Ktv','link'=>U('Business/index',array('token'=>$token,'type'=>'ktv')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'ktv'),'test'=>0), array('name'=>'微酒吧','f'=>'Bar','link'=>U('Business/index',array('token'=>$token,'type'=>'bar')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'bar'),'test'=>0), array('name'=>'微装修','f'=>'Fitment','link'=>U('Business/index',array('token'=>$token,'type'=>'fitment')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'fitment'),'test'=>0), array('name'=>'微婚庆','f'=>'Wedding','link'=>U('Business/index',array('token'=>$token,'type'=>'wedding')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'wedding'),'test'=>0), array('name'=>'微宠物','f'=>'Affections','link'=>U('Business/index',array('token'=>$token,'type'=>'affections')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'affections'),'test'=>0), array('name'=>'微家政','f'=>'Housekeeper','link'=>U('Business/index',array('token'=>$token,'type'=>'housekeeper')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'housekeeper'),'test'=>0), array('name'=>'微租赁','f'=>'Lease','link'=>U('Business/index',array('token'=>$token,'type'=>'lease')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'lease'),'test'=>0), array('name'=>'微招聘','link'=>U('Zhaopin/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhaopin')), )), array( 'name'=>'摇一摇.周边', 'iconName'=>'shakearound', 'display'=>0, 'subs'=>array( array('name'=>'设备管理','f'=>'Shakearound','link'=>U('Shakearound/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound')), array('name'=>'页面管理','f'=>'Shakearound','link'=>U('Shakearound/page_index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound','a'=>'page_index')), array('name'=>'统计信息','f'=>'Shakearound','link'=>U('Shakearound/statistics',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound')), )), array( 'name'=>'微现场', 'iconName'=>'scene', 'display'=>0, 'subs'=>array( array('name'=>'微信签到','f'=>'Signin','link'=>U('Signin/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Signin')), array('name'=>'摇一摇','f'=>'Shake','link'=>U('Shake/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shake')), array('name'=>'微信墙','f'=>'Wall','link'=>U('Wall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Wall')), array('name'=>'现场活动','f'=>'Scene','link'=>U('Scene/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Scene')), )), array( 'name'=>'电商系统', 'iconName'=>'store', 'display'=>0, 'subs'=>array( array('name'=>'在线支付设置','link'=>U('Alipay_config/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Alipay_config')), array('name'=>'微信支付证书','link'=>U('Alipay_cert/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Alipay_cert')), array('name'=>'平台支付对帐','link'=>U('Platform/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Platform')), array('name'=>'微信支付账单','link'=>U('WeixinBill/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'WeixinBill')), array('name'=>'微信团购系统','f'=>'Groupon','link'=>U('Groupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Groupon')), array('name'=>'商城分佣管理','f'=>'Store','link'=>U('Store/twitter',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Store','a'=>'twitter')), array('name'=>'微信商城系统','f'=>'Store','link'=>U('Store/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Store')), array('name'=>'微商圈','f'=>'Market','link'=>U('Market/index',array('token'=>$token)),'test'=>0,'selectedCondition'=>array('m'=>'Market')), array('name'=>'微众筹','f'=>'Crowdfunding','link'=>U('Crowdfunding/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Crowdfunding')), array('name'=>'一元夺宝','f'=>'Unitary','link'=>U('Unitary/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Unitary')), array('name'=>'微秒杀','f'=>'Seckill','link'=>U('Seckill/index',array('token'=>$token,'type'=>'seckill')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Seckill')), array('name'=>'微信生活圈','f'=>'LivingCircle','link'=>U('LivingCircle/index',array('token'=>$token,'type'=>'LivingCircle')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'LivingCircle')), array('name'=>'微砍价','f'=>'Bargain','link'=>U('Bargain/index',array('token'=>$token,'type'=>'Bargain')),'new'=>1,'selectedCondition'=>array('m'=>'Bargain')), array('name'=>'降价拍','f'=>'Cutprice','link'=>U('Cutprice/index',array('token'=>$token,'type'=>'Cutprice')),'test'=>0,'selectedCondition'=>array('m'=>'Cutprice')), )), array( 'name'=>'新版商城（分销）', 'iconName'=>'store', 'display'=>0, 'subs'=>array( array('name'=>'微商城(新版)','f'=>'Storenew','link'=>U('Storenew/index',array('token'=>$token,'infotype'=>'Storenew')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'文章管理','f'=>'Storenew','link'=>U('Storenew/news',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'订单管理','f'=>'Storenew','link'=>U('Storenew/orders',array('token'=>$token,'infotype'=>'Storenew')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'分销管理','f'=>'Storenew','link'=>U('Storenew/twitter',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'限时竞拍','f'=>'Storenew','link'=>U('Storenew/jingpai',array('token'=>$token,'infotype'=>'Storenew')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'帮助说明','f'=>'Storenew','link'=>U('Storenew/help',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'黑名单管理','f'=>'Storenew','link'=>U('Storenew/lockuser',array('token'=>$token,'infotype'=>'Storenew')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), )), array( 'name'=>'微店系统', 'iconName'=>'micrstore', 'display'=>0, 'subs'=>array( array('name'=>'微店设置','f'=>'Micrstore','link'=>U('Micrstore/index',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'index')), array('name'=>'微店管理','f'=>'Micrstore','link'=>U('Micrstore/api',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'api'),'blank'=>1), array('name'=>'三级分销','f'=>'Micrstore','link'=>U('Micrstore/dis',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'dis'),'blank'=>1), array('name'=>'提现管理','f'=>'Micrstore','link'=>U('Micrstore/withdraw',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Micrstore'),'blank'=>1), )), array( 'name'=>'微粉丝管理CRM', 'iconName'=>'crm', 'display'=>0, 'subs'=>array( array('name'=>'粉丝管理','link'=>U('Wechat_group/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'index')), array('name'=>'分组管理','link'=>U('Wechat_group/groups',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'groups')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_behavior')), array('name'=>'服务窗粉丝管理','f'=>'Fuwu','link'=>U('Fuwu/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Fuwu')), )), array( 'name'=>'微硬件', 'iconName'=>'hardware', 'display'=>0, 'subs'=>array( array('name'=>'微信wifi设置','link'=>U('Router/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Router')), array('name'=>'无线打印机','link'=>U('Hardware/orderprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'orderprint')), array('name'=>'照片打印机','link'=>U('Hardware/photoprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'photoprint')), )), array( 'name'=>'微渠道', 'iconName'=>'ditch', 'display'=>0, 'subs'=>array( array('name'=>'渠道二维码','link'=>U('Recognition/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Recognition')), array('name'=>'二维码扫描分析','link'=>U('RecognitionData/index',array('token'=>$token)),'test'=>1,'selectedCondition'=>array('m'=>'RecognitionData')), )), array( 'name'=>'微客服', 'iconName'=>'service', 'display'=>0, 'subs'=>array( array('name'=>'微信人工客服','f'=>'ServiceUser','link'=>U('ServiceUser/wechatService',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'ServiceUser')), array('name'=>'网页客服管理','f'=>'Service','link'=>U('Service/servicelist',array('token'=>$token,'type'=>'setup')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'setup')), array('name'=>'聊天推广内容','f'=>'Service','link'=>U('Service/preferentiallist',array('token'=>$token,'type'=>'preferential')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'preferential')), array('name'=>'聊天个人板块','f'=>'Service','link'=>U('Service/my',array('token'=>$token,'type'=>'my')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'my')), )), array( 'name'=>'微活动', 'iconName'=>'active', 'display'=>0, 'subs'=>array( array('name'=>'微召唤','f'=>'Weizhaohuan','link'=>U('Weizhaohuan/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Weizhaohuan')), array('name'=>'集字游戏','f'=>'Collectword','link'=>U('Collectword/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Collectword')), array('name'=>'我要上头条','f'=>'FrontPage','link'=>U('FrontPage/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'FrontPage')), array('name'=>'摇钱树','f'=>'CoinTree','link'=>U('CoinTree/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'CoinTree')), array('name'=>'微信合体红包','f'=>'Hongbao','link'=>U('Hongbao/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Hongbao')), array('name'=>'分享助力','f'=>'Helping','link'=>U('Helping/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Helping')), array('name'=>'谁是情圣','f'=>'Sentiment','link'=>U('Sentiment/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Sentiment')), array('name'=>'人气冲榜','f'=>'Popularity','link'=>U('Popularity/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Popularity')), array('name'=>'幸运大转盘','f'=>'Lottery','link'=>U('Lottery/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lottery')), array('name'=>'幸运九宫格','f'=>'Jiugong','link'=>U('Jiugong/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Jiugong')), array('name'=>'优惠券','f'=>'Coupon','link'=>U('Coupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Coupon')), array('name'=>'刮刮卡','f'=>'Guajiang','link'=>U('Guajiang/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Guajiang')), array('name'=>'幸运水果机','f'=>'LuckyFruit','link'=>U('LuckyFruit/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'LuckyFruit')), array('name'=>'砸金蛋','f'=>'GoldenEgg','link'=>U('GoldenEgg/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'GoldenEgg')), array('name'=>'走鹊桥','f'=>'AppleGame','link'=>U('AppleGame/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'AppleGame')), array('name'=>'摁死小情侣','f'=>'Lovers','link'=>U('Lovers/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lovers')), array('name'=>'中秋吃月饼','f'=>'Autumn','link'=>U('Autumn/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Autumn')), array('name'=>'拆礼盒','f'=>'Autumns','link'=>U('Autumns/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Autumns')), array('name'=>'一战到底','f'=>'Problem','link'=>U('Problem/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Problem')), array('name'=>'微信红包','f'=>'Red_packet','link'=>U('Red_packet/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Red_packet')), array('name'=>'惩罚台','f'=>'Punish','link'=>U('Punish/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Punish')), array('name'=>'趣味测试','f'=>'Test','link'=>U('Test/index',array('token'=>$token,'type'=>'Test')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Test')), )), array( 'name'=>'会员卡', 'iconName'=>'card', 'display'=>0, 'subs'=>array( array('name'=>'会员卡','f'=>'Member_card','link'=>U('Member_card/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card'),'exceptCondition'=>array('a'=>'replyInfoSet,focus,custom,center,member,coupons,consume_record')), array('name'=>'卡券管理','f'=>'Member_card','link'=>U('Member_card/coupons',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Member_card','a'=>'coupons')), array('name'=>'卡券核销','f'=>'Member_card','link'=>U('Member_card/consume_record',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Member_card','a'=>'consume_record')), array('name'=>'会员中心','f'=>'Member_card','link'=>U('Member_card/center',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'center')), array('name'=>'消费记录','link'=>U('Member_card/member',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'member')), array('name'=>'回复设置','f'=>'Member_card','link'=>U('Member_card/replyInfoSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'replyInfoSet')), array('name'=>'幻灯片广告','f'=>'Member_card','link'=>U('Member_card/focus',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'focus')), array('name'=>'自定义输入项','f'=>'Member_card','link'=>U('Member_card/custom',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'custom')), )), array( 'name'=>'数据魔方', 'iconName'=>'datacube', 'display'=>0, 'subs'=>array( array('name'=>'请求数详情','link'=>U('Requerydata/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Requerydata')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior','a'=>'statistics')), )), array( 'name'=>'二次开发', 'iconName'=>'secondary', 'display'=>0, 'subs'=>array( array('name'=>'融合第三方','link'=>U('Api/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Api')), )), ); ?>
<?php
 foreach ($menus as $mk => $mv){ if(C('router_key') != ''&&$mv['iconName']=='hardware'){ unset($mv['subs'][0]); } foreach ($mv['subs'] as $mvk => $mvv){ if ($mvv['f'] != NULL && !in_array($mvv['f'], $Allfunc)) { unset($menus[$mk]['subs'][$mvk]); } if ($mvv['selectedCondition']['m'] == 'Web') { $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'Web'.DIRECTORY_SEPARATOR; if (!file_exists($path.'Web_indexAction.class.php')) { unset($menus[$mk]); } } if(isset($group_func) && $_SESSION['role_name'] != '' && $_SESSION['role_name'] == 'staff'){ $not_exists = array('tianqi','qiushi','jishuan','langdu','jiankang','kuaidi','xiaohua','changtoushi','peiliao','liaotian','mengjian','yuyinfanyi','huoche','gongjiao','shenfenzheng','shouji','yinle','fujin','geci','fanyi','api','suanming','baike','caipiao','Zhida','whois','assistente'); if($mvv['f'] != NULL && !in_array($mvv['f'],$group_func)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] != NULL && in_array(strtolower($mvv['f']),$not_exists)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] == NULL && in_array(strtolower($mvv['selectedCondition']['m']),$not_exists)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(!in_array(ucfirst($mvv['selectedCondition']['type']),$group_func)){ unset($menus[$mk]['subs'][$mvk]); } } } if(in_array($mvv['selectedCondition']['m'],$not_exist) || in_array($mvv['f'],$not_exist)){ if($mvv['selectedCondition']['m'] == 'Home'){ unset($menus[$mk]); }else{ if ($mvv['f'] != NULL) { unset($menus[$mk]['subs'][$mvk]); } } }elseif($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(in_array(ucfirst($mvv['selectedCondition']['type']),$not_exist)){ unset($menus[$mk]['subs'][$mvk]); } } if($menus[$mk]['subs'] == NULL){ unset($menus[$mk]); } } } $i=0; $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } if($i == 0){ echo '<a class="nav-header'.$aClassStr.'" style="border-top:none !important;"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; }else{ echo '<a class="nav-header'.$aClassStr.'"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; } if(C('router_key') == ''&&$m['iconName']=='hardware'){ unset($m['subs'][0]); } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($currentParentMenuID==$i&&$j==$currentMenuID){ $selectedClassStr='selected'; } $newStr=''; if ($s['test']){ $newStr.='<span class="test"></span>'; }else { if ($s['new']){ $newStr.='<span class="new"></span>'; } } if ($s['name']!='微信墙'&&$s['name']!='摇一摇'&&$s['name']!='现场活动'){ $target=''; if ($s['blank']){ $target=' target="_blank"'; } if ($s['notinpigcms']&&C('server_topdomain')=='pigcms.cn'){ }else { echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'"'.$target.'>'.$s['name'].'</a>'.$newStr.'</li>'; } }else { switch ($s['name']){ case '微信墙': case '摇一摇': case '现场活动': $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'User'.DIRECTORY_SEPARATOR; if (file_exists($path.'WallAction.class.php')&&file_exists($path.'ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } break; } } if ($s['name']=='静态模板管理'&&is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } $j++; } } echo '</ul>'; $i++; } ?>

<div style="clear:both"></div>
</ul>
</div>
</div>
<?php
} endif; ?>
<script type="text/javascript">

	$(document).ready(function(){
		$(".nav-header").mouseover(function(){
			$(this).addClass('navHover');
		}).mouseout(function(){
			$(this).removeClass('navHover');
		}).click(function(){
			$(this).toggleClass('nav-header-current');
			$(this).next('.ckit').slideToggle();
		})
	});

</script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
 <form class="form" method="post" action="" enctype="multipart/form-data" >
        <div class="content">
<!--活动开始-->
<div class="cLineB">
    <h4>编辑刮刮卡活动开始内容</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a>
</div>
<div class="msgWrap bgfc">
<TABLE class="userinfoArea" style=" margin:0;" border="0" cellSpacing="0" cellPadding="0" width="100%"><TBODY>
<TR>
  <?php if($_SESSION['is_syn'] == 0): ?><th valign="top"><span class="red">*</span>关键词：</th>
  <TD>
	<input type="input" class="px" id="keyword" value="<?php if($vo['keyword'] == ''): ?>刮刮卡<?php else: echo ($vo["keyword"]); endif; ?>" name="keyword" style="width:400px" ><br />
  	<span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。
  </TD>
					<?php else: ?>
						<th valign="top"></th>
						<td><input type="hidden" class="px" id="keyword" value="<?php echo $_SESSION['is_syn'];?>" name="keyword" style="width:400px" /></td><?php endif; ?>
  <TD rowspan="7" valign="top">
	  <div style="margin-left:20px">
		<img id="pic1_src" src="<?php if($vo['starpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/User/default/common/images/img/activity-scratch-card-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" width="373px" >
		<br />
		<input class="px" id="pic1" name="starpicurl" value="<?php if($vo['starpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/User/default/common/images/img/activity-scratch-card-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>"   onclick="document.getElementById('pic1_src').src=this.value;" style="width:363px;"  />
		<br /><input name="type" value="2" type="hidden"   />
		 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a>&nbsp;活动开始图片
	  </div>
  </TD>
</TR>
<TR>
  <th valign="top"><span class="red">*</span>活动名称：</th>
  <TD>
	<input type="input" class="px" id="title" value="<?php if($vo['title'] == ''): ?>刮刮卡活动开始了<?php else: echo ($vo["title"]); endif; ?>" name="title" style="width:400px" />
  	<br />
  	请不要多于50字!
  </TD>
  <TR>
  	<th valign="top"><span class="red">*</span>兑奖信息：</th>
  	<td>
		<input type="input" class="px" id="txt" value="<?php if($vo['txt'] == ''): ?>兑奖请联系我们，电话138********<?php else: echo ($vo["txt"]); endif; ?>" name="txt" style="width:400px" />
  		<br />请不要多于100字! 这个设定但用户输入兑奖时候的显示信息!
	</td>
  </TR>
 <TR>
  	<th valign="top"><span class="red">*</span>中奖提示：</th>
  	<td><textarea class="px" id="sttxt"  name="sttxt" style="width:400px"  ><?php echo ($vo["sttxt"]); ?></textarea>
  		 </td>
</TR>
<TR>
	<th><span class="red">*</span>活动时间：</th>
	<td><input type="input" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d H:i",$vo["statdate"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" name="statdate" />
		到
		<input type="input" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d H:i",$vo["enddate"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})"  />
	</td>
</TR>
<TR>
<th valign="top">活动说明：</th>
<td><textarea  class="px" id="info" name="info"  style="width:400px; height:125px" ><?php if($vo['info'] == ''): ?>亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！<?php else: echo ($vo["info"]); endif; ?></textarea><br />换行请输入
 &lt;br&gt;
 </td>
</TR>
<tr>
	<th>背景图片</th>
	<td>
		<input type="input" class="px" id="bg" name="bg" style="width:200px" value="<?php echo ($vo["bg"]); ?>"/>
		<a href="###" onclick="upyunPicUpload('bg',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a>
		<a href="###" onclick="viewImg('bg')">预览</a>
		&nbsp;为空为默认背景
	</td>
</tr>
<tr>
	<th>背景类型</th>
	<td>
		<input class="radio" type="radio" id="bgtype0" name="bgtype" value="0" <?php if($vo['bgtype'] == 0){echo "checked";}?>/><label for="bgtype0">平铺</label>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="radio" type="radio" id="bgtype1" name="bgtype" value="1" <?php if($vo['bgtype'] == 1){echo "checked";}?>/><label for="bgtype1">填充</label>
		<br/>
		选择平铺建议选择在平铺时上下左右可以相连的小图片。
		<br/>
		选择填充建议选择符合手机尺寸的图片。
	</td>
</tr>
</TBODY>
</TABLE>
  </div>

<!--活动结束-->
<div class="cLineB">
          	<h4>活动结束内容</h4></div>
<div class="msgWrap bgfc">

  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
  				<th valign="top"><span class="red">*</span>活动结束公告主题：</th>
  				<td><input type="input" class="px" id="endtite" value="<?php if($vo['endtite'] == ''): ?>刮刮卡活动已经结束了<?php else: echo ($vo["endtite"]); endif; ?>" name="endtite" style="width:400px" />
  					<br />
  					请不要多于50字! </td>
  				<td rowspan="4" valign="top"><div style="margin-left:20px"><img  id="pic2_src" src="<?php if($vo['endpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/User/default/common/images/img/activity-scratch-card-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>"  width="373px"/> <br />
  					<input class="px" id="pic2" name="endpicurl" value="<?php if($vo['endpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/User/default/common/images/img/activity-scratch-card-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>"  onchange="document.getElementById('pic2_src').src=this.value;"  style="width:363px;"  />
  					<br />
  					 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a>&nbsp;活动结束图片</div></td>
  				</tr>
  			<tr>
  				<th valign="top">活动结束说明：</th>
  				<td valign="top"><textarea  class="px" id="endinfo" name="endinfo"  style="width:400px; height:125px" ><?php if($vo['endinfo'] == ''): ?>亲，活动已经结束，请继续关注我们的后续活动哦。<?php else: echo ($vo["endinfo"]); endif; ?></textarea><br />换行请输入
 &lt;br&gt;
  				  </td>
  				</tr>
  			</tbody>
  		</table>
  </div>


<!--奖项设置-->
<div class="cLineB">
          	<h4>奖项设置</h4></div>
<div class="msgWrap bgfc">

<TABLE class="userinfoArea" style=" margin: 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
<TBODY>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品设置：</th>
<td><input type="input" class="px" id="fist"   name="fist" value="<?php echo ($vo["fist"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
  <TD rowspan="9" valign="top">&nbsp;</TD>
</TR>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品数量：</th>
<td><input type="input" class="px" id="fistnums" name="fistnums"      value="<?php echo ($vo["fistnums"]); ?>" style="width:60px" />
  <span class="red">如果是100%中奖,请把一等奖的奖品数量[ 1000就代表前1000人都中奖 ]填写多点</span></td>
                                      </TR>
<TR>
<th valign="top">二等奖奖品设置：</th>
<td><input type="input" class="px" id="second" name="second"     value="<?php echo ($vo["second"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
                                          </TR>
<TR>
<th valign="top">二等奖奖品数量：</th>
<td><input type="input" class="px" id="secondnums" name="secondnums"   value="<?php echo ($vo["secondnums"]); ?>" style="width:60px" />
</td>
                                          </TR>
<TR>
<th valign="top">三等奖奖品设置：</th>
<td><input type="input" class="px" id="third" name="third"   value="<?php echo ($vo["third"]); ?>" style="width:250px" />
请不要多于50字! </td>

                                          </TR>
<TR>
<th valign="top">三等奖奖品数量：</th>
<td><input type="input" class="px" id="thirdnums" name="thirdnums"     value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px" />
</td>

                                          </TR>
<TR>
<th valign="top">四等奖奖品设置：</th>
<td><input type="input" class="px" id="four" name="four"   value="<?php echo ($vo["four"]); ?>" style="width:250px" />
请不要多于50字! </td>

                                          </TR>
<TR>
<th valign="top">四等奖奖品数量：</th>
<td><input type="input" class="px" id="fournums" name="fournums"     value="<?php echo ($vo["fournums"]); ?>" style="width:60px" />
</td>

                                          </TR>
<TR>
<th valign="top">五等奖奖品设置：</th>
<td><input type="input" class="px" id="five" name="five"   value="<?php echo ($vo["five"]); ?>" style="width:250px" />
请不要多于50字! </td>

                                          </TR>
<TR>
<th valign="top">五等奖奖品数量：</th>
<td><input type="input" class="px" id="fivenums" name="fivenums"     value="<?php echo ($vo["fivenums"]); ?>" style="width:60px" />
</td>

                                          </TR>
<TR>
<th valign="top">六等奖奖品设置：</th>
<td><input type="input" class="px" id="six" name="six"   value="<?php echo ($vo["six"]); ?>" style="width:250px" />
请不要多于50字! </td>

                                          </TR>
<TR>
<th valign="top">六等奖奖品数量：</th>
<td><input type="input" class="px" id="sixnums" name="sixnums"     value="<?php echo ($vo["sixnums"]); ?>" style="width:60px" />
</td>

                                          </TR>

  </tbody>
 <tbody>
<TR>
<th valign="top"><span class="red">*</span>预计活动的人数：</th>
<td><input type="input" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 。<span class='red'>若想百分百中奖请按照算法得出中奖概率的值等于1</span></td>
  </TR>
                                <TR>
<th valign="top"><span class="red">*</span>每人抽奖总次数：</th>
<td><input type="input" class="px" id="canrqnums" name="canrqnums"   value="<?php echo ($vo["canrqnums"]); ?>" style="width:150px"/>
必须是数字</td>
 </TR>
<tr>
<th valign="top"><span class="red"></span>每人每天最多抽奖次数：</th>
<td><input class="px" id="daynums" name="daynums" style="width:150px" value="<?php echo ($vo["daynums"]); ?>" type="input">
必须小于每人抽奖总次数！ 0 为不限制 抽完总数就不能抽了! 可以抽奖天数 = 总数/每人每天抽奖次数!</td>
</tr>
<tr>
	<th>每人中奖次数：</th>
	<td>
		<input type="input" class="px" id="maxgetprizenum" name="maxgetprizenum" style="150px" value="<?PHP if($vo['maxgetprizenum'] == ''){echo 1;}else{echo $vo['maxgetprizenum'];}?>"> <span class="red">请在活动说明中写清楚每人中奖次数</span>
	<td>
</tr>
<tr>
	<th>是否限制每人每天只中一次奖：</th>
	<td>
		<input class="radio" type="radio" name="isdaylottery" value="1" id="isdaylottery1" <?PHP if($vo['isdaylottery'] == 1){echo 'checked';}?>/><label for="isdaylottery1"> 是 </label>
		<input class="radio" type="radio" name="isdaylottery" value="0" id="isdaylottery0" <?PHP if($vo['isdaylottery'] == 0){echo 'checked';}?>/><label for="isdaylottery0"> 否 </label>
		<br/>
		<span class="red">（若选择“是”，将在网友当天中了一次奖后24小时内不能再玩，抽奖次数也不会再累加，请在活动说明中写清楚限制了每人每天只中一次奖！）</span>
	</td>
</tr>
<tr>
	<th>每人每次中奖时间间隔：</th>
	<td>
		<input type="input" class="px" name="timespan" style="width:150px" value="<?PHP if($vo['timespan'] != ''){echo $vo['timespan'];}else{echo 0;}?>"/> 默认0为没有时间间隔。单位（分钟）。设置次项大于零则网友中奖之后在XX分钟内不会再中奖，抽奖次数依然累加。
	</td>
</tr>
<tr style="display:none">
<th valign="top">SN码生成设置：</th>
<td>
    <input class="radio" type="radio" checked name="snimport" value="0">自动生成
    <input class="radio" type="radio" name="snimport" value="1">手动生成(SN码管理)
</td>
</tr>
<tr>
<th valign="top"><span class="red">*</span>兑奖密码：</th>
<td><input class="px" id="parssword" name="parssword" value="<?php echo ($vo["parssword"]); ?>" style="width:150px" type="input">
消费确认密码长度小于15位</td>
                                        </tr>
                                                                       <tr>
<th valign="top">SN码重命名为：</th>
<td><input class="px" id="renamesn" name="renamesn" value="<?php if($vo.renamesn): echo ($vo["renamesn"]); else: ?>SN码<?php endif; ?>" style="width:150px" type="input"> 例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称，不懂请别修改</td>
                                        </tr>
                                         <tr>
<th valign="top">手机号重命名：</th>
<td><input class="px" id="renametel" name="renametel" value="<?php if($vo.renametel): echo ($vo["renametel"]); else: ?>手机号<?php endif; ?>" style="width:150px" type="input"> 例如：QQ号,微信号,手机号等其他联系方式，不懂请别修改</td>
                                        </tr>
<TR>
	<th valign="top">抽奖页面是否显示奖品数量：</th>
	<td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td>
</TR>
<TR>
	<th valign="top">非关注用户是否可以参与活动：</th>
	<td><input class="radio" type="radio" name="guanzhu" value="1"  <?php if($vo['guanzhu'] == 1): ?>checked<?php endif; ?> > 是  <input class="radio" type="radio" name="guanzhu" value="0"  <?php if($vo['guanzhu'] == 0): ?>checked<?php endif; ?>> 否 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($__access_remind__); ?>
</td>
</TR>
<TR>
	<th valign="top">是否需要粉丝详细信息：</th>
	<td><input class="radio" type="radio" name="needreg" value="1"  <?php if($vo['needreg'] == 1): ?>checked<?php endif; ?> > 是  <input class="radio" type="radio" name="needreg" value="0"  <?php if($vo['needreg'] == 0): ?>checked<?php endif; ?>> 否 &nbsp;&nbsp;&nbsp;（没有粉丝详细信息参加活动的处理方式）</td>
</TR>
<TR>
<th>&nbsp;</th>
<td><button type="submit" class="btnGreen" >保存</button>　<a href=""  class="btnGray vm">取消</a></td>
</TBODY>
</TABLE>
  </div>
 </div>
</form>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
	//onFocus事件就是当光标落在文本框中时发生的事件。
	//onBlur事件是光标失去焦点时发生的事件。
	function onfocus(obj){
		obj.html = '';
	}
	function onblur(obj,str){
		obj.html = str;
	}
  </script>
<!--底部-->
</div>
<script>
$(document).ready(function(){
	$("form").submit(function(){
		var keyword = $('#keyword').val();//关键词
		var title = $('#title').val();//活动名称
		var txt = $('#txt').val();//兑奖信息
		var sttxt = $('#sttxt').val();//中奖提示
		var statdate = $('#statdate').val();//活动开始时间
		var enddate = $('#enddate').val();//活动结束时间
		var endtite = $('#endtite').val();//活动结束公告主题
		var fist = $('#fist').val();//一等奖奖品设置
		var fistnums = $('#fistnums').val();//一等奖奖品数量
		var allpeople = $('#allpeople').val();//预计活动的人数
		var canrqnums = $('#canrqnums').val();//每人抽奖总次数
		var parssword = $('#parssword').val();//兑奖密码
		
		if(keyword == ""){
			alert("请填写关键词");
			buterror(0,"#keyword");
			return false;
		}else if(title == ""){
			alert("请填写活动名称");
			buterror(0,"#title");
			return false;
		}else if(txt == ""){
			alert("请填写兑奖信息");
			buterror(0,"#txt");
			return false;
		}else if(sttxt == ""){
			alert("请填写中奖提示");
			buterror(0,"#sttxt");
			return false;
		}else if(statdate == ""){
			alert("请选择活动开始时间");
			buterror(0,"#statdate");
			return false;
		}else if(enddate == ""){
			alert("请选择活动结束时间");
			buterror(0,"#enddate");
			return false;
		}else if(endtite == ""){
			alert("请填写活动结束公告主题");
			buterror(0,"#endtite");
			return false;
		}else if(fist == ""){
			alert("请填写一等奖奖品设置");
			buterror(0,"#fist");
			return false;
		}else if(fistnums == ""){
			alert("请填写一等奖奖品数量");
			buterror(0,"#fistnums");
			return false;
		}else if(allpeople == ""){
			alert("请填写预计活动的人数");
			buterror(0,"#allpeople");
			return false;
		}else if(canrqnums == ""){
			alert("请填写每人抽奖总次数");
			buterror(0,"#canrqnums");
			return false;
		}else if(parssword == ""){
			alert("请填写兑奖密码");
			buterror(0,"#parssword");
			return false;
		}else{
			return true;
		}
	});
});
function buterror(type,id,id2){
	if(type == 0){
		$("html,body").animate({scrollTop: $(id).offset().top}, 500);
	}else{
		$("html,body").animate({scrollTop: $(".topbg").offset().top}, 500);
	}
	$(id).css("border","2px solid red");
	$(id).css("background-color","rgb(255, 223, 221)");
	$(id).focus(function(){
		$(id).css("background-color","#fff");
		$(id2).css("background-color","#fff");
		$(id).css("border","1px solid");
		$(id).css("border-color","#848484 #E0E0E0 #E0E0E0 #848484");
		$(id2).css("border","1px solid");
		$(id2).css("border-color","#848484 #E0E0E0 #E0E0E0 #848484");
	});
	$(id2).css("border","2px solid red");
	$(id2).css("background-color","rgb(255, 223, 221)");
	$(id2).focus(function(){
		$(id2).css("border","1px solid");
		$(id2).css("border-color","#848484 #E0E0E0 #E0E0E0 #848484");
		$(id).css("border","1px solid");
		$(id).css("border-color","#848484 #E0E0E0 #E0E0E0 #848484");
	});
}
</script>
</div>
</div>
</div>
<?php if($_SESSION['is_syn']== 0): ?><style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot" style="padding-top:20px;">
<div class="foot_page" >
<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>,微信公众平台营销</a><br/>
帮助您快速搭建属于自己的营销平台,构建自己的客户群体。
</div>
<div id="copyright" style="color:white;">
	<?php echo ($f_siteName); ?>(c)版权所有 <a href="http://www.miibeian.gov.cn" target="_blank" style="color:white"><?php echo C('ipc');?></a><br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($f_qq); ?>:51" alt="联系我吧" title="联系我吧"/></a>

</div>
    </div>
</div>
<!-- 帮助悬浮开始 -->
<?php if(C('close_help') == 0){ $data_g=GROUP_NAME; $users=M('Users')->where(array('id'=>$_SESSION['uid']))->find(); if(C('close_help') == 1 && $users['sysuser'] == 0){ $data_g='notingh'; }else{ $textHelp=0; $data = array( 'key' => C('server_key'), 'domain' => C('server_topdomain'), 'is_text' => $textHelp, 'data_g' => $data_g, 'data_m' => MODULE_NAME, 'data_a' => ACTION_NAME ); if(function_exists('curl_init')){ $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, 'http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data)); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HEADER, 0); $content = curl_exec($ch);curl_close($ch); }else{ $content = file_get_contents('http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data)); } $content = json_decode($content,true); } } ?>
<?php if(!empty($content)):?>
	<link href="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/css/zuoce.css" type="text/css" rel="stylesheet"/>
	<div class="zuoce zuoce_clear">
		<div id="Layer1">
			<a href="javascript:"><img src="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/images/ou_03.png"/></a>
		</div>
		<div id="Layer2" style="display:none;height:400px;overflow-y:scroll;">
			<p class="xiangGuan zuoce_clear">相关帮助</p>
			<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><p class="lianjie zuoce_clear"><a href="javascript:openwin('http://sharp2008.vhost024.dns345.cn/oa/admin_help_<?php echo ($list['id']); ?>.html',768,960)" <?php if($list['is_video'] == 1): ?>class="video"<?php else: ?>class="writing"<?php endif; ?>><?php echo ($list["title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--p class="anNiuo clear"><a href="#">进入帮助中心234</a></p-->
			<p class="anNiut zuoce_clear"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank">在线客服</a></p>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function(){
			var oDiv1 = document.getElementById('Layer1');
			var oDiv2 = document.getElementById('Layer2');
			oDiv1.onclick = function(){
				oDiv2.style.display = oDiv2.style.display == 'block' ? 'none' : 'block';
			}
		}
		function openwin(url,iHeight,iWidth){
			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;
			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");
		}
	</script><?php endif; ?>
<!-- 帮助悬浮结束 -->
<div style="display:none">
<?php echo ($alert); ?> 
<?php echo base64_decode(C('countsz'));?>
</div>
<?php endif;?>
</body>

<?php if(MODULE_NAME == 'Function' && ACTION_NAME == 'welcome'){ ?>
<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>

<script type="text/javascript">


    var myChart = echarts.init(document.getElementById('main')); 
   

    var option = {
        title : {
            text: '<?php if($charts["ifnull"] == 1): ?>本月关注和文本请求数据统计示例图(您暂时没有数据)<?php else: ?>本月关注和文本请求数据统计<?php endif; ?>',
            x:'left'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['文本请求数','关注数'],
            x: 'right'
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: false},
                dataView : {show: false, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: false} ,
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : [<?php echo ($charts["xAxis"]); ?>]
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'文本请求数',
                type:'line',
                tiled: '总量',
                data: [<?php echo ($charts["text"]); ?>]
            },    
            {
                "name":'关注数',
                "type":'line',
                "tiled": '总量',
                data:[<?php echo ($charts["follow"]); ?>]
            }
       

        ]

    };                   

    myChart.setOption(option); 


    var myChart2 = echarts.init(document.getElementById('pieMain')); 
               
    var option2 = {
        title : {
            text: '<?php if($pie["ifnull"] == 1): ?>7日内粉丝行为分析示例图(您暂时没有数据)<?php else: ?>7日内粉丝行为分析<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'粉丝行为统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[ 
                    <?php echo ($pie["series"]); ?>
                
                ]
            }
        ]
    };
     myChart2.setOption(option2,true); 


    var myChart3 = echarts.init(document.getElementById('pieMain2')); 
    var option3 = {
        title : {
            text: '<?php if($sex_series["ifnull"] == 1): ?>会员性别统计示例图(您暂时没有数据)<?php else: ?>会员性别统计<?php endif; ?>',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : false,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'会员性别统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '18',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[
                  <?php echo ($sex_series['series']); ?>
                ]
            }
        ]
    };                     

  myChart3.setOption(option3,true); 



    </script>
<?php } ?>

<?php if(MODULE_NAME == 'RecognitionData' && ACTION_NAME == 'index'){?>
	<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>

	<script type="text/javascript">
	<?php if($_GET['rid'] != ''){?>
		var myChart = echarts.init(document.getElementById('main')); 
	   

		var option = {
			title : {
				//text: '<?php if($charts["ifnull"] == 1): ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计示例图（没有数据）<?php else: ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计<?php endif; ?>',
				x:'left'
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['每日扫描次数','每日扫描人数'],
				x: 'right'
			},
			toolbox: {
				show : false,
				feature : {
					mark : {show: false},
					dataView : {show: false, readOnly: false},
					magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
					restore : {show: false} ,
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					boundaryGap : false,
					data : [<?php echo ($charts["xAxis"]); ?>]
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'每日扫描次数',
					type:'line',
					tiled: '总量',
					data: [<?php echo ($charts["cishu"]); ?>]
				},    
				{
					"name":'每日扫描人数',
					"type":'line',
					"tiled": '总量',
					data:[<?php echo ($charts["renshu"]); ?>]
				}
		   

			]

		};                   

		myChart.setOption(option); 
	<?php }else{?>
		var myChart2 = echarts.init(document.getElementById('pieMain')); 
				   
		var option2 = {
			title : {
				//text: '<?php if($cishu["ifnull"] == 1): ?>本月扫描次数分析示例图（没有数据）<?php else: ?>本月扫描次数分析图<?php endif; ?>',
				x:'center'
			},
			tooltip : {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			toolbox: {
				show : false,
				feature : {
					mark : {show: true},
					dataView : {show: true, readOnly: false},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			series : [
				{
					name:'本月扫描次数统计',
					type:'pie',
					radius : ['50%', '70%'],
					itemStyle : {
						normal : {
							label : {
								show : false
							},
							labelLine : {
								show : false
							}
						},
						emphasis : {
							label : {
								show : true,
								position : 'center',
								textStyle : {
									fontSize : '18',
									fontWeight : 'bold'
								}
							}
						}
					},
					data:[ 
						<?php echo ($cishu["series"]); ?>
					
					]
				}
			]
		};
		 myChart2.setOption(option2,true); 
		 
		 
		
		var myChart3 = echarts.init(document.getElementById('pieMain2')); 
		var option3 = {
			title : {
				//text: '<?php if($renshu["ifnull"] == 1): ?>本月扫描人数分析示例图（没有数据）<?php else: ?>本月扫描人数分析图<?php endif; ?>',
				x:'center'
			},
			tooltip : {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			toolbox: {
				show : false,
				feature : {
					mark : {show: true},
					dataView : {show: true, readOnly: false},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			series : [
				{
					name:'本月扫描人数统计',
					type:'pie',
					radius : ['50%', '70%'],
					itemStyle : {
						normal : {
							label : {
								show : false
							},
							labelLine : {
								show : false
							}
						},
						emphasis : {
							label : {
								show : true,
								position : 'center',
								textStyle : {
									fontSize : '18',
									fontWeight : 'bold'
								}
							}
						}
					},
					data:[
					  <?php echo ($renshu['series']); ?>
					]
				}
			]
		};                     

	  myChart3.setOption(option3,true); 
	<?php }?>
	</script>
<?php }?>
</html>
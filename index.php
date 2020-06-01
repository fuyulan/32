<?php
error_reporting(0); 
$pass= $_POST;
$sj = rand(123,999);
if (empty($_COOKIE["pass"])) {
	setcookie("pass",$sj, time()+86400);
	echo "<script language='JavaScript'> 
function myrefresh() 
{ 
window.location.reload(); 
} 
setTimeout('myrefresh()',10); //指定1秒刷新壹次 
</script>";
}
if($_COOKIE["zt"]!=="ok"){
      if($pass[pass]=="" || $pass[pass]!=$_COOKIE["pass"]) {
echo '
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>请输入密码哦</title>
    <meta name="keywords" content="我是关键词">
    <meta name="description" content="我是介绍 ">
   <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
   <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
   <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="/n.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="/n.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block " style="float: none;">
  <br /><br /><br />
    <div class="widget">
<p></p>
    </div>

    <div class="block">
        <div class="block-title">
            <div class="block-options pull-right">
            <a href="../" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip">返回首頁</a>
            </div>
            <h2><b>输入密码可见</b></h2>
        </div>
          <form action="" method="post" role="form">
            <div class="input-group"><div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
              <input type="password" name="pass" class="form-control" required="required" placeholder="请输入密码"/>
            </div><br/>
            <div class="form-group">
              <input type="submit" value="OK" class="btn btn-primary btn-block"/>
            </div>
<br><center><h2>密码: '.$_COOKIE["pass"].'</h2></center>
</form>
    </div>
  </div>';
    die();
}else{
    setcookie("zt", "ok", time()+86400);
}
}else{
  	
}


?>
<html lang="zh"><head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
</script><script language="JavaScript">step=0 
	document.addEventListener('visibilitychange',
 function newtext(){
if(document.visibilityState=='hidden') 
{step++
  if (step==3) {document.title='恭喜您获得苹果X手机一部，快回来领取'} 
  if (step==1) {document.title='恭喜您获得10元话费，快回来领取'}
  if (step==2) {document.title='恭喜您获得100元话费，快回来领取'}
  if (step==4) {document.title='恭喜您获得女朋友一枚，快回来领取'}
  if (step==5) {document.title='恭喜您获得别墅一栋，快回来领取'}
   if (step>=6) {document.title='恭喜您获得劳斯莱斯一辆，快回来领取'}
}
else
document.title='爱你书签网-人类必备的网站';
});	
</script>
<meta name="keywords" content="爱你影院">
<meta name="description" content="爱你影院"><link rel="shortcut icon" href="favicon.ico">
<link href="bo/1.css" rel="stylesheet" type="text/css">
<style type="text/css">
/* 渐入渐出 */
@-webkit-keyframes fadeIn {
0% {
opacity: 0; /*初始状态 透明度为0*/
}
50% {
opacity: 0; /*中间状态 透明度为0*/
}
100% {
opacity: 1; /*结尾状态 透明度为1*/
}
}
@-webkit-keyframes fadeOut {
0% {
opacity: 1; /*初始状态 透明度为1*/
}
50% {
opacity: 0; /*中间状态 透明度为0*/
}
100% {
opacity: 0; /*结尾状态 透明度为0*/
}
}
.in
{-webkit-animation-name: fadeIn; /*动画名称*/
-webkit-animation-duration: 2s; /*动画持续时间*/
-webkit-animation-iteration-count: 1; /*动画次数*/
-webkit-animation-delay: 0s; /*延迟时间*/}
.out
{-webkit-animation-name: fadeOut; /*动画名称*/
-webkit-animation-duration: 3s; /*动画持续时间*/
-webkit-animation-iteration-count: 1; /*动画次数*/
-webkit-animation-delay: 0s; /*延迟时间*/}

.bt
{
	width: 50%;
}
  
/* 滚动条美化css begin */

/* 这是针对缺省样式 (必须的) */
::-webkit-scrollbar {
		  width: 5px;
	} 
/* 滚动条的滑轨背景颜色 */
::-webkit-scrollbar-track {
		  background-color: #FFFFFF;
	} 
/* 滑块颜色 */
::-webkit-scrollbar-thumb {
		  background-color:#000000; 
	} 
/* 滑轨两头的监听按钮颜色 */
::-webkit-scrollbar-button {
		  background-color: #000000;
	} 
/* 横向滚动条和纵向滚动条相交处尖角的颜色 */
::-webkit-scrollbar-corner {
		  background-color: black;
	}
/* 滚动条美化css end*/
</style>
</head>
<body id="body" class="mdui-drawer-body mdui-appbar-with-toolbar mdui-loaded" onload="resizeFrameHeight()">

<div class="mdui-appbar mdui-appbar-fixed mdui-shadow-0" id="banner">
<div class="mdui-toolbar mdui-color-white">
<a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" id="toggle" mdui-tooltip="{content: '爱你影院'}"><i class="mdui-icon material-icons">≡</i></a>
<a href="javascript:;" onclick="javascript:history.back()" class="mdui-btn mdui-btn-icon mdui-ripple" id="toggle" mdui-tooltip="{content: '后退'}"><i class="mdui-icon material-icons">⤵</i></a>
<input class="mdui-textfield-input" type="text" id="kw" name="input" autofocus="autofocus" maxlength="100" autocomplete="off" placeholder="输入 视频地址 或 电影名称 回车 | 如不能正常播放点击右侧按钮更换通道">
<div class="mdui-toolbar-spacer"></div>
<a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" id="toggler" mdui-tooltip="{content: '如不能播放请更换其他通道尝试'}"><i class="mdui-icon material-icons">▶</i></a>
<a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-ripple" mdui-tooltip="{content: '夜间模式'}" onclick="yejian();"><i class="mdui-icon material-icons">🌓</i></a>
</div>
</div>

<div class="mdui-progress" id="load" style="display:none;">
<div class="mdui-progress-indeterminate"></div>
</div>
<div class="in" style="margin-top: 0px">
<iframe name="mainiframe" src="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b97842705c426449fea1ce9e067e2b215a3d28f3415fcbe30c6db73827bd3da42e54c8a465fd0839687685ae4aabc427911" id="mainiframe" marginwidth="0" marginheight="0" allowtransparency="true" onload="resizeFrameHeight()" frameborder="0" width="100%" style="background-color=transparent;margin-top:-60px" height="534"></iframe>
</div>

<script type="text/javascript">
    function resizeFrameHeight() {
        var ifm = document.getElementById("mainiframe");
        ifm.height = document.documentElement.clientHeight - 10;
    }
    window.onresize=function() {
        resizeFrameHeight();
    }
</script>


<div class="mdui-drawer mdui-drawer-close mdui-shadow-0 mdui-hoverable" id="drawer" style="border:1px solid #EBEBEB;">
<ul class="mdui-list" mdui-collapse="{accordion: true}">
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons">😊</i>
<div class="mdui-list-item-content" onclick="home();loading();leftlist.toggle();" mdui-tooltip="{content: '返回首页'}">解析导航</div>
</div>
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons">😏</i>
<div class="mdui-list-item-content" onclick="dh();loading();leftlist.toggle();" mdui-tooltip="{content: '虎牙直播'}">虎牙直播</div>
</div>
<li class="mdui-collapse-item mdui-collapse-item-open">
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons">😊</i>
<div class="mdui-list-item-content">分类</div><i class="mdui-collapse-item-arrow mdui-icon material-icons">︿</i>
</div>
<ul class="mdui-collapse-item-body mdui-list mdui-list-dense" mdui-drawer-close="">
<li class="mdui-list-item mdui-ripple" onclick="movie();loading();leftlist.toggle();">电影</li>
<li class="mdui-list-item mdui-ripple" onclick="tv();loading();leftlist.toggle();">电视剧</li>
<li class="mdui-list-item mdui-ripple" onclick="zongyi();loading();leftlist.toggle();">综艺</li>
<li class="mdui-list-item mdui-ripple" onclick="dongman();loading();leftlist.toggle();">动漫</li>
<li class="mdui-list-item mdui-ripple" onclick="music();loading();leftlist.toggle();">音乐</li>
<li class="mdui-list-item mdui-ripple" onclick="cx();loading();leftlist.toggle();">尝鲜</li>
<li class="mdui-list-item mdui-ripple" onclick="txt();loading();leftlist.toggle();">小说</li>
<li class="mdui-list-item mdui-ripple" onclick="zhibo();loading();leftlist.toggle();">电视直播</li>
<li class="mdui-list-item mdui-ripple" onclick="xjjbo();loading();leftlist.toggle();">小姐姐live直播</li>
</ul>
</li>
<li class="mdui-collapse-item mdui-collapse-item-open">
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons">😇</i>
<div class="mdui-list-item-content">常用站点</div>
<i class="mdui-collapse-item-arrow mdui-icon material-icons">︿</i>
</div>
<ul class="mdui-collapse-item-body mdui-list mdui-list-dense" mdui-drawer-close="">
<a href="https://fnxjj.icu/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">粉嫩小姐姐</li></a><a href="http://jins365.com/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">今日影视TV版APP</li></a><a href="https://www.nddfby.com/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">百度红影院</li></a>
<a href="https://www.hxtx.xyz/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">红飘带影院</li></a><a href="http://yy.woaini.email"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">爱你影院</li></a>
<a href="https://demo.lebozy9.com/"><li class="mdui-list-item mdui-ripple" onclick="vqq();loading();leftlist.toggle();">乐播影院</li></a>
<a href="http://go.woaini.email"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">格斗影院</li>
<a href="https://www.nettv.live/m/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">电视台直播</li></a>
<a href="https://github.com/Hidove"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">自动采集程序</li></a>
<a href="http://www.appleft.com"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">aa小说下载阅读器</li></a>
<a href="https://www.lanzous.com/i2ilrcf"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">讯飞语记去广告版</li></a>
<a href="http://www.zy40.cn/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">智云论坛</li></a>
<a href="http://www.pv00.com"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">pv电影网</li></a>
<a href="http://m.zy40.cn/live"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">聚合直播</li></a>
<a href="http://m.zy40.cn/z/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">全球直播</li></a>
<a href="http://m.zy40.cn/ys/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">智云影院</li></a><a href="http://m.zy40.cn/z/tua.php"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">动漫美图</li></a>
<a href="http://k.zy40.cn"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">写真视频</li></a>
<a href="http://m.zy40.cn/zb/"><li class="mdui-list-item mdui-ripple" onclick="mgtv();loading();leftlist.toggle();">聚合直播</li></a>
</ul>
</li>
<li class="mdui-collapse-item mdui-collapse-item-open">
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons">😜</i>
<div class="mdui-list-item-content">实验室</div>
<i class="mdui-collapse-item-arrow mdui-icon material-icons">︿</i>
</div>
<ul class="mdui-collapse-item-body mdui-list mdui-list-dense" mdui-drawer-close="">
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://cc.1xie.xyz/home">免费二级域名转发</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://host.iisat.cn/">爱上免费空间(一年)</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://9caoidc.com">9c免费空间</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://weidian.com">微店卖流量卡</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://img.abcyun.co/free/">聚合图床</a>
</li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://img.abcyun.co/">聚合图床备用</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://xiuxiu.web.meitu.com/main.html">美图秀秀网页版</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://ps.gaoding.com">网页版PS</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://www.xcsos.cn/diy/ps/">在线PS</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="https://www.sukoutu.com">抠图网页版</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://www.uugai.com/">logo制作</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://www.bitbug.net/">ICO图标制作</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://www.gif5.net/">GIF图片制作</a></li>
<li class="mdui-list-item mdui-ripple" onclick="loading();leftlist.toggle();"><a href="http://matting.deeplor.com">在线抠图网页版</a></li>
</ul>
</li>

</ul>
</div>

<div class="mdui-drawer  mdui-drawer-right mdui-drawer-close mdui-shadow-0 mdui-hoverable" id="drawerr" style="border:1px solid #EBEBEB;">
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" mdui-tooltip="{content: '仅在搜索框输入网址时切换通道'}">仅在搜索框输入网址时有效</button>
<div class="mdui-divider"></div>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="a();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">解析大师</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="b();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">我爱解析</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="c();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="d();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="e();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="f();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="g();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="h();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="i();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="j();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="k();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="l();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="m();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="n();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="o();loading();rightlist.toggle();" mdui-tooltip="{content: '如不能正常播放请更换通道'}">缺货</button>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" onclick="p();loading();rightlist.toggle();" mdui-tooltip="{content: '任意邮箱地址'}">提交接口</button>
<br>
<div class="mdui-divider"></div>
<button class="mdui-btn mdui-ripple mdui-btn-block mdui-text-truncate" mdui-tooltip="{content: '失效通道提交待完善...'}">通道失效不能播放?</button>
<div class="mdui-divider"></div>
</div>

<script type="text/javascript">
  // 搜索
function home(){document.getElementById("mainiframe").src="https://bbs.zhanzhangwo.com/search-_E8_A7_A3_E6_9E_90-1-1.htm";}
function dh(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/huya.html";}
function login(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/search/index.html?wd=";}
function movie(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/index/vodType/1.html";}
function tv(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/index/vodType/2.html";}
function zongyi(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/index/vodType/3.html";}
function dongman(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/index/vodType/4.html";}
function music(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/index/music";}
function cx(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/type/zztj.html";}
function txt(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/index/book";}
function zhibo(){document.getElementById("mainiframe").src="zb/index.php";}
function xjjbo(){document.getElementById("mainiframe").src="xjj/index.php";}
function search(){document.getElementById("mainiframe").src="http://cms.xiaosaobi.vip/index/search/index.html?wd="+document.getElementById("kw").value;}
function a(){document.getElementById("mainiframe").src="https://jx.htv009.com/?url="+document.getElementById("kw").value;}
function b(){document.getElementById("mainiframe").src="https://api.52jiexi.top/?url="+document.getElementById("kw").value;}
function c(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function d(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function e(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function f(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function g(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function h(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function i(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function j(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function k(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function l(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function m(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function n(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function o(){document.getElementById("mainiframe").src=""+document.getElementById("kw").value;}
function p(){document.getElementById("mainiframe").src="https://yzf.qq.com/xv/web/static/chat/index.html?sign=37ef9b97842705c426449fea1ce9e067e2b215a3d28f3415fcbe30c6db73827bd3da42e54c8a465fd0839687685ae4aabc427911"+document.getElementById("kw").value;}
</script>
<script src="bo/2.js" type="text/javascript"></script>
<script language="javaScript" type="text/javascript"> 
  // 夜间模式自动
var state;
now = new Date(),hour = now.getHours() 
if(hour < 6){
    document.getElementsByTagName("body")[0].setAttribute("class","mdui-drawer-body mdui-appbar-with-toolbar mdui-theme-layout-dark")
  state = 0;
} else if (hour > 21){
    document.getElementsByTagName("body")[0].setAttribute("class","mdui-drawer-body mdui-appbar-with-toolbar mdui-theme-layout-dark")
  state = 0;
} else {
    document.getElementsByTagName("body")[0].setAttribute("class","mdui-drawer-body mdui-appbar-with-toolbar")
  state = 1;
} 
</script>
<script type="text/javascript">
// 夜间模式手动
function yejian(){  
  if(state == '0') {
    document.getElementsByTagName("body")[0].setAttribute("class","mdui-drawer-body mdui-appbar-with-toolbar")
    state = 1;
  }else{
    document.getElementsByTagName("body")[0].setAttribute("class","mdui-drawer-body mdui-appbar-with-toolbar mdui-theme-layout-dark")
    state = 0;
  }
}
</script>
<script type="text/javascript">
//侧栏菜单js

var leftlist = new mdui.Drawer('#drawer');
var rightlist = new mdui.Drawer('#drawerr');

// method

document.getElementById('toggle').addEventListener('click', function () {
  leftlist.toggle();
});

document.getElementById('toggler').addEventListener('click', function () {
  rightlist.toggle();
});

// event
var drawer = document.getElementById('drawer');
drawer.addEventListener('open.mdui.drawer', function () {
  console.log('open');
});
drawer.addEventListener('opened.mdui.drawer', function () {
  console.log('opened');
});
drawer.addEventListener('close.mdui.drawer', function () {
  console.log('close');
});
drawer.addEventListener('closed.mdui.drawer', function () {
  console.log('closed');
});

</script>

<script type="text/javascript">
//按键识别
document.onkeydown=function(event){ 
e = event ? event :(window.event ? window.event : null); 
if(e.keyCode==13){ 
//执行的方法 
kw = document.getElementById("kw").value;
str = kw.match(/http.+/); 
if (str == null){ 
  search();
}else{
  a();
}
loading();
return false; 
}else if(e.keyCode==27){
  document.getElementById('kw').value = '';
}
} 
</script>


<script type="text/javascript">
    document.addEventListener('visibilitychange', function () {
    if (document.visibilityState == 'hidden') {
        normal_title = document.title;
        document.title = '等你回来... | 爱你影院';
    } else document.title = normal_title;
});
</script>


<script language="javascript" type="text/javascript">
function loadnone(){
var box=document.getElementById("load");
box.style.display="none"; 
}

function loading(){
var box=document.getElementById("load");
box.style.display=""; 
setTimeout("loadnone()",500);//0.5秒，可以改动
}
</script>
<style type="text/css">
#btmn_topleft{position:fixed;bottom:1px;left:1px;display:block; visibility:hidden; width:18px; height:18px;line-height:18px;text-align:center;font-size:14px;color:#9BBADC;background-color:#FFF;border:1px solid #5082BE;overflow:hidden;z-index:10000;padding:1px;}
#btmn_topleft a{color:#9BBADC !important;text-decoration:none;display:block;width:18px;height:18px;overflow:hidden;font:18px/18px \5b8b\4f53,sans-serif,tahoma,arial;}
#btmn_topleft a:hover{color:#5082BE !important;}
#btmn_wrap{width:100%;height:27px;z-index:10000;overflow:visible;visibility:hidden;position:fixed;bottom:0;left:0;background-color:#5082BE;}
#btmn_topb{margin:1px 0;padding:0;clear:both;height:1px;background-color:#9BBADC;line-height:1px;}
#btmn_nav{height:25px;line-height:25px;margin:1px 0 0 0;padding-left:10px;position:relative;}
#btmn_nav *{margin:0;padding:0;font-size:12px;font-weight:normal;font-style:normal;color:#FFF;}
#btmn_nav .btmn_item{float:left;margin-right:10px;}
#btmn_nav .btmn_sepr{float:left; margin:5px 5px 0 0; height:15px; width:0; border-left:1px solid #436B9B; border-right:1px solid #9BBADC; background-color:#5082BE;}
#btmn_nav a{color:#FFF !important;text-decoration:none;}
#btmn_nav a:hover{color:#F00 !important;}
#btmn_nav #btmn_link_co{position:absolute;left:0;right:0;bottom:27px;background:#5082BE;padding-left:10px;z-index:10001;text-align:left;}
#btmn_nav #btmn_link_co li{display:inline-block;float:left;margin-right:10px;height:25px;line-height:25px;color:#FFF;border:none !important;background:none !important;}
#btmn_nav #btmn_tj{position:absolute;left:0;right:0;bottom:27px;z-index:10001;}
#btmn_nav #btmn_tj ul{background:#5082BE;padding:2px 0 0 5px;max-height:300px;overflow-y:scroll;overflow-x:hidden;}
#btmn_nav #btmn_tj li{display:block;height:22px;line-height:22px;overflow:hidden;color:#FFF;border:none !important;background:none !important;clear:both;text-align:left;}
#btmn_nav #btmn_close{height:15px;line-height:15px;position:absolute;vertical-align:middle;right:4px;top:4px;width:15px;text-align:center;border:none;font-family:serif;z-index:10002;}
#btmn_nav #btmn_close a{color:#FFF;font-family:Tahoma;font-size:12px;text-decoration:none;text-align:center;display:block;width:13px;height:13px;line-height:13px;border:1px solid #FFF;}
#btmn_nav #btmn_close a:hover{color:red;border-color:red;}
#btmn_nav a.a_red{color:#FF0000 !important;}
#btmn_nav a.a_underline{text-decoration:underline !important;}
#btmn_nav .btmn_mask{width:100%;height:500px;background:#000;filter:alpha(opacity=70);-moz-opacity:0.7;opacity:0.7;}
#frm3TUI{position:absolute;left:0;right:0;bottom:27px;z-index:10002;text-align:left;font-size:12px;dbackground-color:#FFF;}
#frm3TUI form{background-color:#E7E9FD;border-top:2px solid #5082BE;padding:2px 0 0 5px;}
#frm3TUI input,#frm3TUI button{border:1px solid #999;padding:1px 3px;color:#000;}
#frm3TUI textarea{color:#000; border:1px solid #999;}
#frm3TUI h2{font-size:18px;font-weight:bold;margin:5px 0;}
#frm3TUI .btmn_td_line{color:#BBB;line-height:1.1;}
#frm3TUI .btmn_td_line b, #frm3TUI h2{color:#000;}
#frm3TUI .btmn_td_line_tip{color:#ff3333;background-color:#9BBADC;margin:3px 0;padding:3px;}
#frm3TUI .btmn_td_line input{margin:1px 0;}
#btmn_outer.btmn_showbar #btmn_topleft, #btmn_outer.btmn_showbar #btmn_wrap{display:block !important;}
@media screen and (orientation:landscape) and (max-height:480px) {
#btmn_outer.btmn_autobar{
#btmn_topleft, #btmn_wrap{display:none;}
}
}
</style>
<div id="btmn_outer" class="btmn_autobar">
<div id="btmn_topleft" style="visibility: hidden;"><a href="javascript:btmn_setenable(1,false,true);">████████<br>████████</a></div>
<div id="btmn_wrap" style="visibility: visible;">
<div id="btmn_topb"></div>
<div id="btmn_nav">
<div id="frm3TUI" style="display:none;">
<div class="btmn_mask" onclick="btmn_setvisible('');"></div>
<div class="btmn_td_line">
<div style="color:#000;background-color:#e5f0fd;margin:0px 0;padding:0px;">
</div><li><a href="https://www.ebay.com/usr/fulidh" target="_blank" class="a_red a_underline">柠檬导航</a></li><br><li><a href="https://mimi888.github.io/888/" target="_blank" class="a_red a_underline">导航联盟</a></li><br><li><a href="https://www.ebay.com/usr/zhaoav" target="_blank" class="a_red a_underline">找AV导航</a></li>
</div>
</div>
<ul id="btmn_link_co" style="display:none;"><li><a href="x/index.php" target="_blank">聚合资源站</a></li><br><li><a href="dh.php" target="_blank">在线电影网</a></li><br><li><a href="sq.php" target="_blank">爱你书签网</a></li></ul>
<div id="btmn_tj" style="display:none;"><div class="btmn_mask" onclick="btmn_setvisible('');"></div><ul><li>● <a href="http://axhd.tv/">爱杏HD</a></li><li>● <a href="http://番号鸽.com/">番号鸽</a></li><li>● <a href="https://820xy.com">嫩草影院</a></li><li>● <a href="https://xs.mantouzy6.com/">馒头小说</a></li><li>● <a href="http://www.miya116.com/">蜜芽TV</a></li><li>● <a href="https://www.wsdy2.com/">晚上影院</a></li></ul></div>
<div id="btmn_close"><a href="javascript:" onclick="btmn_setenable(0,true,true);">X</a></div>
<a class="btmn_item" href="javascript:" onclick="btmn_setvisible('btmn_link_co');">导航</a>
<a class="btmn_item" href="javascript:" onclick="btmn_setvisible('frm3TUI');">福利导航</a>
<!-- -->
<!-- /*guestbook_start*/ -->
<a class="btmn_item" href="http://789vpn.com">加速器集合</a>
<!-- /*guestbook_end*/ -->
<a class="btmn_item" href="javascript:" onclick="btmn_setvisible('btmn_tj');">今日推荐</a>
</div></div>
</div>
<script type="text/javascript">function btmn_setenable(v,showtip,setcookie){
if(setcookie){
document.cookie='_vdye='+v.toString()+'; path=/';
}
if(v==0){
document.body.style.marginBottom='0px';
document.getElementById('btmn_topleft').style.visibility='visible';
document.getElementById('btmn_wrap').style.visibility='hidden';
btmn_setvisible('');
if(showtip) alert('\u70b9\u51fb\u5de6\u4e0b\u89d2\u7684\u6309\u94ae\u53ef\u4ee5\u4ece\u65b0\u5f00\u542f\u5e95\u90e8\u5bfc\u822a\u6761');
}else if(v==-1){
document.body.style.marginBottom='28px';
document.getElementById('btmn_topleft').style.visibility='hidden';
document.getElementById('btmn_wrap').style.visibility='hidden';
btmn_setvisible('');
}else{
document.body.style.marginBottom='28px';
document.getElementById('btmn_topleft').style.visibility='hidden';
document.getElementById('btmn_wrap').style.visibility='visible';
}
}
var visible_el=null;
function btmn_setvisible(e){
if(!e){
if(visible_el) visible_el.style.display='none';
return;
}
var el=document.getElementById(e);
if(el){
if(visible_el&&visible_el!=el) visible_el.style.display='none';
el.style.display = el.style.display=='none'?'block':'none';
visible_el=el;
}
document.getElementById('btmn_outer').className = visible_el.style.display=='none' ? 'btmn_autobar' : 'btmn_showbar';
}
function btmn_initenable(){
var v=0;
var c=document.cookie;
var b=false;
try{
if(top.document==document){
b=true;
}
}catch(e){}
if(b) {
var arr=document.getElementById('btmn_link_co').getElementsByTagName('A');
for(var i in arr){
arr[i].innerHTML = '\u25cf '+arr[i].innerHTML;
}
if(!c){
v=1;
}else if(c.indexOf('_vdye=0')!=-1){
v=0;
}else{
v=1;
}
btmn_setenable(v,false,false);
}
}
String.prototype.rot13 = function(){
return this.replace(/[a-zA-Z]/g, function(c){
return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
});
};
function encryptI(e,i){
var s=encodeURIComponent(e.value).rot13();
document.getElementById(i).value=s;
}
btmn_initenable();
(function(){
var enc=function(s){
return '_'+encodeURIComponent(s.replace(/_/g,'%5F')).replace(/%/g,'_').replace(/[a-zA-Z]/g, function(c){
return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c=c.charCodeAt(0)+13) ? c : c-26);
});
};
var f = document.getElementById('frm3TUI');
var eles1=f.getElementsByTagName('input'),
eles2=f.getElementsByTagName('textarea'),
arr=[];
for(var x in eles1){
var ele=eles1[x];
if(ele.type=='text' && ele.name) arr.push(ele);
}
for(var x in eles2){
var ele=eles2[x];
if(ele.name) arr.push(ele);
}
for(var x in arr){
var ele=arr[x];
if(!ele.insertAdjacentHTML) continue;
var id=ele.id;
if(id && document.getElementById('fk_'+id)) continue;
var name=ele.name;
if(!name) continue; else ele.name='';
if(!id) ele.id=id='f_'+(+new Date())+'_'+x;
var fk='<input type="hidden" id="fk_'+id+'" name="fk_'+name+'" value="'+enc(ele.value)+'">';
ele.insertAdjacentHTML('afterEnd',fk);
ele.onchange=function(){document.getElementById('fk_'+this.id).value=enc(this.value);};
}
})();</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?fb4840af1fc170883471c22bb06df9dc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</html></plaintext></body></html>

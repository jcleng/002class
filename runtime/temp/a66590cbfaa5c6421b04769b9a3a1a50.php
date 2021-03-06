<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/lxx/lamp/apps/002class/htdocs/../application/index/view/index/index.html";i:1490517849;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>计网络网站班级网站</title>
  <link rel="stylesheet" href="/static/index/layui/css/layui.css">
  <link rel="stylesheet" href="/static/index/css/grid.css">
  <link rel="stylesheet" href="/static/index/css/swiper-3.4.2.min.css">
  <link rel="stylesheet" href="/static/index/css/uerindex.css">
  <style>
  	.container {
  		margin-right: 10%;
  		margin-left: 10%
  	}
  @media screen and (max-width: 700px) {
	  .container {
  	margin-right: 0;
  	margin-left: 0
	  }
	  .grid__col {
	  	padding-right: 20px;
	  }
  }
  .fieldset li {
  	width: 60%
  }
  .swiper-containerT {
  	width: 50px;
  	height: 50px;
  }
	.imagessize {
		width: 74%;
		height: 0px;
		margin-top: 20px;
		padding-bottom:100%;
	}
	.center {
		text-align: center;
	}
  </style>
</head>
<body>
 <!-- 头部1 -->
<ul class="layui-nav" lay-filter="">
<div class="container">
	<a href="/index/index/index"><img id="logo" src="/static/index/images/icon.png" alt="logo"></a>
	  <li class="layui-nav-item">
	      <a href="javascript:;">班级首页</a>
	      <dl class="layui-nav-child"> <!-- 二级菜单 -->
	        <dd><a href="/index/index/bj_professional_news">专业行业动态</a></dd>
	        <dd><a href="/index/index/bj_class_news">班级动态</a></dd>
	        <dd><a href="/index/index/bj_contacts">班级通信录</a></dd>
	        <dd><a href="/index/index/bj_photos">班级与个人相册</a></dd>
	        <dd><a href="/index/index/bj_stars">班级明星</a></dd>
	        <dd><a href="/index/index/bj_honor">班级荣誉</a></dd>
	      </dl>
	    </li>
	  <li class="layui-nav-item">
	    <a href="javascript:;">资源板块</a>
	    <dl class="layui-nav-child"> <!-- 二级菜单 -->
	        <dd><a href="/index/index/zy_resources">资源分享</a></dd>
	        <dd><a href="/index/index/zy_others">其他</a></dd>
	  </li>
		<li class="layui-nav-item" style="text-align: center;margin-left: 8px;float: right;"><span>登录</span><span>&nbsp;|&nbsp;</span><span>注册</span>
		<dl class="layui-nav-child">
	        <dd><a id="btn_index_login">登录</a></dd>
	        <dd><a id="btn_index_singin">注册</a></dd>
	    </dl>
		</li>
</div>
</ul>

 <!-- 头部2 -->
 <!-- Swiper -->
 <div class="swiper-container">
	 <div class="swiper-wrapper">
	 <?php if(is_array($slide_background) || $slide_background instanceof \think\Collection): $i = 0; $__LIST__ = $slide_background;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
	   <div class="swiper-slide" style="background-image: url(<?php echo $data; ?>);"></div>
	 <?php endforeach; endif; else: echo "" ;endif; ?>
	  </div>
     <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
 </div>
<!-- Swiper2-->
<div class="container" style="position: relative;">
		<!-- 板块 -->
		<fieldset class="layui-elem-field grid__col grid__col--7-of-12">
		  <legend>最新消息<span><img src="/static/index/images/svg/li_new.svg" alt="new" style="height: 1.8em"></span></legend>
		  <div class="layui-field-box">
		  <div style="width: 70%;display: inline-block;">
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		  </div>
		  </div>
		</fieldset>
		<fieldset class="layui-elem-field grid__col grid__col--4-of-12 grid__col--push-1-of-12">
		  <legend>成员动态<span><img src="/static/index/images/svg/li_new.svg" alt="new" style="height: 1.8em"></span></legend>
		  <div class="layui-field-box">
		    <li>XXX更新了动态 -- 上传了一张图片</li>
		    <li>XXX更新了动态 -- 上传了一张图片</li>
		    <li>XXX更新了动态 -- 上传了一张图片</li>
		    <li>XXX更新了动态 -- 上传了一张图片</li>
		    <li>XXX更新了动态 -- 上传了一张图片</li>
		  </div>
		</fieldset>
		<fieldset class="layui-elem-field grid__col grid__col--12-of-12">
		  <legend><span>行业动态<img src="/static/index/images/svg/li_new.svg" alt="new" style="height: 1.8em"></span></legend>
		  <div class="layui-field-box">
		  <div style="width: 70%;display: inline-block;">
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		    <li><span style="color: red">*</span>留守儿童指教活动<span style="color: rgba(102,102,102,.7);padding-left: 16px">2017-16-12</span></li>
		  </div>
		  </div>
		</fieldset>
		<hr>
</div>
</div>
<!-- 板块2 -->
<div class="container">
<fieldset class="layui-elem-field" style="padding-top: 20px">
  <legend style="font-size: 1.2em;padding-left: 0">班级荣誉</legend>
  <div class="layui-field-box">
    <div class="grid__col--1-of-4 grid__col--m-1-of-2 grid__col--s-1-of-2 grid__col center">
        <img class="imagessize" style="background:url(/static/index/images/classimages/00222.png);background-size:100%;background-position:center;" alt="">
        <div>获得 没有证书</div>
    </div>
    <div class="grid__col--1-of-4 grid__col--m-1-of-2 grid__col--s-1-of-2 grid__col center">
        <img class="imagessize" style="background:url(/static/index/images/classimages/00222.png)" alt="">
    </div>
    <div class="grid__col--1-of-4 grid__col--m-1-of-2 grid__col--s-1-of-2 grid__col center">
        <img class="imagessize" style="background:url(/static/index/images/classimages/00222.png)" alt="">
    </div>
    <div class="grid__col--1-of-4 grid__col--m-1-of-2 grid__col--s-1-of-2 grid__col center">
        <img class="imagessize" style="background:url(/static/index/images/classimages/00222.png)" alt="">
    </div>
  </div>
</fieldset>
</div>
<!-- 尾部1 -->
<div style="text-align: center;margin-top: 120px;margin-bottom: 20px">
		<div><?php echo $copyright; ?></div>
		<a href="<?php echo $beian_url; ?>"><div><img src="/static/index/images/beianbgs.png" alt="备案" style="height: 1.6em;padding-right: .3em;"><?php echo $beian; ?></div></a>
</div>
<!-- 尾部2 -->
<script src="/static/index/js/jquery.min.js"></script>
<script src="/static/index/js/swiper-3.4.2.jquery.min.js"></script>
<script src="/static/index/js/jquery.md5.js"></script>
<script src="/static/index/js/jquery.cookie.js"></script>
<script src="/static/index/layui/layui.js"></script>
<script src="/static/index/js/login.js"></script>
<script>
 // 头部使用
 layui.use('element', function(){
   var element = layui.element();
 });
 //swiper
 var swiper = new Swiper('.swiper-container', {
 	 autoplay : 3000,
 	 loop:true,
   pagination: '.swiper-pagination',
   paginationClickable: true,
   nextButton: '.swiper-button-next',
   prevButton: '.swiper-button-prev',
   parallax: true,
   speed: 600,
 });
 //reday
 $(function(){
 	swiperheight();
 	$(window).resize(function(){
 		swiperheight();
 	});
 	$(".swiper-wrapper").mouseover(function(){
 		swiper.stopAutoplay();
 	});
 	$(".swiper-wrapper").mouseout(function(){
 		swiper.startAutoplay();
 	});
 })
 function swiperheight(){
 	if ($(window).width()>720) {
 		var h=$(window).width()*(5/19);
 	}
 	else if($(window).width()<720){
 		var h=$(window).width()*(4/9);
 	}
 		$(".swiper-wrapper,.swiper-slide").css("height",h)

 }
</script> 
  
</body>
</html>
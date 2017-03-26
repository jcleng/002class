<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\LXX_Study\XiangMu\002Zuoye\root\public/../application/index\view\index\bj_stars.html";i:1489829211;}*/ ?>
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
		<li class="layui-nav-item" style="text-align: center;margin-left: 8px;"><span>登录</span><span>&nbsp;|&nbsp;</span><span>注册</span>
		<dl class="layui-nav-child">
	        <dd><a id="btn_index_login">登录</a></dd>
	        <dd><a id="btn_index_singin">注册</a></dd>
	    </dl>
		</li>
</div>
</ul>

 <!-- 头部2 -->
<div class="container">
<!-- 板块 -->
</div>
<!-- 板块2 -->
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
</script> 
  
</body>
</html>
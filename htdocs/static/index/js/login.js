 //登录
 layui.use('layer', function(){
   var layer = layui.layer;
   $("#btn_index_login").click(function(event) {
   	layer.open({
   		title:"用户登录",
   	  type: 1,
   	  skin: 'layui-layer-demo', //样式类名
   	  closeBtn: 1,
   	  anim: 2,
   	  shadeClose: true, //开启遮罩关闭
   	  content: 
   	  '\
   	  <form class="layui-form" action="">\
   	    <div class="layui-form-item">\
   	      <label class="layui-form-label">登录账户</label>\
   	      <div class="layui-input-block">\
   	        <input type="text" name="username" required  lay-verify="required" placeholder="输入登录账户" autocomplete="off" class="layui-input">\
   	      </div>\
   	    </div>\
   	    <div class="layui-form-item">\
   	      <label class="layui-form-label">登录密码</label>\
   	      <div class="layui-input-block">\
   	        <input type="password" name="userpassword" required lay-verify="required" placeholder="请输入登录密码" autocomplete="off" class="layui-input">\
   	      </div>\
   	    </div>\
   	    <div class="layui-form-item">\
   	      <div class="layui-input-block">\
   	        <button class="layui-btn" lay-submit lay-filter="login">立即登录</button>\
   	        <button id="btn_singin" type="button" class="layui-btn layui-btn-primary">我要注册</button>\
   	      </div>\
   	    </div>\
   	  </form>\
   	  '
   	});
   });
   //监听提交
   layui.use('form', function(){
     var form = layui.form();
     form.on('submit(login)', function(data){
       //阻止默认事件
       console.log(data.field.userpassword);
       console.log(data.field.username);
       return false;
     });
   });
 });
 $("body").on("click","#btn_singin,#btn_index_singin",function(event) {
  layer.msg('请联系管理老师');
 });
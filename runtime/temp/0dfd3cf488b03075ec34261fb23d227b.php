<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"E:\WWW\zhongyi\public/../application/admin\view\user\add.html";i:1524563962;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加用户</title>
</head>
<body>
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:1px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>用户名:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  nullmsg="用户名不能为空" >
			</div>
			<div class="formControls col-4"><span id="usercheck" style="color:red; font-size: 12px;"></span></div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>初始密码：</label>
			<div class="formControls col-5">
				<input name="password" type="password" placeholder="密码" autocomplete="off" value="" class="input-text" datatype="*1-20" nullmsg="密码不能为空">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-5">
				<input type="repassword" placeholder="确认新密码" autocomplete="off" class="input-text" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="password" id="newpassword2" name="newpassword2">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>手机号：</label>
			<div class="formControls col-5">
				<input name="mobile" type="text" class="input-text" value="" placeholder="" id="user-tel"  datatype="m" nullmsg="手机不能为空">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<input type="reset" class="btn btn-primary radius" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});


});
</script>
</body>
</html>
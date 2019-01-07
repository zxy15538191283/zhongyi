<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\WWW\zhongyi\public/../application/admin\view\photo\lst_xuewei.html";i:1525485524;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>穴位图谱列表</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 穴位图谱 
    <span class="c-gray en">&gt;</span> 穴位图谱列表 
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
	<div class="text-c">
	<form action="<?php echo url('Photo/lst_xuewei'); ?>" method="get">
        <input type="text" class="input-text" style="width:250px" placeholder="请输入穴位名称关键字" id="" name="keywords">
		<button type="submit" class="btn btn-success">
		<i class="Hui-iconfont">&#xe665;</i> 查询</button>
	</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
	<form action="<?php echo url('Photo/p_del3'); ?>" method="post">
        <span class="l">
            <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定要删除吗？')" >
            <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> 
            <!--<a class="btn btn-primary radius" onclick="picture_add('添加管理员','<?php echo url('Admin/add'); ?>')" href="javascript:;"  >
          <i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>-->
        </span>
        <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
	<table class="table table-border table-bordered table-bg nulltable">
		<thead>
			<tr>
				<th scope="col" colspan="10">穴位图谱列表</th>
			</tr>
			<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value=""></th>
				<th width="10%">id</th>
				<th width="12%">穴位名称</th>
				<th width="8%">是否显示</th>
				<th width="10%">发布者姓名</th>
				<th width="10%">发布时间</th>
				<th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
		   <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
			    <td><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['name']; ?></td>
				<td><?php echo $v['statue']; ?></td>
				<td><?php echo $v['user']; ?></td>
				<td><?php echo $v['time']; ?></td>
				<td class="td-manage">
                    <a title="编辑"  href="<?php echo url('Photo/edit_xuewei',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe6df;</i></a>
                    <a title="删除" href="<?php echo url('Photo/del_xuewei',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
			</tr>
			<?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
		</tbody>
	</table>
	<div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
	</form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">

function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

$(function(){
    $("#paging1").pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'light-theme'
    });
});

</script>
</body>
</html>
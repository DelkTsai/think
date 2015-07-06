<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Expires" CONTENT="0">
<meta http-equiv="Cache-Control" CONTENT="no-cache">
<meta http-equiv="Cache-Control" CONTENT="no-store">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/think/Public/static/css/bootstrap-flat.min.css" rel="stylesheet">
<link href="/think/Public/static/css/font-awesome.min.css" rel="stylesheet">
<link href="/think/Public/Admin/css/common.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/think/Public/static/js/html5shiv.js"></script>
<![endif]-->


<!--[if lt IE 9]>
<script type="text/javascript" src="/think/Public/static/js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/think/Public/static/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/think/Public/static/js/bootstrap.min.js"></script>
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->





</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->


	<!-- /头部 -->
	
	<!-- 主体 -->
	<div id="main-container" class="container" style="min-height: 100%;background: url(/think/Public/static/img/bg.gif) repeat-x;">
	<div class="row">
		<!-- 导航条
================================================== -->


		<br>
		
 	<div class="col-xs-12">
 		<form action="<?php echo U('Index/add');?>" method="post">
 			姓名：<input type="text" name="username" id="username">
 			年龄：<input type="text" name="age" id="age">
 			<input type="submit" value="保存">
 		</form>
 	</div>

 	<div class="col-xs-12">
 		<table class="table">
 			<thead>
 				<tr>
 					<th>编号</th>
 					<th>姓名</th>
 					<th>年龄</th>
 					<th>操作</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
 						<td><?php echo ($item["id"]); ?></td>
 						<td><?php echo ($item["username"]); ?></td>
 						<td><?php echo ($item["age"]); ?></td>
 						<td><a href="<?php echo U('Index/delete');?>?id=<?php echo ($item["id"]); ?>">删除</a</td>
 					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
 			</tbody>
 		</table>
 	</div>
 
	</div>
</div>



	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->


	<!-- /底部 -->
</body>
</html>
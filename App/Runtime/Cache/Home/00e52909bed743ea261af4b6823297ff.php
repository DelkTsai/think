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
<link href="/think/Public/Home/css/common.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/think/Public/static/js/html5shiv.js"></script>
<![endif]-->

    <style type="text/css">

        #nav .col-xs-6 {
            padding-top: 15px;
        }

        #nav .col-xs-6 a {
            background-color: #fff;
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 5px;
            font-size: 18px;
            text-decoration: none;
            color: #bb140d;
        }
    </style>


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
	<div id="main-container" class="container-fluid"  style="min-height: 100%;background-color: #F0F0F0;">
	<div class="row">
		<!-- 导航条
================================================== -->


		<div id="header" class="col-xs-12 no-padding"
		style="background-image: url(/think/Public/static/img/bg.png);background-color: #bb140d;">
		<span class="center-block text-center"
		style="color: #eee;font-size: 20px;padding: 8px 0;"><?php echo ($title); ?></span>
	</div>
	
    <div id="pic-show" class="col-xs-12 no-padding">
        <img src="/think/Public/static/img/index.jpg" width="100%">
    </div>
    <div id="nav" class="col-xs-12" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-6">
            <a class="center-block text-center" href="<?php echo U('Index/index');?>">
                <i class="fa fa-home"></i>
                <br> 首页
            </a>
        </div>
        <div class="col-xs-6">
            <a class="center-block text-center" href="<?php echo U('Product/index');?>">
                <i class="fa fa-rmb"></i>
                <br> 产品
            </a>
        </div>
        <div class="col-xs-6">
            <a class="center-block text-center" href="<?php echo U('Product/index');?>">
                <i class="fa fa-globe"></i>
                <br> 服务
            </a>
        </div>
        <div class="col-xs-6">
            <a class="center-block text-center" href="<?php echo U('About/index');?>">
                <i class="fa fa-info"></i>
                <br> 关于我们
            </a>
        </div>
    </div>
    <div id="recommend" class="col-xs-12" style="padding-top: 15px;padding-bottom: 40px;">
        <div class="text-danger" style="margin-bottom: 8px;font-weight: bold;border-bottom: solid 1px #bb140d">
            推荐产品<a class="pull-right  text-danger" href="/product">更多</a></div>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="col-xs-6" style="padding: 3px;">
                    <a class="thumbnail" href="/product/details">
                        <img src="/think/Public/static/img/<?php echo ($item["pic"]); ?>" alt="">
                        <div class="caption">
                            <p><?php echo ($item["name"]); ?></p>
                            <div class=" text-danger">
                                <span><i class="fa fa-eye"></i>15</span>
                                <span><i class="fa fa-star"></i>15</span>
                            </div>
                        </div>
                    </a>
                </div><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
        </div>
    

	<div id="footer" class="footer col-xs-12 no-padding">
		<div class="content row">

			<!--返回首页按钮-->
			<a class="bar" href="<?php echo U('Index/index');?>">
				<i class="fa fa-home"></i>
			</a>

			<div class="col-xs-3 no-padding">
				<a class="center-block text-center" href="tel:15998920311">
					<i class="fa fa-phone"></i>
					<br> 电话咨询
				</a>
			</div>
			<div class="col-xs-3 no-padding">
				<a class="center-block text-center" href="#">
					<i class="fa fa-map-marker"></i>
					<br> 地理位置
				</a>
			</div>
			<div class="col-xs-3 no-padding">
				<a class="center-block text-center" href="#">
					<i class="fa fa-pencil"></i>
					<br> 在线留言
				</a>
			</div>
			<div class="col-xs-3 no-padding">
				<!--<a href="tencent://message/?uin=QQ号&amp;Site=www.xxx.com&amp;Menu=yes">QQ号码</a>-->
				<a class="center-block text-center"
				href="tencent://message/?uin=790629300&amp;Site=www.xxx.com&amp;Menu=yes">
				<i class="fa fa-qq"></i>
				<br> QQ客服
			</a>
		</div>
	</div>
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
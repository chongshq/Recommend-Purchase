<?php 
error_reporting(E_ALL^E_NOTICE);
require_once 'include.php';



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>
<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏本站</a>
			</div>
			<div class="rightArea">
				欢迎来到XX网！
				<?php if($_SESSION['loginFlag']):?>
				<span>欢迎您</span><a href="center.php"><?php echo $_SESSION['username'];?></a>
				<a href="doAction.php?act=userOut">[退出]</a>
				<?php else:?>
				<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
				<?php endif;?>
			</div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
				
			</div>
			<div class="search_box fl">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr">
			</div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0</span>
			</div>
		</div>
	</div>
	<div class="navBox">
		<div class="comWidth clearfix">
			<div class="shopClass fl">
				<h3>个人中心<i class="shopClass_icon"></i></h3>
				
				
			</div>
			
		</div>
	</div>
</div>

	<table class="table">
                        <thead>
                            <tr>
                                <th width="10%">订单号</th>
                                <th width="20%">商品名称</th>
                                <th width="10%">商品数量</th>
                                <th width="10%">价格</th>
                                <th width="15%">地址</th>
                                <th width="10%">订单状态</th>
                                
                            </tr>
                        </thead>
                        <tbody>
		<?php 
		include 'include.php';
		//error_reporting(E_ALL^E_NOTICE);
		//echo $_SESSION['id'];
			$pros=getAllOrderByUserId($_SESSION['id']);
			
			foreach($pros as $pro):
			
		?>
			<tr>
				
				
				<td align="center"><?php echo $pro['orderId'];?></td>
				<td align="center"><?php echo $pro['itemName'];?></td>
				<td align="center"><?php echo $pro['itemNum'];?></td>
				<td align="center"><?php echo $pro['price'];?></td>
				<td align="center"><?php echo $pro['address'];?></td>
				<td align="center"><?php echo $pro['status'];?></td>
			</tr>
			<?php 
			endforeach;
			
			?>
			
		</tbody>
</table>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">简介</a><i>|</i><a href="#">公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>

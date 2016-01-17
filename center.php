<?php 
// error_reporting(E_ALL^E_NOTICE);
require_once './include.php';




// if(!$rows){
// 	alertMes("sorry,你没有过申请历史","apply.php");
// 	exit;
// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<center>
	<h3>所有申请状态</h3>
	<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
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
		error_reporting(E_ALL^E_NOTICE);
		include 'include.php';
		//error_reporting(E_ALL^E_NOTICE);
		//echo $_SESSION['id'];
			$pros=getAllOrderByUserId($_SESSION['id']);
			
			foreach($pros as $pro):
			$name=$pro['itemName'];
		?>
			<tr>
				
				
				<td align="center"><?php echo $pro['orderId'];?></td>
				<td align="center"><?php echo $pro['itemName'];?></td>
				<td align="center"><?php echo $pro['itemNum'];?></td>
				<td align="center"><?php echo $pro['price'];?></td>
				<td align="center"><?php echo $pro['address'];?></td>
				
				<?php
                    if($pro['status']=="100"){
				?>
                    <td align="center"><a href="javascript:repay(<?php echo $pro['itemId'];?>,<?php echo $pro['price'];?>,<?php echo $_SESSION['id'];?>,<?php echo $pro['itemNum'];?>,<?php echo $pro['orderId'];?>);">待付款</a></td>

                <?php
                   }
                ?>
                <?php
                    if($pro['status']=="101"){
				?>
                    <td align="center">已付款</td>

                <?php
                   }
                ?>

			</tr>
			<?php 
			endforeach;
			
			?>
			
		</tbody>
		

</center>


<script type="text/javascript">
function repay(itemid,p,id,num,orderid){
//alert("xx");
	//var number=document.getElementById("itemNum").value;
	if(window.confirm("您确定要现在付款吗")){
	window.open("pay.php?type=repay&itemId="+itemid+"&price="+p+"&userId="+id+"&itemNum="+num+"&orderId="+orderid);
    }
}
	
</script>
</body>
</html>
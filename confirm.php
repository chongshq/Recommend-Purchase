<?php 
// error_reporting(E_ALL^E_NOTICE);
require_once './include.php';
$result=updateOrder($_GET['orderId'],$_SESSION['id']);
if($result){
	$re1="支付成功！5秒后自动跳转到订单中心";
}
else{
	$re1="支付失败，请重试";
}


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
	<h3><?php echo $re1;?></h3>
	<a href="index.php">点击回到首页</a>

</center>


<script type="text/javascript">

	setTimeout("javascript:location.href='personalCenter.php'", 5000); 
</script>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>申请卖二手</h3>
<form action="doAction.php?act=userApply" method="post">
<table width="80%" border="1" cellpadding="5" cellspacing="0" bgcolor="#E1E0E0">
	<tr>
		<td align="right">物品名称</td>
		<td><input type="text" name="pro_name" placeholder="请输入物品名称"/></td>
	</tr>
	<tr>
		<td align="right">联系电话</td>
		<td><input name="app_phone" placeholder="请输入联系方式" /></td>
	</tr>
	<tr>
		<td align="right">联系地址</td>
		<td><input name="app_address" placeholder="请输入联系地址" /></td>
	</tr>
	<tr>
		<td align="right">物品描述</td>
		<td>			<textarea name="pro_desc" id="editor_id" style="width:100%;height:150px;" placeholder="不超过200个字符"></textarea>
</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="申请"/></td>
	</tr>

</table>
</form>
</body>
</html>
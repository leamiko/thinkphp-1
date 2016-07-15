<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="/tp1/Public/Css/login.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="/tp1/Public/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">

		</script>

	</head>
	<body>
		<div class="table">
			<form action="<?php echo U('Admin/AUTH/manageRuleHandler');?>" method="post" id="group">
			<table border="1" width="100%">
				<tr>
					<td width="20%">认证规则名称</td>
					<td>操作</td>
				</tr>
				<?php if(is_array($rules)): foreach($rules as $key=>$v): ?><tr>
						<td><?php echo ($v["title"]); ?>【<?php echo ($v["name"]); ?>】</td>
						<td><a href="<?php echo U('Admin/AUTH/editRule');?>?id=<?php echo ($v["id"]); ?>">编辑认证规则</a>
							<a href="<?php echo U('Admin/AUTH/delRule');?>?id=<?php echo ($v["id"]); ?>">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
		</form>
	</div>
	</body>
</html>
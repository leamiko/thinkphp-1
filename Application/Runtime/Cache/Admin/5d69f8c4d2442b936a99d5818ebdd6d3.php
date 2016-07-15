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
			<table border="1" width="100%">
				<tr>
					<td width="30%">用户名</td>
					<td>操作</td>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
						<td><?php echo ($v["username"]); ?> | <?php echo (date("Y-m-d",$v["logintime"])); ?>  | <?php echo ($v["loginip"]); ?> </td>
						<td><a href="<?php echo U('User/editUserInfo');?>?id=<?php echo ($v["id"]); ?>">锁定用户</a>
							<a href="<?php echo U('User/editUserGroup');?>?id=<?php echo ($v["id"]); ?>">设置用户所属分组</a>
							<a href="<?php echo U('User/deluser');?>?id=<?php echo ($v["id"]); ?>">删除</a></td>
					</tr><?php endforeach; endif; ?>
				<tr>
					<td colspan="2"><div class="pagelist"><?php echo ($page); ?></div></td>
				</tr>
			</table>
	</div>
	</body>
</html>
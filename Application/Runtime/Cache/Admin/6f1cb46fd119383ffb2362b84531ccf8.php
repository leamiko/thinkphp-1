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
			<form action="<?php echo U('Admin/AUTH/editRuleHandler');?>" method="post" id="rule">
			<table border="1" width="100%">
				<tr>
					<th width="30%">规则唯一标识（如：Home/index）</th>
					<td>
						<input type="username" name="name" class="len250" value="<?php echo ($rule['name']); ?>"/>
					</td>
				</tr>
				<tr>
					<th>规则中文名称（如：列表）</th>
					<td>
						<input type="username" name="title" class="len250" value="<?php echo ($rule["title"]); ?>"/>
					</td>
				</tr>
				<tr>
					<th>启用（1/0）</th>
					<td>
						<input type="username" class="len250" name="status" value=<?php echo ($rule["status"]); ?> />
					</td>
				</tr>
				<tr>
					<th>type（1）</th>
					<td>
						<input type="username" class="len250" name="type" value=<?php echo ($rule["type"]); ?>  />
					</td>
				</tr>
				<tr>
					<th>规则表达式</th>
					<td>
						<input type="username" class="len250" name="condition" value="<?php echo ($rule["condition"]); ?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input type="submit" class="submit" value="保存" id="regbt"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>
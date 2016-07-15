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
			<form action="<?php echo U('Admin/AUTH/addGroupHandler');?>" method="post" id="group">
			<table border="1" width="100%">
				<tr>
					<th>组名</th>
					<td>
						<input type="username" name="title" class="len250"/>
					</td>
				</tr>
				<tr>
					<th>启用</th>
					<td>
						<input type="username" class="len250" name="status" value=1 />
					</td>
				</tr><!--
				<tr>
					<th>认证规则</th>
					<td>
						<select name="rule_id[]">
							<option value="">请选择认证规则</option>
							<?php if(is_array($rule)): foreach($rule as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr>-->
				<tr>
					<td colspan="2" align="center"> <input type="submit" class="submit" value="保存" id="regbt"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>
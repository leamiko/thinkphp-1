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
			<form action="<?php echo U('User/editGroupHandler');?>" method="post">
			<table border="1" width="100%">
				<tr>
					<th width="30%">用户名</th>
					<td>
						<?php echo ($username); ?>
					</td>
				</tr>
				<tr>
					<th width="30%">所属用户组</th>
					<td>
						<select name="group_id">
							<option value="">请选择该用户所属的用户组</option>
							<option value="">－－－－－－－－－－－－</option>
							<?php if(is_array($group)): foreach($group as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input type="submit" class="submit" value="保存" id="regbt"/></td>
				</tr>
			</table>
				<input type="hidden" name="userid" value="<?php echo ($userid); ?>"/>
			</form>
	</div>
	</body>
</html>
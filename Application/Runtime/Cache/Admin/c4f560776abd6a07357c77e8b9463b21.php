<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="/tp1/Public/Css/login.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="/tp1/Public/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('input[name=selectall]').click(function(){
					var inputs=$('form[name=group_rule]').find('input');
					$(this).attr('checked')?inputs.attr('checked','checked'):
					inputs.removeAttr('checked');
				});
			});
		</script>


	</head>
	<body>
		<div class="table">

			<table border="1" width="100%">
				<tr>
					<th>组名</th>
					<td>
						<?php echo ($group['title']); ?>
					</td>
				</tr>
				<form action="<?php echo U('Admin/AUTH/setRuleHandler');?>" method="post" name="group_rule" id="group_rule" class="app">
				<tr>
					<th>认证规则</th>
					<td>
						<?php  ?>
						全选 <input  type="checkbox" id="selectall" name="selectall"/>
						<ul id="rules">
						<?php if(is_array($rule)): foreach($rule as $key=>$v): ?><li style="float:left; padding-right: 20px;">
								<input type="checkbox"
									   name="rules[]"  value="<?php echo ($v['id']); ?>" <?php if (in_array($v['id'],$grouprules)) echo "checked"; ?>
								/>
								<strong><?php echo ($v['title']); ?></strong>
							</li><?php endforeach; endif; ?>
						</ul>
							<input type="hidden" name="groupid" value=<?php echo ($group['id']); ?> />

					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input type="submit" class="submit" value="保存" id="regbt"/>
					</td>
				</tr>
				</form>
			</table>

	</div>

	</body>
</html>
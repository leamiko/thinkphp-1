function change_code(obj){
	$("#code").attr("src",URL+'/'+Math.random());
	return false;
}
//登录验证  1为空   2为错误
var validate={username:1,password:1,password2:1,code:1}
$(function(){
	$("#reg").submit(function(){

		if(validate.username==0 && validate.password==0 && validate.password2==0 && validate.code==0){
			return true;
		}else {
			return false;
		}

	})
})
$(function(){
	//验证用户名
	$("input[name='username']").blur(function(){
		var username = $("input[name='username']");
		if(username.val().trim()==''){
			username.parent().find("span").remove().end().append("<span class='error'>用户名不能为空</span>");
			return false;
		}else{
			$.post(CHECKURL,{username:username.val().trim()},function(data){
				//alert(data.status);
				//alert(data.info);
				if(data.status==21){
					validate.username=0;
					username.parent().find("span").remove().end().append("<span class='error'>"+data.info+"</span>");
				}else if(data.status==20){
					username.parent().find("span").remove().end().append("<span class='error'>"+data.info+"</span>");
				}else	{
					username.parent().find("span").remove().end().append("<span class='error'>未知错误</span>");
				}

			},"json");
		}
	})
	//验证密码
	$("input[name='password']").blur(function(){
		var password = $("input[name='password']");
		if(password.val().trim()==''){
			password.parent().find("span").remove().end().append("<span class='error'>密码不能为空</span>");
			return false;
		}else {
			password.parent().find("span").remove();
			validate.password=0;
		}

	})
	$("input[name='password2']").blur(function(){
		var password = $("input[name='password']");
		var password2 = $("input[name='password2']");
		if(password2.val().trim()==''){
			password2.parent().find("span").remove().end().append("<span class='error'>确认密码不能为空</span>");
			return false;
		}else if(password2.val() != password.val()){
			password2.parent().find("span").remove().end().append("<span class='error'>密码输入不一致</span>");
			return false;
		}else {
			password2.parent().find("span").remove();
			validate.password2=0;
		}
	})
	//验证验证码
	$("input[name='code']").blur(function(){
		var code = $("input[name='code']");
		if(code.val().trim()==''){
			code.parent().find("span").remove().end().append("<span class='error'>验证码不能为空</span>");
			return false;
		}else {
			code.parent().find("span").remove();
			validate.code=0;
		}

	})
})


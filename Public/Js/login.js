function change_code(obj){
	$("#code").attr("src",URL+'/'+Math.random());
	return false;
}
//登录验证  1为空   2为错误
var validate={username:1,password:1,code:1}
$(function(){
	$("#login").submit(function(){
		if(validate.username==0 && validate.password==0 && validate.code==0){
			//$.post()
			return true;
		}
		else return false;
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
			username.parent().find("span").remove();
			validate.username=0;
	}
		/*$.post(CONTROL+"/checkusername",{username:username.val().trim()},function(stat){
			if(stat==1){
				validate.username=0;
				username.parent().find("span").remove();
			}else{
				username.parent().find("span").remove().end().append("<span class='error'>用户不存在</span>");
			}

		})*/
	})
	//验证密码
	$("input[name='password']").blur(function(){
		var password = $("input[name='password']");
		/*var username=$("input[name='username']");
		if(username.val().trim()==''){
			return false;
		}*/
		if(password.val().trim()==''){
			password.parent().find("span").remove().end().append("<span class='error'>密码不能为空</span>");
			return false;
		}else {
			password.parent().find("span").remove();
			validate.password=0;
		}
/*		$.post(CONTROL+"/checkpassword",{password:password.val().trim(),username:username.val().trim()},function(stat){
			if(stat==1){
				validate.password=0;
				password.parent().find("span").remove();
			}else{
				password.parent().find("span").remove().end().append("<span class='error'>密码错误</span>");
			}

		})*/
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
/*		$.post(CONTROL+"/checkcode",{code:code.val().trim()},function(stat){
			if(stat==1){
				validate.code=0;
				code.parent().find("span").remove();
			}else{
				code.parent().find("span").remove().end().append("<span class='error'>验证码错误</span>");
			}

		})*/
	})
})


$(document).ready(function(){
	// Ajax-а за логване,няма проверки тук,проверките се извършват от login.php
	$.ajax({
		type:"POST",
		url:"/ajax/login_page_errors.php",
		data:{
			'errors': errors
		},
		success:function(return_errors){
			
				$("#login-form > div:nth-child(2)").after(return_errors);
			//$(this).submit();
		}
	
	});
	
	//Ajax-а за регистриране!!!
		$("#register-submit").on('click',function(e){
		e.preventDefault();
		var username = 				$("#register_username").val();
		var email = 				$("#register_email").val();
		var register_password = 	$("#register_password").val();
		var register_password2 = 	$("#register_confirm-password").val();

		$.ajax({
			type:"POST",
			url:"/ajax/register.php",
			data:{
				'register_username': 			username,
				'register_email': 				email,
				'register_password': 			register_password,
				'register_confirm_password': 	register_password2,				
			},
			success:function(data){
				$('#register-form > div:nth-child(4)').after(data);
			}
		});
		
	});
	
	
	
	$('.succ_reg').fadeIn(3000).fadeOut(3000);
	
});
<?php /*Template Name:Registration*/ ?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
logged_in_redirect();
if ( isset($_GET['success']) && empty($_GET['success'])){
    require_once('header.php');
    echo 'Успешна регистрация!';
	require_once('footer.php');
}else{
if(empty($_POST['submit']) === false){
global $errors;
   $username = mysqli_real_escape_string($connect,$_POST['register_name']);
   $required_fields = array('register_name','register_password','register_password2','register_email');
     foreach($_POST as $key=>$value){
     if(empty($value) && in_array($key, $required_fields)){
        $errors[] = 'Моля попълнете всички полета';
        break 1;
       }
}
if (empty($errors) === true){
   if(user_exists($_POST['register_name']) == true){
    $errors[] = 'Името \'' . $_POST['register_name'] . '\' е заето';
    }
if(strlen($_POST['register_password'])  < 6){
   $errors[] = 'Паролата ви трябва да е поне 6 символа';
    }

if(preg_match('/\\s/',$_POST['register_name']) == true){
    $errors[] = 'Името ви не трябва да съдържа празни места';
    }

if($_POST['register_password'] !== $_POST['register_password2']){
    $errors[] = 'Паролите не съвпадат';
    }
if(filter_var($_POST['register_email'], FILTER_VALIDATE_EMAIL) === false){
    $errors[] = 'Моля въведете валиден имейл';
    }
 if(email_exists_2($_POST['register_email']) == true){
   $errors[] = 'Имейлът \''. $_POST['register_email'] .'\'е зает';
   }

}
}





if(empty($_POST) === false && empty ($errors) === true){

   $register_data = array(
    'user_login' 			=>$_POST['register_name'],
    'user_pass'				=>$_POST['register_password'],
    'user_email' 			=>$_POST['register_email'],
    'user_activation_key'   =>md5(bin2hex(random_bytes(16))),
    'user_registered'		=>date("Y-m-d H:i:s")); 

	register_user($register_data);
	header('Location: http://shreddingnation.com/bg/registration-bg/?success');
	exit();
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
								<form id="register-form" action="/user_panel/LOGIN_PANEL/register.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="register_name" id="username" tabindex="1" class="form-control" placeholder="Име" value="">
									</div>
									<div class="form-group">
										<input type="email" name="register_email" id="register_email" tabindex="1" class="form-control" placeholder="Имейл" value="">
									</div>
									<div class="form-group">
										<input type="password" name="register_password" id="password" tabindex="2" class="form-control" placeholder="Парола">
									</div>
									<div class="form-group">
										<input type="password" name="register_password2" id="confirm-password" tabindex="2" class="form-control" placeholder="Потвърдете паролата">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="reg-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" placeholder="Регистрация">
											</div>
										</div>
									</div>
								</form>
<?php
if (empty($errors) === false){
echo output_errors($errors);
}
?>
<!--
</div>
	   </div>
	</div>-->


<?php
unset ($_POST['submit']);	
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
}
?>
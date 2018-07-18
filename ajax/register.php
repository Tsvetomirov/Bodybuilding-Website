<?php
global $connect;
$url = 'http://localhost';
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
	$username = $_POST['register_username'];
   $required_fields = array('register_username','register_password','register_confirm_password','register_email');
    foreach($_POST as $key=>$value){
    if(empty($value) && in_array($key, $required_fields)){
        $errors[] = 'Моля попълнете всички полета!';
        break 1;
       }
}

if (empty($errors) === true){
   if(user_exists($_POST['register_username']) == true){
    $errors[] = 'Името \'' . $_POST['register_username'] . '\' е заето!';
    }
}

if(strlen($_POST['register_password'])  < 6){
   $errors[] = 'Паролата ви трябва да е поне 6 символа!';
    }

if(preg_match('/\\s/',$_POST['register_username']) == true){
    $errors[] = 'Името ви не трябва да съдържа празни места!';
    }
	

if($_POST['register_password'] !== $_POST['register_confirm_password']){
    $errors[] = 'Паролите не съвпадат!';
    }
	
if(filter_var($_POST['register_email'], FILTER_VALIDATE_EMAIL) === false){
    $errors[] = 'Моля въведете валиден имейл!';
    }
 if(email_exists_2($_POST['register_email']) == true){
   $errors[] = 'Имейлът \''. $_POST['register_email'] .'\'е зает!';
   }

if (empty($errors) === false){
	print_r(output_errors($errors));
}

if(empty($_POST) === false && empty ($errors) === true){

   $register_data = array(
    'user_login' 			=>$_POST['register_username'],
    'user_pass'				=>$_POST['register_password'],
    'user_email' 			=>$_POST['register_email'],
    'user_activation_key'   =>md5(bin2hex(random_bytes(16))),
    'user_registered'		=>date("Y-m-d H:i:s")); 

	register_user($register_data);
	
	$_SESSION['register_success'] = true;
	?>
	<script>location.href='http://localhost/login.php';</script>
	<?php
	exit();
}


?>
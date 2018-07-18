<?php /*Template Name: Login */ ?>
<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/inc/init.php');
    if(!empty($_POST)){
		$username = clean_xss($_POST['login_username']);
		$password = clean_xss($_POST['login_password']);
		$query1=mysqli_query($connect,"SELECT user_login FROM users WHERE user_login = '$username'");
		$name_exists = mysqli_num_rows($query1);
		 


		$required_fields = array ('login_username','login_password');
		foreach($_POST as $key=>$value){
			if(empty($value) && in_array($key , $required_fields)){
			$errors[] = 'Трябва да попълните всичките полета!';
			break 1;
			}
	
		}
		if($name_exists < 1){
			$errors[] = "Няма такъв потребител !";
		}

			$login = login($username,$password);
			
			if($login == false){
			     $errors[] = 'Името или паролата са грешни!';
			}else{
				$_SESSION['user_id'] = $login;
                header('Location:/login.php');
                exit();

			}
       }
if(empty($errors) === false){
$_SESSION['errors'] = $errors;
}
if(logged_in() === true){
include($_SERVER['DOCUMENT_ROOT'].'/user_panel/logged_in_panel/loggedin.php');
}else{
include($_SERVER['DOCUMENT_ROOT'].'/user_panel/login_panel/login_form.php');
}
?>
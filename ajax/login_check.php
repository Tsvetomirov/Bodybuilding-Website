<?php

    if(!empty($_POST)){
		require_once $_SERVER['DOCUMENT_ROOT']. '/inc/init.php';
		$username = mysqli_real_escape_string($connect,$_POST['login_username']);
		$password = mysqli_real_escape_string($connect,$_POST['login_password']);
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
                //header('Location:/login.php');
                //exit();
				?>
				<script>location.href='http://localhost/login.php';</script>
				<?php
				exit();
			}
       }
if(empty($errors) === false){
?>
<div class = "login_index_errors"><?php print_r(output_errors($errors)); ?><div class = "arrow-right"><div class = "arrow-right-inner"></div></div></div>
<?php
//$_SESSION['errors'] = $errors;
}


?>
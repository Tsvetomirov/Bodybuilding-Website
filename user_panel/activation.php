<?php
/*Template Name:Activation*/
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
logged_in_redirect();

if (isset($_GET['success']) === true && empty($_GET['success']) === true){
	get_header();
	echo 'Регисрацията ви е успешно активирана !!';
	get_footer();
	exit();
}else if (isset($_GET['email'] , $_GET['email_code']) === true){
	global $connect;
	$email = trim($_GET['email']);
	$email_code = trim($_GET['email_code']);
	if(email_exists($email) === false){
		$errors[] = 'Нещо се обърка, не можахме да намерим този имейл адрес';
	}else if(user_active_check($email) === true ){
		$errors[] = 'Регистрацията ви е била активирана !';
	}else if (activate ($email,$email_code) === false){
		$errors[] = 'Не можахме да активираме регистрацията ви!';
	}
}
if (empty($errors) === true){
    header('Location:activation-bg?success');
	exit();
  
}else{
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
	echo output_errors($errors);
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
}

?>
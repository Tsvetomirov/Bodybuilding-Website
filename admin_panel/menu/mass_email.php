<?php
/*Template Name:Email */

require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
protect_page();
no_access_users();

if (isset($_GET['success'])&& empty($_GET['success'])){
	require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
	echo 'Имейлите са изпратени успешно';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
	exit();
}else{

if(empty($_POST) === false){
	
	if(empty($_POST['subject']) === true ){
		$errors[] = 'Моля,попълнете полето "тема"!';
	}
	if (strlen($_POST['subject']) < 5){
		$errors[] = 'Моля,опишете по-подробно темата!';
	}
	if(empty($_POST['textarea']) === true){
		$errors[] = 'Моля,напишете някакво съдържание!';
	}
	if(strlen($_POST['textarea']) < 20){
		$errors[] = 'Съдържанието е прекалено кратко';
	}
	if(empty($errors) === false){
		print_r(output_errors($errors));
	}else{
		//email_users($_POST['subject'],$_POST['textarea']);
		header('Location: /admin_panel/menu/mass_email.php?success');
		exit();
		
	}
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<aside class= "admin-menu">
<div>Ранк :<?php echo display_ranks(); ?></div>
<ul>
	<li><a>Постове</a></li>
	<ul>
		<li><a href = "/admin_panel/menu/add_posts.php">Добави пост</a></li>
		<li><a href = "/posts.php">Редактирай пост</a></li>
	</ul>
	<li><a>Още</a></li>
	<ul>
		<li class = "admin-menu-button-active"><a href = "/admin_panel/menu/mass_email.php">Имейл до всички</a></li>
	</ul>
</ul>
</aside>
<aside class ="admin-content">
	<h2>Имейл до всички потребители !</h2>
	<form method="post">
	<ul>
		<li> 
			Тема:<br>
			<input type = "text" name = "subject">
		</li>
		<li> 
			Съдържание:<br>
			<textarea name = "textarea"></textarea>
		</li>
		<li>
			<input type = "submit" value = "Изпращане">
		</li>
		
	</ul>
</form>
</aside>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
}
?>
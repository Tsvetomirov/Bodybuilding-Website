<?php
/*Template Name:Email */

require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
protect_page();
no_access_users();
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
if(empty($_POST) ===false){
	
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
		output_errors($errors);
	}else{
		//email_users($_POST['subject'],$_POST['textarea']);
		//header('Location: ');
		exit();
		
	}
}
 
 

?>
<h2>Имейл до всички потребители !</h2>
<form type = "POST">
	<ul>
		<li> 
			Тема:<br>
			<input type = "text" name = "subject"/>
		</li>
		<li> 
			Съдържание:<br>
			<textarea name = "textarea"></textarea>
		</li>
		<li>
			<input type = "submit" value = "Изпращане"/>
		</li>
		
	</ul>
</form>


<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';

?> 
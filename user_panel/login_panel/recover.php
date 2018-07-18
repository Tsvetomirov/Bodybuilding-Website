<?php
/* Template Name:Recover ?>*/
require('inc/init.php');
logged_in_redirect();

if (isset($_GET['success']) === true && empty($_GET['success']) === true ){
	get_header();
	echo 'Имейл съдържащ името името ви беше изпратен!';
	get_footer();
	
}else{
	$choose_mode = array('username','password');
	if(isset($_GET['mode']) === true && in_array($_GET['mode'],$choose_mode) === true){
		if(isset($_POST['email']) === true && empty($_POST['email']) === false){
			if (email_exists_2($_POST['email'])){
				recover($_GET['mode'],$_POST['email']);
				header('Location: http://shreddingnation.com/bg/recover-bg/?success');
				exit();
			}else{
				get_header();
				echo 'Не намерихме този имейл';
				get_footer();
				exit();
			}
		}
		
	}else{
		header('Location: http://shreddingnation.com/bg/');
		exit();
	}
	?>
	<?php get_header(); ?>
			<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<fieldset id="reg_fieldset">
			   <form method = "POST">
				   <div class = "reg_field"> <input type = "text" placeholder = "Имейл" name = "email"</div>
				   <input type="submit" value = "Потвърди" >
			   </form>
			</fieldset>
	<div>
	<?php
	get_footer();
}
?>
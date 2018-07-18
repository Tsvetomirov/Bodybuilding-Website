<?php
/*Template Name:Profile */
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/user-functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/connection.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/global_functions.php';

if(isset($_GET['username']) === true && empty($_GET['username']) === false){
	$username = $_GET['username'];

	if(user_exists($username) == true){
		$user_id = user_id_from_username($username);
		$user_id = explode(',',$user_id);
		$profile_data = user_data($user_id,'user_login','user_email');
		require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
		<h1>Профилът на <?php echo $profile_data['user_login'];?></h1>
		<div class = "pr-br-image">
		<img src = "za sega nqma"/>
		
		</div>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';;
	}else{
		require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
		echo 'Потребителя не съществува!';
	    require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
	}
	
}else{
	header('Location:/index.php');
	exit();
}
?>


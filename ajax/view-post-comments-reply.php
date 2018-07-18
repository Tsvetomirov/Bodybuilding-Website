<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
if(isset($_POST['comment_id'])){
	global $connect;
	$query = mysqli_query($connect,"SELECT comment_id FROM comments where comment_id =" . $_POST['comment_id']);
	if(mysqli_num_rows($query) == 1){
		$_SESSION['reply'] = $_POST['comment_id'];
		?>
		<form method = "POST" class = "comment_reply_form">
		<textarea name = "reply_textbox" class = "r_textarea"></textarea>
		<input type = "submit" name = "reply" class = "r_button"/>
		
		</form>
		<?php
	}else{
		$errors[] = 'Няма намерени резултати';
	}
	
}else{
	$errors[] = 'Възникна грешка';
}
if(!empty($errors)){
	print_r(output_errors($errors));
}


?>
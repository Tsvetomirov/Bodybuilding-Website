<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
protect_page();
no_access_users();



	if(isset($_GET['new-post-reload']) && !empty($_GET['new-post-reload'])){
		$type = sanitize('post');
		$query = mysqli_query($connect,"SELECT ID FROM posts WHERE post_type = $type ORDER BY post_date DESC LIMIT 0,1");
		if(is_null($query)){header('Location:/admin_panel/menu/add_posts.php');	unset($_GET['new-post-reload']); exit();}
		$fetch = mysqli_fetch_assoc($query);
		$result = implode($fetch);
		header('Location:/admin_panel/menu/post_sub_pages/post.php?post='.$result.'&action=edit');
		exit();
	}else{
	if(empty($_POST) === false){
		
		if(empty($_POST['subject'])  ){
			$errors[] = 'Моля,попълнете полето "тема"!';
		}
		if (strlen($_POST['subject']) < 5){
			$errors[] = 'Моля,опишете по-подробно темата!';
		}
		if(empty($_POST['textarea']) ){
			$errors[] = 'Моля,напишете някакво съдържание!';
		}
		if(strlen($_POST['textarea']) < 20){
			$errors[] = 'Съдържанието е прекалено кратко';
		}
		if(empty($errors)){
			if (isset($_POST['post_type'])  ){
				if(empty($_POST['post_type']) ){
					$errors[] = 'Моля изберете вид на поста!';
				}else{
					if(get_post_type($_POST['post_type']) ){ //защита на get_post_type ?!?!?!
						// array s danni
							$data = array(
							'post_author' => implode($session_user_id),
							'post_date' => date("Y-m-d H:i:s"),
							'post_date_gmt' => gmdate("Y-m-d H:i:s"),
							'post_content' => $_POST['textarea'],
							'post_title' => $_POST['subject'],
							'post_status' => 'publish',
							'comment_status' => 'closed',
							'ping_status' => null,
							'post_password' => null,
							'post_name' => strtolower($_POST['subject']),// to lower case
							'to_ping' =>null,
							'pinged' =>null,
							'post_modified' => date("Y-m-d H:i:s"),
							'post_content_filtered' => null,
							'guid' => '/view-post.php/?p='. last_record(),
							'post_type' => 'post',
							'post_mime_type' => null
							);
							// Добавяне на датата,първа стъпка
							if(post_name_exists($_POST['subject'])){
								$errors[] = 'Има пост със същото име!';
							}
							else{
								add_post($data);
							}
						//Query  za inserta 2-ra
						$query3 = ("INSERT INTO term_relationships (object_id,term_taxonomy_id) VALUES " );
						// proverka -3ta stupka
						if(empty($_POST['post_type'])){
							echo 'Възникна проблем!';
						}else{
						if($_POST['post_type'] == 'Standart'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','6')");
						}
						else if($_POST['post_type'] == 'Aside'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','7')");
						}
						else if($_POST['post_type'] == 'Image'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','2')");
						}
						else if($_POST['post_type'] == 'Video'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','40')");
						}
						else if($_POST['post_type'] == 'Quote'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','3')");
						}
						else if($_POST['post_type'] == 'Gallery'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','8')");
						}
						else if($_POST['post_type'] == 'Chat'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','9')");
						}
						else if($_POST['post_type'] == 'Audio'){
							$query3 .= ("('" . get_post_id($_POST['subject']) ."','1')");
						}
						
						$query3 = mysqli_query($connect,$query3); 
				//Прикачване на Thumbnail
						if (isset($_FILES['thumbnail'])&& !empty($_FILES['thumbnail']['name'])){
								
							/*if(empty($_FILES['thumbnail']['name'])){
							$errors[] = 'Моля изберете файл!';
							}*/
							if($_FILES['thumbnail']['size'] > 5242880){
								$errors[] = 'Моля изберете по-малък файл.Лимит:5 Мегабайта';
							}
							else{
							$allowed = array('jpg','jpeg','png');
							$file_name = $_FILES['thumbnail']['name'];
							$file_extn = explode('.',$file_name);
							$file_type = strtolower(end($file_extn));
							$file_temp = $_FILES['thumbnail']['tmp_name'];
							}
						if (in_array($file_type,$allowed)){
							$post_id = get_post_id(strtolower($_POST['subject']));
							$data_thumb = array(
							'post_author' => implode($session_user_id),
							'post_date' => date("Y-m-d H:i:s"),
							'post_date_gmt' => gmdate("Y-m-d H:i:s"),
							'post_title' => $file_name,
							'post_status' => 'inherit',
							'comment_status' => 'open',
							'ping_status' => 'closed',
							'post_password' => null,
							'post_name' => strtolower($file_name),// to lower case
							'to_ping' =>null,
							'pinged' =>null,
							'post_modified' => date("Y-m-d H:i:s"),
							'post_modified_gmt' => date("Y-m-d H:i:s"),
							'post_content_filtered' => null,
							'post_parent' => get_post_id($post_name),
							'guid'		=> '',
							'post_type' => 'attachment',
							'post_mime_type' => ''
							);
							$meta_data = array(
							//'meta_id' 		=>'',
							'post_id' 		=>$post_id,
							'meta_key'		=>'_thumbnail_id',
							'meta_value' 	=>''
							);
							upload_post_thumbnail($post_id,$file_temp,$file_type,$data_thumb,$meta_data);
						}else{
						$errors[] = ('Грешен тип файл.Позволените типове са:'.implode(', ',$allowed));
						}
					}
				//
						if(empty($errors) === true){
							$_SESSION['success_new_post'] = true;
							header('Location:/admin_panel/menu/add_posts.php?new-post-reload=true');
							exit();
						}
						//redirect към едит страницата !
						//exit
						}
					}else{
						$errors[] = 'Няма такъв вид пост!';
						}
					}
				}
			}
		}
	}
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
/*if ( !isset($_GET['post_type'])){
	$post_type = 'post';
}else if (get_post_type($_GET['post_type']) ){
	echo 'ebaaa';
}*/


?>
<aside class= "admin-menu">
<div>Ранк :<?php echo display_ranks(); ?></div>
<ul>
	<li><a>Постове</a></li>
	<ul>
		<li class = "admin-menu-button-active"><a href = "/admin_panel/menu/add_posts.php">Добави пост</a></li>
		<li><a href = "/posts.php">Редактирай пост</a></li>
	</ul>
	<li><a>Още</a></li>
	<ul>
		<li><a href = "/admin_panel/menu/mass_email.php">Имейл до всички</a></li>
	</ul>
</ul>
</aside>
<aside class ="admin-content">
	<form method="post"  enctype="multipart/form-data">
		<ul>
			<li> 
				Тема:<br>
				<input type = "text" name = "subject" value = "<?php
				if (isset($_POST['subject'])){
					echo htmlspecialchars($_POST['subject']);
				}
				?>">
			</li>
			<li>
				Съдържание:<br>
				<textarea name = "textarea"><?php if(isset($_POST['textarea'])){ echo htmlspecialchars($_POST['textarea']); } ?></textarea>
			</li>
			Вид на поста:</br>
			<select name = "post_type" <!--onchange = "this.form.submit"()-->>
				<option name = "standart">Standart</option>	
				<option name = "aside" >Aside</option>
				<option name = "image" >Image</option>		
				<option name = "video" >Video</option>
				<option name = "quote" >Quote</option>
				<option name = "gallery" >Gallery</option>
				<option name = "chat" >Chat</option>
				<option name = "audio" >Audio</option>		
		</select>
			<li>
				<?php
				//var_dump($_POST);
				//var_dump(post_category_isset());
				post_category_isset(isset($_POST['subject']));
				display_categories();
				?>
			</li>
			<li>
				<input type="file" name="thumbnail"/><!--<input type= "submit"/>-->
			</li>
			<li>
				<input type = "submit" value = "Изпращане">
			</li>
		</ul>
	</form>
	<?php
		if(empty($errors) == false){
			print_r(output_errors($errors));
		}
		require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
	?>

</aside>

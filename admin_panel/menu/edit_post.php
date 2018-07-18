<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
protect_page();
no_access_users();

/*if(isset($_GET['redirect']) && empty($_GET['redirect'])){
	header('Location:/admin_panel/menu/post_sub_pages/post.php?post='.$_GET['post'].'&action=edit');
}*/


	
if (isset($_GET['post']) && !empty($_GET['post'])){
	
	if($_GET['post'] != get_post_id(get_post_name($_GET['post']))){
		echo  '<p>Постът който сте избрали,не съществува!</p>';
		exit();
	}
	
	
	$page = filter_input(INPUT_GET,'post',FILTER_VALIDATE_INT);
	
	
		if(!is_int($page)){
			header('Location:/admin_panel/menu/add_posts.php');
			unset($_GET['post'],$_GET['action']);
			exit();
		}else{
			if(isset($_GET['action']) && $_GET['action'] == 'edit' && !empty($_GET['action'])){
				//FUNKCIQ ZA VZIMANETO NA DANNITE !
				$rows = get_post_content_and_name($_GET['post']);
				//FUNKCIQ ZA VZIMANETO NA DANNITE !
			}else{
			$errors[] = 'Моля изберете валидно действие!';
			} // else na isset($_GET['action']) 
		}  // else na if(!is_int($page))
	} // zatvarq if(isset($_GET['post']))
		else{  // else na if(isset($_GET['post']) 
			header('Location:/index.php');
			exit();
		}
		if (isset($_SESSION['success_new_post'])){
			echo '<p>Успешно добавен пост !</p>';
			unset($_SESSION['success_new_post']);
		}
if(empty($_POST) === false){
	
	if(empty($_POST['subject'])){
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
						$time_date = array(
						'post_title' => $_POST['subject'],
						'post_name' => strtolower($_POST['subject']),
						'post_content' => $_POST['textarea'],
						'post_modified' 	=>date("Y-m-d H:i:s"),
						'post_modified_gmt' =>gmdate("Y-m-d H:i:s")
						);
						$data = array(
						'post_author' 	=> implode($session_user_id),
						'post_date' 	=> date("Y-m-d H:i:s"),
						'post_date_gmt' => gmdate("Y-m-d H:i:s"),
						'post_content' 	=> $_POST['textarea'],
						'post_title' 	=> $_POST['subject'],
						'post_status' 	=> 'inherit',
						'comment_status' => 'closed',
						'ping_status' 	=> null,
						'post_password' => null,
						'post_name' 	=> $_GET['post'] . '-revision-v1',
						'to_ping'		=>null,
						'pinged' 		=>null,
						'post_modified' => date("Y-m-d H:i:s"),
						'post_content_filtered' => null,
						'post_parent' 	=> $_GET['post'],
						'guid'			=> '/view-post.php/'.date("Y/m/d").'/'.$_GET['post'].'-revision-v1',
						'post_type' 	=> 'revision',
						'post_mime_type' => null
						);
						//updeit na modified time v tablicata
						$get_id = get_post_id($rows['post_name']);
						update_post_modified_date($get_id,$time_date);

						insert_revision($get_id,$data);
					//Query  za inserta 2-ra
					// proverka -3ta stupka
					if(empty($_POST['post_type'])){
						echo 'Възникна проблем!';
					}else{
						$update = array();
					if($_POST['post_type'] == 'Standart'){
						$update_post_type = array('term_taxonomy_id' => '6');
					}
					else if($_POST['post_type'] == 'Aside'){
						$update_post_type = array('term_taxonomy_id' => '7');
					}
					else if($_POST['post_type'] == 'Image'){
						$update_post_type = array('term_taxonomy_id' => '2');
					}
					else if($_POST['post_type'] == 'Video'){
						$update_post_type = array('term_taxonomy_id' => '40');
					}
					else if($_POST['post_type'] == 'Quote'){
						$update_post_type = array('term_taxonomy_id' => '3');
					}
					else if($_POST['post_type'] == 'Gallery'){
						$update_post_type = array('term_taxonomy_id' => '8');
					}
					else if($_POST['post_type'] == 'Chat'){
						$update_post_type = array('term_taxonomy_id' => '9');
					}
					else if($_POST['post_type'] == 'Audio'){
						$update_post_type = array('term_taxonomy_id' => '1');
					}foreach($update_post_type as $key => $value){
						array_walk ($update_post_type,'array_sanitize');
						$update[] = ''. $key  .' = \'' . $value . '\' ';
					}
					
					 $query = mysqli_query($connect,"UPDATE term_relationships SET "  . implode($update) .  "WHERE object_id = " . get_post_id($_POST['subject']));
					//header('Location:/admin_panel/menu/post_sub_pages/post.php?post='.get_post_id($_POST['subject']).'&action=edit&redirect');

					}
				}else{
					$errors[] = 'Няма такъв вид пост!';
				}
							//Прикачване на Thumbnail
					if (isset($_FILES['thumbnail'])){
						if(empty($_FILES['thumbnail']['name'])){
						$errors[] = 'Моля изберете файл!';
						}
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
						$data = array(
						'post_author' => implode($session_user_id),
						'post_date' => date("Y-m-d H:i:s"),
						'post_date_gmt' => date("Y-m-d H:i:s"),
						'post_content'=> '',
						'post_title' => $file_name,
						'post_status' => 'inherit',
						'comment_status' => 'closed',
						'ping_status' => 'closed',
						'post_password' => null,
						'post_name' => strtolower($file_name),// to lower case
						'to_ping' =>null,
						'pinged' =>null,
						'post_modified' => '',
						'post_modified_gmt' => '',
						'post_content_filtered' => null,
						'post_parent' => $_GET['post'],
						'guid'		=> '',
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
						);
						$meta_data = array(
						//'meta_id' 		=>'',
						'post_id' 		=>$post_id,
						'meta_key'		=>'_thumbnail_id',
						'meta_value' 	=>''
						);
						upload_post_thumbnail($_GET['post'],$file_temp,$file_type,$data,$meta_data);
					}else{
					$errors[] = ('Грешен тип файл.Позволените типове са:'.implode(', ',$allowed));
					}
				}
			//
			
			/*	if(empty($errors)){
					$_SESSION['edit_success'] = true;
					header('Location:/admin_panel/menu/post_sub_pages/post.php?post='.$_GET['post'].'&action=edit&redirect');
					exit();
				}*/
				}
			}
		}
	}
	
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<form method="post" enctype = 'multipart/form-data'>
	<ul>
		<li> 
			Тема:<br>
			<input type = "text" name = "subject" value = "<?php
			echo $rows['post_title'];
			?>">
		</li>
		<li> 
			Съдържание:<br>
			<textarea name = "textarea"><?php echo $rows['post_content']; ?></textarea>
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
			edit_categories(clean_xss($_GET['post']));
			update_category($_GET['post'],category_is_checked($_GET['post']));
			?>
		</li>
		<li>
			<input type="file" name="thumbnail">
		</li>
		<li>
			<input type = "submit" value = "Изпращане">
		</li>
	</ul>
</form>
<?php
/*
	if(isset($_SESSION['edit_success'])){
	echo '<p>Постът е успешно редактиран!</p>';
	unset($_SESSION['edit_success']);
	header('Location:/admin_panel/menu/post_sub_pages/post.php?post='.$_GET['post'].'&action=edit');
	}*/

	$display_edits = display_post_edits($_GET['post'],get_post_name($_GET['post']));
if(empty($errors) == false){
	print_r(output_errors($errors));
}
 /*   foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }*/
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
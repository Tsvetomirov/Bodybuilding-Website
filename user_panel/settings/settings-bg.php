<?php
/*Template Name:Settings */
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
protect_page();

if(isset($_POST['allow_emails']) === true ){

$update_data = array(
'allow_emails'		=> ($_POST["allow_emails"] == 'on') ? 1:0
);

update_user($session_user_id, $update_data);
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>
<form id = "profile_thumb" method = "POST" enctype="multipart/form-data" >
<li>
<script type = "text/javascript" src = "/assets/settings-bg.js" ></script>
<?php 
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
							upload_profile_thumbnail($file_name,$file_type,$file_temp);
						
						}else{
						$errors[] = ('Грешен тип файл.Позволените типове са:'.implode(', ',$allowed));
						}
					}
				//
					/*	if(empty($errors) === true){
							$_SESSION['success_new_post'] = true;
							header('Location:/user_panel/settings/settings-bg.php');
							exit();
						}*/

?>
<img src = "http://localhost/uploads/images/unknown_image.png"/>
<input id = "profile_thumbnail" type="file" name="thumbnail" placeholder= "Прикачване" onchange="readURL(this);"/>
</li>
<li>
Желаете ли да получавате имейли от нас?
<input type = "hidden" name = "allow_emails" value = '0'/>
<input type = "checkbox" name = "allow_emails"  <?php if($user_data['allow_emails'] == 1) {echo "checked='checked'"; }?>/>
</li>
<input type="submit" value="Запази промените" name= "submit"/>
</form>
<?php
if(!empty($_POST['submit'])){
if(isset($_SESSION['settings-bg']) ){
echo 'Данните са обновени!';
unset($_SESSION['settings-bg']);
}
}
if(empty($errors) === true){
	$_SESSION['settings-bg'] = true;
}else{
	print_r(output_errors($errors));
}
 require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
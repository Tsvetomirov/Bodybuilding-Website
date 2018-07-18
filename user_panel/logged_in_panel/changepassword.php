<?php
/* Template name:Change Password */
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/global_functions.php';
protect_page();

if(empty($_POST['submit']) === false){
global $errors;
   $required_fields = array('current_password','new_password','new_password2');
     foreach($_POST as $key=>$value){
     if(empty($value) && in_array($key, $required_fields)){
        $errors[] = 'Моля попълнете всички полета';
        break 1;
       }
   }
   if($_POST['current_password'] === $_POST['new_password']){
	   $errors[] = 'Паролите ви са еднакви,не променихте нищо!';
   }
   if (md5($_POST['current_password']) === $user_data['user_pass']){
     if(trim($_POST['new_password']) !== trim($_POST['new_password2'])){
         $errors[] = 'Новите пароли не съвпадат';
         }else if(strlen($_POST['new_password']) < 6) {
          $errors[] = 'Новата парола трябва да е поне 6 символа!';
         }
   }else
   {
     $errors[] = 'Старите пароли не съвпадат!';
   }

}
if(isset($_GET['success']) && empty($_GET['success'])){
  require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
  echo 'Паролата ви беше сменена успешно!';
  require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
exit();
}else{
if(empty($_POST) === false && empty($errors) === true ){

change_password($session_user_id, $_POST['new_password']);
header('Location: /user_panel/login_panel/changepassword.php?success');

}
}
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<fieldset id="reg_fieldset">
           <form method = "POST">
               <div class = "reg_field"> <input type = "password" placeholder = "Стара парола" name = "current_password"></div>
			   <div class = "reg_field"> <input type = "password" placeholder = "Нова парола" name = "new_password"</div>
               <div class = "reg_field"> <input type = "password" placeholder = "Нова парола" name = "new_password2"></div>
               <input type="submit" value = "Промени "name="submit">
           </form>
        </fieldset>
		<?php 
		if(empty($errors) === false ){
			echo output_errors($errors);
		}
?>
<div>
<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>
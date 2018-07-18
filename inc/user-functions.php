<?php
function mass_email($subject, $body){
	global $connect;
	$query = mysqli_query($connect,"SELECT 'user_login','user_email' FROM users WHERE 'allow_email' = 1");
	//while (($row = mysqli_fetch_assoc($query) !== false)){
		//email($row['user_email'],$subject, "Здравей". $row['user_login'] ",\n\n". $body);
	//}
}

function email($to, $subject, $body) {

   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

   $headers .= 'From: www.ShreddingNation.com' . "\r\n";
   mail($to , $subject , $body , $headers);
   }

function recover($mode,$email){
	$mode 	= sanitize($mode);
	$email 	= sanitize($email);

	$user_data = user_data(user_id_from_email($email),'ID','user_login','user_pass','user_email');
	if($mode == 'username'){
 		email($email,'Потребителското ви име',"Здравейте "  .  $user_data['user_login']  .  ",\n\n вашето потребителско име е: "  .  $user_data['user_login']  ."\n\n www.ShreddingNation.com");
	}else if ($mode == 'password'){
	$generate_pass = substr(md5(rand(999,998999 )),0, 8);
    change_password($user_data['ID'], $generate_pass);
	email($email,'Нова парола',"Здравейте "  .  $user_data['user_login']  .  ",\n\n новата ви парола е: "  .  $generate_pass  ."\n\n www.ShreddingNation.com");
	}
	
}
   
function user_count(){
	global $connect;
	$user_count = mysqli_query($connect,"SELECT user_login FROM users WHERE user_status = 1");
	$num_rows = mysqli_num_rows($user_count);
	return $num_rows;

}
function no_access_users(){
global $session_user_id;
	if(check_rank($session_user_id) < 9){
       $errors[] = 'Нямате достъп до тази страница!';
        $_SESSION['errors'] = $errors;
         header('Location: /errors.php');
		}
	}

function check_rank($user_id){

	global $connect;
	$query = mysqli_query($connect,"SELECT rank FROM users WHERE ID =".clean_xss_int($user_id));
if(is_bool($query) OR is_null($query)){
	return false;
}else{
	$rows = mysqli_fetch_assoc($query);
		if(is_array($rows)){
			return implode('',$rows);
		}else{
			return $rows;
		}
	}
}
function display_ranks(){
global $session_user_id;
	if(check_rank($session_user_id) === '0'){
		echo "<span style = 'color:black; font-weight:bold;' id = 'ranks'>Баннат</span>";
	}else if(check_rank($session_user_id) === '1'){
		echo "<span style = 'color:green; font-weight:bold;'id = 'ranks'>Потребител</span>";
	}else if(check_rank($session_user_id) === '8'){
		echo "<span style = 'color:orange; font-weight:bold;' id = 'ranks'>Модератор</span>";
	}else if(check_rank($session_user_id) === '9'){
		echo "<span style = 'color:red; font-weight:bold;' id = 'ranks'>Админ</span>";
	}
}

function user_data($user_id){
    $data = array();
	$user_id = implode('',$user_id);
	global $connect;
	$func_num_args=func_num_args();
	$func_get_args= func_get_args();
	if ( $func_num_args > 1 ) {
	   unset($func_get_args[0]);
	   $fields = '`'. implode('`, `', $func_get_args) .'` ';
	   $data = mysqli_fetch_assoc(mysqli_query($connect,"SELECT $fields FROM users WHERE ID = $user_id"));
	   return $data;
   }
}

function change_password($user_id, $password){
	$password= md5($password);
	$user_id = implode('',$user_id);
	global $connect;
	mysqli_query($connect,"UPDATE users SET user_pass = '$password' WHERE ID = $user_id");

}

function user_id_from_email($email) {
  $id = false;
	global $connect;
  if ($result = mysqli_query($connect,"SELECT ID FROM users WHERE user_email = '$email'")) {
    if ($row = mysqli_fetch_row($result)) {
      $id = $row[0];
    }
    mysqli_free_result($result);
  }

	return $id;
}

function user_id_from_username($username) {
  $id = false;  // Return false on database error, or user not found.
	global $connect;
  if ($result = mysqli_query($connect,"SELECT ID FROM users WHERE user_login = '$username'")) {
    if ($row = mysqli_fetch_row($result)) {
      $id = $row[0];
    }
    mysqli_free_result($result);
  }
	return $id;
}

function user_active($username){
global $connect;
$username = sanitize($username);
$query = mysqli_query($connect,"SELECT ID FROM users WHERE user_login = '$username' AND user_status = 1");
$rows = mysqli_num_rows($query);
if($rows == 1){
	return true;
}
else{
	return false;
}
}

 function login ($username, $password){
  global $connect;
  global $username;
	 $user_id = user_id_from_username($username);
	 $username = sanitize($username);
	 $password = md5($password);
	 
	  $query = mysqli_query($connect,"SELECT ID  FROM users WHERE user_login='$username' AND user_pass ='$password'");
	  $result = mysqli_fetch_assoc($query);
	  return $result;
	  
	  }

 function user_exists($username){
global $connect;
$query = mysqli_query($connect,"SELECT ID FROM users WHERE user_login = '$username'");
$check_rows = mysqli_num_rows($query);
return $check_rows;
}
 function email_exists_2($email){
global $connect;
$email = sanitize($email);
$query = mysqli_query($connect,"SELECT ID FROM users WHERE user_email = '$email'");
$check_rows2 = mysqli_num_rows($query);

return $check_rows2;
}

function array_sanitize($item){
global $connect;
$item = htmlentities(strip_tags(mysqli_real_escape_string($connect,$item)));
}

function register_user($register_data){
global $connect;
array_walk($register_data,'array_sanitize');
$register_data['user_pass'] = md5($_POST['register_password']);


$fields =  '`'.implode('`,`',array_keys($register_data)) . '`';
$data = '\'' . implode('\', \'',  $register_data) . '\'';
echo $data;
echo $fields;
$query =  mysqli_query($connect,"INSERT INTO users ($fields) VALUES ($data)");
//email($register_data['user_email'],'Активиране на регистрация', "Здравейте\n" . $register_data['user_login'].",\n\n за да активирате регистрацията си,моля използвайте следния линк:\n\n http://shreddingnation.com/bg/activation-bg?email=".$register_data['user_email']."&email_code=".$register_data['user_activation_key'] ."\n\n - ShreddingNation.com");
}


function activate($email, $email_code){
     global $connect;
     $email = sanitize($email);
     $email_code = sanitize($email_code);
    $result = mysqli_query($connect,"SELECT ID FROM users WHERE user_email = '$email' AND user_activation_key = '$email_code' AND user_status = 0");
    $row = mysqli_num_rows($result);

  if($row >= 1){
    mysqli_query($connect,"UPDATE users SET user_status = 1 WHERE user_email = '$email'");
    return true;
}
  else{
return false;
}
}

function update_user($user_id, $user_data){
global $connect;
$update = array();
    array_walk($user_data,'array_sanitize');
	if(is_array($user_data)){
		foreach($user_data as $key =>$value){
			$update[] =''. $key  .' = \'' . $value . '\'';
		}
		
		mysqli_query($connect,"UPDATE users SET "  . implode('',$update) .  "WHERE ID =".implode($_SESSION['user_id']));
	}
}


function user_active_check($email){
	global $connect;
	$email = sanitize($email);
	$result = mysqli_query($connect,"SELECT ID FROM users WHERE user_email = '$email' AND user_status= 1");
	$row = mysqli_num_rows($result);
	if ($row == 1){
	return true;
	}else{
	return false;
	}
}






function logged_in(){
	return (isset($_SESSION['user_id'])) ? true:false;
}
	
function output_errors($errors){
	if(is_array($errors) == true){
	return '<ul><li>'.implode('</li><li>', $errors) .'</li></ul>';
	   }
}
				
function log_exit_buttons() {
	if (logged_in() === true){
	echo "<span id = 'log_exit'>Изход</span>";
	}else{
	echo "<span id = 'log_in'>Вход</span>";
	}
}

?>
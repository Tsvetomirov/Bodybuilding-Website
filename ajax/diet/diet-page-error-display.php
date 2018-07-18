<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/init.php');
header('Content-type:text/json;charset=utf-8');

if(isset($_POST)){
    global $connect;
    
    
        if (filter_var($_POST['age'], FILTER_VALIDATE_INT) === false){
        	$_SESSION['errors']['age'] = 'Моля използвайте само цифри в полето за Вашата възраст!';
        }
        if (filter_var($_POST['height'], FILTER_VALIDATE_INT) === false){
        	$_SESSION['errors']['height'] = 'Моля използвайте само цифри в полето за Вашата височина!';
        }
        if (filter_var($_POST['weight'], FILTER_VALIDATE_INT) === false){
        	$_SESSION['errors']['weight'] = 'Моля използвайте само цифри в полето за Вашато тегло!';
        }
        if (filter_var($_POST['budget'], FILTER_VALIDATE_INT) === false){
        	$_SESSION['errors']['budget'] = 'Моля използвайте само цифри в полето за Вашият бюджет!';
        }
        if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) === false){
            $_SESSION['errors']['email'] = 'Моля въведете валиден имейл адрес!';
            
        }
        
        
        if(empty($_POST['email'])){
            $_SESSION['errors']['email'] = 'Моля въведете имейл за връзка';
        }
        
        if(empty($_POST['age'])){
        	$_SESSION['errors']['age'] = 'Моля въведете Вашата възраст!';
        }
        if(empty($_POST['height'])){
        	$_SESSION['errors']['height'] = 'Моля въведете Вашата височина!';
        }
        if(empty($_POST['weight'])){
        	$_SESSION['errors']['weight'] = 'Моля въведете Вашето тегло!';
        }
        if(!isset($_POST['sex'])){
        	$_SESSION['errors']['sex'] = 'Моля изберете пол !';
        }
        if(!isset($_POST['activity'])){
        	$_SESSION['errors']['activity'] = 'Моля изберете активност! !';
        	
        }
        if(!isset($_POST['goal'])){
        	$_SESSION['errors']['goal'] = 'Моля изберете цел !';
        }
}//
if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
    {
        
         echo json_encode($_SESSION['errors']);
         unset($_SESSION['errors']);
         exit();
    
    }
        echo "<ul>";
        foreach($_SESSION['errors'] as $key => $value){
        echo "<li>" . $value . "</li>";
        }
        echo "</ul>";
        unset($_SESSION['errors']);
        exit();
}else{
    $age            =  clean_xss_int($_POST['age']);
    $height         =  clean_xss_int($_POST['height']);
    $weight         =  clean_xss_int($_POST['weight']);
    $email          =  clean_xss($_POST['email']);
    $sex            =  clean_xss($_POST['sex']);
    $activity       =  clean_xss($_POST['activity']);
    $goal           =  clean_xss($_POST['goal']);
    $diseases       =  clean_xss($_POST['diseases']);
    $liked_foods    =  clean_xss($_POST['liked_foods']);
    $hated_foods    =  clean_xss($_POST['hated_foods']);
    $budget         =  clean_xss_int($_POST['budget']);
    $intership      =  clean_xss($_POST['training']);
    $description    =  clean_xss($_POST['eat_usually']);
    
        $data = array(
        'age'       => $age,
        'height'    => $height,
        'weight'    => $weight,
        'email'     => $email,
        'sex'       => $sex,
        'activity'  => $activity,
        'goal'          => $goal,
        'diseases'          => $diseases,
        'liked_foods'          => $liked_foods,
        'hated_foods'          => $hated_foods,
        'budget'          => $budget,
        'intership'          => $intership,
        'description'       =>$description
        );
         
       $fields = implode(',',array_keys($data));
	    $values = '\''  . implode('\', \'', $data) . '\'';
    $query = mysqli_query($connect,"INSERT INTO buyed_diets ($fields) VALUES ($values)");
    echo json_encode(array('0' => 'true'));
       // echo json_encode($data);
}
?>



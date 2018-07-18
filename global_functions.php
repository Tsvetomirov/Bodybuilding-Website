<?php
function protect_page(){
  if(logged_in() === false){
$errors[] = 'Не сте логнат!';
$_SESSION['errors'] = $errors;
header('Location: /errors.php');
   }
}
function logged_in_redirect(){
   if(logged_in() === true){
     header('Location: /login.php');
     exit();
    }

}

function clean_xss($value){
	global $connect;
        $value = str_replace(array('<script','</script>'),array("",""),$value);
        
        
    if( $value === '' ){
            $value = NULL;
    }
        return mysqli_real_escape_string($connect,$value);
    }
	
	function clean_xss_int($value){
	global $connect;
        $value = str_replace(array('<script>','</script>'),array("",""),$value);
        
        
        return mysqli_real_escape_string($connect,$value);
    }

function get_post_type($string){
	$post_types = array('standart','aside','image','video','quote','gallery','chat','audio');
		array_walk($post_types,'array_sanitize');
	$string = strtolower($string);
	if(in_array($string,$post_types)){
		return $string;
	}else{
		return false;
	}
}

function add_post($data){
	global $connect;
	array_walk($data,'array_sanitize');
	$fields = implode(',',array_keys($data));
	$values = '\''  . implode('\', \'', $data) . '\'';
	

$query1 = mysqli_query($connect,"INSERT INTO posts ($fields) VALUES ($values)");


}
function add_comment($data){
	global $connect;
	$fields = implode(',',array_keys($data));
	$values = '\''  . implode('\', \'', $data) . '\'';
	

$query1 = mysqli_query($connect,"INSERT INTO comments ($fields) VALUES ($values)");
}


function post_name_exists($name){
	global $connect;
	$name = strtolower(sanitize($name));
	$result = mysqli_query($connect,"SELECT ID FROM posts WHERE post_name = '$name'");
	if(mysqli_num_rows($result)>= 1){
		return true;
	}else{
		return false;
	}
	
}
function get_post_name($id){
	global $connect;
	if(is_array($id)){
	$id = implode($id);
	}
	$id = sanitize($id);
	$post_type = sanitize('post');
	$query = mysqli_query($connect,"SELECT post_name FROM posts WHERE post_type = '$post_type' AND ID = $id");
	$rows = mysqli_fetch_assoc($query);
	return $rows;
}


function get_post_content_and_name($id){
	global $connect;
	$id = sanitize($id);
	$post_type = sanitize('post');
	$query = mysqli_query($connect,"SELECT post_title,post_name,post_content FROM posts WHERE post_type = '$post_type' AND ID = $id");
	$rows = mysqli_fetch_assoc($query);
	return $rows;
}

function get_post_id($name){
	global $connect;
	if(is_array($name)){
	$name = implode($name);
	}
	$post_type = sanitize('post');
	$name = strtolower($name);
	$name = sanitize($name);
	$query = mysqli_query($connect,"SELECT ID from posts WHERE post_name = '$name' and post_type = '$post_type'");
	$row= mysqli_fetch_row($query);
	return $row[0];
}

function update_post_modified_date($post_id,$post_dates_array){
	global $connect;
	$update = array();
	$post_id = sanitize($post_id);
	array_walk($post_dates_array,'array_sanitize');
	//print_r($post_dates_array);
foreach($post_dates_array as  $key => $value){
$update[] = ''. $key  .' = \'' . $value . '\' ';
}
//echo "UPDATE posts SET " . implode('',$update)." WHERE ID = $post_id";
	mysqli_query($connect,"UPDATE posts SET " . implode(',',$update)." WHERE ID = $post_id");
}

function last_record(){
	global $connect;
	$query = mysqli_query($connect,"SELECT ID FROM posts ORDER BY post_date DESC limit 1");
	if($query){
		$fetch = mysqli_fetch_assoc($query);
		if(count($fetch) != 1){
			return false;
		}else{
			$increment = 1;
			return implode($fetch) + $increment; // dobavi incrementa + 1 
		}
	}
}
function display_categories(){
	global $connect;
	$input = sanitize('category');
	$input2 = sanitize('term_id');
    $query = mysqli_query($connect, "SELECT slug,name FROM terms WHERE $input2 IN (SELECT term_id FROM term_taxonomy WHERE taxonomy = '$input')");
    while($row = mysqli_fetch_assoc($query)){
			$fetch_slug = sanitize($row['slug']);
			$fetch_name = sanitize($row['name']);
			?>
			<input type='checkbox'  name ="<?php echo $fetch_slug;?>"	value="<?php echo $fetch_slug; ?>"><?php echo $fetch_name;?>
			<?php
		}
}

function edit_categories($post_id){
    global $connect;
    $input = sanitize('category');
	$input2 = sanitize('term_id');
    $query = mysqli_query($connect, "SELECT slug,name FROM terms WHERE $input2 IN (SELECT term_id FROM term_taxonomy WHERE taxonomy = '$input')");


	while($row = mysqli_fetch_array($query)){
			$fetch_slug = sanitize($row['slug']);
			$fetch_name = sanitize($row['name']);
			?>
			<input type='checkbox'  name ="<?php echo $fetch_slug;?>"	value="<?php echo $fetch_slug; ?>"	<?php if(is_array(category_is_checked($post_id)) AND is_array(array($fetch_slug))){if(array_intersect(category_is_checked($post_id),array($fetch_slug)) == true){echo "checked='checked'";}}/*foreach($row as $fetch_slug){if(category_is_checked($fetch_slug)){ echo 'checked = "checked"';}}*/?> ><?php echo $fetch_name;?>
			<?php
		}
    }
	//Проверява дали е чекирана катерогията,използвам го за едит на поста
function category_is_checked($post_id){
	global $connect;
	$query = mysqli_query($connect,"SELECT DISTINCT slug FROM terms,posts,term_relationships WHERE 
	term_relationships.object_id IN(SELECT ID FROM posts WHERE ID = '$post_id')
	AND term_relationships.term_taxonomy_id=terms.term_id");
	$check = mysqli_num_rows($query);
	if($check <=0){
		return false;
	}
	while($row = mysqli_fetch_assoc($query)){
		//$test = array_intersect_key($row);
		
		$row_new[] = $row['slug'];
	}
	//$result = '"'.implode('" OR "',$row_new).'"';
	//$result = '"'.join('" OR "',$row_new) .'"';
	

		return $row_new;
}


// Вади катерогиите на главната страница !
function display_categories_html($post_id){
	global $connect;
	$query = mysqli_query($connect,"SELECT name,slug FROM terms WHERE term_id in (SELECT term_taxonomy_id FROM term_relationships WHERE object_id = $post_id)");
		while($row = mysqli_fetch_assoc($query)){
			echo '<li><a < href="/pages/categories.php?category='.$row['slug'].'">'.$row['name'].'</a></li>';
		}
	}

function post_category_isset($post_subject){
    global $connect;
	$post_id = get_post_id($post_subject);
	if ($post_id == 0){
		$errors[] = 'Ид-то на поста не може да е 0';
	}else{
    $input = sanitize('category');
    $query = mysqli_query($connect, "SELECT slug FROM terms WHERE term_id IN (SELECT term_id FROM term_taxonomy WHERE taxonomy = '$input')");
		while ($row = mysqli_fetch_assoc($query)) {
        $value = $row['slug'];
			if (isset($_POST[$value]) && $post_id != 0) {
				$query1=mysqli_query($connect,"INSERT INTO term_relationships (object_id,term_taxonomy_id) VALUES ($post_id,(SELECT term_id FROM terms WHERE slug = '$value')");
			}
		}
	}
}

function insert_revision($post_id,$data){
		global $connect;
	array_walk($data,'array_sanitize');
	$rev = sanitize('revision');
	$fields = implode(',',array_keys($data));
	$values = '\''  . implode('\', \'', $data) . '\'';

	if($post_id == 0){
		echo 'Възникна проблем,не можахме да намерим номера на поста';
		exit();
	}else{
		$query1 = mysqli_query($connect,"INSERT INTO posts ($fields) VALUES ($values)");
	}
}

function update_category ($post_id,$category_is_checked_function){
	global $connect;
    $input = clean_xss('category');
	if($post_id == null){
		$post_id = get_post_id($post_subject);
	}
	if(!is_array($category_is_checked_function)){
		$category_is_checked_function = array();
	}
	$query = mysqli_query($connect,"SELECT slug,term_id FROM terms WHERE term_id IN (SELECT term_id FROM term_taxonomy WHERE taxonomy = '$input')");
	while ($row = mysqli_fetch_assoc($query)){
		$value = sanitize($row['slug']);
		$term_id = sanitize($row['term_id']);
		$terms[] = $value;
	if(isset($_POST[$value]) and !empty($_POST[$value]) AND !in_array($value,$category_is_checked_function)){
		mysqli_query($connect,"INSERT INTO term_relationships (object_id,term_taxonomy_id) VALUES ('$post_id','$term_id')");
		
	}
	if(empty($errors) && $_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!isset($_POST[$value])){
			mysqli_query($connect,"DELETE FROM term_relationships WHERE object_id = '$post_id' AND term_taxonomy_id = '$term_id'");
		}
	}
	}
	
}

function  display_post_edits($post_id,$post_name){
	global $connect;
	$result = array();
	$rev = sanitize('revision');
	$post_name = '$post_id-revision-v1';
	$query = mysqli_query($connect,"SELECT post_author,post_date FROM posts WHERE post_type ='$rev' AND post_name = '$post_id-revision-v1' ORDER BY post_date DESC LIMIT 5");
	//$result['novarray'] = $row['array']
	while($row = mysqli_fetch_assoc($query)){
		$result[] = $row;
	}
	foreach ($result as $key=>$value){
		$post_author = get_post_author($value['post_author']);
		$post_date = $value['post_date'];
		echo "<div>Редактирано от $post_author на $post_date</div>";
	}
	//print_r($result);
	//return $result;
			//return $result;
/*	foreach($result as $key => $value){
		$test[$key] = $result;
		print_r($result);
	}*/
}

function get_post_author($post_author_id){
	global $connect;
	$query = mysqli_query($connect,"SELECT user_login FROM users where ID = '$post_author_id'");
	$fetch = mysqli_fetch_assoc($query);
	return $fetch['user_login'];
}

function create_folder_by_date(){
	$folder_month = date('M');
	$folder_year = date('Y');
	$structure = '/uploads/post_thumbnails/'.$folder_month.' '.$folder_year;
	$absolute_path = dirname(__FILE__).$structure;
	if(!is_dir($absolute_path)){
		mkdir($absolute_path,0777,true);
	}else{
		return $absolute_path;
	}
}
function upload_profile_thumbnail($file_name,$file_type,$file_temp){
	global $connect;
	$folder_month = date('M');
	$folder_year = date('Y');
	$structure = '/uploads/profile_thumbnails/'.$folder_month. ' '.$folder_year.'/'.get_post_author(implode($_SESSION['user_id']));
	$absolute_path = dirname(__FILE__).$structure;
	if(!is_dir($absolute_path)){
		mkdir($absolute_path,0777,true);
	}else{
		//
	}
	$file_name = substr(md5(time()),0,10) . '.' .$file_type;
	$file_path = "http://localhost/".$structure.'/'.$file_name; // -- МАХНИ ГО КАТО ГО КАЧИШ НА ХОСТИНГ 
	move_uploaded_file($file_temp,$absolute_path.'/'.$file_name);
	$query = mysqli_query($connect,"UPDATE users SET user_thumbnail = \"$file_path \" WHERE ID =". implode($_SESSION['user_id']));
}
function upload_post_thumbnail($post_id,$file_temp,$file_type,$data,$meta_data){
	global $connect;
	$file_path =create_folder_by_date().'/'.substr(md5(time()),0,10) . '.' .$file_type;
	move_uploaded_file($file_temp,$file_path);
	if($file_type == 'png'){
		$data['post_mime_type'] = 'image/png';
	}
	else if($file_type == 'jpg'){
		$data['post_mime_type'] = 'image/jpg';
	}
	else if($file_type == 'jpeg'){
		$data['post_mime_type'] = 'image/jpeg';
	}
	array_walk($data,'array_sanitize');
	$file_path = "http://localhost/uploads/post_thumbnails/".date('M').' '.date('Y').'/'.substr(md5(time()),0,10) . '.' .$file_type; // -- МАХНИ ГО КАТО ГО КАЧИШ НА ХОСТИНГ 
	$data['guid'] = $file_path;
	$fields = implode(',',array_keys($data));
	$values = '\''  . implode('\', \'', $data) . '\'';
	$input = $file_temp . '.'.$file_type;
	//$image_exists = mysqli_query($connect,"SELECT name FROM posts ");
	//echo "INSERT INTO posts ($fields) VALUES($values)";
	$query1 = mysqli_query($connect,"INSERT INTO posts ($fields) VALUES($values)");
	if($query1){
		$fields1 = implode(',',array_keys($meta_data));
		$values1 = '\''  . implode('\', \'', $meta_data) . '\'';
		$meta_data['meta_value'] = mysqli_query($connect,"SELECT ID FROM posts WHERE '$fields1' = '$values1'");
		mysqli_query($connect,"INSERT INTO postmeta ($fields1) VALUES ($values1) ");
		
	}
}

function post_string_length($string){
	if(strlen($string)  > 500){
		$string = strip_tags($string,'<h><bold><p><a>');
		$stringCut = substr($string,0,500);
		$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
		return $string;
	}
}

function instant_view_reply_comment($data){
	global $connect;
	
	$fields = implode(',',array_keys($data));
	$values = '\''  . implode('\', \'', $data) . '\'';
	
mysqli_query($connect,"INSERT INTO comments ($fields) VALUES ($values) ");
}


function read_more($string,$post_id){
	if($string){
		echo '<a href="/view-post.php/?p='.$post_id.'">Read More</a>';
	}
	
}
function sanitize($data){
global $connect;
return htmlentities(strip_tags(mysqli_real_escape_string($connect,$data)));
}
?>
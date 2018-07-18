<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';

if(logged_in() === false){
    header('Location:/maintenance');
}

if(!isset($_GET['s']) OR empty($_GET['s'])){
// препрати към ерори
}
else{
	$search =$_GET['s'];
	$req = ("SELECT posts.id,posts.post_date,posts.post_author ,posts.post_title,posts.guid ,posts.post_content ,i_posts.guid as i_guid,i_posts.post_modified as i_modified
FROM posts left JOIN posts as i_posts ON  i_posts.post_parent = posts.ID and posts.post_modified < i_posts.post_date
WHERE ");
	$term = explode(" ",$search);
	$i=0;
	foreach($term as $form){
		  $i++;
		 if($i == 1){
		   $req .= "posts.post_title LIKE  '%".$form."%' and posts.post_type = 'post'";
		 }else{
		  $req .= "OR posts.post_title LIKE  '%".$form."%' and posts.post_type = 'post'";
		 }
	}
	$req = mysqli_query($connect,$req);
	if(mysqli_num_rows($req) == 0){
		$errors[] ='Няма намерени резулати!';
	}
}
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; // header
	?>
	<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Търсене</span> </li>
       </ul>
	   </section>
	   
	</div><!--Стила е в елемента не е в stylesheet-->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<form type = "GET" class = "page-search">
					<input type= "text" placeholder = "Търсене" name= "s" />
					<input type = "submit" value="Търсене" />
					</form>
	<?php
if(isset($_GET['s']) && !empty($_GET['s'])){
	while($row = mysqli_fetch_assoc($req)){
			$id = $row['id'];
			$name = $row['post_title'];
			$image = $row['i_guid'];
			$author = get_post_author($row['post_author']);
			$post_link = $row['guid'];
			$post_date = date('F d,Y',strtotime($row['post_date']));
			?>
				<div class = "search_item">
					<span class = "search_result_content">
						<label><?php echo $post_date;?> </label>
						<header><a href = "/view-post.php?p=<?php echo $id;?>"><?php echo $name; ?></a></header>
						<ul><?php display_categories_html($id) ?></ul>
						<a href = "/view-post.php?p=<?php echo $id;?>"><img src = "<?php echo $image;?>"/></a>
					</span>
				</div>
			
			<?php
	}
}
?>
				</main>
			</div>
<?php
if(!empty($errors)){
print_r(output_errors($errors));
}
require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>
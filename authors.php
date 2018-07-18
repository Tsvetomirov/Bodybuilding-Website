<?php 
require_once 'inc/init.php';
include 'header.php';
$url = "http://localhost/view-post.php/?p=";


//PROVERI DALI E INT I AKO E GO ZASHTITI S XSS_CLEAN_INT !

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php
if(isset($_GET['all_ids']) && empty($_GET['all_ids'])){
	$query2 = mysqli_query($connect,"SELECT users.id,users.user_description,users.user_thumbnail,users.display_name,count(posts.post_author) as num_posts FROM users
JOIN posts ON posts.post_type = 'post' 
 WHERE rank >'6' and post_author = users.id group by users.id");
	?>
	
	<fieldset class = "author_information">
	
	<?php
	while($row = mysqli_fetch_assoc($query2)){
		?>
			<div class = "authors">
				<div class = "author_thumbnail"><img src = "<?php /*tuka ima greshka*/if(empty($row['user_thumbnail'])){echo 'http://localhost/uploads/images/unknown_image.png';} else {echo $row['user_thumbnail'];} ?>"/></div>
				<p> <?php echo $row['display_name'];?><label>Брой постове:<?php echo $row['num_posts']?></label></p>
				<div class ="author_social_media"><span><img src = "http://localhost/uploads/images/facebook_no_color.png"></span><span><img src = "http://localhost/uploads/images/facebook_no_color.png"></span><span><img src = "http://localhost/uploads/images/facebook_no_color.png"></span><span><img src = "http://localhost/uploads/images/facebook_no_color.png"></span></div>
			</div>
		<?php
		
	}
	?>
	</fieldset>
	<?php
}else{
	$id = clean_xss_int($_GET['id']);
if(isset($id) && !empty($id) && check_rank($id) > 6){
$query = mysqli_query($connect,"SELECT id,user_description,user_thumbnail,display_name FROM users where id =". $id);

$fetch = mysqli_fetch_assoc($query);
?>
	
	<section class = "author">
		<div class = "author_desc"><h4><?php echo $fetch['display_name']; ?> <?php echo $fetch['user_description']?></h4></div>
		<div class = "author_thumbnail"><img src = "<?php echo $fetch['user_thumbnail']; ?>"/></div>
	</section>
<section class = "author_articles">
<h2>Други теми от автора:<hr></h2>
		<?php 
		$author_articles_query = mysqli_query($connect,"SELECT posts.id,posts.post_title,posts.post_content,posts.post_date,posts.guid,image_url.guid as image_guid FROM posts
left join posts as image_url ON  posts.ID = image_url.post_parent and image_url.post_type = 'attachment' and image_url.post_date >= posts.post_modified
where posts.post_author = ".$id." and posts.post_type = 'post'");

while($articles = mysqli_fetch_assoc($author_articles_query)){
$date = date('F d,Y',strtotime($articles['post_date']));
	?>
	<div class = "author_post">
	
	
	<header class = "theme_name"><a href = "<?php echo $url.$articles['id']; ?>"><?php echo $articles['post_title']; ?></a><hr></header>
	<ul class="post-category"><?php display_categories_html($articles['id']); ?></ul>
	<div class = "theme_image"><a href = "<?php echo $url.$articles['id']; ?>"><img src = "<?php echo $articles['image_guid']; ?>"></a></div>
	<time class = "theme_time"><?php echo $date; ?></time>
	
	</div>
	<?php
}
		
		
		?>
</section>
			
			

<?php
}else{
	$errors[] = 'Няма намерен такъв автор';
}
?>
		</main>
	</div>

	
<?php
}
if(!empty($errors)){
print_r(output_errors($errors));
}
include 'footer.php';
?>
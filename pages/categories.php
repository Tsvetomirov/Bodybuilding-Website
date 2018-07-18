<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/inc/init.php';
include $_SERVER['DOCUMENT_ROOT'] .'/header.php';
$url = 'http://localhost/';
	$query = mysqli_query($connect,"SELECT slug from terms where term_id IN (SELECT term_id from term_taxonomy where taxonomy = 'category')");

	$row2 = array();
		while($row = mysqli_fetch_assoc($query)){
			//$row_new = $row['slug'];
			$row_new[] = $row['slug'];
		}
		
	if(isset($_GET['category']) && in_array(clean_xss($_GET['category']), $row_new)){

		$category_query = mysqli_query($connect,'SELECT posts.guid as post_url,posts.post_title,posts.post_date,post_picture.guid as post_picture FROM posts,term_relationships 
join posts as post_picture ON post_picture.post_type =  "attachment"
where posts.ID = term_relationships.object_id
AND term_relationships.term_taxonomy_id  = (SELECT term_id FROM terms where slug ="'.clean_xss($_GET['category']).'")  and posts.post_modified < post_picture.post_date');
		
		
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
				while ($row = mysqli_fetch_assoc($category_query)) {
					$date = date('F d,Y',strtotime($row['post_date']));
		?>
		<div class = "post_cat">
			<a href = "<?php echo "$url".$row['post_url']; ?>"><img  class = "post_cat_pic" src = "<?php echo $row['post_picture']; ?>" /></a>
			<date><?php echo $date; ?></date>
			<a href = "<?php echo "$url".$row['post_url']; ?>"><div><?php echo $row['post_title']; ?></div><a>
			</div>
		<?php
		}
	}else{
		
		$errors[] = 'Моля въведете съществуваща категория!';
	}
	
	?>
		</main>
	</div>

	
<?php
if(!empty($errors)){
print_r(output_errors($errors));
}
include $_SERVER['DOCUMENT_ROOT'] .'/footer.php';
?>
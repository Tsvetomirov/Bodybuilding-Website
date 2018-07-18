<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
protect_page();
no_access_users();
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
//global $connect;//dobavi i kategoriq s inner query
$item1 = sanitize('post');
$item2 = sanitize('terms.term_id');
//echo 'SELECT post_author,post_title,post_modified FROM posts WHERE post_type = '.$item1.' AND post_status= '.$item2.'';
$query = mysqli_query($connect,"SELECT posts.post_author,posts.post_title,posts.post_modified,posts.guid,posts.id FROM posts
WHERE posts.post_type = 'post' AND posts.post_status = 'publish'");
	?>
<aside class= "admin-menu">
<div>Ранк :<?php echo display_ranks(); ?></div>
<ul>
	<li><a>Постове</a>
	<ol>
		<li><a href = "/admin_panel/menu/add_posts.php">Добави пост</a></li>
		<li class = "admin-menu-button-active"><a href = "/posts.php">Редактирай пост</a></li>
	</ol>
	</li>
	<li><a>Още</a></li>
	<ul>
		<li><a href = "/admin_panel/menu/mass_email.php">Имейл до всички</a></li>
	</ul>
</ul>
</aside>
<aside class ="admin-content">
	<div class = "posts_background">
		<table id='posts_table' cellspacing='0' >
			<tr>
			  <th scope='col' abbr='Заглавие' class='nobg'>Заглавие</th>
			  <th scope='col' abbr='Автор' class='posts-column'>Автор</th>
			  <th scope='col' abbr='Категории' class='posts-column'>Категории</th>
			  <th scope='col' abbr='Дата' class='posts-column'>Дата</th>
				</tr>
		<?php
		while($row = mysqli_fetch_assoc($query)){
			$post_author = get_post_author($row['post_author']);
			$post_title = $row['post_title'];
			$post_modified = $row['post_modified'];
			$id = $row['id'];
		?>
			<tr>
			  <th scope='row' class='spec'><a href="<?php echo 'http://localhost/admin_panel/menu/post_sub_pages/post.php?post='.$id.'&action=edit';	?>"><?php echo $post_title; 	?> </a></th>
			  <td><?php echo $post_author; 		?></td>
			  <td><?php display_categories_html($id); 		?></td>
			  <td><?php echo $post_modified ;	?> </td>
			</tr>
			
			<?php
		}?>
		</table>
	</div>
	
	
</aside>
	<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
<?php
/*Template Name: Admin!*/
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
protect_page();
no_access_users();
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';

?>
<aside class= "admin-menu">
<div>Ранк :<?php echo display_ranks(); ?></div>
<ul>
	
	<li><a>Качвания</a></li>
	<ul>
		<li><a href="/admin_panel/menu/uploads.php">Добави Снимка</a></li>
		<li><a>Галерия</a></li>
	</ul>
	<li><a>Постове</a></li>
	<ul>
		<li><a href = "/admin_panel/menu/add_posts.php">Добави пост</a></li>
		<li><a href = "/posts.php">Редактирай пост</a></li>
	</ul>
	<li><a>Още</a></li>
	<ul>
		<li><a href = "/admin_panel/menu/mass_email.php">Имейл до всички</a></li>
	</ul>
</ul>
</aside>
<aside class ="admin-content">
	<?php

	
	
	?>
</aside>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>
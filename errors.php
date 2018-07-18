<?php
/*Template Name:Errors*/
require('inc/init.php');
require_once('header.php');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="error_display">
<?php
         if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
			echo output_errors($_SESSION['errors']);
			unset($_SESSION['errors']);
         }else{
			 echo 'Нямате достъп до тази страница!';
		 }
		
		?>
		</div>
		</main>
	</div>
<?php
require_once('footer.php');
exit();
?>
<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/inc/init.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <h6>Здравейте,<?php echo $user_data['user_login']; ?></h6>
           <ul>
                <li><a href = "/user_panel/profiles/profile.php?username=<?php echo $user_data['user_login']; ?>">Профил</a> </li>
                <li><a href = '/user_panel/logged_in_panel/changepassword.php'>Смяна на парола</a> </li>
				<li><a href="/user_panel/settings/settings-bg.php" >Настройки</a></li>
				   <?php if (check_rank($session_user_id) > 8){
                   echo "<li><a href='/admin_panel/admin.php'>Админ Панел</a> <li>";
                   }  ?>
                <li><a href='/logout.php'>Изход</a> <li>
           </ul>
<div id='user_count'>
Регистрации :<?php echo user_count(); ?>
</div>
        </div>
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>

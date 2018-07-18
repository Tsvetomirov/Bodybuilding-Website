<!DOCTYPE html>
<?php 
	if(!empty($_POST['remember'])){
		
		setcookie('username',clean_xss($_POST['login_username']),time()+3600);
	}
require_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; 
//Проверка дали потреителя се е регистрирам току що.
	if(isset($_SESSION['register_success']) && $_SESSION['register_success'] == 1){
	echo '<div class="succ_reg">Успешна регистрация!!  Моля логнете се!!</div>';
	unset($_SESSION['register_success']);
	}
	//Прехвърляме ерорите от сесията на аджакса
?>
<script type = "text/javascript" src = "/assets/theme.js"></script>
<script> 
var errors = '<?php if(!empty($_SESSION['errors'])){echo json_encode($_SESSION['errors']);}?>';
</script>
<script type = "text/javascript" src = "/assets/login_page_errors.js" ></script>
<div style = "padding-top:250px; background:black; position:relative;">
	
	<section class = "nav-row">
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Вход/Регистрация</span> </li>
       </ul>
	   </section>
	   
</div><!--Стила е в елемента не е в stylesheet-->
<div id="primary" class="content-area">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Вход</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Регистрация</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="/login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="login_username" id="username" tabindex="1" class="form-control" placeholder="Име" value="<?php if(isset($_COOKIE['username'])){ echo clean_xss($_COOKIE['username']); } ?>">
									</div>
									<div class="form-group">
										<input type="password" name="login_password" id="password" tabindex="2" class="form-control" placeholder="Парола">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Запомни ме</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Вход">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href='/recover/?mode=password'  tabindex="5" class="forgot-password">Забравена парола?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="/user_panel/LOGIN_PANEL/register.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="register_name" id="register_username" tabindex="1" class="form-control" placeholder="Име" value="">
									</div>
									<div class="form-group">
										<input type="email" name="register_email" id="register_email" tabindex="1" class="form-control" placeholder="Имейл" value="">
									</div>
									<div class="form-group">
										<input type="password" name="register_password" id="register_password" tabindex="2" class="form-control" placeholder="Парола">
									</div>
									<div class="form-group">
										<input type="password" name="register_password2" id="register_confirm-password" tabindex="2" class="form-control" placeholder="Потвърдете паролата">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="reg-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" placeholder="Регистрация">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<form method = "POST">
		<input type= 'text' placeholder = 'Име' name='login_username'/>
		<input type = 'password' placeholder ='Парола' name='login_password'/>
        <p>Забравeно <a href='recover/?mode=username' ><b>Име</b></a> или <a href='www.shreddingnation.bg/recover/?mode=password'  ><b>Парола</b></a></p>
        <input type ='submit' value = 'Влизане' name = 'submit'/>
		</form>
		</div>
	</div>
-->
<?php
unset($_SESSION['errors']);
require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>
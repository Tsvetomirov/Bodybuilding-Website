<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
	if(!isset($_GET['p']) OR filter_input(INPUT_GET,'p',FILTER_VALIDATE_INT)){
	global $connect;
	
	$exist_check= mysqli_query($connect,"SELECT COUNT(ID) FROM posts WHERE id=".$_GET['p']);
	if(implode(mysqli_fetch_assoc($exist_check)) <=0 ){
		$errors[] = 'Не съществува такъв пост!';
	}else{
	
	$post_query = mysqli_query($connect,"SELECT posts.id,posts.post_date,posts.post_author ,posts.post_title,posts.guid ,posts.post_content ,i_posts.guid as i_guid,users.user_thumbnail
FROM posts left JOIN posts as i_posts ON i_posts.post_parent = posts.ID and i_posts.post_type = 'attachment' and posts.post_modified < i_posts.post_date
left JOIN users on posts.post_author= users.id
WHERE posts.ID =". $_GET['p']);
	require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
	
	
	
	
	
?>

<script type = "text/javascript" > var post_id = "<?php echo $_GET['p']; ?>";</script>
<script type = "text/javascript" src = "/assets/view-post.js"></script>





	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="secondary" class="SH">
			<?php
			$row = mysqli_fetch_assoc($post_query);
			$date = date('F d,Y',strtotime($row['post_date']));
			?>
			<article>
			<!-- POST HEAD-->
				<header class="post-head unselectable" >
					<a href=<?php echo $row['guid']; ?>>
					
						<time class="post-date" ><?php echo $date; ?></time>
					
					</a>
					<h3>
						<?php echo $row['post_title']; ?>
					</h3>
					<!--POST CATEGORIES -->
					<ul class="post-category">
						<?php display_categories_html($row['id']); ?>
					</ul>
				</header>
				<!-- AUTHOR IMAGE -->
				<div class="post-image">
					<a href = "<?php echo $row['guid']; ?>">
						<img  src = "<?php  echo $row['i_guid']; ?>"/>
					</a>
				</div>
				<!-- META -->
				<div class="post-meta">
					<a class = "post_author" href="<?php echo '/authors.php?id='.$row['post_author']?>">
						<img src="<?php echo $row['user_thumbnail']?>"/>
					</a>
				</div>
				<div class="post-body">
					<div class = "entry">
						<?php echo $row['post_content']; ?>
					</div>
				</div>

			</article>
			</div>
			
			<?php
			if(logged_in()){
			if(isset($_POST['submit'])){
				if(!empty(clean_xss($_POST['comment']))){
					$data = array(
					'comment_post_ID' 				=> $row['id'],
					'comment_author' 				=> $user_data['user_login'],
					'comment_author_IP' 			=> getenv('REMOTE_ADDR'),
					'comment_author_forwarded_IP' 	=> getenv('HTTP_X_FORWARDED_FOR'),
					'comment_date' 					=> date("Y-m-d H:i:s"),
					'comment_content' 				=> clean_xss($_POST['comment']),
					'comment_parent' 				=> '0',
					'user_id' 						=> implode($session_user_id)
					
					);
					add_comment($data);
				}else{
					//
				}

			}
			}else{
				$errors = '<а href = "/login.php" >Логнете се</а> за да коментирате!';
			}
			?>
			
		<div class = "comment_wrapper">
			<div class = "comment_sub_wrapper">
				<form method = "POST" class = "comment_form">
					<textarea name = "comment"></textarea>
					<input type = "submit" name = "submit" />
				</form>
			</div>
		<?php
		// view comments
		$comment_query = mysqli_query($connect,"SELECT comment_id,comment_content,comment_author,users.user_thumbnail,comment_date FROM comments LEFT JOIN users ON users.ID = comments.user_id
		where comment_post_ID =" . $row['id']);
		
		?>

    <div class="row">
		<div class="col-md-12">
		    <div class="blog-comment">
				<h3 class="text-success">Коментари</h3>
                <hr/>
				<ul class="comments">
		<?php
		while($comments = mysqli_fetch_assoc($comment_query)){
			?>
				<li class="clearfix">
				  <img src="<?php 
				  if(empty($comments['user_thumbnail'])){
					  echo 'http://localhost/uploads/default_thumbnail.png';
					  
				  }else
				  {
					echo $comments['user_thumbnail'];  
				  }
				  ?>" class="avatar" alt="">
				  
				  <div class="post-comments">
				      <p class="meta"><?php echo 'На ' .substr($comments['comment_date'],0,-8); ?> <a href="#"><?php echo $comments['comment_author'] ?></a> каза : <i class="pull-right"><a class="reply" data-custom-id = "<?php echo $comments['comment_id'] ?>"><small>Отговор</small></a></i></p>
				      <p>
				         <?php echo $comments['comment_content']; ?>
				      </p>
				  </div>
				</li>

			<?php
			
			
		$reply_query = mysqli_query($connect,"SELECT comment_id,comment_content,comment_author,users.user_thumbnail,comment_date FROM comments LEFT JOIN users ON users.ID = comments.user_id
			where comment_post_ID =" . $row['id']. " AND comment_parent = ". $comments['comment_id']);
			
			while($replies = mysqli_fetch_assoc($reply_query)){
				
				
				?>
										
						  <ul class="comments">
							  <li class="clearfix">
								  <img src="<?php 
								   if(empty($replies['user_thumbnail'])){
										  echo 'http://localhost/uploads/default_thumbnail.png';
										  
									  }else
									  {
										echo $replies['user_thumbnail'];  
									  }
								  
								  ?>" class="avatar" alt="">
								  <div class="post-comments">
									  <p class="meta"><?php echo 'На ' .substr($comments['comment_date'],0,-8); ?><a href="#"><?php echo $replies['comment_author']; ?></a> отговори на <?php echo $comments['comment_author']; ?> : <i class="pull-right"><a class = "reply" data-custom-id = "<?php echo $comments['comment_id'] ?>" ><small>Отговор</small></a></i></p>
									  <p>
										  <?php  echo $replies['comment_content'];?>
									  </p>
								  </div>
									<li>
								</ul>
				
				<?php
			}
		}
		
		
		
		?>
		
		
							</li>
							</ul>
						</div>
					</div>
				</div>
	<!--Затварящата container -->
		</main>
	</div>

<?php
	}//Затварящата скоба за проверка,дали постът съществува
	
			if(empty($errors) == false){
			require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
			print_r(output_errors($errors));
			require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
			}
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
	}else{
		
		$errors[] = 'Възникна грешка при обработването на информацията!';
		$_SESSION['errors'] = $errors;
		header('Location: /errors.php');
		
		
	}//затварящия else за проверката дали $_GET['p'] е число!!
	
?>
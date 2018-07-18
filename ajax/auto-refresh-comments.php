<?php 
if(isset($_POST['content']) && !empty($_POST['content'])){
	
	require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/init.php';
	
	
	$content = clean_xss($_POST['content']);
	
					$data = array(
					'comment_post_ID'				=>$_POST['post_id'],
					'comment_author'				=>$user_data['user_login'],
					'comment_author_IP'				=>getenv('REMOTE_ADDR'),
					'comment_author_forwarded_IP'	=>getenv('HTTP_X_FORWARDED_FOR'),
					'comment_date'					=>date("Y-m-d H:i:s"),
					'comment_content'				=>$content,
					'comment_parent'				=> $_SESSION['reply'],
					'user_id'						=> implode($session_user_id)
					);
					instant_view_reply_comment($data);
					
		$query = mysqli_query($connect,'SELECT comment_id,comment_content,comment_author,users.user_thumbnail,comment_date FROM comments LEFT JOIN users ON users.ID = comments.user_id
where comment_author = "'.$user_data['user_login']. '" order by comment_date desc limit 1');
$row = mysqli_fetch_assoc($query);
?>
		<ul class="comments">
		<li class="clearfix">
			<img src="

					<?php if(empty($row['user_thumbnail'])){
					  echo 'http://localhost/uploads/default_thumbnail.png';
					  
				  }else
				  {
					echo $row['user_thumbnail'];  
				  }
					?>" 
				  class="avatar" alt="">
				<div class="post-comments">
					<p class="meta"><?php echo 'На ' .substr($row['comment_date'],0,-8); ?> <a>Вие</a> казахте:<i class="pull-right"><a href="#"><small></small></a></i></p>
						<p>
							  <?php echo $row['comment_content']; ?>
						</p>
					</div>
				<li>
			</ul>
		</li>
	</ul>
	
	
<?php
}
if(isset($_POST['reply'])){
	session_unset($_SESSION['reply']);
}
?>
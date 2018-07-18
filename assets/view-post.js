$(document).ready(function(){
	
 /*   $(".r_textarea").on('keyup',function (e) {
        if(e.which == 13) {
			event.preventDefault();
			$(".comment_reply_form").submit();
		
        }
    });*/
	
	
	
	
	
	
	
		function test (){
			$('.comment_reply_form').on('keydown',function(e) {
				if(e.which == 13 && !e.shiftKey){
					e.preventDefault();
					$(this).submit();
				}
			});
		}

	
	
	
	
	
		$(document).on('click','.r_button',function(e){
			e.preventDefault();
			$(this).submit();
		});
		
		$(document).on('submit','.comment_reply_form',function(e){
			
				e.preventDefault();
				var content = $(".r_textarea").val();
				var print_comment = $(this);
				$.ajax({
					type:"POST",
					url:"/ajax/auto-refresh-comments.php",
					data:{
						'content':content,'post_id':post_id
						},
					success:function(return_data){
						print_comment.closest(':has(.post-comments)').append(return_data);
						print_comment.remove();
					}
				});
		});

	$('.reply').on('click',function(){
		var id = $(this).data('custom-id');
		var this_reply = $(this);
		$.ajax ({
			type:"POST",
			url:"/ajax/view-post-comments-reply.php",
			data:{'comment_id':id},
			success:function(data){
				//console.log(this_reply);//.parent().css({"background":"yellow"}));
				if($(".comment_reply_form").children().length > 0){
					
					$(".comment_reply_form").remove();
					this_reply.closest(".clearfix").append(data);
					test();
				}else{
					this_reply.closest(".clearfix").append(data);
					test();
				}
				//$('.comment_reply_form').css({"display":"block"});
				//$(this).parent('.clearfix').append("	<form method='POST' class =  'comment_reply_form'><textarea name = 'reply_textbox'></textarea>");
			},
				error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status);
           alert(xhr.responseText);
           alert(thrownError);
       }
			
		});
	});
	
});
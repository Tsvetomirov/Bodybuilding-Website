jQuery(document).ready(function ($) {
	$("#food_search").keyup(function(event){
		var search_term =$(this).val();
$.ajax({
	type:"POST",
	url:"/foods/food-search.php",
	data:{'fsearch':search_term},
	success:function(res){
		$("#food_search_result").html(res);
	},

});
	});
});
/*
http://shreddingnation.com/bg/%D1%82%D1%8A%D1%80%D1%81%D0%B5%D0%BD%D0%B5-%D0%BD%D0%B0-%D1%85%D1%80%D0%B0%D0%BD%D0%B8/
});
*/


/*
jQuery(document).ready(function ($) {
	$("#food_search").keyup(function(event){
		var search_term =$(this).val();
$.ajax({
	type:"POST",
	url:"http://shreddingnation.com/bg/групи-храни/",
	data:{fsearch:search_term},
	success:function(res){
		$("#food_search_result").html(res);
	},
	error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status);
           alert(xhr.responseText);
           alert(thrownError);
       }
});
	});
});
*/
/*
if(isset($_POST[''])) {
	$searchq = $_POST[''];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query = mysqli_query("SELECT * FROM food_data_bg");
	$count = mysqli_num_rows($query);
	if($count == 0) {
		$output = 'Няма намерени резултати';
	}else {
		while($row = mysqli_fetch_array($query)) {
			$fname = $row['title'];
			
			$output .='div'.'$fname'.'</div>';
		}
	}
}
*/
	$(document).ready(function($){
	$(".d-f-sub").on('click',function(e){
		e.preventDefault();
		resetErrors();
		$('.inputTxtError').children('form input').css({'border-color' : '','box-shadow' : ''});
	/*	var data = {};
		
		 $.each($('form input, form select'), function(i, v) {
              if (v.type !== 'submit') {
                  data[v.name] = v.value;
                  
              }
            });*/
            
        $.ajax({
            type:           "POST",
            data:           $('.wrapper > form').serialize(),
            dataType:       "JSON",
            url:            "/ajax/diet/diet-page-error-display.php",
            success:        function(result){  
                JSON.stringify(result);
                if(result == "true"){
                    $(".d-f-sub").submit();
                    window.location = "http://www.musclevale.com/diet";
                    return false;
                }else {
                  $.each(result, function(i, v) {
                      var msg = '<label class="diet-error" for="'+i+'" style="background:red;">'+v+'</label>';
                      $('input[name="' + i + '"], select[name="' + i + '"]').css({'border-color' : '#cc0000','box-shadow' : '0 0 10px #cc0000'}).closest('div').addClass('inputTxtError').after(msg);
                  });
                  var keys = Object.keys(result);
                  $('input[name="'+keys[0]+'"]').focus();
              }
              return false;
                
            },
    error: function(jqXHR, textStatus, errorThrown) {
        alert(jqXHR.status);
        alert(textStatus);
        alert(errorThrown);
    }
        });
        
        
        function resetErrors() {
    $('form input, form select').removeClass('inputTxtError');
    $('label.diet-error').remove();
}
		});
	});
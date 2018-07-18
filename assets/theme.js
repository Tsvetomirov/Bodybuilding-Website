jQuery(document).ready(function($) {

	"use strict";

	
	/*--------------------------------------------------------------
	          Slider options             
	--------------------------------------------------------------*/
  var currentIndex = 0;
  var items = $('.slides');
  var itemAmt = items.length;
 function cycleItems() {
  var item = $('.slides').eq(currentIndex);
  items.hide();
  item.fadeIn(1000);
}
  var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
  }, 5000);
  $('#forward-slide').click(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});
$('#backward-slide').click(function() {
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});

    /*--------------------------------------------------------------
	                         Login
	---------------------------------------------------------------*/
	     var succ_logged_in = sessionStorage.getItem('succ_logged_in');
        if (succ_logged_in== null) {
        sessionStorage.setItem('succ_logged_in', 1);
  
        $('#logged_in').delay(2000).slideDown('slow').delay(4000).slideUp('slow');
    }
	

    /*--------------------------------------------------------------
	                       Food Page Script
	--------------------------------------------------------------*/
    jQuery("#proteins .table-clear:has(.pit)").css({display: 'none'});
    jQuery("#vitamini .table-clear:has(.pit)").css({display: 'none'});
	jQuery("#steroli .table-clear:has(.pit)").css({display: 'none'});
	jQuery("#maznini .table-clear:has(.pit)").css({display: 'none'});
	jQuery("#vuglehidrati .table-clear:contains('оза')").css({display: 'none'});
	jQuery('#proteinimg').on('click',function(){
		    $("#proteins .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost/uploads/images/Arrow-up-2-icon.png';
			$("#proteinimg").attr("src",src);
	});
	jQuery('#vitaminimg').on('click',function(){
		    $("#vitamini .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost/uploads/images/Arrow-up-2-icon.png';
			$("#vitaminimg").attr("src",src);
	});
	jQuery('#sterolimg').on('click',function(){
		    $("#steroli .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost/uploads/images/Arrow-up-2-icon.png';
			$("#sterolimg").attr("src",src);
	});
	jQuery('#mazniniimg').on('click',function(){
		    $("#maznini .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost/uploads/images/Arrow-up-2-icon.png';
			$("#mazniniimg").attr("src",src);
	});
	jQuery('#carbsimg').on('click',function(){
		    $("#vuglehidrati .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost/uploads/images/Arrow-up-2-icon.png';
			$("#carbsimg").attr("src",src);
	});

	/*--------------------------------------------------------------
	Skip link focus
	--------------------------------------------------------------*/


	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}

	/*------------------------------------------------------------------
								Регистрации/Логин 
	------------------------------------------------------------------*/
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

// Аjax за Логин панела на индекс страницата

$("#index_login").on('submit',function(e){
	e.preventDefault();
	var name = $("input[name='login_username']").val();
	var pass = $("input[name='login_password']").val();
	$.ajax({
		url:"ajax/login_check.php",
		type: "POST",
		data:{
			'login_username' : name,
			'login_password' : pass
		},
		success:function(data){
			$('.login_index_errors').remove();
			$('.login_panel').after(data).fadeIn(2000);
			$('.login_index_errors').hide().fadeIn(2000).fadeOut(2000);
		}
	});
	
});
	
	
});
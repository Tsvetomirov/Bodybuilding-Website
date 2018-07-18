$(document).ready(function($){
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
		   
		   var src = ($(this).attr('src') ==='http://localhost:7777/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost:7777/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost:7777/uploads/images/Arrow-up-2-icon.png';
			$("#proteinimg").attr("src",src);
	});
	jQuery('#vitaminimg').on('click',function(){
		    $("#vitamini .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost:7777/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost:7777/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost:7777/uploads/images/Arrow-up-2-icon.png';
			$("#vitaminimg").attr("src",src);
	});
	jQuery('#sterolimg').on('click',function(){
		    $("#steroli .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost:7777/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost:7777/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost:7777/uploads/images/Arrow-up-2-icon.png';
			$("#sterolimg").attr("src",src);
	});
	jQuery('#mazniniimg').on('click',function(){
		    $("#maznini .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost:7777/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost:7777/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost:7777/uploads/images/Arrow-up-2-icon.png';
			$("#mazniniimg").attr("src",src);
	});
	jQuery('#carbsimg').on('click',function(){
		    $("#vuglehidrati .table-clear:has(.pit)").slideToggle('fast');
		   
		   var src = ($(this).attr('src') ==='http://localhost:7777/uploads/images/Arrow-up-2-icon.png')
		   ?'http://localhost:7777/uploads/images/Arrow-down-2-icon.png'
		   :'http://localhost:7777/uploads/images/Arrow-up-2-icon.png';
			$("#carbsimg").attr("src",src);
	});
});
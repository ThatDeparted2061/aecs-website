$(function(){
    $("#topFixedNavbar1 li.dropdown").hover(function(){
			$(".dropdown-menu",this).fadeIn();
	},function(){
			$(".dropdown-menu",this).fadeOut('fast');
	});
	$("#home").parent().addClass('active');



	// Click code for dropdown Menu Items
    
    
});


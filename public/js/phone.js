$(document).ready(function() {

	$("#menu-phone").on('click', function(e){
		e.preventDefault();
		$("nav").slideToggle( "slow", function() {
		    // Animation complete.
		  });
	});


});

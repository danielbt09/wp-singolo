(function($){
	var toggleBtn = $('.toggle-menu');
	var navbar = $('.navbar');
	toggleBtn.on('click', function(){
		navbar.stop(true, true).slideToggle();
	});
	$(window).on('resize', function(){
		navbar.css('display', 'none');
		if(!toggleBtn.is(':visible') && !navbar.is(':visible')){
			navbar.css('display', 'block');
		}
	});
})(jQuery);

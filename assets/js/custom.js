(function ($){
    // hamburger-menu
	$('.hamburger-menu').click(function () {
		$('.funiro-header_area nav').toggleClass('active')
		$('.hamburger-menu').toggleClass('toggle')
	});

	//sticy-header
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$(".active_sticky").removeClass("sticky");
		} else {
			$(".active_sticky").addClass("sticky");
		}
	});

	new WOW().init();
	
}(jQuery));
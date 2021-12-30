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
			$(".funiro-header_area").removeClass("sticky");
		} else {
			$(".funiro-header_area").addClass("sticky");
		}
	});


	
}(jQuery));
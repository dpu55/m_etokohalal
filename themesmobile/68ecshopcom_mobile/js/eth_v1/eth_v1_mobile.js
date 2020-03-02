//Currency Format (https://codepen.io/engza/pen/xdBky)
function numberWithCommas(number) {
	var parts = number.toString().split(".");
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	return parts.join(".");
}

$(document).ready(function () {

	if ($('body').hasClass('page-index') === true) {
		$('.vf_nav ul li:first-child').addClass('active');
	} else if ($('body').hasClass('page-catalog') === true) {
		$('.vf_nav ul li:nth-child(3)').addClass('active');
	}

	//	STICKY MENU MOBILE
	// grab the initial top offset of the navigation 
	var stickyNavTop = $('#fake-search').offset().top;

	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var stickyNav = function () {
		var scrollTop = $(window).scrollTop(); // our current vertical position from the top

		// if we've scrolled more than the navigation, change its position to fixed to stick to top,
		// otherwise change it back to relative
		if (scrollTop > stickyNavTop) {
			$('#fake-search').addClass('sticky');
		} else {
			$('#fake-search').removeClass('sticky');
		}
	};

	stickyNav();
	// and run it again every time you scroll
	$(window).scroll(function () {
		stickyNav();
	});
	

	//	CURRENCY FORMAT
	$(".price-currency-format").each(function() {
		var num = $(this).text();
		var commaNum = numberWithCommas(num);
		$(this).text(commaNum);
	});

});

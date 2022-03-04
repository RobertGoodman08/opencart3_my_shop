$(function() {

	$('.open-search').click(function(e) {
		e.preventDefault();
		$('#search').addClass('active');
	});

	$('.close-search').click(function() {
		$('#search').removeClass('active');
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('#top').fadeIn();
		} else {
			$('#top').fadeOut();
		}
	});

	$('#top').click(function() {
		$('body, html').animate({scrollTop: 0}, 700);
	});

	$('.sidebar-toggler .btn').click(function() {
		$('.sidebar-toggle').slideToggle();
	});

});
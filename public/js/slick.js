$(document).ready(function () {
	$(".slick-slider").slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: true,
		swipeToSlide: true,
		infinite: true,
		variableWidth: true,
		autoplaySpeed: 1500,
		dots: false,
		arrows: false,
		centerMode: false,
		initialSlide: 10,
	});
});

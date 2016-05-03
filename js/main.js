$(document).ready(function() {
	$(".fancybox").fancybox();

	  $('.bxslider').bxSlider({
	  	   auto: true,
		   mode: 'horizontal',
		   captions: true,
		   pager: false,
		   adaptiveHeight: true,
		   speed: 900
		});

	 $(".fa.fa-bars").on("click", function(){
	 	$(".navigation-container").toggleClass("open");
	 });
	 $(".overlay").on("click", function(){
	 	$(".navigation-container").removeClass("open");
	 });
});
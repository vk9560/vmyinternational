$( document ).ready(function() {
    schoolOwlCarouselBanner();
	studentgallery();
	ourToppers();
	newsmarquee();
	introvideomodal();
	
});

// owl carousel
schoolOwlCarouselBanner = function(){
	$('#schoolslider').owlCarousel({
		loop:true,
		margin:10,
		nav: true,
		dots: true,
		mouseDrag:true,
		autoplay:false,
		smartSpeed: 1000,
		autoplayTimeout:3000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		navText: [
			"<img src='images/prev.png'>",
			"<img src='images/next.png'>",
		],
		responsive: {
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 1,
			},
			1200: {
				items: 1,
			},
		},
	});
}

// Student Gallery
studentgallery = function(){
	$('.studentgallery').owlCarousel({
		loop:true,
		margin:10,
		nav: true,
		dots: false,
		mouseDrag:true,
		autoplay:true,
		smartSpeed: 1000,
		autoplayTimeout:3000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		navText: [
			"<img src='images/prev.png'>",
			"<img src='images/next.png'>",
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		},
	});
}


// Our Toppers
ourToppers = function(){
	$('.OurToppers').owlCarousel({
		loop:true,
		margin:10,
		nav: true,
		dots: false,
		mouseDrag:true,
		autoplay:true,
		smartSpeed: 1000,
		autoplayTimeout:3000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		navText: [
			"<img src='images/prev.png'>",
			"<img src='images/next.png'>",
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		},
	});
}

// News Marquee
newsmarquee = function(){
	$('.marquee').marquee({
		speed: 5000,
		gap: 1000,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});
}

// Video Modal 
introvideomodal = function(){
	$('#IntroModal').on('show.bs.modal', function (e){
		var idVideo = $(e.relatedTarget).data('id');
		$('#IntroModal .tablet-body').html('<iframe src="https://www.youtube.com/embed/' + idVideo + '?start=37&end=4:00&autoplay=true" frameborder="0" allowfullscreen></iframe>');
	});
	$('#IntroModal').on('hidden.bs.modal', function () {
	  $('#IntroModal .tablet-body').empty();
  });
}

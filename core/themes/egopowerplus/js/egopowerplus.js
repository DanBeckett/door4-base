jQuery(window).load(function() {
	// The review slider
	if(jQuery('div.review_slider').length > 0) { 
		jQuery('div.review_slider').flexslider({
			animation: "slide",
			animationLoop: true,
			controlNav: false,
			directionNav: true,
			slideshowSpeed: 8000,
			animationSpeed: 800,
			prevText: "&#xf104;",
			nextText: "&#xf105;",
			start: function(){
				 jQuery('div.review_slider').addClass('active'); 
			}
		});
	};
});

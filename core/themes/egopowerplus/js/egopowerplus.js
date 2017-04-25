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

	if(jQuery('div.single_product_details div.thumbnails_panel').length > 0) {
		jQuery('div.single_product_details div.thumbnails_panel').flexslider({
			animation: 'slide',
			controlNav: false,
			directionNav: true,
			animationLoop: false,
			slideshow: false,
			itemWidth: 108,
			itemMargin: 0,
			prevText: "&#xf104;",
			nextText: "&#xf105;",
			asNavFor: 'div.single_product_details div.slide_panel',
			start: function(){
				 jQuery('div.single_product_details div.thumbnails_panel').addClass('active'); 
			},
		});
	
	};

	if(jQuery('div.single_product_details div.slide_panel').length > 0) {
		jQuery('div.single_product_details div.slide_panel').flexslider({
			animation: 'fade',
			controlNav: false,
			directionNav: false,
			animationLoop: false,
			slideshow: false,
			sync: 'div.single_product_details div.thumbnails_panel',
			start: function(){
				 jQuery('div.single_product_details div.slide_panel').addClass('active'); 
			},
		});
	};

	if(jQuery('div.parts_accessories_carousel').length > 0) {
		jQuery('div.parts_accessories_carousel').flexslider({
			animation: 'slide',
			controlNav: false,
			directionNav: true,
			animationLoop: false,
			slideshow: false,
			itemWidth: 217,
			itemMargin: 0,
			move: 1,
			prevText: "&#xf104;",
			nextText: "&#xf105;",
			start: function(){
				 jQuery('div.parts_accessories_carousel').addClass('active'); 
			},
		});
	};

	if(jQuery('div.related_products_carousel').length > 0) {	
		jQuery('div.related_products_carousel').flexslider({
			animation: 'slide',
			controlNav: false,
			directionNav: true,
			animationLoop: false,
			slideshow: false,
			itemWidth: 217,
			itemMargin: 0,
			move: 1,
			prevText: "&#xf104;",
			nextText: "&#xf105;",
			start: function(){
				 jQuery('div.related_products_carousel').addClass('active'); 
			},
		});
	};

	/*-- MatchHeight --*/

	var matchEls = [
		'div#main div.content_block.content_block_feature_panels ul.feature_panels li div.feature_panel div.image',
		'div#main div.content_block.content_block_feature_panels ul.feature_panels li div.feature_panel div.text h2',
		'div#main div.content_block.content_block_feature_panels ul.feature_panels li div.feature_panel div.text',
		'div#main div.content_block.content_block_action_links ul.action_links li a',
		'div#main div.content_block.content_block_range_list_2_across_style_1 div.range_list_2_across_style_1 ul.product_list li div.product div.image',
		'div#main div.content_block.content_block_range_list_2_across_style_1 div.range_list_2_across_style_1 ul.product_list li div.product div.details div.title',
		'div#main div.content_block.content_block_range_list_2_across_style_1 div.range_list_2_across_style_1 ul.product_list li div.product div.details div.description',
		'div#main div.content_block.content_block_range_list_2_across_style_1 div.range_list_2_across_style_1 ul.product_list li div.product',
		'div#main div.content_block.content_block_range_list_3_across div.range_list_3_across ul.product_list li div.product div.image',
		'div#main div.content_block.content_block_range_list_3_across div.range_list_3_across ul.product_list li div.product div.details div.code',
		'div#main div.content_block.content_block_range_list_3_across div.range_list_3_across ul.product_list li div.product div.details div.description',
		'div#main div.content_block.content_block_range_list_3_across div.range_list_3_across ul.product_list li div.product',
		'div#main div.content_block.content_block_our_story_feature_panels ul.feature_panels li div.feature_panel div.image',
		'div#main div.content_block.content_block_our_story_feature_panels ul.feature_panels li div.feature_panel div.text h2',
		'div#main div.content_block.content_block_single_product_features div.single_product_features ul.features li div.feature',
		'div#main div.content_block.content_block_single_product_specifications div.single_product_specifications ul.specifications li div.specification div.label',
		'div#main div.content_block.content_block_single_product_specifications div.single_product_specifications ul.specifications li div.specification',
		'div#main div.content_block.content_block_blog_index_featured_items ul.blog_index_featured_items > li a.featured_item',
		'div#main div.content_block.content_block_blog_index_links ul.blog_index_links li a.link_panel div.title',
		'.matchheight'
	];

	// Disabled matchHeight Els:
	// 'div#main div.content_block.content_block_manuals div.manuals div.manuals_concertina div.section div.section_bar.conc-trigger div.matchheight'

	for (i = 0, len = matchEls.length; i < len; i++) {
		if(jQuery(matchEls[i]).length > 0) {
			var $this = jQuery(matchEls[i]);
			$this.matchHeight();
		}
	}

	/*-- Labelled Image Blocks --*/

	if(jQuery('div.content_block_labelled_product_image div.labels_toggle').length > 0) {

		jQuery('div.content_block_labelled_product_image div.labels_toggle').click(function(e) {
			
			jQuery(this).toggleClass('active');
			
			jQuery(this).closest('div.content_block_labelled_product_image').find('div.overlay').toggleClass('active');
		
		}); // $('div.content_block_labelled_product_image div.labels_toggle').click(function(e) {

	};

	/*-- YouTube Embeds --*/

	if(jQuery('.play_button').length > 0) {

		jQuery('.play_button').click(function(e){
			var $this	=	jQuery(this),
			    $img	=	$this.siblings('img'),
			    $div	=	$this.siblings('div');
			$this.hide();
			$img.hide();
			$div.show();
		});

	}

});

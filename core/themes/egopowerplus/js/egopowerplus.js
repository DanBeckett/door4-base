jQuery(window).load(function() {
	
	//trigger mobile menu
	jQuery(".mobile_menu_trigger").click(function(e) {
		e.preventDefault(); // Prevent default behaviour
		jQuery('div#global_wrapper').toggleClass('mobile-menu-active');
	});
	
	jQuery('div#global_wrapper div#mobile_menu_wrapper ul#mobile_menu > li.drop-down > a').append('<span class="submenu_trigger"><i class="fa fa-angle-down"></i></span>');	
	jQuery("div#global_wrapper div#mobile_menu_wrapper ul#mobile_menu > li.drop-down > a > span.submenu_trigger").click(function(e) {
		e.preventDefault(); // Prevent default behaviour
		jQuery(this).closest('div#global_wrapper div#mobile_menu_wrapper ul#mobile_menu > li.drop-down').toggleClass('active');
	}); // $("div#mobile_menu li.menu-item-has-children > span.submenu_trigger").click(function(e) {

	//if we've come to a specific part of a page, readjust for header
	  if(window.location.hash) {
		var $header = jQuery('header'),
			$header_height = $header.outerHeight(),
			$hash = window.location.hash.substring(1),
			$scrollEl = jQuery('#' + $hash),
			$scrollElPos = $scrollEl.position();
		jQuery('html, body').animate({scrollTop: ($scrollElPos.top - $header_height)}, 800);
	  }

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

	// The heading image slider
	if(jQuery('div.hero_image_slider').length > 0) {
		
		//if the slider has a video slide, switch to "fade" animation,
		//as slide doesn't work with video content.
		var animationStyle = "slide";
		if(jQuery('div.hero_image_slider').find('.video_wrapper').length > 0)
			animationStyle = "fade";

		jQuery('div.hero_image_slider').flexslider({
			animation: animationStyle,
			animationLoop: true,
			controlNav: false,
			directionNav: true,
			slideshowSpeed: 4000,
			animationSpeed: 800,
			prevText: "&#xf104;",
			nextText: "&#xf105;",
			start: function(){
				 jQuery('div.hero_image_slider').addClass('active'); 
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

	jQuery.fn.matchHeight.afterUpdate = function(event, groups) {
		console.log('hello');
	}

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
			$div.children('iframe').each(function() {
			  jQuery(this).attr('src', jQuery(this, parent).attr('src') + '&autoplay=1');
			});
		});

	}

	/*-- Add Anchors to product pages - should really refactor this into one function --*/

	if(jQuery('.page-node-type-product').length > 0 && jQuery('#breadcrumb_bar .anchors').length > 0) {
		// els to anchor: #specification, #product-features
		var $captions = jQuery('#potential_js_breadcrumbs').data();

		if(jQuery('#summary').length > 0) {
			var $this = jQuery('#summary'),
				$header = jQuery('header'),
				$anchors = jQuery('#breadcrumb_bar .anchors'),
				$el_pos = $this.position(),
				$header_height = $header.outerHeight()
				$scrollto = $el_pos.top - $header_height;
			$anchors.append('<a href="#summary" data-scroll-to="' + $scrollto + 'px">' + $captions.summary + '</a>');
		}

		if(jQuery('#product_features').length > 0) {
			var $this = jQuery('#product_features'),
				$header = jQuery('header'),
				$anchors = jQuery('#breadcrumb_bar .anchors'),
				$el_pos = $this.position(),
				$header_height = $header.outerHeight()
				$scrollto = $el_pos.top - $header_height;
			$anchors.append('<a href="#product_features" data-scroll-to="' + $scrollto + 'px">' + $captions.features + '</a>');
		}

		if(jQuery('#specification').length > 0) {
			var $this = jQuery('#specification'),
				$header = jQuery('header'),
				$anchors = jQuery('#breadcrumb_bar .anchors'),
				$el_pos = $this.position(),
				$header_height = $header.outerHeight()
				$scrollto = $el_pos.top - $header_height
				$captions = jQuery('potential_js_breadcrumbs');
			$anchors.append('<a href="#specification" data-scroll-to="' + $scrollto + 'px">' + $captions.specification + '</a>');
		}

		if(jQuery('#block-views-block-product-related-content-parts-and-accessories').length > 0) {
			var $this = jQuery('#block-views-block-product-related-content-parts-and-accessories'),
				$header = jQuery('header'),
				$anchors = jQuery('#breadcrumb_bar .anchors'),
				$el_pos = $this.position(),
				$header_height = $header.outerHeight()
				$scrollto = $el_pos.top - $header_height;
			$anchors.append('<a href="#block-views-block-product-related-content-parts-and-accessories" data-scroll-to="' + $scrollto + 'px">' + $captions.partsAccessories + '</a>');
		}

		if(jQuery('#questions').length > 0) {
			var $this = jQuery('#questions');
			if($this.is(':visible')){
				var $header = jQuery('header'),
				    $anchors = jQuery('#breadcrumb_bar .anchors'),
				    $el_pos = $this.position(),
				    $header_height = $header.outerHeight(),
				    $scrollto = $el_pos.top - $header_height;
				$anchors.append('<a href="#questions" data-scroll-to="' + $scrollto + 'px">' + $captions.questions + '</a>');
			};
		}

		if(jQuery('#reviews').length > 0) {
			var $this = jQuery('#reviews');
			if($this.is(':visible')){
				var $header = jQuery('header'),
				    $anchors = jQuery('#breadcrumb_bar .anchors'),
				    $el_pos = $this.position(),
				    $header_height = $header.outerHeight(),
				    $scrollto = $el_pos.top - $header_height;
				$anchors.append('<a href="#reviews" data-scroll-to="' + $scrollto + 'px">' + $captions.reviews + '</a>');
			};
		}

		// if(jQuery('#block-views-block-product-related-content-related-products').length > 0) {
		// 	var $this = jQuery('#block-views-block-product-related-content-related-products'),
		// 	    $header = jQuery('header'),
		// 	    $anchors = jQuery('#breadcrumb_bar .anchors'),
		// 	    $el_pos = $this.position(),
		// 	    $header_height = $header.outerHeight()
		// 	    $scrollto = $el_pos.top - $header_height;
		// 	$anchors.append('<a href="#block-views-block-product-related-content-related-products" data-scroll-to="' + $scrollto + 'px">Related Products</a>');
		// }

		jQuery('.anchors a').on('click', function(e){
			$this = jQuery(this);
			$scroll = $this.data('scroll-to');
			$this.siblings('.current').removeClass('current');
			$this.addClass('current');
			jQuery('html, body').animate({scrollTop: $scroll}, 800);
		});
	}

	/* -- Lock table headings when scrolling horizontally -- */

	if(jQuery('.table-scroll').length > 0 && jQuery('table.scroll').length > 0) {
		jQuery('table.scroll').scroll(function(e){
			$widest	=	0;
			jQuery('th[scope="row"]').each(function(){
				var $this = jQuery(this),
					$parent = $this.closest('table.scroll');
					$width = $this.outerWidth();
					if($width > $widest)
						$widest = $width;
					$parent.css({
						'padding-left'	: $widest + 'px'
					});
			});
			jQuery('th[scope="row"]').each(function(){
				var $this		=	jQuery(this),
					$height		=	$this.outerHeight();
					$position	=	$this.position();
				$this.css({
					'border-left'	:	'1px solid #4d4d4d',
					'height'		:	$height + 'px',
					'left'			:	0,
					'position'		:	'absolute',
					'top'			:	$position.top + 'px',
					'width'			:	$widest + 'px'
				});
			});
		});
	} 

	/* -- Add placeholder text to search form. Eventually change to a more graceful way of doing this via the theme --*/

	if(jQuery('#edit-keys').length > 0) {
		jQuery('#edit-keys').attr('placeholder', 'Search');
	}

	if(jQuery('#edit-keys--2').length > 0) {
		jQuery('#edit-keys--2').attr('placeholder', 'Search');
	}

	/* -- Move smallprint on signup form (drupal won't allow us to add this after the signup button) -- */

	if(jQuery('.offers_signup_form').length > 0) {
		var $form = jQuery('.offers_signup_form').children('form'),
		    $smallprint = $form.children('p.smallprint');
		$smallprint.remove();
		$form.append($smallprint);
	}

	/* -- remove extra paragraphs from blog excerpts -- 

	if(jQuery('.path-ego-news').length > 0) {
		jQuery('.excerpt').each(function(){
			var $this = jQuery(this),
			    $paras = $this.children('p');
			$paras.each(function($i){
				if($i > 0) {
					var $this = jQuery(this);
					$this.remove();
				};
			});
		});
	};

	/* -- Generic Concertina -- */

	if(jQuery('.conc-trigger').length > 0) {

	  if(jQuery('.conc-default').length > 0) {

	  	jQuery('.conc-default').children('.conc-trigger').addClass('conc-active'); 
	  	jQuery('.conc-default').children('.conc-content').show();

	  };
	
	  jQuery('.conc-trigger').click( function(e) {

		 e.preventDefault();

		 if ( jQuery(this).hasClass('conc-active') ) {
 
			jQuery(this).removeClass('conc-active');
			
			jQuery(this).closest('.conc-scope').children('.conc-content').slideUp();         
		 
		 } else {
			
			jQuery(this).addClass('conc-active');

			if ( jQuery(this).closest('.conc-scope').hasClass('conc-exclusive') ) {

			   if ( jQuery('.conc-active') ) { jQuery('.conc-active').removeClass('conc-active'); }

			   jQuery('.conc-content').slideUp();

			   jQuery(this).addClass('conc-active');

			   jQuery(this).closest('.conc-scope').children('.conc-content').slideDown();   
			   
			} else {
			  
			   jQuery(this).closest('.conc-scope').children('.conc-content').slideDown();
			   
			} // if ( jQuery(this).closest('.conc-scope').hasClass('conc-exclusive') ) {
			
		 } // if ( jQuery(this).hasClass('conc-active') ) {
		 
	  }); // jQuery(".conc-trigger").click( function(e) {

	}

});

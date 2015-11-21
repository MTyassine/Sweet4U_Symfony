 (function(cash) { "use strict";
	
	var ios = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || $(window).width()<980;
	
	//linck/////////////////////////////////////////////////////////////////////////////////////////////////
	
	$('nav a').each(function(){
		if($(this).attr('href')==$('.page').attr('data-linck')){
			$(this).addClass('act');
		}
	});
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//center_image//////////////////////////////////////////////////////////////////////////////////////////
    
	function center_image(){
		$('.center_img').each(function(){
			obj = $(this);
			var bg_ratio = obj.attr('data-width-img')/obj.attr('data-height-img');
			var wrapper_ratio = obj.parent().width()/obj.parent().height();
			if($(this).hasClass('center_h')){
				var center_hor = (bg_ratio*obj.parent().height() - obj.parent().width())*(-0.5);
				obj.css({'left':center_hor, 'top':'0px', 'height':'100%', 'width':'auto'});
			}else{
				if(bg_ratio<wrapper_ratio){
					var center = (obj.parent().width()/bg_ratio - obj.parent().height())*(-0.5);
					obj.css({'left':'0px', 'top':center, 'width':'100%', 'height':'auto'});
				}
				else{
					var center_hor = (bg_ratio*obj.parent().height() - obj.parent().width())*(-0.5);
					obj.css({'left':center_hor, 'top':'0px', 'height':'100%', 'width':'auto'});
				}
			}
		});
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////
    
	   /////////////////////////////slidesPerView///////////////////////////////////////////////////////////////////////////

	  function getGridSize() {
		var winWidth = $(window).width();
		
		if (winWidth < 480){
			return ('1');
		} else if (winWidth >= 480 && winWidth <= 768 ) {
			return ('2');
		} else if (winWidth <= 991 ) {
			return ('3');
		} else {
			return ('4');
		}
	  }
	
	  function getGridSizeTwo() {
	 	var winWidth = $(window).width();
		
		if (winWidth <= 757){
			return ('1');
		} else if (winWidth > 757 && winWidth <= 991 ) {
			return ('2');
		} else {
			return ('3');
		}	  
	  }
    
     function getGridSizeThree() {
     var winWidth = $(window).width();
         
		if (winWidth <= 480){
			return ('1');
		} else if (winWidth > 480 && winWidth <= 768 ) {
			return ('2');
	  	} else if (winWidth <= 991 ) {
			return ('3');
		} else {
			return ('4');
		}
     }
    
      function getGridSizeFour() {
		var winWidth = $(window).width();
		
		if (winWidth < 480){
			return ('1');
		} else if (winWidth >= 480 && winWidth <= 768 ) {
			return ('2');
		} else if (winWidth <= 1024 ) {
			return ('3');
		} else {
			return ('4');
		}
	  }
        		  
	////////////////////////////////////////////////////////////////////////////////////////////////////////
    
	//baner-slider//////////////////////////////////////////////////////////////////////////////////////////
    
	//home top slider
	var mySwiperHomeSlider = $('.home-slider .swiper-container').swiper({
	  loop: true,
	  pagination: '.pagination',
	  paginationClickable: true,
	  grabCursor: true,
	  speed: 800,
	  slidesPerView: 1
	});
	
	//home services slider

    var mySwiperHomeServices = $('.home-services .swiper-container').swiper({
	  loop: true,
      simulateTouch: true,
	  grabCursor: true,
	  calculateHeight: true, 
	  slidesPerView: getGridSizeThree(),
      resizeReInit: true   
	    });
    
	$('.home-services .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeServices.swipePrev()
	});
	$('.home-services .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeServices.swipeNext()
	});
	
	//home product slider
	var mySwiperHomeProducts = $('.home-products .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  calculateHeight: true,
	  slidesPerView: 1
	});
	$('.home-products .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeProducts.swipePrev()
	})
	$('.home-products .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeProducts.swipeNext()
	});
	
	//home testimonial slider
	var mySwiperHomeTestimonials = $('.home-testimonials .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  calculateHeight: true,
	  slidesPerView: 1,
      resizeReInit: true     
	});
	$('.home-testimonials .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeTestimonials.swipePrev()
	})
	$('.home-testimonials .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperHomeTestimonials.swipeNext()
	});
	
	//about content slider
	var mySwiperAboutUsContent = $('.about-us-content .gallery .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  pagination: '.pagination',
	  paginationClickable: true,
	  calculateHeight: true 
	});
	$('.about-us-content .gallery .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperAboutUsContent.swipePrev()
	});
	$('.about-us-content .gallery .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperAboutUsContent.swipeNext()
	});
	
	//about Our Team
    var mySwiperMeetOurTeam = $('.meet-our-team .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  calculateHeight: true, 
      resizeReInit: true,
	  slidesPerView: getGridSize() 
	});    
	$('.meet-our-team .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperMeetOurTeam.swipePrev()
	});
	$('.meet-our-team .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperMeetOurTeam.swipeNext()
	});

	//about Testimonials	
    var mySwiperTestimonials = $('.testimonials .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  calculateHeight: true,
      useCSS3Transforms: false    
	});
	$('.testimonials .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperTestimonials.swipePrev()
	});
	$('.testimonials .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperTestimonials.swipeNext()
	});
	
	//services
    
    var mySwiperServicesContent = $('.services-content .swiper-container').swiper({
	  loop: true,
	  calculateHeight: true, 
	  slidesPerView: getGridSizeFour(),
      resizeReInit: true
	});
	$('.services-content .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperServicesContent.swipePrev()
	});
	$('.services-content .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperServicesContent.swipeNext()
	});
	
	//product detail
    
    var mySwiperProductDetailContent = $('.product-detail-content .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  calculateHeight: true,
      resizeReInit: true,    
	  slidesPerView: getGridSizeThree()
	});    
	$('.product-detail-content .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperProductDetailContent.swipePrev()
	});
	$('.product-detail-content .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperProductDetailContent.swipeNext()
	});
	
	//Blog detail page
	var mySwiperBlogDetailContent = $('.blog-detail-content .gallery .swiper-container').swiper({
	  loop: true,
	  grabCursor: true,
	  pagination: '.pagination',
	  paginationClickable: true,
	  calculateHeight: true
	});
	$('.blog-detail-content .gallery .flex-prev').on('click', function(e){
	  e.preventDefault()
	  mySwiperBlogDetailContent.swipePrev()
	})
	$('.blog-detail-content .gallery .flex-next').on('click', function(e){
	  e.preventDefault()
	  mySwiperBlogDetailContent.swipeNext()
	})
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
		
	////////////////////////////////////////////////////////////////////////////////////////////////////////
    
	function rax(){
        
		if ($('.home-products .swiper-slide img').is(':visible')){
			$('.home-products .swiper-slide  .information .wrap').height($('.home-products .swiper-slide img').height());
		} else {
			$('.home-products .swiper-slide  .information .wrap').height('auto');
		}
        
	}
   
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$(function(){
	if($('.container-mix').length){
       $('.container-mix').mixItUp({
	      animation: {
		       enable: true,
	                 }
      });
	}
    });
  
	/////Animations/////////////////////////////////////////////////////////////////////////////////////////
	var ios = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || $(window).width()<980;
	
	if(ios){
		$('.scale-text').addClass('act');
	}
	$('.scale-text').each(function(){
		var animationVal = $('.scale-text').index(this);
		var animationTop = $(this).offset().top - $('header').height() - ($(window).height()*0.8);
		if(animationTop <= $(window).scrollTop() && animationTop + $(this).height() > $(window).scrollTop()){
			$('.scale-text').slice(0,animationVal+2).addClass('act');
		}
	});
	
	$(window).scroll(function(){

		if($('.scale-text').length>=1){
			$('.scale-text').each(function(){
				var animationVal = $('.scale-text').index(this);
				var animationTop = $(this).offset().top - $('header').height() - ($(window).height()*0.8);
				if(animationTop <= $(window).scrollTop() && animationTop + $(this).height() > $(window).scrollTop()){
					$('.scale-text').eq(animationVal).addClass('act');
				}
			});
		}
		
		if($('.skills').length<=1){
			$('.skills').each(function(){
				var animationTop = $(this).offset().top - ($(window).height()*0.8);
				if(animationTop <= $(window).scrollTop() && animationTop + $(this).height() > $(window).scrollTop()){
					if ($('.circliful canvas').length>=1){} else {
						$('.circliful').circliful();
					}
				}
			});
			
		}
	
		
	});
	
	
	////All clicks////////////////////////////////////////////////////////////////////////////////////////

	$('#header .search').on('click', '.search-link', function(event) {
		event.preventDefault();
		$('#header .search').find('.search-form').slideToggle(500);
	});
	  
	$('#headerShareLinksHover .share-link').on('click',function(event) {
		event.preventDefault();
		var this_top_level = $(this).closest('#headerShareLinksHover');
		if (this_top_level.find('ul').hasClass('act')) {
			this_top_level.find('ul').removeClass('act');
			$('li').stop(true, false);
			this_top_level.find('li').each(function(){
				$(this).css({'top':$(this).attr('data-top')});                       
			});
		} else{

			this_top_level.find('ul').addClass('act');
			var i = this_top_level.find('li').length;
			this_top_level.find('li').each(function(){
				$(this).delay(i*200).animate({'top':'0px'}, 300);
				i--;
			});
		}
	});
	var header_social_close;
		$('#headerShareLinksHover').hover(function(){
			clearTimeout(header_social_close);
			//$('#header .social ul').slideDown(500);
		},function(){
			header_social_close = setTimeout(function(){
				$('#header .social ul').removeClass('act');
				$('#header .social ul').find('li').each(function(){
					$(this).css({'top':$(this).attr('data-top')});                       
				});
			},2000);
    });
	
	  var $header = $('#header');
	  $header.on('click', '.show-nav', function(event) {
		event.preventDefault();
		$header.find('.hgroup').slideDown(500);
		setTimeout(function(){
			$header.find('.hgroup').css({'overflow' : 'inherit'});
		},500);
	  });
	
	  $header.on('click', '.close-nav', function(event) {
		event.preventDefault();
		$header.find('.hgroup').slideUp(500);
		setTimeout(function(){
			$header.find('.hgroup').css({'overflow' : 'inherit'});
		},500);
		
	  });
	
	////Submenu////////////////////////////////////////////////////////////////////////////////////////
	function submenu_function(){
		if ($(window).width() >= 1024){
			//$('.menu-item-has-children').removeClass('act');
			$('.menu-item-has-children > a').click(function(){
				var obj_click = $(this).parent();
				if (obj_click.hasClass('close')){
					obj_click.find('.submenu').slideDown(200);
					obj_click.removeClass('close').addClass('active');
				} else {
					obj_click.find('.submenu').slideUp(200);
					obj_click.removeClass('active').addClass('close');
				}
				return false;
			});
			
		} else {
		//$('.menu-item-has-children > a').addClass('active').unbind();
			$('.menu-item-has-children > a').click(function(){
				return false;
			});
		}

			var menu_hover_close;
			var obj_true;
			$('.menu-item-has-children').hover(function(){
				clearTimeout(menu_hover_close);
				obj_true = $(this);
			},function(){
				if ($(window).width() >= 1024){
					menu_hover_close = setTimeout(function(){
						obj_true.find('.submenu').slideUp(200);
						obj_true.removeClass('active').addClass('close');
					}, 1000);
				}
			});
		
	}
	submenu_function();

	//////////////////////////////////////////////////////////////////////////////////////////////	

    
     $('.drop, .drop-list').click(function(){
			if($('.drop-list').hasClass('act')){
				$('.drop-list').removeClass('act');
				$('.drop').find('span').slideUp(300);
			}else{
				$('.drop-list').addClass('act');
				$('.drop').find('span').slideDown(300);
			}
			return false;
		});
		
		$('.drop span a').click(function(){
			$(this).parent().parent().find('input').attr('value',$(this).text());
			$('.drop').find('span').slideUp(300);
		});
       $('body').click(function(){
       $('.drop').find('span').slideUp(300);
       });

	/////////////////////REMOVE HOVER///////////////////////////////////////////////////////////////	
	removeHoverCSSRule();
	function removeHoverCSSRule() {
	  if ('createTouch' in document) {
		try {
		  var ignore = /:hover/;
		  for (var i = 0; i < document.styleSheets.length; i++) {
			var sheet = document.styleSheets[i];
			if (!sheet.cssRules) {
			  continue;
			}
			for (var j = sheet.cssRules.length - 1; j >= 0; j--) {
			  var rule = sheet.cssRules[j];
			  if (rule.type === CSSRule.STYLE_RULE && ignore.test(rule.selectorText)) {
				sheet.deleteRule(j);
			  }
			}
		  }
		}
		catch(e) {
		}
	  }
	}
		
	/////////////////////NEED DELETE///////////////////////////////////////////////////////////////	
    var animationVal = $('.scale-text').index(this);
	var load_more_content = $('.loaded-content').html();
	$(document).on('click', '#itemLoad, #articleLoad', function(){
		$('.loaded-content').append('<div class="ajax-slide" style="display: none;">'+load_more_content+'</div>');
		$('.ajax-slide').fadeIn(800, function(){$(this).replaceWith($(this).html())});
        $('.scale-text').addClass('act');
		return false;
	});
    
    
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    
	$(window).resize(function(){
		rax();
		submenu_function();
		if($('.paralax').length==1){
			if(ios){
		
			}else{
				var scrollrInst = skrollr.init({
					smoothScrolling: true,
                    easing: 'swing',
                    forceHeight: false
				});
			}
		}
		
	});
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	center_image();
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////
    
	$(window).load(function(){
        if ($(window).width() < 768) {
           $('.circliful').circliful();
        }
        
        $(window).scrollTop(0);
		   $('body,html').animate({'scrollTop':0},1);
        
		$('#loader').hide();
        $('body').css('overflow','visible');
		
		$('.wheel-wrap').click(function(){
			$('body,html').animate({'scrollTop':$('.full-height').height()},500);
		});
       $('.scale-text').each(function(){
		var animationVal = $('.scale-text').index(this);
		var animationTop = $(this).offset().top - $('header').height() - ($(window).height()*0.5);
		if(animationTop <= $(window).scrollTop() && animationTop + $(this).height() > $(window).scrollTop()){
        $('.scale-text').slice(0,animationVal+2).addClass('act');
		}
	});
    rax();
	});
	////////////////////////////////////////////////////////////////////////////////////////////////////////


})(jQuery);
(function($) {	
	"use strict";

	// Zoom Product
	var imgzoom = $('#productSimple figure.zoom');
	$(imgzoom).zoom();
	
	//1.Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}	
	
	//6.Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").click('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);
	
		});
	}

	//20.Contact Form Validation
	if($("#contact-form").length){
	    $("#contact-form").validate({
	        submitHandler: function(form) {
	          var form_btn = $(form).find('button[type="submit"]');
	          var form_result_div = '#form-result';
	          $(form_result_div).remove();
	          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
	          var form_btn_old_msg = form_btn.html();
	          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
	          $(form).ajaxSubmit({
	            dataType:  'json',
	            success: function(data) {
	              if( data.status = 'true' ) {
	                $(form).find('.form-control').val('');
	              }
	              form_btn.prop('disabled', false).html(form_btn_old_msg);
	              $(form_result_div).html(data.message).fadeIn('slow');
	              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
	            }
	          });
	        }
	    });
	}

	//22.Appoinment Form Validation
	if($("#appoinment-form").length){
	    $("#appoinment-form").validate({
	        submitHandler: function(form) {
	          var form_btn = $(form).find('button[type="submit"]');
	          var form_result_div = '#form-result';
	          $(form_result_div).remove();
	          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
	          var form_btn_old_msg = form_btn.html();
	          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
	          $(form).ajaxSubmit({
	            dataType:  'json',
	            success: function(data) {
	              if( data.status = 'true' ) {
	                $(form).find('.form-control').val('');
	              }
	              form_btn.prop('disabled', false).html(form_btn_old_msg);
	              $(form_result_div).html(data.message).fadeIn('slow');
	              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
	            }
	          });
	        }
	    });
	}

	//26.Date picker
	function datepicker () {
	    if ($('#datepicker').length) {
	        $('#datepicker').datepicker();
	    };
	}

	//27.Select menu 
	function selectDropdown() {
	    if ($(".selectmenu").length) {
	        $(".selectmenu").selectmenu();

	        var changeSelectMenu = function(event, item) {
	            $(this).trigger('change', item);
	        };
	        $(".selectmenu").selectmenu({ change: changeSelectMenu });
	    };
	}	
	
	//28.Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

	// Hero Slider
	$('.hero-slider').slick({
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		dots: false,
		arrows: false,
		fade: true,
		responsive: true,
		lazyLoad: 'ondemand',
	});
	// Item Slider
	$('.items-container').slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					arrows: false
				}
			},
			{
				breakpoint: 525,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});

	// Testimonial Slider
	$('.testimonial-slider').slick({
		slidesToShow: 1,
		infinite: true,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 6000,
		adaptiveHeight: true,
		dots: true,
		prevArrow: '<button type="button" class="slick-prev custom-arrow"><i class="fas fa-chevron-left"></i></button>',
      	nextArrow: '<button type="button" class="slick-next custom-arrow"><i class="fas fa-chevron-right"></i></button>'
	});

	//Footer - marcas parceiras
	$('.logo-slider').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: false,
		adaptiveHeight: true,
		infinite: true,
		responsive: [
		  {
			breakpoint: 768,
			settings: { slidesToShow: 3 }
		  },
		  {
			breakpoint: 480,
			settings: { slidesToShow: 1 }
		  }
		]
	  });
	
	// FancyBox Video
	$('[data-fancybox]').fancybox({
		youtube: {
			controls: 0,
			showinfo: 0
		},
		vimeo: {
			color: 'f00'
		}
	});

/* ========================When document is loaded, do===================== */
	$(window).on('load', function() {
		// add your functions
		(function ($) {
			handlePreloader();
			datepicker();
		})(jQuery);
	});

/* ======================================================= */

	$('#productSimple').on('slide.bs.carousel', function(e) {
	    var from = $('.carousel-vertical .nav li.active').index();
	    var next = $(e.relatedTarget);
	    var to =  next.index();
	  
	  	$('.carousel-vertical a.nav-link').removeClass('active').eq(to).addClass('active');
	});

	// Logo
    $('.logo-subtitle').lettering();
    var logo = jQuery('.logo img'),
    	header = jQuery('.header-uper'),
    	w = logo.width();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 20) {
            logo.css({
              "width": w/1.2
                     });
            header.addClass('scroll-header');
            header.removeClass('topo-header');
        } else{
            logo.css({
              "width": w
                     });
            header.addClass('topo-header');
            header.removeClass('scroll-header');
        }
    });
    

})(window.jQuery);
$(document).ready(function(){



	var screen_xs = 767;
	var screen_mob = 375;

	if(window.innerWidth <= screen_xs){
		$('.header .navbar').removeClass('navbar-fixed-top');
		$('.navbar-footer').removeClass('navbar-fixed-bottom');
	} else {
		$('.header .navbar').addClass('navbar-fixed-top');
		$('.navbar-footer').addClass('navbar-fixed-bottom');

		// Scroll Effects
		$(window).scroll(function(){
			if($(this).scrollTop() > 150){
				$('.navbar-default').addClass('sticky');
				$('.navbar-footer').addClass('visible');
				$('.scrollToTop').addClass('visible');
			} else {
				$('.navbar-default').removeClass('sticky');
				$('.navbar-footer').removeClass('visible');
				$('.scrollToTop').removeClass('visible');
			}
		});

		// Detect bottom of page
		$(window).scroll(function(){
			if($(window).scrollTop() + $(window).height() === $(document).height()){
				$('.footer-bottom').addClass('visible');
			} else {
				$('.footer-bottom').removeClass('visible');
			}
		});
	}

	if(window.innerWidth <= screen_mob){
		$('.builder').removeClass('col-xs-6').addClass('col-xs-12');
	} else {
		$('.builder').removeClass('col-xs-12').addClass('col-xs-6');
	}

	$(window).resize(function(){
		if(window.innerWidth <= screen_xs){
			$('.header .navbar').removeClass('navbar-fixed-top');
		} else {
			$('.header .navbar').addClass('navbar-fixed-top');
		}
		if(window.innerWidth <= screen_mob){
			$('.builder').removeClass('col-xs-6').addClass('col-xs-12');
		} else {
			$('.builder').removeClass('col-xs-12').addClass('col-xs-6');
		}
	});

	// Smooth Scroller
	$('a[href^="#"]').on('click', function(e){
		var target = $(this.getAttribute('href'));

		if(target.length){
			e.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
				}, 800);
		}
	});

	$('.scrollToTop').click(function(){
		$('html, body').animate({ scrollTop: 0 }, 800);
		return false;
	});

	$('.broker-btn').click(function(){
		$('.broker_yes').prop('checked', true);
		$('.broker-fields').show();
		$('.broker_no').prop('checked', false);
	});

	$('.prospect').click(function(){
		$('.broker_no').prop('checked', true);
		$('.broker-fields').hide();
		$('.broker_yes').prop('checked', false);
	});

	$('input[name="broker"]').change(function(){
		if($(this).attr('class') === 'broker_yes'){
			$('.broker-fields').slideDown(750);
		} else {
			$('.broker-fields').slideUp(750);
		}
	});

	jQuery('input[name="builder[]"]').change(function(){
		var emailTo = [];
		var builder = [];
		var p;

		jQuery.each(jQuery('input[name="builder[]"]:checked'), function(){
			emailTo.push(jQuery(this).attr('data-mailto'));
			builder.push(jQuery(this).val());
		});

		jQuery('#mailto').val(emailTo.join(', '));
		jQuery('#builder').val(builder.join(', '));
	});

});

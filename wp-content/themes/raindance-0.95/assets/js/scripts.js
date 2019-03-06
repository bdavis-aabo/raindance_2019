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
		$('.builder-qmi').removeClass('col-xs-6').addClass('col-xs-12');
	} else {
		$('.builder').removeClass('col-xs-12').addClass('col-xs-6');
		$('.builder-qmi').removeClass('col-xs-12').addClass('col-xs-6');
	}

	$(window).resize(function(){
		if(window.innerWidth <= screen_xs){
			$('.header .navbar').removeClass('navbar-fixed-top');
		} else {
			$('.header .navbar').addClass('navbar-fixed-top');
		}
		if(window.innerWidth <= screen_mob){
			$('.builder').removeClass('col-xs-6').addClass('col-xs-12');
			$('.builder-qmi').removeClass('col-xs-6').addClass('col-xs-12');
		} else {
			$('.builder').removeClass('col-xs-12').addClass('col-xs-6');
			$('.builder-qmi').removeClass('col-xs-12').addClass('col-xs-6');
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

	function mailToForm(){
		var emailTo = [];
		var builder = [];

		$.each($('input[name="builder[]"]:checked'), function(){
			emailTo.push($(this).attr('data-mailto'));
			builder.push($(this).val());
		});

		$('#mailto').val(emailTo.join(', '));
		$('#builder').val(builder.join(', '));
	}

	jQuery('input[name="builder[]"]').change(function(){
		mailToForm();
	});

	// Checkbox checked on btn click
	$('.builder-contact-btn').click(function(){
		var builder = $(this).attr('data-builder');
		$('.contact-checkbox[value="'+builder+'"]').prop('checked',true);
		mailToForm();
	});

	// Email Lightbox Functions
  function displayLightbox(){
    $('.lightbox-mask').addClass('box-open');
    $('body,html').css('overflow','hidden');
  }

  function closeLightbox(){
    $('.lightbox-mask').removeClass('box-open');
    $('body,html').css('overflow','auto');
  }

	if(window.location.pathname === '/'){
		setTimeout(function(){
			displayLightbox();
		}, 5000);
	}

  $('.close-btn').click(function(){ closeLightbox(); });

  $(document).keyup(function(e){
    if(e.keyCode === 27){
      closeLightbox();
    }
  });
  // end Email Lightbox Functions

	// Open Modal for Model Directory
	if(window.location.pathname === '/access/'){
		var hash = window.location.hash;
		$(hash).modal('show');
	}
});

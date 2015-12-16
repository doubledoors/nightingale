(function($) {

    "use strict"; // Start of use strict

    $('a.page-scroll').bind('click', function(event) {

        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo', function(){
        	$(this).find('img').removeClass('bounce');
        });

        event.preventDefault();
    });

	$('#nightingale-form').isHappy({

		fields: {

			'#your-name': {
				required: true,
				message: 'Who are you? Please add your name here.'
			},
			'#your-email': {
				required: true,
				message: "Don't forget to enter your email!"
			},
			'#your-age': {
				required: true,
				message: 'How old are you? Please enter your age here.'
			},
			'#your-country': {
				required: true,
				message: 'Where are you? Please enter your country here!'
			},
			'#your-idea': {
				required: true,
				message: 'Whoops! you forgot to tell us your idea!',
				test: function(value){

					if(value.length > 500){

						return new Error('Please make sure to submit your idea in 500 characters or less.');
					}

					return true;
				}
			}
		}
	});

})(jQuery);
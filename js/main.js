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
				message: 'Required Field'
			},
			'#your-email': {
				required: true,
				message: 'Required Field'
			},
			'#your-age': {
				required: true,
				message: 'Required Field'
			},
			'#your-country': {
				required: true,
				message: 'Required Field'
			},
			'#your-idea': {
				required: true,
				message: 'Required Field',
				test: function(value){

					if(value.length > 500){

						return new Error('Please submit your idea in 500 characters or less');
					}

					return true;
				}
			}
		}
	});

})(jQuery);
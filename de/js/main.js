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

    $('a.fb-share-button').bind('click', function(event){

    	FB.ui({
		  method: 'share',
		  href: 'https://developers.facebook.com/docs/',
		}, function(response){});

		event.preventDefault();
    });

    var happy = {

	    email: function (val) {
	        return /^(?:\w+\.?\+?)*\w+@(?:\w+\.)+\w+$/.test(val);
	    },
	};

	$('#nightingale-form').isHappy({

		fields: {

			'#your-name': {
				required: true,
				message: 'Who are you? Please add your name here.'
			},
			'#your-email': {
				required: true,
				message: "Don't forget to enter your email!",
				test: function(value){

					if(!happy.email(value)){

						return new Error('Please enter a valid email address.');
					}

					return true;
				}
			},
			'#your-age': {
				required: true,
				message: 'How old are you? Please enter your age here.',
				test: function(value){

					if(value < 18){

						return new Error('Sorry! You must be 18 or over to enter.');
					}

					return true;
				}
			},
			'#your-country': {
				required: true,
				message: 'Where are you? Please select your country!',
				test: function(value){

					if(value === ""){

						return new Error('Please select a country');
					}

					return true;
				}
			},
			'#your-idea': {
				required: true,
				message: 'Whoops! You forgot to tell us your idea!',
				test: function(value){

					if(value.length > 500){

						return new Error('Please make sure to submit your idea in 500 characters or less.');
					}

					return true;
				}
			},
			'#terms-check': {
				required: true,
				message: "Please make sure you've read and agreed to the Terms and Conditions",
				test: function(value){

					if(!$('#terms-check').is(':checked')){

						return new Error("Please accept the terms and conditions");
					}

					return true;
				}
			}
		}
	});

})(jQuery);
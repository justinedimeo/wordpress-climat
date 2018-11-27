(function($) {

   $(window).on('load resize', function(e) {
		// go through the sliders with this theme
	   	$('.metaslider.ms-theme-blend').each(function(index) {
			var width = $(this).outerWidth();
			// if the slider width < 600px
			if (width < 600) {
				$(this).addClass('ms-is-small');
			} else {
				$(this).removeClass('ms-is-small');
			}
		});

	});

	$('.button').on('click', function(e) {
		$('.button').removeClass('active');
		$('.first-circle.active').removeClass('active');
		$(this).toggleClass('active');
		i = $(this).index();
		$('.first-circle:eq('+ i +')').addClass("active");
		
		var tableau = $('.bar-container');
		var un = $(this).text();

		var deux = $.trim(un.replace(/[\t\n]+/g,' '))
		
		for (var i=0; i<tableau.length; i++) {

			console.log(deux == "Industrie");
			if($('.bar-container:eq('+ i +')').hasClass(deux)){
				$('.bar-container:eq('+ i +')').css('display', 'inline-block');
			}else{
				$('.bar-container:eq('+ i +')').css('display', 'none');
			}
		}

		e.preventDefault();
		// console.log($('.class').text());
	});

})(jQuery)


			$('span.nav-btn').click(function() {
				$('ul.nav').toggle();
			})

			$(window).resize(function(){
				if($(window).width()>600) {
					$('ul.nav').removeAttr('style');
				}
			})


$(function() {
    
	// Index page - video links selection
	$('.jb-video-links').each(function(){
		$(this).on('click', function() {
			$('.loop-thumb-content .item.active').removeClass('jb-active');
			
			// stop previously started video
			$('video').each(function () { // looks for all the html5 videos
				this.pause();
			});
			$('.jb-play-button').each(function() {
				$(this).find('i').removeClass('fa-pause').addClass('fa-play');
			});
			
			$(this).parent().addClass('jb-active');

			var videoID = $(this).attr('data-slide-to');
			$('#videos-content article.item').removeClass('active');
			$('#videos-content article.item[data-id="' + videoID + '"]').addClass('active');
			$('#videos-content article.item[data-id="' + videoID + '"] .jb-video-image').removeClass('jb-hide');
			$('#videos-content article.item[data-id="' + videoID + '"] .jb-video-iframe').addClass('jb-hide');

		});
	});

	// Index page - video button show
	$('.jb-play-button').each(function() {
		$(this).on('click', function() {
			var parent = $(this).parents('article.item');
			if (!$(parent).find('.jb-video-image').hasClass('jb-hide')) {
				$(parent).find('.jb-video-image').addClass('jb-hide')
			}

			if ($(parent).find('.jb-video-iframe').hasClass('jb-hide')) {
				$(parent).find('.jb-video-iframe').removeClass('jb-hide')
			}

			if ($(parent).find('video')[0].paused) {
				// Play video
				$(parent).find('video').trigger('play');
				$(this).find('i').removeClass('fa-play').addClass('fa-pause');
			} else {
				$(parent).find('video').trigger('pause');
				$(this).find('i').removeClass('fa-pause').addClass('fa-play');
			}
		});
	});
	
	// Navigation menu - select chosen menu option
	$('.jb-navigation-list li').each(function() {
		$(this).on('click', function() {
			$('.jb-navigation-list li').removeClass('active');
			$(this).addClass('active');
		});
	});

	// Document scroll - show scroll-to-top button
	$(document).on('scroll', function() {
		if($(this).scrollTop() >= $('.jb-content-container').position().top - 60){
			if (!$('a.go-to-top').hasClass('on')) {
				$('a.go-to-top').addClass('on');
			}
		} else {
			if ($('a.go-to-top').hasClass('on')) {
				$('a.go-to-top').removeClass('on');
			}
		}
	});

	// Scroll to top action
	$('a.go-to-top').on('click', function() {
		$('html,body').animate({
			scrollTop:0
		}, 1000);
	});


});

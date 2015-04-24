$(document).ready(function(){

	
//NAV LINKS

$('a[href*=#]:not([href=#])').click(function() {


	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			$('html,body').animate({scrollTop: target.offset().top }, 1000);
			$('nav a').removeClass();

			$(this).addClass('active');
			return false;
		}
	}

	
});



	// NAVIGATION SCROLL
	var windowHeight = $(window).height();
	$('#home').css('height',windowHeight);
	
	var  mn = $(".main-nav"),
	mns = "main-nav-scrolled",
	hdr = $('#home').height();

	$(window).scroll(function() {
        var windowY = $(this).scrollTop();
        
		if(windowY >= hdr - 110) {
			mn.addClass(mns);
		} 
		else {
		mn.removeClass(mns);
		}
	});

 
 




 
});

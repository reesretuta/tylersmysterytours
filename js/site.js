$(document).ready(function(){
	var distanceScrolled = $(window);
	var margin = 250;
	var allowNavUpdates = true;
	//NAV LINKS

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				allowNavUpdates = false;
				$('html,body').animate({scrollTop: target.offset().top }, 1000, ()=>{
					allowNavUpdates = true;
				});
				allowNavUpdates
				$('nav a').removeClass();
				$(this).addClass('active');
				return false;
			}
		}

		
	});


	$(window).scroll(()=>{
		if (!allowNavUpdates) {
			return false;
		}
		var d = distanceScrolled.scrollTop();
		var posXHome = d - $("#home").offset().top;
		var posXTestimonials = d - $("#testimonials").offset().top;
		var posXFaq = d - $("#faq").offset().top;
		var posXContact = d - $("#contact").offset().top;
		if (posXHome === 0) {
			updateNav('home');
		}
		if (Math.abs(posXTestimonials) < margin) {
			updateNav('testimonials');
		}
		if (Math.abs(posXFaq) < margin) {
			updateNav('faq');
		}
		if (Math.abs(posXContact) < margin) {
			updateNav('contact')
		}
	});

	function updateNav(section){
		$('nav a').removeClass();
		$(`nav a[href=#${section}]`).addClass('active');
	}

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

 
 
	$("#contactus button").on('click',function(e){
		e.preventDefault();
		var valid = true;
		var data = {};
		$("#contactus .required").each(function(){
			var field = $(this);
			if(field.val() === ""){
				field.css("border", "1px solid #f00");
				valid = false;
			}else{
				var name = field.attr('name');
				var val = field.val();
				data[name] = val;
				field.css("border", "1px solid #ccc");
			}
		});

		if (valid) {
			$.ajax({
				url: "/mail.php",
				data: data,
				type: 'post',
				success: function(data){
					if (data === 'success') {
						alert('Thank you for your email! We will respond to you shortly.');
						$("#contactus .required").each(function(){
							$(this).val("");
						});
					}else{
						alert('Email fail. Please email ryan@tylersmysterytours.com');
					}
					
				}
			});
		}
	});



 
});

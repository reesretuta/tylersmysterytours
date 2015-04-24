<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title>Tyler's Mystery Tours</title>
		<meta charset="UTF-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->

		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,400' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/hearticon.png"/>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<div class="container">
			
			<!-- START HOMEPAGE -->
			<div id="home" class='section'>
                
                <section>
                    <h1>TYLER'S MYSTERY TOURS</h1>
                    <p>Mystery trips where your participants will only get to know what to pack, when to show up, and when they will be coming back. Our specialty is all-inclusive trips tailored around our unique, engaging activities that get your group to not only experience new things, but to interact and get to know one another on new levels. We love planning all the details so that you and your participants can suit-up, sit-back, strap-in and enjoy the adventure! Trips can be created to accommodate a variety of groups and needs, ranging from small half-day company off-sites to multi-day birthday excursions.</p>
                </section>
				
			
				<nav class="main-nav">
					<a href="#home">HOME</a>
					<a href="#testimonials">TESTIMONIALS</a>
					<a href="#faq">FAQ</a>
					<a href="#contact">CONTACT</a>
				</nav>
				<div class="clear"></div>
			</div>
			<!-- END HOMEPAGE -->

			<div id="testimonials">
                <section>
                    <ul>
                        <li class="clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/DannyR_on_right.jpg" />
                            <p>"Overall the trip was such a great and memorable time.  We had a large group and it seemed like every single person agreed that it was one of the most fun-filled weekends ever."<span>-Danny R.</span></p>
                        </li>
                        <li class="right clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/SusanL.jpg" />
                            <p>"What I liked the most was how the activities helped everyone who didn't know each other connect in meaningful ways."<span>-Susan L.</span></p>
                        </li>
                        <li class="clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/RichM.jpg" />
                            <p>"You think you know but you have no idea.  You have no idea what you'll be doing.  You have no idea where you'll be going.  You also have no idea how much fun you'll be having."<span>-Rich M.</span></p>
                        </li>
                        <li class="right clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/MoiraK_far_right.jpg" />
                            <p>"Added a bunch of things to my bucket list and then knocked those off too."<span>-Moira K.</span></p>
                        </li>
                        <li class="clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/rubyL.jpg" />
                            <p>"I did more amazing things in one weekend than I had in the past six months."<span>-Lan N.</span></p>
                        </li>
                        <li class="right clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/BeccaR_on_left.jpg" />
                            <p>"I had fun with close friends but also made some new ones!"<span><br/>-Becca R.</span></p>
                        </li>
                        <li class="clearfix">
                            <img src="<?php bloginfo('template_url') ?>/img/testimonials/DeborahW.jpg" />
                            <p>"You won't know where you're going, you won't know what you're doing, but you're going to remember it for years to come!"<span><br/>-Deborah W.</span></p>
                        </li>
                    </ul>
                    <a id="yelp" href="http://www.yelp.com/biz/tylers-mystery-tours-san-francisco-2" target="_blank"><img src="http://music2maxx.com/wp-content/uploads/2014/07/yelp-button-love-us.png" /></a>
                </section>
			</div>
			
            
            <div id="faq">
                <section>
                    <h1>FAQ</h1>
                    <ul>
                        <li>
                            <h3>What separates you from other companies?</h3>
                            <p>We specialize and take pride in our unique and engaging activities that bond a group like no other. Forget typical outdated team building and ice breakers, remember mystery trips and adventure! Contact us for more information!</p>
                        </li>
                        <li><h3>Will I, or anyone in my group, know the details of the trip?</h3>
                            <p>Yes, typically a liaison will help us customize a trip for your group and know all the necessary details. We will work directly with them to tailor your trip to your group's size, budget, energy levels, competitiveness, age-range, etc!</p>
                        </li>
                        <li><h3>What kind of activities are to be expected?</h3>
                            <p>The activities that can take place on a TMT are only as limited as our imaginations. We can arrange anything from extreme sports to volunteering opportunities to relaxing getaways. Contact us for examples that would be perfect for your particular group!</p>
                        </li>
                        <li>
                            <h3>How much is this going to cost?</h3>
                            <p>Trip costs range drastically depending on each aspect of your mystery trip, including in particular: activities, destinations, accommodation, and group size. Typical costs are $100 to $200+ per participant per day.</p>
                        </li>
                        <li>
                            <h3>What if we have dietary, physical, or religious restrictions?</h3>
                            <p>All individual restrictions will be accommodated with a variety of options or alternatives when necessary. </p>
                        </li>
                        <li><h3>Are your trips safe and do you have insurance?</h3>
                            <p>Safety is of utmost importance to us. All safety precautions are exercised. We are a fully insured limited liability company and will collect and retain limited liability releases for all participants.</p>
                        </li>
                        
                        
                    </ul>
                </section>
                
            </div>
            
            <div id="contact">
                <section>
                    <h1>CONTACT</h1>
                    <div id="contactdetails">Call us at 415-484-5202 <br/>or email 
                        <a href="mailto:inquiries@tylersmysterytours.com">inquiries@tylersmysterytours.com</a> for more information.<br/>
                        <a href="https://www.facebook.com/tylersmysterytours?fref=website" target="_blank" class="likeus"><img src="<?php bloginfo('template_url') ?>/img/facebook.png" /></a>
                    </div>
                    
                    <div id="contactform">
                        <?php echo do_shortcode("[si-contact-form form='1']"); ?>
                    </div>
                    
                </section>
                
                <br/><br/><br/><br/><br/>
            </div>
			
            <div id="legal">
                <section>
                    Copyright 2015. "Tyler's Mystery Tours LLC."
                    
                </section>
                
            </div>
            

			</div>
			<!-- END RSVP -->


			</div>

		
		</div>	

		<script src="<?php bloginfo('template_url') ?>/js/jquery-1.11.2.min.js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/site.js"></script>
        


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-61015157-1', 'auto');
          ga('send', 'pageview');

        </script>

	</body>
</html>
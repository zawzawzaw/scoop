<?php $view->inc('elements/header.php'); ?>

		<?php $view->inc('elements/slider.php'); ?>

		<div id="content-wrapper">
		
			<div id="menu-logo-wrapper" class="animated slideInDown">
				
				<div class="main-menu">		
					<div class="pull-left">
						<div class="toggle-menu-container">					
							<div class="toggle-menu">
								<a href="javascript:void(0)"> 
									<span class="nav-bar"></span> 
									<span class="nav-bar"></span> 
									<span class="nav-bar"></span> 
								</a> 
							</div>
						</div>
						<div class="main-nav-wrapper">
							<ul class="main-nav">
								<li><a href="#about">About</a></li>
								<li><a href="#flavours">Flavours</a></li>
								<li><a href="#news">News</a></li>
								<li><a href="#locate">Locate</a></li>
							</ul>				
						</div>
					</div>
					<a href="index.html" class="logo pull-right"><img src="<?= $view->getThemePath() ?>/images/logos/main-logo.png" alt=""></a>				
				</div>	

			</div>

			<div id="main-content" class="home">
				
				<div id="about" class="content-1">
					<div class="img-content">
						<?php
						    $a = new Area('About Image');
						    $a->display($c);
						?>						
					</div>
					<div class="text-content">
						<?php
						    $a = new Area('About Title');						    
						    $a->display($c);
						?>
						<!-- <div class="each-text-content">
							<h4>About Us</h4>
							<h3>Make Good Ice Cream. Repeat.</h3>
							<p>Scoop Therapy is the ice cream and dessert engine of Group Therapy Coffee. Like the food and drink we serve, our job is make the most enjoyable ice cream possible.</p>
						</div>				 -->
						
						<div class="each-text-content">
							<h6>SMALL BATCH, FROM SCRATCH</h6>
							<p>By working in small batches, we are able to experiment with different flavours, proportions and textures to make spoonful balanced, satisfying & delicious. We toast our own pecans, make our own apple pie, and scrape down each vanilla pod to ensure everything is made in-house. We take the best ingredients, add our wholesome touch to it then pack as much of it into each tub.</p>
						</div>

						<div class="each-text-content">
							<h6>PROPER ICE CREAM</h6>
							<p>Each of our flavours go through hours of development, tasting & re-tasting before making it into the display. Preservatives, artificial colouring & flavours have no place in our kitchen, it represents our commitment to what we do and the honesty toward who we do it for.</p>							
						</div>

						<div class="each-text-content">
							<p>We hope you enjoy the result as much as we enjoy making it.</p>
						</div>
					</div>
				</div>

				<div id="flavours" class="content-2">
					<div class="heading">
						<h4>Our Flavours</h4>
						<h2>Do yourself a flavour.</h2>
					</div>

					<div class="img-text-content">
						<div class="flavour-slick">
							<div class="each-flavour">
								<a href="flavour.html#dairy" class="category"><img src="<?= $view->getThemePath() ?>/images/content/flavour-1-1.png" alt=""></a>
								<a href="flavour.html#dairy" class="category"><h4>Dairy</h4></a>
							</div>
							<div class="each-flavour">
								<a href="flavour.html#sorbet" class="category"><img src="<?= $view->getThemePath() ?>/images/content/flavour-2-1.png" alt=""></a>
								<a href="flavour.html#sorbet" class="category"><h4>SORBETS</h4></a>
							</div>
							<div class="each-flavour">
								<a href="flavour.html#alcoholic" class="category"><img src="<?= $view->getThemePath() ?>/images/content/flavour-3-1.png" alt=""></a>
								<a href="flavour.html#alcoholic" class="category"><h4>ALCOHOLIC</h4></a>
							</div>
							<div class="each-flavour">
								<a href="flavour.html#seasonal" class="category"><img src="<?= $view->getThemePath() ?>/images/content/flavour-4-1.png" alt=""></a>
								<a href="flavour.html#seasonal" class="category"><h4>SESONAL</h4></a>
							</div>
							<div class="each-flavour">
								<a href="flavour.html#seasonal" class="category"><img src="<?= $view->getThemePath() ?>/images/content/flavour-5-1.png" alt=""></a>
								<a href="flavour.html#seasonal" class="category"><h4>DESSETS</h4></a>
							</div>
						</div>
					</div>
				</div>

				<div id="contact" class="content-extra">

					<div class="img-text-content">
						<div class="img-content visible-xs visible-sm">
							<img src="<?= $view->getThemePath() ?>/images/content/contact-us-content.png" class="img-responsive">
						</div>
						<div class="text-content">
							<h4>Contact Us</h4>
							<h2>Wholesale</h2>
							<p>We supply and deliver ice cream in 2.5L or 5L tubs for restaurants, cafes and offices. All our ice creams are delivered in convenient recyclable food-grade containers.</p>
							<p>Speak to us about adding our ice cream to your menu or pantry, or work with our team to customize a flavour unique to your menu!</p>
							<a href="contact.html" class="cta"><i class="mail"></i><span>Get In Touch</span></a>
						</div>
						<div class="img-content hidden-xs hidden-sm">
							<img src="<?= $view->getThemePath() ?>/images/content/contact-us-content.png" class="img-responsive">
						</div>
					</div>
					<div class="img-text-content-2">
						<div class="img-content">
							<img src="<?= $view->getThemePath() ?>/images/content/event-content.png" class="img-responsive">
						</div>
						<div class="text-content">
							<h2>Events</h2>							
							<div class="each-col col1">
								<h4>Tubs</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur lacinia tellus a scelerisque.</p>
								<ul>
									<li><span class="item">Mini 90ml</span><span class="price">$ 4 – 4.5 per tub</span></li>
									<li><span class="item">Pint 475ml</span><span class="price">$ 12 – 14 SGD per tub </li>
									<li><span class="item">Half Tub 2.5L</span><span class="price">$ 30 – 35 SGD (15 servings)</li>
									<li><span class="item">Full Tub 5L</span><span class="price">$ 60 – 65 SGD (30 servings)</li>
									<li><span class="item">Ice Cream Sandwiches</span><span class="price">$ 3 SGD each</li>
								</ul>
								<p>Need cups or cones to serve the ice cream in? Cones with paper holders $0.25 each Paper cups with spoons $0.25 each</p>
								<p>We provide delivery for orders $120 and above and require a minimum of 1 week for each order.</p>
							</div>
							<div class="each-col col2">
								<h4>ice cream bar</h4>
								<p>From $800, we will setup an ice cream bar at your event that includes,</p>
								<ul>
									<li>2 Flavours of Ice Cream</li>
									<li>2 Toppings</li>
									<li>Cones & Cups</li>
									<li>1 Scoop Therapist for 2 hours</li>
									<li>Transport, Setup & Teardown</li>
								</ul>
								<p>Depending on your event requirements, we are able to increase the scope and/or duration of the Ice Cream Bar.</p>
								<p>We require a minimum of 4 weeks notice for an Ice Cream Bar request.</p>
							</div>
							<a href="contact.html" class="cta"><i class="mail"></i><span>Get In Touch</span></a>
						</div>
					</div>

				</div>

				<div id="news" class="content-3">

					<div class="heading">
						<h4>CONNECT WITH US</h4>
						<h2>Something’s been brewing</h2>
					</div>

					<div class="img-text-content">
						<div class="instagram">
							<div class="instagram-header">
								<h4 class="pull-left">Instagram</h4>
								<a class="pull-right" href="https://www.instagram.com/explore/tags/scooptherapy/" target="_blank"><i class="fa fa-plus"></i> Follow</a>
								<div class="clear"></div>
							</div>
							
							<div class="instagram-content">
								<ul id="instafeed"></ul>
								<img src="<?= $view->getThemePath() ?>/images/content/instagram-1.png" alt="" id="insta_big">
							</div>
						</div>
						<div class="twitter">
							<div class="twitter-header">
								<h4 class="pull-left">Tweets</h4>
								<a class="pull-right" href="https://twitter.com/hashtag/scoop_therapy?src=hash" target="_blank"><i class="fa fa-twitter"></i> Follow</a>
								<div class="clear"></div>
							</div>
							
							<div id="example1" class="twitter-content scrollbar-inner scrollbar-dynamic"></div>
																											
						</div>
					</div>

				</div>

				<div class="content-4">				
				</div>

				<div id="locate" class="content-5">

					<div class="heading">
						<h4>Locate Us</h4>
						<h2>Curb your cravings</h2>																
					</div>
					<div class="img-text-content">
						<div class="img-content">
							<div class="map-container">
								<div id="map" class="map">
									<img src="<?= $view->getThemePath() ?>/images/content/map.png" class="img-responsive" alt="">
								</div>
							</div>
						</div>
						<div class="text-content">
							<div class="each-col">
								<div class="info">
									<h4>Scoop Therapy</h4>
									<p>11 East Coast Road, The Odeon Katong Singapore S428722</p>
									<ul class="contact">
										<li><a href="tel:65 6258 3688"><i class="phone"></i>+65 6258 3688</a></li>
										<li><a href="mailto:events@gtcoffee.com"><i class="mail"></i>events@gtcoffee.com</a></li>
									</ul>
								</div>
								<div class="info second-info">
									<h4>Opening Hours</h4>										
									<ul class="opening-hours">
										<li>
											<h6>scoop therapy:</h6>
											<p>Monday — Sunday: 4pm — 12am</p>
										</li>												
										<li>
											<h6>COFFEE & BAKE BAR:</h6>
											<p>Saturday — Sunday: 10am — 2pm</p>
										</li>
									</ul>
								</div>		
								
							</div>
							<div class="each-col ">
								<div class="info last-info">
									<h4>Get in touch</h4>
									<p>For general enquiries, careers, collaborations or anything at all regarding our ice cream!</p>										
									<p>Please feel free to email us and do be as detailed as you can with your enquiry. We’ll contact you within 48 hours to assist.</p>										
								</div>	
							</div>						
						</div>
					</div>

				</div>				
				
			</div><!-- end container -->

		</div><!-- end content-wrapper -->

<?php $view->inc('elements/footer.php'); ?>
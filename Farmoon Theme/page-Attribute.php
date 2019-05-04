<?php /* Template Name:  Attribute */ ?>
<?php  get_header(); ?>

	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/feather/style.css">
	<!-- General demo styles & header -->
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/attribute/component.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/attribute/modernizr.custom.js"></script>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->

		<!-- Grid -->
		<section class="slider">
			<div class="slide slide--current" data-content="content-1">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?php echo get_template_directory_uri(); ?>/images/attribute/iphone.png" alt="iPhone" />
						<div class="preview">
							<img src="<?php echo get_template_directory_uri(); ?>/images/attribute/iphone-content-preview.png" alt="iPhone app preview" />
							<div class="zoomer__area zoomer__area--size-2"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Classy</span> iPhone 6</h2>
			</div>
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?php echo get_template_directory_uri(); ?>/images/attribute/ipad.png" alt="iPad Mini" />
						<div class="preview">
							<img src="<?php echo get_template_directory_uri(); ?>/images/attribute/ipad-content-preview.png" alt="iPad Mini app preview" />
							<div class="zoomer__area zoomer__area--size-4"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Fantastic</span> iPad Mini</h2>
			</div>
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?php echo get_template_directory_uri(); ?>/images/attribute/macbook.png" alt="MacBook" />
						<div class="preview">
							<img src="<?php echo get_template_directory_uri(); ?>/images/attribute/macbook-content-preview.jpg" alt="MacBook app preview" />
							<div class="zoomer__area zoomer__area--size-3"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Amazing</span> MacBook</h2>
			</div>
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?php echo get_template_directory_uri(); ?>/images/attribute/imac.png" alt="iMac" />
						<div class="preview">
							<img src="<?php echo get_template_directory_uri(); ?>/images/attribute/imac-content-preview.jpg" alt="iMac app preview" />
							<div class="zoomer__area zoomer__area--size-5"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Glorious</span> iMac</h2>
			</div>
			<div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="<?php echo get_template_directory_uri(); ?>/images/attribute/apple-watch.png" alt="Apple Watch" />
						<div class="preview rounded">
							<img src="<?php echo get_template_directory_uri(); ?>/images/attribute/apple-watch-content-preview.png" alt="Apple Watch app preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Fabulous</span> Apple Watch</h2>
			</div>
			<nav class="slider__nav">
            <button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
				<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
                <button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
			<div class="content__item" id="content-1">
				<img class="content__item-img rounded-right" src="<?php echo get_template_directory_uri(); ?>/images/attribute/iphone-content.png" alt="Apple Watch Content" />
				<div class="content__item-inner">
					<h2>The iPhone 6</h2>
					<h3>Incredible performance for powerful apps</h3>
					<p>Built on 64-bit desktop-class architecture, the new A8 chip delivers more power, even while driving a larger display. The M8 motion coprocessor efficiently gathers data from advanced sensors and a new barometer. And with increased battery life, iPhone 6 lets you do more, for longer than ever.</p>
				</div>
			</div>
			<div class="content__item" id="content-2">
				<img class="content__item-img rounded-right" src="<?php echo get_template_directory_uri(); ?>/images/attribute/pad-content.jpg" alt="iPad Mini Content" />
				<div class="content__item-inner">
					<h2>The iPad Mini</h2>
					<h3>Desktop-class architecture without a desktop</h3>
					<p>Don’t let its size fool you. iPad mini 3 is powered by an A7 chip with 64-bit desktop-class architecture. A7 delivers amazing processing power without sacriﬁcing battery life. So you get incredible performance in a device you can take with you wherever you go.</p>
				</div>
			</div>
			<div class="content__item" id="content-3">
				<img class="content__item-img rounded-right" src="<?php echo get_template_directory_uri(); ?>/images/attribute/macbook-content.jpg" alt="MacBook Content" />
				<div class="content__item-inner">
					<h2>The MacBook</h2>
					<h3>It's the future of the notebook</h3>
					<p>With the new MacBook, we set out to do the impossible: engineer a full-size experience into the lightest and most compact Mac notebook ever. That meant reimagining every element to make it not only lighter and thinner but also better. The result is more than just a new notebook. It's the future of the notebook.</p>
				</div>
			</div>
			<div class="content__item" id="content-4">
				<img class="content__item-img rounded-right" src="<?php echo get_template_directory_uri(); ?>/images/attribute/imac-content.jpg" alt="iMac Content" />
				<div class="content__item-inner">
					<h2>The iMac</h2>
					<h3>Engineered to the very last detail</h3>
					<p>Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. So you can be creative with your photos, videos, music, documents, spreadsheets, and presentations right from the start. You also get great apps for email, surfing the web, sending texts, and making FaceTime calls — there’s even an app for finding new apps.</p>
				</div>
			</div>
			<div class="content__item" id="content-5">
				<img class="content__item-img rounded-right" src="<?php echo get_template_directory_uri(); ?>/images/attribute/apple-watch-content.png" alt="Apple Watch Content" />
				<div class="content__item-inner">
					<h2>The Apple Watch</h2>
					<h3>Entirely new ways to stay in touch</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message. Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch, or even your heartbeat. </p>
				</div>
			</div>
			<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
		</section>
	</div>

    <div class="flex-center mask pattern-1">
                <div class="container">

                    <!-- Section heading -->
                    <h3 class="text-center mb-5 pb-4 white-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                        <strong>تعداد نصب اپلیکیشن فرمون</strong>
                    </h3>

                    <!--First row-->
                    <div class="row text-center">

                        <!--First column-->
                        <div class="col-md-3 mb-2">
                            <h1 class="white-text mb-1 font-weight-bold">+950</h1>
                            <p class="white-text">Happy clients</p>
                        </div>
                        <!--/First column-->

                        <!--Second column-->
                        <div class="col-md-3 mb-2">
                            <h1 class="white-text mb-1 font-weight-bold">+150</h1>
                            <p class="white-text">Projects completed</p>
                        </div>
                        <!--/Second column-->

                        <!--Third column-->
                        <div class="col-md-3 mb-2">
                            <h1 class="white-text mb-1 font-weight-bold">+85</h1>
                            <p class="white-text">Winning awards</p>
                        </div>
                        <!--/Third column-->

                        <!--Fourth column-->
                        <div class="col-md-3">
                            <h1 class="white-text mb-1 font-weight-bold">+246</h1>
                            <p class="white-text">Cups of coffee</p>
                        </div>
                        <!--/Fourth column-->

                    </div>
                    <!--First row-->

                </div>
            </div>

            <div class="container">
                <section id="features" class="section feature-box mb-5 pb-4">

                    <!-- Section heading -->
                    <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                        <strong>ویژگی های و افتخارات</strong>
                    </h3>

                    <!-- Section sescription -->
                    <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis
                        ad voluptas, animi obcaecati adipisci sapiente mollitia.</p>
                    <!-- Grid row -->
                    <div class="row features-small wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12">
                            <!-- Grid row -->
                            <div class="row mb-3">
                                <div class="col-2">
                                    <i class="fas fa-edit orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">Modern design</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                        minima.
                                    </p>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-3">
                                <div class="col-2">
                                    <i class="fas fa-cogs orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">Easy customize</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                        minima assumenda.</p>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-tablet-alt orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">Responsive layouts</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam.</p>
                                </div>
                            </div>
                            <!-- Grid row -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-1 text-center text-md-left">
                            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="z-depth-0 img-fluid">
                        </div>
                        <!-- Grid column -->

                        <!-- Third column -->
                        <div class="col-lg-4 col-md-12">
                            <!-- Grid row -->
                            <div class="row mb-3">
                                <div class="col-2">
                                    <i class="fas fa-chart-line orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">Optymized for SEO</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam.</p>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-3">
                                <div class="col-2">
                                    <i class="fas fa-users orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">Technical support</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                        minima assumenda.</p>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-2">
                                    <i class="far fa-gem orange-text fa-2x"></i>
                                </div>
                                <div class="col-10 mb-2">
                                    <h5 class="font-weight-bold title">High quality</h5>
                                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                        minima.
                                    </p>
                                </div>
                            </div>
                            <!-- Grid row -->
                        </div>
                        <!-- Third column -->
                    </div>
                    <!-- Grid row -->

                </section>
            </div>




            <div class="download text-center">
                    <div class="container">
                        <h3 class="title">دریافت اپلیکیشن فرمون</h3>
                        <div class="row">
       <ul class="dl-opt animatedParent animateOnce">
       	          <li class="eds-on-scroll eds-scroll-visible animated fadeInRight duration1">
             <a href="#" target="_blank"><img src="https://farmooon.ir/wp-content/uploads/2019/04/google-play.png">دانلود از گوگل پلی </a>
          </li>
      	     	          <li class="eds-on-scroll eds-scroll-visible animated fadeInRight duration1 delay1">
             <a href="#" target="_blank"><img src="https://farmooon.ir/wp-content/uploads/2019/04/bazar.png">دانلود از  بازار </a>
          </li>
        
      
                 </ul>
    </div>
                    
                    </div><!--//container-->
                </div>


                <section class="news-blocks ptm pbm ">
			      	<div class="container">
			      		<div class="row">
			      			<div class="col-12 mbm">
			      				<h2 class="h-landmark"><span>فرمون در رسانه&zwnj;ها </span></h2>
			      			</div>
							    		 <div class="col-md-6">
						      				<div class="box">
						      					<h4 class="reporter-name">
						      						عنوان رپرتاژ					      					</h4>
						      					<h2 class="article-name">
								      				عنوان مقاله						      					</h2>
						      					<div class="excerpt">
<p> توضیحات مقاله</p>
						      						<div><a class="more" href="#" target="_blank">ادامه مطلب </a></div>

						      					</div>
						      				</div>
						      			</div>
                                          <div class="col-md-6">
						      				<div class="box">
						      					<h4 class="reporter-name">
						      						عنوان رپرتاژ					      					</h4>
						      					<h2 class="article-name">
								      				عنوان مقاله						      					</h2>
						      					<div class="excerpt">
<p> توضیحات مقاله</p>
						      						<div><a class="more" href="#" target="_blank">ادامه مطلب </a></div>

						      					</div>
						      				</div>
						      			</div>
                                          <div class="col-md-6">
						      				<div class="box">
						      					<h4 class="reporter-name">
						      						عنوان رپرتاژ					      					</h4>
						      					<h2 class="article-name">
								      				عنوان مقاله						      					</h2>
						      					<div class="excerpt">
<p> توضیحات مقاله</p>
						      						<div><a class="more" href="#" target="_blank">ادامه مطلب </a></div>

						      					</div>
						      				</div>
						      			</div>
							    							</div>
						</div>
                    </section>
                    <div class="container">
                    <h2>نظرات کاربران</h2>
<div id="myCarousel" class="testimonials-carousel testimonials-slide" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
		<!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li> -->
	</ol>   
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">		
		<div class="item carousel-item active">
			<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
			<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="item carousel-item">
			<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
			<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="item carousel-item">
			<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
			<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
				</ul>
			</div>
		</div>		
	</div>
	<!-- Carousel controls -->
	<!-- <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a> -->
</div>
</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/attribute/classie.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/attribute/dynamics.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/attribute/main.js"></script>
</body>

<?php get_footer(); ?>

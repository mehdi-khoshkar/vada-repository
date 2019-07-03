	<?php /* Template Name: Home Page */ ?>


<?php get_header(); ?>

  <div id="carouselHomeSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselHomeSlider" data-slide-to="0" class="active"></li>
      <li data-target="#carouselHomeSlider" data-slide-to="1"></li>
      <li data-target="#carouselHomeSlider" data-slide-to="2"></li>
		<li data-target="#carouselHomeSlider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image:url('https://farmooon.com/wp-content/uploads/2019/02/slider-3-new.jpg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">خلافی تو بگیر</h2>
          <p class="lead">بی دردسر و در کمترین زمان خلافی تو استعلام کن</p>
				 <?php  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {?>

					<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
						<div class="app-download-header">
			<a href="http://uzee.ir/sibche"  onclick="return gtag_report_conversion('http://uzee.ir/sibche');" class="btn btn-primary">دانلود  فرمون از سیبچه</a>

                                        </div>
						<?php }else{  ?>
							<div class="app-download-header">
			<a href="http://uzee.ir/farmooonir"  onclick="return gtag_report_conversion('http://uzee.ir/farmooonir');" class="btn btn-primary">دانلود مستقیم فرمون</a>

                                        </div>
						<?php } ?>
                                  
  								<?php } else { ?>
										<!-- Button trigger modal -->
							 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
							دانلود مستقیم فرمون</button>

							<?php } ?>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://farmooon.com/wp-content/uploads/2019/02/slider-2-new.jpg')">
        <div class="carousel-caption  d-md-block">
                  <h2 class="display-4">هشدار سرعت غیرمجاز</h2>
			<p class="lead">هشدار به هنگام عبور از سرعت مجاز </p>
		 <?php  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {?>
			<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
						<div class="app-download-header">
			<a href="http://uzee.ir/sibche"  onclick="return gtag_report_conversion('http://uzee.ir/sibche');" class="btn btn-primary">دانلود  فرمون از سیبچه</a>

                                        </div>
						<?php }else{  ?>
							<div class="app-download-header">
			<a href="http://uzee.ir/farmooonir"  onclick="return gtag_report_conversion('http://uzee.ir/farmooonir');" class="btn btn-primary">دانلود مستقیم فرمون</a>

                                        </div>
						<?php } ?>
  								<?php } else { ?>
										<!-- Button trigger modal -->
							 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
							دانلود مستقیم فرمون</button>

							<?php } ?>        </div>
      </div>
		      <!-- Slide Three - Set the background image for this slide in the line below -->

		  <div class="carousel-item " style="background-image:url('https://farmooon.com/wp-content/uploads/2019/02/slider-3-new.jpg')">
        <div class="carousel-caption d-md-block">
          <h2 class="display-4">استعلام نمره منفی گواهینامه</h2>
          <p class="lead"> همین حالا نمره منفی گواهینامه تو استعلام کن</p>
		 <?php  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {?>
			<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
						<div class="app-download-header">
			<a href="http://uzee.ir/sibche"  onclick="return gtag_report_conversion('http://uzee.ir/sibche');" class="btn btn-primary">دانلود  فرمون از سیبچه</a>

                                        </div>
						<?php }else{  ?>
							<div class="app-download-header">
			<a href="http://uzee.ir/farmooonir"  onclick="return gtag_report_conversion('http://uzee.ir/farmooonir');" class="btn btn-primary">دانلود مستقیم فرمون</a>

                                        </div>
						<?php } ?>
  								<?php } else { ?>
										<!-- Button trigger modal -->
							 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
							دانلود مستقیم فرمون</button>

							<?php } ?>
			  </div>
      </div>
      <!-- Slide Four - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://farmooon.com/wp-content/uploads/2019/02/slider-1-new1.jpg')">
        <div class="carousel-caption  d-md-block">
         <h2 class="display-4">هشدار دوربین های کنترل ترافیک</h2>
			<p class="lead">هشدار نزدیک شدن به دوربین طرح ترافیک و زوج و فرد </p>
		 <?php  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {?>
			<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
						<div class="app-download-header">
			<a href="http://uzee.ir/sibche"  onclick="return gtag_report_conversion('http://uzee.ir/sibche');" class="btn btn-primary">دانلود  فرمون از سیبچه</a>

                                        </div>
						<?php }else{  ?>
							<div class="app-download-header">
			<a href="http://uzee.ir/farmooonir"  onclick="return gtag_report_conversion('http://uzee.ir/farmooonir');" class="btn btn-primary">دانلود مستقیم فرمون</a>

                                        </div>
						<?php } ?>
  								<?php } else { ?>
										<!-- Button trigger modal -->
							 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
							دانلود مستقیم فرمون</button>

							<?php } ?>
		  </div>
      </div>
    </div>
	  
	  

<!--     <a class="carousel-control-prev" href="#carouselHomeSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselHomeSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
        </a> -->
  </div>




	  <section id="about-us">
           <div class="container about-us" data-aos="fade-up" data-aos-duration="1000">
				<h1>فرمون | استعلام خلافی خودرو هوشمند</h1>
				<p>
					
						با اپلیکیشن فرمون می تونید به راحتی <a href="https://farmooon.com/?p=303">خلافی خودرو</a> خودتونو استعلام و پرداخت کنید. علاوه بر این استعلام نمره منفی گواهینامه، هشدار طرح ترافیک و طرح زوج و فرد و از همه مهمتر ارزش گذاری خودرو هم داره!

				</p>

		   </div>


	  </section>

	  <section id="services">
            <div class="container services" data-aos="fade-up" data-aos-duration="1000">
			  <h2>ویژگی های فرمون</h2>
			  
			  <div class="row">
				<div class="col-md-4">
						<span><i class="far fa-money-bill-alt fa-3x"></i></span>
						<h3>پرداخت آسان و بی دردسر</h3>
						<p>با فرمون می توانید به راحتی خلافی خودرو خود را پرداخت کنید. روشهای آسان پرداخت در اپلیکیشن به شما کمک می کند تا در سریعترین زمان خلافی خود را پرداخت کنید.</p>
				</div>

				<div class="col-md-4">
					<span><i class="fas fa-car fa-3x"></i></span>	
					<h3>فراتر از یک اپ استعلام خلافی	</h3>
					<p>همواره در تلاشیم با بهره گیری از نظرات شما در جهت توسعه و بهبود این اپلیکیشن گام برداریم. اضافه شدن ویژگی قیمت گذاری خودرو از جمله امکانات اضافه شده به فرمون برای بهبود رضایت شما بوده است.</p>
					</div>

					<div class="col-md-4">
					<span><i class="far fa-star fa-3x"></i></span>
						<h3>تجربه کاربری عالی</h3>
						<p>تلاش ما در طراحی تجربه کاربری و رابط کاربری اپلیکیشن فرمون، سهولت استفاده در عین زیبایی محیط کاربری بوده است.</p>
						</div>

			  </div>


			</div>
	  </section>




	  <section id="testimonials">

		<div class="container testimonials" data-aos="fade-up" data-aos-duration="1000">
						<div class="col-md-12">

							<h2>نظرات کاربران</h2>
							<div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
		
								<ol class="carousel-indicators">
									<li data-target="#testimonialsCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#testimonialsCarousel" data-slide-to="1"></li>
									<li data-target="#testimonialsCarousel" data-slide-to="2"></li>
								</ol>
		
								<!-- Carousel items -->
								<div class="carousel-inner">
		
									<div class="carousel-item active">
										
											<div class="col-md-12">
											<p> سلام ممنون برنامه کاربردی و قابل اجرا هست برخلاف خیلی از برنامه های دیگه تشکر</p>
											</div>
										
									
									</div>
									<!--.item-->
		
									<div class="carousel-item">
										
											<div class="col-md-12">
											<p> برنامه بسیار جالبیه و مهمتر اینکه سرعت سنج و نرخ جریمه ها و اینکه کجاها دوربین زوج و فرد یا طرح اصلی هست رو نشون میده ،</p>
											</div>
								
									
									</div>
									<!--.item-->
									
									<div class="carousel-item">
										
											<div class="col-md-12">
												<p>
									 سلام باید به عرض برسونم که یکی از بهترین و بی نقصترین استعلام خلافی هستش که تاحالا دیدم اولا لحظه ای که رمز 8 رقمی رو ارسال کردی جوابش میاد و دوم اینکه دقیقا آدرس جایی که جریمه شدی و به چه دلیل جریمه شدی و چه ساعتی جریمه شدی رو به اطلاعتون میرسونه این حقیر از سازنده بزرگوار این نرم افزار بسیار ممنونم و خداقوت میگم و آرزوی بهترینهارودارم خدمتتون جانم 
												</p>
		
																</div>
								
									
									</div>
									<!--.item-->
								</div>
								<!--.carousel-inner-->
							</div>
							<!--.Carousel-->
		
						</div>
				
				

		</div>

		  </section>


		  <section id="download-app">
                 <div class="container" data-aos="fade-up" data-aos-duration="1000">
					<div class="row">
						<div class="col-md-8">
                              <h3>همین حالا فرمون دانلود کنید</h3>
						</div>
						<div class="col-md-4">
							
								 <?php  if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {?>
                                        <div class="app-download-header">
							<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){ ?>
 
                              <a href="http://uzee.ir/sibche" class="btn btn-info" onclick="return gtag_report_conversion('http://uzee.ir/sibche');"> دانلود از سیبچه</a>
                                 <?php } else { ?>
				  <a href="http://uzee.ir/farmooonir" class="btn btn-info" onclick="return gtag_report_conversion('http://uzee.ir/farmooonir');"> دانلود با لینک مستقیم</a>
                                           <?php } ?>
                                        </div>
  								<?php } else { ?>
										<!-- Button trigger modal -->
							 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#basicExampleModal">
							دانلود با لینک مستقیم</button>

							<?php } ?>
						</div>


					</div>

				 </div>

		  </section>


	  <section id="blog">

			<div class="container blog" data-aos="fade-up" data-aos-duration="1000">
                                <h2>پست های اخیر</h2>
					<div class="row">
						<?php
						 	$args = array('post_type' => 'post','posts_per_page' => 4);
			
			             $loop = new WP_Query( $args ); 
						
						?>
						<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

					  <div class="col-lg-3 col-md-6 col-12">
						<div class="card mb-4 shadow-sm">
							<a href="<?php the_permalink(); ?>">
							
						<?php	the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
							   </a>
							
	

						  <div class="card-body">
							  <a href="<?php the_permalink(); ?>">
								 <div class="arshive-post-title">
		
								<h3><?php the_title(); ?> </h3>
								  </div>
							  </a>
							  
							  						<div class="entry-meta">
						
								<span class="categories-links">
								<i class="fas fa-folder-open"></i>
									<?php
								$categories = get_the_category();
if ( ! empty( $categories ) ) {
		 echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> ';

    echo ',<a href="' . esc_url( get_category_link( $categories[1]->term_id ) ) . '">' . esc_html( $categories[1]->name ) . '</a>';
}									?>
</span>
                           
					 </div><!-- .entry-meta -->
								<div class="card-text"><?php the_excerpt(); ?></div>
							   <div class="post-more">
							  <a href="<?php the_permalink(); ?>"> مشاهده مطلب</a>
							  </div>
						  </div>
						</div>
					  </div>
		<?php endwhile; ?>
   
<?php endif; ?>

			  
			
					</div>
				  </div>


	  </section>


<?php get_footer(); ?>
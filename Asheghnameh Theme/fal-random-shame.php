<?php /* Template Name: Fale Shame Random */ ?>

<?php get_header();  ?>

<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<div class="container">
	

<!-- Section: Blog v.4 -->
<section class="section-single-faleShame">

	

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">

      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/faleshame.jpg" alt="Sample image">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <?php
        $NfaleShame = filter_input(INPUT_GET, 'faleShame');
		
        // Query  posts
            $the_query = new WP_Query( array(
            'post_type'      => 'faleshame',
            'orderby'        => 'rand',
            'posts_per_page' => $NfaleShame,

            ) );

            ?>
<?php
// If we have posts lets show them
if ( $the_query->have_posts() ) : ?>
<?php


// Loop through the posts
while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
        <!-- Card content -->
        <div class="card-body  text-center">

			

			<img src="https://asheghnameh.com/wp-content/uploads/2019/05/asli2.gif" alt="">
          <!-- Title -->
          <?php  the_content(); ?>
	
			

        </div>
        <!-- Card content -->

   
      <!-- Card -->


  
	
                   <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
    </div>
    <!-- Grid column -->
    

  </div>
  <!-- Grid row -->

 



</section>
<!-- Section: Blog v.4 -->
	

		<hr>

<h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                   برای گرفتن سایر فال ها،روی فال مورد نظر کلیک کنید 
                </h3>

	
					<section id="review-fal">

					<div id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="main main-home mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/category/%D9%81%D8%A7%D9%84-%D8%B1%D9%88%D8%B2%D8%A7%D9%86%D9%87/" title="فال روزانه">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/roozaneh-compressor.png" />
                                <span><h4 class="tool-card-head">فال روزانه</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%AD%D8%A7%D9%81%D8%B8-%D8%A2%D9%86%D9%84%D8%A7%DB%8C%D9%86-%D8%AA%D9%81%D8%B3%DB%8C%D8%B1-%DA%A9%D8%A7%D9%85%D9%84-%D8%BA%D8%B2%D9%84%DB%8C%D8%A7%D8%AA/" title="فال حافظ">
                    <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/hafez-compressor.png" />
                                <span><h4 class="tool-card-head">فال حافظ</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%A7%D9%86%D8%A8%DB%8C%D8%A7-%D9%88-%D8%AA%D9%81%D8%B3%DB%8C%D8%B1-%D8%A2%D9%86/" title="فال انبیا">
                    <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-anbia-compressor.png" />
                                <span><h4 class="tool-card-head">فال انبیا</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%AA%D8%A7%D8%B1%D9%88%D8%AA/" title="فال تاروت">
                    <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-taroot-compressor.png" />
                                <span><h4 class="tool-card-head">فال تاروت</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%B4%D9%85%D8%B9/" title="فال شمع">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-sham-compressor.png" />
                                <span><h4 class="tool-card-head"> فال شمع</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D9%82%D9%87%D9%88%D9%87/" title="فال قهوه">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-cafe-compressor.png" />
                                <span><h4 class="tool-card-head">فال قهوه</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%A7%D8%A8%D8%AC%D8%AF/" title="فال ابجد">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-abjad-compressor.png" />
                                <span><h4 class="tool-card-head">فال ابجد</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 mb-2">
                    <a href="https://asheghnameh.com/category/%D9%81%D8%A7%D9%84-pmc/" title="فال pmc">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-pmc-compressor.png" />
                                <span><h4 class="tool-card-head">فال pmc </h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

            </div>
            <!-- /.row -->
			
			            <!-- /.row -->
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/category/%d9%81%d8%a7%d9%84-%d9%87%d9%86%d8%af%db%8c/" title="فال هندی">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-hendi-compressor.png" />
                                <span><h4 class="tool-card-head"> فال هندی</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/category/%d9%81%d8%a7%d9%84-%d8%b9%d8%b7%d8%b3%d9%87/" title="فال عطسه">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/fall-atse-compressor.png" />
                                <span><h4 class="tool-card-head">فال عطسه</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/category/%d9%85%d8%aa%d9%86-%d8%b9%d8%a7%d8%b4%d9%82%d8%a7%d9%86%d9%87/" title="متن عاشقانه">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/matn-asheghaneh-compressor.png" />
                                <span><h4 class="tool-card-head"> متن عاشقانه</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->
                <div class="col-lg-3 col-md-6 mb-2">
                    <a href="https://asheghnameh.com/category/%d8%b9%da%a9%d8%b3-%d8%b9%d8%a7%d8%b4%d9%82%d8%a7%d9%86%d9%87/" title="عکس عاشقانه">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/akse-asheghaneh-compressor.png" />
                                <span><h4 class="tool-card-head">عکس عاشقانه  </h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

            </div>
            <!-- /.row -->
			
			   <!-- /.row -->
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-2">
                    <!--Card-->
                    <a href="https://asheghnameh.com/category/%d8%b4%d8%b9%d8%b1-%d8%b9%d8%a7%d8%b4%d9%82%d8%a7%d9%86%d9%87/" title="شعر عاشقانه ">
                        <div class="card tools-card text-center">
                            <div class="tool-card-holder ani">
                                <div class="tool-card-over ">
                                </div>
                                <!--card-over-->
                                <img src="https://asheghnameh.com/wp-content/uploads/2019/05/shere-asheghaneh-compressor.png" />
                                <span><h4 class="tool-card-head">  شعر عاشقانه</h4></span>
                            </div>
                            <!-- /.card-holder -->
                        </div>
                        <!--/.Card-->
                    </a>
                </div>
                <!-- /.col-lg-3 col-md-6 -->

  

            </div>
            <!-- /.row -->


        </div>
        <!-- /.main -->
    </div>
    <!--/.tab-pane-->

</div>


				
				</section>	

        
  
	
<div class="card-body card-body-cascade text-center">
			
			
			
			     <!-- Social shares -->
          <div class="social-counters">
			  
			  
			 
         
		
		
		
            


							  
  <a class="btn btn-gplus waves-effect waves-light"  href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%B4%D9%85%D8%B9/">
              <i class="fab fa-phoenix-framework pr-2"></i>
              <span class="clearfix  d-md-inline-block">فال جدید</span>
            </a>

 
        
          </div>
          <!-- Social shares -->
			
         
			



        </div>

	
	<?php endif; ?>
	
</div>


<?php  get_footer(); ?>




<!--  <div class="container">
//  <?php echo do_shortcode( '[instalink id="2"]' ); ?> 
</div>  -->

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
				<div class="container footer-content">
					
			
				  <div class="row row-30">
					<div class="col-md-4 footer-col">
					<?php if ( is_active_sidebar( 'footer-one' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('footer-one'); ?>
    </ul>
<?php } ?>
					</div>
					<div class="col-md-4 footer-col">
					<?php if ( is_active_sidebar( 'footer-two' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('footer-two'); ?>
    </ul>
<?php } ?>
					</div>
					<div class="col-md-4  footer-col">
					<?php if ( is_active_sidebar( 'footer-three' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('footer-three'); ?>
    </ul>
<?php } ?>
					</div>
				  </div>
					<center>
						<div class="enemad">
						<a href="https://farmooon.com/%d9%86%d9%85%d8%a7%d8%af/">
			                 <img src="https://farmooon.com/wp-content/uploads/2019/09/logo-enemad.png" />
							 <img src="https://farmooon.com/wp-content/uploads/2019/09/logo-samandehi.png" />
							 <img src="https://farmooon.com/wp-content/uploads/2019/09/zarinpal.jpg" />

                                </a>
							
						</div>
		
						</center>

				</div>

				<div class="row no-gutters social-container">
<div class="col social-inner"> <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' =>'', 'menu_class' =>'footernav' ) ); ?>© 2018 کپی رایت: <a href="https://farmooon.com/">فرمون</a> </div>			  </div>

	

						<?php wp_footer(); ?>
	<?php if(is_single()): ?>
<!-- Return to Top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-alt-circle-up"></i></a>	 -->
	<?php endif; ?>
			  </footer>
	  

	</div>

	  <script>
			AOS.init();
		  
		  // below listed default settings
AOS.init({

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  once: true, // whether animation should happen only once - while scrolling down

});
		  

		  </script>




	<script type="text/javascript">


function popup_close(){
 //insert your code here
 console.log('ok');
	swal.close();	

}


jQuery(document).ready(function($){
	

	var deviceAgent = navigator.userAgent.toLowerCase();
	var isiphone = deviceAgent.match(/(iphone|ipod|ipad)/);
	var isAndroid = deviceAgent.match(/android/);
	
	
	if (isiphone) {
console.log(isiphone);
		 

 
		
		//      $('#main-blog a[href^="https://"]').each(function(){ 
        //     var oldUrl = $(this).attr("href"); // Get current url
        //     var newUrl = oldUrl.replace("https://uzee.ir/farmooonir", "https://uzee.ir/sibche"); // Create new url
        //     $(this).attr("href", newUrl); // Set herf value
		// 		 			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/sibche')"); 

        // });
		     $('.ads-farmooon-app a[href^="https://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("https://uzee.ir/farmooonir3", "https://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 			 $(this).attr("onclick","return gtag_report_conversion('https://uzee.ir/sibche')"); 

        });
		
		
		 $('.btn-box-download .android').hide(); 
		$('.btn-box-download button').hide(); 
		
 
	}
					
		if (isAndroid) {
			
	 $('.btn-box-download .ios').hide(); 
			 $('.btn-box-download button').hide(); 
			
			
	
		//      $('#main-blog a[href^="https://"]').each(function(){ 

		// 		 			 $(this).attr("onclick","return gtag_report_conversion('https://uzee.ir/farmooonir')"); 

        // });
		     $('.ads-farmooon-app a[href^="https://"]').each(function(){ 
          
				 			 $(this).attr("onclick","return gtag_report_conversion('https://uzee.ir/farmooonir')"); 

        });

		}
															  
															  
	if(!(isAndroid || isiphone)){
		  
	
				  		 $('.btn-box-download .android').hide(); 
				  $('.btn-box-download .ios').hide(); 
	}
	
});
;
									
</script>




</body>

</html>
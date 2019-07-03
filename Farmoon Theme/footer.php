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
										<script src="https://cdn.zarinpal.com/trustlogo/v1/trustlogo.js" type="text/javascript"></script>
						
				<img src="https://trustseal.enamad.ir/logo.aspx?id=127410&amp;p=NbRalsyg6g3davw1" alt="" onclick="window.open(&quot;https://trustseal.enamad.ir/Verify.aspx?id=127410&amp;p=NbRalsyg6g3davw1&quot;, &quot;Popup&quot;,&quot;toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30&quot;)" style="cursor:pointer" id="NbRalsyg6g3davw1">
							
										<img id = 'jxlzwlaojzpergvjjzpejzpe' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=147377&p=rfthaodsjyoexlaojyoejyoe", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=147377&p=nbpdshwlyndtqftiyndtyndt' />
							
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
		  
		  // ===== Scroll to Top ==== 
jQuery(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 200px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
		  </script>


<script type="text/javascript">
function closePopup() {
		  

    document.getElementById("sgpb-popup-dialog-main-div-wrapper").style.display = "none";
$('.sgpb-theme-6-overlay').hide();


jQuery("html").removeClass("sgpb-overflow-hidden");


}
	
jQuery(document).ready(function($){
	var deviceAgent = navigator.userAgent.toLowerCase();
	var isiphone = deviceAgent.match(/(iphone|ipod|ipad)/);
	var isAndroid = deviceAgent.match(/android/);
	
	
	if (isiphone) {
console.log(isiphone);
         $('.sgpb-main-html-content-wrapper a[href^="http://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("http://uzee.ir/farmooonir", "http://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/sibche')"); 
        });
		     $('#main-blog a[href^="http://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("http://uzee.ir/farmooonir", "http://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/sibche')"); 

        });
		     $('.ads-farmooon-app a[href^="http://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("http://uzee.ir/farmooonir3", "http://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/sibche')"); 

        });
		
		
		 $('.btn-box-download .android').hide(); 
		$('.btn-box-download button').hide(); 
		
 
	}
		if (isAndroid) {
			
	 $('.btn-box-download .ios').hide(); 
			 $('.btn-box-download button').hide(); 
			
			
			      $('.sgpb-main-html-content-wrapper a[href^="http://"]').each(function(){ 
          
			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/farmooonir')"); 
        });
		     $('#main-blog a[href^="http://"]').each(function(){ 

				 			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/farmooonir')"); 

        });
		     $('.ads-farmooon-app a[href^="http://"]').each(function(){ 
          
				 			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/farmooonir')"); 

        });

		}
	
	if(!(isAndroid || isiphone)){
		      $('.sgpb-main-html-content-wrapper a[href^="http://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("http://uzee.ir/farmooonir", ""); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 $('.sgpb-main-html-content-wrapper a').attr("data-toggle","modal");
				  $('.sgpb-main-html-content-wrapper a').attr("data-target","#basicExampleModal");
			 
        });
				  		 $('.btn-box-download .android').hide(); 
				  $('.btn-box-download .ios').hide(); 
	}
	
});
</script>

</body>

</html>
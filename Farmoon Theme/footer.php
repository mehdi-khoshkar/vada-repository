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

				
				</div>
				<div class="row no-gutters social-container">
						<div class="col"><a class="social-inner" href="https://farmooon.com/"><span class="icon mdi mdi-youtube-play"></span><span>  کپی رایت : فرمون</span></a></div>
					  </div>

						<?php wp_footer(); ?>
			  </footer>
	  

	</div>

	  <script>
			AOS.init();
		  </script>


<script type="text/javascript">
function closePopup() {
		  

    document.getElementById("sgpb-popup-dialog-main-div-wrapper").style.display = "none";
$('.sgpb-theme-6-overlay').hide();


jQuery("html").removeClass("sgpb-overflow-hidden");


}
</script>
</body>

</html>
  <!--Footer-->
  <footer class="page-footer text-center text-md-left unique-color-dark pt-0">

<div style="background-color: #2bbbad;">
    <div class="container footer-content">


				  <div class="row ">
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
<img src="https://trustseal.enamad.ir/logo.aspx?id=127567&amp;p=hx24wteFj2qgb5ys" alt="" onclick="window.open(&quot;https://trustseal.enamad.ir/Verify.aspx?id=127567&amp;p=hx24wteFj2qgb5ys&quot;, &quot;Popup&quot;,&quot;toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30&quot;)" style="cursor:pointer" id="hx24wteFj2qgb5ys">
				</div>
		</center>
        
		
    </div>

</div>


	  		

<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
            <div class="container-fluid">
												<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' =>'', 'menu_class' =>'footernav' ) ); ?>

             © 2018 کپی رایت: <a href="http://asaay.com/" target="_blank"> آسای</a>
            </div>
        </div>

</footer>
<!--/.Footer-->


<script>
//Animation init
new WOW().init();

//Modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})

// Material Select Initialization
$(document).ready(function () {
    $('.mdb-select').material_select();
});
</script>

<script>
$(function () {
    var selectedClass = "";
    $(".filter").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
        setTimeout(function () {
            $("." + selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});
</script>

<?php wp_footer(); ?>
</body>

</html>

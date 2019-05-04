  <!--Footer-->
  <footer class="page-footer text-center text-md-left unique-color-dark pt-0">

<div style="background-color: #2bbbad;">
    <div class="container">

        <!--Grid row-->
        <div class="row py-4 d-flex align-items-center">

            <!--Grid column-->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-md-0">
                <h6 class="mb-0 white-text">ما را در شبکه های اجتماعی دنبال کنید</h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
                <!--Facebook-->
                <a class="p-2 m-2 fa-lg fb-ic ml-0">
                    <i class="fab fa-facebook-f white-text mr-lg-4"> </i>
                </a>
                <!--Twitter-->
                <a class="p-2 m-2 fa-lg tw-ic">
                    <i class="fab fa-twitter white-text mr-lg-4"> </i>
                </a>
                <!--Google +-->
                <a class="p-2 m-2 fa-lg gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-lg-4"> </i>
                </a>
                <!--Linkedin-->
                <a class="p-2 m-2 fa-lg li-ic">
                    <i class="fab fa-linkedin-in white-text mr-lg-4"> </i>
                </a>
                <!--Instagram-->
                <a class="p-2 m-2 fa-lg ins-ic">
                    <i class="fab fa-instagram white-text mr-lg-4"> </i>
                </a>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
</div>



<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">
            <div class="container-fluid">
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

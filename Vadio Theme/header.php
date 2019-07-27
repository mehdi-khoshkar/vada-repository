<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="icon" type="image/png"  href="http://vaadio.com/wp-content/uploads/2019/03/logo-vadio.png">

    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	


    <style>
        body {
            font-weight: 400;
        }

        html,
        body,
       
        .intro-2 {
          height: 100%;
        }

        @media (max-width: 740px) {
          html,
          body,
         
          .intro-2 {
            height: 900px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
           
            .intro-2 {
              height: 900px;
            }
        }
    </style>
	
	<!-- Global site tag (gtag.js) - Google Ads: 836444557 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-836444557"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-836444557');
</script>

	
	<?php wp_head(); ?>
	


</head>
	
  <body class="creative-lp" <?php body_class(); ?> >
  
  
    <!-- Navigation & Intro -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar grey">
            <div class="container">
                <a class="navbar-brand font-weight-bold title" href="<?php echo home_url( '/' ); ?>">
                    
                    <img src="http://vaadio.com/wp-content/uploads/2019/03/logo-vadio.png">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

	<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'navbarTogglerDemo02',
			'menu_class'        => 'navbar-nav ml-auto smooth-scroll',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
					

					
                    
                </div>
				
											 <!-- Search form -->
	<form class="form-inline ml-auto d-none d-sm-block" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input class="form-control mr-sm-2" name="s" id="s" type="text" placeholder="جستجو ..." aria-label="Search">
          <button class="btn purple-gradient  btn-sm my-0 waves-effect waves-light" ype="submit"  name="submit" id="searchsubmit">جستجو</button>
        </form>
				
            </div>
			
	<a href="http://uzee.ir/vaadiosite" class="btn btn-download white-text font-weight-bold wow fadeIn waves-effect waves-light btn-app-download-top animated" data-wow-delay="0.3s" onclick="return gtag_report_conversion('http://uzee.ir/vaadiosite');" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">دانلود مستقیم وادیو</a>
        </nav>
		
	  </header>

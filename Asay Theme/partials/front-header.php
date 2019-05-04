<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>آسای </title>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 
    <style>
        body {
            font-weight: 400;
        }

        html,
        body,
        header,
        .intro-2 {
          height: 100%;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .intro-2 {
            height: 900px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .intro-2 {
              height: 900px;
            }
        }
    </style>
	<?php wp_head(); ?>
</head>

<body class="creative-lp-asay" <?php body_class(); ?>>

    <!-- Navigation & Intro -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light default-color lighten-4">
            <div class="container">
                <a class="navbar-brand font-weight-bold title" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-asay.png" alt="">
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
            
					
																					 <!-- Search form -->
	<form class="form-inline ml-auto d-none d-sm-block" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input class="form-control mr-sm-2" name="s" id="s" type="text"  aria-label="Search">
          <button class="btn  aqua-gradient  btn-sm my-0 waves-effect waves-light btn-search" type="submit"  name="submit" id="searchsubmit">جستجو</button>
        </form>
                </div>
            </div>
        </nav>
		
		        <!--Intro Section-->
        <section class="view intro-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  
            <div class="container h-50 d-flex justify-content-center align-items-center" style="margin-bottom: 170px;">
				 <?php echo do_shortcode('[wd_asp id=2]');?>
         
        </div>
        <div class="text-center">

        <a href="#" class="btn btn-download white-text font-weight-bold wow fadeIn waves-effect waves-light animated  aqua-gradient btn-app-download" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">دانلود اپلیکیشن  آسای</a>


            </div>
        </section>

    </header>
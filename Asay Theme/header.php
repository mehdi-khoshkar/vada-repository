<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?> </title>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="icon" type="image/png"  href="https://asaay.com/wp-content/themes/Dream%20Theme/images/logo-asay.png">
	

	
	
	<?php wp_head(); ?>
</head>

<body class="creative-lp-asay" <?php body_class(); ?>>

	
		  
	  			<div class="app-download-review">

										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
											<div class="row">
												
						
													<div class="col-sm-10">

         <strong>تعبیر خواب  برای اندروید</strong>
			
							
											<br>
														<div class="star-app">
																	<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half"></i>
											<span>220,375</span>
														</div>
											
										


											
											</div>	
												
																	<div class="col-sm-2">
																						<div class="app-download-header-review">
				<a href="http://uzee.ir/asaysite" class="btn btn-light">نصب</a>
			</div>
											</div>
																							</div>

			</div>
	
		 </div>
	
    <!-- Navigation & Intro -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar default-color lighten-4">
            <div class="container">
				
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand font-weight-bold title" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-asay.png" alt="">
                </a>
            
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
		


    </header>
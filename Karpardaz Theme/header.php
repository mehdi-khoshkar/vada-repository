<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="https://farmooon.ir/xmlrpc.php">
<title><?php bloginfo('name') ?></title>



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
		

	


	


	
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	  <div class="container-fluid section-home">

    
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container-fluid">
				
		
			
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-kaarpardaz.png"  class="d-inline-block align-top" alt="">
					
					  </a>

				<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 3,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'navbarResponsive',
			'menu_class'        => 'navbar-nav ml-auto smooth-scroll',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
			

				  <div class="app-download-header">
				<a href="http://uzee.ir/karpardazsite"  class="btn btn-primary">دانلود کارپرداز</a>
			</div>

			<div class="topsearch d-none d-sm-block">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<input type="search" class="search-field form-control" placeholder="جستجو …" value="" name="s">
		</label>
		<input type="submit" class="search-submit btn btn-primary" value="جستجو">
	<span class="searchico genericon genericon-search"></span></form>         
               </div>
	</div>
	
				
			
				
	
			

		
	  </nav>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php wp_title(); ?>
	</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
		rel="stylesheet">
		<link
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		rel="stylesheet">
	<?php wp_head(); // Hook for adding additional head elements ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="main-header">
			<div class="container">
				<div class="inner-header">
					<div class="logo">
						<a href="<?php echo esc_url( get_site_url() ); ?>"><img
								src="<?php echo esc_url( get_template_directory_uri() . '/assests/images/logo.svg' ); ?>"
								alt="site logo"></a>
					</div>
					<div class="nav-menu">
						<?php
						// Display the primary menu
						wp_nav_menu(
							array(
								'theme_location' => 'primary-menu',
								'menu_class'     => 'navigation',
							)
						);
						?>
						<div class="header-buttons">
						<div class="signin-btn">Sign In</div>
						<div class="schedule-btn">Schedule a Demo</div>
						</div>
					</div>
					<div class="ham-menu">
						<i class="fa-solid fa-bars fa-2xl" style="color: #8000ff;"></i>
					</div>
				</div>
			</div>
		</div>
	</header>
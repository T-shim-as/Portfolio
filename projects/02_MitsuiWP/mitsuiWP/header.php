<!DOCTYPE html>
<html lang="ja">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="css/bootstrap-social.css" />
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- <title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title> -->
    
	</head>
	<body <?php body_class(); ?>>

		<header class="page-header">

      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-0 py-lg-2">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

				<a class="navbar-brand mx-auto pr-5 pl-lg-4 py-0" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="title" width="120"></h1></a>
        
        <?php wp_nav_menu(array(
					'theme_location' => 'header-nav',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'menu',
          'menu_class' => 'navbar-nav mr-auto'));
          ?>

        <form class="form-inline my-lg-0 d-none d-lg-block">
          <input class="form-control mr-2" type="search" placeholder="検索" aria-label="Search" style="width: 200px;">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </nav>
		</header>
    <?php wp_head(); ?>
    


    
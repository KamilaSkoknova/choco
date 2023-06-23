<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Kamila Skokňová" >

  <title>
    <?php 
      wp_title(' | ', true, 'right'); bloginfo( 'name' ); 
      if (is_front_page()) echo ' | ' . get_bloginfo( 'description' );
    ?>
  </title>

	<?php wp_head(); ?>
</head>

<body>

<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">Choco</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
        )); ?>

        <div class="d-flex justify-content-center social-icons">
          <a href="#"><i class="bi bi-youtube pe-2"></i></a>
          <a href="#"><i class="bi bi-pinterest px-2"></i></a>
          <a href="#"><i class="bi bi-discord ps-2 me-3"></i></a>
        </div>
      </div>
    </div>
  </nav>
</header>


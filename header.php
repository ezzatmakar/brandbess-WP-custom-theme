<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php bloginfo('name'); ?></title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png?v=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png?v=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png?v=1.0">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico?v=1.0">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


  <!-- CSS -->
  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <header>
  <?php 
  $header = get_field('header_settings', 'option'); 
  $logo_id = $header['header_logo'];
  $logo = wp_get_attachment_image_src($logo_id, array('200','150'), true );
  ?>
    <div class="container v-center">
      <div class="col-sm-4 col-xs-8">
        <a href="<?php echo get_home_url()?>"><img class="logo" src="<?php echo $logo[0]; ?>" alt="Logo"></a>
      </div>
      <div class="col-sm-8 col-xs-4">
        <div class="mainMenu">
        <?php
        $nav_menu_args = array(
          'container' => false,
        );
        wp_nav_menu($nav_menu_args);
        ?>
        </div>

        <!-- Mobile Menu -->
        <div class="Mob">
          <div class="mobMenu">
            <span class="lone"></span>
            <span class="ltwo"></span>
            <span class="lthree"></span>
          </div>
          <div class="menuContent">

          </div>
        </div>

      </div>
    </div>
  </header>

  <?php
  $home_Page_ID = 7;
  $about_Page_ID = 51;
  $contact_Page_ID = 81;
  $portfolio_Page_ID = 111;

  if(get_the_ID() == $home_Page_ID){
    echo get_template_part('template-parts-top-section/home_top_section');
  }
  elseif(get_the_ID() == $about_Page_ID){
    echo get_template_part('template-parts-top-section/about_top_section');
  }
  elseif(get_the_ID() == $contact_Page_ID){
    echo get_template_part('template-parts-top-section/contact_top_section');
  }
  elseif(get_the_ID() == $portfolio_Page_ID){
    echo get_template_part('template-parts-top-section/portfolio_top_section');
  }else{
    echo get_template_part('template-parts-top-section/portfolio_top_section');
  }
  ?>

  
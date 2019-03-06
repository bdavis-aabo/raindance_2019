  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
  <?php
  	if(function_exists('is_tag') && is_tag()) {
      	echo 'Tag Archive for &quot;' . $tag . '&quot; - ';
  	} elseif(is_archive()) {
      	wp_title(''); echo ' Archive - ';
  	} elseif(is_search()) {
      	echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
  	} elseif(!(is_404()) && (is_single()) || (is_page()) && !(is_front_page())) {
      	wp_title('');
  	} elseif(is_404()) {
      	echo 'Page Not Found - ';
  	} elseif(is_front_page()){
      	bloginfo('name');
  	} elseif(is_home()){
      	echo 'Latest News - '; bloginfo('name');
  	}
  ?>
  </title>

  <?php //seo plugin grabs page title ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.png" type="image/x-icon" />

  <?php /* Load CSS in functions.php */ ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122850031-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-122850031-1');
  </script>

  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <div class="container" id="wrapper">
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container nav-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="<?php bloginfo('url') ?>" class="navbar-brand">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/raindance-logo.svg" alt="" />
          </a>
        </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#dance">dance</a></li> -->
                <li><a href="/freedom">freedom</a></li>
                <li><a href="/access">access</a></li>
                <li><a href="/#fun">fun</a></li>
                <li><a href="/new-homes">new homes</a></li>
                <li><a href="/realtor-forum">realtors&reg;</a></li>
                <li><a class="modal-btn prospect" data-toggle="modal" data-target="#contactModal">stay in touch</a></li>

                <li class="social-icon"><a href="https://facebook.com/raindanceco"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                <li class="social-icon"><a href="https://www.instagram.com/raindancecolorado/"><i class="fab fa-2x fa-instagram"></i></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

        </div>
      </nav>
    </header>
  <!-- div.container ends in index -->

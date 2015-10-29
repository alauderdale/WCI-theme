<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>
    <body class='index'>
      <nav class='sliding-menu slide-menu-right'>
        <button class='close-menu nav-toggler'>
          <i class='md md-close'></i>
        </button>
        <div class='clearfix'></div>
        <a class='btn btn-default' href='/contact'>
          Get in Touch
        </a>
        <ul class='nav main-links'>
          <li class='active'>
            <a href='/'>
              Home
            </a>
          </li>
          <li>
            <a href='/approach'>
              Approach
            </a>
          </li>
          <li>
            <a href='/team'>
              Team
            </a>
          </li>
          <li>
            <a href='/contact'>
              Contact
            </a>
          </li>
          <li>
            <a href='/portfolio'>
              Portfolio
            </a>
          </li>
        </ul>
        <div class='nav-padding-left'>
          <p>
            <ul class='list-inline menu-social'>
              <li>
                <a href='#'>
                  <i class='fa fa-facebook'></i>
                </a>
              </li>
              <li>
                <a href='#'>
                  <i class='fa fa-linkedin'></i>
                </a>
              </li>
              <li>
                <a href='#'>
                  <i class='fa fa-twitter'></i>
                </a>
              </li>
            </ul>
          </p>
        </div>
      </nav>
      <div id='wrapper'>
        <nav class='main-nav'>
          <div class='container'>
            <a class='navbar-brand' href='/'>
              <img src='<?php bloginfo('template_url'); ?>/images/logo@2x.png' width='210px'>
            </a>
            <div class='pull-right visible-xs'>
              <button class='nav-toggler toggle-slide-right'>
                <span class='menu-text'>
                  menu
                  <i class='md md-menu'></i>
                </span>
              </button>
            </div>
            <div class='nav-links hidden-xs pull-right'>
              <ul class='nav main-links'>
                <li>
                  <a href='/approach'>
                    Approach
                  </a>
                </li>
                <li>
                  <a href='/team'>
                    Team
                  </a>
                </li>
                <li>
                  <a href='/contact'>
                    Contact
                  </a>
                </li>
                <li>
                  <a href='/portfolio'>
                    Portfolio
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end menu -->
        <div class='main'>
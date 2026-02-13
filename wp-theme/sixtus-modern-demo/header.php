<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cannon.png'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Skip link for keyboard navigation -->
<a class="skip-link" href="#content">Skip to content</a>

<!-- Top announcement banner -->
<div class="announcement">
  Book a GDPR review – <a href="<?php echo esc_url(home_url('/contact')); ?>">schedule a call</a>
</div>

<!-- Site header with logo, primary navigation, and language toggle -->
<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cannon.png'); ?>" alt="Sixtus logo" width="288" height="186" loading="lazy">
      <span>Sixtus Compliance</span>
    </a>

    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" data-nav-toggle>
      Menu
    </button>

  <!-- Primary WordPress menu (assigned in Appearance → Menus) -->
  <nav class="primary-nav" aria-label="Primary">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu',
            'fallback_cb' => '__return_false',
            'depth' => 2,
          )
        );
      ?>
    </nav>

    <button class="lang-toggle" type="button" aria-label="Language switcher" aria-pressed="false" data-lang-toggle>
      EN / DA
    </button>
  </div>

  <!-- Mobile nav panel (toggled by JS on small screens) -->
  <div class="container mobile-panel" data-mobile-panel>
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/compliance')); ?>">Compliance</a>
    <div class="sub-links">
      <a href="<?php echo esc_url(home_url('/compliance')); ?>#audit">Audit preparation</a>
      <a href="<?php echo esc_url(home_url('/compliance')); ?>#dpo">DPO as a Service</a>
      <a href="<?php echo esc_url(home_url('/compliance')); ?>#gdpr">GDPR & privacy projects</a>
      <a href="<?php echo esc_url(home_url('/compliance')); ?>#internal">Internal compliance & audit</a>
  <a href="<?php echo esc_url(home_url('/compliance')); ?>#lexoforms-details">Lexoforms</a>
  <a href="<?php echo esc_url(home_url('/compliance')); ?>#whistleblower-details">Whistleblower Software</a>
    </div>
    <a href="<?php echo esc_url(home_url('/technologies')); ?>">Technologies</a>
    <a href="<?php echo esc_url(home_url('/about-sixtus')); ?>">About Sixtus</a>
    <a href="<?php echo esc_url(home_url('/our-team')); ?>">Our team</a>
    <a href="<?php echo esc_url(home_url('/partners')); ?>">Partners & memberships</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
  </div>
</header>

<!-- Main page content starts here -->
<main id="content">

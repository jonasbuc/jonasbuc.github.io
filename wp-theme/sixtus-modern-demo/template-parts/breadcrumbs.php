<!-- Breadcrumb trail for internal pages -->
<?php
  $slug = get_post_field('post_name', get_queried_object_id());
  $translations = array(
    'about-sixtus' => array('en' => 'About Sixtus', 'da' => 'Om Sixtus'),
    'about' => array('en' => 'About Sixtus', 'da' => 'Om Sixtus'),
    'compliance' => array('en' => 'Compliance', 'da' => 'Compliance'),
    'technologies' => array('en' => 'Technologies', 'da' => 'Teknologier'),
    'our-team' => array('en' => 'Our team', 'da' => 'Vores team'),
    'team' => array('en' => 'Our team', 'da' => 'Vores team'),
    'partners' => array('en' => 'Partners', 'da' => 'Partnere'),
    'contact' => array('en' => 'Contact', 'da' => 'Kontakt'),
    'privacy-policy' => array('en' => 'Privacy Policy', 'da' => 'Privacy Policy'),
  );
  $title_en = isset($translations[$slug]) ? $translations[$slug]['en'] : get_the_title();
  $title_da = isset($translations[$slug]) ? $translations[$slug]['da'] : get_the_title();
?>
<nav class="breadcrumbs" aria-label="Breadcrumb">
  <div class="container">
    <a href="<?php echo esc_url(home_url('/')); ?>" data-lang-en="Home" data-lang-da="Hjem">Home</a>
    <span> / </span>
    <span data-lang-en="<?php echo esc_attr($title_en); ?>" data-lang-da="<?php echo esc_attr($title_da); ?>"><?php echo esc_html($title_en); ?></span>
  </div>
</nav>

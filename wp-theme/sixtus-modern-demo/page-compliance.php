<?php
/*
Template Name: Compliance
*/
get_header();
?>

<!-- Compliance page breadcrumb -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- Compliance intro -->
<section class="section">
  <div class="container split">
    <div>
      <h1 data-lang-en="Compliance" data-lang-da="Compliance">Compliance</h1>
      <p data-lang-en="Audit-ready frameworks and privacy programs designed for growing organizations." data-lang-da="Audit-klare rammer og privacy-programmer til voksende organisationer.">Audit-ready frameworks and privacy programs designed for growing organizations.</p>
      <div class="button-group">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Contact us" data-lang-da="Kontakt os">Contact us</a>
        <a class="btn btn-secondary" href="#services" data-lang-en="View services" data-lang-da="Se ydelser">View services</a>
      </div>
    </div>
    <div>
  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/compliance.png'); ?>" alt="Compliance illustration" loading="lazy">
    </div>
  </div>
</section>

<!-- DPO service deep-dive -->
<?php get_template_part('template-parts/section-compliance-details', null, array('include_extras' => false, 'section_id' => 'dpo-details')); ?>

<!-- Services grid (shared template part) -->
<?php get_template_part('template-parts/section-services'); ?>

<!-- Lexoforms + whistleblower details -->
<?php get_template_part('template-parts/section-compliance-extras'); ?>

<!-- Internal compliance accordion -->
<section class="section">
  <div class="container">
    <div class="section-header">
  <h2 data-lang-en="Internal compliance & audit support" data-lang-da="Intern compliance & audit support">Internal compliance & audit support</h2>
  <p data-lang-en="We align documentation, policies, and training so your team stays confident year-round." data-lang-da="Vi aligner dokumentation, politikker og træning, så jeres team er trygge hele året.">We align documentation, policies, and training so your team stays confident year-round.</p>
    </div>
    <?php get_template_part('template-parts/accordion'); ?>
  </div>
</section>

<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>

<?php get_footer(); ?>

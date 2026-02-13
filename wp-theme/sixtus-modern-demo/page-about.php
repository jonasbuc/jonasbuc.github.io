<?php
/*
Template Name: About Sixtus
*/
get_header();
?>

<!-- About page breadcrumb -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- About intro -->
<section class="section">
  <div class="container split">
    <div>
      <h1 data-lang-en="About Sixtus" data-lang-da="Om Sixtus">About Sixtus</h1>
      <p data-lang-en="We are a compliance and technology partner helping organizations stay secure, accountable, and audit-ready." data-lang-da="Vi er en compliance- og teknologipartner der hjælper organisationer med at være sikre, ansvarlige og audit-klare.">We are a compliance and technology partner helping organizations stay secure, accountable, and audit-ready.</p>
      <div class="button-group">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Talk with us" data-lang-da="Tal med os">Talk with us</a>
        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/our-team')); ?>" data-lang-en="Meet the team" data-lang-da="Mød teamet">Meet the team</a>
      </div>
    </div>
    <div>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/governance.svg'); ?>" alt="Governance" loading="lazy">
    </div>
  </div>
</section>

<!-- Vision / mission / values -->
<section class="section">
  <div class="container grid grid-3">
    <div class="card">
  <h3 data-lang-en="Vision" data-lang-da="Vision">Vision</h3>
  <p data-lang-en="To make compliance a growth enabler through modern legal-tech." data-lang-da="At gøre compliance til en vækstdriver gennem moderne legal-tech.">To make compliance a growth enabler through modern legal-tech.</p>
    </div>
    <div class="card">
  <h3 data-lang-en="Mission" data-lang-da="Mission">Mission</h3>
  <p data-lang-en="Deliver actionable guidance, smart tooling, and lasting governance programs." data-lang-da="Levere handlingsklar rådgivning, smart tooling og varige governance-programmer.">Deliver actionable guidance, smart tooling, and lasting governance programs.</p>
    </div>
    <div class="card">
  <h3 data-lang-en="Core values" data-lang-da="Kerneværdier">Core values</h3>
  <p data-lang-en="Integrity, clarity, partnership, and measurable impact." data-lang-da="Integritet, klarhed, partnerskab og målbar impact.">Integrity, clarity, partnership, and measurable impact.</p>
    </div>
  </div>
</section>

<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>

<?php get_footer(); ?>

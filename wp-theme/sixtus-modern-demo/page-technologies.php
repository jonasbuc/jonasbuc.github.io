<?php
/*
Template Name: Technologies
*/
get_header();
?>

<!-- Technologies page breadcrumb -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- Technologies intro -->
<section class="section">
  <div class="container split">
    <div>
      <h1 data-lang-en="Technologies" data-lang-da="Teknologier">Technologies</h1>
      <p data-lang-en="Transform compliance with insight-driven software built for GDPR, privacy, and governance teams." data-lang-da="Transformér compliance med indsigtbaseret software bygget til GDPR, privacy og governance teams.">Transform compliance with insight-driven software built for GDPR, privacy, and governance teams.</p>
      <div class="button-group">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Request a demo" data-lang-da="Book en demo">Request a demo</a>
        <a class="btn btn-secondary" href="#how" data-lang-en="How it works" data-lang-da="Sådan virker det">How it works</a>
      </div>
    </div>
    <div>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/scanner.svg'); ?>" alt="Sixtus Scanner" loading="lazy">
    </div>
  </div>
</section>

<!-- Scanner overview (shared template part) -->
<?php get_template_part('template-parts/section-scanner'); ?>

<!-- How the software works -->
<section class="section" id="how">
  <div class="container split">
    <div>
  <h2 data-lang-en="How the software works" data-lang-da="Sådan virker softwaren">How the software works</h2>
  <p data-lang-en="Connect your data sources, identify sensitive information, and follow an action-ready remediation workflow." data-lang-da="Forbind jeres datakilder, identificér følsomme oplysninger og følg et handlingsklart remediation-flow.">Connect your data sources, identify sensitive information, and follow an action-ready remediation workflow.</p>
      <ul class="icon-list">
  <li data-lang-en="Automated scanning and classification." data-lang-da="Automatiseret scanning og klassificering."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy">Automated scanning and classification.</li>
  <li data-lang-en="Risk dashboards and executive reporting." data-lang-da="Risikodashboards og ledelsesrapportering."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy">Risk dashboards and executive reporting.</li>
  <li data-lang-en="Collaboration with your compliance advisors." data-lang-da="Samarbejde med jeres compliance-rådgivere."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy">Collaboration with your compliance advisors.</li>
      </ul>
    </div>
    <div class="card">
  <h3 data-lang-en="Scanner highlights" data-lang-da="Scanner highlights">Scanner highlights</h3>
  <p data-lang-en="Detect data in structured systems, document management, and cloud platforms in minutes." data-lang-da="Find data i strukturerede systemer, dokumenthåndtering og cloud-platforme på minutter.">Detect data in structured systems, document management, and cloud platforms in minutes.</p>
      <div class="badge">LCP-ready UI</div>
    </div>
  </div>
</section>

<!-- Page-level CTA panel (matches static technologies page) -->
<section class="section">
  <div class="container">
    <div class="cta-panel">
      <div>
        <h2 data-lang-en="Ready to strengthen your compliance posture?" data-lang-da="Klar til at styrke jeres compliance?">Ready to strengthen your compliance posture?</h2>
        <p data-lang-en="Let’s build a pragmatic roadmap for GDPR, governance, and audit readiness." data-lang-da="Lad os bygge et pragmatisk roadmap for GDPR, governance og audit-readiness.">Let’s build a pragmatic roadmap for GDPR, governance, and audit readiness.</p>
      </div>
      <div class="button-group">
        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Contact us" data-lang-da="Kontakt os">Contact us</a>
        <a class="btn btn-accent" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Book a demo" data-lang-da="Book en demo">Book a demo</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

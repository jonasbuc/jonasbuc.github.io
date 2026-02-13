<!-- Scanner highlight section -->
<?php $show_scanner_buttons = is_front_page(); ?>
<section class="section" id="scanner">
  <div class="container split">
    <div>
  <div class="badge" data-lang-en="Sixtus Scanner" data-lang-da="Sixtus Scanner">Sixtus Scanner</div>
  <h2 data-lang-en="Find hidden personal data across your systems" data-lang-da="Find skjulte persondata på tværs af jeres systemer">Find hidden personal data across your systems</h2>
  <p data-lang-en="The Sixtus Scanner detects GDPR-relevant data, maps data flows, and supports remediation in a single, intuitive platform." data-lang-da="Sixtus Scanner identificerer GDPR-relevante data, kortlægger dataflow og understøtter remediation i én intuitiv platform.">The Sixtus Scanner detects GDPR-relevant data, maps data flows, and supports remediation in a single, intuitive platform.</p>
      <ul class="icon-list">
        <li data-lang-en="Automated discovery across files, inboxes, and cloud platforms." data-lang-da="Automatiseret discovery på tværs af filer, indbakker og cloud-platforme."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy"> Automated discovery across files, inboxes, and cloud platforms.</li>
        <li data-lang-en="Visual risk scoring and reporting." data-lang-da="Visuel risikoscore og rapportering."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy"> Visual risk scoring and reporting.</li>
        <li data-lang-en="Action-ready remediation guidance." data-lang-da="Handlingsklar remediation-guidance."><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-check.svg'); ?>" alt="" width="20" height="20" loading="lazy"> Action-ready remediation guidance.</li>
      </ul>
<?php if ($show_scanner_buttons) : ?>
  <div class="button-group button-group--spaced">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/technologies')); ?>" data-lang-en="Explore the scanner" data-lang-da="Udforsk scanneren">Explore the scanner</a>
        <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Request a demo" data-lang-da="Book en demo">Request a demo</a>
      </div>
<?php endif; ?>
    </div>
    <div>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/scanner.svg'); ?>" alt="Sixtus Scanner interface" loading="lazy">
    </div>
  </div>
</section>

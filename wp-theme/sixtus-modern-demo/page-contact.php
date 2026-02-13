<?php
/*
Template Name: Contact
*/
get_header();
?>

<!-- Contact page breadcrumb -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- Contact details + form -->
<section class="section">
  <div class="container split">
    <div>
  <h1 data-lang-en="Contact" data-lang-da="Kontakt">Contact</h1>
  <p data-lang-en="Let’s align on your compliance priorities and the right technology mix." data-lang-da="Lad os afstemme jeres compliance-prioriteter og den rigtige teknologimix.">Let’s align on your compliance priorities and the right technology mix.</p>
      <div class="card">
  <p><strong data-lang-en="Address:" data-lang-da="Adresse:">Address:</strong> Store Regnegade 2, DK-1110 København K</p>
  <p><strong data-lang-en="Phone:" data-lang-da="Telefon:">Phone:</strong> +45 30 65 43 35</p>
  <p><strong data-lang-en="Email:" data-lang-da="Email:">Email:</strong> <a href="mailto:info@sixtus-compliance.dk">info@sixtus-compliance.dk</a></p>
      </div>
    </div>
    <div>
      <form class="form-grid" action="#" method="get" data-demo-form>
        <label>
          <span data-lang-en="Name" data-lang-da="Navn">Name</span>
          <input type="text" name="name" placeholder="Your name" data-lang-en="Your name" data-lang-da="Dit navn" required>
        </label>
        <label>
          <span data-lang-en="Email" data-lang-da="Email">Email</span>
          <input type="email" name="email" placeholder="you@company.com" data-lang-en="you@company.com" data-lang-da="dig@virksomhed.dk" required>
        </label>
        <label>
          <span data-lang-en="Company" data-lang-da="Virksomhed">Company</span>
          <input type="text" name="company" placeholder="Company name" data-lang-en="Company name" data-lang-da="Virksomhedens navn">
        </label>
        <label>
          <span data-lang-en="Message" data-lang-da="Besked">Message</span>
          <textarea name="message" rows="4" placeholder="How can we help?" data-lang-en="How can we help?" data-lang-da="Hvordan kan vi hjælpe?" required></textarea>
        </label>
        <button class="btn btn-primary" type="submit" data-lang-en="Send message" data-lang-da="Send besked">Send message</button>
        <p class="form-status" data-form-status role="status" aria-live="polite" aria-atomic="true" data-lang-en="Thanks! Your message is ready for review. We will get back to you shortly." data-lang-da="Tak! Din besked er klar til gennemgang. Vi vender hurtigt tilbage.">Thanks! Your message is ready for review. We will get back to you shortly.</p>
      </form>
    </div>
  </div>
</section>

<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>

<?php get_footer(); ?>

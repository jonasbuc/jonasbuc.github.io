<?php
/*
Template Name: Our Team
*/
get_header();
?>

<!-- Team page breadcrumb -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- Team grid + bios -->
<section class="section">
  <div class="container">
    <div class="section-header">
  <h1 data-lang-en="Our team" data-lang-da="Holdet bag Sixtus">Our team</h1>
  <p data-lang-en="Senior advisors, technologists, and compliance specialists." data-lang-da="Mød holdet bag Sixtus Compliance og Sixtus Technologies.">Senior advisors, technologists, and compliance specialists.</p>
    </div>
    <div class="grid grid-3">
  <div class="card team-card">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bo-pyskow.jpg'); ?>" alt="Bo Pyskow" width="253" height="244" loading="eager" decoding="async" onerror="this.onerror=null;this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.svg'); ?>';">
  <h3 data-lang-en="Bo Pyskow" data-lang-da="Bo Pyskow">Bo Pyskow</h3>
  <p data-lang-en="CEO & Co-Founder" data-lang-da="CEO & Co-Founder">CEO & Co-Founder</p>
  <div class="team-actions">
    <details class="team-bio">
      <summary class="btn btn-secondary" data-lang-en="Read more" data-lang-da="Læs mere">Læs mere</summary>
      <div class="team-bio__content">
      <p data-lang-en="Bo works professionally with all challenges in IT security and knows that risks and unforeseen issues are part of the job. He has more than 25 years of experience in IT, risk management, leadership, and problem solving, including more than 14 years as manager and director of the IT department at Saxo Bank. Bo is also military trained and has worked nine years as a master sergeant with F-16s, disposal of weapons and ammunition, and in the military police." data-lang-da="Bo arbejder professionelt alle udfordringer og ved at risici og uforudsete udfordringer er et vilkår, når man arbejder med IT-sikkerhed. Han har mere end 25 års erfaring med håndtering af IT, risikostyring, ledelse og problemløsning, heraf mere end 14 år som manager og direktør af IT-afdelingen i Saxo Bank. Derudover er Bo militært uddannet og arbejdet ni år som master sergent med bl.a. F-16, bortskaffelse af våben og ammunition og i militærpolitiet.">Bo arbejder professionelt alle udfordringer og ved at risici og uforudsete udfordringer er et vilkår, når man arbejder med IT-sikkerhed. Han har mere end 25 års erfaring med håndtering af IT, risikostyring, ledelse og problemløsning, heraf mere end 14 år som manager og direktør af IT-afdelingen i Saxo Bank. Derudover er Bo militært uddannet og arbejdet ni år som master sergent med bl.a. F-16, bortskaffelse af våben og ammunition og i militærpolitiet.</p>
      </div>
    </details>
    <div class="profile-links">
      <a class="profile-link" href="https://www.linkedin.com/in/bo-pyskow-2111383/" rel="noopener" aria-label="Bo Pyskow on LinkedIn">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path d="M4.98 3.5C4.98 4.88 3.85 6 2.5 6S0 4.88 0 3.5 1.13 1 2.5 1s2.48 1.12 2.48 2.5ZM0.5 23h4V7.5h-4V23Zm7 0h4V14.5c0-1.98.53-3.3 2.36-3.3 1.41 0 2.14 1.01 2.14 3.04V23h4v-9.9c0-4.24-2.26-6.2-5.28-6.2-2.45 0-3.54 1.34-4.17 2.28h-.05V7.5h-4c.05 1.05 0 15.5 0 15.5Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
  </div>
      </div>
  <div class="card team-card">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bjorn-leth-erichsen.jpg'); ?>" alt="Bjørn Leth Erichsen" width="696" height="895" loading="eager" decoding="async" onerror="this.onerror=null;this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.svg'); ?>';">
  <h3 data-lang-en="Bjørn Leth Erichsen" data-lang-da="Bjørn Leth Erichsen">Bjørn Leth Erichsen</h3>
  <p data-lang-en="CEO & Co-Founder" data-lang-da="CEO & Co-Founder">CEO & Co-Founder</p>
  <div class="team-actions">
    <details class="team-bio">
      <summary class="btn btn-secondary" data-lang-en="Read more" data-lang-da="Læs mere">Læs mere</summary>
      <div class="team-bio__content">
      <p data-lang-en="Bjørn holds a Master in Business Administration and Business Law from Aalborg University. His experience spans Denmark and Switzerland, with internal legal roles. He has worked for more than 15 years with compliance and risk management at Deloitte, Adecco Group, and Sitecore Corporation." data-lang-da="Bjørn har en Master i Business Administration og Business Law fra Aalborg Universitet. Hans erhvervserfaring spænder bredt og han har bl.a. haft interne advokatstillinger i Danmark og Schweiz. Her har han i mere end 15 år arbejdet med compliance og risk management hos bl.a. Deloitte, Adecco Group og Sitecore Corporation.">Bjørn har en Master i Business Administration og Business Law fra Aalborg Universitet. Hans erhvervserfaring spænder bredt og han har bl.a. haft interne advokatstillinger i Danmark og Schweiz. Her har han i mere end 15 år arbejdet med compliance og risk management hos bl.a. Deloitte, Adecco Group og Sitecore Corporation.</p>
      </div>
    </details>
    <div class="profile-links">
      <a class="profile-link" href="https://www.linkedin.com/in/letherichsen/" rel="noopener" aria-label="Bjørn Leth Erichsen on LinkedIn">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path d="M4.98 3.5C4.98 4.88 3.85 6 2.5 6S0 4.88 0 3.5 1.13 1 2.5 1s2.48 1.12 2.48 2.5ZM0.5 23h4V7.5h-4V23Zm7 0h4V14.5c0-1.98.53-3.3 2.36-3.3 1.41 0 2.14 1.01 2.14 3.04V23h4v-9.9c0-4.24-2.26-6.2-5.28-6.2-2.45 0-3.54 1.34-4.17 2.28h-.05V7.5h-4c.05 1.05 0 15.5 0 15.5Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
  </div>
      </div>
  <div class="card team-card">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.svg'); ?>" alt="Team member" loading="lazy">
  <h3 data-lang-en="Benoit Paquin" data-lang-da="Benoit Paquin">Benoit Paquin</h3>
  <p data-lang-en="Partner - Sixtus Tech." data-lang-da="Partner - Sixtus Tech.">Partner - Sixtus Tech.</p>
  <div class="team-actions">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Read more" data-lang-da="Læs mere">Læs mere</a>
    <div class="profile-links">
      <a class="profile-link" href="https://www.linkedin.com/in/benoit-paquin/" rel="noopener" aria-label="Benoit Paquin on LinkedIn">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path d="M4.98 3.5C4.98 4.88 3.85 6 2.5 6S0 4.88 0 3.5 1.13 1 2.5 1s2.48 1.12 2.48 2.5ZM0.5 23h4V7.5h-4V23Zm7 0h4V14.5c0-1.98.53-3.3 2.36-3.3 1.41 0 2.14 1.01 2.14 3.04V23h4v-9.9c0-4.24-2.26-6.2-5.28-6.2-2.45 0-3.54 1.34-4.17 2.28h-.05V7.5h-4c.05 1.05 0 15.5 0 15.5Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
  </div>
      </div>
  <div class="card team-card">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.svg'); ?>" alt="Team member" loading="lazy">
  <h3 data-lang-en="Jonas Funch" data-lang-da="Jonas Funch">Jonas Funch</h3>
  <p data-lang-en="Computational Linguist" data-lang-da="Computational Linguist">Computational Linguist</p>
  <div class="team-actions">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact')); ?>" data-lang-en="Read more" data-lang-da="Læs mere">Læs mere</a>
    <div class="profile-links">
      <a class="profile-link" href="https://www.linkedin.com/in/jonas-funch/" rel="noopener" aria-label="Jonas Funch on LinkedIn">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path d="M4.98 3.5C4.98 4.88 3.85 6 2.5 6S0 4.88 0 3.5 1.13 1 2.5 1s2.48 1.12 2.48 2.5ZM0.5 23h4V7.5h-4V23Zm7 0h4V14.5c0-1.98.53-3.3 2.36-3.3 1.41 0 2.14 1.01 2.14 3.04V23h4v-9.9c0-4.24-2.26-6.2-5.28-6.2-2.45 0-3.54 1.34-4.17 2.28h-.05V7.5h-4c.05 1.05 0 15.5 0 15.5Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
  </div>
      </div>
    </div>
  </div>
</section>

<!-- Additional contact prompt -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <h2 data-lang-en="More about the team" data-lang-da="Mere info">More about the team</h2>
      <p data-lang-en="If you have questions about compliance or data protection, we are ready to help." data-lang-da="Hvis du har spørgsmål eller er interesseret i at høre mere vores ydelser indenfor compliance eller databekyttelse?">Hvis du har spørgsmål eller er interesseret i at høre mere vores ydelser indenfor compliance eller databekyttelse?</p>
    </div>
    <p data-lang-en="Call us on +45 30 65 43 35 or email info@sixtus-compliance.dk." data-lang-da="Så ring til os på +45 30 65 43 35 eller send en mail på info@sixtus-compliance.dk.">Så ring til os på +45 30 65 43 35 eller send en mail på info@sixtus-compliance.dk.</p>
  </div>
</section>

<!-- Legacy contact/legal cards -->
<section class="section">
  <div class="container legal-grid">
    <div class="card">
      <h3 data-lang-en="Kontakt" data-lang-da="Kontakt">Kontakt</h3>
      <p>Sixtus Compliance &amp; Sixtus Technologies</p>
      <p>Store Regnegade 2<br>DK-1110 København K</p>
      <p>Copenhagen Legal Tech Hub</p>
      <p>CVR: 40649832 - 41483261</p>
      <p>Phone: +45 30 65 43 35</p>
      <p>Email: info@sixtus-compliance.dk</p>
    </div>
    <div class="card">
      <h3 data-lang-en="Mere om Sixtus" data-lang-da="Mere om Sixtus">Mere om Sixtus</h3>
      <ul>
        <li>Om Sixtus</li>
        <li>Privacy policy</li>
        <li>RSS Datatilsynet</li>
        <li>Datatilsynet afholdt webinar for foreninger</li>
        <li>Datatilsynet giver 51 kommuner alvorlig…</li>
        <li>RSS European Data Protection Board</li>
        <li>Register now for our conference…</li>
        <li>Stakeholder event on political advertising:…</li>
        <li>Data Protection Day 2026: keeping…</li>
      </ul>
    </div>
    <div class="card">
      <h3 data-lang-en="Certifications" data-lang-da="Certifications">Certifications</h3>
      <ul>
        <li>CIPM logo</li>
        <li>CIPP logo</li>
      </ul>
      <p>© Copyright 2026 | All Rights Reserved | Sixtus Compliance &amp; Sixtus Technologies</p>
  <p><a href="https://www.linkedin.com/company/sixtus-group/posts/?feedView=all" target="_blank" rel="noopener">LinkedIn</a></p>
      <p><a href="#content">Go to Top</a></p>
    </div>
  </div>
</section>

<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>

<?php get_footer(); ?>

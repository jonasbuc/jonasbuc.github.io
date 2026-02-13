</main>

<!-- Global footer -->
<footer>
  <div class="container footer-grid">
    <div>
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cannon.png'); ?>" alt="Sixtus logo" width="288" height="186" loading="lazy">
        <span>Sixtus Compliance</span>
      </a>
      <p>Compliance and Technologies for regulated, growing businesses.</p>
      <div class="badge">Software · Compliance · Governance · Consulting</div>
    </div>
    <div>
      <h4>Find out more</h4>
      <!-- Footer WordPress menu (assigned in Appearance → Menus) -->
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'menu',
            'fallback_cb' => '__return_false',
          )
        );
      ?>
    </div>
    <div>
      <h4>Contact</h4>
      <p>Store Regnegade 2<br>DK-1110 København K</p>
      <p>+45 30 65 43 35<br>
      <a href="mailto:info@sixtus-compliance.dk">info@sixtus-compliance.dk</a></p>
      <p>CVR: 40649832 - 41483261</p>
  <p><a href="https://www.linkedin.com/company/sixtus-group/posts/?feedView=all" target="_blank" rel="noopener">LinkedIn</a></p>
    </div>
    <div>
      <h4>Insights</h4>
      <div class="rss-placeholder">
        <strong>RSS module</strong>
        <p>Latest compliance updates and articles will appear here.</p>
      </div>
    </div>
  </div>

  <!-- Legal + utility links -->
  <div class="container footer-bottom">
    <div class="footer-links">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-lang-en="Home" data-lang-da="Hjem">Hjem</a>
      <span>|</span>
      <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" data-lang-en="Privacy Policy" data-lang-da="Privacy Policy">Privacy Policy</a>
    </div>
    <span>© <?php echo date('Y'); ?> Sixtus Compliance. All rights reserved.</span>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

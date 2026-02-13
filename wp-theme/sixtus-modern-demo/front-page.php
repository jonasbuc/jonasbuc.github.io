<?php get_header(); ?>

<!-- Homepage sections assembled from reusable template parts -->
<!-- Hero intro -->
<?php get_template_part('template-parts/hero'); ?>
<!-- Value pillars -->
<?php get_template_part('template-parts/section-why'); ?>
<!-- Compliance services grid -->
<?php get_template_part('template-parts/section-services'); ?>
<!-- Scanner highlight -->
<?php get_template_part('template-parts/section-scanner'); ?>
<!-- Scanner details + how it works -->
<?php get_template_part('template-parts/section-scanner-details'); ?>
<!-- DPO service deep-dive -->
<?php get_template_part('template-parts/section-compliance-details', null, array('include_extras' => true, 'section_id' => 'compliance-details')); ?>
<!-- Partner trust grid -->
<?php get_template_part('template-parts/section-trust'); ?>
<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>
<!-- Contact section -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>

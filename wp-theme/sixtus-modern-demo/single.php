<?php get_header(); ?>

<!-- Single post template with breadcrumbs + content -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<!-- Post content -->
<section class="section">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p class="badge">Article</p>
    <div>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<!-- Global CTA panel -->
<?php get_template_part('template-parts/section-cta'); ?>

<?php get_footer(); ?>

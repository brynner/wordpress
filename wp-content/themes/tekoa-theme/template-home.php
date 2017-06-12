<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/front-page/banner'); ?>
  <?php get_template_part('templates/front-page/solucao'); ?>
  <?php get_template_part('templates/front-page/funcionalidades'); ?>
  <?php get_template_part('templates/front-page/blog'); ?>
  <?php get_template_part('templates/front-page/depoimentos'); ?>
  <?php get_template_part('templates/front-page/marcas'); ?>
  <?php get_template_part('templates/front-page/clientes'); ?>
<?php endwhile; ?>
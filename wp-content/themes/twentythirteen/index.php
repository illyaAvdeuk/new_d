<?php get_header(); ?>
<div id="primary" class="content-area">
<div id="content" class="site-content" role="main">

<?php
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("paged=$page");
?>
<?php if ( have_posts() ) : ?><?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?><?php twentythirteen_paging_nav(); ?>
<?php else : ?><?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?></div><!-- #content --></div><!-- #primary -->
<?php if(function_exists('wp_cumulus_insert')) { wp_cumulus_insert(); } ?>
<?php get_sidebar(); ?><?php get_footer(); ?><?php?>
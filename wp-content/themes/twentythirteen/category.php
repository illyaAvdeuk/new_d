<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<h1 class="archive-title"><?php printf( __( ' %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

			<?php 
				$args = array(
				 'parent' => $cat,
				 'hide_empty' => 0,
				 'exclude' => '', // ID рубрики, которую нужно исключить
				 'number' => '0',
				 'orderby' => 'count',
				 'order' => 'DESC',
				 'pad_counts' => true
				);

				$catlist = get_categories($args);

				echo '<ul class="category_main">'; 
				foreach($catlist as $categories_item){
				 $terms = apply_filters('taxonomy-images-get-terms', '', array(
				 	'taxonomy' => 'category' 
				 ));
				 
				 if (!empty($terms)){
					 foreach((array)$terms as $term){
						 if ($term->term_id == $categories_item->term_id){
						 // выводим изображение рубрики
						 print '<li>
						 <div class="img_block"><a href="' . esc_url(get_term_link($term, $term->taxonomy)) . '" title="Нажмите, чтобы перейти в рубрику">' . wp_get_attachment_image($term->image_id, 'full');
						                               echo '</a></div>';
						 }
					 }
				 }
				 echo '<style>.category_page{display:none}</style><div class="center"><a class="cat_link" href=""><p>' . $categories_item->cat_name . '</p></a></div></li>';
				 }
				echo '</ul>';
			 ?>
<script>
$(document).ready(function() { 
	$('.category_main li').each(function() {
        var my_link = $('.img_block a', this).attr('href')
        $('.cat_link', this).attr('href',my_link)
    });
});
</script>


		<div class="clr"></div>

		<?php if ( have_posts() ) : ?>
		<ul class="category_page category_main">
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<div class="img_block">
					<a href="<?php the_permalink(); ?>">
						<?php if( get_field( "prod_img" ) ): ?>
						<img src="<?php the_field( "prod_img" ); ?>" alt="">
						<?php endif; ?>
					</a>
				</div>
				<div class="center">
					<a class="cat_link" href="<?php the_permalink(); ?>">
						<p><?php the_title(); ?></p>
					</a>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="clr"></div>
            <div class="pagin">
			<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
 </div>


		<?php else : ?>
           

			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		<div class="clr"></div>
		<div class="main_text_cat">
				<?php $str=term_description(); if(!empty($str)){echo apply_filters("the_content", $str);}?>
		</div>


		</div><!-- #content -->
		<div class="clr"></div>
	</div><!-- #primary -->
   <div class="clr"></div>
</div>
<div class="clr"></div>
<?php get_footer(); ?>
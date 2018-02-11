<?php
/*
Template Name: Шаблон Главной страницы
*/

get_header('main'); ?>
<div class="main_in">
	<?php get_sidebar(); ?>
	<div class="main_cont">
<h1 class="main_title"><span>Door service</span> - качество, надёжность, стиль.</h1>
		<div class="slider_my">
			<div class="carousel">

			    <div class="slides" style="width: 930px; height: 330px;"> 

			        <div class="slideItem" style="width: 256px; height: 211.2px; top: 54px; right: 34.6px; opacity: 1; z-index: 4; display: block;"> 
			            <a href="/katalog">
			                <img src="/slider/images/doors/1.jpg" alt="дверь 1 | DOOR SERVICE" style="width: 256px; height: 192px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 56px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 204.8px; height: 168.96px; top: 73.2px; right: -47.32px; opacity: 0; z-index: 3; display: none;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/2.jpg" alt="дверь 2 | DOOR SERVICE"  style="width: 204.8px; height: 153.6px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 4.80000000000001px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 204.8px; height: 168.96px; top: 73.2px; right: 772.52px; opacity: 0; z-index: 3; display: none;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/5.jpg" alt="дверь 5 | DOOR SERVICE"  style="width: 204.8px; height: 153.6px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 4.80000000000001px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 256px; height: 211.2px; top: 54px; right: 639.4px; opacity: 1; z-index: 4; display: block;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/4.jpg" alt="дверь 4 | DOOR SERVICE"  style="width: 256px; height: 192px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 56px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 320px; height: 264px; top: 30px; right: 473px; opacity: 1; z-index: 5; display: block;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/3.jpg" alt="дверь 3 | DOOR SERVICE"  style="width: 320px; height: 240px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 120px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 205px; height: 330px; top: 0px; right: 265px; opacity: 1; z-index: 6; display: block;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/6.jpg" alt="дверь 6 | DOOR SERVICE"  style="width: 205px; height: 500px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 200px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>

			        <div class="slideItem" style="width: 205px; height: 330px; top: 0px; right: 265px; opacity: 1; z-index: 6; display: block;">
			            <a href="/katalog">
			                <img src="/slider/images/doors/7.jpg" alt="дверь 7 | DOOR SERVICE"  style="width: 205px; height: 500px; display: inline-block;">
			            </a>
			        <div class="shadow" style="width: 205px; z-index: -1; position: absolute; margin: 0px; padding: 0px; border: none; overflow: hidden; left: 0px; bottom: 0px;"><div class="shadowLeft" style="position: relative; float: left;"></div><div class="shadowMiddle" style="position: relative; float: left; width: 200px;"></div><div class="shadowRight" style="position: relative; float: left;"></div></div></div>
				</div> 
			<div class="nextButton"></div><div class="prevButton"></div>
			</div>
		</div> <!-- .slider_my -->
		
		<div class="main_cat_title"> 
			<p>виды входных дверей</p>
		</div>
		<?php 
			$args = array(
			 'parent' => 0,
			 'hide_empty' => 0,
			 'exclude' => '1,7,5,49,69', // ID рубрики, которую нужно исключить
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
			 echo '<div class="center"><a class="cat_link" href=""><p>' . $categories_item->cat_name . '</p></a></div></li>';
			 }
			echo '</ul>';
		 ?>
		
	</div> <!-- .main_cont -->
	<div class="clr"></div>
</div> <!-- .main_in -->
</div>
<div class="main_text">
	<div class="main_in">
		
		<div id="owl1" class="owl-carousel">
			<?php if( get_field( "main1" ) ): ?>
				<div class="once">
					<?php the_field( "main1" ); ?>
				</div>
			<?php endif; ?>

			<?php if( get_field( "main2" ) ): ?>
				<div class="once">
					<?php the_field( "main2" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main3" ) ): ?>
				<div class="once">
					<?php the_field( "main3" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main4" ) ): ?>
				<div class="once">
					<?php the_field( "main4" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main5" ) ): ?>
				<div class="once">
					<?php the_field( "main5" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main6" ) ): ?>
				<div class="once">
					<?php the_field( "main6" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main7" ) ): ?>
				<div class="once">
					<?php the_field( "main7" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main8" ) ): ?>
				<div class="once">
					<?php the_field( "main8" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main9" ) ): ?>
				<div class="once">
					<?php the_field( "main9" ); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( "main10" ) ): ?>
				<div class="once">
					<?php the_field( "main10" ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div> <!-- .main_text -->
<script>
$(document).ready(function() { 
	$('.category_main li').each(function() {
        var my_link = $('.img_block a', this).attr('href')
        $('.cat_link', this).attr('href',my_link)
    });
});
</script>
<?php get_footer(); ?>
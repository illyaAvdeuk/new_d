<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php if( in_category(array( '5', '7' )) ){ ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content product_page" role="main" data-test="1">
			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
<?php } elseif (  in_category(array( '69' )) ) { ?>
    



	<div id="primary" class="content-area">
		<div id="content" class="site-content product_page" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="product_img">
				<div class="img_block">
					<div class="center">
						<?php if( get_field( "gal1" ) ): ?>
							<img src="<?php the_field( "gal1" ); ?>" alt="" class="main_pr_img" >
						<?php endif; ?>
					</div>
				</div>
				<div class="thumb_img">
					<ul>
						<?php if( get_field( "gal1" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal1" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal2" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal2" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal3" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal3" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal4" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal4" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal5" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal5" ); ?>" alt=""></div></li>
						<?php endif; ?>
					</ul>
				</div>
            </div>
				<script>
					$(document).ready(function() { 
						$(".thumb_img li").click(function(event){
							var my_src = $('img' ,this).attr('src')
							$('.main_pr_img').attr("src", my_src)

						});
					});
				</script>
				<div class="main_desc">
					<div class="desc">
                        <div class="pr_tab">
							<?php if( get_field( "product_price" ) ): ?>
								<div class="price_block">
									<p class="price">Цена: <?php the_field( "product_price" ); ?></p>
								</div>
							<a href="#feedback" class="zamer_order">Вызов замерщика</a>	
							<?php endif; ?>
							<div class="clr"></div>
							<div class="top">
								<ul>
									<?php if( get_field( "product_complit" ) ): ?>
										<li class="active" id="li2">Комплектация</li>
									<?php endif; ?>
									<?php if( get_field( "product_info" ) ): ?>
										<li id="li1">Информация</li>
									<?php endif; ?>
								</ul>
							</div>
							<div class="clr"></div>
							<div class="tab_desc">
								<?php if( get_field( "product_info" ) ): ?>
									<div class="li1 block">
										<div class="desc">
											<?php the_field( "product_info" ); ?>
										</div>
									</div>
								<?php endif; ?>
								<?php if( get_field( "product_complit" ) ): ?>
									<div class="li2 block active">
										<div class="desc">
											<?php the_field( "product_complit" ); ?>
										</div>
									</div>
								<?php endif; ?>
								
								<div class="li2"></div>
							</div>
						</div>
					<div class="clr"></div>
                    </div>
	            </div>
				<div class="clr"></div>
                <div class="dop"><p>Дополнительно:</p></div>
                <div class="clr"></div>
            	<div class="komp_link">
						<ul>
							<?php
							$values = get_field('kom1');
							if($values) {
							 	foreach($values as $check)
							{
							if (($check) == 'Замки') { echo '<li><a href="http://new.doorservice.kiev.ua/zamki"><div class="text_lock"><p>Замки</p></div></a></li>'; }
							if (($check) == 'Дверные ручки') { echo '<li><a href="http://new.doorservice.kiev.ua/dvernye-ruchki"><div class="text_knob"><p>Дверные ручки</p></div></a></li>'; }
							if (($check) == 'Цилиндры') { echo '<li><a href="http://new.doorservice.kiev.ua/tsilindry"><div class="text_cil"><p>Цилиндры</p></div></a></li>'; }
							if (($check) == 'Броненакладки') { echo '<li><a href="http://new.doorservice.kiev.ua/bronenakladki"><div class="text_bron"><p>Броненакладки</p></div></a></li>'; }
							if (($check) == 'Откосы МДФ') { echo '<li><a href="http://new.doorservice.kiev.ua/otkosy-mdf"><div class="text_otkos"><p>Откосы МДФ</p></div></a></li>'; }
							if (($check) == 'Порталы и капители') { echo '<li><a href="http://new.doorservice.kiev.ua/portaly-i-kapiteli"><div class="text_port"><p>Порталы и капители</p></div></a></li>'; }
							}
							} ?>
						</ul>
					</div>
            		<div class="clr"></div>
						
							<?php the_content(); ?>
					
					<div class="com_block">
						<h3>Похожие варианты дверей</h3>
						<div class="complect"></div>
					</div>
				<script>
					$(document).ready(function() { 
						$(".pr_tab .top li").click(function(event){
							var my = $(this).attr('id')
							$(".pr_tab .top li").removeClass('active')
							$(this).addClass('active')
							$('.tab_desc .block').removeClass('active')
							$('.tab_desc .block.'+my+'').addClass('active')

						});

						var my_related = $('.related-posts').html()
						$('.complect').html(my_related)
					});
				</script>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

    <style>
        #nav_menu-3{
            display: none;
        }
    </style>
<?php get_sidebar(); ?>
		






<?php } else { ?>




	<div id="primary" class="content-area">
		<div id="content" class="site-content product_page" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="product_img">
				<div class="img_block">
					<div class="center">
						<?php if( get_field( "gal1" ) ): ?>
							<img src="<?php the_field( "gal1" ); ?>" alt="" class="main_pr_img" >
						<?php endif; ?>
					</div>
				</div>
				<div class="thumb_img">
					<ul>
						<?php if( get_field( "gal1" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal1" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal2" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal2" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal3" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal3" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal4" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal4" ); ?>" alt=""></div></li>
						<?php endif; ?>
						<?php if( get_field( "gal5" ) ): ?>
							<li><div class="center"><img src="<?php the_field( "gal5" ); ?>" alt=""></div></li>
						<?php endif; ?>
					</ul>
				</div>
            </div>
				<script>
					$(document).ready(function() { 
						$(".thumb_img li").click(function(event){
							var my_src = $('img' ,this).attr('src')
							$('.main_pr_img').attr("src", my_src)

						});
					});
				</script>

				<div class="main_desc">
					<div class="desc">
						<div class="pr_tab">
							<?php if( get_field( "product_price" ) ): ?>
								<div class="price_block">
									<p class="price">Цена: <?php the_field( "product_price" ); ?></p>
								</div>
							<a href="#feedback" class="zamer_order">Вызов замерщика</a>	
							<?php endif; ?>
							<div class="clr"></div>
							<div class="top">
								<ul>
									<?php if( get_field( "product_complit" ) ): ?>
										<li class="active" id="li2">Комплектация</li>
									<?php endif; ?>
									<?php if( get_field( "product_info" ) ): ?>
										<li id="li1">Информация</li>
									<?php endif; ?>
								</ul>
							</div>
							<div class="clr"></div>
							<div class="tab_desc">
								<?php if( get_field( "product_info" ) ): ?>
									<div class="li1 block">
										<div class="desc">
											<?php the_field( "product_info" ); ?>
										</div>
									</div>
								<?php endif; ?>
								<?php if( get_field( "product_complit" ) ): ?>
									<div class="li2 block active">
										<div class="desc">
											<?php the_field( "product_complit" ); ?>
										</div>
									</div>
								<?php endif; ?>
								
								<div class="li2"></div>
							</div>
						</div>
					<div class="clr"></div>
                
					</div>
				</div>
						<?php the_content(); ?>
					<div class="clr"></div>
				<div class="clr"></div>
                <div class="dop"><p>Дополнительно:</p></div>
                <div class="clr"></div>
            	<div class="komp_link">
						<ul>
							<?php
							$values = get_field('kom1');
							if($values) {
							 	foreach($values as $check)
							{
							if (($check) == 'Замки') { echo '<li><a href="http://new.doorservice.kiev.ua/zamki"><div class="text_lock"><p>Замки</p></div></a></li>'; }
							if (($check) == 'Дверные ручки') { echo '<li><a href="http://new.doorservice.kiev.ua/dvernye-ruchki"><div class="text_knob"><p>Дверные ручки</p></div></a></li>'; }
							if (($check) == 'Цилиндры') { echo '<li><a href="http://new.doorservice.kiev.ua/tsilindry"><div class="text_cil"><p>Цилиндры</p></div></a></li>'; }
							if (($check) == 'Броненакладки') { echo '<li><a href="http://new.doorservice.kiev.ua/bronenakladki"><div class="text_bron"><p>Броненакладки</p></div></a></li>'; }
							if (($check) == 'Откосы МДФ') { echo '<li><a href="http://new.doorservice.kiev.ua/otkosy-mdf"><div class="text_otkos"><p>Откосы МДФ</p></div></a></li>'; }
							if (($check) == 'Порталы и капители') { echo '<li><a href="http://new.doorservice.kiev.ua/portaly-i-kapiteli"><div class="text_port"><p>Порталы и капители</p></div></a></li>'; }
							
							}
							} ?>
						</ul>
					</div>
            		<div class="clr"></div>
						<?php if(in_category(array(32,59,64))) : ?>
	                        <div class="frame">
	                            <h2>БЕСПЛАТНО</h2>
	                            <p>Замер, доставка, монтаж!</p>
	                        </div>
	                        <div class="single">
	                            <h3>ОСОБЕННОСТИ КОНСТРУКЦИИ</h3>
	                            <ul>
	                                <li>Размер индивидуальный по проему.</li>
	                                <li>Надежная уголковая металлоконструкция.</li>
	                                <li>Высокая тепло- и шумоизоляция.</li>
	                                <li>Основательная степень защиты.</li>
	                                <li>Срок изготовлени 10-14 рабочих дней.</li>
	                            </ul>
	                            <h3>ОТДЕЛКА ДВЕРИ</h3>
	                            <ul>
	                                <li>Снаружи МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок </a>и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет </a>на выбор).</li>
	                                <li>Внутри МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок</a> и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет</a> на выбор).</li>
	                                <li>Покраска рамы антикоррозионной краской.</li>
	                            </ul>
	                        </div>
	                <?php endif; ?>
	                <?php if(in_category(array(62,63,60))) : ?>
	                        <div class="frame">
	                            <h2>БЕСПЛАТНО</h2>
	                            <p>Замер, доставка, монтаж!</p>
	                        </div>
	                        <div class="single">
	                            <h3>ОСОБЕННОСТИ КОНСТРУКЦИИ</h3>
	                            <ul>
	                                <li>Размер индивидуальный по проему.</li>
	                                <li>Надежная уголковая металлоконструкция.</li>
	                                <li>Высокая тепло- и шумоизоляция.</li>
	                                <li>Основательная степень защиты.</li>
	                                <li>Срок изготовлени 14-17 рабочих дней.</li>
	                            </ul>
	                            <h3>ОТДЕЛКА ДВЕРИ</h3>
	                            <ul>
	                                <li>Снаружи МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок </a>и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет </a>на выбор).</li>
	                                <li>Внутри МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок</a> и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет</a> на выбор).</li>
	                                <li>Покраска рамы антикоррозионной краской.</li>
	                            </ul>
	                        </div>
	                        <?php endif; ?>
	                        <?php if(in_category(array(61,66,67))) : ?>
	                        <div class="frame">
	                            <h2>БЕСПЛАТНО</h2>
	                            <p>Замер, доставка, монтаж!</p>
	                        </div>
	                        <div class="single">
	                            <h3>ОСОБЕННОСТИ КОНСТРУКЦИИ</h3>
	                            <ul>
	                                <li>Размер индивидуальный по проему.</li>
	                                <li>Надежная уголковая металлоконструкция.</li>
	                                <li>Высокая тепло- и шумоизоляция.</li>
	                                <li>Основательная степень защиты.</li>
	                                <li>Срок изготовлени 21-24 рабочих дней.</li>
	                            </ul>
	                            <h3>ОТДЕЛКА ДВЕРИ</h3>
	                            <ul>
	                                <li>Снаружи МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок </a>и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет </a>на выбор).</li>
	                                <li>Внутри МДФ панель (<a href="http://new.doorservice.kiev.ua/risunki-frezerovaniya" target="_blank">рисунок</a> и <a href="http://new.doorservice.kiev.ua/obraztsy-plenok" target="_blank">цвет</a> на выбор).</li>
	                                <li>Покраска рамы антикоррозионной краской.</li>
	                            </ul>
	                        </div>
                        <?php endif; ?>
					<div class="clr"></div>
					
					<div class="com_block">
						<h3>Похожие варианты дверей</h3>
						<div class="complect"></div>
					</div>
					

				<script>
					$(document).ready(function() { 
						$(".pr_tab .top li").click(function(event){
							var my = $(this).attr('id')
							$(".pr_tab .top li").removeClass('active')
							$(this).addClass('active')
							$('.tab_desc .block').removeClass('active')
							$('.tab_desc .block.'+my+'').addClass('active')

						});

						var my_related = $('.related-posts').html()
						$('.complect').html(my_related)
					});
				</script>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

    <style>
        #nav_menu-3{
            display: none;
        }
    </style>
<?php get_sidebar(); ?>
<?php } ?>
<?php get_footer(); ?>

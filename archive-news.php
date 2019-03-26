<?php get_header(); ?>

<div class="p_page">
	<div class="p_page__welcome" style="background-color: #1664da;">
		<div class="p_page__welcome-block  d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="p_page__welcome-title p_projects__welcome-title text-center">
							<?php _e('Новини', 'child-theme'); ?>
						</div>
						<div class="p_page__welcome-img p_news__welcome-img">
							<img src="<?php echo carbon_get_theme_option('crb_news_p_thumb'); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="p_blog__welcome-arrow">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" class="d-flex align-items-center">
				  <g>
				    <path fill="#ffffff" d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
				  </g>
				</svg>
			</div>
		</div>
	</div>
	<div class="p_news__buttons">
		<div class="p_news__button p_news__button-active" onclick="showNews(event, 'Newsroom')">
			<?php _e('Newsroom', 'child-theme'); ?>
		</div>
		<div class="p_news__button" onclick="showNews(event, 'Podii')">
			<?php _e('Події', 'child-theme'); ?>
		</div>
	</div>
	<div class="b_news">
		<div class="container">
			<div id="Newsroom" class="row tabcontent">
				<?php 
			  $custom_query_news = new WP_Query( array( 
			  	'post_type' => 'news', 
			  	'posts_per_page' => 9,
			  	'meta_query' => array(
						array(
							'key'     => 'crb_news_newsroom',
							'value'   => 'no',
							'compare' => '=',
						),
					)
			  ) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-4">
					<div class="b_news__item">
						<div class="b_news__item-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<a href="<?php echo get_permalink(); ?>">
							<div class="b_news__item-title">
								<?php the_title(); ?>
							</div>
						</a>
						<div class="b_news__item-date">
							23 серпня 2018
						</div>
						<div class="b_news__item-more d-flex align-items-center justify-content-end">
							<a href="<?php echo get_permalink(); ?>">
								<span><?php _e('Читати більше', 'child-theme'); ?></span>
							</a>
							<a href="<?php echo get_permalink(); ?>">
								<div class="arrow-blue">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
									<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
										C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
										c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
								</div>
							</a>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div id="Podii" class="row tabcontent">
				<?php 
			  $custom_query_news = new WP_Query( array( 
			  	'post_type' => 'news', 
			  	'posts_per_page' => 9,
			  	'meta_query' => array(
						array(
							'key'     => 'crb_news_podii',
							'value'   => 'no',
							'compare' => '=',
						),
					)
			  ) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-4">
					<div class="b_news__item">
						<div class="b_news__item-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<a href="<?php echo get_permalink(); ?>">
							<div class="b_news__item-title">
								<?php the_title(); ?>
							</div>
						</a>
						<div class="b_news__item-date">
							23 серпня 2018
						</div>
						<div class="b_news__item-more d-flex align-items-center justify-content-end">
							<a href="<?php echo get_permalink(); ?>">
								<span><?php _e('Читати більше', 'child-theme'); ?></span>
							</a>
							<a href="<?php echo get_permalink(); ?>">
								<div class="arrow-blue">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
									<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
										C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
										c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
								</div>
							</a>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<section id="b_main_help">
	<?php get_template_part('blocks/main/b_main_help', 'default') ?>
</section>

<?php get_footer(); ?>
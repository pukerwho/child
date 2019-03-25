<div class="b_news">
	<div class="b_news__title text-center">
		<?php _e('Останні новини', 'child-theme'); ?>
	</div>
	<div class="container">
		<div class="row">
			<?php 
		  $custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 3) );
		  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
			<div class="col-md-4">
				<div class="b_news__item">
					<div class="b_news__item-img">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</div>
					<div class="b_news__item-title">
						<?php the_title(); ?>
					</div>
					<div class="b_news__item-date">
						23 серпня 2018
					</div>
					<div class="b_news__item-more d-flex align-items-center justify-content-end">
						<a href="<?php echo get_permalink(); ?>"><span><?php _e('Читати більше', 'child-theme'); ?></span></a>
						<div class="arrow-blue">
							<a href="<?php echo get_permalink(); ?>">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
								<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
									C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
									c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
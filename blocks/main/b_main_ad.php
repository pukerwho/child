<div class="b_ad">
	<div class="b_ad__title text-center">
		<?php _e('Анонси подій', 'child-theme'); ?>
	</div>
	<div class="container p-relative">
		<div class="arrow-left swiper-ad-prev">
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
				<path style="fill:#f6a501;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
					C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
					c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
			</svg>
		</div>
		<div class="arrow-right swiper-ad-next">
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
				<path style="fill:#f6a501;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
					C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
					c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
			</svg>
		</div>
		<div class="row align-items-center b_ad__row">
			<div class="swiper-container ad-item-swiper">
				<div class="swiper-wrapper">
					<?php $custom_query_news = new WP_Query( array( 'post_type' => 'ad', 'posts_per_page' => -1, 'order' => 'ASC') );
				  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				  	<div class="swiper-slide">
							<div class="b_ad__img col-md-5 offset-md-1 b_ad__img">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="col-md-6 offset-md-6">
								<div class="b_ad__item">
									<div class="b_ad__item-topstick"></div>
									<div class="b_ad__item-leftstick"></div>
									<div class="b_ad__item-title">
										<?php the_title(); ?>
									</div>
									<div class="b_ad__item-text">
										<?php the_content(); ?>
									</div>
									<div class="b_ad__item-more d-flex justify-content-end align-items-center">
										<div class="arrow-yellow">
											<a href="<?php echo get_permalink(); ?>">
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" class="d-flex">
												<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
													C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
													c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
											</a>
										</div>
										<a href="<?php echo get_permalink(); ?>">
											<span>
												<?php _e('Читати більше', 'child-theme'); ?>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
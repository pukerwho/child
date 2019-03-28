<?php get_header(); ?>

<div class="single">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single__welcome" style="background-color: #f6a501;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single__back">
						<div class="single__back-btn">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" width="5.5px" height="9px">
							<path fill="rgba(22, 100, 218, 0.74);" d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"/>
						</div>
						Назад
					</div>
					<div class="single__title">
						<?php the_title(); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-25">
			<?php if(carbon_get_the_post_meta('crb_blogs_description')): ?>
			<div class="col-md-10">
				<div class="single__description">
					<?php echo carbon_get_the_post_meta('crb_blogs_description') ?>
				</div>
			</div>
			<?php endif ?>
			<div class="col-md-12">
				<div class="single__img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">	
				</div>
			</div>
			<div class="col-md-12">
				<div class="single__content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php if(carbon_get_the_post_meta('crb_blogs_photos')): ?>
	<div class="container">
		<div class="row mb-40">
			<div class="col-md-12">
				<div class="single__subtitle">
					<?php _e('Фото галерея', 'child-theme'); ?>	
				</div>
			</div>
		</div>
	</div>
	<div class="single__gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="swiper-container single-gallery-swiper">
						<div class="swiper-wrapper">
							<?php 
							$blogs_photos = carbon_get_the_post_meta('crb_blogs_photos');
							foreach ( $blogs_photos as $blogs_photo ): ?>
								<?php $photo_src = wp_get_attachment_image_src($blogs_photo, 'large'); ?>
								<div class="swiper-slide">
									<div class="single__gallery-img">
										<a href="<?php echo $photo_src[0]; ?>" data-lightbox="blogs" data-title="<?php the_title(); ?>">
											<img src="<?php echo $photo_src[0]; ?>"/>
										</a>
								  </div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Pagination -->
		<div class="single-gallery-nav">
	    <div class="swiper-single-prev">
	    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
	    </div>
	    <div class="swiper-pagination single-gallery-pagination"></div>
	    <div class="swiper-single-next" style="transform: rotateY(180deg);">
	    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
	    </div>	
		</div>
	</div>
	<?php endif ?>
	<?php endwhile; else: ?>
		<p><?php _e('Ничего не найдено'); ?></p>
	<?php endif; ?>
</div>

<section id="b_main_help">
	<?php get_template_part('blocks/main/b_main_help', 'default') ?>
</section>

<?php get_footer(); ?>
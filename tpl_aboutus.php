<?php
/*
Template Name: Про нас
*/
?>

<?php get_header(); ?>

<div class="p_page">
	<div class="p_page__welcome" style="background-color: #1664da;">
		<div class="p_page__welcome-block d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="p_page__welcome-img" style="bottom: -2px;">
							<img src="<?php echo carbon_get_theme_option('crb_aboutus_p_thumb'); ?>" alt="">
						</div>
						<div class="p_page__welcome-title text-center">
							<?php _e('Про нас', 'child-theme'); ?>
						</div>
						<div class="p_page__welcome-heading">
							<?php _e('Асоціація', 'child-theme'); ?>
						</div>
						<div class="p_page__welcome-text">
							<?php echo carbon_get_theme_option('crb_aboutus_p_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="p_about__members">
	<div class="p_about__buttons d-flex justify-content-center">
		<div class="p_about__button p_about__button-active" onclick="showMemebers(event, 'Team')">
			<?php _e('Наша команда', 'child-theme'); ?>
		</div>
		<div class="p_about__button" onclick="showMemebers(event, 'Rada')">
			<?php _e('Опікунська рада', 'child-theme'); ?>
		</div>
	</div>
	<div class="container">
		<div id="Team" class="row tabcontent">
			<?php 
		  $custom_query_news = new WP_Query( array( 
		  	'post_type' => 'members', 
		  	'posts_per_page' => 6,
		  ) );
		  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-4">
					<div class="p_about__member">
						<div class="p_about__member-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="p_about__member-title">
							<?php the_title(); ?>
						</div>
						<div class="p_about__member-subtitle">
							<?php echo carbon_get_the_post_meta('crb_members_position'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div id="Rada" class="row tabcontent">
			<?php 
		  $custom_query_news = new WP_Query( array( 
		  	'post_type' => 'members', 
		  	'posts_per_page' => 6,
		  	'meta_query' => array(
					array(
						'key'     => 'crb_members_rada',
						'value'   => 'no',
						'compare' => '=',
					),
				)
		  ) );
		  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-4">
					<div class="p_about__member">
						<div class="p_about__member-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="p_about__member-title">
							<?php the_title(); ?>
						</div>
						<div class="p_about__member-subtitle">
							<?php echo carbon_get_the_post_meta('crb_members_position'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="/members">
					<div class="p_about__btn-more">
						<?php _e('Дивитись всіх', 'child-theme'); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="p_about__partners d-flex align-items-center text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p_about__partners-title">
					<?php _e('Партнери', 'child-theme'); ?>
				</div>
				<div class="p_about__partners-list">
					<?php
					$partners_info = carbon_get_theme_option( 'crb_partners' );
					foreach ( $partners_info as $partner_info ): ?>
						<img src="<?php echo $partner_info['crb_partners_img'] ?>" alt="">
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="p_about__reports">
	.c
</div>

<section id="b_main_img">
	<?php get_template_part('blocks/main/b_main_img', 'default') ?>
</section>

<section id="b_main_news">
	<?php get_template_part('blocks/main/b_main_news', 'default') ?>
</section>

<?php get_footer(); ?>
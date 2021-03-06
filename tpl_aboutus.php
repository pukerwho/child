<?php
/*
Template Name: Про нас
*/
?>

<?php get_header(); ?>

<section id="p_aboutus">
	<div class="p_page">
		<div class="p_page__welcome" style="background-color: #1664da;">
			<div class="p_page__welcome-block d-flex align-items-center">
				<div class="container height-100">
					<div class="row height-100">
						<div class="col-md-12">
							<div class="p_page__welcome-img" style="bottom: -51px; height: auto;">
								<img src="<?php echo carbon_get_theme_option('crb_aboutus_p_thumb'); ?>" alt="">
							</div>
							<div class="p_page__welcome-title text-center" style="padding-top: 70px;">
								<?php _e('Про нас', 'child-theme'); ?>
							</div>
							<div class="p_page__welcome-content">
								<div class="pc-show">
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
		</div>
	</div>
	<div class="mobile-show">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
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
	<div class="p_about__members">
		<div class="p_about__buttons d-flex justify-content-center" style="padding-top: 123px;padding-bottom: 40px;">
			<div class="p_about__button p_about__button-active" onclick="showMemebers(event, 'Team')">
				<?php _e('Наша команда', 'child-theme'); ?>
			</div>
			<div class="p_about__button" onclick="showMemebers(event, 'Rada')">
				<?php _e('Опікунська рада', 'child-theme'); ?>
			</div>
		</div>
		<div class="container">
			<div id="Team" class="tabcontent">
				<div class="row member-list">
				<?php 
			  $custom_query_member_team = new WP_Query( array( 
			  	'post_type' => 'members', 
			  	'posts_per_page' => 6,
			  	'orderby' => 'menu_order',
			  	'order' => 'ASC'
			  ) );
			  if ($custom_query_member_team->have_posts()) : while ($custom_query_member_team->have_posts()) : $custom_query_member_team->the_post(); ?>
					<div class="col-md-4 p_about__member-team">
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
						<div class="p_about__btn-more members_team_more">
							<?php _e('Дивитись всіх', 'child-theme'); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="Rada" class="tabcontent">
				<div class="member-list row">
					<?php 
				  $custom_query_member_rada = new WP_Query( array( 
				  	'post_type' => 'members', 
				  	'posts_per_page' => 6,
				  	'orderby' => 'menu_order', 
				  	'order' => 'ASC',
				  	'meta_query' => array(
							array(
								'key'     => 'crb_members_rada',
								'value'   => 'no',
								'compare' => '=',
							),
						)
				  ) );
				  if ($custom_query_member_rada->have_posts()) : while ($custom_query_member_rada->have_posts()) : $custom_query_member_rada->the_post(); ?>
						<div class="col-md-4 p_about__member-rada">
							<?php get_template_part( 'blocks/about/about-member' ); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="p_about__btn-more members_rada_more">
							<?php _e('Дивитись всіх', 'child-theme'); ?>
						</div>
					</div>
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
						<div class="swiper-partner-prev">
				    	<img src="<?php bloginfo('template_url') ?>/img/about-arrow.svg" width="40px" alt="">
				    </div>
				    <div class="swiper-partner-next" style="transform: rotateY(180deg);">
				    	<img src="<?php bloginfo('template_url') ?>/img/about-arrow.svg" width="40px" alt="">
				    </div>
						<div class="swiper-container about-partner-swiper">
							<div class="swiper-wrapper">
								<?php
								$partners_info = carbon_get_theme_option( 'crb_partners' );
								foreach ( $partners_info as $partner_info ): ?>
									<div class="swiper-slide">
										<img src="<?php echo $partner_info['crb_partners_img'] ?>" alt="">	
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="swiper-pagination about-partner-pagination"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="p_about__reports">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p_about__reports-title">
						<?php _e('Звітність', 'child-theme'); ?>	
					</div>
					<div class="p_about__reports-text">
						Щомісяця до 20 числа ми готуємо фінансовий звіт, де вказуємо усі пожертви, що ми отримали, та на що ми їх витратили.
					</div>
					<div class="b_reports__buttons d-flex justify-content-center" style="margin-bottom: 80px;">
						<div class="b_reports__button b_reports__button-active" onclick="showReports(event, 'Finreport')">
							<?php _e('Фінансові звіти ', 'child-theme'); ?>
						</div>
						<div class="b_reports__button" onclick="showReports(event, 'Finstructura')">
							<?php _e('Структура фінансування', 'child-theme'); ?>
						</div>
					</div>
					<div id="Finreport" class="tabcontent-report p-relative">
						<div class="p_about__reports-items">
							<div class="swiper-reports-prev swiper-reports-prev-finreport">
					    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
					    </div>
					    <div class="swiper-reports-next swiper-reports-next-finreport">
					    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
					    </div>
							<div class="swiper-container about-reports-swiper about-reports-finreport-swiper">
								<div class="swiper-wrapper">
									<?php 
									$custom_query_reports = new WP_Query( array( 
										'post_type' => 'reports', 
										'posts_per_page' => -1,
										'meta_query' => array(
											array(
												'key'     => 'crb_reports_finreport',
												'value'   => 'no',
												'compare' => '=',
											),
										)
									) );
									if ($custom_query_reports->have_posts()) : while ($custom_query_reports->have_posts()) : $custom_query_reports->the_post(); ?>
										<div class="swiper-slide">
											<a href="<?php echo carbon_get_the_post_meta('crb_reports_file') ?>" download>
												<div class="p_about__reports-item">
													<img src="<?php bloginfo('template_url') ?>/img/xls.svg" width=65px alt="">
													<p>
														<?php the_title(); ?>
													</p>
												</div>
											</a>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
						</div>
						<div class="swiper-pagination about-reports-pagination about-reports-finreport-pagination"></div>
					</div>
					<div id="Finstructura" class="tabcontent-report p-relative">
						<div class="p_about__reports-items">
							<div class="swiper-reports-prev swiper-reports-prev-finstructura">
					    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
					    </div>
					    <div class="swiper-reports-next swiper-reports-next-finstructura">
					    	<img src="<?php bloginfo('template_url') ?>/img/single-arrow.svg" width="40px" alt="">
					    </div>
							<div class="swiper-container about-reports-swiper about-reports-finstructura-swiper">
								<div class="swiper-wrapper">
									<?php 
									$custom_query_reports = new WP_Query( array( 
										'post_type' => 'reports', 
										'posts_per_page' => 1,
										'meta_query' => array(
											array(
												'key'     => 'crb_reports_finstructura',
												'value'   => 'no',
												'compare' => '=',
											),
										)
									) );
									if ($custom_query_reports->have_posts()) : while ($custom_query_reports->have_posts()) : $custom_query_reports->the_post(); ?>
										<div class="swiper-slide">
											<a href="<?php echo carbon_get_the_post_meta('crb_reports_file') ?>" download>
												<div class="p_about__reports-item">
													<img src="<?php bloginfo('template_url') ?>/img/xls.svg" width=65px alt="">
													<p>
														<?php the_title(); ?>
													</p>
												</div>
											</a>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
						</div>
						<div class="swiper-pagination about-reports-pagination about-reports-finstructura-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</section>

<section id="b_main_img">
	<?php get_template_part('blocks/main/b_main_img', 'default') ?>
</section>

<section id="b_main_news">
	<?php get_template_part('blocks/main/b_main_news', 'default') ?>
</section>

<?php get_footer(); ?>
<div class="p_page">
	<div class="p_page__welcome"  style="background-color: #f6a501;">
		<div class="p_page__welcome-block p_projects__welcome-block d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="p_page__welcome-title p_projects__welcome-title text-center">
							<?php _e('Наші проекти', 'child-theme'); ?>
						</div>
						<div class="p_page__welcome-img p_projects__welcome-img">
							<img src="img/projects-welcome.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="p_projects__welcome-arrow">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" class="d-flex align-items-center">
				  <g>
				    <path fill="#ffffff" d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
				  </g>
				</svg>
			</div>
		</div>
	</div>
</div>

<section id="b_main_projects">
	<?php get_template_part('blocks/main/b_main_projects', 'default') ?>
</section>

<section id="b_main_img">
	<?php get_template_part('blocks/main/b_main_img', 'default') ?>
</section>

<section id="b_main_news">
	<?php get_template_part('blocks/main/b_main_news', 'default') ?>
</section>
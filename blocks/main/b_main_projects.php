<div class="b_projects">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="b_projects__flex">
				<?php 
			  $custom_query_projects = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => 4) );
			  if ($custom_query_projects->have_posts()) : while ($custom_query_projects->have_posts()) : $custom_query_projects->the_post(); ?>
			  	<div class="b_projects__block">
						<div class="b_projects__item">
							<div class="b_projects__stick"></div>
							<div class="b_projects__item-img">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<div class="b_projects__item-title">
										<?php the_title(); ?>
									</div>
									<div class="b_projects__item-date">
										Проект від <span>12.01.2016</span>
									</div>
								</div>
								<div class="arrow-blue">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
									<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
										C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
										c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
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
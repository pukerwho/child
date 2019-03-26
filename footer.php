    </section>
    <footer id="footer" class="footer">
    	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer__top d-flex justify-content-between">
							<div class="footer__logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php bloginfo('template_url') ?>/img/logo.png" srcset="img/logo-01@2x.png 2x, img/logo-01@3x.png 3x" alt="Logo">
								</a>
							</div>
							<div class="footer__social d-flex align-items-center">
								<li>
									<a href="<?php echo carbon_get_theme_option('crb_contact_facebook'); ?>" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="19" viewBox="0 0 9 19">
										  <path fill="#38569A" fill-rule="evenodd" d="M5.237.048C3.519.266 2.404 1.29 2.027 2.985c-.07.327-.092.628-.11 1.774L1.89 6.145l-.934.008-.934.013L.01 7.831 0 9.5h1.904V19h4.028V9.5h2.7l.018-.1c.013-.053.084-.715.159-1.469.075-.754.15-1.464.164-1.582l.026-.204H5.927l.014-1.146c.013-1.299.035-1.382.358-1.591l.177-.118 1.235-.013 1.23-.013V0L7.23.004C6.282.01 5.388.026 5.237.048z"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="<?php echo carbon_get_theme_option('crb_contact_instagram'); ?>" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
									    <defs>
								        <linearGradient id="a" x1="50%" x2="50%" y1="0%" y2="100%">
							            <stop offset="0%" stop-color="#A73991"/>
							            <stop offset="51.498%" stop-color="#E51E49"/>
							            <stop offset="100%" stop-color="#EE8930"/>
								        </linearGradient>
									    </defs>
									    <path fill="url(#a)" fill-rule="nonzero" d="M16.059 0H4.94C2.224 0 0 2.224 0 4.941V16.06C0 18.776 2.224 21 4.941 21H16.06C18.776 21 21 18.776 21 16.059V4.94C21 2.224 18.776 0 16.059 0zm3.707 16.059a3.71 3.71 0 0 1-3.705 3.705H4.94a3.71 3.71 0 0 1-3.705-3.705V8.646H5.2a5.796 5.796 0 0 0-.564 2.471 5.873 5.873 0 0 0 5.867 5.867 5.873 5.873 0 0 0 5.867-5.867c0-.885-.212-1.716-.563-2.47h3.962v7.412h-.002zm-4.633-4.942A4.638 4.638 0 0 1 10.5 15.75a4.638 4.638 0 0 1-4.633-4.633A4.638 4.638 0 0 1 10.5 6.484a4.638 4.638 0 0 1 4.633 4.633zm-.122-3.705C13.935 6.102 12.324 5.25 10.5 5.25c-1.824 0-3.435.853-4.51 2.162H1.233v-2.47A3.71 3.71 0 0 1 4.94 1.235h11.117a3.71 3.71 0 0 1 3.705 3.705v2.471h-4.75zm2.843-4.05v1.603c0 .369-.302.67-.668.67h-1.691a.675.675 0 0 1-.673-.67V3.362c0-.368.302-.67.673-.67h1.69c.37 0 .67.302.67.67z"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="<?php echo carbon_get_theme_option('crb_contact_youtube'); ?>" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19">
									    <path fill="#FF001D" fill-rule="nonzero" d="M7.278.081c-2.479.085-4.004.211-4.56.38C1.467.841.696 1.861.364 3.573-.058 5.75-.125 11.703.24 14.705c.232 1.907.854 3.079 1.931 3.61 1.028.515 3.424.675 10.288.683 4.65 0 8.007-.101 9.242-.295 1.8-.287 2.76-1.544 3.06-3.998.364-3.002.298-8.956-.125-11.132-.323-1.704-1.061-2.69-2.313-3.104C21.154.081 13.246-.12 7.278.081zM13.437 7.2c2.039 1.24 3.705 2.285 3.705 2.319 0 .034-1.666 1.08-3.705 2.32a548.674 548.674 0 0 0-3.896 2.386l-.19.118V4.695l.19.118c.1.067 1.848 1.138 3.896 2.387z"/>
										</svg>
									</a>
								</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer__heading">
							Про нас
						</div>
							<?php wp_nav_menu([
                  'theme_location' => 'aboutus_menu',
                  'container' => 'div',
                  'container_class' => 'aboutus_menu',
                  'menu_class' => 'footer__links'
                ]); ?>
					</div>
					<div class="col-md-3">
						<div class="footer__heading">
							Проекти
						</div>
						<div class="footer__links">
							<?php 
						  $custom_query_news = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => 4) );
						  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
						  	<li>
									<a href="<?php echo get_permalink(); ?>">
										<?php the_title(); ?>
									</a>	
								</li>
						  <?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer__heading">
							Новини
						</div>
						<?php wp_nav_menu([
              'theme_location' => 'news_menu',
              'container' => 'div',
              'container_class' => 'news_menu',
              'menu_class' => 'footer__links'
            ]); ?>
					</div>
					<div class="col-md-2">
						<?php wp_nav_menu([
              'theme_location' => 'footer_menu',
              'container' => 'div',
              'container_class' => 'footer_menu',
              'menu_id' => 'footer_menu',
              'menu_class' => 'footer__links'
            ]); ?>
					</div>
					<div class="col-md-2">
						<div class="footer__links text-right">
							<?php
							$phones = carbon_get_theme_option( 'crb_contact_phones' );
							foreach ( $phones as $phone ): ?>
								<a href="tel:<?php echo $phone['crb_contact_phone'] ?>" class="color-blue font-weight-bold"><?php echo $phone['crb_contact_phone'] ?></a>
							<?php endforeach; ?>		
							<li>
								<a href="mailto:<?php echo carbon_get_theme_option('crb_contact_email'); ?>" class="color-blue font-weight-bold">
									<?php echo carbon_get_theme_option('crb_contact_email'); ?>
								</a>	
							</li>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer__copyright">
							<?php echo carbon_get_theme_option('crb_copyright'); ?>
						</div>
					</div>
				</div>
			</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
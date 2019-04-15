<div class="b_bottom d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="b_bottom__title">
					<?php _e('Разом ми змінюємо життя дітей накраще!', 'child-theme'); ?>
				</div>
				<a href="/donate">
				<div class="b_bottom__btn d-flex align-items-center">
					<div class="arrow-yellow">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" class="d-flex">
						<path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
							C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
							c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
					</div>
					<span>
						<?php _e('Підтримати', 'child-theme'); ?>
					</span>
				</div>
				</a>
				<div class="b_bottom__partner">
					<?php
					$partners_info = carbon_get_theme_option( 'crb_partners' );
					foreach ( array_slice($partners_info, 0, 4)  as $partner_info ): ?>
						<div class="b_bottom__partner-img">
							<img src="<?php echo $partner_info['crb_partners_img'] ?>" alt="">	
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
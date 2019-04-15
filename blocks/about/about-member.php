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
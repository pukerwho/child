<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/b_welcome', 'default') ?>
</section>

<section id="b_main_about">
	<?php get_template_part('blocks/main/b_main_about', 'default') ?>
</section>

<section id="b_main_projects">
	<?php get_template_part('blocks/main/b_main_projects', 'default') ?>
</section>

<section id="b_main_img">
	<?php get_template_part('blocks/main/b_main_img', 'default') ?>
</section>

<section id="b_main_news">
	<?php get_template_part('blocks/main/b_main_news', 'default') ?>
</section>

<section id="b_main_ad">
	<?php get_template_part('blocks/main/b_main_ad', 'default') ?>
</section>

<section id="b_main_help">
	<?php get_template_part('blocks/main/b_main_help', 'default') ?>
</section>

<?php get_footer(); ?>
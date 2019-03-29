<?php
/*
Template Name: Підтримати
*/
?>

<?php get_header(); ?>

<div class="p_donate">
	<div class="p_donate__title text-center">
		<?php _e('Як допомогти?', 'child-theme'); ?>
	</div>
	<div class="p_donate__buttons d-flex justify-content-center">
		<div class="p_donate__button p_donate__button-active">
			<?php _e('Разова допомога', 'child-theme'); ?>
		</div>
		<div class="p_donate__button">
			<?php _e('Регулярна допомога', 'child-theme'); ?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="p_donate__flex">
					<div class="p_donate__item-first">
						<div class="p_donate__subtitle">
							<?php _e('Я хочу внести суму', 'child-theme'); ?>
						</div>
						<input type="radio" class="radio" id="dotane_one">
						<label for="dotane_one">100 грн</label>
						<input type="radio" class="radio" id="dotane_two">
						<label for="dotane_two">250 грн</label>
						<input type="radio" class="radio" id="dotane_three">
						<label for="dotane_three">500 грн</label>
						<input type="radio" class="radio" id="dotane_four">
						<label for="dotane_four">1000 грн</label>
					</div>
					<div class="p_donate__item-second">
						<div class="p_donate__subtitle">
							<?php _e('Персональні дані', 'child-theme'); ?>
						</div>
						<div class="p_donate__form">
							<input type="text" placeholder="Ваше ім'я">
							<input type="email" placeholder="E-mail">
							<input type="number" placeholder="Телефон">	
						</div>
					</div>
					<div class="p_donate__item-third">
						<div class="p_donate__subtitle">
							<?php _e('Призначення платежу', 'child-theme'); ?>
						</div>
						<div class="p_donate__form">
							<input type="text" placeholder="Ваше ім'я">
						</div>
						<div class="p_donate__notice">
							<?php _e('Ви також можете пожертвувати на статутну діяльність, і кошти будуть використані на актуальні потреби фонду. Для цього залиште поле порожнім', 'child-theme'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p_donate__accept">
					<input class="checkbox" id="donate_accept" type="checkbox">
					<label for="donate_accept">
						<?php _e('Я погоджуюсь з тим, що перераховуючи кошти за адресним призначенням платежу (наприклад, для конкретної дитини або на конкретний проект) моє пожертвування повністю або частково може бути використано на інші статутні цілі в разі, якщо використання даних коштів за призначенням неможливо або неефективно (наприклад, в разі відміни лікування дитині, смерті дитини, надмірного збору коштів на конкретну дитину або проект)', 'child-theme'); ?>
					</label>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="p_donate__form">
					<button>
						<?php _e('Відправити', 'child-theme'); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="p_donate__props">
	<div class="container">
		<div class="row">
			<div class="col-md-11 offset-md-1">
				<div class="p_donate__props-title">
					<?php _e('Реквізити фонду', 'child-theme'); ?>
				</div>
				<div class="p_donate__props-grid">
					<div class="p_donate__props-item">
						<?php echo carbon_get_theme_option( 'crb_donate_property_one' ) ?>
					</div>
					<div class="p_donate__props-item">
						<?php echo carbon_get_theme_option( 'crb_donate_property_two' ) ?>
					</div>
				</div>
				<div class="p_donate__props-payment">
					<?php
					$donate_payments = carbon_get_theme_option( 'crb_donate_payments' );
					foreach ( $donate_payments as $donate_payment ): ?>
						<div class="single__link">
							<img src="<?php echo $donate_payment['crb_donate_payment'] ?>" alt="">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

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
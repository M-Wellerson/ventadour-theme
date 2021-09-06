<?php
/*
Template Name: Contact template
*/
?>

<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

	<div class="wrapper contact">

		<div class="contact__infos">
			<div class="contact__infos_text">
				<h1 class="fontpestrin">Ventadour</h1>
				<h1 class="fontpestrin">Chantemerle</h1>
				<h4 class="light"><?= __('Les sources du pestrin', 'pestrin'); ?></h4>
				<div class="text light"><?= __('Le Pestrin, 07380<br>Meyras, France', 'pestrin'); ?></div>
				<div class="text light">
					<a href="tel:0033 4 75 94 41 04">00 33 4 75 94 41 04</a>
					<a href="mailto:ventadour@ventadour1868.fr">ventadour@ventadour1868.fr</a>
				</div>

			</div>
			<div class="contact__infos_photos">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/home_7.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
				<img src="<?= get_template_directory_uri(); ?>/assets/logos/logo-mix.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
			</div>
		</div>


		<div id="map" class="contact__carte"></div>

	</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>
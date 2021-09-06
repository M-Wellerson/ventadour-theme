<?php
/*
Template Name: Presse template
*/
?>

<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

<div class="wrapper presse">

	<div class="presse__title">
		<h4 class="navItems active"><?= __('Presse', 'pestrin'); ?></h4>
		<h4 class="navItems navDistinctions"><?= __('Distinctions', 'pestrin'); ?></h4>
		<img src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" class="navSelector" alt="">
	</div>

	<div class="presse__text_left">
		<?= __('Sources le Pestrin', 'pestrin'); ?>
	</div>
	<div class="presse__img_left">
		<img src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
	</div>
	<div class="presse__img_right">
		<img src="<?= get_template_directory_uri(); ?>/assets/icons/goutte1.png" alt="">
	</div>
	<div class="presse__filets">
		<div class="filet__item"></div>
		<div class="filet__item"></div>
		<div class="filet__item"></div>
		<div class="clear"></div>
	</div>


	<div class="presse__grid">
		<?php

			$queryPresse= array(
				'posts_per_page'   	=> -1,
				'post_type'		   	=> 'posts_presse',
				'orderby'          	=> 'menu_order',
				'order'            	=> 'ASC',
				'post_status'      	=> 'publish',
				'suppress_filters' 	=> true
			);
			$postsPresse= get_posts( $queryPresse);

		?>
		<div class="grid-sizer"></div>
		<?php

			$presseList = array();
			foreach ($postsPresse as $key => $presse) {

				$presseID = $presse->ID;

				$linkOnline = get_post_meta($presseID, 'link', true);

				if($linkOnline != '') {
					$link = '<a href='.$linkOnline.'" target="_blank"><img src="'.get_template_directory_uri().'/assets/icons/button_arrow_rightblue.png" alt="Meilleure eau minerale france - Pestrin - Ardeche"></a>';
				} else {
					$link = '';
				}

				$galleryIDs = explode(',', get_post_meta($presseID, '_easy_image_gallery', true));
				$gallery = array();
				foreach ($galleryIDs as $key2 => $galleryID) {
					$imageInfos = wp_get_attachment_image_src($galleryID, 'full');
					array_push($gallery, array($imageInfos[0], $imageInfos[1], $imageInfos[2]));
				}
				$presseList[$presseID] = $gallery;
//				array_push($presseList, [$presseID => $gallery]);

				echo '
				<div class="grid-item" data-id="'.$presseID.'">
					<img src="'.get_image_url($presseID).'" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin">
					<div class="grid-item_hover">
						<h1 class="light">'.$presse->post_title.'</h1>
						<div class="text light">2013</div>
						'.$link.'
					</div>
				</div>
				';
			}

		?>

		<script>setPresseList(<?= json_encode($presseList) ?>)</script>

	</div>
	<div class="presse__distinctions hide">
		<?php
			$queryDistinctions = array(
				'posts_per_page'   	=> -1,
				'post_type'		   	=> 'posts_distinctions',
				'orderby'          	=> 'menu_order',
				'order'            	=> 'ASC',
				'post_status'      	=> 'publish',
				'suppress_filters' 	=> true
			);
			$postsDistinctions = get_posts( $queryDistinctions);

			$paire = 0;
			foreach ($postsDistinctions as $key => $distinction) {

				$distinctionID = $distinction->ID;
				$soustitre = get_post_meta($distinctionID, 'sous_titre', true);
				$video = get_post_meta($distinctionID, 'video', true);

				if($video > 0) {
					$paire = 0;
					$class = 'item100';
					$media = '<video src="'.wp_get_attachment_url($video).'" controls>';
				} else {
					$paire++;
					$class = 'item50 margin'.$paire;
					if(get_image_url($distinctionID, 'medium') != '') {
						$media = '<img src="'.get_image_url($distinctionID, 'medium').'" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin">';
					} else $media = '';
				}

				echo '
				<div class="distinctions__item '. $class .'">
					<h4 class="smaller LTlight">'.$distinction->post_title.'</h4>
					<h4 class="smaller LTlight lower">'.strip_tags($soustitre, '<b><strong>').'</h4>
					'.$media.'
					<div class="text">'.$distinction->post_content.'</div>
					<div class="text">'.wp_get_attachment_url($distinctionID).'</div>
				</div>
				';
			}

		?>


	</div>

	<div class="presse__popup">


		<div class="presse__popup_wrapper">
			<img class="presse__popup_close" src="<?= get_template_directory_uri(); ?>/assets/icons/slider_close-blue.png" alt="">
			<div class="swiper-container">
				<div class="swiper-wrapper">
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>

			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>

	</div>
</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>
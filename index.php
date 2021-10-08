<?php get_header(); ?>


<div class="home__header">
	<div class="home__header_border show"></div>
	<img class="header__gradient" src="<?= get_template_directory_uri(); ?>/assets/motifs/gradient_1.png" alt="">
	<img class="header__cover" src="<?= get_template_directory_uri(); ?>/assets/img/home_1.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
	<img class="header__logo" src="<?= get_template_directory_uri(); ?>/assets/logos/logo-pestrin.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">

	<div class="header__top">
		<div class="text fontpestrin white upper"><a href="<?= $ventadourPage ?>">Ventadour</a></div>
		<div></div>
		<div class="text fontpestrin white upper"><a href="<?= $chantemerlePage ?>">Chantemerle</a></div>
	</div>

	<div class="header__content">
		<div class="header__content_item">
			<h4 class="fontpestrin upper white">Ventadour</h4>
			<div class="text light white upper"><?= __('Eau minérale<br>gazeuse légère', 'pestrin'); ?></div>
		</div>
		<div class="header__content_item">
			<div class="text condensedLTBold white smaller"><?= mb_strtoupper(__('les meilleures', 'pestrin')); ?></div>
			<div class="text condensedLTBold white"><?= mb_strtoupper(__('eaux minérales', 'pestrin')); ?></div>
			<div class="text condensedLTBold white smaller"><?= mb_strtoupper(__('de france', 'pestrin')); ?></div>
		</div>
		<div class="header__content_item">
			<h4 class="fontpestrin upper white">Chantemerle</h4>
			<div class="text light white upper"><?= __('Eau minerale<br>plate de caractère', 'pestrin'); ?></div>
		</div>
	</div>

	<div class="header__social">
		<a class="header__next anchorLink" href="#patrimoine" data-link="patrimoine">
			<img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right.png" alt="">
		</a>

		<a class="sociaux" href="https://www.facebook.com/Ventadour1868" target="_blank">
			<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook.png" alt="">
			<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_hover.png" alt="">
		</a>
		<a class="sociaux" href="https://www.instagram.com/ventadourchantemerle1868" target="_blank">
			<img class="" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram.png" alt="">
			<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_hover.png" alt="">
		</a>
	</div>
</div>

<?php include_once('includes/slider-home.php'); ?>

<?php include_once('page_components/menu.php'); ?>
<div class="wrapper home">
	<div class="home__social belowIpadF">
		<a class="header__next" href="#patrimoine">
			<img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right.png" alt="">
		</a>
		<a href="https://www.facebook.com/Ventadour1868" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black.png" alt=""></a>
		<a href="https://www.instagram.com/ventadourchantemerle1868/?hl=fr" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black.png" alt=""></a>
	</div>

	<div class="home__info">
		<div class="home__info-img">
			<img src="<?= get_template_directory_uri(); ?>/assets/images/finance.png" alt="">			
		</div>
		<div class="home__info-text">
			<h2>Entreprise<br> lauréate</h2>
			<span>
				C’est sur la commune de Meyras, une ancienne cité médiévale, au cœur des volcans ardéchois et du parc naturel.
			</span>
		</div>
	</div>

	<div class="home__patrimoine" id="patrimoine">
		<div class="patrimoine__header">
			<div class="patrimoine__header_title">
				<h2 class="extra"><?= __('Un patrimoine', 'pastrin'); ?></h2>
				<h2 class="bold"><?= __('Naturel', 'pestrin'); ?></h2>
				<div class="patrimoine__yellow belowIpadD"></div>
			</div>

			<div class="sliderSwiper belowIpad">

				<div class="sliderSwiper__slide active"><img src="<?= get_template_directory_uri(); ?>/assets/img/home_2.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour"></div>
				<div class="sliderSwiper__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/home_3.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour"></div>
				<div class="sliderSwiper__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_home_eau.jpg" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour"></div>

			</div>

			<div class="sliderSwiper__pagination belowIpad">
				<div class="sliderSwiper__pag active" data-id="1"></div>
				<div class="sliderSwiper__pag" data-id="2"></div>
				<div class="sliderSwiper__pag" data-id="3"></div>
			</div>

			<div class="patrimoine__header_intro text">
				<?= __('C’est sur la commune de Meyras, une ancienne cité médiévale, au cœur des volcans ardéchois et du parc naturel régional que jaillissent Ventadour et Chantemerle:<br>', 'pestrin'); ?>
				<a href="<?= $pressePage ?>#distinctions"><strong>les meilleures eaux minérales de France</strong></a>
			</div>
		</div>
		<div class="patrimoine__imgs">
			<div class="patrimoine__imgs_map img__prop img__prop_100"><img src="<?= get_template_directory_uri(); ?>/assets/img/home_map.png" alt="Ventadour - Pestrin - Ardeche - ventadour"></div>
			<div class="patrimoine__imgs_1 img__prop img__prop_70 aboveIpadD"><img src="<?= get_template_directory_uri(); ?>/assets/img/home_2.jpg" alt="Ventadour - Pestrin - Ardeche - ventadour"></div>
			<div class="clear"></div>
			<div class="patrimoine__imgs_2 img__prop img__prop_70 aboveIpadD">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/home_3.jpg" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour"
				   data-bottom-top="transform: translateY(40px)"
				   data-top-bottom="transform: translateY(-40px)">
			</div>
			<div class="patrimoine__imgs_3 img__prop img__prop_130 aboveIpadD"><img style="width: 300px; height: 350px"  src="<?= get_template_directory_uri(); ?>/assets/img/ventadour_home_eau.jpg" alt="Chantemerle - Pestrin - Ardeche - ventadour"></div>
			<div class="patrimoine__yellow aboveIpadD"></div>
			<img class="patrimoine__imgs_logo aboveIpadD" src="<?= get_template_directory_uri(); ?>/assets/logos/logo-sources.png" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
			<div class="clear"></div>
		</div>
	</div>


	<div class="home__passion">
		<div class="passion__yellow aboveIpadD"></div>
		<div class="passion__ventadour">
			<h4 class="fontpestrin">Ventadour</h4>
			<div class="text LTlight upper"><?= __('Eau minérale naturelle gazeuse', 'pestrin'); ?></div>

			<div class="passion__ventadour_desc text"><?= __('Une longue histoire : Ventadour était déjà connue des Romains et c’est le Consul Domitius qui créa en 121 av JC des Thermes dont les vestiges ont été retrouvés. Ventadour est une eau minérale gazeuse naturelle faiblement minéralisée renforcée au gaz de la source qui convient à tous. Riche en oligo-éléments, elle stimule et régénère l’organisme, facilite la digestion, idéale pour une consommation quotidienne.<br>Grâce à sa faible teneur en sodium, convient pour un régime pauvre en sel. Elle accompagne vos repas et relève la saveur des vins et alcools (consommés avec modération).', 'pestrin'); ?></div>
			<a href="<?= $sourcesPage ?>" class="button1 aboveIpadD">
				<?= __('Découvrez l\'histoire', 'pestrin'); ?>
				<img src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="" class="arrow">
			</a>
		</div>
		<div class="passion__eau">
			<div class="passion__yellow_mobile belowIpadD"></div>
			<div class="passion__eau_title">
				<h2 class="extra"><?= __('La passion', 'pestrin'); ?></h2>
				<h2><?= __('de l\'eau', 'pestrin'); ?></h2>
			</div>
			<div class="passion__signature text upper"><?= __('<strong>Eric Besson</strong> - Une passion de l\'eau', 'pestrin'); ?></div>
			<div class="img__prop img__prop_100"><img src="<?= get_template_directory_uri(); ?>/assets/img/home_5.jpg" alt="Chantemerle - Pestrin - Ardeche - ventadour"></div>
		</div>
		<a href="<?= $sourcesPage ?>" class="button1 belowIpadD">
			<?= __('Découvrez l\'histoire', 'pestrin'); ?>
		</a>
	</div>

	<section class="home__bouteille">
		<div class="bouteilles__title">
			<h4 class="condensed upper"><?= __('100% naturelle', 'pestrin'); ?></h4>
			<h4 class="smaller"><?= __('Zero nitrate', 'pestrin'); ?></h4>
			<div class="text light smaller upper"><?= __('Convient aux régimes sans sel', 'pestrin'); ?></div>
			<h4 class="extra smaller"><?= __('Faible teneur<br> en sodium', 'pestrin'); ?></h4>
			<div class="text belowDesktop light upper"><?= __('Depuis', 'pestrin'); ?></div>
		</div>
		<div class="bouteille__slider">
			<div class="bouteille__yellow"></div>
			<div class="bouteille__blue"></div>
		</div>

		<div class="bouteille_ipad">
			<img src="<?= get_template_directory_uri(); ?>/assets/img/1868.png" alt="">
			<img class="bouteilles" src="<?= get_template_directory_uri(); ?>/assets/img/bouteille_ventadour.png" alt="Ventadour - Pestrin - Ardeche - ventadour">
			<img class="bouteilles" src="<?= get_template_directory_uri(); ?>/assets/img/bouteille_chantemerle.png" alt="Chantemerle - Pestrin - Ardeche - ventadour">
		</div>

		<a href="<?= $ventadourPage ?>" class="button1 bouteille__link">
			<?= __('Eau minérale', 'pestrin'); ?>
			<img src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="" class="arrow">
		</a>
	</section>

	<div class="home__tableau">
		<div class="tableau__selection">
			<div class="text LTlight upper active">Chantemerle</div>
			<div class="text LTlight upper">ventadour</div>
		</div>
		<div class="tableau__1">
			<div class="row">
				<span class="extraBold"><?= __('SEL', 'pestrin'); ?></span><span class="value extraBold chantemerle_item active">14,5 mg/l</span><span class="value extraBold ventadour_item">15 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('Calcium', 'pestrin'); ?></span><span class="value chantemerle_item active">38 mg/l</span><span class="value ventadour_item">33 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('Magnésium', 'pestrin'); ?></span><span class="value chantemerle_item active">11,9 mg/l</span><span class="value ventadour_item">11,3 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('Potassium', 'pestrin'); ?></span><span class="value chantemerle_item active">1,7 mg/l</span><span class="value ventadour_item">1,5 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('Nitrates', 'pestrin'); ?></span><span class="value chantemerle_item active">0</span><span class="value ventadour_item">0</span>
			</div>
		</div>
		<div class="tableau__2">
			<div class="row">
				<span><?= __('Sulfates', 'pestrin'); ?></span><span class="value chantemerle_item active">2,7 mg/l</span><span class="value ventadour_item">2,1 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('Bicarbonates', 'pestrin'); ?></span><span class="value chantemerle_item active">210 mg/l</span><span class="value ventadour_item">150 mg/l</span>
			</div>
			<div class="row">
				<span><?= __('PH', 'pestrin'); ?></span><span class="value chantemerle_item active">6,9</span><span class="value ventadour_item">5,2</span>
			</div>
			<div class="row">
				<span><?= __('silice', 'pestrin'); ?></span><span class="value chantemerle_item active">44,3 mg/l</span><span class="value ventadour_item">45,7 mg/l</span>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="home__photos">

		<img  class="photos_1 aboveIpad" src="<?= get_template_directory_uri(); ?>/assets/img/home_6.jpg" alt="Ventadour - Pestrin - Ardeche - ventadour"
				data-bottom-top="transform: rotate(-7deg) translateX(20px)"
                data-top-bottom="transform: rotate(6deg) translateX(20px)">
		<img  class="photos_2 aboveIpad" src="<?= get_template_directory_uri(); ?>/assets/img/home_7.png" alt="Chantemerle - Pestrin - Ardeche - ventadour"
				data-bottom-top="transform: rotate(8deg) translate(-30px, 120px)"
                data-top-bottom="transform: rotate(-5deg) translate(-30px, 120px)">

		<img  class="photos_1 belowIpad" src="<?= get_template_directory_uri(); ?>/assets/img/home_6.jpg" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
		<img  class="photos_2 belowIpad" src="<?= get_template_directory_uri(); ?>/assets/img/home_7.png" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">

		<div class="clear"></div>
		<img  class="photos_logo" src="<?= get_template_directory_uri(); ?>/assets/logos/logo-mix.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
	</div>

	<div class="home__instagram aboveIpadF">
		<?php
		$queryPortfolioGallery = array(
			'posts_per_page' => 1,
			'post_type' => 'post',
			'category_name' => 'portfolio-gallery',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_status' => 'publish',
			'suppress_filters' => true
		);
		$postsPortfolioGallery = get_posts($queryPortfolioGallery);
		$portfolioID = $postsPortfolioGallery[0]->ID;

		$galleryIDs = explode(',', get_post_meta($portfolioID, '_easy_image_gallery', true));

		$gallery = array();
		foreach ($galleryIDs as $key => $galleryID) {
			array_push($gallery, wp_get_attachment_url($galleryID));
		}

//		$queryPhotos = array(
//				'posts_per_page'   	=> 5,
//				'post_type'		   	=> 'photos_accueil',
//				'orderby'          	=> 'menu_order',
//				'order'            	=> 'ASC',
//				'post_status'      	=> 'publish',
//				'suppress_filters' 	=> true
//			);
//			$postsPhotos= get_posts( $queryPhotos);
//		var_dump($gallery);
		?>
		<div class="instagram__item item1">
			<div class="img__prop img__prop_100"
				 data-bottom-top="transform: translateY(60px)"
				 data-top-bottom="transform: translateY(-60px)">
				<img src="<?= $gallery[0] ?>" alt="">
			</div>
			<img class="picto" src="<?= get_template_directory_uri(); ?>/assets/icons/goutte1.png" alt="">
		</div>
		<div class="instagram__item item2">
			<div class="ventadour">
				<a href="https://www.instagram.com/ventadourchantemerle1868" target="_blank">
					<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black.png" alt="">
					<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black_hover.png" alt="">
				</a>
				<div class="text condensedBold upper">#Ventadour</div>

			</div>
			<div class="img__prop img__prop_100"
				 data-bottom-top="transform: translateY(20px)"
				 data-top-bottom="transform: translateY(-20px)">
				<img src="<?= $gallery[1] ?>" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">
			</div>
		</div>
		<div class="instagram__item item3">
			<div class="img__prop img__prop_100"
				 data-bottom-top="transform: translateY(90px)"
				 data-top-bottom="transform: translateY(-120px)">
				<img src="<?= $gallery[2] ?>" alt="Eau minerale naturelle gazeuse - ventadour - Pestrin - ventadour">
			</div>
			<img class="picto1" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
			<img class="picto2" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
			<img class="picto2" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
		</div>
		<div class="instagram__item item4">
			<div class="img__prop img__prop_100"
				 data-bottom-top="transform: translateY(-10px)"
				 data-top-bottom="transform: translateY(-70px)">
				<img src="<?= $gallery[3] ?>" alt="Eau minerale naturelle plate - Chantemerle - Pestrin - ventadour">
			</div>
			<a href="https://www.facebook.com/Ventadour1868" target="_blank">
				<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black.png" alt="">
				<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black_hover.png" alt="">
			</a>
			<div class="img__prop img__prop_100"
				 data-bottom-top="transform: translateY(70px)"
				 data-top-bottom="transform: translateY(40px)">
				<img src="<?= $gallery[4] ?>" alt="Ventadour - Pestrin - Ardeche - ventadour">
			</div>
		</div>

	</div>
	<div class="home__instagram_mobile belowIpadD">
		<h4 class="condensedBold"><?= __('Nous suivre', 'pestrin'); ?></h4>

		<div class="instagram__mobile_item">
			<div class="item img__prop img__prop_100 item_arrow">
				<img class="picto1" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
			</div>
			<div class="item img__prop img__prop_100"><img src="<?= $gallery[0] ?>" alt="Chantemerle - Pestrin - Ardeche - ventadour"></div>
			<div class="item img__prop img__prop_100">
				<div class="text condensedBold upper">#Ventadour</div>
			</div>
			<div class="item img__prop img__prop_100"><img src="<?= $gallery[1]?>" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour"></div>
			<div class="item img__prop img__prop_100 item_icons">
				<img class="picto2" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
				<img class="picto2" src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
			</div>

		</div>
		<div class="instagram__mobile_item">
			<div class="item img__prop img__prop_100"><img src="<?= $gallery[2]?>" alt=""></div>
			<div class="item img__prop img__prop_100 item_insta">
				<img class="picto" src="<?= get_template_directory_uri(); ?>/assets/icons/goutte1.png" alt="">
				<a href="https://www.instagram.com/ventadourchantemerle1868/?hl=fr" target="_blank">
					<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black.png" alt="">

				</a>
			</div>
			<div class="item img__prop img__prop_100"><img src="<?= $gallery[3]?>" alt=""></div>

			<div class="item img__prop img__prop_100 item_insta">
				<a href="https://www.facebook.com/Ventadour1868" target="_blank">
					<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black.png" alt="Meilleure eau minerale france - Pestrin - Ardeche - ventadour">

				</a>
			</div>
			<div class="item img__prop img__prop_100"><img src="<?= $gallery[4]?>" alt="Ventadour - Pestrin - Ardeche - ventadour"></div>
		</div>
		<div class="clear"></div>

	</div>

</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>
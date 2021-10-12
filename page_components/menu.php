<?php include_once('links.php'); ?>
<menu class="hide">
	<div class="menu__wrapper">
		<div class="menu__item menu__action"><img src="<?= get_template_directory_uri(); ?>/assets/icons/burger_black.svg" alt=""></div>
		<div class="menu__item no-iphone">
			<h4 class="font_certa"><a href="<?= $ventadourPage ?>">Ventadour</a></h4>
		</div>
		<div class="menu__item"><a href="<?= $homePage ?>">
				<img class="logo" id="logo_big" src="<?= get_template_directory_uri(); ?>/assets/logos/logo_1868_big.svg" alt="">
				<img class="logo" id="logo_small" src="<?= get_template_directory_uri(); ?>/assets/logos/logo_1868_small.svg" alt="">

			</a></div>
		<div class="menu__item no-iphone">
			<h4 class="font_certa">
				<a href="<?= get_site_url() ?>/loja">
					LES BOISSONS
				</a>
			</h4>
		</div>
		<div class="menu__item">
			<div class="menu__item--more_cart pointer">
				<a href="<?= get_site_url() ?>/my-account/" class="menu__item--link_login font_certa no-iphone">
					<?= is_user_logged_in() ? 'PERFIL' : 'LOGIN' ?>
				</a>
				<img onclick="showCart()" src="<?= get_template_directory_uri() ?>/assets/images/lata.svg" alt="">
				<span onclick="showCart()">01</span>
			</div>

		</div>

	</div>
</menu>

<div class="menu__popup">

	<div class="menu__popup_wrapper scrollbarSmooth">
		<img class="menu__popup_close" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
		<div class="filetBottom"></div>
		<div class="menu__popup_item"><a class="<?= is_home() ? 'active' : ''; ?>" href="<?= $homePage ?>"><span class="number">01</span><span class="title"><?= __('Un patrimoine', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'ventadour' ? 'active' : ''; ?> pestrin" href="<?= $ventadourPage ?>"><span class="number">02</span><span class="title"><?= __('Ventadour', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'chantemerle' ? 'active' : ''; ?> pestrin" href="<?= $chantemerlePage ?>"><span class="number">03</span><span class="title"><?= __('Chantemerle', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'sources' ? 'active' : ''; ?>" href="<?= $sourcesPage ?>"><span class="number">04</span><span class="title"><?= __('Une histoire', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'presse' ? 'active' : ''; ?>" href="<?= $pressePage ?>"><span class="number">05</span><span class="title"><?= __('Presse et disctinctions', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'ardeche' ? 'active' : ''; ?>" href="<?= $ardechePage ?>"><span class="number">06</span><span class="title"><?= __('Émerveillés par l\'Ardèche', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="aime menu__sub_action" href="javascript:;"><span class="number">07</span><span class="title"><?= __('On aime', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'portfolio' ? 'active' : ''; ?>" href="<?= $portfolioPage ?>"><span class="number">08</span><span class="title"><?= __('Vos photos', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'ventes' ? 'active' : ''; ?>" href="<?= $ventesPage ?>"><span class="number">09</span><span class="title"><?= __('Points de ventes', 'pestrin'); ?></span></a></div>
		<div class="menu__popup_item"><a class="<?= $currentPage == 'contact' ? 'active' : ''; ?>" href="<?= $contactPage ?>"><span class="number">10</span><span class="title"><?= __('Contact', 'pestrin'); ?></span></a></div>

		<div class="menu__popup_social">
			<div class="social">
				<a class="social_facebook" href="https://www.facebook.com/Ventadour1868" target="_blank">
					<img class="nohover fb" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black.png" alt="">
					<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/facebook_black_hover.png" alt="">
				</a>
				<a class="social_instagram" href="https://www.instagram.com/ventadourchantemerle1868/?hl=fr">
					<img class="nohover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black.png" alt="">
					<img class="hover" src="<?= get_template_directory_uri(); ?>/assets/icons/instagram_black_hover.png" alt="">
				</a>
			</div>
			<div class="newsletter text condensedBold upper"> <a href="http://eepurl.com/cR6BtL" target="_blank">Newsletter</a></div>
			<div class="clear"></div>
		</div>
		<div class="filetBottom beforeCredit"></div>

		<div class="menu__popup_credit">
			<div class="creditBold"><?= __('Credit', 'pestrin'); ?></div>
			<div class="creditLight"><?= __('All right reserved<br>Le Pestrin© 2017', 'pestrin'); ?></div>
			<div class="creditLight"><a href="http://www.regularswitch.com" target="_blank"><?= __('Design by<br> Regularswitch', 'pestrin'); ?></a></div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="menu__popup_aime">
		<img class="menu__sub_action" src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
		<h4><?= __('On aime', 'pestrin'); ?></h4>
		<div class="clear"></div>

		<div class="filetBottom"></div>

		<?php
		$argsaime = array(
			'posts_per_page'   	=> 1,
			'category_name'		=> 'on-aime',
			'orderby'          	=> 'DATE',
			'order'            	=> 'ASC',
			'post_status'      	=> 'publish'
		);
		$allaime = get_posts($argsaime);
		?>
		<div class="aime__items">
			<?= strip_tags($allaime[0]->post_content, '<strong><ul><li><a>') ?>
		</div>
	</div>


</div>
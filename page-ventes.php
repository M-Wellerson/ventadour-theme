<?php
/*
Template Name: Ventes template
*/
?>

<?php get_header(); ?>

<?php include_once('page_components/menu.php'); ?>

	<div class="wrapper ventes">

		<div class="ventes__carte">

			<div class="carte__title">
				<h2 class="extra"><?= __('Points', 'pestrin'); ?></h2>
				<h2><?= __('de vente', 'pestrin'); ?></h2>
				<img src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
				<img src="<?= get_template_directory_uri(); ?>/assets/icons/picto1.png" alt="">
			</div>
			<div class="carte__container">
<!--				<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/france_map.png" alt="">-->

				<?php
					$argsApprecier= array(
						'posts_per_page'   	=> -1,
						'post_type'		   	=> 'posts_ventes',
						'category_name' 	=> 'ventes-apprecier',
						'orderby'          	=> 'menu_order',
						'order'            	=> 'ASC',
						'post_status'      	=> 'publish',
						'suppress_filters' 	=> true
					);
					$allApprecier= get_posts( $argsApprecier);
					$cities = array();
					foreach($allApprecier as $map) {
						$mapID = $map->ID;
						$mapInfo = get_post_meta($mapID ,'coordonnees', true);

						$newValueCity = array(
							$map->post_title	=> array(
								"latitude"	=> $mapInfo['lat'],
								"longitude"	=> $mapInfo['lng'],
//								"value"		=> 120,
//								"tooltip"	=> array("content" => "$map->post_title<br />"),
								"size"		=> 120,


								"attrs"		=> array(
									"stroke" => "#1D1C1B",
									"stroke-width" => 15,
									"fill" => "transparent"
								),
								"attrsHover"=> array(
									"transform" 	=> "s1.5",
									"stroke-width"	=> 15
								)
							)
						);
						array_push($cities,$newValueCity);
					}
//					var_dump($mapInfo);
				?>
				<script type="text/javascript">
					getMapInfos(<?php echo json_encode($cities); ?>);
				</script>
				<div class="mapcontainer">
					<div class="map">
						<span>Alternative content for the map</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>


		<div class="ventes__tableau">

			<div class="tableau__item">
				<h4 class="condensedBold"><?= __('Acheter', 'pestrin'); ?></h4>

				<?php
					$argsAcheter = array(
						'posts_per_page'   	=> 1,
						'post_type'		   	=> 'posts_ventes',
						'category_name' 	=> 'ventes_acheter',
						'orderby'          	=> 'menu_order',
						'order'            	=> 'ASC',
						'post_status'      	=> 'publish',
						'suppress_filters' 	=> true
					);
					$allAcheter = get_posts( $argsAcheter );
				?>
				<div class="text"><a target="_blank"><?= strip_tags($allAcheter[0]->post_content, '<a>') ?></a></div>
                </div>
			<div class="tableau__item">
				<h4 class="condensedBold"><?= __('Apprécier', 'pestrin'); ?></h4>
				<div class="text"><?= __('En construction', 'pestrin'); ?></div>
			</div>
			<img src="<?= get_template_directory_uri(); ?>/assets/icons/button_arrow_right.png" alt="">
			<div class="clear"></div>
		</div>




		<?php
			$argsMaps = array(
				'posts_per_page'   	=> -1,
				'post_type'		   	=> 'posts_ventes',
				'orderby'          	=> 'menu_order',
				'order'            	=> 'ASC',
				'post_status'      	=> 'publish',
				'suppress_filters' 	=> true
			);
			$allMaps = get_posts( $argsMaps );

			$villes = array();
			foreach($allMaps as $map) {

				$map_ID = $map->ID;
				$mapInfo = get_post_meta($map_ID,'googlemap', true);
//
//				$newValueCity = array(
//					$map->post_title	=> array(
//						"latitude"	=> $mapInfo['lat'],
//						"longitude"	=> $mapInfo['lng'],
//						"value"		=> 11,
//						"tooltip"	=> array("content" => "$map->post_title<br />"),
//						"size"		=> $size,
//						"attrs"		=> array("fill" => "#FFDB00"),
//						"attrsHover"=> array(
//							"transform" 	=> "s1.5",
//							"stroke-width"	=> 1
//						)
//					)
//				);
//
//				array_push($countries,$newValueCountry);
//				array_push($cities,$newValueCity);
			}

		?>
	</div>

<?php include('page_components/footer.php'); ?>

<?php get_footer(); ?>
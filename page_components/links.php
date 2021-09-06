<?php

global $post;

$homePage = get_home_url();

$sourcesPage     = get_page_link(get_page_by_path('sources')->ID);
$pressePage      = get_page_link(get_page_by_path('presse')->ID);
$ventesPage      = get_page_link(get_page_by_path('ventes')->ID);
$chantemerlePage = get_page_link(get_page_by_path('chantemerle')->ID);
$ventadourPage   = get_page_link(get_page_by_path('ventadour')->ID);
$ardechePage     = get_page_link(get_page_by_path('ardeche')->ID);
$portfolioPage   = get_page_link(get_page_by_path('portfolio')->ID);
$contactPage     = get_page_link(get_page_by_path('contact')->ID);

$currentPage = $post->post_name;
// var_dump($post->post_name);
// $currentPage = $post->post_name;$pagename = $post->post_name;

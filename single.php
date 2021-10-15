<?php get_header(); ?>
<?php include_once('page_components/menu.php'); ?>

<div class="wrapper ventes">
    <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    ?>
</div>

<?php include('page_components/footer.php'); ?>
<?php get_footer(); ?>
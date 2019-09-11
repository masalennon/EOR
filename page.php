<?php
/*
Template Name: 固定ページの新規テンプレート１
*/
?>
<?php get_header(); ?>
<?php if(have_posts()):
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif; ?>
<?php get_footer(); ?>
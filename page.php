<?php
/*
Template Name: Default Page
*/
get_header();
?>

<main class="internal_page">
    <div class="wrapper">
        <div class="internal_page_box">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <span class="internal_label">Phoenix Capital Solutions</span>
                <h1 class="internal_title"><?php the_title(); ?></h1>
                <div class="internal_divider"></div>

                <div class="internal_content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
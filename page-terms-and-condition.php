<?php
/*
Template Name: Terms and Condition Page
*/

get_header();
?>

<section class="terms_and_condition">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="privacy_card">
                        <p class="privacy_label">Legal</p>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <h1 class="text-white"><?php the_title(); ?></h1>
                                <div class="privacy_content">
                                    <?php the_content(); ?>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

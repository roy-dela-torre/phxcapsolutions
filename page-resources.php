<?php
/*
Template Name: Resources Page
*/

get_header();
?>

<section class="resources_hero">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="program_label">Knowledge Base</div>
                    <h1 class="text-white">Resources</h1>
                    <p>Insights, guides, and updates from the Phoenix Capital Solutions team.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="resources_main">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-start">

                <!-- ===== POST GRID ===== -->
                <div class="col-lg-8">
                    <div class="row posts_grid">
                        <?php
                        $paged = get_query_var('paged') ?: 1;
                        $posts_query = new WP_Query([
                            'post_type'      => 'post',
                            'posts_per_page' => 7,
                            'paged'          => $paged,
                        ]);

                        if ($posts_query->have_posts()) :
                            while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                            <div class="col-md-6 mb-4">
                                <article class="post_card" id="post-<?php the_ID(); ?>">
                                    <a href="<?php the_permalink(); ?>" class="post_card_link">

                                        <!-- Thumbnail -->
                                        <div class="post_card_image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium_large'); ?>
                                            <?php else : ?>
                                                <div class="post_card_placeholder"></div>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Content -->
                                        <div class="post_card_content">
                                            <?php
                                            $cats = get_the_category();
                                            if ($cats) : ?>
                                                <div class="post_card_cat"><?php echo esc_html($cats[0]->name); ?></div>
                                            <?php endif; ?>

                                            <h2 class="post_card_title"><?php the_title(); ?></h2>

                                            <p class="post_card_excerpt">
                                                <?php echo wp_trim_words(has_excerpt() ? get_the_excerpt() : get_the_content(), 15, '…'); ?>
                                            </p>

                                            <div class="post_card_read">Read Article</div>
                                        </div>

                                    </a>
                                </article>
                            </div>

                            <?php endwhile; ?>

                            <!-- Pagination -->
                            <?php if ($posts_query->max_num_pages > 1) : ?>
                            <div class="col-12 mt-4">
                                <div class="resources_pagination">
                                    <?php
                                    echo paginate_links([
                                        'total'     => $posts_query->max_num_pages,
                                        'current'   => $paged,
                                        'prev_text' => '← Previous',
                                        'next_text' => 'Next →',
                                        'mid_size'  => 2,
                                    ]);
                                    ?>
                                </div>
                            </div>
                            <?php endif;

                            wp_reset_postdata();

                        else : ?>
                            <div class="col-12">
                                <div class="no_posts">
                                    <p>No articles published yet. Check back soon.</p>
                                    <a href="<?php echo get_home_url(); ?>">Back to Home</a>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <!-- ===== SIDEBAR ===== -->
                <div class="col-lg-4">
                    <aside class="resources_sidebar">

                        <!-- Subscribe Card -->
                        <div class="sidebar_widget sidebar_subscribe">
                            <div class="subscribe_bg_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/subscribe-bg.jpg" alt="" />
                                <div class="subscribe_overlay"></div>
                                <div class="subscribe_inner">
                                    <p class="subscribe_heading">Receive the latest news in your email</p>
                                    <?php echo do_shortcode('[contact-form-7 id="1229d72" title="Subscribe"]'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="sidebar_widget sidebar_recent">
                            <?php
                            $recent_posts = new WP_Query([
                                'post_type'      => 'post',
                                'posts_per_page' => 4,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            ]);

                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

                                <a href="<?php the_permalink(); ?>" class="recent_post_item">
                                    <div class="rp_thumb">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php else : ?>
                                            <div class="rp_thumb_placeholder"></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rp_info">
                                        <?php $rp_cats = get_the_category(); if ($rp_cats) : ?>
                                            <div class="rp_cat"><?php echo esc_html($rp_cats[0]->name); ?></div>
                                        <?php endif; ?>
                                        <div class="rp_title"><?php the_title(); ?></div>
                                        <div class="rp_date"><?php echo get_the_date('F j, Y'); ?></div>
                                    </div>
                                </a>

                                <?php endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
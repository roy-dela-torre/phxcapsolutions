<?php

/**
 * Single post template — Blog
 * Layout: featured image top, then 2-col (content left + sidebar right)
 */

get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- ========== FEATURED IMAGE ========== -->
        <?php if (has_post_thumbnail()) : ?>
            <section class="post_featured_image">
                <div class="wrapper">
                    <div class="container-fluid">
                        <?php the_post_thumbnail('full', ['class' => 'post_thumb']); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- ========== CONTENT + SIDEBAR ========== -->
        <section class="post_body_section">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row align-items-start">

                        <!-- ===== MAIN CONTENT ===== -->
                        <div class="col-lg-8">
                            <article class="post_article" id="post-<?php the_ID(); ?>">

                                <!-- Post Title -->
                                <h1 class="post_title"><?php the_title(); ?></h1>

                                <!-- Post Meta -->
                                <div class="post_meta">
                                    <span class="post_date"><?php echo get_the_date('F j, Y'); ?></span>
                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) : ?>
                                        <span class="meta_sep">·</span>
                                        <div class="post_cats">
                                            <?php foreach ($categories as $cat) : ?>
                                                <a href="<?php echo get_category_link($cat->term_id); ?>" class="cat_tag">
                                                    <?php echo esc_html($cat->name); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <span class="meta_sep">·</span>
                                    <span class="post_read_time">
                                        <?php
                                        $content    = get_the_content();
                                        $word_count = str_word_count(strip_tags($content));
                                        $read_time  = max(1, ceil($word_count / 200));
                                        echo $read_time . ' min read';
                                        ?>
                                    </span>
                                </div>

                                <!-- Post Content -->
                                <div class="post_content">
                                    <?php the_content(); ?>
                                </div>

                                <!-- Tags -->
                                <?php $tags = get_the_tags();
                                if ($tags) : ?>
                                    <div class="post_tags">
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post_tag"><?php echo esc_html($tag->name); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Author Box -->
                                <div class="post_author_box">
                                    <div class="author_avatar">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 56); ?>
                                    </div>
                                    <div class="author_info">
                                        <div class="author_name"><?php the_author(); ?></div>
                                        <div class="author_bio"><?php echo get_the_author_meta('description') ?: 'Phoenix Capital Solutions Team'; ?></div>
                                    </div>
                                </div>

                            </article>
                        </div>

                        <!-- ===== SIDEBAR ===== -->
                        <div class="col-lg-4">
                            <aside class="post_sidebar sticky-top">

                                <!-- Subscribe Card -->
                                <div class="sidebar_card sidebar_subscribe">
                                    <div class="subscribe_bg">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', ['class' => 'subscribe_thumb']); ?>
                                        <?php endif; ?>
                                        <div class="subscribe_overlay"></div>
                                    </div>
                                    <a href="<?= get_home_url(); ?>/contact-us" class="yellow_btn">Subscribe today</a>
                                </div>

                                <!-- Table of Contents -->
                                <div class="sidebar_card sidebar_toc">
                                    <h4 class="sidebar_card_title">Table of content</h4>
                                    <nav class="toc_nav" id="tocNav">
                                        <?php
                                        // Auto-generate TOC from post headings
                                        $content = get_the_content();
                                        preg_match_all('/<h([2-3])[^>]*>(.*?)<\/h[2-3]>/is', $content, $matches);
                                        if (!empty($matches[0])) :
                                            foreach ($matches[2] as $i => $heading_text) :
                                                $level = $matches[1][$i];
                                                $clean = strip_tags($heading_text);
                                                $slug  = sanitize_title($clean);
                                        ?>
                                                <a href="#<?php echo esc_attr($slug); ?>" class="toc_link toc_h<?php echo $level; ?>">
                                                    <?php echo esc_html($clean); ?>
                                                </a>
                                            <?php
                                            endforeach;
                                        else :
                                            ?>
                                            <span class="toc_empty">No headings found.</span>
                                        <?php endif; ?>
                                    </nav>
                                </div>

                                <!-- Related Articles -->
                                <div class="sidebar_card sidebar_related">
                                    <h4 class="sidebar_card_title">Related articles</h4>
                                    <div class="related_articles">
                                        <?php
                                        $current_cats = wp_get_post_categories(get_the_ID());
                                        $related = new WP_Query([
                                            'post_type'           => 'post',
                                            'posts_per_page'      => 3,
                                            'post__not_in'        => [get_the_ID()],
                                            'category__in'        => $current_cats,
                                            'orderby'             => 'date',
                                            'order'               => 'DESC',
                                            'ignore_sticky_posts' => 1,
                                        ]);

                                        if ($related->have_posts()) :
                                            while ($related->have_posts()) : $related->the_post(); ?>
                                                <a href="<?php the_permalink(); ?>" class="related_article_item">
                                                    <div class="ra_thumb">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <?php the_post_thumbnail('thumbnail'); ?>
                                                        <?php else : ?>
                                                            <div class="ra_thumb_placeholder"></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="ra_info">
                                                        <div class="ra_title"><?php the_title(); ?></div>
                                                        <div class="ra_date"><?php echo get_the_date('F j, Y'); ?></div>
                                                    </div>
                                                </a>
                                            <?php endwhile;
                                            wp_reset_postdata();
                                        else : ?>
                                            <p class="no_related">No related articles found.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </aside>
                        </div>

                    </div>
                </div>
            </div>
        </section>

<?php endwhile;
endif; ?>


<?php get_footer(); ?>
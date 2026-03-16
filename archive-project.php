<?php
/**
 * Archive template for the 'project' custom post type.
 * Displays all projects in a 3-column card grid with image, title, and excerpt.
 */

get_header();
?>

<main class="archive_project_page">

    <section class="archive_hero">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="program_label">Our Work</div>
                        <h1 class="text-white">Projects</h1>
                        <p>A selection of large-scale development, infrastructure, and capital deployment projects supported through Phoenix Capital Solutions' structured financing programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="archive_grid">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <article class="project_card" id="post-<?php the_ID(); ?>">
                                <a href="<?php the_permalink(); ?>" class="card_link" aria-label="<?php the_title_attribute(); ?>">

                                    <!-- Thumbnail -->
                                    <div class="card_image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                        <?php else : ?>
                                            <div class="card_image_placeholder">
                                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="rgba(197,155,50,0.4)" stroke-width="1.5"/>
                                                    <circle cx="8.5" cy="8.5" r="1.5" stroke="rgba(197,155,50,0.4)" stroke-width="1.5"/>
                                                    <path d="M21 15l-5-5L5 21" stroke="rgba(197,155,50,0.4)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Hover overlay -->
                                        <div class="card_overlay">
                                            <span class="view_label">View Project</span>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card_content">
                                        <?php
                                        // Program tag — use first category or custom taxonomy if available
                                        $terms = get_the_terms(get_the_ID(), 'project_category');
                                        if ($terms && !is_wp_error($terms)) :
                                        ?>
                                            <div class="card_tag"><?php echo esc_html($terms[0]->name); ?></div>
                                        <?php endif; ?>

                                        <h2 class="card_title text-white"><?php the_title(); ?></h2>

                                        <?php if (has_excerpt() || get_the_content()) : ?>
                                            <p class="card_excerpt">
                                                <?php
                                                if (has_excerpt()) {
                                                    echo wp_trim_words(get_the_excerpt(), 20, '…');
                                                } else {
                                                    echo wp_trim_words(get_the_content(), 20, '…');
                                                }
                                                ?>
                                            </p>
                                        <?php endif; ?>

                                        <div class="card_meta">
                                            <?php if (get_the_date()) : ?>
                                                <span class="card_date"><?php echo get_the_date('M Y'); ?></span>
                                            <?php endif; ?>
                                            <span class="card_read_more">
                                                View Project
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 8h10M9 4l4 4-4 4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>

                                </a>
                            </article>
                        </div>

                        <?php endwhile; ?>

                        <!-- Pagination -->
                        <?php if (get_the_posts_pagination()) : ?>
                        <div class="col-lg-12 mt-4">
                            <div class="archive_pagination">
                                <?php
                                the_posts_pagination(array(
                                    'prev_text' => '← Previous',
                                    'next_text' => 'Next →',
                                    'mid_size'  => 2,
                                ));
                                ?>
                            </div>
                        </div>
                        <?php endif; ?>

                    <?php else : ?>

                        <!-- No projects found -->
                        <div class="col-lg-12">
                            <div class="no_projects">
                                <div class="no_projects_icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="8" stroke="#c59b32" stroke-width="1.8"/>
                                        <path d="M21 21l-4.35-4.35" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <h3 class="text-white">No Projects Found</h3>
                                <p>No projects have been published yet. Check back soon.</p>
                                <a href="<?php echo get_home_url(); ?>" class="back_home_btn">Back to Home</a>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
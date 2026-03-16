<?php
/**
 * Single template for the 'project' custom post type.
 */

get_header();
?>

<main class="single_project_page">

    <!-- ========== META BAR ========== -->
    <div class="project_meta_bar">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="meta_inner">
                    <span class="meta_updated">Last Updated: <?php echo get_the_modified_date('F j, Y'); ?></span>
                    <span class="meta_sep">·</span>
                    <span class="meta_by">By <?php the_author(); ?></span>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    if ($terms && !is_wp_error($terms)) : ?>
                        <span class="meta_sep">·</span>
                        <span class="meta_cats">
                            Categories:
                            <?php foreach ($terms as $i => $term) : ?>
                                <a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a><?php echo ($i < count($terms) - 1) ? ', ' : ''; ?>
                            <?php endforeach; ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FEATURED IMAGE ========== -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="project_featured_image">
        <div class="wrapper">
            <div class="container-fluid">
                <?php the_post_thumbnail('full', ['class' => 'featured_img']); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- ========== MAIN CONTENT ========== -->
    <section class="project_content_section">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="project_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ORBIT WIDGET ========== -->
    <section class="project_orbit_section">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 text-center">

                        <div class="orbit_widget" id="orbitWidget">
                            <!-- Orbit ring -->
                            <div class="orbit_ring"></div>

                            <!-- Center text (changes on click/rotation) -->
                            <div class="orbit_center">
                                <div class="orbit_title" id="orbitTitle">E-Commerce Solutions</div>
                                <div class="orbit_sub" id="orbitSub">Vivamus suscipit tortor eget</div>
                            </div>

                            <!-- Dots positioned on the ring -->
                            <div class="orbit_dot active" data-index="0"
                                data-title="E-Commerce Solutions"
                                data-sub="Vivamus suscipit tortor eget">
                                <span class="dot_inner"></span>
                            </div>

                            <div class="orbit_dot" data-index="1"
                                data-title="Mobile App"
                                data-sub="Mauris blandit aliquet">
                                <span class="dot_inner"></span>
                            </div>

                            <div class="orbit_dot" data-index="2"
                                data-title="App Integration"
                                data-sub="Donec sollicitudin molestie">
                                <span class="dot_inner"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CHECKLIST ========== -->
    <section class="project_checklist_section">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul class="project_checklist">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== GALLERY ========== -->
    <?php
    // ACF gallery field or post content images
    // Using get_post_gallery or ACF if available
    $gallery_images = get_post_meta(get_the_ID(), 'project_gallery', true);
    ?>
    <section class="project_gallery_section">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <?php if (!empty($gallery_images) && is_array($gallery_images)) : ?>
                            <div class="project_gallery">
                                <?php foreach ($gallery_images as $img_id) : ?>
                                    <div class="gallery_item">
                                        <?php echo wp_get_attachment_image($img_id, 'large'); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else : ?>
                            <!-- Fallback: use featured image + placeholder images from post content -->
                            <div class="project_gallery">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="gallery_item">
                                        <?php the_post_thumbnail('large'); ?>
                                        <p class="gallery_caption">Our amazing team is always hard at work</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== RELATED PROJECTS ========== -->
    <section class="project_related_section">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row align-items-center mb-4">
                    <div class="col">
                        <h2 class="related_heading">Related projects</h2>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo get_post_type_archive_link('project'); ?>" class="view_all_btn">View all projects</a>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $current_id = get_the_ID();
                    $related_terms = get_the_terms($current_id, 'project_category');
                    $term_ids = $related_terms ? wp_list_pluck($related_terms, 'term_id') : [];

                    $related_args = [
                        'post_type'      => 'project',
                        'posts_per_page' => 3,
                        'post__not_in'   => [$current_id],
                        'orderby'        => 'rand',
                    ];

                    if (!empty($term_ids)) {
                        $related_args['tax_query'] = [[
                            'taxonomy' => 'project_category',
                            'field'    => 'term_id',
                            'terms'    => $term_ids,
                        ]];
                    }

                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="related_card">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="related_image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium_large'); ?>
                                            <?php else : ?>
                                                <div class="related_placeholder"></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="related_content">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    const dots      = document.querySelectorAll('.orbit_dot');
    const titleEl   = document.getElementById('orbitTitle');
    const subEl     = document.getElementById('orbitSub');
    const widget    = document.getElementById('orbitWidget');

    if (!widget || !dots.length) return;

    const total       = dots.length;
    // Radius as % of widget width — matches CSS (widget = 320px, radius = 120px)
    const radius      = 120;
    let currentIndex  = 0;
    let rotationDeg   = 0;          // tracks cumulative rotation
    let animating     = false;
    const stepDeg     = 360 / total; // 120° per step

    // Place dots evenly around the ring initially
    function placeDots(offset) {
        dots.forEach((dot, i) => {
            const angle = (offset + i * stepDeg) * (Math.PI / 180);
            const x = Math.sin(angle) * radius;
            const y = -Math.cos(angle) * radius;
            dot.style.transform = `translate(${x}px, ${y}px)`;
        });
    }

    // Update center text with fade
    function updateText(index) {
        const dot = dots[index];
        const newTitle = dot.dataset.title;
        const newSub   = dot.dataset.sub;

        titleEl.style.opacity = '0';
        subEl.style.opacity   = '0';

        setTimeout(() => {
            titleEl.textContent = newTitle;
            subEl.textContent   = newSub;
            titleEl.style.opacity = '1';
            subEl.style.opacity   = '1';
        }, 200);
    }

    // Set active dot
    function setActive(index) {
        dots.forEach(d => d.classList.remove('active'));
        dots[index].classList.add('active');
    }

    // Rotate to next dot
    function rotateTo(targetIndex) {
        if (animating) return;
        animating = true;

        const steps = ((targetIndex - currentIndex) % total + total) % total || total;
        const targetDeg = rotationDeg + steps * stepDeg;

        const start = performance.now();
        const duration = 600;
        const startDeg = rotationDeg;

        function easeInOut(t) {
            return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
        }

        function frame(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const current = startDeg + (targetDeg - startDeg) * easeInOut(progress);

            placeDots(current);

            if (progress < 1) {
                requestAnimationFrame(frame);
            } else {
                rotationDeg = targetDeg % 360;
                currentIndex = targetIndex;
                setActive(currentIndex);
                updateText(currentIndex);
                animating = false;
            }
        }

        requestAnimationFrame(frame);
    }

    // Click on any dot
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            if (i !== currentIndex) rotateTo(i);
        });
    });

    // Auto-rotate every 2 seconds
    let autoTimer = setInterval(() => {
        const next = (currentIndex + 1) % total;
        rotateTo(next);
    }, 2000);

    // Pause auto-rotate on hover
    widget.addEventListener('mouseenter', () => clearInterval(autoTimer));
    widget.addEventListener('mouseleave', () => {
        autoTimer = setInterval(() => {
            const next = (currentIndex + 1) % total;
            rotateTo(next);
        }, 2000);
    });

    // Initial placement
    placeDots(0);
    setActive(0);
    updateText(0);
})();
</script>

<?php get_footer(); ?>
<?php
if (!defined('ABSPATH')) {
    exit;
}
//Template Name: Home Page
$theme_uri = get_template_directory_uri();

get_header();
?>

<?php if (have_rows('homepage_sections')) : ?>
    <?php while (have_rows('homepage_sections')) : the_row(); ?>


        <?php // ===================== BANNER ===================== 
        ?>
        <?php if (get_row_layout() === 'banner') :
            $heading       = get_sub_field('banner_heading');
            $description   = get_sub_field('banner_description');
            $btn1_label    = get_sub_field('banner_btn_primary_label');
            $btn1_url      = get_sub_field('banner_btn_primary_url');
            $btn2_label    = get_sub_field('banner_btn_secondary_label');
            $btn2_url      = get_sub_field('banner_btn_secondary_url');
        ?>
            <section class="banner" id="home" data-aos="zoom-out" data-aos-duration="900">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                                <div class="content">
                                    <?php if ($heading) : ?>
                                        <h1 class="text-center text-white"><?= esc_html($heading); ?></h1>
                                    <?php endif; ?>
                                    <?php if ($description) : ?>
                                        <p class="text-white text-center"><?= esc_html($description); ?></p>
                                    <?php endif; ?>
                                    <?php if ($btn1_label || $btn2_label) : ?>
                                        <div class="group_btn">
                                            <?php if ($btn1_label && $btn1_url) : ?>
                                                <a href="<?= esc_url($btn1_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="request_a_confidentials_consultation">
                                                    <?= esc_html($btn1_label); ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($btn2_label && $btn2_url) : ?>
                                                <a href="<?= esc_url($btn2_url); ?>" target="_blank" rel="noopener noreferrer" class="transparent_btn" id="explore_programs">
                                                    <?= esc_html($btn2_label); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== WHAT WE DO ===================== 
        ?>
        <?php if (get_row_layout() === 'what_we_do') :
            $heading = get_sub_field('wwd_heading');
            $content = get_sub_field('wwd_content');
            $image   = get_sub_field('wwd_image');
        ?>
            <section class="what_we_do" data-aos="fade-right" data-aos-duration="900" data-aos-delay="80">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content pe-lg-5">
                                    <?php if ($heading) : ?>
                                        <h2 class="text-white"><?= esc_html($heading); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($image) : ?>
                                        <img loading="lazy" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="w-100 d-block d-lg-none mb-4">
                                    <?php endif; ?>
                                    <?php if ($content) : ?>
                                        <div class="text-white"><?= $content; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ($image) : ?>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="image">
                                        <img loading="lazy" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== WHY WE DO WHAT WE DO ===================== 
        ?>
        <?php if (get_row_layout() === 'why_we_do') :
            $heading   = get_sub_field('wwdwd_heading');
            $content   = get_sub_field('wwdwd_content');
            $image     = get_sub_field('wwdwd_image');
            $btn_label = get_sub_field('wwdwd_btn_label');
            $btn_url   = get_sub_field('wwdwd_btn_url');
        ?>
            <section class="why_we_do_what_we_do" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="row align-items-center">
                            <?php if ($image) : ?>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="image">
                                        <img loading="lazy" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-6">
                                <div class="content ps-lg-5">
                                    <?php if ($heading) : ?>
                                        <h2 class="text-white"><?= esc_html($heading); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($image) : ?>
                                        <img loading="lazy" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="w-100 d-block d-lg-none mb-4">
                                    <?php endif; ?>
                                    <?php if ($content) : ?>
                                        <div class="text-white"><?= $content; ?></div>
                                    <?php endif; ?>
                                    <?php if ($btn_label && $btn_url) : ?>
                                        <a href="<?= esc_url($btn_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="why_we_do_request_consultation">
                                            <?= esc_html($btn_label); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== PROGRAM OVERVIEW ===================== 
        ?>
        <?php if (get_row_layout() === 'program_overview') :
            $heading    = get_sub_field('po_heading');
            $subheading = get_sub_field('po_subheading');
            $items      = get_sub_field('po_items');
            $btn_label  = get_sub_field('po_btn_label');
            $btn_url    = get_sub_field('po_btn_url');
        ?>
            <section class="program_overview" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="120">
                <div class="container-fluid">
                    <div class="wrapper">
                        <div class="row">
                            <?php if ($heading || $subheading) : ?>
                                <div class="col-md-12">
                                    <div class="header">
                                        <?php if ($heading) : ?>
                                            <h2 class="text-center text-white"><?= esc_html($heading); ?></h2>
                                        <?php endif; ?>
                                        <?php if ($subheading) : ?>
                                            <p class="text-center text-white"><?= esc_html($subheading); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($items) : ?>
                                <?php foreach ($items as $item) :
                                    $card_image = $item['po_item_image'];
                                    $card_title = $item['po_item_title'];
                                    if (!$card_image && !$card_title) continue;
                                ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="content">
                                            <?php if ($card_image) : ?>
                                                <div class="image">
                                                    <img loading="lazy" src="<?= esc_url($card_image['url']); ?>" alt="<?= esc_attr($card_image['alt']); ?>" title="<?= esc_attr($card_title); ?>">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($card_title) : ?>
                                                <h3 class="text-center"><?= esc_html($card_title); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if ($btn_label && $btn_url) : ?>
                                <div class="col-md-12">
                                    <a href="<?= esc_url($btn_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn margin-auto" id="program_overview_view_all_programs">
                                        <?= esc_html($btn_label); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== HOW IT WORKS ===================== 
        ?>
        <?php if (get_row_layout() === 'how_it_works') :
            $heading     = get_sub_field('hiw_heading');
            $description = get_sub_field('hiw_description');
            $btn_label   = get_sub_field('hiw_btn_label');
            $btn_url     = get_sub_field('hiw_btn_url');
            $steps       = get_sub_field('hiw_steps');
        ?>
            <section class="how_it_works" data-aos="fade-up-right" data-aos-duration="900" data-aos-delay="140">
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="_row justify-content-between">
                            <div class="left_content pe-lg-5">
                                <div class="content">
                                    <?php if ($heading) : ?>
                                        <h2 class="text-white"><?= esc_html($heading); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($description) : ?>
                                        <p class="text-white"><?= esc_html($description); ?></p>
                                    <?php endif; ?>
                                    <?php if ($btn_label && $btn_url) : ?>
                                        <a href="<?= esc_url($btn_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="how_it_works_view_full_process">
                                            <?= esc_html($btn_label); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ($steps) : ?>
                                <div class="right_content">
                                    <div class="owl-carousel owl-theme" id="how_it_works">
                                        <?php foreach ($steps as $index => $step) :
                                            $step_title = $step['hiw_step_title'];
                                            if (!$step_title) continue;
                                        ?>
                                            <div class="items">
                                                <span class="count"><?= $index + 1; ?></span>
                                                <h3><?= esc_html($step_title); ?></h3>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== OUR COMMITMENT ===================== 
        ?>
        <?php if (get_row_layout() === 'our_commitment') :
            $heading     = get_sub_field('oc_heading');
            $description = get_sub_field('oc_description');
            $list        = get_sub_field('oc_list');
            $btn_label   = get_sub_field('oc_btn_label');
            $btn_url     = get_sub_field('oc_btn_url');
        ?>
            <section class="our_commitment" data-aos="flip-up" data-aos-duration="900" data-aos-delay="160">
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <?php if ($list) : ?>
                                <div class="col-lg-6">
                                    <div class="content pe-lg-5">
                                        <ul>
                                            <?php foreach ($list as $item) :
                                                $text = $item['oc_list_item'];
                                                if (!$text) continue;
                                            ?>
                                                <li>
                                                    <p><?= esc_html($text); ?></p>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-6">
                                <div class="content ps-lg-5">
                                    <?php if ($heading) : ?>
                                        <h2 class="text-white"><?= esc_html($heading); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($description) : ?>
                                        <p class="text-white"><?= esc_html($description); ?></p>
                                    <?php endif; ?>
                                    <?php if ($btn_label && $btn_url) : ?>
                                        <a href="<?= esc_url($btn_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="our_commitment_request_consultation">
                                            <?= esc_html($btn_label); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php // ===================== GLOBAL REACH ===================== 
        ?>
        <?php if (get_row_layout() === 'global_reach') :
            $heading     = get_sub_field('gr_heading');
            $description = get_sub_field('gr_description');
            $btn_label   = get_sub_field('gr_btn_label');
            $btn_url     = get_sub_field('gr_btn_url');
        ?>
            <section class="global_reach" data-aos="fade-down" data-aos-duration="900" data-aos-delay="180">
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content">
                                    <?php if ($heading) : ?>
                                        <h2 class="text-white"><?= esc_html($heading); ?></h2>
                                    <?php endif; ?>
                                    <?php if ($description) : ?>
                                        <p class="text-white"><?= esc_html($description); ?></p>
                                    <?php endif; ?>
                                    <?php if ($btn_label && $btn_url) : ?>
                                        <a href="<?= esc_url($btn_url); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="global_reach_contact_team">
                                            <?= esc_html($btn_label); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();

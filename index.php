<?php
/**
 * Template Name: New Homepage
 */
get_header();

$home_url = get_home_url();

// Hero
$hero_banner_video_background = get_field('hero_banner_video_background');
$hero_banner_title             = get_field('hero_banner_title');
$hero_banner_description       = get_field('hero_banner_description');
$hero_banner_button            = get_field('hero_banner_button');
$hero_banner_button_url        = is_string($hero_banner_button) ? $hero_banner_button : (is_array($hero_banner_button) && isset($hero_banner_button['url']) ? $hero_banner_button['url'] : '');
$hero_banner_button_title      = is_array($hero_banner_button) && !empty($hero_banner_button['title']) ? $hero_banner_button['title'] : 'See Our Solutions';
$hero_banner_button_target     = is_array($hero_banner_button) && !empty($hero_banner_button['target']) ? $hero_banner_button['target'] : '_self';

// What We Do
$what_we_do_title       = get_field('what_we_do_title');
$what_we_do_description = get_field('what_we_do_description');

// About
$about_title       = get_field('about_title');
$about_description = get_field('about_description');

// Stay Informed
$stay_informed_title       = get_field('stay_informed_title');
$stay_informed_description = get_field('stay_informed_description');
$stay_informed_button_url  = get_field('stay_informed_button_url');
$stay_informed_button_text = get_field('stay_informed_button_text');

/**
 * Programs section — ACF Repeater: 'programs_list'
 * Sub-fields per row:
 *   - program_name        (Text)      e.g. "C.A.R.R."
 *   - program_description (Textarea)  e.g. "Asset-backed funding for commodities and resources"
 *   - program_url         (URL)       e.g. "https://phxcapsolutions.com/carr/"
 */
$programs_list = get_field('programs_list');

// Fallback if ACF not yet set up
$default_programs = [
    ['program_name' => 'C.A.R.R.', 'program_description' => 'Asset-backed funding for commodities and resources',   'program_url' => '/carr/'],
    ['program_name' => 'D.I.S.C.', 'program_description' => 'Deferred instrument & structured capital solutions',    'program_url' => '/disc/'],
    ['program_name' => 'F.U.E.L.', 'program_description' => 'Venture capital and business growth funding',           'program_url' => '/fuel/'],
    ['program_name' => 'S.E.E.D.', 'program_description' => 'Tiered entry funding for emerging ventures',            'program_url' => '/seed/'],
    ['program_name' => 'G.I.F.T.', 'program_description' => 'Philanthropic and grant-based capital programs',        'program_url' => '/gift/'],
    ['program_name' => 'L.I.F.T.', 'program_description' => 'Large-cap financing for high-value projects',          'program_url' => '/lift/'],
];

$programs = !empty($programs_list) ? $programs_list : $default_programs;
?>

<!-- ══════════════════════════
     HERO — Video Background
══════════════════════════ -->
<section class="hp_hero">
    <video class="hp_hero__video video-bg" autoplay loop muted playsinline
        onloadedmetadata="this.currentTime = 0;"
        ontimeupdate="if(this.currentTime > 7) this.currentTime = 0;">
        <source src="<?php echo esc_url($hero_banner_video_background); ?>" type="video/mp4">
    </video>
    <div class="hp_hero__overlay"></div>

    <div class="wrapper">
        <div class="hp_hero__content">
            <p class="hp_hero__eyebrow">EMPOWERING YOUR BUSINESS AND REAL ESTATE VENTURES WITH</p>
            <?php if ($hero_banner_title) : ?>
            <h1 class="hp_hero__title"><?php echo wp_kses_post($hero_banner_title); ?></h1>
            <?php else : ?>
            <h1 class="hp_hero__title">Tailored Funding<br>Solutions.</h1>
            <?php endif; ?>

            <?php if ($hero_banner_description) : ?>
            <div class="hp_hero__desc"><?php echo wp_kses_post($hero_banner_description); ?></div>
            <?php endif; ?>

            <a href="<?php echo esc_url($hero_banner_button_url ?: '#programs'); ?>"
               target="<?php echo esc_attr($hero_banner_button_target); ?>"
               class="hp_hero__btn yellow_btn">
                <?php echo esc_html($hero_banner_button_title); ?> &nbsp;+
            </a>
        </div>
    </div>
</section>

<!-- ══════════════════════════
     WHAT WE DO
══════════════════════════ -->
<section class="hp_what_we_do">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="hp_what_we_do__title">
                        <?php echo $what_we_do_title ? wp_kses_post($what_we_do_title) : 'What We Do'; ?>
                    </h2>
                </div>
                <div class="col-lg-7">
                    <div class="hp_what_we_do__body">
                        <?php if ($what_we_do_description) : ?>
                            <?php echo wp_kses_post($what_we_do_description); ?>
                        <?php else : ?>
                            <p>Phoenix Capital Solutions specializes in providing structured finance, asset monetization, and institutional-level capital solutions. By assessing financial needs and identifying suitable funding sources, we offer expert guidance to secure funds and optimize capital structures for business growth.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════
     SIX SPECIALIZED PROGRAMS
══════════════════════════ -->
<section class="hp_programs" id="programs">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="hp_programs__header text-center">
                        <p class="hp_programs__eyebrow">OUR PROGRAMS</p>
                        <h2 class="hp_programs__title">Six Specialized Funding Programs</h2>
                    </div>
                </div>
            </div>

            <div class="row hp_programs__grid">
                <?php foreach ($programs as $program) :
                    $name = $program['program_name']        ?? '';
                    $desc = $program['program_description'] ?? '';
                    $url  = $program['program_url']         ?? '#';
                ?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?php echo esc_url($url); ?>"
                       class="hp_program_card"
                       title="<?php echo esc_attr($name); ?> Program">
                        <div class="hp_program_card__inner">
                            <h3 class="hp_program_card__name"><?php echo esc_html($name); ?></h3>
                            <?php if ($desc) : ?>
                            <p class="hp_program_card__desc"><?php echo esc_html($desc); ?></p>
                            <?php endif; ?>
                            <span class="hp_program_card__cta">LEARN MORE &nbsp;&rsaquo;</span>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════
     ABOUT PHOENIX CAPITAL
══════════════════════════ -->
<section class="hp_about">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hp_about__divider"></div>
                    <h2 class="hp_about__title">
                        <?php echo $about_title ? wp_kses_post($about_title) : 'About Phoenix Capital Solutions'; ?>
                    </h2>
                    <div class="hp_about__body">
                        <?php if ($about_description) : ?>
                            <?php echo wp_kses_post($about_description); ?>
                        <?php else : ?>
                            <p>Phoenix Capital Solutions has established itself as a premier provider of tailored funding solutions. With a focus on transparency and bespoke financial strategies, the firm has successfully managed both small and large-cap projects, collaborating with investors, developers, and corporations globally.</p>
                            <p>Our mission is to provide innovative and customized financial solutions that empower businesses and real estate ventures to achieve sustainable growth — and our vision is to be the global leader in structured finance and asset monetization, recognized for our commitment to client success and innovation.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
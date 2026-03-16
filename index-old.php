<?php
if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();

get_header();
?>

<section class="banner" id="home" data-aos="zoom-out" data-aos-duration="900">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="content">
                        <h1 class="text-center text-white">Strategic Capital Solutions for Qualified Investors</h1>
                        <p class="text-white text-center"> Access institutional-grade financial structures, private
                            banking instruments, and secure pathways to large-capital growth. Designed for
                            high-net-worth individuals and global investors seeking sophisticated, transparent, and
                            compliant capital solutions.</p>
                        <div class="group_btn">
                            <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="request_a_confidentials_consultation">Request a
                                Confidential Consultation</a>
                            <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer"
                                class="transparent_btn" id="explore_programs">Explore
                                Programs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_we_do" data-aos="fade-right" data-aos-duration="900" data-aos-delay="80">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content pe-lg-5">
                        <h2 class="text-white">What We Do</h2>
                        <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/what-we-do.jpg'); ?>" alt="What We Do"
                            title="What We Do" class="w-100 d-block d-lg-none mb-4">
                        <p class="text-white">Phoenix Capital Solutions provides structured finance programs for
                            qualified investors seeking secure access to large-scale capital instruments. Through
                            advanced financial engineering, rigorous due diligence, and trusted institutional
                            relationships, we help clients leverage existing liquidity into high-value banking
                            instruments, long-term capital cycles, and sustainable financial growth.</p>
                        <p class="text-white">Our expertise spans private credit instruments, structured capital
                            formation, and specialized programs designed to activate substantial capital without
                            requiring the liquidation of existing assets. Every solution is tailored, compliant, and
                            built to support long-term expansion.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/what-we-do.jpg'); ?>" alt="What We Do"
                            title="What We Do">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why_we_do_what_we_do" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/what-we-do.jpg'); ?>" alt="What We Do"
                            title="What We Do">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-lg-5">
                        <h2 class="text-white">Why We Do What We Do</h2>
                        <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/Why We Do What We Do.jpg'); ?>"
                            alt="Why We Do What We Do" title="Why We Do What We Do"
                            class="w-100 d-block d-lg-none mb-4">
                        <p class="text-white">We believe qualified investors deserve access to sophisticated
                            financial structures traditionally reserved for institutional networks. Our mission is
                            to create transparent, secure, and strategically engineered pathways for meaningful
                            capital growth.</p>
                        <p class="text-white">Phoenix Capital Solutions exists to support ambitious ventures,
                            empower long-term wealth creation, and deliver clarity and confidence in an industry
                            where precision, compliance, and trust are paramount.</p>
                        <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="why_we_do_request_consultation">Request a
                            Confidential Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="program_overview" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="120">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center text-white">Program Overview</h2>
                        <p class="text-center text-white">Explore Our Capital ProgramsEach program is designed with
                            clear timelines, eligibility requirements, and compliance protections. Select a program
                            to learn more.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="flip-left" data-aos-delay="80">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/SBLC BG Deferred Program.png'); ?>"
                                alt="SBLC/BG Deferred Program" title="SBLC/BG Deferred Program">
                        </div>
                        <h3 class="text-center">SBLC/BG Deferred Program</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="120">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/Structured Capital Formation Program.png'); ?>"
                                alt="Structured Capital Formation Program"
                                title="Structured Capital Formation Program">
                        </div>
                        <h3 class="text-center">Structured Capital Formation Program</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="flip-right" data-aos-delay="160">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/C.A.R.R. Program.png'); ?>" alt="C.A.R.R. Program"
                                title="C.A.R.R. Program">
                        </div>
                        <h3 class="text-center">C.A.R.R. Program</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up-right" data-aos-delay="200">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/D.I.S.C. Program.png'); ?>" alt="D.I.S.C. Program"
                                title="D.I.S.C. Program">
                        </div>
                        <h3 class="text-center">D.I.S.C. Program</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/F.U.E.L. Program.png'); ?>" alt="F.U.E.L. Program"
                                title="F.U.E.L. Program">
                        </div>
                        <h3 class="text-center">F.U.E.L. Program</h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up-left" data-aos-delay="280">
                    <div class="content">
                        <div class="image">
                            <img loading="lazy" src="<?php echo esc_url($theme_uri . '/assets/img/homepage/Project Financing Program.png'); ?>"
                                alt="Project Financing Program" title="Project Financing Program">
                        </div>
                        <h3 class="text-center">Project Financing Program</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn margin-auto" id="program_overview_view_all_programs">View
                        All Programs</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how_it_works" data-aos="fade-up-right" data-aos-duration="900" data-aos-delay="140">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="_row justify-content-between">
                <div class="left_content pe-lg-5">
                    <div class="content">
                        <h2 class="text-white">How It Works</h2>
                        <p class="text-white">Our structured approach provides clients with a clear, documented
                            pathway
                            from initial consultation to active capital deployment.</p>
                        <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="how_it_works_view_full_process">View the Full
                            Process</a>
                    </div>
                </div>
                <div class="right_content">
                    <div class="owl-carousel owl-theme" id="how_it_works">
                        <div class="items" style="width: 229px;">
                            <span class="count">1</span>
                            <h3>Confidential Consultation</h3>
                        </div>
                        <div class="items" style="width: 354px;">
                            <span class="count">2</span>
                            <h3>Comprehensive KYC/AML and Compliance Review</h3>
                        </div>
                        <div class="items" style="width: 300px;">
                            <span class="count">3</span>
                            <h3>Funds Transfer to IOLTA Trust Account</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_commitment" data-aos="flip-up" data-aos-duration="900" data-aos-delay="160">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content pe-lg-5">
                        <ul>
                            <li>
                                <p>IOLTA trust account protections under state bar regulations</p>
                            </li>
                            <li>
                                <p>Verified tier-one banking relationships</p>
                            </li>
                            <li>
                                <p>No guarantees or performance claims beyond documented contractual terms</p>
                            </li>
                            <li>
                                <p>Strict KYC/AML verification</p>
                            </li>
                            <li>
                                <p>Complete audit trail for every transaction</p>
                            </li>
                            <li>
                                <p>Confidential and secure communication throughout the lifecycle of each engagement
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-lg-5">
                        <h2 class="text-white">Our Commitment To Security And Compliance</h2>
                        <p class="text-white">Phoenix Capital Solutions was built on the principles of transparency,
                            accountability, and institutional-level oversight.</p>
                        <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="our_commitment_request_consultation">Request a
                            Confidential Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="global_reach" data-aos="fade-down" data-aos-duration="900" data-aos-delay="180">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="text-white">Global Reach</h2>
                        <p class="text-white">Phoenix Capital Solutions is headquartered in West Palm Beach,
                            Florida, and serves qualified investors across North America, Europe, Asia, and select
                            global markets. Our team maintains international access to institutional banking
                            networks and vetted monetization partners.</p>
                        <a href="<?= get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="yellow_btn" id="global_reach_contact_team">Contact Our
                            Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

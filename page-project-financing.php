<?php
/*
Template Name: Project Financing Page
*/

get_header();
$img_path = get_template_directory_uri() . '/assets/img/project-financing';
?>

<main class="project_financing_page">

    <!-- ========== HERO ========== -->
    <section class="pf_hero">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="hero_content">
                            <div class="program_label">Structured Funding for Large-Scale Development &amp; Global Ventures</div>
                            <h1 class="text-white mb-4">Structured Project Financing for Ambitious, Large-Scale Ventures</h1>
                            <p class="mb-4">A compliance-driven, institutionally aligned program designed to help qualified developers and business owners secure substantial funding for domestic and international projects.</p>
                            <div class="hero_btns">
                                <a href="/contact" class="btn_gold">Request a Confidential Consultation</a>
                                <a href="#" class="btn_outline">Download Program Overview</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero_image">
                            <img src="<?php echo $img_path; ?>/pf-hero.jpg" alt="Project Financing — Bank Building" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== VALUE STATEMENT ========== -->
    <section class="pf_value">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center mb-5">
                        <h2 class="text-white mb-3">On a Single <span class="text-gold">$100M</span> Project, Phoenix Capital Generates <span class="text-gold">$45.3M</span> More Profit Than Traditional Financing</h2>
                        <p class="value_sub">Keep 55–80% equity instead of 10–20%. Deploy 10% capital instead of 35%.</p>
                        <p class="value_sub">Let us handle the complexity</p>
                    </div>
                    <div class="col-lg-12">
                        <hr class="value_divider" />
                        <div class="value_compare">
                            <div class="compare_item">
                                <div class="compare_icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M9 22V12h6v10" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="compare_label">Traditional:</div>
                                <div class="compare_text">35% capital required → 10–20% equity</div>
                            </div>
                            <div class="compare_item">
                                <div class="compare_icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="compare_label">Phoenix:</div>
                                <div class="compare_text">10% capital required → 65% equity</div>
                            </div>
                            <div class="compare_item">
                                <div class="compare_icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <polyline points="17 6 23 6 23 12" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="compare_label">Result:</div>
                                <div class="compare_text">$69M more equity on a $100M project</div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="#calculator" class="btn_gold_solid">See Your Numbers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CALCULATOR ========== -->
    <section class="pf_calculator" id="calculator">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row align-items-stretch">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <div class="calc_left">
                            <h2 class="text-white mb-4">Phoenix Value Calculator</h2>
                            <div class="calc_field">
                                <div class="calc_field_header">
                                    <label>Total Project Value</label>
                                    <div class="calc_value_display" id="sliderDisplay">$100,000,000</div>
                                </div>
                                <input type="range" id="projectSlider" class="calc_slider"
                                    min="100000000" max="10000000000" step="1000000" value="100000000" />
                                <div class="calc_range_labels">
                                    <span>$100,000,000</span>
                                    <span>$10,000,000,000</span>
                                </div>
                                <p class="calc_hint">Select the total value of your project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="calc_result_card">
                            <div class="calc_result_row">
                                <div>
                                    <div class="result_label">Your Project Value</div>
                                    <div class="result_sub">Minimum project size: $100M</div>
                                </div>
                                <div class="result_project_val" id="resultProjectVal">$100,000,000</div>
                            </div>
                            <div class="calc_divider"></div>
                            <div class="result_revenue_label">Phoenix Additional Revenue</div>
                            <div class="result_revenue_val" id="resultRevenue">$45,300,000</div>
                            <div class="calc_divider"></div>
                            <div class="result_cta_heading">Explore Phoenix's Impact on Your Project</div>
                            <p class="result_cta_text">Discover how Phoenix can significantly enhance your real estate development's profitability.</p>
                            <a href="/contact" class="result_cta_btn">See How We Can Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROGRAM OVERVIEW ========== -->
    <section class="pf_overview">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="overview_content">
                            <h2 class="text-white mb-4">Program Overview</h2>
                            <p class="mb-4">The Project Financing Program provides qualified clients with access to structured capital solutions for large-scale development initiatives, including real estate, infrastructure, energy, hospitality, technology, and global expansion projects.</p>
                            <p class="mb-4">This program supports businesses and developers who require significant capital deployment without relying on traditional lending, asset liquidation, or restrictive underwriting. By utilizing Phoenix Capital Solutions offers a pathway to secure funding for complex project needs.</p>
                            <p class="mb-0">Every engagement is tailored to project scope, financial requirements, regulatory obligations, and long-term investment strategy. The result is a structured, transparent process backed by institutional-grade oversight.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview_image">
                            <img src="<?php echo $img_path; ?>/pf-overview.jpg" alt="Project Financing Overview" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROGRAM MECHANICS ========== -->
    <section class="pf_mechanics">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header mb-5">
                            <h2 class="text-white">Program Mechanics</h2>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="mechanic_card">
                            <div class="mechanic_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="3" width="20" height="18" rx="2" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M7 8h10M7 12h6" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3 class="text-white mb-2">Project Analysis &amp; Qualification</h3>
                            <p>Evaluation including feasibility, capital requirements, investment potential, and compliance alignment.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="mechanic_card">
                            <div class="mechanic_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="text-white mb-2">Capital Structuring Pathways</h3>
                            <p>Phoenix Capital Solutions provides institutional-grade mechanisms, including monetized banking instruments, structured capital cycles, hybrid investment participation, and capital allocation from approved programs.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="mechanic_card">
                            <div class="mechanic_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L3 6v6c0 6.63 4.26 11.8 9 13 4.74-1.2 9-6.37 9-13V6L12 2z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round"/>
                                    <path d="M8 12l3 3 5-5" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="text-white mb-2">Compliance-Driven Funding Flow</h3>
                            <p>Capital deployment plans must pass strict KYC/AML, CIS, documentation, and regulatory review. All funding must be deployed into qualified business activities.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="mechanic_card">
                            <div class="mechanic_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M12 8v4l3 3" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3 class="text-white mb-2">Strategic Deployment</h3>
                            <p>Once approved, capital is deployed into projects aligned with operational demands, requirements, and institutional oversight.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROGRAM TIMELINE — FLIP CARDS ========== -->
    <section class="pf_timeline">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header text-center mb-3">
                            <h2 class="text-white">Program Timeline</h2>
                        </div>
                        <p class="timeline_note text-center mb-5">Project financing timelines vary based on project readiness, documentation, and capital structuring needs. A typical sequence includes:</p>
                    </div>

                    <div class="col-lg mb-4">
                        <div class="flip_card">
                            <div class="flip_card_inner">
                                <div class="flip_card_front">
                                    <div class="phase_tag">Week 1–2</div>
                                    <h3 class="text-white mb-0">Project Submission &amp; Compliance Review</h3>
                                </div>
                                <div class="flip_card_back">
                                    <div class="phase_tag">Week 1–2</div>
                                    <ul class="phase_list">
                                        <li>Client submits project overview, financials, and documentation for preliminary qualification.</li>
                                        <li>Simultaneous KYC, AML, CIS, and POF verification.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg mb-4">
                        <div class="flip_card">
                            <div class="flip_card_inner">
                                <div class="flip_card_front">
                                    <div class="phase_tag">Week 2–4</div>
                                    <h3 class="text-white mb-0">Project Evaluation</h3>
                                </div>
                                <div class="flip_card_back">
                                    <div class="phase_tag">Week 2–4</div>
                                    <ul class="phase_list">
                                        <li>Institutional partners examine project feasibility, revenue forecasts, compliance considerations, and capital requirements.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg mb-4">
                        <div class="flip_card">
                            <div class="flip_card_inner">
                                <div class="flip_card_front">
                                    <div class="phase_tag">Week 4–8</div>
                                    <h3 class="text-white mb-0">Funding Structure Development</h3>
                                </div>
                                <div class="flip_card_back">
                                    <div class="phase_tag">Week 4–8</div>
                                    <ul class="phase_list">
                                        <li>A tailored financing pathway is engineered using one or more structured programs depending on the project's needs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg mb-4">
                        <div class="flip_card">
                            <div class="flip_card_inner">
                                <div class="flip_card_front">
                                    <div class="phase_tag">Week 8–12+</div>
                                    <h3 class="text-white mb-0">Capital Deployment</h3>
                                </div>
                                <div class="flip_card_back">
                                    <div class="phase_tag">Week 8–12+</div>
                                    <ul class="phase_list">
                                        <li>Approved projects begin receiving structured capital based on pre-approved timelines and project milestones.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg mb-4">
                        <div class="flip_card">
                            <div class="flip_card_inner">
                                <div class="flip_card_front">
                                    <div class="phase_tag">Ongoing</div>
                                    <h3 class="text-white mb-0">Continuous Capital Cycles</h3>
                                </div>
                                <div class="flip_card_back">
                                    <div class="phase_tag">Ongoing</div>
                                    <ul class="phase_list">
                                        <li>Additional capital cycles may be deployed as required by project phases, compliance rules, and verified performance benchmarks.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROJECT TYPES ========== -->
    <section class="pf_project_types">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header text-center mb-5">
                            <h2 class="text-white">Project Types Supported</h2>
                        </div>
                    </div>

                    <?php
                    $types = [
                        ['icon' => 'M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2zM9 22V12h6v10', 'label' => 'Commercial and residential real estate development'],
                        ['icon' => 'M8 6l4-4 4 4M4 10h16M5 10v10h14V10', 'label' => 'Infrastructure and transportation projects'],
                        ['icon' => 'M13 2L3 14h9l-1 8 10-12h-9l1-8z', 'label' => 'Energy and renewable resource ventures'],
                        ['icon' => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18', 'label' => 'Technology and telecommunications expansions'],
                        ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'label' => 'Hospitality, tourism, and resort development'],
                        ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064', 'label' => 'Global business expansion initiatives'],
                        ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'label' => 'Manufacturing and logistics facilities'],
                        ['icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4.03 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4.03-3-9s1.34-9 3-9', 'label' => 'Strategic international investments'],
                    ];
                    foreach ($types as $type): ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="project_type_item">
                            <div class="pt_icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="<?php echo $type['icon']; ?>" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0"><?php echo $type['label']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== CAPITAL MODEL ========== -->
    <section class="pf_capital_model">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header text-center mb-2">
                            <h2 class="text-white">Capital Model</h2>
                        </div>
                        <p class="model_note text-center mb-5">This framework is conceptual and does not guarantee financial outcomes.</p>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="capital_col">
                            <h3 class="text-white mb-4">A generalized model:</h3>
                            <ul class="capital_list">
                                <li>A client submits a large-scale project with verified financial projections</li>
                                <li>Funding structure is built using institutional-grade capital pathways</li>
                                <li>Upon approval, capital is deployed in phases, tied to development milestones and compliance controls</li>
                                <li>Capital may be reinvested or recycled through structured cycles for additional phases</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="capital_col">
                            <h3 class="text-white mb-4">Financing is structured using capital generated from:</h3>
                            <ul class="capital_list">
                                <li>Monetized bank instruments</li>
                                <li>Structured capital formation pathways</li>
                                <li>Multi-cycle revenue programs</li>
                                <li>Hybrid institutional capital solutions</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== ELIGIBILITY ========== -->
    <section class="pf_eligibility">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header text-center mb-3">
                            <h2 class="text-white">Eligibility Requirements</h2>
                        </div>
                        <p class="eligibility_intro text-center mb-5">To participate in the Project Financing Program, clients must meet the following:</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round"/>
                                    <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Fully documented project scope and financial model</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Executive summary, business plan, or feasibility study</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="8" r="4" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Clear capital deployment plan</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="8" r="4" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                    <path d="M19 8l2 2-4 4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Regulatory or permitting details if applicable</p>
                        </div>
                    </div>

                    <!-- Client Requirements sub-section -->
                    <div class="col-lg-12 mt-3 mb-4">
                        <div class="client_req_header text-center mb-4">
                            <h3 class="text-white">Client Requirements</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                    <circle cx="9" cy="7" r="4" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M19 8l2 2-4 4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Complete CIS, KYC, AML, and POF verification</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="3" width="20" height="14" rx="2" stroke="#c59b32" stroke-width="1.8"/>
                                    <path d="M8 21h8M12 17v4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Demonstrated operational capacity to manage project completion</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L3 6v6c0 6.63 4.26 11.8 9 13 4.74-1.2 9-6.37 9-13V6L12 2z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round"/>
                                    <path d="M8 12l3 3 5-5" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Compliance alignment with international financial guidelines</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="eligibility_card">
                            <div class="elig_icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round"/>
                                    <path d="M9 15l2 2 4-4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="mb-0">Ability to meet institutional documentation requirements</p>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center mt-3">
                        <a href="/security-and-compliance/" class="btn_gold_solid">Security and Compliance</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== USE CASES ========== -->
    <section class="pf_use_cases">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header text-center mb-3">
                            <h2 class="text-white">Generalized Use Cases</h2>
                        </div>
                        <p class="use_intro text-center mb-5">These examples illustrate how clients typically use the Project Financing Program:</p>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="use_case_card">
                            <div class="use_case_image">
                                <img src="<?php echo $img_path; ?>/pf-usecase-1.jpg" alt="Commercial Development" />
                            </div>
                            <div class="use_case_content">
                                <div class="scenario_tag">Scenario 1</div>
                                <p class="mb-0">A developer seeks structured financing for a multi-phase commercial development without traditional bank underwriting restrictions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="use_case_card">
                            <div class="use_case_image">
                                <img src="<?php echo $img_path; ?>/pf-usecase-2.jpg" alt="Infrastructure Expansion" />
                            </div>
                            <div class="use_case_content">
                                <div class="scenario_tag">Scenario 2</div>
                                <p class="mb-0">An infrastructure firm requires capital to initiate an international expansion project with complex regulatory demands.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="use_case_card">
                            <div class="use_case_image">
                                <img src="<?php echo $img_path; ?>/pf-usecase-3.jpg" alt="Renewable Energy" />
                            </div>
                            <div class="use_case_content">
                                <div class="scenario_tag">Scenario 3</div>
                                <p class="mb-0">A renewable energy project leverages structured capital cycles to fund manufacturing and deployment in emerging markets.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="pf_faq">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_header mb-5">
                            <h2 class="text-white">Frequently Asked Questions</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="faq_accordion" id="pfFaq">

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#pf-faq-1" aria-expanded="false">
                                    Do projects need collateral?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="pf-faq-1" data-bs-parent="#pfFaq">
                                    <p>Yes, projects require 10% collateral. This depends on project type, documentation, and institutional requirements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#pf-faq-2" aria-expanded="false">
                                    Does this program guarantee funding?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="pf-faq-2" data-bs-parent="#pfFaq">
                                    <p>No. Funding depends on project viability, compliance, institutional approval, and program availability.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#pf-faq-3" aria-expanded="false">
                                    Are funds deployed upfront?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="pf-faq-3" data-bs-parent="#pfFaq">
                                    <p>No. Capital is deployed in phases, following milestone-based approvals and regulatory requirements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#pf-faq-4" aria-expanded="false">
                                    Can international projects apply?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="pf-faq-4" data-bs-parent="#pfFaq">
                                    <p>Yes, provided the project meets compliance and documentation standards.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#pf-faq-5" aria-expanded="false">
                                    What project sizes qualify?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="pf-faq-5" data-bs-parent="#pfFaq">
                                    <p>Only large-scale projects with detailed documentation and verifiable feasibility are considered.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== DISCLOSURE ========== -->
    <section class="pf_disclosure">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="disclosure_label">Program Disclosure</p>
                        <p class="disclosure_text mb-0">The Project Financing Program is available only to qualified clients with verified projects that meet strict compliance, feasibility, and documentation standards. All timelines, funding levels, and capital structures depend on institutional processes, third-party verification, and regulatory approval. Phoenix Capital Solutions does not guarantee financial performance, project funding, or outcomes. All information is provided for educational purposes only and does not constitute financial, legal, or investment advice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
(function() {
    const slider = document.getElementById('projectSlider');
    const display = document.getElementById('sliderDisplay');
    const resultProjectVal = document.getElementById('resultProjectVal');
    const resultRevenue = document.getElementById('resultRevenue');

    function formatCurrency(val) {
        return '$' + Math.round(val).toLocaleString('en-US');
    }

    function calculate(projectValue) {
        // Phoenix generates ~45.3% additional revenue on top of traditional model
        // Based on: 10% capital vs 35% capital, 65% equity vs 10-20% equity
        const additionalRevenue = projectValue * 0.453;
        return additionalRevenue;
    }

    function update() {
        const val = parseInt(slider.value);
        display.textContent = formatCurrency(val);
        resultProjectVal.textContent = formatCurrency(val);
        resultRevenue.textContent = formatCurrency(calculate(val));
    }

    if (slider) {
        slider.addEventListener('input', update);
        update();
    }
})();
</script>

<?php get_footer(); ?>
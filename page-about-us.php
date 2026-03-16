<?php
/*
Template Name: About Us Page
*/

get_header();

$img_path = get_template_directory_uri() . '/assets/img/about_us';
?>


<section class="about_hero">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hero_image">
                        <img src="<?php echo $img_path; ?>/about-hero.jpg" alt="Phoenix Capital Solutions Team" />
                        <div class="image_badge">
                            <span class="badge_number">2012</span>
                            <span class="badge_label">Founded</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero_content">
                        <div class="program_label">Who We Are</div>
                        <h1 class="text-white mb-4">Real-Life Strategy to<br><span class="text-gold">Reach Your Goals</span></h1>
                        <p class="text-white mb-4">Phoenix Capital Solutions is a West Palm Beach–based institutional capital firm serving qualified investors across North America, Europe, Asia, and select global markets. We maintain international access to institutional banking networks and vetted monetization partners.</p>
                        <p class="text-white mb-0">Our team specializes in structured capital formation, asset monetization, and compliance-driven program deployment — built for institutional-level participants seeking repeatable, long-term capital solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_stats">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="stats_content">
                        <div class="program_label">Our Reach</div>
                        <h2 class="text-white mb-4">We Strive for Impact<br>Across the Globe</h2>
                        <p class="text-white mb-5">Our programs are structured to deliver institutional-grade results at a global scale — connecting qualified clients with compliant capital pathways that create lasting financial leverage.</p>
                        <div class="stats_grid">
                            <div class="stat_item">
                                <div class="stat_number text-gold">$500M+</div>
                                <div class="stat_label text-white">Capital Structured</div>
                            </div>
                            <div class="stat_item">
                                <div class="stat_number text-gold">30+</div>
                                <div class="stat_label text-white">Countries Served</div>
                            </div>
                            <div class="stat_item">
                                <div class="stat_number text-gold">85%</div>
                                <div class="stat_label text-white">Client Retention</div>
                            </div>
                            <div class="stat_item">
                                <div class="stat_number text-gold">5+</div>
                                <div class="stat_label text-white">Active Programs</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="stats_image">
                        <img src="<?php echo $img_path; ?>/about-stats.jpg" alt="Phoenix Capital Global Reach" />
                        <div class="floating_card">
                            <div class="fc_icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2L3 6v6c0 4.97 3.46 9.1 7 10 3.54-.9 7-5.03 7-10V6L10 2z" stroke="#c59b32" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="M7 10l2 2 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="fc_text">
                                <div class="fc_value">Tier-1 Banks</div>
                                <div class="fc_label">Institutional Partners</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_team">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header mb-5">
                        <div class="program_label">Our People</div>
                        <h2 class="text-white mb-3">Our Staff is Extremely Qualified<br>to Help Your Business Grow</h2>
                        <p class="text-white mb-0">Our leadership team brings decades of combined experience in institutional finance, compliance structuring, and international capital markets.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="team_card">
                        <div class="team_image">
                            <img src="<?php echo $img_path; ?>/staff-01.jpg" alt="Justin Watson" />
                        </div>
                        <div class="team_info">
                            <h3 class="text-white mb-1">Justin Watson</h3>
                            <div class="team_role">Senior Capital Advisor</div>
                            <p class="text-white mb-0">Leads client engagement and program structuring for large-scale asset monetization and capital deployment strategies.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="team_card">
                        <div class="team_image">
                            <img src="<?php echo $img_path; ?>/staff-05.jpg" alt="Lori Cruz" />
                        </div>
                        <div class="team_info">
                            <h3 class="text-white mb-1">Lori Cruz</h3>
                            <div class="team_role">Compliance & Operations</div>
                            <p class="text-white mb-0">Oversees regulatory compliance, documentation review, and institutional partnership coordination across all active programs.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about_faq">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="faq_label">
                        <div class="program_label">Knowledge Base</div>
                        <h2 class="text-white mb-3">Frequently Asked Questions</h2>
                        <p class="text-white mb-0">Everything you need to know about our programs, eligibility, capital use, and compliance requirements.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq_accordion" id="phoenixFaq">

                        <div class="faq_group">
                            <div class="group_label">C.A.R.R. Program</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-carr-1" aria-expanded="false">
                                    Who is the C.A.R.R. Program designed for?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-carr-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">C.A.R.R. is intended for asset owners and capital holders who operate at an institutional level and require structured, compliant pathways to access and deploy capital. The program is best suited for participants with verified assets and clear documentation.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-carr-2" aria-expanded="false">
                                    Is there a minimum capital or asset requirement?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-carr-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Eligibility is determined on a case-by-case basis and depends on asset class, documentation quality, and structuring pathway. Certain asset or capital thresholds apply, but requirements vary based on the specific C.A.R.R. file.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-carr-3" aria-expanded="false">
                                    How is C.A.R.R. different from other programs?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-carr-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">C.A.R.R. is designed around institutional asset monetization, governance, and repeatable capital cycling — not one-time liquidity events or speculative offerings. The program emphasizes documentation, compliance, and long-term capital efficiency over short-term transactions.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-carr-4" aria-expanded="false">
                                    Can revenue be withdrawn freely?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-carr-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Program-generated proceeds are subject to governance, compliance, and reinvestment parameters. Capital use and distributions must align with approved deployment plans, regulatory considerations, and program guidelines rather than unrestricted withdrawals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq_group">
                            <div class="group_label">Project Financing</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pf-1" aria-expanded="false">
                                    What project sizes qualify?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-pf-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Only large-scale projects with detailed documentation and verifiable feasibility are considered.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pf-2" aria-expanded="false">
                                    Can international projects apply?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-pf-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes, provided the project meets compliance and documentation standards.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pf-3" aria-expanded="false">
                                    Are funds deployed upfront?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-pf-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. Capital is deployed in phases, following milestone-based approvals and regulatory requirements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pf-4" aria-expanded="false">
                                    Does this program guarantee funding?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-pf-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. Funding depends on project viability, compliance, institutional approval, and program availability.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pf-5" aria-expanded="false">
                                    Do projects need collateral?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-pf-5" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes, projects require 10% collateral. This depends on project type, documentation, and institutional requirements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq_group">
                            <div class="group_label">F.U.E.L. Program</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-fuel-1" aria-expanded="false">
                                    How does F.U.E.L. differ from C.A.R.R. and D.I.S.C.?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-fuel-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">F.U.E.L. incorporates the capital-recycling structure of C.A.R.R. and the asset capitalization mechanics of D.I.S.C., creating a broader and more flexible program.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-fuel-2" aria-expanded="false">
                                    Can I enter using assets instead of liquidity?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-fuel-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes, provided the assets meet verification standards and align with institutional criteria.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-fuel-3" aria-expanded="false">
                                    Is capital use unrestricted?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-fuel-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. A portion may be used for approved personal purposes, but the majority must be reinvested or deployed according to compliance guidelines.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-fuel-4" aria-expanded="false">
                                    Are returns or outcomes guaranteed?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-fuel-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. All outcomes depend on external institutional processes and program-specific variables.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq_group">
                            <div class="group_label">D.I.S.C. Program</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-disc-1" aria-expanded="false">
                                    What types of instruments qualify?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-disc-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Eligibility depends on verification, authenticity, valuation, and compliance screening. Only legitimate and fully documented instruments may qualify.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-disc-2" aria-expanded="false">
                                    Are distributions guaranteed?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-disc-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. All capital outcomes depend on institutional processes, instrument viability, and compliance results.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-disc-3" aria-expanded="false">
                                    Can international clients participate?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-disc-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes, provided they meet all compliance and verification requirements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-disc-4" aria-expanded="false">
                                    What happens if the instrument fails validation?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-disc-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">The program cannot proceed, and no capitalization occurs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq_group">
                            <div class="group_label">Structured Capital Formation (SBLC/BG)</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-scf-1" aria-expanded="false">
                                    What is the purpose of the initial capital contribution?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-scf-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">The contribution covers instrument issuance costs, compliance processing, SWIFT and ISO fees, and administrative expenses associated with facilitating a high-value banking instrument.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-scf-2" aria-expanded="false">
                                    Do clients retain ownership of the instrument?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-scf-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">The issuing bank retains the underlying instrument, while the monetized value is shared according to contractual agreements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-scf-3" aria-expanded="false">
                                    Are funds refundable if issuance fails?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-scf-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes. If the issuing bank fails to deliver the MT760 instrument, the client's initial capital (minus minimal legal or administrative costs) is returned from the IOLTA trust.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-scf-4" aria-expanded="false">
                                    Are there restrictions on capital usage?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-scf-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes. A portion may be used for personal use, while 85% must be allocated to approved projects.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-scf-5" aria-expanded="false">
                                    Can international clients participate?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-scf-5" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Yes, provided they meet all compliance and documentation requirements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq_group">
                            <div class="group_label">SBLC/BG Deferred Program</div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-sblc-1" aria-expanded="false">
                                    Which banks issue the instruments?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-sblc-1" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Top-tier institutions such as HSBC, Citi, UBS, Barclays, or other verified tier-one banks.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-sblc-2" aria-expanded="false">
                                    How secure are client funds?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-sblc-2" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">All funds are held in an IOLTA trust account governed by state bar regulations, ensuring full fiduciary oversight.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-sblc-3" aria-expanded="false">
                                    Are returns guaranteed?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-sblc-3" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">No. All financial performance is subject to market dynamics, platform operations, banking timelines, and compliance requirements.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-sblc-4" aria-expanded="false">
                                    Can I use the funds freely once distributed?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-sblc-4" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Up to 15–20 percent of distributed funds may be used for personal or lifestyle purposes. Remaining funds must be deployed into approved business or investment projects within compliance rules.</p>
                                </div>
                            </div>

                            <div class="faq_item">
                                <button class="faq_question collapsed" data-bs-toggle="collapse" data-bs-target="#faq-sblc-5" aria-expanded="false">
                                    How long is the program?
                                    <svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="faq_answer collapse" id="faq-sblc-5" data-bs-parent="#phoenixFaq">
                                    <p class="text-white mb-0">Standard initial distribution occurs within 10–12 weeks, with full beneficial participation extending up to 40 weeks.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_testimonials">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header text-center mb-5">
                        <div class="program_label mx-auto">Real-Life Results</div>
                        <h2 class="text-white mb-0">We Generate Results for Our Customers</h2>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="testimonial_featured">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"Phoenix Capital brought a level of structure and compliance to our capital strategy that we had never experienced with traditional lenders. The program delivered exactly what was outlined — no surprises, no shortcuts."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Alicia Regnier.jpg" alt="Alicia Regnier" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Alicia Regnier</div>
                                <div class="reviewer_title">Institutional Investor</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"The documentation process was thorough and the compliance framework gave us confidence throughout. A truly institutional-grade experience."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Marie Hibbler.jpg" alt="Marie Hibbler" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Marie Hibbler</div>
                                <div class="reviewer_title">Capital Partner</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"Working with Phoenix opened access to banking relationships that simply weren't available through traditional channels. Their network is unmatched."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Evan Hoffman.jpg" alt="Evan Hoffman" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Evan Hoffman</div>
                                <div class="reviewer_title">Asset Manager</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 4; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="rgba(197,155,50,0.3)" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                            </svg>
                        </div>
                        <blockquote class="text-white">"The structured approach to capital deployment was different from anything we'd encountered. Compliance-first, results-driven — exactly what we needed."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Richard Jeremy.jpg" alt="Richard Jeremy" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Richard Jeremy</div>
                                <div class="reviewer_title">Real Estate Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"Praesent sapien massa, convallis a pellentesque nec, egestas non nisl. Vestibulum ante ipsum primis in faucibus orci luctus."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Brent Schull.jpg" alt="Brent Schull" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Brent Schull</div>
                                <div class="reviewer_title">Capital Partner</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Elizabeth Varela.jpg" alt="Elizabeth Varela" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Elizabeth Varela</div>
                                <div class="reviewer_title">Investor</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial_card">
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="#c59b32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1l2.5 5.5H18l-4.5 4 1.7 6.3L10 13.5l-5.2 3.3L6.5 10.5 2 6.5h5.5L10 1z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-white">"Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh."</blockquote>
                        <div class="reviewer">
                            <div class="reviewer_avatar">
                                <img src="<?php echo $img_path; ?>/Jay C. McLendon.jpg" alt="Jay C. McLendon" />
                            </div>
                            <div class="reviewer_info">
                                <div class="reviewer_name text-white">Jay C. McLendon</div>
                                <div class="reviewer_title">Real Estate Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about_cta">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="program_label">Get Started</div>
                    <h2 class="text-white mb-3">Ready to Explore a Program<br>Designed for Your Goals?</h2>
                    <p class="text-white mb-0">Connect with our team to review your eligibility, documentation requirements, and the right program pathway for your capital objectives.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/contact" class="btn_gold me-3">Contact Us</a>
                    <a href="/programs" class="btn_outline">Our Programs</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
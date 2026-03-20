<?php
/**
 * SEO Head Partial — seo-head.php
 * Include in header.php via:
 * get_template_part('template/seo-head');
 *
 * Handles: title tag, meta description, robots,
 *          canonical, Open Graph, Twitter Card,
 *          per-page overrides via $pcs_seo array.
 */

if (!defined('ABSPATH')) exit;

$site_name   = 'Phoenix Capital Solutions';
$base_url    = 'https://phxcapsolutions.com';
$default_img = get_template_directory_uri() . '/assets/img/global/og-default.jpg';

/* ─────────────────────────────────────────────
   PER-PAGE SEO DATA
   Each key matches the WordPress page slug.
───────────────────────────────────────────── */
$seo_map = [

    // ── Homepage ──────────────────────────────
    '' => [
        'title'       => 'Phoenix Capital Solutions | Private Capital Programs for Accredited Investors',
        'description' => 'Phoenix Capital Solutions offers invitation-only capital programs — C.A.R.R., S.E.E.D., F.U.E.L., G.I.F.T., D.I.S.C., and L.I.F.T. — for verified accredited investors and qualified asset holders.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/global/og-home.jpg',
    ],

    // ── C.A.R.R. ──────────────────────────────
    'carr-program' => [
        'title'       => 'C.A.R.R. Program | Hard Asset Capital Expansion — Phoenix Capital Solutions',
        'description' => 'The C.A.R.R. Program provides qualified hard asset owners with structured pathways to acquire capital, generate revenue cycles, and reinvest under strict compliance standards.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/carr/og-carr.jpg',
    ],

    // ── D.I.S.C. ──────────────────────────────
    'd-i-s-c-program' => [
        'title'       => 'D.I.S.C. Program | Debenture Instrument Securities Capitalization — Phoenix Capital',
        'description' => 'The D.I.S.C. Program converts high-value financial instruments — SBLCs, MTNs, Treasury Bonds — into working capital through a compliant, institutionally structured monetization pathway.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/disc/og-disc.jpg',
    ],

    // ── F.U.E.L. ──────────────────────────────
    'f-u-e-l-program' => [
        'title'       => 'F.U.E.L. Program | Project & Equity Financing — Phoenix Capital Solutions',
        'description' => 'The F.U.E.L. Program bridges traditional lending and equity investment, empowering C.A.R.R. and D.I.S.C. clients to participate in exclusive project financing opportunities.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/fuel/og-fuel.jpg',
    ],

    // ── G.I.F.T. ──────────────────────────────
    'gift' => [
        'title'       => 'G.I.F.T. Program | Grants & Investments for Future Transformation — Phoenix Capital',
        'description' => 'The G.I.F.T. Program is a dual-channel impact framework combining philanthropic grants and impact investments to drive global transformation through structured capital deployment.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/gift/og-gift.jpg',
    ],

    // ── L.I.F.T. ──────────────────────────────
    'lift-program' => [
        'title'       => 'L.I.F.T. Program | Large-Cap Financing for High-Value Projects — Phoenix Capital',
        'description' => 'The L.I.F.T. Program provides large-cap financing solutions for high-value projects and institutional participants seeking structured, compliant capital deployment at scale.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/lift/og-lift.jpg',
    ],

    // ── S.E.E.D. ──────────────────────────────
    'seed-program' => [
        'title'       => 'S.E.E.D. Program | Institutional Capital Formation — Phoenix Capital Solutions',
        'description' => 'The S.E.E.D. Program transforms controlled liquidity into large-scale banking instruments for monetization and long-term capital expansion for qualified investors.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/seed/og-seed.jpg',
    ],

    // ── About Us ──────────────────────────────
    'about-us' => [
        'title'       => 'About Phoenix Capital Solutions | Our Team & Mission',
        'description' => 'Learn about Phoenix Capital Solutions — our mission, leadership team, and commitment to structured, compliant capital programs for accredited investors worldwide.',
        'robots'      => 'index, follow',
        'og_image'    => get_template_directory_uri() . '/assets/img/about/og-about.jpg',
    ],

    // ── Security & Compliance ─────────────────
    'security-and-compliance' => [
        'title'       => 'Security & Compliance Framework | Phoenix Capital Solutions',
        'description' => 'Phoenix Capital Solutions maintains rigorous security and compliance standards across all programs — C.A.R.R., D.I.S.C., F.U.E.L., S.E.E.D., G.I.F.T., and L.I.F.T.',
        'robots'      => 'index, follow',
        'og_image'    => $default_img,
    ],

    // ── Contact Us ────────────────────────────
    'contact-us' => [
        'title'       => 'Contact Phoenix Capital Solutions | Get in Touch',
        'description' => 'Contact Phoenix Capital Solutions to inquire about our invitation-only capital programs. Reach our team for program inquiries, compliance questions, or general information.',
        'robots'      => 'index, follow',
        'og_image'    => $default_img,
    ],

    // ── Resources ─────────────────────────────
    'resources' => [
        'title'       => 'Resources & Insights | Phoenix Capital Solutions',
        'description' => 'Explore capital program resources, articles, and insights from Phoenix Capital Solutions — structured for accredited investors and qualified capital holders.',
        'robots'      => 'index, follow',
        'og_image'    => $default_img,
    ],

    // ── Project Financing ─────────────────────
    'project-financing' => [
        'title'       => 'Project Financing | Large-Scale Structured Loans — Phoenix Capital Solutions',
        'description' => 'Phoenix Capital Solutions provides structured project financing for large-scale ventures — retain majority equity while accessing non-dilutive capital for development projects.',
        'robots'      => 'index, follow',
        'og_image'    => $default_img,
    ],

    // ── Legal pages (noindex) ─────────────────
    'privacy-policy' => [
        'title'       => 'Privacy Policy | Phoenix Capital Solutions',
        'description' => 'Read the Phoenix Capital Solutions privacy policy — how we collect, use, and protect your personal information.',
        'robots'      => 'noindex, follow',
        'og_image'    => $default_img,
    ],

    'terms-and-conditions' => [
        'title'       => 'Terms & Conditions | Phoenix Capital Solutions',
        'description' => 'Review the terms and conditions governing use of the Phoenix Capital Solutions website and participation in our programs.',
        'robots'      => 'noindex, follow',
        'og_image'    => $default_img,
    ],

    'pcs-disclosure' => [
        'title'       => 'Disclosure & Communications Framework | Phoenix Capital Solutions',
        'description' => 'Read the official disclosure and communications framework governing all Phoenix Capital Solutions programs, intermediaries, and investor communications.',
        'robots'      => 'noindex, follow',
        'og_image'    => $default_img,
    ],

    'accessibility' => [
        'title'       => 'Accessibility Statement | Phoenix Capital Solutions',
        'description' => 'Phoenix Capital Solutions is committed to web accessibility for all users. Read our accessibility statement and learn how to report accessibility issues.',
        'robots'      => 'noindex, follow',
        'og_image'    => $default_img,
    ],

    'loan-application' => [
        'title'       => 'Loan Application | Phoenix Capital Solutions',
        'description' => 'Apply for structured financing through Phoenix Capital Solutions. Complete our application to begin the review process for qualified projects and capital programs.',
        'robots'      => 'noindex, follow',
        'og_image'    => $default_img,
    ],
];

/* ─────────────────────────────────────────────
   RESOLVE CURRENT PAGE SEO
───────────────────────────────────────────── */
$current_slug = get_post_field('post_name', get_the_ID());
$is_home      = is_front_page() || is_home();

if ($is_home) {
    $seo = $seo_map[''];
} elseif (isset($seo_map[$current_slug])) {
    $seo = $seo_map[$current_slug];
} else {
    // Fallback — use WP page title
    $seo = [
        'title'       => get_the_title() . ' | ' . $site_name,
        'description' => get_bloginfo('description') ?: 'Phoenix Capital Solutions — structured capital programs for accredited investors.',
        'robots'      => 'index, follow',
        'og_image'    => $default_img,
    ];
}

$page_title   = esc_html($seo['title']);
$page_desc    = esc_html($seo['description']);
$page_robots  = esc_attr($seo['robots']);
$page_og_img  = esc_url($seo['og_image']);
$canonical    = esc_url($is_home ? $base_url . '/' : $base_url . '/' . $current_slug . '/');
$og_url       = $canonical;
?>
<!-- ═══════════════════════════════════════
     PCS SEO HEAD
═══════════════════════════════════════ -->

<!-- Title -->
<title><?php echo $page_title; ?></title>

<!-- Core meta -->
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="robots" content="<?php echo $page_robots; ?>">
<link rel="canonical" href="<?php echo $canonical; ?>">

<!-- Open Graph -->
<meta property="og:type"        content="website">
<meta property="og:site_name"   content="<?php echo esc_html($site_name); ?>">
<meta property="og:title"       content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_desc; ?>">
<meta property="og:url"         content="<?php echo $og_url; ?>">
<meta property="og:image"       content="<?php echo $page_og_img; ?>">
<meta property="og:image:width"  content="1200">
<meta property="og:image:height" content="630">

<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo $page_title; ?>">
<meta name="twitter:description" content="<?php echo $page_desc; ?>">
<meta name="twitter:image"       content="<?php echo $page_og_img; ?>">

<!-- Organization Schema -->
<?php if ($is_home) : ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Phoenix Capital Solutions",
    "url": "https://phxcapsolutions.com",
    "logo": "https://phxcapsolutions.com/wp-content/themes/phxcapsolutions/assets/img/global/logo.png",
    "sameAs": [],
    "contactPoint": {
        "@type": "ContactPoint",
        "email": "info@phxcapsolutions.com",
        "contactType": "customer service"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Phoenix Capital Solutions",
    "url": "https://phxcapsolutions.com"
}
</script>
<?php endif; ?>

<!-- FAQPage Schema — program pages only -->
<?php
$faq_schemas = [
    'carr-program' => [
        ['q' => 'Who is the C.A.R.R. Program designed for?',          'a' => 'The C.A.R.R. Program is intended for asset owners and capital holders who operate at an institutional level and require structured, compliant pathways to access and deploy capital.'],
        ['q' => 'Is there a minimum capital or asset requirement?',    'a' => 'Minimum thresholds vary by asset class and structure. Clients must present qualifying commodities, hard assets, or approved capital that meet C.A.R.R. program parameters.'],
        ['q' => 'How is C.A.R.R. different from other programs?',      'a' => 'C.A.R.R. is specifically designed for hard asset owners seeking to unlock liquidity from commodities and physical assets without selling, creating sustainable capital flows.'],
        ['q' => 'Can revenue be withdrawn freely?',                    'a' => 'A portion of processed capital may be withdrawn for approved purposes, while remaining portions must be reinvested or deployed according to compliance expectations and program rules.'],
    ],
    'd-i-s-c-program' => [
        ['q' => 'What types of instruments qualify for the D.I.S.C. Program?', 'a' => 'The program accepts SBLCs, Medium Term Notes (MTNs), U.S. Treasury Bonds, British Gilts, and other high-value financial instruments. Minimum face values start at $100M.'],
        ['q' => 'What happens if the instrument fails validation?',             'a' => 'If the instrument fails validation at any stage, the program cannot proceed and no capitalization occurs.'],
        ['q' => 'Are distributions or returns guaranteed?',                    'a' => 'No. All capital outcomes depend on institutional processes, instrument viability, and compliance results. No returns or distributions are guaranteed.'],
        ['q' => 'Can international clients participate?',                      'a' => 'Yes, provided they meet all compliance and verification requirements including KYC, AML, and institutional documentation standards.'],
    ],
    'f-u-e-l-program' => [
        ['q' => 'Are returns or outcomes guaranteed?',                  'a' => 'No. All outcomes depend on external institutional processes, project performance, and program-specific variables. No returns are guaranteed.'],
        ['q' => 'Can I enter using assets instead of liquidity?',       'a' => 'Yes, provided the assets meet verification standards and align with institutional criteria.'],
        ['q' => 'How does F.U.E.L. differ from C.A.R.R. and D.I.S.C.?','a' => 'F.U.E.L. incorporates the capital-recycling structure of C.A.R.R. and the asset capitalization mechanics of D.I.S.C., creating a broader and more flexible hybrid program.'],
        ['q' => 'What is the minimum investment for F.U.E.L.?',        'a' => 'Minimum investments start at $250,000, providing access to exclusive project financing opportunities.'],
    ],
    'seed-program' => [
        ['q' => 'Can international clients participate?',               'a' => 'Yes, provided they meet all compliance, documentation, and verification requirements.'],
        ['q' => 'Are there restrictions on capital usage?',             'a' => 'Yes. Capital usage must comply with program rules and reinvestment requirements.'],
        ['q' => 'Are funds refundable if issuance fails?',              'a' => 'No. Funding depends on project viability, compliance, institutional approval, and program availability.'],
        ['q' => 'What is the purpose of the initial capital contribution?', 'a' => 'The initial capital contribution is used to establish the banking instrument and initiate the monetization process within the program framework.'],
    ],
    'gift' => [
        ['q' => 'What is the G.I.F.T. Program?',                       'a' => 'G.I.F.T. (Grants and Investments for Future Transformation) is Phoenix Capital Solutions\' purpose-driven capital deployment initiative redirecting profits into humanitarian and impact ventures.'],
        ['q' => 'How does G.I.F.T. generate capital for grants?',      'a' => 'Every transaction executed through F.U.E.L., D.I.S.C., C.A.R.R., and Large Cap Financing generates a percentage allocation to G.I.F.T., creating a self-sustaining cycle.'],
        ['q' => 'What are the two G.I.F.T. deployment channels?',      'a' => 'G.I.F.T. operates through G.I.F.T. Grants (non-recoverable capital for humanitarian relief) and G.I.F.T. Ventures (patient equity investments in scalable impact enterprises).'],
    ],
    'project-financing' => [
        ['q' => 'Do projects need collateral?',                         'a' => 'Yes, projects require 10% collateral. This depends on project type, documentation, and institutional requirements.'],
        ['q' => 'Does this program guarantee funding?',                 'a' => 'No. Funding depends on project viability, compliance, institutional approval, and program availability.'],
        ['q' => 'Are funds deployed upfront?',                         'a' => 'No. Capital is deployed in phases, following milestone-based approvals and regulatory requirements.'],
        ['q' => 'Can international projects apply?',                    'a' => 'Yes, provided the project meets compliance and documentation standards.'],
        ['q' => 'What project sizes qualify?',                          'a' => 'Only large-scale projects with detailed documentation and verifiable feasibility are considered.'],
    ],
];

if (isset($faq_schemas[$current_slug])) :
    $faqs = $faq_schemas[$current_slug];
    $faq_items = array_map(fn($f) => [
        '@type'          => 'Question',
        'name'           => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs);
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": <?php echo json_encode($faq_items, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
}
</script>
<?php endif; ?>

<!-- BreadcrumbList Schema -->
<?php if (!$is_home) : ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://phxcapsolutions.com/"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "<?php echo esc_js(get_the_title()); ?>",
            "item": "<?php echo $canonical; ?>"
        }
    ]
}
</script>
<?php endif; ?>
<?php
/*
Template Name: SEO Tracker Page
*/

get_header();

if (!current_user_can('manage_options')) :
?>
    <main class="seo_tracker_page">
        <section class="seo_tracker_wrap" style="padding:80px 20px;max-width:1000px;margin:0 auto;">
            <h1 style="color:#c59b32;margin-bottom:16px;">SEO Tracker</h1>
            <p style="color:#fff;">You must be logged in as an administrator to view this report.</p>
        </section>
    </main>
<?php
    get_footer();
    return;
endif;

if (!function_exists('phxst_normalize_url')) {
    function phxst_normalize_url($url)
    {
        $trimmed_url = trim((string) $url);
        if ($trimmed_url === '') {
            return '';
        }

        $without_fragment = preg_replace('/#.*$/', '', $trimmed_url);
        return untrailingslashit($without_fragment);
    }
}

if (!function_exists('phxst_to_absolute_url')) {
    function phxst_to_absolute_url($url, $base_url)
    {
        $raw_url = trim((string) $url);

        if ($raw_url === '' || strpos($raw_url, 'javascript:') === 0 || strpos($raw_url, 'mailto:') === 0 || strpos($raw_url, 'tel:') === 0) {
            return '';
        }

        if (preg_match('#^https?://#i', $raw_url)) {
            return $raw_url;
        }

        if (strpos($raw_url, '//') === 0) {
            $scheme = wp_parse_url(home_url(), PHP_URL_SCHEME);
            return $scheme . ':' . $raw_url;
        }

        $base_parts = wp_parse_url($base_url);
        if (!is_array($base_parts) || empty($base_parts['scheme']) || empty($base_parts['host'])) {
            return '';
        }

        $scheme = $base_parts['scheme'];
        $host = $base_parts['host'];

        if (strpos($raw_url, '/') === 0) {
            return $scheme . '://' . $host . $raw_url;
        }

        $base_path = isset($base_parts['path']) ? $base_parts['path'] : '/';
        $base_dir = trailingslashit(dirname($base_path));

        return $scheme . '://' . $host . $base_dir . $raw_url;
    }
}

if (!function_exists('phxst_fetch_url')) {
    function phxst_fetch_url($url, $method = 'GET', $timeout = 12)
    {
        $start_time = microtime(true);

        $args = array(
            'timeout'     => $timeout,
            'redirection' => 4,
            'sslverify'   => false,
            'headers'     => array('User-Agent' => 'PHX SEO Tracker'),
            'method'      => $method,
        );

        $response = wp_remote_request($url, $args);

        $elapsed_ms = (microtime(true) - $start_time) * 1000;

        if (is_wp_error($response)) {
            return array(
                'status'      => 0,
                'response_ms' => round($elapsed_ms),
                'body'        => '',
                'error'       => $response->get_error_message(),
            );
        }

        return array(
            'status'      => (int) wp_remote_retrieve_response_code($response),
            'response_ms' => round($elapsed_ms),
            'body'        => (string) wp_remote_retrieve_body($response),
            'error'       => '',
        );
    }
}

if (!function_exists('phxst_extract_page_data')) {
    function phxst_extract_page_data($html, $base_url)
    {
        $result = array(
            'title'              => '',
            'meta_description'   => '',
            'h1_texts'           => array(),
            'h2_texts'           => array(),
            'internal_links'     => array(),
            'internal_images'    => array(),
            'images_missing_alt' => array(),
        );

        if (trim((string) $html) === '') {
            return $result;
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_clear_errors();

        $title_nodes = $dom->getElementsByTagName('title');
        if ($title_nodes->length > 0) {
            $result['title'] = trim((string) $title_nodes->item(0)->textContent);
        }

        $xpath = new DOMXPath($dom);
        $meta_nodes = $xpath->query('//meta[translate(@name,"ABCDEFGHIJKLMNOPQRSTUVWXYZ","abcdefghijklmnopqrstuvwxyz")="description"]');
        if ($meta_nodes && $meta_nodes->length > 0) {
            $meta_node = $meta_nodes->item(0);
            if ($meta_node instanceof DOMElement) {
                $result['meta_description'] = trim((string) $meta_node->getAttribute('content'));
            }
        }

        $h1_nodes = $dom->getElementsByTagName('h1');
        foreach ($h1_nodes as $h1_node) {
            $text = trim((string) $h1_node->textContent);
            if ($text !== '') {
                $result['h1_texts'][] = $text;
            }
        }

        $h2_nodes = $dom->getElementsByTagName('h2');
        foreach ($h2_nodes as $h2_node) {
            $text = trim((string) $h2_node->textContent);
            if ($text !== '') {
                $result['h2_texts'][] = $text;
            }
        }

        $site_host = wp_parse_url(home_url(), PHP_URL_HOST);

        $anchor_nodes = $dom->getElementsByTagName('a');
        foreach ($anchor_nodes as $anchor_node) {
            if (!($anchor_node instanceof DOMElement)) {
                continue;
            }

            $href = $anchor_node->getAttribute('href');
            $absolute_url = phxst_to_absolute_url($href, $base_url);
            if ($absolute_url === '') {
                continue;
            }

            $link_host = wp_parse_url($absolute_url, PHP_URL_HOST);
            if ($link_host !== $site_host) {
                continue;
            }

            $normalized_url = phxst_normalize_url($absolute_url);
            if ($normalized_url !== '') {
                $result['internal_links'][] = $normalized_url;
            }
        }

        $image_nodes = $dom->getElementsByTagName('img');
        foreach ($image_nodes as $image_node) {
            if (!($image_node instanceof DOMElement)) {
                continue;
            }

            $src = $image_node->getAttribute('src');
            $absolute_image_url = phxst_to_absolute_url($src, $base_url);
            if ($absolute_image_url === '') {
                continue;
            }

            $image_host = wp_parse_url($absolute_image_url, PHP_URL_HOST);
            if ($image_host !== $site_host) {
                continue;
            }

            $normalized_image_url = phxst_normalize_url($absolute_image_url);
            if ($normalized_image_url !== '') {
                $result['internal_images'][] = $normalized_image_url;
            }

            $alt_text = trim((string) $image_node->getAttribute('alt'));
            if ($alt_text === '') {
                $result['images_missing_alt'][] = $normalized_image_url;
            }
        }

        $result['internal_links'] = array_values(array_unique($result['internal_links']));
        $result['internal_images'] = array_values(array_unique($result['internal_images']));
        $result['images_missing_alt'] = array_values(array_unique($result['images_missing_alt']));

        return $result;
    }
}

if (!function_exists('phxst_get_updates_summary')) {
    function phxst_get_updates_summary()
    {
        if (!function_exists('get_core_updates') && defined('ABSPATH')) {
            $update_file = ABSPATH . 'wp-admin/includes/update.php';
            if (file_exists($update_file)) {
                require_once $update_file;
            }
        }

        $core_updates_count = 0;
        if (function_exists('get_core_updates')) {
            $core_updates = get_core_updates(array('dismissed' => false));
            if (is_array($core_updates)) {
                foreach ($core_updates as $core_update) {
                    if (isset($core_update->response) && $core_update->response === 'upgrade') {
                        $core_updates_count++;
                    }
                }
            }
        }

        $plugin_updates_count = 0;
        $plugin_updates = get_site_transient('update_plugins');
        if (is_object($plugin_updates) && isset($plugin_updates->response) && is_array($plugin_updates->response)) {
            $plugin_updates_count = count($plugin_updates->response);
        }

        $theme_updates_count = 0;
        $theme_updates = get_site_transient('update_themes');
        if (is_object($theme_updates) && isset($theme_updates->response) && is_array($theme_updates->response)) {
            $theme_updates_count = count($theme_updates->response);
        }

        return array(
            'core'    => $core_updates_count,
            'plugins' => $plugin_updates_count,
            'themes'  => $theme_updates_count,
            'total'   => $core_updates_count + $plugin_updates_count + $theme_updates_count,
        );
    }
}

$scan_started_at = microtime(true);

$scan_targets = array();
$front_page_id = (int) get_option('page_on_front');

if ($front_page_id > 0) {
    $front_url = get_permalink($front_page_id);
    if ($front_url) {
        $scan_targets[$front_url] = array(
            'post_id'    => $front_page_id,
            'page_title' => get_the_title($front_page_id),
            'url'        => phxst_normalize_url($front_url),
        );
    }
} else {
    $homepage_url = home_url('/');
    $scan_targets[$homepage_url] = array(
        'post_id'    => 0,
        'page_title' => 'Homepage',
        'url'        => phxst_normalize_url($homepage_url),
    );
}

$all_pages = get_pages(array(
    'sort_column' => 'menu_order,post_title',
    'post_status' => 'publish',
));

foreach ($all_pages as $page_item) {
    $page_url = get_permalink($page_item->ID);
    if (!$page_url) {
        continue;
    }

    $normalized_page_url = phxst_normalize_url($page_url);
    if ($normalized_page_url === '') {
        continue;
    }

    $scan_targets[$normalized_page_url] = array(
        'post_id'    => (int) $page_item->ID,
        'page_title' => $page_item->post_title,
        'url'        => $normalized_page_url,
    );
}

$scan_targets = array_slice($scan_targets, 0, 70, true);

$page_rows = array();
$link_sources = array();
$image_sources = array();
$missing_alt_rows = array();
$broken_urls = array();
$broken_images = array();
$not_found_urls = array();
$slow_pages = array();

$total_response_ms = 0;
$response_count = 0;

foreach ($scan_targets as $target) {
    $target_url = $target['url'];
    $fetch_result = phxst_fetch_url($target_url, 'GET', 14);

    $response_status = (int) $fetch_result['status'];
    $response_ms = (int) $fetch_result['response_ms'];

    if ($response_status > 0) {
        $total_response_ms += $response_ms;
        $response_count++;
    }

    if ($response_ms > 1200) {
        $slow_pages[] = array(
            'url'         => $target_url,
            'page_title'  => $target['page_title'],
            'response_ms' => $response_ms,
        );
    }

    $parsed = phxst_extract_page_data($fetch_result['body'], $target_url);

    $title_text = $parsed['title'];
    $meta_description = $parsed['meta_description'];
    $h1_texts = $parsed['h1_texts'];

    $title_length = function_exists('mb_strlen') ? mb_strlen($title_text) : strlen($title_text);
    $meta_length = function_exists('mb_strlen') ? mb_strlen($meta_description) : strlen($meta_description);

    $h1_count = count($h1_texts);
    $primary_h1 = $h1_count > 0 ? $h1_texts[0] : '';
    $primary_h1_length = function_exists('mb_strlen') ? mb_strlen($primary_h1) : strlen($primary_h1);

    $title_status = ($title_length >= 50 && $title_length <= 60) ? 'ok' : 'warn';
    $meta_status = ($meta_length >= 150 && $meta_length <= 160) ? 'ok' : 'warn';
    $h1_status = ($h1_count === 1 && $primary_h1_length >= 20 && $primary_h1_length <= 70) ? 'ok' : 'warn';

    $page_rows[] = array(
        'page_title'         => $target['page_title'],
        'url'                => $target_url,
        'status'             => $response_status,
        'response_ms'        => $response_ms,
        'error'              => $fetch_result['error'],
        'title'              => $title_text,
        'title_length'       => $title_length,
        'title_status'       => $title_status,
        'meta_description'   => $meta_description,
        'meta_length'        => $meta_length,
        'meta_status'        => $meta_status,
        'h1_count'           => $h1_count,
        'primary_h1'         => $primary_h1,
        'primary_h1_length'  => $primary_h1_length,
        'h1_status'          => $h1_status,
        'h2_count'           => count($parsed['h2_texts']),
        'missing_alt_count'  => count($parsed['images_missing_alt']),
    );

    if ($response_status === 404) {
        $not_found_urls[] = array(
            'url'        => $target_url,
            'source'     => 'Page scan',
            'status'     => 404,
            'error'      => '',
        );
    }

    foreach ($parsed['internal_links'] as $internal_link) {
        if (!isset($link_sources[$internal_link])) {
            $link_sources[$internal_link] = array();
        }

        $link_sources[$internal_link][] = $target_url;
    }

    foreach ($parsed['internal_images'] as $internal_image) {
        if (!isset($image_sources[$internal_image])) {
            $image_sources[$internal_image] = array();
        }

        $image_sources[$internal_image][] = $target_url;
    }

    foreach ($parsed['images_missing_alt'] as $missing_alt_image) {
        $missing_alt_rows[] = array(
            'page_url'   => $target_url,
            'image_url'  => $missing_alt_image,
        );
    }
}

$link_sources = array_slice($link_sources, 0, 600, true);
$image_sources = array_slice($image_sources, 0, 600, true);

foreach ($link_sources as $link_url => $source_urls) {
    $check_result = phxst_fetch_url($link_url, 'HEAD', 10);

    if ($check_result['status'] === 0 || $check_result['status'] === 405) {
        $check_result = phxst_fetch_url($link_url, 'GET', 10);
    }

    if ($check_result['status'] >= 400 || $check_result['status'] === 0) {
        $source_label = isset($source_urls[0]) ? $source_urls[0] : 'Unknown';
        $broken_urls[] = array(
            'url'    => $link_url,
            'source' => $source_label,
            'status' => (int) $check_result['status'],
            'error'  => $check_result['error'],
        );

        if ((int) $check_result['status'] === 404) {
            $not_found_urls[] = array(
                'url'    => $link_url,
                'source' => $source_label,
                'status' => 404,
                'error'  => '',
            );
        }
    }
}

foreach ($image_sources as $image_url => $source_urls) {
    $check_result = phxst_fetch_url($image_url, 'HEAD', 10);

    if ($check_result['status'] === 0 || $check_result['status'] === 405) {
        $check_result = phxst_fetch_url($image_url, 'GET', 10);
    }

    if ($check_result['status'] >= 400 || $check_result['status'] === 0) {
        $source_label = isset($source_urls[0]) ? $source_urls[0] : 'Unknown';
        $broken_images[] = array(
            'url'    => $image_url,
            'source' => $source_label,
            'status' => (int) $check_result['status'],
            'error'  => $check_result['error'],
        );

        if ((int) $check_result['status'] === 404) {
            $not_found_urls[] = array(
                'url'    => $image_url,
                'source' => $source_label,
                'status' => 404,
                'error'  => '',
            );
        }
    }
}

$updates = phxst_get_updates_summary();
$average_response_ms = $response_count > 0 ? round($total_response_ms / $response_count) : 0;
$scan_duration = round(microtime(true) - $scan_started_at, 2);

$seo_issues_count = 0;
foreach ($page_rows as $row) {
    if ($row['title_status'] !== 'ok' || $row['meta_status'] !== 'ok' || $row['h1_status'] !== 'ok' || $row['status'] >= 400 || $row['status'] === 0 || $row['missing_alt_count'] > 0) {
        $seo_issues_count++;
    }
}

$not_found_urls = array_values(array_unique(array_map('serialize', $not_found_urls)));
$not_found_urls = array_map('unserialize', $not_found_urls);
?>

<main class="seo_tracker_page">
    <style>
        * {
            color: white;
        }

        .seo_tracker_page {
            background: #131417;
            color: #e9e9e9;
            padding: 40px 0 60px;
        }

        .seo_tracker_wrap {
            width: min(1400px, 95%);
            margin: 0 auto;
            font-size: 14px;
        }

        .seo_tracker_title {
            margin-bottom: 18px;
        }

        .seo_tracker_title h1 {
            font-size: clamp(1.6rem, 2.7vw, 2.3rem);
            color: #c59b32;
            margin-bottom: 8px;
        }

        .seo_tracker_title p {
            color: rgba(255, 255, 255, 0.68);
            margin: 0;
        }

        .seo_cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 14px;
            margin-bottom: 22px;
        }

        .seo_card {
            border: 1px solid rgba(197, 155, 50, 0.2);
            background: rgba(255, 255, 255, 0.02);
            border-radius: 10px;
            padding: 14px 16px;
        }

        .seo_card_label {
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 8px;
        }

        .seo_card_value {
            font-size: 22px;
            line-height: 1.2;
            color: #fff;
            font-weight: 700;
        }

        .seo_card_hint {
            margin-top: 6px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.55);
        }

        .status_ok {
            color: #5fd286;
            font-weight: 600;
        }

        .status_warn {
            color: #ffb347;
            font-weight: 600;
        }

        .status_error {
            color: #ff7b7b;
            font-weight: 600;
        }

        .seo_section {
            margin-top: 24px;
            border: 1px solid #2c2c2c;
            border-radius: 10px;
            overflow: hidden;
            background: #191a1e;
        }

        .seo_section_header {
            padding: 12px 16px;
            border-bottom: 1px solid #2c2c2c;
            background: #1f2026;
        }

        .seo_section_header h2 {
            margin: 0;
            color: #c59b32;
            font-size: 1.05rem;
        }

        .seo_section_header p {
            margin: 6px 0 0;
            color: rgba(255, 255, 255, 0.6);
            font-size: 12px;
        }

        .seo_table_wrap {
            overflow: auto;
        }

        .seo_table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        .seo_table th,
        .seo_table td {
            border-bottom: 1px solid #2a2a2a;
            border-right: 1px solid #2a2a2a;
            padding: 10px 12px;
            text-align: left;
            vertical-align: top;
            font-size: 12px;
        }

        .seo_table th {
            background: #22232a;
            color: #c59b32;
            text-transform: uppercase;
            letter-spacing: .8px;
            font-size: 10px;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .seo_table td:last-child,
        .seo_table th:last-child {
            border-right: 0;
        }

        .seo_table a {
            color: #8dc7ff;
            text-decoration: none;
            word-break: break-all;
        }

        .seo_table a:hover {
            text-decoration: underline;
        }

        .chip {
            display: inline-block;
            padding: 2px 7px;
            border-radius: 99px;
            font-size: 11px;
            font-weight: 600;
            line-height: 1.3;
        }

        .chip_ok {
            background: rgba(95, 210, 134, 0.16);
            color: #6bdc92;
            border: 1px solid rgba(95, 210, 134, 0.35);
        }

        .chip_warn {
            background: rgba(255, 179, 71, 0.14);
            color: #ffbf66;
            border: 1px solid rgba(255, 179, 71, 0.35);
        }

        .chip_error {
            background: rgba(255, 123, 123, 0.14);
            color: #ff9c9c;
            border: 1px solid rgba(255, 123, 123, 0.35);
        }

        .empty_state {
            padding: 16px;
            color: rgba(255, 255, 255, 0.65);
        }
    </style>

    <div class="seo_tracker_wrap">
        <div class="seo_tracker_title">
            <h1>Phoenix Capital Solutions — Live SEO Tracker</h1>
            <p>Scans live page output for title/meta/H1 character ranges, speed, broken links/images, 404 URLs, and available WordPress updates.</p>
        </div>

        <div class="seo_cards">
            <div class="seo_card">
                <div class="seo_card_label">Pages Scanned</div>
                <div class="seo_card_value"><?php echo esc_html((string) count($page_rows)); ?></div>
                <div class="seo_card_hint">Scan runtime: <?php echo esc_html((string) $scan_duration); ?>s</div>
            </div>
            <div class="seo_card">
                <div class="seo_card_label">Site Speed (Avg)</div>
                <div class="seo_card_value"><?php echo esc_html((string) $average_response_ms); ?>ms</div>
                <div class="seo_card_hint"><?php echo esc_html((string) count($slow_pages)); ?> pages slower than 1200ms</div>
            </div>
            <div class="seo_card">
                <div class="seo_card_label">SEO / Header Issues</div>
                <div class="seo_card_value"><?php echo esc_html((string) $seo_issues_count); ?></div>
                <div class="seo_card_hint">Title, meta description, H1 count/length, image alt</div>
            </div>
            <div class="seo_card">
                <div class="seo_card_label">Broken URLs</div>
                <div class="seo_card_value"><?php echo esc_html((string) count($broken_urls)); ?></div>
                <div class="seo_card_hint">404 URLs found: <?php echo esc_html((string) count($not_found_urls)); ?></div>
            </div>
            <div class="seo_card">
                <div class="seo_card_label">Broken Images</div>
                <div class="seo_card_value"><?php echo esc_html((string) count($broken_images)); ?></div>
                <div class="seo_card_hint">Missing alt instances: <?php echo esc_html((string) count($missing_alt_rows)); ?></div>
            </div>
            <div class="seo_card">
                <div class="seo_card_label">Updates Available</div>
                <div class="seo_card_value"><?php echo esc_html((string) $updates['total']); ?></div>
                <div class="seo_card_hint">Core: <?php echo esc_html((string) $updates['core']); ?> · Plugins: <?php echo esc_html((string) $updates['plugins']); ?> · Themes: <?php echo esc_html((string) $updates['themes']); ?></div>
            </div>
        </div>

        <section class="seo_section">
            <div class="seo_section_header">
                <h2>Page SEO & Header Character Checks</h2>
                <p>Recommended ranges: title 50–60, meta description 150–160, and exactly one H1 with 20–70 characters.</p>
            </div>
            <div class="seo_table_wrap">
                <table class="seo_table">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>HTTP</th>
                            <th>Speed</th>
                            <th>Title Tag</th>
                            <th>Meta Description</th>
                            <th>H1</th>
                            <th>H2 Count</th>
                            <th>Missing Alt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($page_rows as $row) : ?>
                            <?php
                            $http_class = ($row['status'] >= 200 && $row['status'] < 400) ? 'chip chip_ok' : 'chip chip_error';
                            $title_class = $row['title_status'] === 'ok' ? 'chip chip_ok' : 'chip chip_warn';
                            $meta_class = $row['meta_status'] === 'ok' ? 'chip chip_ok' : 'chip chip_warn';
                            $h1_class = $row['h1_status'] === 'ok' ? 'chip chip_ok' : 'chip chip_warn';
                            ?>
                            <tr>
                                <td>
                                    <strong><?php echo esc_html($row['page_title']); ?></strong><br>
                                    <a href="<?php echo esc_url($row['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($row['url']); ?></a>
                                </td>
                                <td>
                                    <span class="<?php echo esc_attr($http_class); ?>"><?php echo esc_html((string) ($row['status'] > 0 ? $row['status'] : 'ERR')); ?></span>
                                    <?php if ($row['error']) : ?>
                                        <div class="status_error"><?php echo esc_html($row['error']); ?></div>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo esc_html((string) $row['response_ms']); ?>ms</td>
                                <td>
                                    <span class="<?php echo esc_attr($title_class); ?>"><?php echo esc_html((string) $row['title_length']); ?> chars</span>
                                    <div><?php echo esc_html($row['title']); ?></div>
                                </td>
                                <td>
                                    <span class="<?php echo esc_attr($meta_class); ?>"><?php echo esc_html((string) $row['meta_length']); ?> chars</span>
                                    <div><?php echo esc_html($row['meta_description']); ?></div>
                                </td>
                                <td>
                                    <span class="<?php echo esc_attr($h1_class); ?>">Count: <?php echo esc_html((string) $row['h1_count']); ?> · Len: <?php echo esc_html((string) $row['primary_h1_length']); ?></span>
                                    <div><?php echo esc_html($row['primary_h1']); ?></div>
                                </td>
                                <td><?php echo esc_html((string) $row['h2_count']); ?></td>
                                <td>
                                    <?php if ($row['missing_alt_count'] > 0) : ?>
                                        <span class="chip chip_warn"><?php echo esc_html((string) $row['missing_alt_count']); ?> missing</span>
                                    <?php else : ?>
                                        <span class="chip chip_ok">0</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="seo_section">
            <div class="seo_section_header">
                <h2>404 / Broken URL Report</h2>
                <p>Includes internal links that returned errors during crawl.</p>
            </div>
            <div class="seo_table_wrap">
                <?php if (empty($broken_urls)) : ?>
                    <div class="empty_state">No broken internal URLs detected in this scan.</div>
                <?php else : ?>
                    <table class="seo_table" style="min-width:900px;">
                        <thead>
                            <tr>
                                <th>Broken URL</th>
                                <th>Status</th>
                                <th>Found On</th>
                                <th>Error</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($broken_urls as $broken_url_row) : ?>
                                <tr>
                                    <td><a href="<?php echo esc_url($broken_url_row['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($broken_url_row['url']); ?></a></td>
                                    <td><span class="chip chip_error"><?php echo esc_html((string) ($broken_url_row['status'] > 0 ? $broken_url_row['status'] : 'ERR')); ?></span></td>
                                    <td><a href="<?php echo esc_url($broken_url_row['source']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($broken_url_row['source']); ?></a></td>
                                    <td><?php echo esc_html($broken_url_row['error']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </section>

        <section class="seo_section">
            <div class="seo_section_header">
                <h2>Broken Image Report</h2>
                <p>Internal image URLs that failed HTTP checks.</p>
            </div>
            <div class="seo_table_wrap">
                <?php if (empty($broken_images)) : ?>
                    <div class="empty_state">No broken internal images detected in this scan.</div>
                <?php else : ?>
                    <table class="seo_table" style="min-width:900px;">
                        <thead>
                            <tr>
                                <th>Image URL</th>
                                <th>Status</th>
                                <th>Found On</th>
                                <th>Error</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($broken_images as $broken_image_row) : ?>
                                <tr>
                                    <td><a href="<?php echo esc_url($broken_image_row['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($broken_image_row['url']); ?></a></td>
                                    <td><span class="chip chip_error"><?php echo esc_html((string) ($broken_image_row['status'] > 0 ? $broken_image_row['status'] : 'ERR')); ?></span></td>
                                    <td><a href="<?php echo esc_url($broken_image_row['source']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($broken_image_row['source']); ?></a></td>
                                    <td><?php echo esc_html($broken_image_row['error']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </section>

        <section class="seo_section">
            <div class="seo_section_header">
                <h2>Images Missing ALT Text</h2>
                <p>Image tags found without ALT text in rendered HTML output.</p>
            </div>
            <div class="seo_table_wrap">
                <?php if (empty($missing_alt_rows)) : ?>
                    <div class="empty_state">No missing ALT text issues detected in this scan.</div>
                <?php else : ?>
                    <table class="seo_table" style="min-width:900px;">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Image URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($missing_alt_rows as $missing_alt_row) : ?>
                                <tr>
                                    <td><a href="<?php echo esc_url($missing_alt_row['page_url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($missing_alt_row['page_url']); ?></a></td>
                                    <td><a href="<?php echo esc_url($missing_alt_row['image_url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($missing_alt_row['image_url']); ?></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
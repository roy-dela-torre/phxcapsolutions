<?php
/**
 * Reusable Stay Informed Component
 * Adds a CF7 form section to any program page.
 *
 * Usage:
 * get_template_part('template/components/stay-informed', null, [
 *     'form_id'      => 'b7bb8a6',          // CF7 form ID
 *     'program_name' => 'D.I.S.C.',         // used in heading
 *     'section_class'=> 'disc_stay_informed', // unique section class
 * ]);
 */

$form_id       = $args['form_id']       ?? '';
$program_name  = $args['program_name']  ?? 'This Program';
$section_class = $args['section_class'] ?? 'stay_informed';

if (empty($form_id)) return;
?>

<section class="program_stay_informed <?php echo esc_attr($section_class); ?>">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg-5">
                    <div class="stay_informed__content">
                        <span class="stay_informed__label">Stay Connected</span>
                        <h2 class="text-white">Stay Informed on the <span class="text-gold"><?php echo esc_html($program_name); ?></span> Program</h2>
                        <p>Submit your information below and our team will keep you updated on program availability, requirements, and next steps.</p>
                        <ul class="stay_informed__points">
                            <li>
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8l3.5 3.5L13 4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Program updates and availability notices
                            </li>
                            <li>
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8l3.5 3.5L13 4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Eligibility criteria and documentation guidance
                            </li>
                            <li>
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8l3.5 3.5L13 4" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Invitations to confidential consultations
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="stay_informed__form_card">
                        <div class="form_card__header">
                            <p class="form_card__label">Stay Informed</p>
                            <p class="form_card__note">All submissions are reviewed by our team. Submitting this form does not constitute enrollment or an offer to participate.</p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="' . esc_attr($form_id) . '" title="Stay Inform (' . esc_attr($program_name) . ')"]'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
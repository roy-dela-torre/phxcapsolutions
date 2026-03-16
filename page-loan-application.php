<?php
/*
Template Name: Loan Application Page
*/

get_header();
?>

<main class="loan_page">

    <section class="loan_main">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">

                        <!-- Page Header -->
                        <div class="loan_header mb-5">
                            <div class="program_label">Get Started</div>
                            <h1 class="text-white mb-3">Loan Application Form</h1>
                            <p>Thank you for your interest in Phoenix Capital Solutions! To get started, please take a moment to complete the brief form below. This will help us better understand your needs and provide you with the best solutions tailored to your business goals. We look forward to working with you!</p>
                        </div>

                        <!-- Form Card -->
                        <div class="loan_form_card">
                            <?= do_shortcode('[contact-form-7 id="dbc2508" title="Loan Application Form"]') ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
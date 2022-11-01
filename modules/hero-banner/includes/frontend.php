<?php
$title = $settings->title_hero_banner;
$subtitle = $settings->subtitle_hero_banner;
?>
<section class="hero-banner hero-banner-with-form"
  style="background-image: url('<?= site_url() ?>/wp-content/uploads/bg-hero-banner.png') ;">
  <div class="container-wrap">
    <div class="hero-banner_container">
      <div class="hero-banner--item hero-banner-content">
        <div class="title-container">
          <h1><?= $title ?></h1>
          <h2><?= $subtitle ?></h2>
        </div>
        <div class="arrow-down-container">
          <a>
            <span class="arrow-down">
              <?php get_svg('icon-arrow-down-black') ?>
            </span>
          </a>
        </div>
      </div>
      <div class="hero-banner--item hero-banner-form">
        <div class="get-a-quote">
          <div class="title-container">
            <h2 class="">Get a Quote</h2>
          </div>
          <?= do_shortcode('[contact-form-7 id="45" title="Quote"]'); ?>
          <div class="information-form">
            <p>By providing your phone number and clicking submit, you agree to our Terms, Privacy Policy, and authorize
              us to make or initiate sales calls, text messages, and prerecorded voicemails to that phone number using
              an automated system. Your agreement is not a condition of purchasing any products, goods or services. Msg
              & data rates may apply.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
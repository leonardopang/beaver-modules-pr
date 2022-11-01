<?php
$title = $settings->title_hero_banner;
$subtitle = $settings->subtitle_hero_banner;
?>
<section class="hero-banner hero-banner-single"
  style="background-image: url('<?= site_url() ?>/wp-content/uploads/bg-hero-banner.png') ;">
  <div class="container-wrap">
    <div class="hero-banner-single_container">
      <div class="hero-banner-single--item hero-banner-single-content">
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
    </div>
  </div>
</section>
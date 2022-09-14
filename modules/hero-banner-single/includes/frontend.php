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
          <a href="#arrow-down">
            <span class="arrow-down">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images//svg/icon-arrow-down-black.svg')  ?>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php

$title = $settings->title_hero_banner;

$heroHeader = wp_is_mobile() ? $settings->image_mobile_hero_header_src : $settings->image_hero_header_src;

?>
<section class="hero-header" style="background-image: url('<?= $heroHeader ?>');">
  <div class="container-wrap">
    <div class="hero-header-container">
      <div class="title-container">
        <h2>
          <?= $settings->title_hero_banner ?>
        </h2>
      </div>
      <div class="button-container">
        <a href="" class="button button-yellow">
          <?= $settings->button_title_hero_header ?> <span class="arrow-button">→</span>
        </a>
      </div>
    </div>
  </div>
</section>
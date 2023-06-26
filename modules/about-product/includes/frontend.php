<?php

$title = $settings->title_about_product;
$text = $settings->text_about_product;
$buttonText = $settings->button_title_about_product;
$buttonLink = $settings->button_link_about_product;
$gallery = $settings->slider_itens_about_product;

?>
<section class="section-content about-products">
  <div class="container-wrap">
    <div class="about-products-container grid two_grids">
      <div class="about-products-container__item">
        <div class="about-products-container__slide">
          <?php foreach ($gallery as $image): ?>
            <img src="<?= wp_get_attachment_image_url($image, 'full') ?>" alt="">
          <?php endforeach; ?>
        </div>
      </div>
      <div class="about-products-container__item">
        <div class="title-container">
          <h2>
            <?= $title ?>
          </h2>
        </div>
        <div class="text-container">
          <p>
            <?= $text ?>
          </p>
        </div>
        <div class="button-container">
          <a href="<?= $buttonLink ?>" class="button button-orange"><?= $buttonText ?> <span
              class="arrow-button">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
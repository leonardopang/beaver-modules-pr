<?php
$imagem = $settings->favicon_about_src;
$title = $settings->title_about;
$subtitle = $settings->subtitle_about;
$text = $settings->text_about;
$text_button = $settings->button_title_about;
$link_button = $settings->button_link_about;

$background_card_1 = $settings->image_about_service_src;
$title_card_1 = $settings->title_about_service;
$text_button_card_1 = $settings->button_title_about_service;
$link_button_card_1 = $settings->button_link_about_service;

$background_card_2 = $settings->image_about_service_2_src;
$title_card_2 = $settings->title_about_service_2;
$text_button_card_2 = $settings->button_title_about_service_2;
$link_button_card_2 = $settings->button_link_about_service_2;

?>
<section class="about section-content">
  <div class="container-wrap">
    <div class="about-container grid two_grids">
      <div class="about-container__item">
        <div class="image-container fav-icon-logo">
          <img src="<?= $imagem ?>" alt="Pietra Roza">
        </div>
        <div class="title-container">
          <span>
            <?= $subtitle ?> →
          </span>
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
          <a href="" class="button button-orange">
            <?= $text_button ?> <span class="arrow-button">→</span>
          </a>
        </div>
      </div>
      <div class="about-container__item grid two_grids">
        <div class="about-container__item-service">
          <a href="<?= $link_button_card_1 ?>">
            <img src="<?= $background_card_1 ?>" alt="Thumbnail <?= $title_card_1 ?>">
            <div class="content">
              <h3>
                <?= $title_card_1 ?>
              </h3>
              <span>
                <?= $text_button_card_1 ?> →
              </span>
            </div>
          </a>
        </div>
        <div class="about-container__item-service">
          <a href="<?= $link_button_card_2 ?>">
            <img src="<?= $background_card_2 ?>" alt="Thumbnail <?= $title_card_2 ?>">
            <div class="content">
              <h3>
                <?= $title_card_2 ?>
              </h3>
              <span>
                <?= $text_button_card_2 ?> →
              </span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
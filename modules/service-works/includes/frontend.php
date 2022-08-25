<?php
$title = $settings->title_service_works;
$subtitle = $settings->subtitle_service_works;
$forms = $settings->service_works_itens;
?>
<section class="service-works">
  <div class="container-wrap">
    <div class="service-works_container">
      <div class="title-container">
        <h2><?= $title ?></h2>
        <h3><?= $subtitle ?></h3>
      </div>
      <div class="service-works-card grid two_grids">
        <?php foreach ($forms as $form) : ?>
        <?php
          $title_card = $form->service_title;
          $description_card = $form->service_description;
          $thumbnail_card = $form->service_thumbnail_src;
          ?>
        <div class="service-works-card--item">
          <div class="image-container">
            <img src="<?= $thumbnail_card ?>" alt="<?= $title_card ?>">
          </div>
          <div class="service-workds-card_content">
            <h3><?= $title_card ?></h3>
            <p><?= $description_card ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
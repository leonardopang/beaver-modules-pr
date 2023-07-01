<?php

$title = $settings->title_obras_galery;
$subtitle = $settings->subtitle_obras_galery;
$buttonText = $settings->button_title_obras_galery;
$buttonLink = $settings->button_link_obras_galery;
$form = $settings->obras_galery_itens;


?>
<section class="obras-category section-content">
  <div class="container-wrap">
    <div class="obras-category-container">
      <div class="title-container text-center">
        <span>
          <?= $subtitle ?>
        </span>
        <h1>
          <?= $title ?>
        </h1>
      </div>
      <div class="obras-category-container__grids grid two_grids">
        <?php foreach ($form as $data): ?>
          <div class="obras-category-container__item"
            style="background-image: url('<?= $data->feature_obras_galery_src ?>');">
            <a href="<?= $data->link_card_obras_galery ?>">
              <img src="<?= $data->feature_obras_galery_src ?>" class="tamanho-desk"
                alt="<?= $data->nome_obras_galery ?>">
              <img src="<?= site_url() ?>/wp-content/uploads/granito.png" class="tamanho-mobile" alt="Tamanho Card">
              <div class="content">
                <h3>
                  <?= $data->nome_obras_galery ?>
                </h3>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="button-container">
        <a href="<?= $buttonLink ?>" class="button button-orange"><?= $buttonText ?> <span
            class="arrow-button">→</span></a>
      </div>
    </div>
  </div>
</section>
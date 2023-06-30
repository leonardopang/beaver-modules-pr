<?php

$title = $settings->title_produtos;
$subtitle = $settings->subtitle_produtos;
$buttonText = $settings->button_title_produtos;
$buttonLink = $settings->button_link_produtos;
$form = $settings->produtos_itens;


?>
<section class="produtos-grid section-content">
  <div class="container-wrap">
    <div class="produtos-grid-container">
      <div class="title-container text-center">
        <span>
          <?= $subtitle ?>
        </span>
        <h1>
          <?= $title ?>
        </h1>
      </div>
      <div class="produtos-grid-container__grids">
        <?php foreach ($form as $data): ?>
          <div class="produtos-grid-container__item" style="background-image: url('<?= $data->feature_produto_src ?>');">
            <a href="<?= $data->link_card_produto ?>">
              <img src="<?= $data->feature_produto_src ?>" class="tamanho-desk" alt="<?= $data->nome_produto ?>">
              <img src="<?= site_url() ?>/wp-content/uploads/granito.png" class="tamanho-mobile" alt="Tamanho Card">
              <div class="content">
                <h3>
                  <?= $data->nome_produto ?>
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
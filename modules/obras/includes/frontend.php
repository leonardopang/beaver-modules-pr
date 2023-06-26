<?php

$title = $settings->title_obras;
$subtitle = $settings->subtitle_obras;
$buttonText = $settings->button_title_obras;
$buttonLink = $settings->button_link_obras;
$form = $settings->obras_itens;



?>
<section class="section-content obras">
  <div class="container-wrap">
    <div class="obras-container">
      <div class="title-container">
        <span>
          <?= $subtitle ?> →
        </span>
        <h2>
          <?= $title ?>
        </h2>
      </div>
      <div class="obras-container__posts">
        <?php if (wp_is_mobile()): ?>
          <div class="obras-container__posts-slider">
            <?php foreach ($form as $date): ?>
              <?php
              $background_card = $date->feature_obras_src;
              $title_card = $date->nome_obras;
              $link_card = $date->link_card_obras;
              ?>
              <div class="obras-container__posts-slider-item ">
                <div class="obras-container__posts-grid-item item-1x">
                  <img src="<?= $background_card ?>" alt="<?= $title_card ?>">
                  <a href="<?= $link_card ?>">
                    <div class="content">
                      <h3>
                        <?= $title_card ?>
                      </h3>
                    </div>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <div class="obras-container__posts-grid">
            <?php foreach ($form as $date): ?>
              <?php
              $background_card = $date->feature_obras_src;
              $title_card = $date->nome_obras;
              $link_card = $date->link_card_obras;
              $tamanho_card = $date->tamanho_card === 'option-1' ? 'item-1x' : 'item-2x';

              ?>
              <div class="obras-container__posts-grid-item <?= $tamanho_card ?>">
                <img src="<?= $background_card ?>" alt="<?= $title_card ?>">
                <a href="<?= $link_card ?>">
                  <div class="content">
                    <h3>
                      <?= $title_card ?>
                    </h3>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="button-container">
          <a href="<?= $buttonLink ?>" class="button button-orange"><?= $buttonText ?> <span
              class="arrow-button">→</span></a>
        </div>
      </div>
    </div>
</section>
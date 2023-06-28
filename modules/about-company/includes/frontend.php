<?php

$title = $settings->title_about_company;
$buttonText = $settings->button_title_about_company;
$buttonLink = $settings->button_link_about_company;
$form = $settings->about_company_itens;

?>
<section class="section-content about-company">
  <div class="container-wrap">
    <div class="about-company-container">
      <div class="title-container">
        <h2>
          <?= $title ?>
        </h2>
      </div>
      <div class="about-company-container__grid grid three_grids">
        <?php if (wp_is_mobile()): ?>
          <div class="about-company-container__slider">
            <?php foreach ($form as $data): ?>
              <div class="about-company-container-tiny-slider">
                <div class="about-company-container__grid-item">
                  <div class="image-container">
                    <img src="<?= $data->feature_about_company_src ?>" alt="<?= $data->nome_about_company ?>">
                  </div>
                  <div class="content">
                    <h3>
                      <?= $data->nome_about_company ?>
                    </h3>
                    <div class="text">
                      <p>
                        <?= $data->text_about_company ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <?php foreach ($form as $data): ?>
            <div class="about-company-container__grid-item">
              <div class="image-container">
                <img src="<?= $data->feature_about_company_src ?>" alt="<?= $data->nome_about_company ?>">
              </div>
              <div class="content">
                <h3>
                  <?= $data->nome_about_company ?>
                </h3>
                <div class="text">
                  <p>
                    <?= $data->text_about_company ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="button-container">
        <a href="<?= $buttonLink ?>" class="button button-orange"><?= $buttonText ?> <span
            class="arrow-button">→</span></a>
      </div>
    </div>
  </div>
</section>
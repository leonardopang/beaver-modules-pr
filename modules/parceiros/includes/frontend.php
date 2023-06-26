<?php
$title = $settings->title_parceirost;
$subtitle = $settings->subtitle_parceiros;
$form = $settings->parceiros_itens;
?>
<section class="parceiros">
  <div class="container-wrap">
    <div class="parceiros-container">
      <div class="title-container">
        <h2>
          <?= $title ?>
        </h2>
        <span>
          <?= $subtitle ?>
        </span>
      </div>
      <div class="paceiros-container__grid grid four_grids">
        <?php if (!wp_is_mobile()): ?>
          <?php foreach ($form as $data): ?>
            <div class="paceiros-container__grid-item">
              <div class="image-container">
                <img src="<?= $data->feature_parceiros_src ?>" alt="<?= $data->nome_parceiros ?>">
              </div>
              <div class="content">
                <h3>
                  <?= $data->nome_parceiros ?>
                </h3>
                <span>
                  <?= $data->tipo_parceiro ?>
                </span>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="parceiros-slider">
            <?php foreach ($form as $data): ?>
              <div class="parceiros-tiny-slider">
                <div class="paceiros-container__grid-item">
                  <div class="image-container">
                    <img src="<?= $data->feature_parceiros_src ?>" alt="<?= $data->nome_parceiros ?>">
                  </div>
                  <div class="content">
                    <h3>
                      <?= $data->nome_parceiros ?>
                    </h3>
                    <span>
                      <?= $data->tipo_parceiro ?>
                    </span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
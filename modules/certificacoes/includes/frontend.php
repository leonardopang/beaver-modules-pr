<?php

$title = $settings->title_certificados;
$form = $settings->certficados_itens;
?>
<section class="certificacoes">
  <div class="container-wrap">
    <div class="certificacoes-container">
      <div class="title-container">
        <h2>
          <?= $title ?>
        </h2>
      </div>
      <?php if (!wp_is_mobile()): ?>
        <div class="certificacoes-grid grid three_grids">
          <?php foreach ($form as $data): ?>
            <div class="certificacoes-grid__item">
              <img src="<?= $data->feature_certificados_src ?>" alt="<?= $data->nome_certificados ?>">
              <div class="content">
                <h3>
                  <?= $data->nome_certificados ?>
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="certificacoes-grid certificacoes-grid_mobile">
          <div class="certificacoes-slider">
            <?php foreach ($form as $data): ?>
              <div class="certificacoes-tiny-slider">
                <div class="certificacoes-grid__item">
                  <img src="<?= $data->feature_certificados_src ?>" alt="<?= $data->nome_certificados ?>">
                  <div class="content">
                    <h3>
                      <?= $data->nome_certificados ?>
                    </h3>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
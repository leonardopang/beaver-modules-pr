<?php

$title = $settings->title_feedback;
$subtitle = $settings->subtitle_feedback;
$form = $settings->feedback_itens;

?>
<section class="feedback">
  <div class="container-wrap">
    <div class="feedback-container">
      <div class="feedback-grid">
        <div class="feedback-grid__item feedback-grid__item-content">
          <div class="title-container">
            <h2>Feedback dos Clientes</h2>
            <span>Veja o depoimento de clientes e arquitetos</span>
          </div>
          <?php if (!wp_is_mobile()): ?>
            <div class="control-slide-container">
              <span class="arrow arrows-left">
                <?= get_svg_content('icon-arrow-chevron-left'); ?>
              </span>
              <span class="arrow arrows-right">
                <?= get_svg_content('icon-arrow-chevron-right'); ?>
              </span>
            </div>
          <?php endif; ?>
        </div>
        <div class="feedback-grid__item feedback-grid__item-slider">
          <div class="feedback-slider">
            <?php foreach ($form as $date): ?>
              <div class="tiny-slider-container">
                <div class="slider-container">
                  <div class="content-text">
                    <p>
                      <?= $date->feedback_text ?>
                    </p>
                  </div>
                  <div class="info-content">
                    <span class="nome">
                      <?= $date->nome_pessoa ?>
                    </span>
                    <span class="profissao">
                      <?= $date->profissao_pessoa ?>
                    </span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
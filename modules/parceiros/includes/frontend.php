<?php
$title = $settings->title_about;
$imagem = $settings->image_about_src;
$text = $settings->text_about;
$link_button = $settings->button_link_about;
?>
<section class="parceiros">
  <div class="container-wrap">
    <div class="parceiros-container">
      <div class="title-container">
        <h2>Nossos Parceiros</h2>
        <span>A Pietra Roza trabalha com varios parceiros que ajudam você a ter o projeto dos seus sonhos</span>
      </div>
      <div class="paceiros-container__grid grid four_grids">
        <div class="paceiros-container__grid-item">
          <div class="image-container">
            <img src="<?= site_url() ?>/wp-content/uploads/only-icon-logo-white.png" alt="">
          </div>
          <div class="content">
            <h3>Nome do parceiro</h3>
            <span>Arquiteto</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
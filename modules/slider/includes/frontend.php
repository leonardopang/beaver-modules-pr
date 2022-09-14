<?php
$imagens = $settings->slider_itens;

?>
<section class="slider-module">
  <div class="container-wrap">
    <div class="slider-module_container">
      <div class="slider-module-content">
        <?php for ($i = 0; $i < count($imagens); $i++) : ?>
        <div class="slider-module--item">
          <div class="slider-module--imagem">
            <img src="<?= wp_get_attachment_image_url($imagens[$i], 'full') ?>" alt="">
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
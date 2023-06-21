<?php
$title = $settings->title_about;
$imagem = $settings->image_about_src;
$text = $settings->text_about;
$link_button = $settings->button_link_about;
?>
<section class="about section-content">
  <div class="container-wrap">
    <div class="about-container grid two_grids">
      <div class="about-container__item">
        <div class="image-container fav-icon-logo">
          <img src="<?= site_url() ?>/wp-content/uploads/fav-icon.png" alt="Pietra Roza">
        </div>
        <div class="title-container">
          <span>Mármores e Revestimentos →</span>
          <h2>Pietra Roza</h2>
        </div>
        <div class="text-container">
          <p>Da junção das marcas Dimarmo Mármores e Granitos e Petra Design Mármores e Interiores, nasceu a Pietra Roza
            Mármores e Revestimentos, empresa destaque na área de pedras naturais e fabricadas. Atuamos no setor há mais
            de 25 anos com equipe qualificada, de confiança e treinada para sempre atender às necessidades dos clientes
            com o melhor do design.</p>
        </div>
        <div class="button-container">
          <a href="" class="button button-orange">Conheça mais <span class="arrow-button">→</span></a>
        </div>
      </div>
      <div class="about-container__item grid two_grids">
        <div class="about-container__item-service">
          <a href="">
            <img src="<?= site_url() ?>/wp-content/uploads/produtos-thumbnail.jpg" alt="">
            <div class="content">
              <h3>Produtos</h3>
              <span>Veja mais →</span>
            </div>
          </a>
        </div>
        <div class="about-container__item-service">
          <a href="">
            <img src="<?= site_url() ?>/wp-content/uploads/projeto-thumbnail.jpg" alt="">
            <div class="content">
              <h3>Projetos</h3>
              <span>Veja mais →</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
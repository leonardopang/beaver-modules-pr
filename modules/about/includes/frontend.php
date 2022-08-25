<?php
$title = $settings->title_about;
$imagem = $settings->image_about_src;
$text = $settings->text_about;
?>
<section class="about">
  <div class="container-wrap">
    <div class="about_container grid two_grids">
      <div class="about--item">
        <img src="<?= $imagem ?>" alt="">
      </div>
      <div class="about--item">
        <div class="title-container">
          <h2><?= $title ?></h2>
        </div>
        <div class="text-container">
          <p><?= $text ?></p>
        </div>
        <div class="button-container">
          <a href="" class="button button-green">about
            <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/icon-arrow-right-green.svg') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
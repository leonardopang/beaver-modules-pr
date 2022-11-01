<?php
$title = $settings->title_about;
$imagem = $settings->image_about_src;
$text = $settings->text_about;
$link_button = $settings->button_link_about;
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
        <?php if ($link_button) : ?>
        <div class="button-container">
          <a href="" class="button button-green">about
            <?php get_svg('icon-arrow-right-green') ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
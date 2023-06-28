<?php
$title = $settings->content_title;
$text = $settings->content_text;
$side = $settings->content_text_side === 'left' ? 'content-left' : 'content-right';
$sideTitle = $settings->title_side === 'left' ? 'title-left' : 'title-right';
$gallery = $settings->content_slider;
$buttonForm = $settings->content_buttons;
?>
<section class="content-grid section-content">
  <div class="container-wrap">
    <div class="content-grid-container grid two_grids">
      <div class="content-grid__item content-grid__item-content <?= $side ?>">
        <div class="title-container <?= $sideTitle ?>">
          <h2>
            <?= $title ?>
          </h2>
        </div>
        <div class="text-container">
          <p>
            <?= $text ?>
          </p>
        </div>
        <?php if (count($buttonForm) > 0): ?>
          <div class="button-container">
            <?php foreach ($buttonForm as $data): ?>
              <?php if ($data->button_text): ?>
                <a href="<?= $data->button_link ?>" class="button button-orange"><?= $data->button_text ?> <span
                    class="arrow-button">→</span></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="content-grid__item-slider">
        <div class="content-grid__slider">
          <?php foreach ($gallery as $image): ?>
            <div class="content-grid-tiny-slider">
              <div class="content-grid__item-slider__item">
                <img src="<?= wp_get_attachment_image_url($image, 'full') ?>" alt="">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
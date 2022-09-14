<?php
$title = $settings->content_title;
$subtitle = $settings->content_subtitle;
$text = $settings->content_text;
?>
<section class="title-text">
  <div class="container-wrap">
    <div class="title-text_container">
      <div class="title-container">
        <h2><?= $title ?></h2>
        <?php if ($subtitle) : ?>
        <h4><?= $subtitle ?></h4>
        <?php endif; ?>
      </div>
      <div class="text-container">
        <?= $text ?>
      </div>
    </div>
  </div>
</section>
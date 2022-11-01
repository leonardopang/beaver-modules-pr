<?php
$title = $settings->title_calling;
$subtitle = $settings->subtitle_calling;
$button_quote = $settings->button_link_quote;
$button_drive = $settings->button_link_drive;
?>
<section class="calling">
  <div class="container-wrap">
    <div class="calling_container"
      style="background-image: url('<?= site_url() ?>/wp-content/uploads/bg-calling-trustix.png');">
      <div class="title-container">
        <h2><?= $title ?></h2>
        <h3><?= $subtitle ?></h3>
      </div>
      <div class="button-container">
        <a href="<?= $button_drive ?>" class="button button--white">I´m Driver</a>
        <a href="<?= $button_quote ?>" class="button button-border--white">Get a Quote</a>
      </div>
    </div>
  </div>
</section>
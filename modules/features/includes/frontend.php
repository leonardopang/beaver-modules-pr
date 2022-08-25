<?php
$forms = $settings->features_itens;
?>
<section class="feature">
  <div class="container-wrap">
    <div class="feature-container grid three_grids">
      <?php foreach ($forms as $form) : ?>
      <?php
        $thumnail = $form->feature_thumbnail_src;
        $title = $form->nome_feature;
        $description = $form->description_feature;
        ?>
      <div class="feature--item">
        <div class="image-container">
          <img src="<?= $thumnail ?>" alt="">
        </div>
        <div class="feature-content">
          <h3><?= $title ?></h3>
          <p><?= $description ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
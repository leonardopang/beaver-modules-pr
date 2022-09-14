<?php
$title = $settings->title_feedback;

$feedback_args = array(
  'post_type' => 'feedback',
);

$feedback_query = new WP_Query($feedback_args);

?>
<section class="feedback">
  <div class="container-wrap">
    <div class="feedback_container">
      <div class="title-container">
        <h2><?= $title ?></h2>
      </div>
      <div class="feedback-slider">
        <?php if ($feedback_query->have_posts()) : while ($feedback_query->have_posts()) : $feedback_query->the_post(); ?>
        <div class="feedback-slider--item">
          <div class="feedback-slider-container--item">
            <div class="image-container">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/icon-testimonal.svg'); ?>
            </div>
            <div class="text-container">
              <?php the_content() ?>
            </div>
            <div class="person-container">
              <h3><?php the_title() ?></h3>
              <span>Driver</span>
            </div>
          </div>
        </div>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </div>
</section>
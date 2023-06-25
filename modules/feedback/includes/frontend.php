<section class="feedback">
  <div class="container-wrap">
    <div class="feedback-container">
      <div class="feedback-grid">
        <div class="feedback-grid__item feedback-grid__item-content">
          <div class="title-container">
            <h2>Feedback dos Clientes</h2>
            <span>Veja o depoimento de clientes e arquitetos</span>
          </div>
          <?php if (!wp_is_mobile()): ?>
            <div class="control-slide-container">
              <span class="arrow arrows-left">
                <?= get_svg_content('icon-arrow-chevron-left'); ?>
              </span>
              <span class="arrow arrows-right">
                <?= get_svg_content('icon-arrow-chevron-right'); ?>
              </span>
            </div>
          <?php endif; ?>
        </div>
        <div class="feedback-grid__item feedback-grid__item-slider">
          <div class="feedback-slider"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-content obras">
  <div class="container-wrap">
    <div class="obras-container">
      <div class="title-container">
        <span>Nossas obras →</span>
        <h2>Projetos e Mostras de decoração</h2>
      </div>
      <div class="obras-container__posts">
        <?php if (wp_is_mobile()): ?>
          <div class="obras-container__posts-slider"></div>
        <?php else: ?>
          <div class="obras-container__posts-grid">
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-2.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-2x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-3.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-2x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-4.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-5.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-6.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
          </div>
        <?php endif; ?>
        <div class="button-container">
          <a href="" class="button button-orange">Conheça <span class="arrow-button">→</span></a>
        </div>
      </div>
    </div>
</section>
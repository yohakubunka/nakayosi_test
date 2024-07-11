<?php wp_footer(); ?>
<?php $theme_options = get_option('theme_option_name');  ?>
<footer class="footer">
  <div class="bg-layer">
    <div class="footer__inner">
      <div class="pagetop">
        <a class="pagetop__inner" href="#">
          <p>トップへ戻る</p>
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/blue_bird.svg" alt="トップページへ">
        </a>
      </div>
      <div class="footer__inner--upper flex-between">
        <div class="footer-logo">
          <a href="<?= esc_url(home_url('/')); ?>">
            <img src="<?= esc_html(get_theme_mod('footer-logo')) ?>" alt="なかよし保育園 ロゴ">
          </a>
        </div>
        <div class="btn-box">
          <div class="reserve-btn link-btn ext-icon">
            <a target="_blank" href="<?= get_theme_mod('reserve_url'); ?>">
              <p>見学予約</p>
            </a>
          </div>
        </div>
      </div>
      <div class="footer__inner--under">
        <div class="footer-company flex-left">
          <h3 class="address-no">〒<?= $theme_options['op_5'] ?></h3>
          <h3 class="address"><?= $theme_options['op_6'] ?></h3>
          <div class="map-btn link-btn">
            <a target="_blank" href="<?= $theme_options['op_12'] ?>">
              <p>Google Map</p>
            </a>
          </div>
        </div>
        <div class="footer-company__tel flex-left">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/svg/tel-icon.svg" alt="電話のアイコン">
          <a class="phone-no" href="tel:<?= preg_replace('/[^0-9]/', '', $theme_options['op_7']); ?>">
            <?= $theme_options['op_7'] ?>
          </a>
        </div>
        <p>受付時間　<?= $theme_options['op_11'] ?></p>
      </div>
    </div>
    <div class="copyright">©︎2022　なかよし保育園</div>
  </div>
</footer>
</body>

</html>
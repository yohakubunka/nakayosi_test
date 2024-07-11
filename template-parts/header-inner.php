<?php $theme_options = get_option('theme_option_name'); ?>
<div class="header">
  <div class="header__inner">
    <div class="header__inner--left">
      <div class="header-logo">
        <a href="<?= esc_url(home_url('/')); ?>"><img src="<?= esc_html(get_theme_mod('header-logo')) ?>" alt="なかよし保育園"></a>
      </div>
    </div>
    <div class="header__inner--right">
      <ul class="menulist flex-left">
        <li>
          <a href="<?= esc_url(home_url('/')); ?>/news">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon1.svg" alt="お知らせ">
            <p>お知らせ</p>
          </a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/')); ?>/about">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon2.svg" alt="園について">
            <p>園について</p>
          </a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/')); ?>/life">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon3.svg" alt="園での生活">
            <p>園での生活</p>
          </a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/')); ?>/info">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon4.svg" alt="入園案内">
            <p>入園案内</p>
          </a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/')); ?>/recruit">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon5.svg" alt="採用情報">
            <p>採用情報</p>
          </a>
        </li>
      </ul>
      <div class="btn-box">
        <div class="reserve-btn link-btn ext-icon">
          <a target="_blank" href="<?= get_theme_mod('reserve_url'); ?>">
            <p>見学予約</p>
          </a>
        </div>
        <div class="contact-btn link-btn">
          <a href="<?= esc_url(home_url('/')); ?>/contact">
            <p>お問い合わせ</p>
          </a>
        </div>
      </div>
    </div>

    <!-- ハンバーガーメニュー -->
    <div class="open-btn">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
</header>
<!-- ハンバーガーメニューの中身 -->
<div class="inside" id="inside">
  <div class="inside__inner">
    <ul class="inside__inner--menulist">
      <li>
        <a href="<?= esc_url(home_url('/')); ?>/news">
          <div class="flex-left">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon1.svg" alt="お知らせ">
            <p>お知らせ</p>
          </div>
        </a>
      </li>
      <li>
        <a href="<?= esc_url(home_url('/')); ?>/about">
          <div class="flex-left">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon2.svg" alt="園について">
            <p>園について</p>
          </div>
        </a>
      </li>
      <li>
        <a href="<?= esc_url(home_url('/')); ?>/life">
          <div class="flex-left">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon3.svg" alt="園での生活">
            <p>園での生活</p>
          </div>
        </a>
      </li>
      <li>
        <a href="<?= esc_url(home_url('/')); ?>/info">
          <div class="flex-left">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon4.svg" alt="入園案内">
            <p>入園案内</p>
          </div>
        </a>
      </li>
      <li>
        <a href="<?= esc_url(home_url('/')); ?>/recruit">
          <div class="flex-left">
            <img class="header-icon" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/header_icon5.svg" alt="採用情報">
            <p>採用情報</p>
          </div>
        </a>
      </li>
    </ul>
    <div class="inside__inner--btn-box">
      <div class="reserve-btn ext-icon link-btn">
        <a target="_blank" href="<?= get_theme_mod('reserve_url'); ?>">
          <p>見学予約</p>
        </a>
      </div>
      <div class="contact-btn link-btn">
        <a href="<?= esc_url(home_url('/')); ?>/contact">
          <p>お問い合わせ</p>
        </a>
      </div>
    </div>
  </div>
</div>
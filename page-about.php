<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php $theme_options = get_option('theme_option_name');  ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="about">
  <!-- メッセージ-->
  <section class="message">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-1">メッセージ</h2>
        <div class="flexcolumn">
          <?php $about_message = get_field('about_message'); ?>
          <div class="flexcolumn__left">
            <h3><?= $about_message['about_message-title']; ?></h3>
            <p><?= nl2br($about_message['about_message-text']); ?></p>
          </div>
          <div class="flexcolumn__right">
            <div class="kadomaru-frame">
              <img src="<?= $about_message['about_message-img']; ?>" alt="メッセージ 画像">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 施設概要 -->
  <section class="facility">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-2">園の概要</h2>
        <?php if (get_field('about_facility-img')) : ?>
          <div class="facility-img kadomaru-frame">
            <img src="<?php the_field('about_facility-img'); ?>" alt="なかよし保育園 施設外観" />
          </div>
        <?php endif; ?>
        <div class="facility-content">
          <ul class="flexitem">
            <li class="item-box dots-line">
              <p class="f-title">設置主体</p>
              <p><?= $theme_options['op_1'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">代表者</p>
              <p><?= $theme_options['op_2'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">種別</p>
              <p><?= $theme_options['op_3'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">受入年齢</p>
              <p><?= $theme_options['op_4'] ?> </p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">所在地</p>
              <p>〒<?= $theme_options['op_5'] ?><?= $theme_options['op_6'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">保育時間</p>
              <p><?= $theme_options['op_10'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">連絡先</p>
              <p>TEL:<?= $theme_options['op_7'] ?> FAX:<?= $theme_options['op_8'] ?><br>MAIL:<?= $theme_options['op_9'] ?></p>
            </li>
            <li class="item-box dots-line">
              <p class="f-title">アクセス</p>
              <p><?= $theme_options['op_13'] ?><br><br></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ギャラリー-->
  <section class="gallery last-section">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-3">ギャラリー</h2>
        <ul class="slick-slider">
          <?php for ($i = 0; $i <= 9; $i++) :
            $about_gallery = get_field('about_gallery')['about_gallery-box' . $i]; ?>
            <?php $value = $about_gallery['about_gallery-img' . $i]; ?>
            <?php if (empty($value)) : ?>
            <?php else : ?>
              <div class="gallery-box" src="">
                <img class="kadomaru-img" src="<?= $about_gallery['about_gallery-img' . $i]; ?>">
                <p><?= $about_gallery['about_gallery-title' . $i]; ?></p>
              </div>
            <?php endif; ?>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
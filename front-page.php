<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<main id="front">

  <!-- お知らせ -->
  <section class="top-news">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-1">お知らせ</h2>
        <div class="newslist">
          <?php
          $news = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );
          $news_puery = new WP_Query($news);
          if ($news_puery->have_posts()) :
          ?>
            <?php while ($news_puery->have_posts()) : $news_puery->the_post(); ?>
              <article class="newslist__article dots-line">
                <div class="flex-left">
                  <p class="post_date"><?= get_the_date('Y/m/d'); ?></p>
                  <?php $categories = get_the_category();
                  if ($categories) : ?>
                    <div class="category_btn">
                      <?php foreach ($categories as $category) : ?>
                        <div class="post_category"> <a href="<?= get_category_link($category->term_id) ?>">
                            <p><?= $category->name ?></p>
                          </a>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="flex-between">
                  <a class="newslist__article--title" href="<?= esc_url(home_url('/')); ?>news?#post-<?php the_ID(); ?>">
                    <h3 class="post_title"><?php the_title(); ?></h3>
                  </a>
                  <img class="arrow" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/arrow_icon.svg" alt="矢印アイコン">
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
        <div class="link-btn">
          <a href="<?= esc_url(home_url('/')); ?>/news">
            <p>一覧を見る</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 園について -->
  <section class="top-about">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-2">園について</h2>
        <div class="flexcolumn">
          <?php $top_about = get_field('top_about'); ?>
          <div class="flexcolumn__left">
            <h3><?= $top_about['top_about-title']; ?></h3>
            <p><?= nl2br($top_about['top_about-text']); ?></p>
          </div>
          <div class="flexcolumn__right">
            <img class="illust_L" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_L_2.png" alt="背景イラストL2">
            <div class="kadomaru-frame">
              <img src="<?= $top_about['top_about-img']; ?>" alt="園について 画像">
            </div>
            <img class="illust_R" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_R_2.png" alt="背景イラストR2">
          </div>
        </div>
        <div class="link-btn">
          <a href="<?= esc_url(home_url('/')); ?>/about">
            <p>詳しく見る</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 園での生活 -->
  <section class="top-life">
    <div class="bg-field">
      <div class="wave-top">
        <img class="illust-top" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_L_3.png" alt="背景イラストL3">
      </div>
      <div class="wave-center">
        <div class="inner">
          <h2 class="title icon-3">園での生活</h2>
          <div class="flex-between">
            <?php
            for ($i = 0; $i <= 2; $i++) :
              $top_life = get_field('top_life')['top_life-box' . $i]; ?>
              <div class="flex-between__box">
                <img class="window-frame1" src="<?= $top_life['top_life-img' . $i]; ?>" alt="園での生活 画像<?= $i + 1 ?>">
                <div class="link-text">
                  <a href="<?= esc_url(home_url('/')); ?>/life <?= $top_life['top_life-link' . $i]; ?>">
                    <h3 class="add-arrow"><?= $top_life['top_life-title' . $i]; ?></h3>
                  </a>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      <div class="wave-bottom">
        <img class="illust-bottom" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_R_3.png" alt="背景イラストR3">
      </div>
    </div>
  </section>

  <!-- 入園案内 -->
  <section class="top-info">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-4">入園案内</h2>
        <div class="flexcolumn">
          <?php $top_info = get_field('top_info'); ?>
          <div class="flexcolumn__left">
            <img class="illust_L" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_L_2.png" alt="背景イラストL2">
            <div class="kadomaru-frame">
              <img src=" <?= $top_info['top_info-img']; ?>" alt="入園案内 画像">
            </div>
            <img class="illust_R" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_R_2.png" alt="背景イラストR2">
          </div>
          <div class="flexcolumn__right">
            <h3><?= $top_info['top_info-title']; ?></h3>
            <p><?= nl2br($top_info['top_info-text']); ?></p>
          </div>
        </div>
        <div class="link-btn">
          <a href="<?= esc_url(home_url('/')); ?>/info">
            <p>詳しく見る</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 採用情報 -->
  <section class="top-recruit last-section">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-5">採用情報</h2>
        <div class="flexcolumn">
          <?php $top_recruit = get_field('top_recruit'); ?>
          <div class="flexcolumn__left">
            <h3><?= $top_recruit['top_recruit-title']; ?></h3>
            <p><?= nl2br($top_recruit['top_recruit-text']); ?></p>
          </div>
          <div class="flexcolumn__right">
            <img class="illust_L" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_L.png" alt="背景イラストL">
            <img class="window-frame2" src="<?= $top_recruit['top_recruit-img']; ?>" alt="採用情報 画像">
            <img class="illust_R" src="<?= get_stylesheet_directory_uri(); ?>/images/common/illust_R.png" alt="背景イラストR">
          </div>
        </div>
        <div class="link-btn">
          <a href="<?= esc_url(home_url('/')); ?>/recruit">
            <p>詳しく見る</p>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
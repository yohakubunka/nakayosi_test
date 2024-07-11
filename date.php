<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<main id="date" class="date">
  <section class="news-archive last-section">
    <div class="illust-back1">
      <div class="inner flex-between">
        <div class="news-col">
          <div class="news-contents">
            <div class="news__content--article">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) :  the_post() ?>
                  <?php if ($target_article_id === false) $target_article_id = get_the_id(); ?>
                  <article class="dots-line" id="post-<?php the_ID(); ?>">
                    <div class="js-accordion-title accordion-title">
                      <div class="flex-left">
                        <p class="post_date"><?= get_the_date("Y/m/d") ?></p>
                        <?php $categories = get_the_category();
                        if ($categories) : ?>
                          <div class="category_btn">
                            <?php foreach ($categories as $category) : ?>
                              <div class="post_category">
                                <p><?= $category->name ?></p>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="flex-between">
                        <h3 class="post_title"><?php the_title(); ?></h3>
                        <img class="arrow" src="<?= get_stylesheet_directory_uri(); ?>/images/svg/arrow_icon.svg" alt="矢印アイコン">
                      </div>
                    </div>
                    <div class="accordion-content">
                      <?= the_content(); ?>
                    </div>
                  </article>
                <?php endwhile; ?>
              <?php else : ?>
                <p>お知らせはありません</p>
              <?php endif;
              wp_reset_postdata(); ?>
            </div>
            <div class="pagination">
              <?php the_posts_pagination(
                array(
                  'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                  'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                  'prev_text'     => '<span class="prev-icon"></span>', // 「前へ」リンクのテキスト
                  'next_text'     => '<span class="next-icon"></span>', // 「次へ」リンクのテキスト
                  'type'          => 'list', // 戻り値の指定 (plain/list)
                )
              ); ?>
            </div>
          </div>
        </div>
        <div class="sidebar">
          <?php get_template_part('template-parts/news-sidebar'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
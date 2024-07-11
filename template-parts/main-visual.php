<div class="mainvisual">
  <?php if (is_home() || is_front_page()) : ?>
    <div class="mainvisual__top">
      <div class="mainvisual__top--inner">
        <img class="mv_illust mv_center" src="<?= get_stylesheet_directory_uri(); ?>/images/common/mv_center.png" alt="MV イラスト中央">
        <img class="mv_illust mv_left" src="<?= get_stylesheet_directory_uri(); ?>/images/common/mv_left.png" alt="MV イラスト左">
        <img class="mv_illust mv_yellowbird" src="<?= get_stylesheet_directory_uri(); ?>/images/common/mv_yellowbird.png" alt="MV イラスト 黄色い鳥">
        <img class="mv_illust mv_right" src="<?= get_stylesheet_directory_uri(); ?>/images/common/mv_right.png" alt="MV イラスト右">
        <img class="mv_illust mv_bluebird" src="<?= get_stylesheet_directory_uri(); ?>/images/common/mv_bluebird.png" alt="MV イラスト 青い鳥">
        <div class="pc-mv">
          <?php if (get_theme_mod('pc-mainvisual01')) : ?>
            <div class="mv-img">
              <img class="clip-mv" src="<?= get_theme_mod('pc-mainvisual01'); ?>" alt="メインビジュアルPC">
            </div>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <div class="sp-mv">
          <?php if (get_theme_mod('sp-mainvisual01')) : ?>
            <div class="mv-img">
              <img src="<?= get_theme_mod('sp-mainvisual01'); ?>" alt="メインビジュアルSP">
            </div>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <!-- メインビジュアル背景写真切り抜き用 height="0" width="0"は変更しないでください -->
        <svg xmlns="http://www.w3.org/2000/svg" height="0" width="0" viewBox="0 0 1245 843">
          <clipPath id="mainvisual" clipPathUnits="objectBoundingBox">
            <path id="MV-path" data-name="パス 88520" transform="scale(0.00080321285, 0.00118623962)" d="M1245.187,364.78c0,244.622-208.348,525.337-616.008,472.817C292.737,794.252-32.707,753.224,2.64,446.611,32.557,187.1,254.746,34.858,616.857,3.684c337.973-29.1,628.33,116.474,628.33,361.1" />
          </clipPath>
        </svg>
      </div>
    </div>
  <?php elseif (is_archive()) : ?>
    <div class="mainvisual__under">
      <div class="mainvisual__under--inner flex-center">
        <h2 class="title">お知らせ</h2>
      </div>
    </div>
  <?php elseif (is_category()) : ?>
    <div class="mainvisual__under">
      <div class="mainvisual__under--inner flex-center">
        <h2 class="title">お知らせ</h2>
      </div>
    </div>
  <?php elseif (is_date()) : ?>
    <div class="mainvisual__under">
      <div class="mainvisual__under--inner flex-center">
        <h2 class="title">お知らせ</h2>
      </div>
    </div>
  <? else : ?>
    <div class="mainvisual__under">
      <div class="mainvisual__under--inner flex-center">
        <h2 class="title"><?php the_title(); ?></h2>
      </div>
    </div>
  <?php endif; ?>
</div>
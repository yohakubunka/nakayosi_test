<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<!-- メッセージ-->
<main id="recruit">
  <section class="message">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-4">メッセージ</h2>
        <div class="flexcolumn">
          <?php $recruit_message = get_field('recruit_message'); ?>
          <div class="flexcolumn__left">
            <h3><?= $recruit_message['recruit_message-title']; ?></h3>
            <p><?= nl2br($recruit_message['recruit_message-text']); ?></p>
          </div>
          <div class="flexcolumn__right">
            <div class="kadomaru-frame">
              <img src="<?= $recruit_message['recruit_message-img']; ?>" alt="メッセージ 画像">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 働きやすい理由 -->
  <section class="reason">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-5">働きやすい理由</h2>
        <div class="flex-center">
          <?php
          for ($i = 0; $i <= 2; $i++) :
            $recruit_reason = get_field('recruit_reason')['recruit_reason' . $i]; ?>
            <div class="flex-center__box">
              <img class="kadomaru-img" src="<?= $recruit_reason['recruit_reason-img' . $i]; ?>" alt="働きやすい理由<?= $i + 1 ?>">
              <div class="flex-left">
                <span><?= $i + 1 ?></span>
                <h3><?= $recruit_reason['recruit_reason-text' . $i]; ?></h3>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 先輩の声 -->
  <section class="voice">
    <div class="illust-back3">
      <div class="inner">
        <h2 class="title icon-1">先輩の声</h2>
        <?php
        $args = array(
          'post_type' => 'voice',
        );
        $wp_voice = new WP_Query($args); ?>
        <?php if ($wp_voice) : ?>
          <?php while ($wp_voice->have_posts()) : $wp_voice->the_post(); ?>
            <?php $voice = get_field('voice'); ?>
            <div class="flexcolumn">
              <div class="flexcolumn__left">
                <img class="window-frame1" src="<?= $voice['voice_img']; ?>">
              </div>
              <div class="flexcolumn__right">
                <div class="flex-left">
                  <h3 class="name"><?php the_title(); ?></h3>
                  <p class="jobtitle"><?= $voice['voice_jobtitle']; ?></p>
                </div>
                <h3 class="voice-title"><?= nl2br($voice['voice_title']); ?></h3>
                <p><?= nl2br($voice['voice_text']); ?></p>
              </div>
            </div>
          <?php endwhile; ?>

        <?php else : ?>
          <?php wp_reset_postdata(); ?>
          <p>記事がまだありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- 募集要項 -->
  <section class="requirements last-section">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-2">募集要項</h2>
        <?php
        $args = array(
          'post_type' => 'requirements',
        );
        $wp_posts = new WP_Query($args); ?>
        <?php if ($wp_posts) : ?>
          <?php while ($wp_posts->have_posts()) : $wp_posts->the_post(); ?>
            <div class="accordion-box">
              <div class="accordion-title js-accordion-title">
                <h3><?php the_title(); ?></h3>
              </div>
              <div class="accordion-content">
                <?php
                $recruitments = SCF::get('requirements');
                foreach ($recruitments as $fields) :
                ?>
                  <div class="flex-left dots-line">
                    <p class="title-n"><?= $fields['requirements_title']; ?></p>
                    <p class="contents"><?= nl2br($fields['requirements_text']); ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <?php wp_reset_postdata(); ?>
          <p>記事がまだありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
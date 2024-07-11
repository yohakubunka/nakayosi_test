<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="life">
  <!-- 保育目標 -->
  <section class="goal" id="goal">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-5">保育目標</h2>
        <div class="flexcolumn">
          <?php $life_goal = get_field('life_goal'); ?>
          <div class="flexcolumn__left">
            <div class="kadomaru-frame">
              <img src="<?= $life_goal['life_goal-img']; ?>" alt="保育目標 画像">
            </div>
          </div>
          <div class="flexcolumn__right">
            <h3><?= $life_goal['life_goal-title']; ?></h3>
            <ul>
              <?php for ($i = 0; $i <= 4; $i++) :
                $life_goal_list = get_field('life_goal')['life_goal-list'] ?>
                <?php $value = $life_goal_list['life_goal-' . $i]; ?>
                <?php if (empty($value)) : ?>
                <?php else : ?>
                  <li class="list-dot"><?= $life_goal_list['life_goal-' . $i]; ?></li>
                <?php endif; ?>
              <?php endfor; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 保育方針・特徴 -->
  <section class="philosophy" id="philosophy">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-1">保育方針・特徴</h2>
        <?php $life_philosophy = get_field('life_philosophy'); ?>
        <p><?= nl2br($life_philosophy['life_philosophy-text']); ?></p>
        <div class="flexcolumn">
          <div class="flexcolumn__left">
            <div class="kadomaru-frame">
              <img src="<?= $life_philosophy['life_philosophy-img1']; ?>" alt="保育方針・特徴 画像1">
            </div>
          </div>
          <div class="flexcolumn__right">
            <div class="kadomaru-frame">
              <img src="<?= $life_philosophy['life_philosophy-img2']; ?>" alt="保育方針・特徴 画像2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 一日の流れ -->
  <section class="dayflow" id="dayflow">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-2">一日の流れ</h2>
        <p class="flow-text"><?= SCF::get('flow-text'); ?></p>
        <div class="flexcolumn">
          <div class="flexcolumn__left">
            <h3>乳児</h3>
            <?php
            $infant_img = SCF::get('flow_infant-img');
            ?>
            <img class="kadomaru-img" src="<?= wp_get_attachment_url($infant_img); ?>" alt="保育方針・特徴 画像1">
            <?php
            $flow_infant_list = SCF::get('flow-infant_list');
            foreach ($flow_infant_list as $fields) :
            ?>
              <div class="flex-left list-dot">
                <p class="time"><?= $fields['flow-infant_list-time']; ?></p>
                <p class="program"><?= $fields['flow-infant_list-program']; ?></p>
              </div>
            <?php endforeach ?>
            <div class="anot-area">
              <?php $flow_infant_anot = SCF::get('flow-infant_anot');
              foreach ($flow_infant_anot as $fields) : ?>
                <p class="anot"><?= nl2br($flow_infant_anot['flow-infant_anottext']); ?></p>
              <?php endforeach ?>
            </div>
          </div>
          <div class="flexcolumn__right">
            <h3>幼児</h3>
            <?php
            $child_img = SCF::get('flow-child_img');
            ?>
            <img class="kadomaru-img" src="<?= wp_get_attachment_url($child_img); ?>" alt="保育方針・特徴 画像1">
            <?php
            $flow_child_list = SCF::get('flow-child_list');
            foreach ($flow_child_list as $fields) :
            ?>
              <div class="flex-left list-dot">
                <p class="time"><?= $fields['flow-child_list-time']; ?></p>
                <p class="program"><?= $fields['flow-child_list-program']; ?></p>
              </div>
            <?php endforeach ?>
            <div class="anot-area">
              <?php $flow_child_anot = SCF::get('flow-child_anot');
              foreach ($flow_child_anot as $fields) : ?>
                <p class="anot"><?= nl2br($fields['flow-child_anottext']); ?></p>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      </di>
  </section>

  <!-- 年間行事 -->
  <section class="event last-section" id="event">
    <div class="illust-back3">
      <div class="inner">
        <h2 class="title icon-3">年間行事</h2>
        <p class="event-text"><?= SCF::get('event_text'); ?></p>

        <!-- 春 -->
        <div class="flexcolumn">
          <div class="flexcolumn__left">
            <div class="flex-left">
              <h3>春</h3>
              <p>3〜5月</p>
            </div>
            <?php
            $spring_event_list = SCF::get('spring-event_list');
            foreach ($spring_event_list as $fields) :
            ?>
              <p class="event-title list-dot"><?= $fields['spring-event_list-title']; ?></p>
            <?php endforeach ?>
          </div>
          <div class="flexcolumn__right">
            <?php
            $spring_event_img = SCF::get('spring-event_img');
            ?>
            <img class="window-frame2" src="<?= wp_get_attachment_url($spring_event_img); ?>" alt="年間行事 春">
          </div>
        </div>

        <!-- 夏 -->
        <div class="flexcolumn reverse">
          <div class="flexcolumn__left">
            <div class="flex-left">
              <h3>夏</h3>
              <p>6〜8月</p>
            </div>
            <?php
            $summer_event_list = SCF::get('summer-event_list');
            foreach ($summer_event_list as $fields) :
            ?>
              <p class="event-title list-dot"><?= $fields['summer-event_list-title']; ?></p>
            <?php endforeach ?>
          </div>
          <div class="flexcolumn__right">
            <?php
            $summer_event_img = SCF::get('summer-event_img');
            ?>
            <img class="window-frame2" src="<?= wp_get_attachment_url($summer_event_img); ?>" alt="年間行事 夏">
          </div>
        </div>

        <!-- 秋 -->
        <div class="flexcolumn">
          <div class="flexcolumn__left">
            <div class="flex-left">
              <h3>秋</h3>
              <p>9〜11月</p>
            </div>
            <?php
            $autumn_event_list = SCF::get('autumn-event_list');
            foreach ($autumn_event_list as $fields) :
            ?>
              <p class="event-title list-dot"><?= $fields['autumn-event_list-title']; ?></p>
            <?php endforeach ?>
          </div>
          <div class="flexcolumn__right">
            <?php
            $autumn_event_img = SCF::get('autumn-event_img');
            ?>
            <img class="window-frame2" src="<?= wp_get_attachment_url($autumn_event_img); ?>" alt="年間行事 秋">
          </div>
        </div>

        <!-- 冬 -->
        <div class="flexcolumn reverse">
          <div class="flexcolumn__left">
            <div class="flex-left">
              <h3>冬</h3>
              <p>12〜2月</p>
            </div>
            <?php
            $winter_event_list = SCF::get('winter-event_list');
            foreach ($winter_event_list as $fields) :
            ?>
              <p class="event-title list-dot"><?= $fields['winter-event_list-title']; ?></p>
            <?php endforeach ?>
          </div>
          <div class="flexcolumn__right">
            <?php
            $winter_event_img = SCF::get('winter-event_img');
            ?>
            <img class="window-frame2" src="<?= wp_get_attachment_url($winter_event_img); ?>" alt="年間行事 冬">
          </div>
        </div>
      </div>
      </di>
  </section>
</main>
<?php get_footer(); ?>
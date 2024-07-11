<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main id="info">
  <!-- 入園資格 -->
  <section class="qualification">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-4">入園資格</h2>
        <p class="description"><?= nl2br(SCF::get('qualifi_description')); ?></p>
        <div class="qualifi-list">
          <ul class="qualifi-list__inner">
            <?php
            $qualifi = SCF::get('qualifi');
            foreach ($qualifi as $fields) :
            ?>
              <li class="qualifi-cont dots-line">
                <h3 class="qualifi-text"><?= $fields['qualifi_text']; ?></h3>
                <p class="qualifi-annot"><?= nl2br($fields['qualifi_annot']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="reference">
            <?php $reference = get_field('reference'); ?>
            <p class="ref-des"><?= $reference['reference_text']; ?></p>
            <div class="link-btn ext-icon">
              <a target="_blank" href="<?= $reference['reference_url']; ?>" class="button__switch">
                <h3><?= $reference['reference_title']; ?></h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 入園の流れ -->
  <section class="ad-flow">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-5">入園の流れ</h2>
        <?php $ad_flow = get_field('ad_flow'); ?>
        <p class="description"><?= $ad_flow['ad_flow-description']; ?></p>
        <div class="flex-between">
          <?php
          for ($i = 0; $i <= 3; $i++) :
            $ad_flow_list = get_field('ad_flow')['ad_flow-list']; ?>
            <div class="flex-between__box flex-center window-frame1">
              <h3 class="step"><?= $i + 1 ?></h3>
              <h3 class="cont"><?= nl2br($ad_flow_list['ad_flow-list-step' . $i]); ?></h3>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 定員 -->
  <section class="capacity">
    <div class="inner">
      <h2 class="title icon-1">定員</h2>
      <?php $info_capacity = get_field('info_capacity'); ?>
      <p class="description"><?= $info_capacity['info_capacity-description']; ?></p>
      <table class="pc">
        <tr>
          <th class="head">年齢</th>
          <?php
          for ($i = 0; $i <= 5; $i++) : ?>
            <th><?= $i ?>歳児</th>
          <?php endfor; ?>
        </tr>
        <tr>
          <td class="head">定員</td>
          <?php
          for ($i = 0; $i <= 5; $i++) :
            $ad_flow_list = get_field('info_capacity')['info_capacity-box'];
            if (empty($ad_flow_list['info_capacity-' . $i])) {
              $ad_flow_list['info_capacity-' . $i] = '―';
            } else {
            } ?>
            <td><?= $ad_flow_list['info_capacity-' . $i]; ?>名</td>
          <?php endfor; ?>
        </tr>
      </table>
      <!-- 定員表　スマホレイアウト　 画面サイズ768px以下のみ表示-->
      <table class="sp">
        <tr>
          <th class="head">年齢</th>
          <th class="head">定員</th>
        </tr>
        <?php
        for ($i = 0; $i <= 5; $i++) :
          $ad_flow_list = get_field('info_capacity')['info_capacity-box'];
          if (empty($ad_flow_list['info_capacity-' . $i])) {
            $ad_flow_list['info_capacity-' . $i] = '―';
          } else {
          } ?>
          <tr>
            <td class="age"><?= $i ?>歳児</td>
            <td><?= $ad_flow_list['info_capacity-' . $i]; ?>名</td>
          </tr>
        <?php endfor; ?>
      </table>
    </div>
  </section>

  <!-- 費用 -->
  <section class="cost">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-2">費用</h2>
        <?php $info_cost = get_field('info_cost'); ?>
        <table class="food-cost pc">
          <tr>
            <th class="head">年齢</th>
            <?php
            for ($i = 0; $i <= 5; $i++) : ?>
              <th><?= $i ?>歳児</th>
            <?php endfor; ?>
          </tr>
          <tr>
            <td class="head">食費</td>
            <?php
            for ($i = 0; $i <= 5; $i++) :
              $info_cost_list = get_field('info_cost')['info-cost_list'];
              if (empty($info_cost_list['info_cost-' . $i])) {
                $info_cost_list['info_cost-' . $i] = '―';
              } else {
              }
            ?>
              <td class="cost_price"><?= nl2br($info_cost_list['info_cost-' . $i]); ?></td>
            <?php endfor; ?>
          </tr>
        </table>
        <!-- 食費表　スマホレイアウト　 画面サイズ768px以下のみ表示-->
        <table class="food-cost sp">
          <tr>
            <th class="head">年齢</th>
            <th class="head">食費</th>
          </tr>
          <?php
          for ($i = 0; $i <= 5; $i++) :
            $info_cost_list = get_field('info_cost')['info-cost_list'];
            if (empty($info_cost_list['info_cost-' . $i])) {
              $info_cost_list['info_cost-' . $i] = '―';
            } else {
            }
          ?>
            <tr>
              <td class="age"><?= $i ?>歳児</td>
              <td><?= nl2br($info_cost_list['info_cost-' . $i]); ?></td>
            </tr>
          <?php endfor; ?>
        </table>

        <div class="annotation flex-right">
          <?php
          for ($i = 0; $i <= 2; $i++) :
            $info_cost_annot = get_field('info_cost'); ?>
            <p>※<?= $info_cost_annot['info_cost-annot' . $i]; ?></p>
          <?php endfor; ?>
        </div>

        <table class="other-cost">
          <?php
          $info_clothcost = SCF::get('info_clothcost');
          foreach ($info_clothcost as $fields) :
            if (empty($fields['info_clothcost-size'])) {
              $fields['info_clothcost-size'] = '―';
            } else {
            }
          ?>
            <tr>
              <td class="head"><?= $fields['info_clothcost-title']; ?></td>
              <td><?= $fields['info_clothcost-size']; ?></td>
              <td><?= $fields['info_clothcost-price']; ?>円</td>
            </tr>
          <?php endforeach ?>
        </table>
        <div class="annotation flex-right">
          <p>※<?= $info_cost_annot['info_cost-annot0']; ?></p>
        </div>
        <!-- 外部リンク -->
        <div class="reference">
          <?php $reference = get_field('reference'); ?>
          <p class="ref-des"><?= $reference['reference_text']; ?></p>
          <div class="link-btn ext-icon">
            <a target="_blank" href="<?= $reference['reference_url']; ?>" class="button__switch">
              <h3><?= $reference['reference_title']; ?></h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 提出書類 -->
  <section class="download last-section" id="download">
    <div class="illust-back2">
      <div class="inner">
        <h2 class="title icon-3">提出書類</h2>
        <div class="flexitem">
          <?php
          $document = SCF::get('document');
          foreach ($document as $fields) :
          ?>
            <div class="flexitem__box">
              <a id="alert-content" class="document-link" href="<?= wp_get_attachment_url($fields['document_data']); ?>">
                <p class="add-arrow"><?= $fields['document_title']; ?></p>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      </di>
  </section>
</main>

<?php get_footer(); ?>
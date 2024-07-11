<div class="sidebar-wrap">
  <?php
  $cat = array(
    'title_li'           => __(''),
    'number'             => 5,
    'taxonomy'           => 'category',
  );
  $arch = array(
    'type'            => 'monthly',
    'title_li'           => __(''),
    'number'             => 5,
    'post_type'     => 'post'
  )
  ?>
  <div class="category-list">
    <h3>カテゴリー</h3>
    <ul>
      <li><?php wp_list_categories($cat); ?></li>
    </ul>
  </div>
  <div class="monthly-archive">
    <h3>アーカイブ</h3>
    <div class="accordion-item js-accordion-title">
      <ul>
        <li><?php wp_get_archives('post_type=post&type=yearly&show_post_count=1'); ?></li>
      </ul>
    </div>
  </div>
</div>
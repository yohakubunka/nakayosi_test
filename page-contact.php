<?php get_header(); ?>
<?php get_template_part('template-parts/main-visual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="contact" id="contact">
  <!-- 入力フォーム -->
  <section class="last-section">
    <div class="illust-back1">
      <div class="inner">
        <h2 class="title icon-3">入力フォーム</h2>
        <ul class="caution">
          <li class="list-dot">「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</li>
          <li class="list-dot">ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</li>
          <li class="list-dot">返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</li>
          <li class="list-dot">万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</li>
        </ul>
        <div class="contact-form">
          <?= do_shortcode('[contact-form-7 id="7" title="入力フォーム"]'); ?>
        </div>
      </div>
      </di>
  </section>
</main>

<?php get_footer(); ?>
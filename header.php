<?php
// Internet Explorer で開かれた場合はedgeへ開くように通知を出す
$edge_open = true;

// クッキーが存在しない場合はデフォルト値を設定
$view_ie = isset($_COOKIE['view_ie']) ? $_COOKIE['view_ie'] : '';

if ($edge_open && $view_ie != 'on') {
  if (get_browser_name() == "ie") { ?>
    <script>
      MoveCheck();

      function MoveCheck() {
        if (confirm("ご利用のウェブページはInternet Explorerでの表示を推奨していません。Microsoft Edgeで表示しますか？")) {
          var url = location.href;
          url = "microsoft-edge:" + url;
          window.location.href = url;
        } else {
          alert("Internet Explorerでの表示を続行します。");
        }
      }
    </script>
<?php
    // ページ推移先で通知が出続けないようにクッキーにInternet Explorerで閲覧したフラグを残す
    // クッキーの有効時間 : 1時間
    setcookie('view_ie', 'on', time() + 60 * 60);
  }
}
?>

<!DOCTYPE html>
<html class="fwHtml" <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/images/favicon.ico">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->
  <script>
    (function(d) {
      var config = {
          kitId: 'csw3jer',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-P8EQ97P2F1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-P8EQ97P2F1');
  </script>
  <meta name="google-site-verification" content="JRDw5fIThVwC2RE9x-Z2c0NaNORtH5p5HfVr-f_LmmY" />
</head>

<body class="body_<?php echo get_page_slug() ?> fwWrap">
  <header id="head">
    <?php get_template_part('template-parts/header-inner'); ?>
    <!-- get template directory uri for Javascript -->
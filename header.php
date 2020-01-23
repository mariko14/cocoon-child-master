<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
<!-- google analytics, Googleタグマネージャー -->
<link rel='preconnect dns-prefetch' href="//www.googletagmanager.com">
<link rel='preconnect dns-prefetch' href="//www.google-analytics.com">
<!-- Google AdSense -->
<link rel="preconnect dns-prefetch" href="//pagead2.googlesyndication.com">
<link rel="preconnect dns-prefetch" href="//googleads.g.doubleclick.net">
<link rel="preconnect dns-prefetch" href="//tpc.googlesyndication.com">
<link rel="preconnect dns-prefetch" href="//ad.doubleclick.net">
<link rel="preconnect dns-prefetch" href="//www.gstatic.com">
<!-- 各種サービス -->
<link rel="preconnect dns-prefetch" href="//cse.google.com">
<link rel="preconnect dns-prefetch" href="//fonts.gstatic.com">
<link rel="preconnect dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect dns-prefetch" href="//cms.quantserve.com">
<link rel="preconnect dns-prefetch" href="//secure.gravatar.com">
<link rel="preconnect dns-prefetch" href="//cdn.syndication.twimg.com">
<link rel="preconnect dns-prefetch" href="//cdn.jsdelivr.net">
<!-- ASP -->
<link rel='preconnect dns-prefetch' href="//images-fe.ssl-images-amazon.com">
<link rel='preconnect dns-prefetch' href="//m.media-amazon.com">
<link rel='preconnect dns-prefetch' href="//completion.amazon.com">
<link rel="preconnect dns-prefetch" href="//i.moshimo.com">
<link rel="preconnect dns-prefetch" href="//aml.valuecommerce.com">
<link rel="preconnect dns-prefetch" href="//dalc.valuecommerce.com">
<link rel="preconnect dns-prefetch" href="//dalb.valuecommerce.com">
<?php //ヘッドタグ内挿入用のアクセス解析用テンプレート
get_template_part('tmp/head-analytics'); ?>
<?php //AMPの案内タグを出力
if ( has_amp_page() ): ?>
<link rel="amphtml" href="<?php echo get_amp_permalink(); ?>">
<?php endif ?>
<?php //Google Search Consoleのサイト認証IDの表示
if ( get_google_search_console_id() ): ?>
<!-- Google Search Console -->
<meta name="google-site-verification" content="<?php echo get_google_search_console_id() ?>" />
<!-- /Google Search Console -->
<?php endif;//Google Search Console終了 ?>
<?php //Google Tag Manager
if (is_analytics() && $tracking_id = get_google_tag_manager_tracking_id()): ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $tracking_id; ?>');</script>
<!-- End Google Tag Manager -->
<?php endif //Google Tag Manager終了 ?>

<?php //自動アドセンス
get_template_part('tmp/ad-auto-adsense'); ?>


<?php wp_head(); ?>

<?php //カスタムフィールドの挿入（カスタムフィールド名：head_custom
get_template_part('tmp/head-custom-field'); ?>

<?php //headで読み込む必要があるJavaScript
get_template_part('tmp/head-javascript'); ?>

<?php //PWAスクリプト
get_template_part('tmp/head-pwa'); ?>

<?php //ヘッドタグ内挿入用のユーザー用テンプレート
get_template_part('tmp-user/head-insert'); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

<?php //body要素の直後に何かを挿入する際
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<?php //body最初に挿入するアクセス解析ヘッダータグの取得
get_template_part('tmp/body-top-analytics'); ?>

<?php //ユーザーカスタマイズ用
get_template_part('tmp-user/body-top-insert'); ?>

<?php //ボディータグ上部
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div id="container" class="container<?php echo get_additional_container_classes(); ?> cf">
<div id="header-container" class="header-container">
  <div class="header-container-in<?php echo get_additional_header_container_classes(); ?>">
    <header id="header" class="header<?php echo get_additional_header_classes(); ?> cf" itemscope itemtype="https://schema.org/WPHeader">
 <?php //キャッチフレーズがヘッダー上部のとき
        if (is_tagline_position_header_top()) {
           get_template_part('tmp/header-tagline');
        } ?>
      <div id="header-in" class="header-in wrap cf" itemscope itemtype="https://schema.org/WebSite">

       
			
		  <div id="logo-area">
		  <img src="/wp-content/themes/cocoon-child-master/images/title.png" alt="anywhere, anytime" class="logo-img" width="760" height="84">
			  <?php //ロゴ前にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_before_open' ); ?>

        <?php //ロゴタグの生成
        generate_the_site_logo_tag(); ?>

        <?php //ロゴ後にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_after_open' ); ?>
			  
		  </div>
		  <img src="/wp-content/themes/cocoon-child-master/images/header-photo-line.png" alt="" class="header-photo-line" width="800" height="88">
		  
        

        <?php //キャッチフレーズがヘッダー下部のとき
        if (is_tagline_position_header_bottom()) {
           get_template_part('tmp/header-tagline');
        } ?>

      </div>

    </header>

    <?php get_template_part('tmp/navi'); ?>
  </div><!-- /.header-container-in -->
</div><!-- /.header-container -->

  <?php //通知エリア
  get_template_part('tmp/notice'); ?>

  <?php //アピールエリア
  get_template_part('tmp/appeal'); ?>

  <?php //おすすめカード
  get_template_part('tmp/recommended-cards'); ?>

  <?php //カルーセル
  get_template_part('tmp/carousel'); ?>

  <?php
  ////////////////////////////
  //コンテンツ上部ウィジェット
  ////////////////////////////
  if ( is_active_sidebar( 'content-top' ) ) : ?>
  <div id="content-top" class="content-top">
    <div id="content-top-in" class="content-top-in wrap">
      <?php dynamic_sidebar( 'content-top' ); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php //投稿パンくずリストがメイン手前の場合
  if (is_single() && is_single_breadcrumbs_position_main_before()){
    get_template_part('tmp/breadcrumbs');
  } ?>

  <?php //固定ページパンくずリストがメイン手前の場合
  if (is_page() && is_page_breadcrumbs_position_main_before()){
    get_template_part('tmp/breadcrumbs-page');
  } ?>

  <?php //メインカラム手前に挿入するユーザー用テンプレート
  get_template_part('tmp-user/main-before'); ?>

  <div id="content" class="content cf">

    <div id="content-in" class="content-in wrap">

        <main id="main" class="main<?php echo get_additional_main_classes(); ?>" itemscope itemtype="https://schema.org/Blog">


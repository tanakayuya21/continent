<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
	<meta name="description" content="WordPress 3.0用の無料テーマです。">
	<meta name="keywords" content="WordPress 無料 テーマ, WordPress テーマ, WordPress 3.0 テーマ, WordPress テンプレート, WordPress 無料テンプレート">
   <!-- External files -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
   <!-- Favicon, Thumbnail image -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
	<link rel="stylesheet" href="./css/all.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="./index.js"></script>
    <script>
    $(function(){
        $(window).scroll(function (){
            $('.fade').each(function(){
                var targetElement = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > targetElement - windowHeight + 35) {
                    $(this).css('opacity','1');
                    $(this).css('transform','translateY(0)');
                }
            });
        });
    });
   $(function(){
        $(window).scroll(function (){
            $('.item-image').each(function(){
                  var targetElement = $(this).offset().top;
                  var scroll = $(window).scrollTop();
                  var windowHeight = $(window).height();
                  if (scroll > targetElement - windowHeight + 35) {
                     $(this).css('opacity','1');
                     $(this).css('transform','translateX(0)');
                  }
            });
        });
    });
</script>
<?php wp_head();?>
<header class="sub">
    <a href="./"><img class="logo-image" src="<?php echo get_template_directory_uri();?>/images/logo.jpg"></a>
    <div class="title">Continent合同会社(コンティネント)</div>
    <div class="tel">
        <a href="./">TEL:05031968763</a>
    </div>
</header>
<header class="ddmenu">
    <li><a href="<?php bloginfo('url');?>/" data-hover="About Us">HOME</a>
      <ul>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">新製品</a></li>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">新サービス</a></li>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">弊社について</a></li>
      </ul>
    </li>
    <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">お知らせ</a>
      <ul>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">新製品</a></li>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">新サービス</a></li>
        <li><a href="<?php bloginfo('url');?>/blogs/" data-hover="About Us">弊社について</a></li>
      </ul>
    </li>
    <li class="pull_list">
      <a href="<?php get_template_directory_uri();?>/service/"  data-hover="Services">事業内容</a>
        <ul>
         <li><a href="#">ハードウェア</a></li>
         <li><a href="#">ソフトウェア</a></li>
         <li><a href="#">ウェブサービス</a></li>
      </ul>
    </li>
    <li><a href="<?php get_template_directory_uri();?>/company/" data-hover="About Us">会社情報</a>
      <ul>
         <li><a href="<?php get_template_directory_uri();?>/company/">会社概要</a></li>
         <li><a href="<?php get_template_directory_uri();?>/company/">沿革</a></li>
         <li><a href="<?php get_template_directory_uri();?>/company/">所在地</a></li>
      </ul>
    </li>
   <li>
    <a href="<?php get_template_directory_uri();?>/contact/" data-hover="Contact">お問い合わせ</a>
      <ul>
         <li><a href="<?php get_template_directory_uri();?>/contact/">よくあるご質問</a></li>
         <li><a href="<?php get_template_directory_uri();?>/contact/">お問い合わせ先</a></li>
      </ul>
    </li>
</header>
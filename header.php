<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>さわやか歯科クリニック</title>
    <meta name="description" content="さわやか歯科クリニックは、小さなお子さまからご年配の方まで安心して通える、地域密着型の歯科医院です。">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-64UC4BEhTGwk3eGpak4nO2jqtl7liTS+juXkSJ2gPAQPmlClQO7s5UgCeR6US48g" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" defer></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- header -->
    <header id="header" class="header-container">
      <div class="header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="さわやか歯科クリニック">
        </a>
      </div>

      <!--nav-->
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item"><a href="medical.html">診療案内</a></li>
          <li class="header-nav-item"><a href="staff.html">スタッフ紹介</a></li>
          <li class="header-nav-item"><a href="news.html">お知らせ</a></li>
          <li class="header-nav-item"><a href="reservation.html">ご予約</a></li>
          <li class="header-nav-item"><a href="contact.html">お問い合わせ</a></li>
        </ul>
      </nav>

      <!-- ハンバーガーメニュー（SP） -->
      <button class="toggle-btn" type="button" aria-label="メニューを開く" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="mask"></div>
    </header>
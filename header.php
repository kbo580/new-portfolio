<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Noto+Sans+JP&display=swap" rel="stylesheet">

  <title>Yuta Kobayashi's Portfolio</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="pc-wrapper"><!--サイドバー用-->
    <header>
      <div class="inner">

        <h1 class="site-title"><a href="<?php echo home_url(); ?>">Yuta Kobayashi's<br>Portfolio</a></h1>

        <div class="sp-nav-wrapper">
          <div class="open-icon icon" id="open">メニュー</div>
          <!-- /open-icon-->

          <div class="fixed-icon-wrapper">
            <div class="open-icon icon" id="open">メニュー</div>
          </div>
          <!-- /fixed-icon-wrapper -->

          <nav id="sp-nav" class="sp-nav">
            <div class="close-icon icon" id="close">閉じる</div>

            <div class="sp-nav-list">
              <span class="nav-title title-label">メニュー</span>
              <ul class="nav-list">

                <?php get_template_part('template-parts/sp-nav-list');?>
                
              </ul>  
            </div>
            <!-- /sp-nav-list -->

          </nav>
          <!-- /sp-nav -->

        </div>
        <!-- /sp-nav-wrapper -->

        <nav class="pc-nav">
          <span class="nav-title title-label">メニュー</span>
          <ul class="nav-list">

            <?php get_template_part('template-parts/pc-nav-list');?>

          </ul>
        </nav>
        <!-- /pc-nav -->

      </div>
      <!-- /inner -->
    </header>

  <div class="contents-wrapper">
      
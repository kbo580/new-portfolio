<?php get_header(); ?>

<main>
  
  <section class="nf-page page__bgc">
    <div class="inner">
      
      <h2 class="section-heading">404 Not Found</h2>

      <?php get_template_part('template-parts/breadcrumb'); ?>
      <!-- /breadcrumbs -->

      <h3 class="apolo">申し訳ありません<br>お探しのページはありませんでした。</h3>
      <p class="top-link"><a href="<?php echo home_url(); ?>">コチラ</a>からTopページに戻ることができます。</p>

      <figure class="kbyt-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/kbyt-2.png" alt="">
      </figure>

      <p class="serif">「ページ」がきえたかもしれません…</p>
    </div>
  </section>

</main>

<?php get_footer(); ?>

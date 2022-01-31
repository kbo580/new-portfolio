<?php get_header(); ?>

  <main>
    
    <section class="works">
      
      <div class="inner">

        <h2 class="section-heading page-heading">製作物一覧</h2>
        <!-- /page-mv -->

        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- /breadcrumbs -->

        <div class="works-wrapper__archives">

          <ul class="items">
          <?php if(have_posts()): while(have_posts()) : the_post(); ?>

          <?php get_template_part('template-parts/works-loop');?>

          <?php endwhile; ?>
          <?php else : ?>
            <p>記事がありません</p>
          <?php endif; ?>

          </ul>
          <!-- /items -->
          
          <?php
          $args = array(
            'mid_size' => 1,
            'prev_text' => '<i class="fas fa-angle-left"></i>',
            'next_text' => '<i class="fas fa-angle-right"></i>', 
            'screen_reader_text' => ' ',
          );
          the_posts_pagination($args); 
          ?>

        </div>
        <!-- /works-wrapper__wrapper -->

      </div>
      <!-- /inner -->

    </section>
    
  </main>
<?php get_footer(); ?>
  
      

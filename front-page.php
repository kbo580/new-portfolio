<?php get_header(); ?>

  <main>
    <div class="mv">
      <div class="inner">
        <div class="mv-text">
          <p class="TextTyping">ポートフォリオ を ご覧いただきありがとうございますスクロールしてください</p>
        </div>
      </div>
    </div>
    <!-- /mv -->

    <section class="works fixed-bg" id="works">
      
      <div class="inner">
        <h2 class="section-heading">Works<span class="section-heading-sub-title">作ったもの</span></h2>

        <div class="works-wrapper__works">
          <h3 class="h3-title wood">架空案件</h3>
          <p class="works-sentence">架空の案件を想定し作成したサイトです。</p>
  
            <!-- 架空案件のループ -->
            <ul class="items">
              <?php if(have_posts()): while(have_posts()) : the_post(); ?>
  
              <?php get_template_part('template-parts/works-loop');?>
  
              <?php endwhile; ?>
              <?php else : ?>
                <p>記事がありません</p>
              <?php endif; ?>
  
            </ul>
            <!-- /items 架空案件のループ -->
        </div>
        <!-- /works-wrapper__works -->
          
        <a href="<?php echo home_url(); ?>/works" class="rpg-btn"><span class="btn-text">もっとみる</span></a>

        <div class="works-wrapper__cording">
          <h3 class="h3-title wood">練習用コーディング</h3>
          <p class="works-sentence">コーディングの練習で作成したサイトです。</p>
          <ul class="items">

            <?php 
              $query = new WP_Query(
                array(
                  'post_type' => 'trace',
                  'posts_per_page' => -1,
                )
              );
            ?>

            <?php if($query -> have_posts()) : ?> 
            <?php while($query -> have_posts()) : $query -> the_post(); ?>

            <?php get_template_part('template-parts/works-loop');?>
                
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?> 
              <h2>記事がありません</h2>
            <?php endif; ?>

          </ul>
          <!-- /items -->

        </div>
        <!-- /works-wrapper_cording -->

      </div>
      <!-- /inner -->

    </section>

    <section class="skill" id="skill">

      <div class="inner">
        
        <h2 class="section-heading section-heading-white">Skills<span class="section-heading-sub-title">できること</span></h2>

        <div class="skill-wrapper">

          <div class="skill-item">
            <figure class="skill_image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/images/design.png" alt="Webデザインの画像">
            </figure>

            <div class="skill_text-wrapper">
              <h3 class="h3-title">Webデザイン</h3>
              <p class="skill-text">サイトの設計、デザインを作成し、それをもとにWebサイトの製作ができます。またタブレットやスマートフォンに対応させたレスポンシブデザインもできます。</p>
            </div>
            <!-- /skill_text-wrapper -->

          </div>
          <!-- /skill-item -->

          <div class="skill-item">
            <figure class="skill_image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cording.png" alt="コーディングの画像">
            </figure>

            <div class="skill_text-wrapper">
              <h3 class="h3-title">コーディング</h3>
              <p class="skill-text">ワイヤーフレームをもとに忠実に再現をし、様々な動きやエフェクトをつけることができます。またメンテナンスがしやすく見やすいコードを書くように努めています。</p>
            </div>
            <!-- /skill_text-wrapper -->

          </div>
          <!-- /skill-item -->

          <div class="skill-item">
            <figure class="skill_image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/images/wordpress-image.png" alt="Word Press化の画像">
            </figure>

            <div class="skill_text-wrapper">
              <h3 class="h3-title">CMS化</h3>
              <p class="skill-text">Word Pressなどに代表されるものでHTMLとCSSで作成されたサイトを自身で容易に管理、更新ができるようなサイトに変更することができます。</p>
            </div>
            <!-- /skill_text-wrapper -->

          </div>
          <!-- /skill-item -->
          
        </div>
        <!-- /skill-wrapper -->

        <div class="skill_sets">

          <p class="skill_sets-label title-label">スキル</p>
          <div class="skill_sets-wrapper">
                
            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/html&css-icon.png);" class="skill_set-icon"></span>HTML / CSS</li>
              <li class="skill_set-explain">HTMLやCSSでのマークアップだけでなくSassを使用した記述も基本的な部分はできます。<br>またレスポンシブデザインへの対応も可能です。<br>エディターはVisual Studio Codeを使用しています。</li>
            </ul>
    
            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/javascript_icon.png);"class="skill_set-icon"></span>Java Script / jQuery</li>
              <li class="skill_set-explain">基本的な文法は一通り学習しましたので簡単なJavaScriptやjQueryを扱いWebサイトに動きをつけることができます。<br>あまりにも複雑なものは調べながらやるので時間がかかるかもしれません。</li>
            </ul>
    
            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/xd_icon.png);"class="skill_set-icon"></span>Adobe XD</li>
              <li class="skill_set-explain">自身のWebサイトを作成する場合はXDでワイヤーフレームを作成してコーディングをしていますので基本的な使用はできます。</li>
            </ul>
        
            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/wordpress_icon.png);"class="skill_set-icon"></span>Word Press</li>
              <li class="skill_set-explain">HTMLで作成したサイトをWord Press化し、更新、管理がしやすいようにすることができます。<br>また個人的なブログもWord Pressで運営しておりますので記事の更新や仕様には慣れております。</li>
            </ul>

            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/photoshop-icon.png);"class="skill_set-icon"></span>Photoshop</li>
              <li class="skill__set-explain">基本的な操作は一通りでき、画像の修正や編集、合成などができます。</li>
            </ul>

            <ul class="skill_set">
              <li class="skill_set-name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/illustrator_icon.png);"class="skill_set-icon"></span>illustrator</li>
              <li class="skill__set-explain">illustratorはまだまだ学習中ですが基本的な操作は可能です。</li>
            </ul>
  
          </div>
          <!-- /skill__sets-wrapper -->

        </div>
        <!-- /skill__sets -->

      </div>
      <!-- /inner -->
    </section>

    <section class="profile" id="profile">
      
      <div class="inner">
        <h2 class="section-heading">Profile<span class="section-heading-sub-title">自分について</span></h2>

        <div class="prof-wrapper">
          <h3 class="h3-title wood">About Me</h3>
          <h4 class="prof-name">Kobayashi Yuta</h4>

          <ul class="prof-text-list">
            <li>1985年生まれ愛知県名古屋市出身、在住の男です。</li>
            <li>中学、高校では運動部、大学時代はアカペラサークルに所属していました。</li>
            <li>サークルでは自分で編曲や耳コピをし、野外イベントやライブハウスで歌ったり、名古屋ブルーノートでのライブを経験させていただく機会もありました。</li>
            <li>その後勤務先の書店での仕事にてPOP作成などを通し、デザインと出会いWEBデザインに興味を持ちました</li>
            <li>独学で二年ほどWebデザインとコーディングを学び初め、2020年に退社し現在も日々学習をしております。</li>
            <li>趣味は野球観戦やゲーム(主にロックマンやドラクエ)と音楽ソフトの”Logic Pro”を使用したDTM。</li>
            <li>小さい頃からクリエイティブなことが好きでしたのでWebサイトの作成がとても楽しいです。</li>
            <li>疲れた時は飼っている二匹のパピヨンと戯れます。</li>
          </ul>
          <!-- /about-text-list -->
        </div>
        <!-- /profile-content-wrapper -->

        <div class="prof-wrapper">
          <h3 class="h3-title wood">Career</h3>
          
          <ul class="career-list">
            <li>
              <time>2009.03</time>
              <div class="career-content">愛知県内の大学を卒業後実家の飲食店を継ぐ。</div>
            </li>

            <li>
              <time>2012.06</time>
              <div class="career-content">廃業後、名古屋市内の書店にアルバイトとして入社。<br>基本的には接客販売や配達を担当。</div>
            </li>

            <li>
              <time>2017.08</time>
              <div class="career-content">その後正社員となり、在庫の確認や返本などの商品管理を任される。</div>
            </li>

            <li>
              <time>2018.09</time>
              <div class="career-content">同市内にある他書店に転職。接客販売やシフト管理、アルバイトの育成を中心に三店舗に渡り店舗運営などを経験。その中で業務の１つであった店内POPのデザインを学ぶうちにWebデザインに興味を持ち、書籍や動画による独学を初める。</div>
            </li>

            <li>
              <time>2020.04〜</time>
              <div class="career-content">退社しWebサイトの作成を集中的に二年ほど学習し現在に至る。</div>
            </li>
          </ul>
            <!-- /career-list -->
      
        </div>
        <!-- /career-wrapper -->

        <p class="blog-pr">学習のための<br><span class="under-line">ブログも書いております</span></p>

        <p class="blog-banner">
          <a href="https://kbyt-programming.com/" target=”_blank”>
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-logo.png" alt="ブログのバナー">
          </a>
        </p>

      </div>
      <!-- /inner -->

    </section>

    <section class="contact" id="contact">
      
      <div class="inner"> 
        <h2 class="section-heading section-heading-white">Contact<span class="section-heading-sub-title">お問い合わせ</span></h2>
        <p class="contact-greet">お仕事のご相談や採用のお話など、<br>何でもお気軽にお問い合わせください。</p>

        <!-- form-wrapperここから -->
        <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="35" title="ドラクエ風contact form"]'); ?>
          
        </div> 
        <!-- form-wrapperここまで -->

      </div>
    </section>
    
  </main>

<?php get_footer(); ?>
  
      

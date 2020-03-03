<?php get_header(); ?>
  <!-- トップラッパーここから -->
    <div class="top-wrapper">
      <div class="container">
        <div class="message">
            <h6>夢の中で過ごしてみませんか？</h6>
            <h2>極上の旅が体験できる。あなた自身へのご褒美に。</h2>
            <a href="#">Get in touch</a>
        </div>
      </div>
    </div>

  <!-- ツアーメニューここから -->
    <div class="tours">
      <div class="container">
          <h1>ツアーを選ぶ</h1>
          <p>観光</p>
          <p>アイランド</p>
          <p>シュノーケリング</p>
          <p>フィッシング</p>
          <p>マウンテン</p>
          <p>ナイトライフ</p>
      </div>
    </div>

  <!-- おすすめここから -->
    <div class="recommended">
      <div class="container">
        <h1>おすすめツアーの画像４列２段</h1>
      </div>
    </div>


  <!-- 新着情報ここから -->
    <div class="news">
      <div class="container">
        <h1>新着情報</h1>
        <dl id="news">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

          <dt><?php the_time('Y.m.d') ?></dt>
          <dd><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></dd>
        <?php endwhile; ?>
      <?php else : ?>
        <dd>記事がありませんでした</dd>
      <?php endif; ?>
        </dl>
      </div>
    </div>

  <!-- 予約背景ここから -->
    <div class="booking">
      <div class="container">
        <h1>ご予約はこちらから</h1>
      </div>
    </div>

  <!-- カンパニー紹介ここから -->
    <div class="about">
      <div class="container">
        <h1>オフィスの紹介エンター</h1>
      </div>
    </div>

    <!-- フッターここから -->
    <?php get_footer(); ?>

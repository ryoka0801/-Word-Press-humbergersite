<?php get_header(); ?>

<?php get_sidebar(); ?>

<main>
  <div class="c-site-ttl-bg bg-hum">
    <h2 class="c-site-ttl">ダミーサイト</h2>
  </div>
  <div class="unit-box">
    <article class="contents">
      <div class="c-main-cont bg-takeout">
        <h3 class="c-sub-tTl">
         <a href="<?php echo esc_url( home_url( '/take-out' ) ); ?>">Take Out</a>
        </h3>
        <div class="flex-column">
         <section class="main-cont-item">
           <h4 class="c-sub-head">小見出しが入ります</h4>
           <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキスト</p>
          </section>
          <section class="main-cont-item">
            <h4 class="c-sub-head">小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキスト</p>
          </section>
        </div>
      </div>
    </article>
  
    <article class="contents">
      <div class="c-main-cont bg-eatin">
        <h3 class="c-sub-tTl">
         <a href="<?php echo esc_url( home_url( '/eat-in' ) ); ?>">Eat In</a>
         </h3>
        <div class="flex-column">
          <section class="main-cont-item">
            <h4 class="c-sub-head">小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキスト</p>
          </section>
          <section class="main-cont-item">
            <h4 class="c-sub-head">小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキスト</p>
          </section>
        </div>
      </div>
    </article>
  </div>

  <article class="map">
    <div class="bg-map">
      <h3>見出しが入ります</h3>
      <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </div>
</article>
</main>




<?php get_footer(); ?>

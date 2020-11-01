      <div class="c-card" <?php post_class() ?>>
        <?php the_post_thumbnail(array(798,500), array('alt' => get_the_title())); ?>
       <section class="sub-card">
         <h2 id="sub-card-menu"><?php the_title(); ?></h2>
         <p id="sub-card-title">小見出しが入ります</p>
          <p id="sub-card-cont">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          <button class="btn">
            <a class="btn-text" href="<?php the_permalink(); ?>">
              詳しく見る
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="#fff" strokewidth="2" strokelinecap="round" strokelinejoin="round"><path d="M9 18l6-6-6-6" /></svg>
            </a>
          </button>
       </section>
      </div>
    </section>
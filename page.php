<?php get_header(); ?>

<?php get_sidebar(); ?>

<!-- メインループ -->
<?php if(have_posts()): the_post(); ?>
 	
 <article <?php post_class( 'article-content' ); ?>>
 
  <div class="main-ttl">
    <?php the_post_thumbnail(array(798,500), array('alt' => get_the_title())); ?>
    <h1 class="c-site-ttl"><?php the_title();?></h1>
  </div>
  
  <div class="content-wrapper">
    <?php the_content(); ?>
  </div>

  <div class="article-tag">
    <?php the_tags( '<ul><li>','/','</li></ul>' ); ?>
  </div>
 </article>

<?php endif; ?>



<?php get_footer(); ?>
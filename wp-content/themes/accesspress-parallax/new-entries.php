<?php query_posts('posts_per_page=5&ignore_sticky_posts=1'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="new-entry">
  <a href="<?php the_permalink(); ?>">
    <div class="new-entry-thumb">
      
    <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
      <p class="new-entry-title"><?php the_post_thumbnail( 'thumb75' ); ?></p>
    <?php else: // サムネイルを持っていないときの処理 ?>
      <p class="new-entry-title"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO IMAGE" title="NO IMAGE" width="75px" height="75" /></p>
    <?php endif; ?>
    </div><!-- /.new-entry-thumb -->
    
    <div class="new-entry-content">
      <p class="new-entry-title"><?php the_title();?></p>
    </div><!-- /.new-entry-content -->
  </a>

</div><!-- /.new-entry -->
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<br style="clear:both;">
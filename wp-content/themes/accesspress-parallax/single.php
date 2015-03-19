<?php
/**
 * The template for displaying all single posts.
 *
 * @package accesspress_parallax
 */

get_header(); ?>
<div id="submenu" class="submenu4C" style="margin-top:50px;">
<ul style="padding-left:1204px;">
	<li><a title="ブルベアについて" href="#about_us"></a></li>
</ul>
</div>
<div class="mid-content clearfix" style="">
	<div id="primary" class="content-area" style="margin-top:10px;">

		<main id="main" class="site-main" role="main">
<div class="blog_con">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'toukou', 'single' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

</div>
		<div class="side_bar">
	<?php get_sidebar(); ?>
	<div id="new-entries">

  <h4 style="margin-bottom:30px;margin-top:15px;border-bottom: 1px solid #E66432;padding: 8px 0;">人気記事</h4>
  <?php
 $wpp = array (
 'range' => 'weekly', /*集計タイプ*/
 'limit' => 5, /*表示数*/
 'post_type' => 'post', /*ポストタイプを指定*/
 'title_length' => '200', /*タイトル文字数上限*/
 'stats_comments' => '0', /*コメント数表示 1=表示、0=非表示*/
 'stats_views' => '1', /*閲覧数表示 1=表示、0=非表示*/
 'thumbnail_width' => '70', /*サムネイルの幅*/
 'thumbnail_height' => '50', /*サムネイルの高さ*/
 'excerpt_length' => '0', /*本文テキストの文字数*/
 'post_html' => '<div class="new-entry"><a href=""><div class="new-entry-thumb">{thumb}</div><div class="new-entry-content"><p class="new-entry-title">{title}</p><div class="post-stats">{stats}</div></div></a></div>', /*表示されるhtmlの設定*/
); ?>
<?php wpp_get_mostpopular($wpp); ?>

 <h4 style="margin-bottom:30px;margin-top:15px;border-bottom: 1px solid #E66432;padding: 8px 0;">新着記事</h4>
  <?php include( TEMPLATEPATH . '/new-entries.php' ); ?>

<a href="http://toushika-ura.jp/" style="text-decoration:none">
<div style="width:300px; height:80px; background:#ab6953; margin-bottom:30px; text-align:center; padding:25px; color:#fff;">
<h3>浦さんブログ</h3>
</div>
</a>

<a href="" style="text-decoration:none">
<div style="width:300px; height:80px; background:#8e8b8a; margin-bottom:30px; text-align:center; padding:25px; color:#fff;">
<h3>社長ブログ</h3>
</div>
</a>

  <div class="fb-like-box" data-href="https://www.facebook.com/BULLBEAR.Inc" data-width="300px" data-height="300px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

</div><!-- /#new-entries -->
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package accesspress_parallax
 */
?>

	</div><!-- #content -->
<div id="footer">
	<footer id="colophon" class="site-footer">
		<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) :?>
		<div class="top-footer footer-column-<?php echo accesspress_footer_count(); ?>">
			<div class="mid-content">
            <div class="top-footer-wrap clearfix">
				<?php if(is_active_sidebar('footer-1')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-2')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-3')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-4')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-4'); ?>
				</div>
				<?php endif; ?> 
            </div>
			</div>
		</div>
		<?php endif; ?>
		
		
		<div class="bottom-footer">
			<div class="mid-content clearfix">
				<div id="footer">
					<div class="holder"><a name="sitemap"></a>
						<div class="columns">
								<div class="column">
									<div class="title"><a href="/story/">ホーム</a></div>
									<div class="box">
										
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">代表挨拶</a></div>
									<div class="box">
										
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">会社案内</a></div>
									<div class="box">
										<ul>
											<li><a href="/evian/source.html"> - ブルベアについて</a></li>
											<li><a href="/evian/eu.html"> - 経営陣紹介</a></li>
											<li><a href="/evian/eu.html"> - 会社概要</a></li>
										</ul>
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">サービス紹介</a></div>
									<div class="box">
										<ul>
											<li><a href="/evian/eu.html"> - ジュウニントイロ</a></li>
											<li><a href="/evian/eu.html"> - 株式投資プラクティショナー</a></li>
										</ul>
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">ニュース</a></div>
									<div class="box">
										
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">採用情報</a></div>
									<div class="box">
										
									</div>
								</div>
								<div class="column">
									<div class="title"><a href="/story/">ブログ</a></div>
									<div class="box">
										<ul>
											<li><a href="/evian/eu.html"> - ブルベアブログ</a></li>
											<li><a href="/evian/eu.html"> - 社長ブログ</a></li>
											<li><a href="/evian/eu.html"> - 浦さんブログ</a></li>
										</ul>
									</div>
								</div>
						</div>
					</div>

					<div  class="copy-right">
					&copy; <?php echo date('Y')." "; bloginfo('name'); ?>, Inc. All Right Reserved.
				</div><!-- .copy-right -->
				<div class="site-info">
					
				</div><!-- .site-info -->
				</div>
		
		</div>
				
			</div>
	
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<div id="go-top"><a href="#page"><i class="fa fa-angle-up"></i></a></div>

<?php wp_footer(); ?>
</body>
</html>

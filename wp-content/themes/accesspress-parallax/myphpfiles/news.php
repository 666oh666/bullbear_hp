<div id="no">
                        <aside id="news">
            
            <div class="scroll">

                <?php /** カスタム投稿タイプ「お知らせ」を表示（CHAPTER 23） */
                $args = array(
                    'post_type'         => 'news',
                    'posts_per_page'    => 5,
                );

                $information = new WP_Query( $args );

                if( $information->have_posts() ): /** サブループ開始 */ ?>
                    <ul>
                        <?php while ( $information->have_posts() ) : $information->the_post(); ?>

                            
                                <div class="news_inner">
                                    <div class="news_row1">
                                        <li>
                                <span class="news_day"><?php echo get_the_date(); ?></span><span class="news_tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;</a></span>
                                  </li>
                              </div>
                                </div>
                            

                        <?php endwhile; ?>
                    </ul>
                <?php endif; /** サブループ終了 */
                wp_reset_postdata(); ?>

            </div>
        </aside><!-- / information -->
</div>
                        <p><a class="btn" href="<?php echo home_url( '/' ); ?>news/"><?php _e( 'ニュース一覧へ', 'accesspress_parallax' ); ?></a></p>
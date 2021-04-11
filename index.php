<?php get_header(); ?>
  <!-- main-contents -->
  <div class="contents">
    <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="container">
          <!-- most-new -->
<?php $args1 = array( 'posts_per_page' => 6, 'offset'=> 0, 'category' => array(6));
            $myposts1 = get_posts( $args1 );
            foreach ( $myposts1 as $post ) : setup_postdata( $post ); ?>
         <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
          <?php get_template_part( 'template/main-card' ); ?>
  <?php endif; ?>
            <?php endforeach; 
            wp_reset_postdata();?>
<!-- new -->
<h2>New Post</h2>
              <div class="row row-cols-1 row-cols-md-2 g-4">
<?php $args1 = array( 'posts_per_page' => 6, 'offset'=> 0, 'category' => array(11,2,5,3,7,4));
            $myposts1 = get_posts( $args1 );
            foreach ( $myposts1 as $post ) : setup_postdata( $post ); ?>

         <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
          <div class="col">
          <?php get_template_part( 'template/card' ); ?>
         </div>  
  <?php endif; ?>
            <?php endforeach; 
            wp_reset_postdata();?>
              </div>
            </div>
          </div>
          <!-- new -->
<!-- banner -->
          <div class="col-md-3 banners">
            <a href="https://portfolio.ym-tane.com/" target="blank">
              <div class="banner colour__blue">
                <div class="banner__items">
                  <h3>My Portfolio</h3>
                  <div class="banner__item"><img src="<?php echo get_theme_file_uri('/images/portfolio_logo.png'); ?>" alt="my portfolio"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
    </div>
  </div>
  <!-- /banner -->
  <?php get_footer(); ?>
</div>
</div>
    </div>
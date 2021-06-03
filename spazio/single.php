<?php get_header();?>

  

      <main class="main">
        <div class="single_product">
          <div class="container">
           <div class="new mt20">
            <p class="title_single"><?php the_title();?></p>
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
               <div class="img_news_single" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
              <div class="descr_news"><?php the_content();?></div>
            </div>
          </div>
        </div>
      <?php  endwhile;endif;?>
      
      </main>

<?php get_footer();?>



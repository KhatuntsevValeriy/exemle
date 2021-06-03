<?php get_header();?>



  <main class="main">

      <div class="container">
        <div class="wr_product">
          <h1 class="title_card" id="title_card"><?php the_title();?></h1>
          <?php if(have_posts()) : while(have_posts()) : the_post();
            $slider_card = get_field('slider_card');
            endwhile;
            endif;
           ?>   
          <div class="slider_card owl-carousel owl-theme">
              <?php if($slider_card){ ?>
               <?php foreach($slider_card as $k=>$item){ ?>   
                <div class="item" style='background-image: url(<?php echo $item["img_card"]["url"];?>)'></div>
              <?php } ?>
            <?php } ?>
          </div>

          <div class="card_text">    
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile;
              endif;
            ?>
          </div>


              <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
               <a href="#box_order" class=" btb_order popup-content">Cвяжитесь с нами</a>
              <?php endif; ?>
              
              <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
                <a href="#box_order" class=" btb_order popup-content">Зв'яжіться з нами</a>
              <?php endif; ?>


              
                 
 
        </div>
        
      </div>  
    </main>
    


    <div class="container1">
     <div id="box_order" class="popup mfp-hide">

        <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
         <?php echo do_shortcode('[contact-form-7 id="8" title="form"]') ?>
        <?php endif; ?>
        
        <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
          <?php echo do_shortcode('[contact-form-7 id="247" title="form_ukr"]') ?>
        <?php endif; ?>

      </div>
    </div>

    <script>
      jQuery(document).ready(function($){
        var title_card = "<?php the_title(); ?>";
        var link_card = "<?php the_permalink(); ?>";
        document.getElementById('productname').value = title_card;
        document.getElementById('productlink').value = link_card;
      });
    </script>

<?php get_footer();?>
